<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\Commission;
use Utilisateurs\UtilisateursBundle\Entity\InventaireC;

class InventaireController extends Controller
{
    public function readAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireC::class)->findInventaireNonPaye();
        return $this->render('@UtilisateursUtilisateurs/Inventaire/read.html.twig',array(
            "liste"=>$liste
        ));
    }

    public function payerAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireC::class)->find($id);
        $inventaire->setPaye(1);
        $em->persist($inventaire);
        $em->flush();
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
