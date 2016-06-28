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
        $__internal_5e11404c75f1932eeb4c0c3ceae708be2bef07fb71262fb53e6bcbe2d698ac90 = $this->env->getExtension("native_profiler");
        $__internal_5e11404c75f1932eeb4c0c3ceae708be2bef07fb71262fb53e6bcbe2d698ac90->enter($__internal_5e11404c75f1932eeb4c0c3ceae708be2bef07fb71262fb53e6bcbe2d698ac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e11404c75f1932eeb4c0c3ceae708be2bef07fb71262fb53e6bcbe2d698ac90->leave($__internal_5e11404c75f1932eeb4c0c3ceae708be2bef07fb71262fb53e6bcbe2d698ac90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfa419bf2bac923a0d23266082195f3762cce28777b159e8f7902226a687f739 = $this->env->getExtension("native_profiler");
        $__internal_cfa419bf2bac923a0d23266082195f3762cce28777b159e8f7902226a687f739->enter($__internal_cfa419bf2bac923a0d23266082195f3762cce28777b159e8f7902226a687f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_cfa419bf2bac923a0d23266082195f3762cce28777b159e8f7902226a687f739->leave($__internal_cfa419bf2bac923a0d23266082195f3762cce28777b159e8f7902226a687f739_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_31af3796619b5aacda9bb0306be90f2e67c06cc54eaf87783d3045a51f288d43 = $this->env->getExtension("native_profiler");
        $__internal_31af3796619b5aacda9bb0306be90f2e67c06cc54eaf87783d3045a51f288d43->enter($__internal_31af3796619b5aacda9bb0306be90f2e67c06cc54eaf87783d3045a51f288d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_31af3796619b5aacda9bb0306be90f2e67c06cc54eaf87783d3045a51f288d43->leave($__internal_31af3796619b5aacda9bb0306be90f2e67c06cc54eaf87783d3045a51f288d43_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e940f545c9d89e47aa56f1ab8ec9c2171be3bf656e957b08f83ba7123f6380f2 = $this->env->getExtension("native_profiler");
        $__internal_e940f545c9d89e47aa56f1ab8ec9c2171be3bf656e957b08f83ba7123f6380f2->enter($__internal_e940f545c9d89e47aa56f1ab8ec9c2171be3bf656e957b08f83ba7123f6380f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("PublicationBundle:Article:article.html.twig", "PublicationBundle:Default:index.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_e940f545c9d89e47aa56f1ab8ec9c2171be3bf656e957b08f83ba7123f6380f2->leave($__internal_e940f545c9d89e47aa56f1ab8ec9c2171be3bf656e957b08f83ba7123f6380f2_prof);

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
        return array (  70 => 10,  68 => 9,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Accueil{% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% include "PublicationBundle:Article:article.html.twig" %}*/
/* */
/* {% endblock %}*/
