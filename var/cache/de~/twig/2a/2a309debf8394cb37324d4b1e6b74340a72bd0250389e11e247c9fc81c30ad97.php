<?php

/* PublicationBundle:Categorie:add.html.twig */
class __TwigTemplate_f3d7ef2288afac61baf5099cd1754c8658c4cb0200ce6f773d6c2a31b6fa6e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Categorie:add.html.twig", 1);
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
        $__internal_27de130fde38841749ac0d2ed0b8523c0342126c4ecf2a7742e0c64c1ae47514 = $this->env->getExtension("native_profiler");
        $__internal_27de130fde38841749ac0d2ed0b8523c0342126c4ecf2a7742e0c64c1ae47514->enter($__internal_27de130fde38841749ac0d2ed0b8523c0342126c4ecf2a7742e0c64c1ae47514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Categorie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27de130fde38841749ac0d2ed0b8523c0342126c4ecf2a7742e0c64c1ae47514->leave($__internal_27de130fde38841749ac0d2ed0b8523c0342126c4ecf2a7742e0c64c1ae47514_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d3e2fb958e7120576496f020a52f69befe2e56507df969115db91d66661c161 = $this->env->getExtension("native_profiler");
        $__internal_6d3e2fb958e7120576496f020a52f69befe2e56507df969115db91d66661c161->enter($__internal_6d3e2fb958e7120576496f020a52f69befe2e56507df969115db91d66661c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une categorie";
        
        $__internal_6d3e2fb958e7120576496f020a52f69befe2e56507df969115db91d66661c161->leave($__internal_6d3e2fb958e7120576496f020a52f69befe2e56507df969115db91d66661c161_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_6966e2498b47f8311a8c1297ad0a9bbf209e0be2f053ca7dd49170533dd87ca7 = $this->env->getExtension("native_profiler");
        $__internal_6966e2498b47f8311a8c1297ad0a9bbf209e0be2f053ca7dd49170533dd87ca7->enter($__internal_6966e2498b47f8311a8c1297ad0a9bbf209e0be2f053ca7dd49170533dd87ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6966e2498b47f8311a8c1297ad0a9bbf209e0be2f053ca7dd49170533dd87ca7->leave($__internal_6966e2498b47f8311a8c1297ad0a9bbf209e0be2f053ca7dd49170533dd87ca7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8406c0c9bb505903433c1defc4d22e6e8067bf82110c7f2c479552446947adf8 = $this->env->getExtension("native_profiler");
        $__internal_8406c0c9bb505903433c1defc4d22e6e8067bf82110c7f2c479552446947adf8->enter($__internal_8406c0c9bb505903433c1defc4d22e6e8067bf82110c7f2c479552446947adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8406c0c9bb505903433c1defc4d22e6e8067bf82110c7f2c479552446947adf8->leave($__internal_8406c0c9bb505903433c1defc4d22e6e8067bf82110c7f2c479552446947adf8_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Categorie:add.html.twig";
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
/* {% block title %}Ajout d'une categorie{% endblock %}*/
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
