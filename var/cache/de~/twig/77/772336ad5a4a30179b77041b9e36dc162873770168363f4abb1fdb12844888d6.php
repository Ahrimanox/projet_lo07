<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_285c89c100f70a90ee1883594481746fcd9ba25a5aa50f4406444652086863d4 extends Twig_Template
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
        $__internal_69ab966bf9ae33bb86011fe1153166ec8dcae11f81ebb9a59115bfd0b81b6eb3 = $this->env->getExtension("native_profiler");
        $__internal_69ab966bf9ae33bb86011fe1153166ec8dcae11f81ebb9a59115bfd0b81b6eb3->enter($__internal_69ab966bf9ae33bb86011fe1153166ec8dcae11f81ebb9a59115bfd0b81b6eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_69ab966bf9ae33bb86011fe1153166ec8dcae11f81ebb9a59115bfd0b81b6eb3->leave($__internal_69ab966bf9ae33bb86011fe1153166ec8dcae11f81ebb9a59115bfd0b81b6eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
