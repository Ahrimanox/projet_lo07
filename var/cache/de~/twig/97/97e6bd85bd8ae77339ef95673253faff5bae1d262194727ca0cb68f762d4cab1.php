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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_376f2bc71346d1fb32273b3b8c872e4f0d4d2991862befa13918d51908a6fd91 = $this->env->getExtension("native_profiler");
        $__internal_376f2bc71346d1fb32273b3b8c872e4f0d4d2991862befa13918d51908a6fd91->enter($__internal_376f2bc71346d1fb32273b3b8c872e4f0d4d2991862befa13918d51908a6fd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:base.html.twig"));

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
\t\t</script>

\t</head>
\t<body>
\t\t<header class=\"page-header container-fluid\">
\t\t\t<img id=\"logo\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo-utt.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" height=\"\" alt=\"logo_utt.png\" />
\t\t\t<h1>Plateforme de publications scientifiques ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>
\t\t</header>

\t\t<div class=\"body\">
\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t  \t<div class=\"container-fluid\">
\t\t\t    <div class=\"navbar-header\">
\t\t\t    \t<a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("publication_homepage");
        echo "\">Acceuil</a>
\t\t\t    </div>
\t\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t\t    \t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a></li>
\t\t\t    \t<li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a></li>
\t\t\t    </ul>
\t\t\t  </div>
\t\t\t</nav>

\t\t\t<div class=\"container-fluid col-sm-3\">
\t\t\t\t<div class=\"btn-group-vertical col-sm-12 group_button\">
\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> Recherche</a>
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("publication_chercheur_view");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span> Voir les chercheurs</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"btn-group-vertical col-sm-12 group_button\">
\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("publication_article_add");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article</a>
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("publication_article_view");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-book\"></span> Voir ses articles</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"btn-group-vertical col-sm-12 group_button\">
\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("publication_chercheur_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un chercheur</a>
\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("publication_laboratoire_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un laboratoire</a>
\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("publication_organisation_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une organisation</a>
\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("publication_categorie_add");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une categorie</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container col-sm-9\">
\t\t\t";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "\t\t\t</div>
\t\t</div>
\t</body>
</html>";
        
        $__internal_376f2bc71346d1fb32273b3b8c872e4f0d4d2991862befa13918d51908a6fd91->leave($__internal_376f2bc71346d1fb32273b3b8c872e4f0d4d2991862befa13918d51908a6fd91_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbf94ebf9e5d73c9ada9dc83a4eb4e7aeac7ccaca767076423b150b75f062bc4 = $this->env->getExtension("native_profiler");
        $__internal_bbf94ebf9e5d73c9ada9dc83a4eb4e7aeac7ccaca767076423b150b75f062bc4->enter($__internal_bbf94ebf9e5d73c9ada9dc83a4eb4e7aeac7ccaca767076423b150b75f062bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bbf94ebf9e5d73c9ada9dc83a4eb4e7aeac7ccaca767076423b150b75f062bc4->leave($__internal_bbf94ebf9e5d73c9ada9dc83a4eb4e7aeac7ccaca767076423b150b75f062bc4_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_8966686c2e4ea7a0be55aed5362195be9cac8dd6cb22b5a22c5f0a2fa6a990c1 = $this->env->getExtension("native_profiler");
        $__internal_8966686c2e4ea7a0be55aed5362195be9cac8dd6cb22b5a22c5f0a2fa6a990c1->enter($__internal_8966686c2e4ea7a0be55aed5362195be9cac8dd6cb22b5a22c5f0a2fa6a990c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_8966686c2e4ea7a0be55aed5362195be9cac8dd6cb22b5a22c5f0a2fa6a990c1->leave($__internal_8966686c2e4ea7a0be55aed5362195be9cac8dd6cb22b5a22c5f0a2fa6a990c1_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_94398130b82c268b6d29d1e52195541df61f4aa495b80a9a72e7a50571acf8a2 = $this->env->getExtension("native_profiler");
        $__internal_94398130b82c268b6d29d1e52195541df61f4aa495b80a9a72e7a50571acf8a2->enter($__internal_94398130b82c268b6d29d1e52195541df61f4aa495b80a9a72e7a50571acf8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "\t\t\t";
        
        $__internal_94398130b82c268b6d29d1e52195541df61f4aa495b80a9a72e7a50571acf8a2->leave($__internal_94398130b82c268b6d29d1e52195541df61f4aa495b80a9a72e7a50571acf8a2_prof);

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
        return array (  157 => 53,  151 => 52,  140 => 16,  129 => 5,  119 => 54,  117 => 52,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  90 => 40,  86 => 39,  79 => 35,  64 => 23,  54 => 16,  50 => 15,  41 => 9,  37 => 8,  31 => 5,  25 => 1,);
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
/* 		</script>*/
/* */
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
/* 			    <ul class="nav navbar-nav navbar-right">*/
/* 			    	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>*/
/* 			    	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>*/
/* 			    </ul>*/
/* 			  </div>*/
/* 			</nav>*/
/* */
/* 			<div class="container-fluid col-sm-3">*/
/* 				<div class="btn-group-vertical col-sm-12 group_button">*/
/* 					<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Recherche</a>*/
/* 					<a href="{{ path("publication_chercheur_view") }}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> Voir les chercheurs</a>*/
/* 				</div>*/
/* */
/* 				<div class="btn-group-vertical col-sm-12 group_button">*/
/* 					<a href="{{ path("publication_article_add") }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Ajouter un article</a>*/
/* 					<a href="{{ path("publication_article_view")}}" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> Voir ses articles</a>*/
/* 				</div>*/
/* */
/* 				<div class="btn-group-vertical col-sm-12 group_button">*/
/* 					<a href="{{ path("publication_chercheur_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter un chercheur</a>*/
/* 					<a href="{{ path("publication_laboratoire_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter un laboratoire</a>*/
/* 					<a href="{{ path("publication_organisation_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter une organisation</a>*/
/* 					<a href="{{ path("publication_categorie_add") }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter une categorie</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="container col-sm-9">*/
/* 			{% block body %}*/
/* 			{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</body>*/
/* </html>*/
