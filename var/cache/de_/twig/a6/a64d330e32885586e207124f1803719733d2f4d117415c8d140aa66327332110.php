<?php

/* @Publication/Categorie/add.html.twig */
class __TwigTemplate_5d74ef46500374b4b32d61f00abed1cf23b233cc51b7915c6d0089cf18700de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Categorie/add.html.twig", 1);
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
        $__internal_564c9d16a0c9efc33ab420260e7a769fad2f746e9a3f85ce958a444b12572be7 = $this->env->getExtension("native_profiler");
        $__internal_564c9d16a0c9efc33ab420260e7a769fad2f746e9a3f85ce958a444b12572be7->enter($__internal_564c9d16a0c9efc33ab420260e7a769fad2f746e9a3f85ce958a444b12572be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Categorie/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564c9d16a0c9efc33ab420260e7a769fad2f746e9a3f85ce958a444b12572be7->leave($__internal_564c9d16a0c9efc33ab420260e7a769fad2f746e9a3f85ce958a444b12572be7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02431e9f847d1640e9933654951c55411bc6674e1888d41a3411be27e8b6e114 = $this->env->getExtension("native_profiler");
        $__internal_02431e9f847d1640e9933654951c55411bc6674e1888d41a3411be27e8b6e114->enter($__internal_02431e9f847d1640e9933654951c55411bc6674e1888d41a3411be27e8b6e114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une categorie";
        
        $__internal_02431e9f847d1640e9933654951c55411bc6674e1888d41a3411be27e8b6e114->leave($__internal_02431e9f847d1640e9933654951c55411bc6674e1888d41a3411be27e8b6e114_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_407afb196ecb4f3f03c747acad1f7cfe01cd3e59afa18f411b9c9c7d20c201b8 = $this->env->getExtension("native_profiler");
        $__internal_407afb196ecb4f3f03c747acad1f7cfe01cd3e59afa18f411b9c9c7d20c201b8->enter($__internal_407afb196ecb4f3f03c747acad1f7cfe01cd3e59afa18f411b9c9c7d20c201b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_407afb196ecb4f3f03c747acad1f7cfe01cd3e59afa18f411b9c9c7d20c201b8->leave($__internal_407afb196ecb4f3f03c747acad1f7cfe01cd3e59afa18f411b9c9c7d20c201b8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa1274fe7f0d2f039e9029a56f13d4f405fdfd19e60b134ef7693e6abaacccd = $this->env->getExtension("native_profiler");
        $__internal_8aa1274fe7f0d2f039e9029a56f13d4f405fdfd19e60b134ef7693e6abaacccd->enter($__internal_8aa1274fe7f0d2f039e9029a56f13d4f405fdfd19e60b134ef7693e6abaacccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8aa1274fe7f0d2f039e9029a56f13d4f405fdfd19e60b134ef7693e6abaacccd->leave($__internal_8aa1274fe7f0d2f039e9029a56f13d4f405fdfd19e60b134ef7693e6abaacccd_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Categorie/add.html.twig";
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
