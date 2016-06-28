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
        $__internal_e28ab16e690e3b8aa7d09e60b1b9f89ced9596259deefd83bfb374c2af4ba8d6 = $this->env->getExtension("native_profiler");
        $__internal_e28ab16e690e3b8aa7d09e60b1b9f89ced9596259deefd83bfb374c2af4ba8d6->enter($__internal_e28ab16e690e3b8aa7d09e60b1b9f89ced9596259deefd83bfb374c2af4ba8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Categorie:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28ab16e690e3b8aa7d09e60b1b9f89ced9596259deefd83bfb374c2af4ba8d6->leave($__internal_e28ab16e690e3b8aa7d09e60b1b9f89ced9596259deefd83bfb374c2af4ba8d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f816fe7c479abbf114a469636e560fc7efba21a1d071f842695ecd1a7403dd4 = $this->env->getExtension("native_profiler");
        $__internal_3f816fe7c479abbf114a469636e560fc7efba21a1d071f842695ecd1a7403dd4->enter($__internal_3f816fe7c479abbf114a469636e560fc7efba21a1d071f842695ecd1a7403dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des categories";
        
        $__internal_3f816fe7c479abbf114a469636e560fc7efba21a1d071f842695ecd1a7403dd4->leave($__internal_3f816fe7c479abbf114a469636e560fc7efba21a1d071f842695ecd1a7403dd4_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_9662cf390058ece228b1d25a799171dbf0bca8fc59cef80a2e56ab4710bca6ba = $this->env->getExtension("native_profiler");
        $__internal_9662cf390058ece228b1d25a799171dbf0bca8fc59cef80a2e56ab4710bca6ba->enter($__internal_9662cf390058ece228b1d25a799171dbf0bca8fc59cef80a2e56ab4710bca6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9662cf390058ece228b1d25a799171dbf0bca8fc59cef80a2e56ab4710bca6ba->leave($__internal_9662cf390058ece228b1d25a799171dbf0bca8fc59cef80a2e56ab4710bca6ba_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c15c3477e87579e54840fada079d44eaaa0828c487db39c748bbe5aa1cdbbadb = $this->env->getExtension("native_profiler");
        $__internal_c15c3477e87579e54840fada079d44eaaa0828c487db39c748bbe5aa1cdbbadb->enter($__internal_c15c3477e87579e54840fada079d44eaaa0828c487db39c748bbe5aa1cdbbadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c15c3477e87579e54840fada079d44eaaa0828c487db39c748bbe5aa1cdbbadb->leave($__internal_c15c3477e87579e54840fada079d44eaaa0828c487db39c748bbe5aa1cdbbadb_prof);

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
