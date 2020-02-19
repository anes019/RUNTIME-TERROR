<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Commission;
use Utilisateurs\UtilisateursBundle\Entity\Courses;
use Utilisateurs\UtilisateursBundle\Entity\InventaireC;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
use Utilisateurs\UtilisateursBundle\Form\CoursesType;

class CoursesController extends Controller
{
    public function createAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $course = new Courses();
        $date = new \DateTime();
        $course->setDateCourse($date);
        $commission= new Commission();
        $inventaire= new InventaireC();
        $course->setPrix(20);
        $form=$this->createForm(CoursesType::class,$course);
        $table=$em->getRepository(Utilisateurs::class)->findrole();

        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $id=$request->get('partenaire');
           //hedhi
            $arrayinv=$em->getRepository(InventaireC::class)->findInventaire($id);

            $part=$em->getRepository(Utilisateurs::class)->find($id);

            $course->setPrix(200);
            $securityContext = $this->container->get('security.authorization_checker');
            if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))
            {
                echo"<script>alert('You have to login first')</script>";
                return $this->redirectToRoute('fos_user_security_login');
            }

            $user=$this->container->get('security.token_storage')->getToken()->getUser();



            $client=$em->getRepository(Utilisateurs::class)->find($user->getId());
            $course->setClient($client);
            $course->setPartenaire($part);
            $commission->setCourse($course);
            $commission->setPartenaire($course->getPartenaire());
            $commission->setPourcentage(0.15);
            $commission->setDateCommission($course->getDateCourse());

            if(count($arrayinv)==0)
            {
                $inventaire->setPartenaire($part);
                $inventaire->setMontant($course->getPrix()*$commission->getPourcentage());
                $inventaire->setDateI($course->getDateCourse());
                $inventaire->setPaye(0);
            }
            else
            {
                $inventaire=$arrayinv[0];
                $inventaire->setMontant($inventaire->getMontant()+$course->getPrix()*$commission->getPourcentage());
            }
            $commission->setInventairec($inventaire);


            $em->persist($inventaire);
            $em->persist($commission);
            $em->persist($course);

            $basic  = new \Nexmo\Client\Credentials\Basic('a7c8d346', '06RtyiF7aVUXE90L');
            $client =new \Nexmo\Client($basic);



          /* $message = $client->message()->send([
                'to' => '21622842875',
                'from' => 'Arbi',
                'text' => 'Merci pour votre validation'
            ]);*/
            $mailer= $this->get('mailer');
            $msg = (new \Swift_Message('Reservation de taxi '))
                ->setFrom('noreply@twasalni.tn')
                ->setTo('arbi.saidi8@gmail.com')
                ->setBody('Merci pour votre reservation');

            $mailer->send($msg);

            $em->flush();
            $this->addFlash('success','Votre Reservation a été prise en charge');
            return $this->redirectToRoute('course_create');
        }

        return $this->render('@UtilisateursUtilisateurs/Courses/create.html.twig', array(
            'form'=>$form->createView(),'table'=>$table
        ));
    }


    public function readAction(Request $request)
    {
        $em=$this->getDoctrine();

        $liste=$em->getRepository(Courses::class)->findAll();
        /**
         * @var $pagination \Knp\Component\Pager\Paginator
         */
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($liste,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5));

        return $this->render('@UtilisateursUtilisateurs/Courses/read.html.twig',array(
            "liste"=>$result
        ));
    }



    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $course=$em->getRepository(Courses::class)->find($id);
        $commission=$em->getRepository(Commission::class)->findCommissionbyCourse($id);
        $inventaire=$em->getRepository(InventaireC::class)->find($commission[0]->getInventairec()->getId());
        $inventaire->setMontant($inventaire->getMontant()-$course->getPrix()*$commission[0]->getPourcentage());

        $com=$commission[0];
        $em->remove($com);
        if($inventaire->getMontant()==0)
        {
            $em->remove($inventaire);
        }
        else {
            $em->persist($inventaire);
        }
        $em->remove($course);
        $em->flush();
        return $this->redirectToRoute('course_read');

    }

    public function updateAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $course=$em->getRepository(Courses::class)->find($id);
        $form=$this->createForm(CoursesType::class,$course);
        $form=$form->handleRequest($request);
        //test sur les donnees
        if($form->isValid())
        {
            //creation d un objet doctrine
            $em=$this->getDoctrine()->getManager();
            $client=$em->getRepository(Utilisateurs::class)->find(2);
            $course->setClient($client);
            //persister les donnees dans ORM
            $em->persist($course);
            //sauvegarder les donnees dans BD
            $em->flush();
            return $this->redirectToRoute('course_read');
        }
        return $this->render('@UtilisateursUtilisateurs/Courses/update.html.twig', array(
            'form'=>$form->createView()
        ));



    }

}
