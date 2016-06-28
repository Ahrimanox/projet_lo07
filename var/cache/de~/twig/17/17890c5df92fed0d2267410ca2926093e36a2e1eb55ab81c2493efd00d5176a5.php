<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4d6f6a650acbdb50f77c13979ccb353fae1c09e6136d773a5326cbc40dc2d7b5 extends Twig_Template
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
        $__internal_c0a642f2546171292ef9b9096b19fb69a856a1a351b25e0de894f4ed463b2f9f = $this->env->getExtension("native_profiler");
        $__internal_c0a642f2546171292ef9b9096b19fb69a856a1a351b25e0de894f4ed463b2f9f->enter($__internal_c0a642f2546171292ef9b9096b19fb69a856a1a351b25e0de894f4ed463b2f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c0a642f2546171292ef9b9096b19fb69a856a1a351b25e0de894f4ed463b2f9f->leave($__internal_c0a642f2546171292ef9b9096b19fb69a856a1a351b25e0de894f4ed463b2f9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
