<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Chercheur;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class ChercheurController extends Controller
{
    public function indexAction()
    {
		$content = 
			$this->get("templating")
				->render("PublicationBundle:Chercheur:index.html.twig");

        return new Response($content);
    }

    public function viewAction()
    {
    	$rep = $this
			->getDoctrine()
			->getManager()
			->getRepository("PublicationBundle:Chercheur");

		$listChercheur = $rep->findAll();

    	return $this->render("PublicationBundle:Chercheur:view.html.twig", array("listChercheur" => $listChercheur));
    }

    public function addAction()
    {
    	$ch = new Chercheur();
    	$ch->setOrganisation("UTT");
    	$ch->setEquipe("ERA");
    	$ch->setPrenom("Marc");
    	$ch->setNom("Lemercier");

    	$em = $this->getDoctrine()->getManager();

    	$em->persist($ch);

    	$em->flush();

    	return new Response($ch->getPrenom() . " travaille à " . $ch->getOrganisation() . " dans l'équipe de " . $ch->getEquipe());
    }
}		
