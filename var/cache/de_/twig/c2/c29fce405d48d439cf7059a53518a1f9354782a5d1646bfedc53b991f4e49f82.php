<?php

/* PublicationBundle:Default:index.html.twig */
class __TwigTemplate_dcc61a048dea95f9874940ce297168daa4a034c58ecc52854b96432b5c40f658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicationBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a394901714ace4e682ecdb75980e5e82bd11948bc25ecfd4f991109a414a441 = $this->env->getExtension("native_profiler");
        $__internal_9a394901714ace4e682ecdb75980e5e82bd11948bc25ecfd4f991109a414a441->enter($__internal_9a394901714ace4e682ecdb75980e5e82bd11948bc25ecfd4f991109a414a441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a394901714ace4e682ecdb75980e5e82bd11948bc25ecfd4f991109a414a441->leave($__internal_9a394901714ace4e682ecdb75980e5e82bd11948bc25ecfd4f991109a414a441_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_123410d71e936a63032bf7a4e4f2a2669007b9495daa8118909218004055d24c = $this->env->getExtension("native_profiler");
        $__internal_123410d71e936a63032bf7a4e4f2a2669007b9495daa8118909218004055d24c->enter($__internal_123410d71e936a63032bf7a4e4f2a2669007b9495daa8118909218004055d24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_123410d71e936a63032bf7a4e4f2a2669007b9495daa8118909218004055d24c->leave($__internal_123410d71e936a63032bf7a4e4f2a2669007b9495daa8118909218004055d24c_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_610493ea4173ea5b57f72ee6808773c9b27b784b9b093e1a90319131c25a4eae = $this->env->getExtension("native_profiler");
        $__internal_610493ea4173ea5b57f72ee6808773c9b27b784b9b093e1a90319131c25a4eae->enter($__internal_610493ea4173ea5b57f72ee6808773c9b27b784b9b093e1a90319131c25a4eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_610493ea4173ea5b57f72ee6808773c9b27b784b9b093e1a90319131c25a4eae->leave($__internal_610493ea4173ea5b57f72ee6808773c9b27b784b9b093e1a90319131c25a4eae_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6674179a45c49c8cc9fa2cbac0ac579558d08722a29cad3ae22038cca39b77d8 = $this->env->getExtension("native_profiler");
        $__internal_6674179a45c49c8cc9fa2cbac0ac579558d08722a29cad3ae22038cca39b77d8->enter($__internal_6674179a45c49c8cc9fa2cbac0ac579558d08722a29cad3ae22038cca39b77d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticle"]) ? $context["listArticle"] : $this->getContext($context, "listArticle")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "\t<div class=\"container col-sm-12 article\">
\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "
\t\t";
            // line 11
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["article"], "titre", array())), "html", null, true);
            echo "
\t\t<div>Categorie : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "categorie", array()), "html", null, true);
            echo "</div>
\t\t<br />
\t\tEditeur : ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "editeur", array()), "html", null, true);
            echo "
\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success bouton_infos\">Plus d'infos</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6674179a45c49c8cc9fa2cbac0ac579558d08722a29cad3ae22038cca39b77d8->leave($__internal_6674179a45c49c8cc9fa2cbac0ac579558d08722a29cad3ae22038cca39b77d8_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  85 => 14,  80 => 12,  76 => 11,  72 => 10,  69 => 9,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Accueil{% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for article in listArticle %}*/
/* 	<div class="container col-sm-12 article">*/
/* 		{{ article.id }}*/
/* 		{{ article.titre | upper }}*/
/* 		<div>Categorie : {{ article.categorie }}</div>*/
/* 		<br />*/
/* 		Editeur : {{ article.editeur}}*/
/* 		<a href="{{ path("publication_article_view", { "id" : article.id }) }}" type="button" class="btn btn-success bouton_infos">Plus d'infos</a>*/
/* 	</div>*/
/* {% endfor %}*/
/* {% endblock %}*/
