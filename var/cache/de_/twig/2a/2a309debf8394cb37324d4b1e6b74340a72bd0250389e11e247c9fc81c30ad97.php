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
        $__internal_664a5ec41fceb6db7ccde735b311bf9df01ba2319dd171a78c6be7f850a7a8e9 = $this->env->getExtension("native_profiler");
        $__internal_664a5ec41fceb6db7ccde735b311bf9df01ba2319dd171a78c6be7f850a7a8e9->enter($__internal_664a5ec41fceb6db7ccde735b311bf9df01ba2319dd171a78c6be7f850a7a8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Categorie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_664a5ec41fceb6db7ccde735b311bf9df01ba2319dd171a78c6be7f850a7a8e9->leave($__internal_664a5ec41fceb6db7ccde735b311bf9df01ba2319dd171a78c6be7f850a7a8e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83173a3c2d74afeb4cbd369a875bed7609d40c2e887d676f1e319a745c2ef8e3 = $this->env->getExtension("native_profiler");
        $__internal_83173a3c2d74afeb4cbd369a875bed7609d40c2e887d676f1e319a745c2ef8e3->enter($__internal_83173a3c2d74afeb4cbd369a875bed7609d40c2e887d676f1e319a745c2ef8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une categorie";
        
        $__internal_83173a3c2d74afeb4cbd369a875bed7609d40c2e887d676f1e319a745c2ef8e3->leave($__internal_83173a3c2d74afeb4cbd369a875bed7609d40c2e887d676f1e319a745c2ef8e3_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_21989f7e208c1447ff5ec04e19153ef450de4bc9be802eeda9b2f9e6c846e0d4 = $this->env->getExtension("native_profiler");
        $__internal_21989f7e208c1447ff5ec04e19153ef450de4bc9be802eeda9b2f9e6c846e0d4->enter($__internal_21989f7e208c1447ff5ec04e19153ef450de4bc9be802eeda9b2f9e6c846e0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_21989f7e208c1447ff5ec04e19153ef450de4bc9be802eeda9b2f9e6c846e0d4->leave($__internal_21989f7e208c1447ff5ec04e19153ef450de4bc9be802eeda9b2f9e6c846e0d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5be625816878a9b48150f8e0449c43d9a5878abdcbde72fb7bf444cbeb758a1 = $this->env->getExtension("native_profiler");
        $__internal_c5be625816878a9b48150f8e0449c43d9a5878abdcbde72fb7bf444cbeb758a1->enter($__internal_c5be625816878a9b48150f8e0449c43d9a5878abdcbde72fb7bf444cbeb758a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5be625816878a9b48150f8e0449c43d9a5878abdcbde72fb7bf444cbeb758a1->leave($__internal_c5be625816878a9b48150f8e0449c43d9a5878abdcbde72fb7bf444cbeb758a1_prof);

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
