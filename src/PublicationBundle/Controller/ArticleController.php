<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Article;
use PublicationBundle\Entity\ArticleChercheur;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render("PublicationBundle:Article:index.html.twig");
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repArticle = $em
            ->getRepository("PublicationBundle:Article");
        $repChercheur = $em
            ->getRepository('PublicationBundle:Chercheur');

        if ($id == 0)
        {
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

            return $this->render("PublicationBundle:Article:view.html.twig", array("liste" => $liste));    
        }
        else
        {
            $article = $repArticle->findOneById($id);

            $art_chers = $article->getArticleChercheur();
            $chercheurs = array();
            foreach($art_chers as $art_cher)
            {
                $chercheurs[$art_cher->getOrdre()] = $art_cher->getChercheur();
            }
            ksort($chercheurs);

            return $this->render("PublicationBundle:Article:view.html.twig", array(
                "article" => $article,
                "chercheurs" => $chercheurs
            ));
        }
    }

    public function addAction(Request $request)
    {
        $repCat = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository("PublicationBundle:Categorie");

        $repCher = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository("PublicationBundle:Chercheur");

        $listeCategorie = $repCat->findAll();
        $listeChercheur = $repCher->findAll();

        return $this->render('PublicationBundle:Article:add.html.twig', array(
            'listeCategorie' => $listeCategorie,
            'listeChercheur' => $listeChercheur
        ));
    }

    public function validAction(Request $request)
    {
        if ($request->get('titre') == null)
        {
            return new Response('Pas de titre');
        }
        if ($request->get('label') == null)
        {
            return new Response('Pas de label');
        }
        if ($request->get('categorie') == null)
        {
            return new Response('Pas de categorie');
        }
        if ($request->get('datePublication') == null)
        {
            return new Response('Pas de datePublication');
        }
        if ($request->get('autheurs') == null)
        {
            return new Response('Pas de autheurs');
        }
        if (!isset($_FILES['pdfFile']))
        {
            return new Response(serialize($_FILES['pdfFile']));
        }

        $article = new Article();

        $article->setTitre($request->get('titre'));
        $article->setLabel($request->get('label'));
        $article->setDatePublication($request->get('datePublication'));
        $article->setLieu($request->get('lieu'));

        $em = $this->getDoctrine()->getManager();

        // Assigne la categorie 

        $repCategorie = $em->getRepository("PublicationBundle:Categorie");
        $categorie = $repCategorie->findOneById($request->get('categorie'));
        $article->setCategorie($categorie);

        // Assigne les différents chercheurs et choisi l'ordre

        $repChercheur = $em->getRepository("PublicationBundle:Chercheur");
        $autheurs = $request->get('autheurs');                
        
        $compteurOrdre = 1;
        foreach ($autheurs as $chercheur)
        {
            $articleChercheur = new ArticleChercheur();
            $articleChercheur->setOrdre($compteurOrdre);
            $articleChercheur->setArticle($article);
            $article->addArticleChercheur($articleChercheur);

            $autheur = $repChercheur->findOneById($chercheur);
            $articleChercheur->setChercheur($autheur);
            $autheur->addArticleChercheur($articleChercheur);

            $em->persist($articleChercheur);

            ++$compteurOrdre;
        }

        // Upload du fichier
        $nom = $_FILES['pdfFile']['name'];

        if(!move_uploaded_file($_FILES['pdfFile']['tmp_name'], $this->getParameter('fileDir') . $nom))
        {
            echo "L'upload du fichier a échoué";
        }

        $article->setPdfFile($nom);
        
        $em->persist($article);
        $em->flush();

        return $this->redirectToRoute('publication_article_view');
    }

    public function viewByChercheurAction($id)
    {
        if ($id == 0)
        {
            return $this->redirectToRoute("publication_homepage");
        }

        $em = $this->getDoctrine()->getManager();

        $repArticle = $em
            ->getRepository("PublicationBundle:Article");
        $repChercheur = $em
            ->getRepository('PublicationBundle:Chercheur');

        $listeArticle = $repArticle->findByChercheur($id);
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


        return $this->render('PublicationBundle:Chercheur:view_article.html.twig', array(
            'liste' => $liste
        ));
    }

    public function modifAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repArticle = $em->getRepository('PublicationBundle:Article');

        $article = $repArticle->findOneById($id);

        $art_chers = $article->getArticleChercheur();
        $chercheurs = array();
        foreach($art_chers as $art_cher)
        {
            $chercheurs[$art_cher->getOrdre()] = $art_cher->getChercheur();
        }
        ksort($chercheurs);

        return $this->render('PublicationBundle:Article:modif.html.twig', array(
            'article' => $article,
            'chercheurs' => $chercheurs,
            'nbchercheur' => count($chercheurs)
        ));
    }

    public function modifValidAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $repArticleChercheur = $em->getRepository('PublicationBundle:ArticleChercheur');

        $repArticle = $em->getRepository('PublicationBundle:Article');
        $article = $repArticle->findOneById($id);

        $article->setTitre($request->get('titre'));
        $article->setLabel($request->get('label'));

        $articleChercheurs = $repArticleChercheur->findByArticle($article);
        $nbchercheur = $request->get('nbchercheur');
        
        foreach ($articleChercheurs as $articleChercheur) 
        {
            $chercheur = $articleChercheur->getChercheur();
            $idChercheur = $chercheur->getId();

            for ($i = 1; $i <= $nbchercheur; ++$i)
            {
                if ($request->get('' + $i) == $idChercheur)
                {
                    $articleChercheur->setOrdre($i);
                    break;
                }
                $em->persist($articleChercheur);
            }
        }
        $em->persist($article);
        $em->flush();

        return $this->redirectToRoute('publication_article_view', array('id' => $id));
    }
}