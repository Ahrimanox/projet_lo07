<?php

/* @Publication/Default/index.html.twig */
class __TwigTemplate_396b72952073e966339197c3879be13906e2c117a8ec72fb6bc5e42e14f35261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Publication/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff666603488007d496cfb8545d1a4b82d5d37189c9bc8facb6a237a5c2579a74 = $this->env->getExtension("native_profiler");
        $__internal_ff666603488007d496cfb8545d1a4b82d5d37189c9bc8facb6a237a5c2579a74->enter($__internal_ff666603488007d496cfb8545d1a4b82d5d37189c9bc8facb6a237a5c2579a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff666603488007d496cfb8545d1a4b82d5d37189c9bc8facb6a237a5c2579a74->leave($__internal_ff666603488007d496cfb8545d1a4b82d5d37189c9bc8facb6a237a5c2579a74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8e9e7970f66cd666f5e91551c6ff847af3bb0d00cdda8a2032eacdda9e95795 = $this->env->getExtension("native_profiler");
        $__internal_e8e9e7970f66cd666f5e91551c6ff847af3bb0d00cdda8a2032eacdda9e95795->enter($__internal_e8e9e7970f66cd666f5e91551c6ff847af3bb0d00cdda8a2032eacdda9e95795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e8e9e7970f66cd666f5e91551c6ff847af3bb0d00cdda8a2032eacdda9e95795->leave($__internal_e8e9e7970f66cd666f5e91551c6ff847af3bb0d00cdda8a2032eacdda9e95795_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_88cc143ceebe2fbbae9fa826391b72d4ad20686083e71c1240be23df38b8d5f9 = $this->env->getExtension("native_profiler");
        $__internal_88cc143ceebe2fbbae9fa826391b72d4ad20686083e71c1240be23df38b8d5f9->enter($__internal_88cc143ceebe2fbbae9fa826391b72d4ad20686083e71c1240be23df38b8d5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_88cc143ceebe2fbbae9fa826391b72d4ad20686083e71c1240be23df38b8d5f9->leave($__internal_88cc143ceebe2fbbae9fa826391b72d4ad20686083e71c1240be23df38b8d5f9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1238392930d77cd92afdbefb1bbe5022f7152ab7f5e4a75c51c73ccac878fdd4 = $this->env->getExtension("native_profiler");
        $__internal_1238392930d77cd92afdbefb1bbe5022f7152ab7f5e4a75c51c73ccac878fdd4->enter($__internal_1238392930d77cd92afdbefb1bbe5022f7152ab7f5e4a75c51c73ccac878fdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        
        $__internal_1238392930d77cd92afdbefb1bbe5022f7152ab7f5e4a75c51c73ccac878fdd4->leave($__internal_1238392930d77cd92afdbefb1bbe5022f7152ab7f5e4a75c51c73ccac878fdd4_prof);

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
        return array (  64 => 7,  58 => 6,  47 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
