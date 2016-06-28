<?php

/* PublicationBundle:Chercheur:view.html.twig */
class __TwigTemplate_0066ece5f5b8473d7d2aee1faac5fdaff309ba57f43a0fcc20ec51392a4ff5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Chercheur:view.html.twig", 1);
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
        $__internal_bb791ab224a6db278e7cc27cf5e250b9037e10eec9bced68ec0c1fc8720ad9c6 = $this->env->getExtension("native_profiler");
        $__internal_bb791ab224a6db278e7cc27cf5e250b9037e10eec9bced68ec0c1fc8720ad9c6->enter($__internal_bb791ab224a6db278e7cc27cf5e250b9037e10eec9bced68ec0c1fc8720ad9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb791ab224a6db278e7cc27cf5e250b9037e10eec9bced68ec0c1fc8720ad9c6->leave($__internal_bb791ab224a6db278e7cc27cf5e250b9037e10eec9bced68ec0c1fc8720ad9c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05c97c4a3b6084de4ef3510b8478bb791090472d0e45c527d792045fc3d04c94 = $this->env->getExtension("native_profiler");
        $__internal_05c97c4a3b6084de4ef3510b8478bb791090472d0e45c527d792045fc3d04c94->enter($__internal_05c97c4a3b6084de4ef3510b8478bb791090472d0e45c527d792045fc3d04c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des chercheurs";
        
        $__internal_05c97c4a3b6084de4ef3510b8478bb791090472d0e45c527d792045fc3d04c94->leave($__internal_05c97c4a3b6084de4ef3510b8478bb791090472d0e45c527d792045fc3d04c94_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_e155658ccafa350632eb1cca70de78f5ef96ddf829b695c218c34a10bd5ab24e = $this->env->getExtension("native_profiler");
        $__internal_e155658ccafa350632eb1cca70de78f5ef96ddf829b695c218c34a10bd5ab24e->enter($__internal_e155658ccafa350632eb1cca70de78f5ef96ddf829b695c218c34a10bd5ab24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_e155658ccafa350632eb1cca70de78f5ef96ddf829b695c218c34a10bd5ab24e->leave($__internal_e155658ccafa350632eb1cca70de78f5ef96ddf829b695c218c34a10bd5ab24e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4b7de7ccc0107631fe34cd665fb3451ce3d3ce3a4d6aa47b3197c83708bf108 = $this->env->getExtension("native_profiler");
        $__internal_d4b7de7ccc0107631fe34cd665fb3451ce3d3ce3a4d6aa47b3197c83708bf108->enter($__internal_d4b7de7ccc0107631fe34cd665fb3451ce3d3ce3a4d6aa47b3197c83708bf108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("chercheur", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "nom", array()), "html", null, true);
            echo " travaille dans le laboratoire ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "laboratoire", array()), "nom", array()), "html", null, true);
            echo " à l'organisation ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "organisation", array()), "nom", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<ul>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
            foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
                // line 13
                echo "\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
                echo " travaille dans le laboratoire ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chercheur"], "laboratoire", array()), "nom", array()), "html", null, true);
                echo " à l'organisation ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chercheur"], "organisation", array()), "nom", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chercheur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</ul>
";
        }
        // line 17
        echo "

";
        
        $__internal_d4b7de7ccc0107631fe34cd665fb3451ce3d3ce3a4d6aa47b3197c83708bf108->leave($__internal_d4b7de7ccc0107631fe34cd665fb3451ce3d3ce3a4d6aa47b3197c83708bf108_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 17,  104 => 15,  89 => 13,  85 => 12,  82 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Liste des chercheurs{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if chercheur is defined %}*/
/* 	<h1>{{ chercheur.id }} : {{ chercheur.nom }} travaille dans le laboratoire {{ chercheur.laboratoire.nom }} à l'organisation {{ chercheur.organisation.nom }}</h1>*/
/* {% else %}*/
/* <ul>*/
/* {% for chercheur in listeChercheur %}*/
/* 	<li>{{ chercheur.id }} : {{ chercheur.nom }} travaille dans le laboratoire {{ chercheur.laboratoire.nom }} à l'organisation {{ chercheur.organisation.nom }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* */
/* {% endblock %}*/
