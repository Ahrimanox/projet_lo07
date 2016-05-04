<?php

namespace PublicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChercheurController extends Controller
{
    public function indexAction()
    {
        return $this->render('PublicationBundle:Chercheur:index.html.twig');
    }
}
