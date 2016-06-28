<?php

/* @Publication/Chercheur/view.html.twig */
class __TwigTemplate_f408ae0abd7f3c1f1846b839871fad1006fd718a95c0c45c7adebc93b504686d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Chercheur/view.html.twig", 1);
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
        $__internal_2cc8dd7e496d88e22a55e57e2c50ba793c10d651741b0cd39ba7c1d21f19351e = $this->env->getExtension("native_profiler");
        $__internal_2cc8dd7e496d88e22a55e57e2c50ba793c10d651741b0cd39ba7c1d21f19351e->enter($__internal_2cc8dd7e496d88e22a55e57e2c50ba793c10d651741b0cd39ba7c1d21f19351e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Chercheur/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc8dd7e496d88e22a55e57e2c50ba793c10d651741b0cd39ba7c1d21f19351e->leave($__internal_2cc8dd7e496d88e22a55e57e2c50ba793c10d651741b0cd39ba7c1d21f19351e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe3563257afc8af5cc6fefc04264011dc51d0358537cc5b7a711642a5aa72130 = $this->env->getExtension("native_profiler");
        $__internal_fe3563257afc8af5cc6fefc04264011dc51d0358537cc5b7a711642a5aa72130->enter($__internal_fe3563257afc8af5cc6fefc04264011dc51d0358537cc5b7a711642a5aa72130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des chercheurs";
        
        $__internal_fe3563257afc8af5cc6fefc04264011dc51d0358537cc5b7a711642a5aa72130->leave($__internal_fe3563257afc8af5cc6fefc04264011dc51d0358537cc5b7a711642a5aa72130_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_88545fc6728463330581dd08bd06d1d796171802d272d42439597079a7fcdf85 = $this->env->getExtension("native_profiler");
        $__internal_88545fc6728463330581dd08bd06d1d796171802d272d42439597079a7fcdf85->enter($__internal_88545fc6728463330581dd08bd06d1d796171802d272d42439597079a7fcdf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_88545fc6728463330581dd08bd06d1d796171802d272d42439597079a7fcdf85->leave($__internal_88545fc6728463330581dd08bd06d1d796171802d272d42439597079a7fcdf85_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f618e23d503cca3cb2a3f639b6d20d90cca15921e4ac4ef116393154f9bba79b = $this->env->getExtension("native_profiler");
        $__internal_f618e23d503cca3cb2a3f639b6d20d90cca15921e4ac4ef116393154f9bba79b->enter($__internal_f618e23d503cca3cb2a3f639b6d20d90cca15921e4ac4ef116393154f9bba79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f618e23d503cca3cb2a3f639b6d20d90cca15921e4ac4ef116393154f9bba79b->leave($__internal_f618e23d503cca3cb2a3f639b6d20d90cca15921e4ac4ef116393154f9bba79b_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Chercheur/view.html.twig";
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
