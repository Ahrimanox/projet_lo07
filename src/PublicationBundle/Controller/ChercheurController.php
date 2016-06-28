<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Chercheur;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ChercheurController extends Controller
{
    public function indexAction()
    {
        return $this->render("PublicationBundle:Chercheur:index.html.twig");
    }

    public function viewAction()
    {
    	$rep = $this
			->getDoctrine()
			->getManager()
			->getRepository("PublicationBundle:Chercheur");

		$listeChercheur = $rep->findAll();

    	return $this->render("PublicationBundle:Chercheur:view.html.twig", array("listeChercheur" => $listeChercheur));
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
        

        return $this->render('PublicationBundle:Chercheur:add2.html.twig', array(
            'listeOrganisation' => $listeOrganisation,
            'listeLaboratoire' => $listeLaboratoire
        ));
    }

    public function validAction(Request $request)
    {
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

        $em->persist($chercheur);
        $em->flush();

        return $this->redirectToRoute('publication_chercheur_view');
    }
}		
