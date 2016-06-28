<?php

namespace PublicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $repArticle = $em
            ->getRepository("PublicationBundle:Article");
        $repChercheur = $em
            ->getRepository('PublicationBundle:Chercheur');

    	$listeArticle = $repArticle->findAll();
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
        /*
        session_destroy();
        session_start();*/

        $user = null;
        if (isset($_SESSION['userConnected']))
        {
            $user = $_SESSION['userConnected'];
        }

        ///return new Response(serialize($user));

        return $this->render('PublicationBundle:Default:index.html.twig', array(
            'liste' => $liste,
            'user' => $user
        ));
    }
}
