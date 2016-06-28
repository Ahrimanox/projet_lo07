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
        $__internal_6cba48d8ddbae171be508a9a2078a3dbb45096bbd1404c5d735196550cc44bd7 = $this->env->getExtension("native_profiler");
        $__internal_6cba48d8ddbae171be508a9a2078a3dbb45096bbd1404c5d735196550cc44bd7->enter($__internal_6cba48d8ddbae171be508a9a2078a3dbb45096bbd1404c5d735196550cc44bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Categorie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cba48d8ddbae171be508a9a2078a3dbb45096bbd1404c5d735196550cc44bd7->leave($__internal_6cba48d8ddbae171be508a9a2078a3dbb45096bbd1404c5d735196550cc44bd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eb4fc75c2b675e2d93b34c7e6eaccaa5951c4d46441f0a6769efc4ce4b7ce4c = $this->env->getExtension("native_profiler");
        $__internal_8eb4fc75c2b675e2d93b34c7e6eaccaa5951c4d46441f0a6769efc4ce4b7ce4c->enter($__internal_8eb4fc75c2b675e2d93b34c7e6eaccaa5951c4d46441f0a6769efc4ce4b7ce4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une categorie";
        
        $__internal_8eb4fc75c2b675e2d93b34c7e6eaccaa5951c4d46441f0a6769efc4ce4b7ce4c->leave($__internal_8eb4fc75c2b675e2d93b34c7e6eaccaa5951c4d46441f0a6769efc4ce4b7ce4c_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_6c2419495ae4bd56191bccd95acc6379b2650dc831324ed2dd43d9a21cf311d9 = $this->env->getExtension("native_profiler");
        $__internal_6c2419495ae4bd56191bccd95acc6379b2650dc831324ed2dd43d9a21cf311d9->enter($__internal_6c2419495ae4bd56191bccd95acc6379b2650dc831324ed2dd43d9a21cf311d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6c2419495ae4bd56191bccd95acc6379b2650dc831324ed2dd43d9a21cf311d9->leave($__internal_6c2419495ae4bd56191bccd95acc6379b2650dc831324ed2dd43d9a21cf311d9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea34d83f3a87925a0dd106bf8c38de9f894df04f55eeb147c9a705706304b8f = $this->env->getExtension("native_profiler");
        $__internal_2ea34d83f3a87925a0dd106bf8c38de9f894df04f55eeb147c9a705706304b8f->enter($__internal_2ea34d83f3a87925a0dd106bf8c38de9f894df04f55eeb147c9a705706304b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abreviation", array()), 'label', array("label" => "Abreviation : "));
        echo "
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abreviation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abreviation", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
\t</div>

";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_2ea34d83f3a87925a0dd106bf8c38de9f894df04f55eeb147c9a705706304b8f->leave($__internal_2ea34d83f3a87925a0dd106bf8c38de9f894df04f55eeb147c9a705706304b8f_prof);

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
        return array (  107 => 26,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  79 => 13,  75 => 12,  71 => 11,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
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
/* 		{{ form_label(form.abreviation, "Abreviation : ") }}*/
/* 		{{ form_widget(form.abreviation, {"attr": {"class": "form-control"}}) }}*/
/* 		{{ form_errors(form.abreviation) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_widget(form.enregistrer, {"attr": {"class": "btn btn-default"}}) }}*/
/* 	</div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
