<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5d0bf0a59b0e36aa6cf8fba2737d707e6af3ca117d8c7e073cdb5bf884961f9e extends Twig_Template
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
        $__internal_6c665c01b0c19a847bfbb944746b4312a36f0eedb142138182318e5dfa75b03e = $this->env->getExtension("native_profiler");
        $__internal_6c665c01b0c19a847bfbb944746b4312a36f0eedb142138182318e5dfa75b03e->enter($__internal_6c665c01b0c19a847bfbb944746b4312a36f0eedb142138182318e5dfa75b03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6c665c01b0c19a847bfbb944746b4312a36f0eedb142138182318e5dfa75b03e->leave($__internal_6c665c01b0c19a847bfbb944746b4312a36f0eedb142138182318e5dfa75b03e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
