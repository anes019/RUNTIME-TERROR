<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\Commission;
use Utilisateurs\UtilisateursBundle\Entity\InventaireC;
use Symfony\Component\HttpFoundation\Request;

use Dompdf\Dompdf;
use Dompdf\Options;

class CommissionController extends Controller
{
    public function readAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireC::class)->find($id);
        $liste=$em->getRepository(Commission::class)->findCommission($inventaire->getPartenaire()->getId());

        return $this->render('@UtilisateursUtilisateurs/Commission/read.html.twig',array(
            "liste"=>$liste,"inventaire"=>$inventaire
        ));
    }



    public function pdfAction(Request $request,$id)
    {
        $pdfOptions= new Options();
        $pdfOptions->set('defaultFont','Arial');

        $dompdf = new Dompdf($pdfOptions);

        $em=$this->getDoctrine()->getManager();
        $inventaire=$em->getRepository(InventaireC::class)->find($id);
        $liste=$em->getRepository(Commission::class)->findCommission($inventaire->getPartenaire()->getId());


        $html= $this->renderView('@UtilisateursUtilisateurs/Courses/pdf.html.twig', array(
            "liste"=>$liste,"inventaire"=>$inventaire
        ));

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        $output=$dompdf->output();

        $nom=$inventaire->getPartenaire()->getNom();
        $path='C:/'.$nom.'_facture.pdf';

        $pdfFilePath=$path;

        file_put_contents($pdfFilePath,$output);

        return $this->redirectToRoute("commission_read",array('id'=>$id));

    }
}
