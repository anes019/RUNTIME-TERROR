<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\Commission;
use Utilisateurs\UtilisateursBundle\Entity\InventaireC;

class CommissionController extends Controller
{
    public function readAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireC::class)->find($id);
        $liste=$em->getRepository(Commission::class)->findCommission($inventaire->getPartenaire()->getId());

        return $this->render('@UtilisateursUtilisateurs/Commission/read.html.twig',array(
            "liste"=>$liste,"inventaire"=>$inventaire
        ));
    }
}
