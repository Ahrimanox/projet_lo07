<?php

/* PublicationBundle:Chercheur:new.html.twig */
class __TwigTemplate_50456a49b7ee886b723c9024962c524edd604eca8cc372c0c3ee088cd7913ecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Chercheur:new.html.twig", 1);
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
        $__internal_5318fa8e9f8c6ede9d1eef3cf4e8101995d434d332e8cfcac166ab7964245799 = $this->env->getExtension("native_profiler");
        $__internal_5318fa8e9f8c6ede9d1eef3cf4e8101995d434d332e8cfcac166ab7964245799->enter($__internal_5318fa8e9f8c6ede9d1eef3cf4e8101995d434d332e8cfcac166ab7964245799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5318fa8e9f8c6ede9d1eef3cf4e8101995d434d332e8cfcac166ab7964245799->leave($__internal_5318fa8e9f8c6ede9d1eef3cf4e8101995d434d332e8cfcac166ab7964245799_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d894a5b797eddfe76b7039f89988157dfea13aa6a218a367d3cb088d5505e5a = $this->env->getExtension("native_profiler");
        $__internal_2d894a5b797eddfe76b7039f89988157dfea13aa6a218a367d3cb088d5505e5a->enter($__internal_2d894a5b797eddfe76b7039f89988157dfea13aa6a218a367d3cb088d5505e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_2d894a5b797eddfe76b7039f89988157dfea13aa6a218a367d3cb088d5505e5a->leave($__internal_2d894a5b797eddfe76b7039f89988157dfea13aa6a218a367d3cb088d5505e5a_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_68eb2cfcdfbfd23b3351963fd34d44bd093b607b8f36e042b8973a8cdb6d3e2a = $this->env->getExtension("native_profiler");
        $__internal_68eb2cfcdfbfd23b3351963fd34d44bd093b607b8f36e042b8973a8cdb6d3e2a->enter($__internal_68eb2cfcdfbfd23b3351963fd34d44bd093b607b8f36e042b8973a8cdb6d3e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_68eb2cfcdfbfd23b3351963fd34d44bd093b607b8f36e042b8973a8cdb6d3e2a->leave($__internal_68eb2cfcdfbfd23b3351963fd34d44bd093b607b8f36e042b8973a8cdb6d3e2a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4021687a83f875b869c54f9bae234813ffc35f5217f6e3fb6b624fca5706d187 = $this->env->getExtension("native_profiler");
        $__internal_4021687a83f875b869c54f9bae234813ffc35f5217f6e3fb6b624fca5706d187->enter($__internal_4021687a83f875b869c54f9bae234813ffc35f5217f6e3fb6b624fca5706d187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "class" => "col-sm-6")));
        echo "

\t\t<div class=\"form-group\">
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom : "));
        echo "
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'label', array("label" => "Organisation : "));
        echo " 
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipe", array()), 'label', array("label" => "Equipe : "));
        echo "
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipe", array()), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
\t\t</div>

\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_4021687a83f875b869c54f9bae234813ffc35f5217f6e3fb6b624fca5706d187->leave($__internal_4021687a83f875b869c54f9bae234813ffc35f5217f6e3fb6b624fca5706d187_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  134 => 36,  127 => 32,  123 => 31,  119 => 30,  112 => 26,  108 => 25,  104 => 24,  97 => 20,  93 => 19,  89 => 18,  82 => 14,  78 => 13,  74 => 12,  68 => 9,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un chercheur{% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* 	{{ form_start(form, {"attr": {"role": "form", "class": "col-sm-6"}}) }}*/
/* */
/* 		<div class="form-group">*/
/* 			{{ form_label(form.nom, "Nom : ") }}*/
/* 			{{ form_widget(form.nom, {"attr": {"class": "form-control"}}) }}*/
/* 			{{ form_errors(form.nom) }}*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			{{ form_label(form.prenom, "Prenom : ") }}*/
/* 			{{ form_widget(form.prenom, {"attr": {"class": "form-control"}}) }}*/
/* 			{{ form_errors(form.prenom) }}*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			{{ form_label(form.organisation, "Organisation : ") }} */
/* 			{{ form_widget(form.organisation, {"attr": {"class": "form-control"}}) }}*/
/* 			{{ form_errors(form.organisation) }}*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			{{ form_label(form.equipe, "Equipe : ") }}*/
/* 			{{ form_widget(form.equipe, {"attr": {"class": "form-control"}}) }}*/
/* 			{{ form_errors(form.equipe) }}*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			{{ form_widget(form.enregistrer, {"attr": {"class": "btn btn-default"}}) }}*/
/* 		</div>*/
/* */
/* 	{{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
