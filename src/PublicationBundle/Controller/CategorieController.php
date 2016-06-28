<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Categorie;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    public function viewAction($id)
    {
        $rep = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("PublicationBundle:Categorie");

        if ($id == 0)
        {
            $listeCategorie = $rep->findAll();

            return $this->render("PublicationBundle:Categorie:view.html.twig", array("listeCategorie" => $listeCategorie));    
        }
        else
        {
            $cate = $rep->findOneById($id);

            return $this->render("PublicationBundle:Categorie:view.html.twig", array("categorie" => $cate));
        }
    }

    public function addAction(Request $request)
    {
    	$cate = new Categorie();

        $form = $this->createFormBuilder($cate)
            ->add('nom', TextType::class, array('required' => true))
            ->add('abreviation', TextType::class, array('required' => true))
            ->add('enregistrer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cate);
            $em->flush();

            return $this->redirectToRoute('publication_categorie_view');
        }

        return $this->render('PublicationBundle:Categorie:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}