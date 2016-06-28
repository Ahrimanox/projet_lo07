<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Chercheur;
use PublicationBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function loginUserAction(Request $request)
    {
        $login = $request->get('login');
        $mdp = $request->get('password');

        $em = $this->getDoctrine()->getManager();

        $repUser = $em->getRepository('PublicationBundle:User');

        $user = $repUser->findOneByLogin($login);
        if ($user == null)
        {
            return new Response("Pas d'utilisateur");
        }
        if ($user->getPassword() != $mdp)
        {
            return new Response("Mauvais mot de passe");   
        }

        session_destroy();

        session_start();

        $_SESSION['userConnected'] = $user;

        return $this->redirectToRoute('publication_homepage');
    }

    public function logoutUserAction(Request $request)
    {
        
    }

    public function addAction(Request $request)
    {
        $repOrga = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("PublicationBundle:Organisation");

        $listeOrganisation = $repOrga->findAll();

        $repLabo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("PublicationBundle:Laboratoire");

        $listeLaboratoire = $repLabo->findAll();
        

        return $this->render('PublicationBundle:User:add.html.twig', array(
            'listeOrganisation' => $listeOrganisation,
            'listeLaboratoire' => $listeLaboratoire
        ));
    }

    public function validAction(Request $request)
    {
        if ($request->get('login') == null)
        {
            return new Response('Pas de login');
        }
        if ($request->get('password') == null)
        {
            return new Response('Pas de password');
        }
        if ($request->get('nom') == null)
        {
            return new Response('Pas de nom');
        }
        if ($request->get('prenom') == null)
        {
            return new Response('Pas de prenom');
        }
        if ($request->get('organisation') == null)
        {
            return new Response('Pas de organisation');
        }
        if ($request->get('laboratoire') == null)
        {
            return new Response('Pas de laboratoire');
        }
        if (!isset($_FILES['picture']))
        {
            return new Response(serialize($_FILES['picture']));
        }

        $user = new User();
        $user->setLogin($request->get('login'));
        $user->setPassword($request->get('password'));
        $user->setRole('user');

        $chercheur = new Chercheur();
        $chercheur->setNom($request->get('nom'));
        $chercheur->setPrenom($request->get('prenom'));
        
        $em = $this
                ->getDoctrine()
                ->getManager();

        $repOrga = $em->getRepository('PublicationBundle:Laboratoire');
        $labo = $repOrga->findOneById($request->get('laboratoire'));
        $chercheur->setLaboratoire($labo);

        $chercheur->setOrganisation($labo->getOrganisation());


        // Upload de la photo de profil
        $nom = $_FILES['picture']['name'];

        if(!move_uploaded_file($_FILES['picture']['tmp_name'], $this->getParameter('fileDir') . $nom))
        {
            echo "Merde";
        }
        $chercheur->setPicture($nom);

        $user->setChercheur($chercheur);

        $em->persist($user);
        $em->persist($chercheur);
        $em->flush();

        return $this->redirectToRoute('publication_homepage');
    }
}		
