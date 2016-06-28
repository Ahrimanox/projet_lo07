<?php

/* @Publication/Organisation/add.html.twig */
class __TwigTemplate_0d4729228b0d82c5531ef8dd1c7036cfd00a4d1c24db64e8854000891f905472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Organisation/add.html.twig", 1);
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
        $__internal_deac9e570ec4ca56614b9e6f1336305ba918eaf098a6967638b632149c9a82bd = $this->env->getExtension("native_profiler");
        $__internal_deac9e570ec4ca56614b9e6f1336305ba918eaf098a6967638b632149c9a82bd->enter($__internal_deac9e570ec4ca56614b9e6f1336305ba918eaf098a6967638b632149c9a82bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Organisation/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deac9e570ec4ca56614b9e6f1336305ba918eaf098a6967638b632149c9a82bd->leave($__internal_deac9e570ec4ca56614b9e6f1336305ba918eaf098a6967638b632149c9a82bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eff128996b6ec47a684c17d5f2b8469798ff4255b6bfb285053e25771e5d6207 = $this->env->getExtension("native_profiler");
        $__internal_eff128996b6ec47a684c17d5f2b8469798ff4255b6bfb285053e25771e5d6207->enter($__internal_eff128996b6ec47a684c17d5f2b8469798ff4255b6bfb285053e25771e5d6207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une organisation";
        
        $__internal_eff128996b6ec47a684c17d5f2b8469798ff4255b6bfb285053e25771e5d6207->leave($__internal_eff128996b6ec47a684c17d5f2b8469798ff4255b6bfb285053e25771e5d6207_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_cf4df8fca4bc0da2d8be96a05ef697a5a1f009bdeb5470bf66103648906f4378 = $this->env->getExtension("native_profiler");
        $__internal_cf4df8fca4bc0da2d8be96a05ef697a5a1f009bdeb5470bf66103648906f4378->enter($__internal_cf4df8fca4bc0da2d8be96a05ef697a5a1f009bdeb5470bf66103648906f4378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cf4df8fca4bc0da2d8be96a05ef697a5a1f009bdeb5470bf66103648906f4378->leave($__internal_cf4df8fca4bc0da2d8be96a05ef697a5a1f009bdeb5470bf66103648906f4378_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d6d4442d2310da101d33484745f9403bbed161c0a78616ceb0bac2b04950634 = $this->env->getExtension("native_profiler");
        $__internal_2d6d4442d2310da101d33484745f9403bbed161c0a78616ceb0bac2b04950634->enter($__internal_2d6d4442d2310da101d33484745f9403bbed161c0a78616ceb0bac2b04950634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d6d4442d2310da101d33484745f9403bbed161c0a78616ceb0bac2b04950634->leave($__internal_2d6d4442d2310da101d33484745f9403bbed161c0a78616ceb0bac2b04950634_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Organisation/add.html.twig";
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
