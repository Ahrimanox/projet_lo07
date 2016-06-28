<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4c9664a42dd4d838a895edd278e31f2f01584ca6e729965ed1ea49b91206cead extends Twig_Template
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
        $__internal_31f7823d7f5ea98ba17f1e359d7de801faa02fa040095ae94f2442b21d790e02 = $this->env->getExtension("native_profiler");
        $__internal_31f7823d7f5ea98ba17f1e359d7de801faa02fa040095ae94f2442b21d790e02->enter($__internal_31f7823d7f5ea98ba17f1e359d7de801faa02fa040095ae94f2442b21d790e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_31f7823d7f5ea98ba17f1e359d7de801faa02fa040095ae94f2442b21d790e02->leave($__internal_31f7823d7f5ea98ba17f1e359d7de801faa02fa040095ae94f2442b21d790e02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
