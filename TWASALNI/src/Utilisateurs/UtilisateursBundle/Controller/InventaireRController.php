<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\CommissionR;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

class InventaireRController extends Controller
{
    public function readAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireR::class)->findInventaireNonPaye();
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($liste,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',1));


        $data= array();
        $stat=['inventaire','montant'];
        $nb=0;
        array_push($data,$stat);
        foreach ($liste as $row)
        {
            $stat=array();
//            array_push($stat,$row->getPartenaire()->getNom(),(($row->getMontant())*100)/$montantTotal);
//            $nb=($row->getMontant()*100)/$montantTotal;

            array_push($stat,$row->getPartenaire()->getNom(),$row->getMontant());

            $nb=$row->getMontant();

            $stat=[$row->getPartenaire()->getNom()." ".$row->getPartenaire()->getPrenom(),$nb];
            array_push($data,$stat);
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($data);
        $pieChart->getOptions()->setTitle('Montant à payer par chaque partenaire');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(1125);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#f47684');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('@UtilisateursUtilisateurs/InventaireR/read.html.twig',array(
            "liste"=>$result,"piechart"=>$pieChart
        ));
    }
    public function doneAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireR::class)->find($id);
        $commission=$em->getRepository(CommissionR::class)->find($id);

        $inventaire->setDone(1);
        $em->persist($inventaire);
        $em->flush();
        return $this->redirectToRoute('inventaireR_read');

    }

    public function NotdoneAction($id,$partenaire_id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireR::class)->find($id);
        $oldinventaire=$em->getRepository(InventaireR::class)->findPartenaireNonpaye($partenaire_id);
        if(count($oldinventaire)==0)
        {
            $inventaire->setDone(0);
            $em->persist($inventaire);
        }
        else
        {
            $inv=$oldinventaire[0];
            $inv->setMontant($inv->getMontant()+$inventaire->getMontant());
            $courses=$em->getRepository(CommissionR::class)->findComissionbyInventaire($inventaire->getId());
            foreach ($courses as $row)
            {
                $row->setInventairec($inv);
            }
            $em->remove($inventaire);
            $em->persist($inv);
            foreach ($courses as $row)
            {
                $em->persist($row);
            }
        }
        $em->flush();
        return $this->redirectToRoute('inventaire_readArchivereservation');


    }

    public function archiveAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireR::class)->findInventairePaye();
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($liste,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',1));
        return $this->render('@UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig',array(
            "liste"=>$result
        ));
    }

}
