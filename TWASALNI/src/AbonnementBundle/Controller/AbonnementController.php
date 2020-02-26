<?php

namespace AbonnementBundle\Controller;

use AbonnementBundle\Entity\Abonnement;
use AbonnementBundle\Form\AbonnementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class AbonnementController extends Controller
{
    public function CreateAbonnementAction(Request $request)
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            echo"<script>alert('You have to login first')</script>";
            return $this->redirectToRoute('fos_user_security_login');
        }
        //creation objet vide
        $Abonnement = new Abonnement();
        // creer notre formulaire
        $form=$this->createForm(AbonnementType::class,$Abonnement);
        //recuperation de donnes
        $form=$form->handleRequest($request);
        //test sur les donnees
        if($form->isValid())
        {

            //creation d un objet doctrine
            $em=$this->getDoctrine()->getManager();
            $user=$this->container->get('security.token_storage')->getToken()->getUser();

            $client=$em->getRepository(Utilisateurs::class)->find($user->getId());
            $email=$client->getEmail();
            $id=$client->getID();
             $Abonnement->setUtilisateurs($client);
            //persister les donnees dans ORM
            $em->persist($Abonnement);
            //sauvegarder les donnees dans BD
            $em->flush();

            $mailer= $this->get('mailer');
                $msg = (new \Swift_Message('Abonnement creer'))
                    ->setFrom('noreply@twasalni.com')
                    ->setTo($email);
            $mailer->send($msg);

            return $this->redirectToRoute('_read_abonnement');
        }
        return $this->render('@Abonnement/Abonnement/create_abonnement.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function ReadAbonnementAction()
    {
        //Creer un objet Doctrine
        $em=$this->getDoctrine();
        $tab=$em->getRepository(Abonnement::class)->findAll();
        return $this->render('@Abonnement/Abonnement/read_abonnement.html.twig', array(
            'Abonnement'=>$tab
        ));
    }

    public function UpdateAbonnementAction($id,Request $request)
    {
        //recuperation de l objet selon l ID envoyer par user
        //em stands for entity manager
        $em=$this->getDoctrine()->getManager();

        $Abonnement=$em->getRepository(Abonnement::class)->find($id);
        // creer notre formulaire
        $form=$this->createForm(AbonnementType::class,$Abonnement);
        //recuperation de donnes
        $form=$form->handleRequest($request);
        //test sur les donnees
        if($form->isValid())
        {
            //creation d un objet doctrine
            //$em=$this->getDoctrine()->getManager();

            //sauvegarder les donnees dans BD
            $em->flush();
            return $this->redirectToRoute('_read_abonnement');
        }
        return $this->render('@Abonnement/Abonnement/update_abonnement.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function DeleteAbonnementAction($id)
    {
        $em=$this->getDoctrine()->getManager();

        $Abonnement=$em->getRepository(Abonnement::class)->find($id);
        $em->remove($Abonnement);
        $em->flush();
        return $this->redirectToRoute('_read_abonnement');
    }

}
