<?php

/* PublicationBundle:Article:list.html.twig */
class __TwigTemplate_bd39ec1ec0076788a66d05ca225a3ba2652561c6aaff0e932c60dec812ad09dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bafe6436dfbc8264176bc75af74f8ed0ce1e0a721cc7072ec177d16bbaf9c9e7 = $this->env->getExtension("native_profiler");
        $__internal_bafe6436dfbc8264176bc75af74f8ed0ce1e0a721cc7072ec177d16bbaf9c9e7->enter($__internal_bafe6436dfbc8264176bc75af74f8ed0ce1e0a721cc7072ec177d16bbaf9c9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>ICD | Articles</title>
\t</head>
\t<body>
\t\t<h1>Voici les beaux articles</h1>
\t\t<table><tr ><td id=\"article\">
\t\t<ul>
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticle"]) ? $context["listArticle"] : $this->getContext($context, "listArticle")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo " </br> ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["article"], "categorie", array())), "html", null, true);
            echo " ref: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "ref", array()), "html", null, true);
            echo " date : 
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "datePublication", array()), "d/m/Y"), "html", null, true);
            echo " lieu : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "lieu", array()), "html", null, true);
            echo " statut : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "statut", array()), "html", null, true);
            echo "  </br> editeur : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "editeur", array()), "html", null, true);
            echo " </li>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "\t\t\t\t<li>Pas de articles dans la base de données</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</ul></td></tr></table>
\t</body>
</html>";
        
        $__internal_bafe6436dfbc8264176bc75af74f8ed0ce1e0a721cc7072ec177d16bbaf9c9e7->leave($__internal_bafe6436dfbc8264176bc75af74f8ed0ce1e0a721cc7072ec177d16bbaf9c9e7_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Article:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  60 => 14,  47 => 12,  38 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>ICD | Articles</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Voici les beaux articles</h1>*/
/* 		<table><tr ><td id="article">*/
/* 		<ul>*/
/* 			{% for article in listArticle %}*/
/* 				<li>{{ article.titre }} </br> {{ article.categorie | upper }} ref: {{ article.ref }} date : */
/* 				{{ article.datePublication | date("d/m/Y") }} lieu : {{ article.lieu }} statut : {{ article.statut }}  </br> editeur : {{ article.editeur }} </li>*/
/* 			{% else %}*/
/* 				<li>Pas de articles dans la base de données</li>*/
/* 			{% endfor %}*/
/* 		</ul></td></tr></table>*/
/* 	</body>*/
/* </html>*/
