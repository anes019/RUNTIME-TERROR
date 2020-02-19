<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Utilisateurs\UtilisateursBundle\Entity\CommissionR;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;
use Utilisateurs\UtilisateursBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
use Dompdf\Dompdf;
use Dompdf\Options;

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

        $reservations = $em->getRepository('UtilisateursUtilisateursBundle:Reservation')->myfindAll();
        /**
         * @var $pagination \Knp\Component\Pager\Paginator
         */
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($reservations,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5));
        return $this->render('reservation/index.html.twig', array(
            'reservations' => $result,
        ));
    }


    public function listarchiveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('UtilisateursUtilisateursBundle:Reservation')->myfindAllarchive();
        /**
         * @var $pagination \Knp\Component\Pager\Paginator
         */
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($reservations,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5));
        return $this->render('reservation/archive.html.twig', array(
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
        $reservation->setpointAchat('');
        $reservation->setdestination('');
        $form = $this->createForm('Utilisateurs\UtilisateursBundle\Form\ReservationType', $reservation);
        $table=$em->getRepository(Utilisateurs::class)->findrole();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id=$request->get('partenaire');
            $arrayinv=$em->getRepository(InventaireR::class)->findInventaireR($id);
            $em = $this->getDoctrine()->getManager();
            $from = $request->get('from');
            $to = $request->get('to');
            $latitude_view2 = $request->get('latitude_view2');
            $latitude_view= $request->get('latitude_view');
            $longitude_view = $request->get('longitude_view');
            $longitude_view2 = $request->get('longitude_view2');
            $distance=sqrt(pow($longitude_view- $longitude_view2,2)-  pow($latitude_view2-$latitude_view,2));
            $reservation->setpointAchat($from);
            $reservation->setdestination($to);
            $part=$em->getRepository(Utilisateurs::class)->find($id);

            $reservation->setPrix($distance);
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

//            $mailer= $this->get('mailer');
//            $msg = (new \Swift_Message('Reservation de taxi '))
//                ->setFrom('noreply@twasalni.tn')
//                ->setTo('anestemani00@gmail.com')
//                ->setBody('Merci pour votre reservation');
//            $mailer->send($msg);
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

    public function showarchiveAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/showarchive.html.twig', array(
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
    public function archiveAction(Request $request, Reservation $reservation,$id)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($reservation) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setEtat('traite');
            $list=$reservation->getListAchats();
            $rem=$reservation->getRemarques();
            $basic  = new \Nexmo\Client\Credentials\Basic('a7c8d346', '06RtyiF7aVUXE90L');
            $client =new \Nexmo\Client($basic);
//            $message = $client->message()->send([
//                'to' => '21652715563',
//                'from' => 'Twasalni?',
//                'text' => 'Votre reservation est confirmé , liste achats:  '.$list.'  remarques:   '.$rem.'',
//            ]);
            $em->flush();
            $this->addFlash('success','reservation acceptée , votre client est notifié');
        }

        return $this->redirectToRoute('reservation_index');
    }
    public function restoreAction(Request $request, Reservation $reservation,$id)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($reservation) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setEtat('non traite');
            $em->flush();
            $this->addFlash('success','reservation restauré ');
        }
        return $this->redirectToRoute('reservation_archive');
    }

    public function rejetAction(Request $request, Reservation $reservation,$id)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($reservation) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setEtat('refusé');
            $em->flush();

        }
        return $this->redirectToRoute('reservation_index');
    }
    /**
     * Deletes a reservation entity.
     *
     */


    public function deleteAction(Request $request, Reservation $reservation,$id)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($reservation) {
            $em = $this->getDoctrine()->getManager();
            $r=$em->getRepository(Reservation::class)->find($id);
            $commission=$em->getRepository(CommissionR::class)->findCommissionbyReservation($id);
            $inventaire=$em->getRepository(InventaireR::class)->find($commission[0]->getInventaireR()->getId());
            $inventaire->setMontant($inventaire->getMontant()-$r->getPrix()*$commission[0]->getPourcentage());
            $montant=$inventaire->getMontant();
            if($montant=0)
            {
                $com=$commission[0];
                $em->remove($com);
                $em->remove($inventaire);
                $em->remove($reservation);
                $em->flush();
                $this->addFlash('error','reservation supprimé');
            }
            else {
            $com=$commission[0];
            $em->remove($com);
            $em->persist($inventaire);
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('error','reservation supprimé');
        } }


        return $this->redirectToRoute('reservation_archive');
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
