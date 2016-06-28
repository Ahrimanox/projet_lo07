<?php

/* PublicationBundle:Laboratoire:add.html.twig */
class __TwigTemplate_3ffc8e33eba04762d6e57a5377d2003c23a106e435bf2311db68ead5e111c21a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Laboratoire:add.html.twig", 1);
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
        $__internal_a7bb3118ec1a85b6514c02bc320c1962a52483eed87207e0fead82296bbf7095 = $this->env->getExtension("native_profiler");
        $__internal_a7bb3118ec1a85b6514c02bc320c1962a52483eed87207e0fead82296bbf7095->enter($__internal_a7bb3118ec1a85b6514c02bc320c1962a52483eed87207e0fead82296bbf7095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Laboratoire:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7bb3118ec1a85b6514c02bc320c1962a52483eed87207e0fead82296bbf7095->leave($__internal_a7bb3118ec1a85b6514c02bc320c1962a52483eed87207e0fead82296bbf7095_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e14d9432725ef9de65cc7b983838cf2e06ddec05a1a7e80f815aba54e39038f1 = $this->env->getExtension("native_profiler");
        $__internal_e14d9432725ef9de65cc7b983838cf2e06ddec05a1a7e80f815aba54e39038f1->enter($__internal_e14d9432725ef9de65cc7b983838cf2e06ddec05a1a7e80f815aba54e39038f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un laboratoire";
        
        $__internal_e14d9432725ef9de65cc7b983838cf2e06ddec05a1a7e80f815aba54e39038f1->leave($__internal_e14d9432725ef9de65cc7b983838cf2e06ddec05a1a7e80f815aba54e39038f1_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_2367e964576bd6c7d457dd46e514b420491255583231668510aefb509a1c6661 = $this->env->getExtension("native_profiler");
        $__internal_2367e964576bd6c7d457dd46e514b420491255583231668510aefb509a1c6661->enter($__internal_2367e964576bd6c7d457dd46e514b420491255583231668510aefb509a1c6661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2367e964576bd6c7d457dd46e514b420491255583231668510aefb509a1c6661->leave($__internal_2367e964576bd6c7d457dd46e514b420491255583231668510aefb509a1c6661_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef01be187462e46761cd7e9b8fee0f01a6753a76acaf85d9d05f09a1fa95f85c = $this->env->getExtension("native_profiler");
        $__internal_ef01be187462e46761cd7e9b8fee0f01a6753a76acaf85d9d05f09a1fa95f85c->enter($__internal_ef01be187462e46761cd7e9b8fee0f01a6753a76acaf85d9d05f09a1fa95f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef01be187462e46761cd7e9b8fee0f01a6753a76acaf85d9d05f09a1fa95f85c->leave($__internal_ef01be187462e46761cd7e9b8fee0f01a6753a76acaf85d9d05f09a1fa95f85c_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Laboratoire:add.html.twig";
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
/* {% block title %}Ajout d'un laboratoire{% endblock %}*/
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
