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
        $__internal_f219029ed1de0e62102b3525585d72bb8432cee44b7b657e77d9b697ac45061b = $this->env->getExtension("native_profiler");
        $__internal_f219029ed1de0e62102b3525585d72bb8432cee44b7b657e77d9b697ac45061b->enter($__internal_f219029ed1de0e62102b3525585d72bb8432cee44b7b657e77d9b697ac45061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Laboratoire:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f219029ed1de0e62102b3525585d72bb8432cee44b7b657e77d9b697ac45061b->leave($__internal_f219029ed1de0e62102b3525585d72bb8432cee44b7b657e77d9b697ac45061b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd3cabf77d4f3a7604a93769401758454ad5b905c704f89424f411abfd4f9b06 = $this->env->getExtension("native_profiler");
        $__internal_fd3cabf77d4f3a7604a93769401758454ad5b905c704f89424f411abfd4f9b06->enter($__internal_fd3cabf77d4f3a7604a93769401758454ad5b905c704f89424f411abfd4f9b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un laboratoire";
        
        $__internal_fd3cabf77d4f3a7604a93769401758454ad5b905c704f89424f411abfd4f9b06->leave($__internal_fd3cabf77d4f3a7604a93769401758454ad5b905c704f89424f411abfd4f9b06_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_49f90e4b04e3f21cd482c18652c332e8ae7335a5b074032053b586cd3e4346f6 = $this->env->getExtension("native_profiler");
        $__internal_49f90e4b04e3f21cd482c18652c332e8ae7335a5b074032053b586cd3e4346f6->enter($__internal_49f90e4b04e3f21cd482c18652c332e8ae7335a5b074032053b586cd3e4346f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_49f90e4b04e3f21cd482c18652c332e8ae7335a5b074032053b586cd3e4346f6->leave($__internal_49f90e4b04e3f21cd482c18652c332e8ae7335a5b074032053b586cd3e4346f6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8d9512fbe0d80a1dea643ef1310737acf5db694b27519c8100d30f4837529bd = $this->env->getExtension("native_profiler");
        $__internal_a8d9512fbe0d80a1dea643ef1310737acf5db694b27519c8100d30f4837529bd->enter($__internal_a8d9512fbe0d80a1dea643ef1310737acf5db694b27519c8100d30f4837529bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'errors');
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
        
        $__internal_a8d9512fbe0d80a1dea643ef1310737acf5db694b27519c8100d30f4837529bd->leave($__internal_a8d9512fbe0d80a1dea643ef1310737acf5db694b27519c8100d30f4837529bd_prof);

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
        return array (  107 => 26,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  79 => 13,  75 => 12,  71 => 11,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
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
/* 		{{ form_label(form.organisation, "Nom : ") }}*/
/* 		{{ form_widget(form.organisation, {"attr": {"class": "form-control"}}) }}*/
/* 		{{ form_errors(form.organisation) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_widget(form.enregistrer, {"attr": {"class": "btn btn-default"}}) }}*/
/* 	</div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* */
/* */
/* {% endblock %}*/
