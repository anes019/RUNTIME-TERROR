<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\Commission;
use Utilisateurs\UtilisateursBundle\Entity\InventaireC;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\HttpFoundation\Request;


class InventaireController extends Controller
{
    public function readAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireC::class)->findInventaireNonPaye();
        $montantTotal=0;
        foreach ($liste as $row)
        {
            $montantTotal+=$row->getMontant();

        }

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



        return $this->render('@UtilisateursUtilisateurs/Inventaire/read.html.twig',array(
            "liste"=>$liste,"piechart"=>$pieChart
        ));
    }

    public function payerAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireC::class)->find($id);
        $amount=floor($inventaire->getMontant())*1000;

        if ($request->isMethod("GET")) {
            $inventaire->setPaye(1);
            $em->persist($inventaire);
            $em->flush();

            \Stripe\Stripe::setApiKey("sk_test_20u9a1vhbiijZzdUsFvnxgaT00Xr4NPWPh");


            //dump($amount);
            // Token is created using Checkout or Elements!
            // Get the payment token ID submitted by the form:
            $charge = \Stripe\Charge::create([
                'amount' => $amount,
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => 'tok_visa',
            ]);
            return $this->render('@UtilisateursUtilisateurs/Inventaire/paiement.html.twig', array('id'=>$id));

        }



        return $this->redirectToRoute('inventaire_read');

    }
    public function nonpayerAction($id,$partenaire_id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireC::class)->find($id);
        $oldinventaire=$em->getRepository(InventaireC::class)->findPartenaireNonpayé($partenaire_id);
        if(count($oldinventaire)==0)
        {
            $inventaire->setPaye(0);
            $em->persist($inventaire);
        }
        else
        {
            $inv=$oldinventaire[0];
            $inv->setMontant($inv->getMontant()+$inventaire->getMontant());
            $courses=$em->getRepository(Commission::class)->findComissionbyInventaire($inventaire->getId());
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
        return $this->redirectToRoute('inventaire_readArchive');


    }

    public function archiveAction()
    {

        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireC::class)->findInventairePaye();
        return $this->render('@UtilisateursUtilisateurs/Inventaire/readArchive.html.twig',array(
            "liste"=>$liste
        ));
    }





}
