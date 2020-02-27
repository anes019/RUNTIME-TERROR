<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Utilisateurs\UtilisateursBundle\Entity\Partenaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

/**
 * Partenaire controller.
 *
 * @Route("partenaire")
 */
class PartenaireController extends Controller
{
    /**
     * Lists all partenaire entities.
     *
     * @Route("/", name="admin_partenaire_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $partenaires = $em->getRepository('UtilisateursUtilisateursBundle:Partenaire')->findAll();
        $nbTotal=0;
        foreach ($partenaires as $row)
        {
            $nbTotal+=$row->getNb();
        }
        $data= array();
        $stat=['inventaire','montant'];
        $nb=0;
        array_push($data,$stat);
        foreach ($partenaires as $row)
        {
            $stat=array();
//            array_push($stat,$row->getPartenaire()->getNom(),(($row->getMontant())*100)/$montantTotal);
//            $nb=($row->getMontant()*100)/$montantTotal;
            array_push($stat,$row->getNom(),$row->getNb());
            $nb=$row->getNb();
            $stat=[$row->getNom()." ".$row->getPrenom(),$nb];
            array_push($data,$stat);
        }
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($data);
        $pieChart->getOptions()->setTitle('Nombre de courses par chaque partenaire');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(1125);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#f47684');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);



        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $partenaires, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );

        return $this->render('partenaire/index.html.twig', array(
            'partenaires' => $partenaires,
            'pagination' => $pagination,
            'piechart'=> $pieChart
        ));
    }

    /**
     * Creates a new partenaire entity.
     *
     * @Route("/new", name="partenaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $partenaire = new Partenaire();
        $form = $this->createForm('Utilisateurs\UtilisateursBundle\Form\PartenaireType', $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $email=$partenaire->getMail();
            $partenaire->setNb(0);
            $em->persist($partenaire);
            $em->flush();
            $mailer= $this->get('mailer');
            $msg = (new \Swift_Message('Reservation de taxi '))
                ->setFrom('noreply@twasalni.tn')
                ->setTo($email )
                //->setSubject('Bienvenu à Twasalni!')
                ->setBody('http://localhost/RUNTIME-TERROR/TWASALNI/web/app_dev.php/admin/changermdp/'.$partenaire->getId());
            $mailer->send($msg);
            return $this->redirectToRoute('partenaire_show', array('id' => $partenaire->getId()));
        }

        return $this->render('partenaire/new.html.twig', array(
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a partenaire entity.
     *
     * @Route("/{id}", name="partenaire_show")
     * @Method("GET")
     */
    public function showAction(Partenaire $partenaire)
    {
        $deleteForm = $this->createDeleteForm($partenaire);

        return $this->render('partenaire/show.html.twig', array(
            'partenaire' => $partenaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function rendermdpAction($id)
    {
        return $this->render('partenaire/changeMdp.html.twig', array(
            'id' => $id

        ));
    }


    public function changermdpAction($id, Request $request)
    {

        $mdp=$request->get('mdp');
        $confirm=$request->get('double');
        if($mdp==$confirm)
        {
            $em=$this->getDoctrine()->getManager();
            $partenaire=$em->getRepository(Partenaire::class)->find($id);
            $partenaire->setMdp($mdp);
            $em->persist($partenaire);
            $em->flush();
            $deleteForm = $this->createDeleteForm($partenaire);

            return $this->render('partenaire/show.html.twig', array(
                'partenaire' => $partenaire,
                'delete_form' => $deleteForm->createView(),
            ));

        }


    }


    /**
     * Displays a form to edit an existing partenaire entity.
     *
     * @Route("/{id}/edit", name="partenaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Partenaire $partenaire)
    {
        $deleteForm = $this->createDeleteForm($partenaire);
        $editForm = $this->createForm('Utilisateurs\UtilisateursBundle\Form\PartenaireType', $partenaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            //return $this->redirectToRoute('partenaire_edit', array('id' => $partenaire->getId()));
        }

        return $this->render('partenaire/edit.html.twig', array(
            'partenaire' => $partenaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a partenaire entity.
     *
     * @Route("/{id}", name="partenaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Partenaire $partenaire)
    {
        $form = $this->createDeleteForm($partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($partenaire);
            $em->flush();
        }

        return $this->redirectToRoute('admin_partenaire_index');
    }

    /**
     * Creates a form to delete a partenaire entity.
     *
     * @param Partenaire $partenaire The partenaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Partenaire $partenaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('partenaire_delete', array('id' => $partenaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     *  Affiche La liste des Partenaires Dans le form
     */
    public function ListeFrontAction(){
        $em=$this->getDoctrine()->getManager();
        $part=$em->getRepository(Partenaire::class)->findAll();
        return $this->render('partenaire/listeFront.html.twig',[
            'partenaire'=>$part
        ]);
    }

    public function DetailPartenaireAction($id){
        $em=$this->getDoctrine()->getManager();
        $tabP=$em->getRepository(Partenaire::class)->findBy([],[],3);
        $part=$em->getRepository(Partenaire::class)->find($id);
        return $this->render('partenaire/DetailTaxi.html.twig',[
            'tabP'=>$tabP,
            'part'=>$part,
        ]);
    }
}
