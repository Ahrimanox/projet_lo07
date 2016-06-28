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
        $__internal_342ef51c1500beddb82ea4d39632011a13bd264d8fbdf600a9395e819e9a8b35 = $this->env->getExtension("native_profiler");
        $__internal_342ef51c1500beddb82ea4d39632011a13bd264d8fbdf600a9395e819e9a8b35->enter($__internal_342ef51c1500beddb82ea4d39632011a13bd264d8fbdf600a9395e819e9a8b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_342ef51c1500beddb82ea4d39632011a13bd264d8fbdf600a9395e819e9a8b35->leave($__internal_342ef51c1500beddb82ea4d39632011a13bd264d8fbdf600a9395e819e9a8b35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7032872e5adb192be85063d83842553ba87418ca61e7f99f7e75ef688346bbf = $this->env->getExtension("native_profiler");
        $__internal_f7032872e5adb192be85063d83842553ba87418ca61e7f99f7e75ef688346bbf->enter($__internal_f7032872e5adb192be85063d83842553ba87418ca61e7f99f7e75ef688346bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_f7032872e5adb192be85063d83842553ba87418ca61e7f99f7e75ef688346bbf->leave($__internal_f7032872e5adb192be85063d83842553ba87418ca61e7f99f7e75ef688346bbf_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_663d1f391225d8d623b57504ac0bde4721ade3654d9342da74890473648e78c0 = $this->env->getExtension("native_profiler");
        $__internal_663d1f391225d8d623b57504ac0bde4721ade3654d9342da74890473648e78c0->enter($__internal_663d1f391225d8d623b57504ac0bde4721ade3654d9342da74890473648e78c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<script type=\"text/javascript\">
\$('#file-input').bootstrapFileInput();
</script>
";
        
        $__internal_663d1f391225d8d623b57504ac0bde4721ade3654d9342da74890473648e78c0->leave($__internal_663d1f391225d8d623b57504ac0bde4721ade3654d9342da74890473648e78c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_22507f893d2f5688c6c8354231eca02eee810ab9d2fce5ad11943d4dfda1f3ec = $this->env->getExtension("native_profiler");
        $__internal_22507f893d2f5688c6c8354231eca02eee810ab9d2fce5ad11943d4dfda1f3ec->enter($__internal_22507f893d2f5688c6c8354231eca02eee810ab9d2fce5ad11943d4dfda1f3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "class" => "col-sm-6")));
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom : "));
        echo "
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'label', array("label" => "Organisation : "));
        echo " 
\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laboratoire", array()), 'label', array("label" => "Laboratoire : "));
        echo "
\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laboratoire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laboratoire", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'label', array("label" => "Photo : "));
        echo "
\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "id" => "input-file")));
        echo "
\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
\t</div>

";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_22507f893d2f5688c6c8354231eca02eee810ab9d2fce5ad11943d4dfda1f3ec->leave($__internal_22507f893d2f5688c6c8354231eca02eee810ab9d2fce5ad11943d4dfda1f3ec_prof);

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
        return array (  157 => 47,  151 => 44,  144 => 40,  140 => 39,  136 => 38,  129 => 34,  125 => 33,  121 => 32,  114 => 28,  110 => 27,  106 => 26,  99 => 22,  95 => 21,  91 => 20,  84 => 16,  80 => 15,  76 => 14,  70 => 11,  64 => 10,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un chercheur{% endblock %}*/
/* {% block header %}*/
/* <script type="text/javascript">*/
/* $('#file-input').bootstrapFileInput();*/
/* </script>*/
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
/* 		{{ form_label(form.picture, "Photo : ") }}*/
/* 		{{ form_widget(form.picture, {"attr": {"class": "btn btn-primary", "id": "input-file"}}) }}*/
/* 		{{ form_errors(form.picture) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_widget(form.enregistrer, {"attr": {"class": "btn btn-default"}}) }}*/
/* 	</div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
