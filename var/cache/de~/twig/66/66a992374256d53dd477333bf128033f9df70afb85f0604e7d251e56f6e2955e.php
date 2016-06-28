<?php

/* @Publication/Article/new.html.twig.html */
class __TwigTemplate_58ef2bf2c8bf7a39bd97c1d2d19d35674bb15f54d66433fa73be1b76d3e73864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23909a6401b75ad4f993d18a83bc625dc8661c800c5eb57b15600b637733359f = $this->env->getExtension("native_profiler");
        $__internal_23909a6401b75ad4f993d18a83bc625dc8661c800c5eb57b15600b637733359f->enter($__internal_23909a6401b75ad4f993d18a83bc625dc8661c800c5eb57b15600b637733359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Article/new.html.twig.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>ICD | Ajouter un chercheur</title>
\t</head>
\t<body>
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</body>
</html>";
        
        $__internal_23909a6401b75ad4f993d18a83bc625dc8661c800c5eb57b15600b637733359f->leave($__internal_23909a6401b75ad4f993d18a83bc625dc8661c800c5eb57b15600b637733359f_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Article/new.html.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>ICD | Ajouter un chercheur</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		{{ form_start(form) }}*/
/* 		{{ form_widget(form) }}*/
/* 		{{ form_end(form) }}*/
/* 	</body>*/
/* </html>*/
