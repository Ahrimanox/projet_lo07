<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Chercheur;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    public function addAction()
    {
    	$ch = new Chercheur();
        $ch->setNom("Lemercier");
        $ch->setPrenom("Marc");
        $ch->setOrganisation("UTT");
        $ch->setEquipe("ERA");

        $form = $this->createFormBuilder($ch)
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Organisation', TextType::class)
            ->add('Equipe', TextType::class)
            ->add('Creer', SubmitType::class)
            ->getForm();

        return $this->render('PublicationBundle:Chercheur:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}		
