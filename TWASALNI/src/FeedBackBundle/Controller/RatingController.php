<?php

namespace FeedBackBundle\Controller;

use FeedBackBundle\Entity\Commentaires;
use FeedBackBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Utilisateurs\UtilisateursBundle\Entity\Partenaire;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class RatingController extends Controller
{
    public function EvaluationAction($id,Request $request){
        $rate=new Rating();
        $em=$this->getDoctrine()->getManager();
        /** @var User $user */
        $user=$em->getRepository(Utilisateurs::class)->findOneBy(
            ['username'=>$this->getUser()->getUsername()]
        );

        $part=$em->getRepository(Partenaire::class)->find($id);
        $Rate=$em->getRepository(Rating::class)->findOneBy(
            [
                'part'=>$part,'client'=>$user
            ]
        );

        if($Rate == null){
            $rate->setPart($part);
            $rate->setClient($user);
            $rate->setRate($request->get('rate'));
            $rate->setDate(new \DateTime('now'));
            $em->persist($rate);
            $em->flush();
            return $this->json([
                'rate'=>$request->get('rate'),
                'message'=>'Cool'
            ],200);
        }
        $rate=$Rate;
        $rate->setRate($request->get('rate'));
        $em->flush();
        return $this->json([

            'rate'=>$rate->getRate(),
            'message'=>$part->getNom()
        ],200);
    }

    public function CommenterAction($id,Request $request){
        $i=0;
        $tab=array();
        $tabC=array();
        $co=array();
        $commentaire=new Commentaires();
        $em=$this->getDoctrine()->getManager();
        if($request->isXmlHttpRequest()){
            $commentaire->setCommentaire($request->get('commentaire'));
            $part=$em->getRepository(Partenaire::class)->find($id);
            $commentaire->setDate(new \DateTime());
            $user=$em->getRepository(Utilisateurs::class)->findOneBy([
                'username'=>$this->getUser()->getUsername()
            ]);
            $commentaire->setClient($user);
            $commentaire->setPart($part);
            array_push($tab,$commentaire->getCommentaire());
            array_push($tab,$commentaire->getDate());
            array_push($tab,$user->getUsername());
            array_push($tab,$user->getPrenom());
            $com=$em->getRepository(Commentaires::class)->findBy(
                [
                    'part'=>$part,
                ],[
                    'id'=>'DESC'
                ]
            );
            foreach ($com as $c){
                if($i<5){
                    $etat='non';
                    if ($this->getUser()->getUsername() == $c->getClient()->getUsername()) {
                        $etat='oui';
                    }
                    $co=array($c->getCommentaire(),$c->getDate(),$c->getClient()->getUsername(),$c->getClient()->getPrenom(),$etat);
                    array_push($tabC,$co);
                }
                $i++;
            }
            $em->persist($commentaire);
            $em->flush();
            return $this->json([
                'commentaire' => $tab,
                'tabC'=>$tabC
            ],200);

        }
        return $this->json([
            'message'=>'ok'
        ],500);
    }
}
