<?php

/* @Publication/Chercheur/new.html.twig */
class __TwigTemplate_11cbdeaf22ea71b5e23a967628876a99ed944fe8f45b877a3fef0ec9832c33ca extends Twig_Template
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
        $__internal_a46fb71d1eacf6548c7b9b3448f8295b413ec05509bca9cde230b9445afb3d4a = $this->env->getExtension("native_profiler");
        $__internal_a46fb71d1eacf6548c7b9b3448f8295b413ec05509bca9cde230b9445afb3d4a->enter($__internal_a46fb71d1eacf6548c7b9b3448f8295b413ec05509bca9cde230b9445afb3d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Chercheur/new.html.twig"));

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
        
        $__internal_a46fb71d1eacf6548c7b9b3448f8295b413ec05509bca9cde230b9445afb3d4a->leave($__internal_a46fb71d1eacf6548c7b9b3448f8295b413ec05509bca9cde230b9445afb3d4a_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Chercheur/new.html.twig";
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
