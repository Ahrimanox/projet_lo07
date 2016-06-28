<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Laboratoire;
use PublicationBundle\Form\Type\SimpleType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class LaboratoireController extends Controller
{
    public function indexAction()
    {
        return $this->render("PublicationBundle:Laboratoire:index.html.twig");
    }

    public function viewAction($id)
    {
        $rep = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("PublicationBundle:Laboratoire");
        if ($id == 0)
        {
            $listeLaboratoire = $rep->findAll();

            return $this->render("PublicationBundle:Laboratoire:view.html.twig", array("listeLaboratoire" => $listeLaboratoire));    
        }
        else
        {
            $labo = $rep->findOneById($id);

            return $this->render("PublicationBundle:Laboratoire:view.html.twig", array("laboratoire" => $labo));
        }
    }

    public function addAction(Request $request)
    {
        $repOrga = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository("PublicationBundle:Organisation");

        $listeOrganisation = $repOrga->findAll();

    	$labo = new Laboratoire();

        $form = $this->createFormBuilder($labo)
                    ->add('nom', TextType::class, array('required' => true))
                    ->add('organisation', ChoiceType::class, array(
                        'required' => true,
                        'choices' => $listeOrganisation,
                        'choice_label' => function($organisation, $key, $index)
                        {
                            return strtoupper($organisation->getNom());
                        }
                    ))
                    ->add('enregistrer', SubmitType::class)
                    ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($labo);
            $em->flush();

            return $this->redirectToRoute('publication_laboratoire_view');
        }

        return $this->render('PublicationBundle:Laboratoire:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}