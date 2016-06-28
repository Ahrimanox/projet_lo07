<?php

/* @Publication/Default/index.html.twig */
class __TwigTemplate_396b72952073e966339197c3879be13906e2c117a8ec72fb6bc5e42e14f35261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Default/index.html.twig", 1);
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
        $__internal_af43e3dd44403db0a4dc5d870345fa5e46fa4787bdb2f7d13c4a78d11987bfab = $this->env->getExtension("native_profiler");
        $__internal_af43e3dd44403db0a4dc5d870345fa5e46fa4787bdb2f7d13c4a78d11987bfab->enter($__internal_af43e3dd44403db0a4dc5d870345fa5e46fa4787bdb2f7d13c4a78d11987bfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af43e3dd44403db0a4dc5d870345fa5e46fa4787bdb2f7d13c4a78d11987bfab->leave($__internal_af43e3dd44403db0a4dc5d870345fa5e46fa4787bdb2f7d13c4a78d11987bfab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46187d97c0d3c85881cbdf02618219bb7ce742ef1c9b895d305e277bbbbcd36e = $this->env->getExtension("native_profiler");
        $__internal_46187d97c0d3c85881cbdf02618219bb7ce742ef1c9b895d305e277bbbbcd36e->enter($__internal_46187d97c0d3c85881cbdf02618219bb7ce742ef1c9b895d305e277bbbbcd36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_46187d97c0d3c85881cbdf02618219bb7ce742ef1c9b895d305e277bbbbcd36e->leave($__internal_46187d97c0d3c85881cbdf02618219bb7ce742ef1c9b895d305e277bbbbcd36e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_53d35762f059e178e41a33a9fdcf6ce9d946811ca85235ca9eaa666f9b8e6c61 = $this->env->getExtension("native_profiler");
        $__internal_53d35762f059e178e41a33a9fdcf6ce9d946811ca85235ca9eaa666f9b8e6c61->enter($__internal_53d35762f059e178e41a33a9fdcf6ce9d946811ca85235ca9eaa666f9b8e6c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_53d35762f059e178e41a33a9fdcf6ce9d946811ca85235ca9eaa666f9b8e6c61->leave($__internal_53d35762f059e178e41a33a9fdcf6ce9d946811ca85235ca9eaa666f9b8e6c61_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0153ac60a9ba00b672d516c13c3f908c647e7d0d42d2ad6b1cba60aa09ab3eab = $this->env->getExtension("native_profiler");
        $__internal_0153ac60a9ba00b672d516c13c3f908c647e7d0d42d2ad6b1cba60aa09ab3eab->enter($__internal_0153ac60a9ba00b672d516c13c3f908c647e7d0d42d2ad6b1cba60aa09ab3eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0153ac60a9ba00b672d516c13c3f908c647e7d0d42d2ad6b1cba60aa09ab3eab->leave($__internal_0153ac60a9ba00b672d516c13c3f908c647e7d0d42d2ad6b1cba60aa09ab3eab_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Default/index.html.twig";
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
