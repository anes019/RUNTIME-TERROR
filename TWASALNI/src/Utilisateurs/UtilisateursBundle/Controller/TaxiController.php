<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Utilisateurs\UtilisateursBundle\Entity\Taxi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Taxi controller.
 *
 */
class TaxiController extends Controller
{
    /**
     * Lists all taxi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $taxis = $em->getRepository('UtilisateursUtilisateursBundle:Taxi')->findAll();

        return $this->render('taxi/index.html.twig', array(
            'taxis' => $taxis,
        ));
    }

    /**
     * Lists all taxi entities front.
     *
     */
    public function indexFrontAction()
    {
        $em = $this->getDoctrine()->getManager();

        $taxis = $em->getRepository('UtilisateursUtilisateursBundle:Partenaire')->findAll();


        return $this->render('taxi/indexFront.html.twig', array(
            'taxis' => $taxis,
        ));
    }

    /**
     * Creates a new taxi entity.
     *
     */
    public function newAction(Request $request)
    {
        $taxi = new Taxi();
        $form = $this->createForm('Utilisateurs\UtilisateursBundle\Form\TaxiType', $taxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $photo=$request->get('photo');
            $taxi->setImage($photo);
            $em->persist($taxi);
            $em->flush();


            $mailer= $this->get('mailer');
            $msg = (new \Swift_Message('Reservation de taxi '))
                ->setFrom('noreply@twasalni.tn')
                ->setTo('arbi.saidi8@gmail.com')
                ->setBody('Merci pour votre reservation');
            $mailer->send($msg);
            return $this->redirectToRoute('taxi_index');
        }

        return $this->render('taxi/new.html.twig', array(
            'taxi' => $taxi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a taxi entity.
     *
     */
    public function showAction(Taxi $taxi)
    {
        $deleteForm = $this->createDeleteForm($taxi);

        return $this->render('taxi/show.html.twig', array(
            'taxi' => $taxi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing taxi entity.
     *
     */
    public function editAction(Request $request, Taxi $taxi)
    {
        $deleteForm = $this->createDeleteForm($taxi);
        $editForm = $this->createForm('Utilisateurs\UtilisateursBundle\Form\TaxiType', $taxi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em=$this->getDoctrine()->getManager();
           $em->persist($taxi);
            $em->flush();


            return $this->redirectToRoute('taxi_edit', array('id' => $taxi->getMatricul()));
        }

        return $this->render('taxi/edit.html.twig', array(
            'taxi' => $taxi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a taxi entity.
     *
     */
    public function deleteAction(Request $request, Taxi $taxi)
    {
        $form = $this->createDeleteForm($taxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($taxi);
            $em->flush();
        }

        return $this->redirectToRoute('taxi_index');
    }

    /**
     * Creates a form to delete a taxi entity.
     *
     * @param Taxi $taxi The taxi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Taxi $taxi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('taxi_delete', array('id' => $taxi->getMatricul())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
