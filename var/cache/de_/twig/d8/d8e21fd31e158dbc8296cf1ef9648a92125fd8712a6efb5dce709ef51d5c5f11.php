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
        $__internal_92a9cad55a46bc1e95dffe5e43553ae5d800a99c8486775e8f95c1c1805d2fa3 = $this->env->getExtension("native_profiler");
        $__internal_92a9cad55a46bc1e95dffe5e43553ae5d800a99c8486775e8f95c1c1805d2fa3->enter($__internal_92a9cad55a46bc1e95dffe5e43553ae5d800a99c8486775e8f95c1c1805d2fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_92a9cad55a46bc1e95dffe5e43553ae5d800a99c8486775e8f95c1c1805d2fa3->leave($__internal_92a9cad55a46bc1e95dffe5e43553ae5d800a99c8486775e8f95c1c1805d2fa3_prof);

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
