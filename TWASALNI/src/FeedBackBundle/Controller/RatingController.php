<?php

namespace FeedBackBundle\Controller;

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
}
