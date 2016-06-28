<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4c9664a42dd4d838a895edd278e31f2f01584ca6e729965ed1ea49b91206cead extends Twig_Template
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
        $__internal_5555db0a55173fbf00e8330a15240bcc6f3670d8c6194105313b6d79924181e7 = $this->env->getExtension("native_profiler");
        $__internal_5555db0a55173fbf00e8330a15240bcc6f3670d8c6194105313b6d79924181e7->enter($__internal_5555db0a55173fbf00e8330a15240bcc6f3670d8c6194105313b6d79924181e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_5555db0a55173fbf00e8330a15240bcc6f3670d8c6194105313b6d79924181e7->leave($__internal_5555db0a55173fbf00e8330a15240bcc6f3670d8c6194105313b6d79924181e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
