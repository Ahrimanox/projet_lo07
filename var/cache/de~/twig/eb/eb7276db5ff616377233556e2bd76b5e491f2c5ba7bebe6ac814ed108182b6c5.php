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
        $__internal_96d173b58b947fa7d431767c13d18736ea1ffc0c0a31ec0503e6be357838540b = $this->env->getExtension("native_profiler");
        $__internal_96d173b58b947fa7d431767c13d18736ea1ffc0c0a31ec0503e6be357838540b->enter($__internal_96d173b58b947fa7d431767c13d18736ea1ffc0c0a31ec0503e6be357838540b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96d173b58b947fa7d431767c13d18736ea1ffc0c0a31ec0503e6be357838540b->leave($__internal_96d173b58b947fa7d431767c13d18736ea1ffc0c0a31ec0503e6be357838540b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f33bd4e290820aaa8d0bd600fffdc7a448d5bd2839168d51960909d067535a5 = $this->env->getExtension("native_profiler");
        $__internal_9f33bd4e290820aaa8d0bd600fffdc7a448d5bd2839168d51960909d067535a5->enter($__internal_9f33bd4e290820aaa8d0bd600fffdc7a448d5bd2839168d51960909d067535a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des chercheurs";
        
        $__internal_9f33bd4e290820aaa8d0bd600fffdc7a448d5bd2839168d51960909d067535a5->leave($__internal_9f33bd4e290820aaa8d0bd600fffdc7a448d5bd2839168d51960909d067535a5_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_b273de116f491c388b9940345563794b08ca95618f0e12f719c246c758ce9605 = $this->env->getExtension("native_profiler");
        $__internal_b273de116f491c388b9940345563794b08ca95618f0e12f719c246c758ce9605->enter($__internal_b273de116f491c388b9940345563794b08ca95618f0e12f719c246c758ce9605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b273de116f491c388b9940345563794b08ca95618f0e12f719c246c758ce9605->leave($__internal_b273de116f491c388b9940345563794b08ca95618f0e12f719c246c758ce9605_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5907be2347d19bae536387b3c730290d311a83601ea2cf05849a2f2349212307 = $this->env->getExtension("native_profiler");
        $__internal_5907be2347d19bae536387b3c730290d311a83601ea2cf05849a2f2349212307->enter($__internal_5907be2347d19bae536387b3c730290d311a83601ea2cf05849a2f2349212307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5907be2347d19bae536387b3c730290d311a83601ea2cf05849a2f2349212307->leave($__internal_5907be2347d19bae536387b3c730290d311a83601ea2cf05849a2f2349212307_prof);

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
