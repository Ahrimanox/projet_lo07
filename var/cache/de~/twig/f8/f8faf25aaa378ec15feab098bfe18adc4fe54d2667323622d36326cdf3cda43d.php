<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_97e064bd338d5690710cb13598024bb530d2ea8ecfe4e00a9955687bdb1db59a extends Twig_Template
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
        $__internal_eec1ef16f4834d7241f779a51b431ddabb7d5a63b42a326a2baaa011b67a7cc1 = $this->env->getExtension("native_profiler");
        $__internal_eec1ef16f4834d7241f779a51b431ddabb7d5a63b42a326a2baaa011b67a7cc1->enter($__internal_eec1ef16f4834d7241f779a51b431ddabb7d5a63b42a326a2baaa011b67a7cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eec1ef16f4834d7241f779a51b431ddabb7d5a63b42a326a2baaa011b67a7cc1->leave($__internal_eec1ef16f4834d7241f779a51b431ddabb7d5a63b42a326a2baaa011b67a7cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
