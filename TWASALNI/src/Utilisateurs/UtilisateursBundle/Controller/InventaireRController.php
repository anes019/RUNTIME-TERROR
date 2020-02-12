<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;

class InventaireRController extends Controller
{
    public function readAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireR::class)->findAll();
        return $this->render('@UtilisateursUtilisateurs/InventaireR/read.html.twig',array(
            "liste"=>$liste
        ));
    }


}
