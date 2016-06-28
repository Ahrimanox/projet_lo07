<?php

/* PublicationBundle:Organisation:add.html.twig */
class __TwigTemplate_9167bec4e00b7f70a67b79c194ed0aaf58a61c8667b9f01ca66388fa7befd2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Organisation:add.html.twig", 1);
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
        $__internal_4846cb693985f0304ea5166b4f4140ab797ad07e846c6c698e7ce11bc3487ff3 = $this->env->getExtension("native_profiler");
        $__internal_4846cb693985f0304ea5166b4f4140ab797ad07e846c6c698e7ce11bc3487ff3->enter($__internal_4846cb693985f0304ea5166b4f4140ab797ad07e846c6c698e7ce11bc3487ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Organisation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4846cb693985f0304ea5166b4f4140ab797ad07e846c6c698e7ce11bc3487ff3->leave($__internal_4846cb693985f0304ea5166b4f4140ab797ad07e846c6c698e7ce11bc3487ff3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbc0b199ba0bfac7316acde54f5d9b35953ed789c8b8ea8c9aa0447ba6f630fb = $this->env->getExtension("native_profiler");
        $__internal_dbc0b199ba0bfac7316acde54f5d9b35953ed789c8b8ea8c9aa0447ba6f630fb->enter($__internal_dbc0b199ba0bfac7316acde54f5d9b35953ed789c8b8ea8c9aa0447ba6f630fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'une organisation";
        
        $__internal_dbc0b199ba0bfac7316acde54f5d9b35953ed789c8b8ea8c9aa0447ba6f630fb->leave($__internal_dbc0b199ba0bfac7316acde54f5d9b35953ed789c8b8ea8c9aa0447ba6f630fb_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_c4654795f153fb1737e6b6c88c39fcb21abcd4e1b3666ef785d4754e55e1df6d = $this->env->getExtension("native_profiler");
        $__internal_c4654795f153fb1737e6b6c88c39fcb21abcd4e1b3666ef785d4754e55e1df6d->enter($__internal_c4654795f153fb1737e6b6c88c39fcb21abcd4e1b3666ef785d4754e55e1df6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c4654795f153fb1737e6b6c88c39fcb21abcd4e1b3666ef785d4754e55e1df6d->leave($__internal_c4654795f153fb1737e6b6c88c39fcb21abcd4e1b3666ef785d4754e55e1df6d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeffa6549c7d19dc2a523663d62a0043b7074214864ff83c78165bea44c2f393 = $this->env->getExtension("native_profiler");
        $__internal_eeffa6549c7d19dc2a523663d62a0043b7074214864ff83c78165bea44c2f393->enter($__internal_eeffa6549c7d19dc2a523663d62a0043b7074214864ff83c78165bea44c2f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eeffa6549c7d19dc2a523663d62a0043b7074214864ff83c78165bea44c2f393->leave($__internal_eeffa6549c7d19dc2a523663d62a0043b7074214864ff83c78165bea44c2f393_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Organisation:add.html.twig";
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
