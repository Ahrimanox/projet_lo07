<?php

/* PublicationBundle:Categorie:view.html.twig */
class __TwigTemplate_4ded94fc9e71defe88b1a6f585cda775bad18091eb231c23328137651ccf8522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Categorie:view.html.twig", 1);
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
        $__internal_6bc39bcf09b890dc01f78ac442c1a0f4b0bc3b39473a93bac41506363e876c3c = $this->env->getExtension("native_profiler");
        $__internal_6bc39bcf09b890dc01f78ac442c1a0f4b0bc3b39473a93bac41506363e876c3c->enter($__internal_6bc39bcf09b890dc01f78ac442c1a0f4b0bc3b39473a93bac41506363e876c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Categorie:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc39bcf09b890dc01f78ac442c1a0f4b0bc3b39473a93bac41506363e876c3c->leave($__internal_6bc39bcf09b890dc01f78ac442c1a0f4b0bc3b39473a93bac41506363e876c3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3056b5bd98fb7b34c081b737da3bd485964f58bf1a91e01aa0d0317186967251 = $this->env->getExtension("native_profiler");
        $__internal_3056b5bd98fb7b34c081b737da3bd485964f58bf1a91e01aa0d0317186967251->enter($__internal_3056b5bd98fb7b34c081b737da3bd485964f58bf1a91e01aa0d0317186967251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des categories";
        
        $__internal_3056b5bd98fb7b34c081b737da3bd485964f58bf1a91e01aa0d0317186967251->leave($__internal_3056b5bd98fb7b34c081b737da3bd485964f58bf1a91e01aa0d0317186967251_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_82ec95cb874360ec606aebd5d55bb91a289deafdba45a582417715e074d37a67 = $this->env->getExtension("native_profiler");
        $__internal_82ec95cb874360ec606aebd5d55bb91a289deafdba45a582417715e074d37a67->enter($__internal_82ec95cb874360ec606aebd5d55bb91a289deafdba45a582417715e074d37a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_82ec95cb874360ec606aebd5d55bb91a289deafdba45a582417715e074d37a67->leave($__internal_82ec95cb874360ec606aebd5d55bb91a289deafdba45a582417715e074d37a67_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc324d6bf9af8b48449735d4d7164de73c5f07e64cd3be1c175e53c18efe99ab = $this->env->getExtension("native_profiler");
        $__internal_dc324d6bf9af8b48449735d4d7164de73c5f07e64cd3be1c175e53c18efe99ab->enter($__internal_dc324d6bf9af8b48449735d4d7164de73c5f07e64cd3be1c175e53c18efe99ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("categorie", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<ul>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCategorie"]) ? $context["listeCategorie"] : $this->getContext($context, "listeCategorie")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 13
                echo "\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</ul>
";
        }
        // line 17
        echo "
";
        
        $__internal_dc324d6bf9af8b48449735d4d7164de73c5f07e64cd3be1c175e53c18efe99ab->leave($__internal_dc324d6bf9af8b48449735d4d7164de73c5f07e64cd3be1c175e53c18efe99ab_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Categorie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  96 => 15,  85 => 13,  81 => 12,  78 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Liste des categories{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if categorie is defined %}*/
/* 	<h1>{{ categorie.id }} : {{ categorie.nom }}</h1>*/
/* {% else %}*/
/* <ul>*/
/* {% for categorie in listeCategorie %}*/
/* 	<li>{{ categorie.id }} : {{ categorie.nom }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
