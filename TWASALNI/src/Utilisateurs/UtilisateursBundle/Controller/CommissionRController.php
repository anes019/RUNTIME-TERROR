<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\CommissionR;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;

class CommissionRController extends Controller
{
    public function readAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireR::class)->find($id);
        $liste=$em->getRepository(CommissionR::class)->findCommission($inventaire->getPartenaire()->getId());
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($liste,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',4));
        return $this->render('@UtilisateursUtilisateurs/CommissionR/read.html.twig',array(
            "liste"=>$result,"inventaire"=>$inventaire
        ));
    }
}
