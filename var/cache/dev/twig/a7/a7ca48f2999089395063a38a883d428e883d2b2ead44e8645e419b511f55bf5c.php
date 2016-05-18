<?php

/* PublicationBundle:Chercheur:new.html.twig */
class __TwigTemplate_8a836f2a3813445ffc813cbf730440d972b163a036b69abf55cc237adea97fe6 extends Twig_Template
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
        $__internal_126352baf9246e3f55c97f712e1794ddb04f7c6dc038461711bfa49af6a48a44 = $this->env->getExtension("native_profiler");
        $__internal_126352baf9246e3f55c97f712e1794ddb04f7c6dc038461711bfa49af6a48a44->enter($__internal_126352baf9246e3f55c97f712e1794ddb04f7c6dc038461711bfa49af6a48a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:new.html.twig"));

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
        
        $__internal_126352baf9246e3f55c97f712e1794ddb04f7c6dc038461711bfa49af6a48a44->leave($__internal_126352baf9246e3f55c97f712e1794ddb04f7c6dc038461711bfa49af6a48a44_prof);

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
