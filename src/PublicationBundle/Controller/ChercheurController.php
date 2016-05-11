<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Chercheur;
use PublicationBundle\Form\Type\ChercheurType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

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

		$listChercheur = $rep->findAll();

    	return $this->render("PublicationBundle:Chercheur:view.html.twig", array("listChercheur" => $listChercheur));
    }

    public function addAction(Request $request)
    {
    	$ch = new Chercheur();
        $ch->setNom("Lemercier");
        $ch->setPrenom("Marc");
        $ch->setOrganisation("UTT");
        $ch->setEquipe("ERA");

        $form = $this->createForm(ChercheurType::class, $ch);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ch);
            $em->flush();

            return $this->redirectToRoute('publication_chercheur_view');
        }

        return $this->render('PublicationBundle:Chercheur:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function addCheckAction(Request $request)
    {

    }
}		
