<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use FOS\UserBundle\Model\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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

    public function finddAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $user = new Utilisateurs();
        $user ->setUsername($request->get('username'));
        $user ->setEmail($request->get('email'));
        $user->setRoles(array($request->get('role')));
        $user ->setPassword($request->get('password'));
        $user ->setNom($request->get('nom'));
        $user ->setPrenom($request->get('prenom'));
        $user ->setTelephone($request->get('telephone'));
        $em->persist($user);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($user);
        return new JsonResponse($formated);
    }
}
