<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3de458d612ec0f1c710998a8aee80da3b38b9590f31c2f0e66bcac33602e7f62 extends Twig_Template
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
        $__internal_4976e7ebe74881bcb0f8e9519278ff0e594823ed6b35ac0f43532d59ca57306e = $this->env->getExtension("native_profiler");
        $__internal_4976e7ebe74881bcb0f8e9519278ff0e594823ed6b35ac0f43532d59ca57306e->enter($__internal_4976e7ebe74881bcb0f8e9519278ff0e594823ed6b35ac0f43532d59ca57306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4976e7ebe74881bcb0f8e9519278ff0e594823ed6b35ac0f43532d59ca57306e->leave($__internal_4976e7ebe74881bcb0f8e9519278ff0e594823ed6b35ac0f43532d59ca57306e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
