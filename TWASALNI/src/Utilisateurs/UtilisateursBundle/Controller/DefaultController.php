<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UtilisateursUtilisateursBundle:Default:index.html.twig');
    }


    public function findAction($id)
    {
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository(Utilisateurs::class)
            ->findOneBy(['username' => $id]);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }
}
