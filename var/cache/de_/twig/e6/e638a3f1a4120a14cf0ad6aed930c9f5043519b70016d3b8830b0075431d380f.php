<?php

/* PublicationBundle:Chercheur:add.html.twig */
class __TwigTemplate_542eb2fb792d73e13f0c3bb065d17129c38bb3248474278e454a7bd312f6fd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Chercheur:add.html.twig", 1);
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
        $__internal_24fed05e51a127d31e1d8c51389b8be3fb84face4338107eb845ffb4c6ea4ebf = $this->env->getExtension("native_profiler");
        $__internal_24fed05e51a127d31e1d8c51389b8be3fb84face4338107eb845ffb4c6ea4ebf->enter($__internal_24fed05e51a127d31e1d8c51389b8be3fb84face4338107eb845ffb4c6ea4ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fed05e51a127d31e1d8c51389b8be3fb84face4338107eb845ffb4c6ea4ebf->leave($__internal_24fed05e51a127d31e1d8c51389b8be3fb84face4338107eb845ffb4c6ea4ebf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_935aec6c9b36c3b96327970d8ce475163166164fbb9f3789d7b0e77df58bac8e = $this->env->getExtension("native_profiler");
        $__internal_935aec6c9b36c3b96327970d8ce475163166164fbb9f3789d7b0e77df58bac8e->enter($__internal_935aec6c9b36c3b96327970d8ce475163166164fbb9f3789d7b0e77df58bac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_935aec6c9b36c3b96327970d8ce475163166164fbb9f3789d7b0e77df58bac8e->leave($__internal_935aec6c9b36c3b96327970d8ce475163166164fbb9f3789d7b0e77df58bac8e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_e8ec4efd3bdc119ca699c450b6ce5ceb8ef4df1b549bc86b895a9cfe06750208 = $this->env->getExtension("native_profiler");
        $__internal_e8ec4efd3bdc119ca699c450b6ce5ceb8ef4df1b549bc86b895a9cfe06750208->enter($__internal_e8ec4efd3bdc119ca699c450b6ce5ceb8ef4df1b549bc86b895a9cfe06750208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_e8ec4efd3bdc119ca699c450b6ce5ceb8ef4df1b549bc86b895a9cfe06750208->leave($__internal_e8ec4efd3bdc119ca699c450b6ce5ceb8ef4df1b549bc86b895a9cfe06750208_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7905e9a7ac404b7cb21f397751379061b9ef5a8b90b3ab8a46fcd0d4fdbf42f9 = $this->env->getExtension("native_profiler");
        $__internal_7905e9a7ac404b7cb21f397751379061b9ef5a8b90b3ab8a46fcd0d4fdbf42f9->enter($__internal_7905e9a7ac404b7cb21f397751379061b9ef5a8b90b3ab8a46fcd0d4fdbf42f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom : "));
        echo "
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'label', array("label" => "Organisation : "));
        echo " 
\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laboratoire", array()), 'label', array("label" => "Laboratoire : "));
        echo "
\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laboratoire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laboratoire", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
\t</div>

";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7905e9a7ac404b7cb21f397751379061b9ef5a8b90b3ab8a46fcd0d4fdbf42f9->leave($__internal_7905e9a7ac404b7cb21f397751379061b9ef5a8b90b3ab8a46fcd0d4fdbf42f9_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  131 => 35,  124 => 31,  120 => 30,  116 => 29,  109 => 25,  105 => 24,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  79 => 13,  75 => 12,  71 => 11,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un chercheur{% endblock %}*/
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
/* 		{{ form_label(form.prenom, "Prenom : ") }}*/
/* 		{{ form_widget(form.prenom, {"attr": {"class": "form-control"}}) }}*/
/* 		{{ form_errors(form.prenom) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_label(form.organisation, "Organisation : ") }} */
/* 		{{ form_widget(form.organisation, {"attr": {"class": "form-control"}}) }}*/
/* 		{{ form_errors(form.organisation) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_label(form.laboratoire, "Laboratoire : ") }}*/
/* 		{{ form_widget(form.laboratoire, {"attr": {"class": "form-control"}}) }}*/
/* 		{{ form_errors(form.laboratoire) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_widget(form.enregistrer, {"attr": {"class": "btn btn-default"}}) }}*/
/* 	</div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
