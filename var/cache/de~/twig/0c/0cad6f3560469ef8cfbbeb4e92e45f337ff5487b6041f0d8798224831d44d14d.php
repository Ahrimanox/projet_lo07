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
        $__internal_a8be1bba8e3c05f2c2c7964b00c804582171c6e37e97aca0b13773cb44d3dd6b = $this->env->getExtension("native_profiler");
        $__internal_a8be1bba8e3c05f2c2c7964b00c804582171c6e37e97aca0b13773cb44d3dd6b->enter($__internal_a8be1bba8e3c05f2c2c7964b00c804582171c6e37e97aca0b13773cb44d3dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a8be1bba8e3c05f2c2c7964b00c804582171c6e37e97aca0b13773cb44d3dd6b->leave($__internal_a8be1bba8e3c05f2c2c7964b00c804582171c6e37e97aca0b13773cb44d3dd6b_prof);

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
