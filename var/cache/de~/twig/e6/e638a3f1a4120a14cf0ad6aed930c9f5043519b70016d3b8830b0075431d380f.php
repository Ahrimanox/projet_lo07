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
        $__internal_9ff39d314010c830b60977ec0f8555418237a711ec1b241f15233d12a167b591 = $this->env->getExtension("native_profiler");
        $__internal_9ff39d314010c830b60977ec0f8555418237a711ec1b241f15233d12a167b591->enter($__internal_9ff39d314010c830b60977ec0f8555418237a711ec1b241f15233d12a167b591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff39d314010c830b60977ec0f8555418237a711ec1b241f15233d12a167b591->leave($__internal_9ff39d314010c830b60977ec0f8555418237a711ec1b241f15233d12a167b591_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66855e15a0e965757f608e9fe0d3db8b39fbf9d95d2ba333fcee4c87eabae587 = $this->env->getExtension("native_profiler");
        $__internal_66855e15a0e965757f608e9fe0d3db8b39fbf9d95d2ba333fcee4c87eabae587->enter($__internal_66855e15a0e965757f608e9fe0d3db8b39fbf9d95d2ba333fcee4c87eabae587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_66855e15a0e965757f608e9fe0d3db8b39fbf9d95d2ba333fcee4c87eabae587->leave($__internal_66855e15a0e965757f608e9fe0d3db8b39fbf9d95d2ba333fcee4c87eabae587_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_e17a1d0fa7a17082c3a1e73a838824a882cf57bcc0354aa15e7b1e9fbd4d0f7d = $this->env->getExtension("native_profiler");
        $__internal_e17a1d0fa7a17082c3a1e73a838824a882cf57bcc0354aa15e7b1e9fbd4d0f7d->enter($__internal_e17a1d0fa7a17082c3a1e73a838824a882cf57bcc0354aa15e7b1e9fbd4d0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_e17a1d0fa7a17082c3a1e73a838824a882cf57bcc0354aa15e7b1e9fbd4d0f7d->leave($__internal_e17a1d0fa7a17082c3a1e73a838824a882cf57bcc0354aa15e7b1e9fbd4d0f7d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bf1c92c65d09a4ad24df951d900e90c6d8987fa828157d5f8b668fa01e2788f = $this->env->getExtension("native_profiler");
        $__internal_0bf1c92c65d09a4ad24df951d900e90c6d8987fa828157d5f8b668fa01e2788f->enter($__internal_0bf1c92c65d09a4ad24df951d900e90c6d8987fa828157d5f8b668fa01e2788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0bf1c92c65d09a4ad24df951d900e90c6d8987fa828157d5f8b668fa01e2788f->leave($__internal_0bf1c92c65d09a4ad24df951d900e90c6d8987fa828157d5f8b668fa01e2788f_prof);

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
