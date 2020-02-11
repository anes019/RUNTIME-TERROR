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
            //$arrayinv=$em->getRepository(InventaireC::class)->findInventaire($id);

            $part=$em->getRepository(Utilisateurs::class)->find($id);

            $course->setPrix(200);
            $user=$this->container->get('security.token_storage')->getToken()->getUser();
            $client=$em->getRepository(Utilisateurs::class)->find($user->getId());
            $course->setClient($client);
            $course->setPartenaire($part);
            $commission->setCourse($course);
            $commission->setPartenaire($course->getPartenaire());
            $commission->setPourcentage(0.15);
            $commission->setDateCommission($course->getDateCourse());

            /*if(count($arrayinv)==0)
            {
                $inventaire->setPartenaire($part);
                $inventaire->setMontant($course->getPrix()*$commission->getPourcentage());
                $inventaire->setDateI(date('r'));
            }
            else
            {
                $inventaire->setMontant($inventaire->getMontant()+$course->getPrix()*$commission->getPourcentage());
            }*/


            //$em->persist($inventaire);
            $em->persist($commission);
            $em->persist($course);

            $em->flush();
            return $this->redirectToRoute('course_read');
        }
        return $this->render('@UtilisateursUtilisateurs/Courses/create.html.twig', array(
            'form'=>$form->createView(),'table'=>$table
        ));
    }


    public function readAction()
    {
        $em=$this->getDoctrine();
        $liste=$em->getRepository(Courses::class)->findAll();

        return $this->render('@UtilisateursUtilisateurs/Courses/read.html.twig',array(
            "liste"=>$liste
        ));
    }



    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $course=$em->getRepository(Courses::class)->find($id);
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
