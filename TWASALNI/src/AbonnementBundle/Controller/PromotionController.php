<?php

namespace AbonnementBundle\Controller;

use AbonnementBundle\Entity\Promotion;
use AbonnementBundle\Form\PromotionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PromotionController extends Controller
{
    public function CreatePromotionAction(Request $request)
    {
        //creation objet vide
        $Promotion = new Promotion();
        // creer notre formulaire
        $form=$this->createForm(PromotionType::class,$Promotion);
        //recuperation de donnes
        $form=$form->handleRequest($request);
        //test sur les donnees
        if($form->isValid())
        {
            //creation d un objet doctrine
            $em=$this->getDoctrine()->getManager();
            //persister les donnees dans ORM
            $em->persist($Promotion);
            //sauvegarder les donnees dans BD
            $em->flush();
            return $this->redirectToRoute('_read_promotion');
        }
        return $this->render('@Abonnement/Promotion/create_promotion.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function UpdatePromotionAction($id,Request $request)
    {

        //recuperation de l objet selon l ID envoyer par user
        //em stands for entity manager
        $em=$this->getDoctrine()->getManager();

        $Promotion=$em->getRepository(Promotion::class)->find($id);
        // creer notre formulaire
        $form=$this->createForm(PromotionType::class,$Promotion);
        //recuperation de donnes
        $form=$form->handleRequest($request);
        //test sur les donnees
        if($form->isValid())
        {
            //creation d un objet doctrine
            //$em=$this->getDoctrine()->getManager();

            //sauvegarder les donnees dans BD
            $em->flush();
            return $this->redirectToRoute('_read_promotion');
        }
        return $this->render('@Abonnement/Promotion/update_promotion.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function DeletePromotionAction($id)
    {
        $em=$this->getDoctrine()->getManager();

        $Promotion=$em->getRepository(Promotion::class)->find($id);
        $em->remove($Promotion);
        $em->flush();
        return $this->redirectToRoute('_read_promotion');
    }

    public function ReadPromotionAction(Request $request)
    {
        //Creer un objet Doctrine
        $em=$this->getDoctrine();
        $tab=$em->getRepository(Promotion::class)->findAll();
        return $this->render('@Abonnement/Promotion/read_promotion.html.twig', array(
            'Promotion'=>$tab
        ));
    }

}
