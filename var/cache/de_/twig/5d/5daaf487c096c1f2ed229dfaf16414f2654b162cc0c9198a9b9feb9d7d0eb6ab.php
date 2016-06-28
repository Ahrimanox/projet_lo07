<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fab55bc2741f06880b52989dd5f6523be99b2498072d3b709efdf393d395ae49 extends Twig_Template
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
        $__internal_fce1f9153901c207926453b988726ab1e426579bf75b3433d106810df9293d67 = $this->env->getExtension("native_profiler");
        $__internal_fce1f9153901c207926453b988726ab1e426579bf75b3433d106810df9293d67->enter($__internal_fce1f9153901c207926453b988726ab1e426579bf75b3433d106810df9293d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fce1f9153901c207926453b988726ab1e426579bf75b3433d106810df9293d67->leave($__internal_fce1f9153901c207926453b988726ab1e426579bf75b3433d106810df9293d67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
