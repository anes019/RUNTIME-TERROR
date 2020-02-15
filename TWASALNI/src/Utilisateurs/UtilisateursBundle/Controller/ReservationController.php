<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Utilisateurs\UtilisateursBundle\Entity\CommissionR;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;
use Utilisateurs\UtilisateursBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

/**
 * Reservation controller.
 *
 */
class ReservationController extends Controller
{
    /**
     * Lists all reservation entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('UtilisateursUtilisateursBundle:Reservation')->findAll();
        /**
         * @var $pagination \Knp\Component\Pager\Paginator
         */
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($reservations,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',1));
        return $this->render('reservation/index.html.twig', array(
            'reservations' => $result,
        ));
    }

    /**
     * Creates a new reservation entity.
     *
     */
    public function newAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reservation = new Reservation();
        $commission= new CommissionR();
        $inventaire= new InventaireR();

        $reservation->setPrix(20);
        $form = $this->createForm('Utilisateurs\UtilisateursBundle\Form\ReservationType', $reservation);
        $table=$em->getRepository(Utilisateurs::class)->findrole();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id=$request->get('partenaire');
            $arrayinv=$em->getRepository(InventaireR::class)->findInventaireR($id);
            $em = $this->getDoctrine()->getManager();

            $part=$em->getRepository(Utilisateurs::class)->find($id);
            $reservation->setPrix(100);
            $reservation->setPartenaire($part);
            $user=$this->container->get('security.token_storage')->getToken()->getUser();
            $client=$em->getRepository(Utilisateurs::class)->find($user->getId());
            $reservation->setClient($client);
            $commission->setReservation($reservation);
            $commission->setPartenaire($reservation->getPartenaire());
            $commission->setPourcentage(0.15);
            $commission->setDateCommission($reservation->getDate());

            if(count($arrayinv)==0)
            {
                $inventaire->setPartenaire($part);
                $inventaire->setMontant($reservation->getPrix()*$commission->getPourcentage());
                 $inventaire->setDateI($reservation->getDate());
            }
            else
            {
                $inventaire=$arrayinv[0];
                $inventaire->setMontant($inventaire->getMontant()+$reservation->getPrix()*$commission->getPourcentage());
            }
            $commission->setInventaireR($inventaire);


            $em->persist($inventaire);
            $em->persist($commission);

            $em->persist($reservation);
            $em->flush();
          $this->addFlash('success','Votre Reservation a été prise en charge');
            return $this->redirectToRoute('reservation_new', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),'table'=>$table
        ));
    }

    /**
     * Finds and displays a reservation entity.
     *
     */
    public function showAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('Utilisateurs\UtilisateursBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_edit', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($reservation) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('GET')
            ->getForm()
        ;
    }
}
