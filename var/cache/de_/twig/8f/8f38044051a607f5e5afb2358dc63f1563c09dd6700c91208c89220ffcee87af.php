<?php

/* @Publication/Laboratoire/add.html.twig */
class __TwigTemplate_a6774d55a26922a2d55b984448b7090eb88bce0dd49f63574a5ff11583e4a99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Laboratoire/add.html.twig", 1);
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
        $__internal_25d4b62e82635e6274941676c4bf12c6b60b0b016b328ae5ef2b8e7fbf3fe0f4 = $this->env->getExtension("native_profiler");
        $__internal_25d4b62e82635e6274941676c4bf12c6b60b0b016b328ae5ef2b8e7fbf3fe0f4->enter($__internal_25d4b62e82635e6274941676c4bf12c6b60b0b016b328ae5ef2b8e7fbf3fe0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Laboratoire/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d4b62e82635e6274941676c4bf12c6b60b0b016b328ae5ef2b8e7fbf3fe0f4->leave($__internal_25d4b62e82635e6274941676c4bf12c6b60b0b016b328ae5ef2b8e7fbf3fe0f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_391ea834f5a0ecc92a10ab612d51c8e61cb1d32609867783df624b7928e5dfaa = $this->env->getExtension("native_profiler");
        $__internal_391ea834f5a0ecc92a10ab612d51c8e61cb1d32609867783df624b7928e5dfaa->enter($__internal_391ea834f5a0ecc92a10ab612d51c8e61cb1d32609867783df624b7928e5dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un laboratoire";
        
        $__internal_391ea834f5a0ecc92a10ab612d51c8e61cb1d32609867783df624b7928e5dfaa->leave($__internal_391ea834f5a0ecc92a10ab612d51c8e61cb1d32609867783df624b7928e5dfaa_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_2b8e008817e51de514bc3c53bc57b7e511cc5fd06d699c932b06d8166af01d66 = $this->env->getExtension("native_profiler");
        $__internal_2b8e008817e51de514bc3c53bc57b7e511cc5fd06d699c932b06d8166af01d66->enter($__internal_2b8e008817e51de514bc3c53bc57b7e511cc5fd06d699c932b06d8166af01d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2b8e008817e51de514bc3c53bc57b7e511cc5fd06d699c932b06d8166af01d66->leave($__internal_2b8e008817e51de514bc3c53bc57b7e511cc5fd06d699c932b06d8166af01d66_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_03bdc5a97cbce0a109dbbec723617d86f629eaf3e64b320007d6a5507a95adec = $this->env->getExtension("native_profiler");
        $__internal_03bdc5a97cbce0a109dbbec723617d86f629eaf3e64b320007d6a5507a95adec->enter($__internal_03bdc5a97cbce0a109dbbec723617d86f629eaf3e64b320007d6a5507a95adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_03bdc5a97cbce0a109dbbec723617d86f629eaf3e64b320007d6a5507a95adec->leave($__internal_03bdc5a97cbce0a109dbbec723617d86f629eaf3e64b320007d6a5507a95adec_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Laboratoire/add.html.twig";
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
