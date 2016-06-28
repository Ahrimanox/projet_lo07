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
        $__internal_25b038ac109069380e22c1d6bc74c18ad112c30dba84945c91bc8c30391602b1 = $this->env->getExtension("native_profiler");
        $__internal_25b038ac109069380e22c1d6bc74c18ad112c30dba84945c91bc8c30391602b1->enter($__internal_25b038ac109069380e22c1d6bc74c18ad112c30dba84945c91bc8c30391602b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b038ac109069380e22c1d6bc74c18ad112c30dba84945c91bc8c30391602b1->leave($__internal_25b038ac109069380e22c1d6bc74c18ad112c30dba84945c91bc8c30391602b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5abc3f2208e5db0d1302d3c305af6a8bca4df2f9a0612a7256583ffb99e9b5e = $this->env->getExtension("native_profiler");
        $__internal_a5abc3f2208e5db0d1302d3c305af6a8bca4df2f9a0612a7256583ffb99e9b5e->enter($__internal_a5abc3f2208e5db0d1302d3c305af6a8bca4df2f9a0612a7256583ffb99e9b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_a5abc3f2208e5db0d1302d3c305af6a8bca4df2f9a0612a7256583ffb99e9b5e->leave($__internal_a5abc3f2208e5db0d1302d3c305af6a8bca4df2f9a0612a7256583ffb99e9b5e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_bca66ac9b72647770a3704bf37eb837126dfadc0205d846c9a19c25f31ce6556 = $this->env->getExtension("native_profiler");
        $__internal_bca66ac9b72647770a3704bf37eb837126dfadc0205d846c9a19c25f31ce6556->enter($__internal_bca66ac9b72647770a3704bf37eb837126dfadc0205d846c9a19c25f31ce6556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_bca66ac9b72647770a3704bf37eb837126dfadc0205d846c9a19c25f31ce6556->leave($__internal_bca66ac9b72647770a3704bf37eb837126dfadc0205d846c9a19c25f31ce6556_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b30589bdd281614efa14ea4f383b7d3f581df7dbc3e396dd3c2276b128ac8e3 = $this->env->getExtension("native_profiler");
        $__internal_7b30589bdd281614efa14ea4f383b7d3f581df7dbc3e396dd3c2276b128ac8e3->enter($__internal_7b30589bdd281614efa14ea4f383b7d3f581df7dbc3e396dd3c2276b128ac8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b30589bdd281614efa14ea4f383b7d3f581df7dbc3e396dd3c2276b128ac8e3->leave($__internal_7b30589bdd281614efa14ea4f383b7d3f581df7dbc3e396dd3c2276b128ac8e3_prof);

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
