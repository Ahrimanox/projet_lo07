<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d41ba761dbcea68f68cd92fcb7e3a0c85d66a7ce05bc9fa62c9062e179504ddf extends Twig_Template
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
        $__internal_900a685e40401a87d5110aabe66ff51eec3165a977eac2bddf2fd880f5d1bf29 = $this->env->getExtension("native_profiler");
        $__internal_900a685e40401a87d5110aabe66ff51eec3165a977eac2bddf2fd880f5d1bf29->enter($__internal_900a685e40401a87d5110aabe66ff51eec3165a977eac2bddf2fd880f5d1bf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_900a685e40401a87d5110aabe66ff51eec3165a977eac2bddf2fd880f5d1bf29->leave($__internal_900a685e40401a87d5110aabe66ff51eec3165a977eac2bddf2fd880f5d1bf29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
