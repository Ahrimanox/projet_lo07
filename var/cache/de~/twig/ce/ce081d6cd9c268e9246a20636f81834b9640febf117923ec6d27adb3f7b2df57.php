<?php

/* PublicationBundle:Organisation:add.html.twig */
class __TwigTemplate_9167bec4e00b7f70a67b79c194ed0aaf58a61c8667b9f01ca66388fa7befd2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Organisation:add.html.twig", 1);
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
        $__internal_4530cb4a7920efa210813e658de55deab48351c09deb6acb050e205c65a7a7e3 = $this->env->getExtension("native_profiler");
        $__internal_4530cb4a7920efa210813e658de55deab48351c09deb6acb050e205c65a7a7e3->enter($__internal_4530cb4a7920efa210813e658de55deab48351c09deb6acb050e205c65a7a7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Organisation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4530cb4a7920efa210813e658de55deab48351c09deb6acb050e205c65a7a7e3->leave($__internal_4530cb4a7920efa210813e658de55deab48351c09deb6acb050e205c65a7a7e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e50e4cebda0d435544af0cccac039b846ac913f662177b4a585dd4098faba5b = $this->env->getExtension("native_profiler");
        $__internal_1e50e4cebda0d435544af0cccac039b846ac913f662177b4a585dd4098faba5b->enter($__internal_1e50e4cebda0d435544af0cccac039b846ac913f662177b4a585dd4098faba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une organisation";
        
        $__internal_1e50e4cebda0d435544af0cccac039b846ac913f662177b4a585dd4098faba5b->leave($__internal_1e50e4cebda0d435544af0cccac039b846ac913f662177b4a585dd4098faba5b_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_d1b011a18c4640494d88b8a9c66aac4e38db05de176a52d9fec912a682302c45 = $this->env->getExtension("native_profiler");
        $__internal_d1b011a18c4640494d88b8a9c66aac4e38db05de176a52d9fec912a682302c45->enter($__internal_d1b011a18c4640494d88b8a9c66aac4e38db05de176a52d9fec912a682302c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d1b011a18c4640494d88b8a9c66aac4e38db05de176a52d9fec912a682302c45->leave($__internal_d1b011a18c4640494d88b8a9c66aac4e38db05de176a52d9fec912a682302c45_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_98aea98ecd9933f0cef2c36babb2cc4340367248b9c4fe39e20e8e9c346795ce = $this->env->getExtension("native_profiler");
        $__internal_98aea98ecd9933f0cef2c36babb2cc4340367248b9c4fe39e20e8e9c346795ce->enter($__internal_98aea98ecd9933f0cef2c36babb2cc4340367248b9c4fe39e20e8e9c346795ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "class" => "col-sm-6")));
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
\t</div>

";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_98aea98ecd9933f0cef2c36babb2cc4340367248b9c4fe39e20e8e9c346795ce->leave($__internal_98aea98ecd9933f0cef2c36babb2cc4340367248b9c4fe39e20e8e9c346795ce_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Organisation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  86 => 17,  79 => 13,  75 => 12,  71 => 11,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'une organisation{% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ form_start(form, {"attr": {"role": "form", "class": "col-sm-6"}}) }}*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_label(form.nom, "Nom : ") }}*/
/* 		{{ form_widget(form.nom, {"attr": {"class": "form-control"}}) }}*/
/* 		{{ form_errors(form.nom) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_widget(form.enregistrer, {"attr": {"class": "btn btn-default"}}) }}*/
/* 	</div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
