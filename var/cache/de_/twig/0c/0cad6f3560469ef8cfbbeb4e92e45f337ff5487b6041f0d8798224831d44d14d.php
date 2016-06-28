<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2cf9910a938948a448c8610761e3ad439760d65be114662e94357226400d6411 extends Twig_Template
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
        $__internal_605cd462149170030ffd749fdff634649a58a87d7a707fc02937d9536e6739f0 = $this->env->getExtension("native_profiler");
        $__internal_605cd462149170030ffd749fdff634649a58a87d7a707fc02937d9536e6739f0->enter($__internal_605cd462149170030ffd749fdff634649a58a87d7a707fc02937d9536e6739f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_605cd462149170030ffd749fdff634649a58a87d7a707fc02937d9536e6739f0->leave($__internal_605cd462149170030ffd749fdff634649a58a87d7a707fc02937d9536e6739f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
