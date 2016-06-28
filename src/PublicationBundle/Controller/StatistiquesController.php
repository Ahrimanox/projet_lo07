<?php

namespace PublicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class StatistiquesController extends Controller
{
    public function indexAction()
    {
    	$repCher = $this
    			->getDoctrine()
    			->getManager()
    			->getRepository("PublicationBundle:Chercheur");
    	$listeChercheur = $repCher->findAll();
        return $this->render("PublicationBundle:Statistiques:index.html.twig", array(
        	'listeChercheur' => $listeChercheur
    	));
    }

    public function getAction(Request $request)
    {
    	if ($request->get('chercheur') == null)
    	{
    		return new Response("Problème de formulaire");	
    	}
    	$idCher = $request->get('chercheur');
    	$minAnnee = 2010;
    	$maxAnnee = 2016;

    	$numberOfArticle = array();
    	for ($i = $minAnnee; $i <= $maxAnnee; ++$i)
    	{
    		$numberOfArticle[$i . ""] = 0;
    	}

    	$repArt = $this
    			->getDoctrine()
    			->getManager()
    			->getRepository("PublicationBundle:Article");
    	$result = $repArt->findNumberOfArticleByYearAndByChercheur($idCher, $minAnnee, $maxAnnee);

    	foreach ($result as  $fetch)
    	{
    		$numberOfArticle[ $fetch['year'] ] = $fetch['num'];
    	}

    	$resultJson = array(
    		'chercheur' => $idCher,
    		'min' => $minAnnee,
    		'max' => $maxAnnee,
    		'numberOfArticle' => $numberOfArticle);

    	$json_data = json_encode($resultJson);

    	return JsonResponse::create($json_data);
    }
}
