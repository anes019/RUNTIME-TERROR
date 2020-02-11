<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\InventaireC;

class InventaireController extends Controller
{
    public function readAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository(InventaireC::class)->findAll();
        return $this->render('@UtilisateursUtilisateurs/Inventaire/read.html.twig',array(
            "liste"=>$liste
        ));
    }


}
