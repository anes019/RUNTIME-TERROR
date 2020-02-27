<?php

namespace FeedBackBundle\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use FeedBackBundle\Entity\Reclammations;
use FeedBackBundle\Entity\ReponseReclammation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FeedBack/Default/index.html.twig');
    }

    public function AddReclammationAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $reclammation=new Reclammations();
        $client=new Utilisateurs();
        $email=$request->request->get('email');
        $client=$em->getRepository( Utilisateurs::class)->findOneBy(array('email'=>$email));
        $form=$this->createFormBuilder($reclammation)
            ->add('sujet',TextType::class,[
                'attr'=> [
                    'placeholder'=>" Sujet de la raclammation",
                    'name'=>"sujet",
                    'id'=>"sujet"
                ]
            ])
            ->add('contenu',TextareaType::class,[
                'attr'=>[
                    'cols'=>"30",
                    'rows'=>"10",
                    'placeholder'=>" Message De la Reclammation ",
                    'id'=>"message"
                ]
            ])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() && $client != null){
            $reclammation->setDate(new \DateTime( ));
            $reclammation->setClient($client);
            $reclammation->setEtat("En Attente");
            $em->persist($reclammation);
            $em->flush();
            return $this->redirectToRoute('utilisateurs_utilisateurs_homepage');
        }
        return $this->render('@FeedBack/Default/index.html.twig',[
            'formR' =>$form->createView()
        ]);
    }

    public function ListeReclammationAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $reclammation=$em->getRepository("FeedBackBundle:Reclammations")->findBy(
            [],['id'=>'DESC']
        );
        $reponse=$em->getRepository("FeedBackBundle:ReponseReclammation")->findBy(
            [],['id'=>'DESC']
        );
        return $this->render('@FeedBack/Admin/reclammation.html.twig',array(
            'reclammation' =>$reclammation,'reponse'=>$reponse
        ));
    }

    public  function DeleteReclammationAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $reclammation=$em->getRepository(Reclammations::class)->find($id);
        $em->remove($reclammation);
        $em->flush();
        return $this->redirectToRoute('feed_back_Listereclammation');
    }

    public  function ReponseReclammationAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $reponse=new ReponseReclammation();
        $reclammation=$em->getRepository(Reclammations::class)->find($id);
        $form=$this->createFormBuilder($reponse)
            ->add('sujet',TextType::class,[
                'attr'=> [
                    'placeholder'=>" Sujet de la reponse",
                    'name'=>"sujet",
                    'id'=>"sujet",
                    'class'=>"form-control"
                ]
            ])
            ->add('contenu',TextareaType::class,[
                'attr'=>[
                    'cols'=>"30",
                    'rows'=>"10",
                    'placeholder'=>" Contenu de la reponse",
                    'id'=>"message",
                    'class'=>"form-control"
                ]
            ])
            ->getForm();
        $form->handleRequest($request);
        $reponse->setRecla($reclammation);
        $reponse->setClient($reclammation->getClient());
        if($form->isSubmitted() && $form->isValid() && $reponse->getRecla()){
            $reponse->setDateReponse(new \DateTime('now'));
            $reclammation->setEtat("Repondu");
            $em->persist($reclammation);
            $em->persist($reponse);
            $em->flush();
            return $this->redirectToRoute('feed_back_Listereclammation');
        }
        return $this->render('@FeedBack/Admin/reponse_reclammation.html.twig',array(
            'recl'=>$reclammation ,
            'FReponse'=>$form->createView()
        ));
    }

    public function EnvoyerRenponseAction($id){

        $em=$this->getDoctrine()->getManager();
        $reponse=$em->getRepository("FeedBackBundle:ReponseReclammation")->find($id);



        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('@FeedBack/default/ReclammationPDF.html.twig', [
            'reponse' => $reponse
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }

     public function StatistiquesAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $reclammation=$em->getRepository("FeedBackBundle:Reclammations")->findAll();
        return $this->render('@FeedBack/Admin/statistiques.html.twig',array(
            'reclammation' =>$reclammation));
    }

    public function TrierParEtatAction(Request $request){
        $tab=array();
        $em=$this->getDoctrine()->getManager();
        if($request->get('etat')=='Tout'){
            $tabR=$em->getRepository(Reclammations::class)->findAll();
        }
        else if(($request->get('etat')=='Attente')){
            $tabR=$em->getRepository(Reclammations::class)->findBy(['etat'=>'En Attente'],['id'=>'DESC']);
        }
        else{
            $tabR=$em->getRepository(Reclammations::class)->findBy(['etat'=>$request->get('etat')],['id'=>'DESC']);
        }
        foreach ($tabR as $r){
            $ra=array($r->getId(),$r->getClient()->getUsername(),$r->getClient()->getPrenom(),$r->getClient()->getemail(),$r->getSujet(),$r->getContenu(),$r->getEtat());
            array_push($tab,$ra);
        }
        return $this->json([
            'tab'=>$tab
        ],200);
    }

}
