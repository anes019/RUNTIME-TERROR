<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\CommissionR;
use Utilisateurs\UtilisateursBundle\Entity\InventaireR;
use Dompdf\Dompdf;
use Dompdf\Options;
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
            "liste"=>$result,"inventaire"=>$inventaire,



            //"somme"=>$somme[0]
        ));
    }
    public function pdfAction($id,Request $request)

    {$pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireR::class)->find($id);
        $i=$inventaire->getPartenaire()->getId();
        $reservations = $em->getRepository('UtilisateursUtilisateursBundle:InventaireR')->somme($i);
        $nom=$inventaire->getPartenaire()->getNom();
        $inventaire=$em->getRepository(InventaireR::class)->find($id);
        $liste=$em->getRepository(CommissionR::class)->findCommission($inventaire->getPartenaire()->getId());
        $paginator=$this->get('knp_paginator');
        $result=$paginator->paginate($liste
        );
        $html= $this->renderView('@UtilisateursUtilisateurs/CommissionR/pdf.html.twig', array(
            "liste"=>$result,"inventaire"=>$inventaire,"sum"=>$reservations
        ));
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();
        $output = $dompdf->output();

        $nom=$inventaire->getPartenaire()->getNom();
        $path='C:/wamp64/www/RUNTIME-TERROR/TWASALNI/factures/'.$nom.'_facture.pdf';
        $pdfFilepath = $path;

        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);
        $this->addFlash('success','Votre pdf a ete genere');
        return $this->redirectToRoute("commissionR_read",['id' => $id]);

    }
}
