<?php

namespace PublicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RechercheController extends Controller
{
    public function indexAction()
    {
    	$repLabo = $this
    			->getDoctrine()
    			->getManager()
    			->getRepository("PublicationBundle:Laboratoire");
		$listeLaboratoire = $repLabo->findAll();

		$repCher = $this
    			->getDoctrine()
    			->getManager()
    			->getRepository("PublicationBundle:Chercheur");
		$listeChercheur = $repCher->findAll();

        return $this->render("PublicationBundle:Recherche:index.html.twig", array(
        	'listeLaboratoire' => $listeLaboratoire,
        	'listeChercheur' => $listeChercheur
    	));
    }

    public function validAction(Request $request)
    {
    	$repLabo = $this
    			->getDoctrine()
    			->getManager()
    			->getRepository("PublicationBundle:Laboratoire");
		$listeLaboratoire = $repLabo->findAll();

		$repCher = $this
    			->getDoctrine()
    			->getManager()
    			->getRepository("PublicationBundle:Chercheur");
		$listeChercheur = $repCher->findAll();

		$repArt = $this
				->getDoctrine()
				->getManager()
				->getRepository("PublicationBundle:Article");

    	$listeArticle = array();
    	$methode = 0;
        if ($request->get('type') == 1)
        {
        	$idLabo = $request->get('laboratoire');
        	$annee = $request->get('annee');

        	$listeArticle = $repArt->findByLaboratoireAndYear($idLabo, $annee);
        	$methode = 1;
        }
        else if ($request->get('type') == 2)
        {
        	$idCher = $request->get('chercheur');

        	$listeArticle = $repArt->findByChercheur($idCher);
        	$methode = 2;
        }
        else if ($request->get('type') == 3)
        {
        	$idCher = $request->get('chercheur');

        	$listeArticle = $repArt->findByChercheur($idCher);
        	$methode = 3;
        }

        $liste = array();
        foreach ($listeArticle as $article) 
        {
            $art_chers = $article->getArticleChercheur();
            $chercheurs = array();
            foreach($art_chers as $art_cher)
            {
                $chercheurs[$art_cher->getOrdre()] = $art_cher->getChercheur();
            }
            ksort($chercheurs);
            $liste[] = array($article, $chercheurs);
        }

        return $this->render("PublicationBundle:Recherche:index.html.twig", array(
        	'listeLaboratoire' => $listeLaboratoire,
        	'listeChercheur' => $listeChercheur,
        	'liste' => $liste,
        	'methode' => $methode
    	));
    }
}