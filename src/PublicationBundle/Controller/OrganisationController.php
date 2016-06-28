<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Organisation;
use PublicationBundle\Form\Type\SimpleType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrganisationController extends Controller
{
    public function indexAction()
    {
        return $this->render("PublicationBundle:Organisation:index.html.twig");
    }

    public function viewAction($id)
    {
        $rep = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("PublicationBundle:Organisation");

        if ($id == 0)
        {
            $listeOrganisation = $rep->findAll();

            return $this->render("PublicationBundle:Organisation:view.html.twig", array("listeOrganisation" => $listeOrganisation));    
        }
        else
        {
            $orga = $rep->findOneById($id);

            return $this->render("PublicationBundle:Organisation:view.html.twig", array("organisation" => $orga));
        }
    }

    public function addAction(Request $request)
    {
    	$orga = new Organisation();

        $form = $this->createForm(SimpleType::class, $orga);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orga);
            $em->flush();

            return $this->redirectToRoute('publication_organisation_view');
        }

        return $this->render('PublicationBundle:Organisation:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}