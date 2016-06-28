<?php

/* @Publication/Article/view.html.twig.html */
class __TwigTemplate_91a2e47e4ca0fcb8a91100cd29b255d6bb0ea159607e47647f31b0e4bd6f1dab extends Twig_Template
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
        $__internal_49783054c6494b43844642088f8014273cd11ee9f98589362377f581060f4411 = $this->env->getExtension("native_profiler");
        $__internal_49783054c6494b43844642088f8014273cd11ee9f98589362377f581060f4411->enter($__internal_49783054c6494b43844642088f8014273cd11ee9f98589362377f581060f4411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Article/view.html.twig.html"));

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
        
        $__internal_49783054c6494b43844642088f8014273cd11ee9f98589362377f581060f4411->leave($__internal_49783054c6494b43844642088f8014273cd11ee9f98589362377f581060f4411_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Article/view.html.twig.html";
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
