<?php

/* @Publication/Chercheur/add.html.twig */
class __TwigTemplate_802b903306a3489bd20537d653eab0c5e562f713bdeebf4f8bc816450903956d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Chercheur/add.html.twig", 1);
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
        $__internal_7f3efec1f00cfd9f5bf00cdb5019ca4f95175d3df720ed756d486aaeed42670c = $this->env->getExtension("native_profiler");
        $__internal_7f3efec1f00cfd9f5bf00cdb5019ca4f95175d3df720ed756d486aaeed42670c->enter($__internal_7f3efec1f00cfd9f5bf00cdb5019ca4f95175d3df720ed756d486aaeed42670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Chercheur/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3efec1f00cfd9f5bf00cdb5019ca4f95175d3df720ed756d486aaeed42670c->leave($__internal_7f3efec1f00cfd9f5bf00cdb5019ca4f95175d3df720ed756d486aaeed42670c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51d6532dde04f692762c581b48f999f03df03767d856110eea2867690cb42fb6 = $this->env->getExtension("native_profiler");
        $__internal_51d6532dde04f692762c581b48f999f03df03767d856110eea2867690cb42fb6->enter($__internal_51d6532dde04f692762c581b48f999f03df03767d856110eea2867690cb42fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_51d6532dde04f692762c581b48f999f03df03767d856110eea2867690cb42fb6->leave($__internal_51d6532dde04f692762c581b48f999f03df03767d856110eea2867690cb42fb6_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_b8177b02dfda514040f6ac51a7b9c41a23e3e083f82502398e303982e7264efd = $this->env->getExtension("native_profiler");
        $__internal_b8177b02dfda514040f6ac51a7b9c41a23e3e083f82502398e303982e7264efd->enter($__internal_b8177b02dfda514040f6ac51a7b9c41a23e3e083f82502398e303982e7264efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b8177b02dfda514040f6ac51a7b9c41a23e3e083f82502398e303982e7264efd->leave($__internal_b8177b02dfda514040f6ac51a7b9c41a23e3e083f82502398e303982e7264efd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8119726d87fd7fddbbe6503e3e3c69e8ac38b3f8beb46897c89d4a42d3ee0a95 = $this->env->getExtension("native_profiler");
        $__internal_8119726d87fd7fddbbe6503e3e3c69e8ac38b3f8beb46897c89d4a42d3ee0a95->enter($__internal_8119726d87fd7fddbbe6503e3e3c69e8ac38b3f8beb46897c89d4a42d3ee0a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8119726d87fd7fddbbe6503e3e3c69e8ac38b3f8beb46897c89d4a42d3ee0a95->leave($__internal_8119726d87fd7fddbbe6503e3e3c69e8ac38b3f8beb46897c89d4a42d3ee0a95_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Chercheur/add.html.twig";
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
