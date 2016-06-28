<?php

/* @Publication/Article/new.html.twig */
class __TwigTemplate_b06352f0f3d80a4d7bad2a0393f9eae914c4095b5cac18c2012dd2cf5f864278 extends Twig_Template
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
        $__internal_4a8640239efd29bbf985e56cb874dc7265b68323bbb57ecc4ccccccebfa2b658 = $this->env->getExtension("native_profiler");
        $__internal_4a8640239efd29bbf985e56cb874dc7265b68323bbb57ecc4ccccccebfa2b658->enter($__internal_4a8640239efd29bbf985e56cb874dc7265b68323bbb57ecc4ccccccebfa2b658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Article/new.html.twig"));

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
        
        $__internal_4a8640239efd29bbf985e56cb874dc7265b68323bbb57ecc4ccccccebfa2b658->leave($__internal_4a8640239efd29bbf985e56cb874dc7265b68323bbb57ecc4ccccccebfa2b658_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Article/new.html.twig";
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
