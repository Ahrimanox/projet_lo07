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
        $__internal_4b0a9ee8caf18e0e3f5ea68799fc67fcdc35dd9e5f292a9ff4e94cd6da2fc007 = $this->env->getExtension("native_profiler");
        $__internal_4b0a9ee8caf18e0e3f5ea68799fc67fcdc35dd9e5f292a9ff4e94cd6da2fc007->enter($__internal_4b0a9ee8caf18e0e3f5ea68799fc67fcdc35dd9e5f292a9ff4e94cd6da2fc007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Laboratoire:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0a9ee8caf18e0e3f5ea68799fc67fcdc35dd9e5f292a9ff4e94cd6da2fc007->leave($__internal_4b0a9ee8caf18e0e3f5ea68799fc67fcdc35dd9e5f292a9ff4e94cd6da2fc007_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a0fa546f8a24b4dbe581f4682f12df6849fb022d35725ecf458c30da16b2d3 = $this->env->getExtension("native_profiler");
        $__internal_06a0fa546f8a24b4dbe581f4682f12df6849fb022d35725ecf458c30da16b2d3->enter($__internal_06a0fa546f8a24b4dbe581f4682f12df6849fb022d35725ecf458c30da16b2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un laboratoire";
        
        $__internal_06a0fa546f8a24b4dbe581f4682f12df6849fb022d35725ecf458c30da16b2d3->leave($__internal_06a0fa546f8a24b4dbe581f4682f12df6849fb022d35725ecf458c30da16b2d3_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_65c8ea0d1bcb003419fd88ad4e990896ca2b52576bd1170da0c6f353646037b2 = $this->env->getExtension("native_profiler");
        $__internal_65c8ea0d1bcb003419fd88ad4e990896ca2b52576bd1170da0c6f353646037b2->enter($__internal_65c8ea0d1bcb003419fd88ad4e990896ca2b52576bd1170da0c6f353646037b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_65c8ea0d1bcb003419fd88ad4e990896ca2b52576bd1170da0c6f353646037b2->leave($__internal_65c8ea0d1bcb003419fd88ad4e990896ca2b52576bd1170da0c6f353646037b2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf4883cb3b8fa9dfd7b59a06717fb5f7bddcbe8d5b509dc809bd434ec8c11ae = $this->env->getExtension("native_profiler");
        $__internal_daf4883cb3b8fa9dfd7b59a06717fb5f7bddcbe8d5b509dc809bd434ec8c11ae->enter($__internal_daf4883cb3b8fa9dfd7b59a06717fb5f7bddcbe8d5b509dc809bd434ec8c11ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_daf4883cb3b8fa9dfd7b59a06717fb5f7bddcbe8d5b509dc809bd434ec8c11ae->leave($__internal_daf4883cb3b8fa9dfd7b59a06717fb5f7bddcbe8d5b509dc809bd434ec8c11ae_prof);

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
