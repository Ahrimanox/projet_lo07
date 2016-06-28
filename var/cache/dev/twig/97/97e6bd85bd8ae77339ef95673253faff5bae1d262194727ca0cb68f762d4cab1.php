<?php

/* PublicationBundle:Default:base.html.twig */
class __TwigTemplate_c7ab51c7cc5128e3f7be6a00d8cf93d8f52970b8ca37f9c395305fd65654c21a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'alerts' => array($this, 'block_alerts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e1fd8a67bc47b7e4fb6428c7511cc90f792f15c85b72837e7558a4f00293afd = $this->env->getExtension("native_profiler");
        $__internal_3e1fd8a67bc47b7e4fb6428c7511cc90f792f15c85b72837e7558a4f00293afd->enter($__internal_3e1fd8a67bc47b7e4fb6428c7511cc90f792f15c85b72837e7558a4f00293afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head> 
\t\t<meta charset=\"utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Plateforme de publications</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" />
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.file-input.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
\t\t<header class=\"page-header container-fluid\">
\t\t\t<img id=\"logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo-utt.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" height=\"\" alt=\"logo_utt.png\" />
\t\t\t<h1>Plateforme de publications scientifiques ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>
\t\t</header>

\t\t<div class=\"body\">
\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t  \t<div class=\"container-fluid\">
\t\t\t    <div class=\"navbar-header\">
\t\t\t    \t<a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("publication_homepage");
        echo "\">Acceuil</a>
\t\t\t    </div>
\t\t\t\t    <form class=\"navbar-form navbar-right\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("publication_user_login");
        echo "\">
\t\t\t\t    \t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" type=\"text\" id=\"login\" name=\"login\" placeholder=\"Login\" />
\t\t\t    \t\t</div>
\t\t\t    \t\t<div class=\"form-group\">
\t\t\t    \t\t\t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\" />
\t\t\t    \t\t</div>
\t\t\t    \t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t    \t<li><button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</button></li>
\t\t\t\t    \t</ul>
\t\t\t    \t</form>
\t\t\t    \t<form class=\"navbar-form navbar-right\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("publication_user_add");
        echo "\">
\t\t\t    \t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t    \t\t\t<li><button type=\"submit\" class=\"btn btn-default\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("publication_user_add");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</button></li>
\t\t\t    \t\t</ul>
\t\t\t    \t</form>
\t\t\t  </div>
\t\t\t</nav>

\t\t\t<div class=\"container-fluid col-sm-3\">
\t\t\t\t<div class=\"btn-group-vertical col-sm-12 group_button\">
\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("publication_recherche");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> Recherche</a>
\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("publication_chercheur_view");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span> Voir les chercheurs</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group-vertical col-sm-12 group_button\">
\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("publication_article_add");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article</a>
\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("publication_article_view");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-book\"></span> Voir ses articles</a>
\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("publication_statistiques");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-stats\"></span> Statistiques</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group-vertical col-sm-12 group_button\">
\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("publication_chercheur_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un chercheur</a>
\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("publication_laboratoire_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un laboratoire</a>
\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("publication_organisation_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une organisation</a>
\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("publication_categorie_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une categorie</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container-fluid col-sm-9\">
\t\t\t";
        // line 64
        $this->displayBlock('alerts', $context, $blocks);
        // line 66
        echo "\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t\t\t</div>
\t\t</div>
\t</body>
</html>";
        
        $__internal_3e1fd8a67bc47b7e4fb6428c7511cc90f792f15c85b72837e7558a4f00293afd->leave($__internal_3e1fd8a67bc47b7e4fb6428c7511cc90f792f15c85b72837e7558a4f00293afd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9643cc75a17e85ffe4962e7c708461f49c8db54c9673e562159a0bc2d8971075 = $this->env->getExtension("native_profiler");
        $__internal_9643cc75a17e85ffe4962e7c708461f49c8db54c9673e562159a0bc2d8971075->enter($__internal_9643cc75a17e85ffe4962e7c708461f49c8db54c9673e562159a0bc2d8971075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9643cc75a17e85ffe4962e7c708461f49c8db54c9673e562159a0bc2d8971075->leave($__internal_9643cc75a17e85ffe4962e7c708461f49c8db54c9673e562159a0bc2d8971075_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_b3134f1bc00267b09276573e0d89e1d707ff1b490753b764acc51fa6316dd456 = $this->env->getExtension("native_profiler");
        $__internal_b3134f1bc00267b09276573e0d89e1d707ff1b490753b764acc51fa6316dd456->enter($__internal_b3134f1bc00267b09276573e0d89e1d707ff1b490753b764acc51fa6316dd456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b3134f1bc00267b09276573e0d89e1d707ff1b490753b764acc51fa6316dd456->leave($__internal_b3134f1bc00267b09276573e0d89e1d707ff1b490753b764acc51fa6316dd456_prof);

    }

    // line 64
    public function block_alerts($context, array $blocks = array())
    {
        $__internal_7556954e04c66d86486e0947ef82f41d5ddc674cea588f8c4d57f2288bf21135 = $this->env->getExtension("native_profiler");
        $__internal_7556954e04c66d86486e0947ef82f41d5ddc674cea588f8c4d57f2288bf21135->enter($__internal_7556954e04c66d86486e0947ef82f41d5ddc674cea588f8c4d57f2288bf21135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alerts"));

        // line 65
        echo "\t\t\t";
        
        $__internal_7556954e04c66d86486e0947ef82f41d5ddc674cea588f8c4d57f2288bf21135->leave($__internal_7556954e04c66d86486e0947ef82f41d5ddc674cea588f8c4d57f2288bf21135_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b420a3b25292edb241ddca5264000a9e40cf81aaf6944ecfa220d856554164 = $this->env->getExtension("native_profiler");
        $__internal_e8b420a3b25292edb241ddca5264000a9e40cf81aaf6944ecfa220d856554164->enter($__internal_e8b420a3b25292edb241ddca5264000a9e40cf81aaf6944ecfa220d856554164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "\t\t\t";
        
        $__internal_e8b420a3b25292edb241ddca5264000a9e40cf81aaf6944ecfa220d856554164->leave($__internal_e8b420a3b25292edb241ddca5264000a9e40cf81aaf6944ecfa220d856554164_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 67,  198 => 66,  191 => 65,  185 => 64,  174 => 17,  163 => 5,  153 => 68,  150 => 66,  148 => 64,  140 => 59,  136 => 58,  132 => 57,  128 => 56,  122 => 53,  118 => 52,  114 => 51,  108 => 48,  104 => 47,  93 => 39,  88 => 37,  74 => 26,  69 => 24,  59 => 17,  55 => 16,  48 => 12,  42 => 9,  38 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head> */
/* 		<meta charset="utf-8" />*/
/* 		<title>{% block title %}{% endblock %} - Plateforme de publications</title>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* */
/* 		<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" />*/
/* 		<link rel="stylesheet" href="{{ asset("css/base.css") }}" />*/
/* 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* 		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>*/
/* 		<script type="text/javascript" src="{{ asset("js/bootstrap.file-input.js") }}"></script>*/
/* 	</head>*/
/* 	<body>*/
/* 		<header class="page-header container-fluid">*/
/* 			<img id="logo" src="{{ asset('img/logo-utt.jpg') }}" class="img-rounded" height="" alt="logo_utt.png" />*/
/* 			<h1>Plateforme de publications scientifiques {% block header %}{% endblock %}</h1>*/
/* 		</header>*/
/* */
/* 		<div class="body">*/
/* 			<nav class="navbar navbar-default">*/
/* 			  	<div class="container-fluid">*/
/* 			    <div class="navbar-header">*/
/* 			    	<a class="navbar-brand" href="{{ path("publication_homepage") }}">Acceuil</a>*/
/* 			    </div>*/
/* 				    <form class="navbar-form navbar-right" action="{{ path('publication_user_login') }}">*/
/* 				    	<div class="form-group">*/
/* 			    			<input class="form-control" type="text" id="login" name="login" placeholder="Login" />*/
/* 			    		</div>*/
/* 			    		<div class="form-group">*/
/* 			    			<input class="form-control" type="password" id="password" name="password" placeholder="Mot de passe" />*/
/* 			    		</div>*/
/* 			    		<ul class="nav navbar-nav navbar-right">*/
/* 					    	<li><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Connexion</button></li>*/
/* 				    	</ul>*/
/* 			    	</form>*/
/* 			    	<form class="navbar-form navbar-right" action="{{ path('publication_user_add') }}">*/
/* 			    		<ul class="nav navbar-nav navbar-right">*/
/* 			    			<li><button type="submit" class="btn btn-default" href="{{ path('publication_user_add') }}"><span class="glyphicon glyphicon-user"></span> Inscription</button></li>*/
/* 			    		</ul>*/
/* 			    	</form>*/
/* 			  </div>*/
/* 			</nav>*/
/* */
/* 			<div class="container-fluid col-sm-3">*/
/* 				<div class="btn-group-vertical col-sm-12 group_button">*/
/* 					<a href="{{ path("publication_recherche") }}" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Recherche</a>*/
/* 					<a href="{{ path("publication_chercheur_view") }}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> Voir les chercheurs</a>*/
/* 				</div>*/
/* 				<div class="btn-group-vertical col-sm-12 group_button">*/
/* 					<a href="{{ path("publication_article_add") }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Ajouter un article</a>*/
/* 					<a href="{{ path("publication_article_view") }}" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> Voir ses articles</a>*/
/* 					<a href="{{ path("publication_statistiques") }}" class="btn btn-success"><span class="glyphicon glyphicon-stats"></span> Statistiques</a>*/
/* 				</div>*/
/* 				<div class="btn-group-vertical col-sm-12 group_button">*/
/* 					<a href="{{ path("publication_chercheur_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter un chercheur</a>*/
/* 					<a href="{{ path("publication_laboratoire_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter un laboratoire</a>*/
/* 					<a href="{{ path("publication_organisation_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter une organisation</a>*/
/* 					<a href="{{ path("publication_categorie_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter une categorie</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="container-fluid col-sm-9">*/
/* 			{% block alerts %}*/
/* 			{% endblock %}*/
/* 			{% block body %}*/
/* 			{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</body>*/
/* </html>*/
