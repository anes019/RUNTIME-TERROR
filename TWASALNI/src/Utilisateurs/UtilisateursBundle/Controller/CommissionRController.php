<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\CommissionR;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;

class CommissionRController extends Controller
{
    public function readAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireR::class)->find($id);
        $liste=$em->getRepository(CommissionR::class)->findCommission($inventaire->getPartenaire()->getId());

        return $this->render('@UtilisateursUtilisateurs/CommissionR/read.html.twig',array(
            "liste"=>$liste,"inventaire"=>$inventaire
        ));
    }
}
