<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_3b9533e962cf5e51c13fc07261f9c6cf688e3ab17431c1787b4c4364fa5b9c17 extends Twig_Template
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
        $__internal_cc1507409d0ea535f11fc54c06b706f428d24562f2e1259c027f9105f781ebd4 = $this->env->getExtension("native_profiler");
        $__internal_cc1507409d0ea535f11fc54c06b706f428d24562f2e1259c027f9105f781ebd4->enter($__internal_cc1507409d0ea535f11fc54c06b706f428d24562f2e1259c027f9105f781ebd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cc1507409d0ea535f11fc54c06b706f428d24562f2e1259c027f9105f781ebd4->leave($__internal_cc1507409d0ea535f11fc54c06b706f428d24562f2e1259c027f9105f781ebd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
