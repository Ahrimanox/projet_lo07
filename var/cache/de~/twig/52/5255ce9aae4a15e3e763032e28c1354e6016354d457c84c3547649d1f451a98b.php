<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_206a33a9d9a70b04c8ec0a85d6a39dca3f95f092ccc812ce627702fab5691ccd extends Twig_Template
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
        $__internal_b998a242c63dfa70622d5a1c62d5305b4d7d9a7fbcb94e5247bb4081e31909bb = $this->env->getExtension("native_profiler");
        $__internal_b998a242c63dfa70622d5a1c62d5305b4d7d9a7fbcb94e5247bb4081e31909bb->enter($__internal_b998a242c63dfa70622d5a1c62d5305b4d7d9a7fbcb94e5247bb4081e31909bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b998a242c63dfa70622d5a1c62d5305b4d7d9a7fbcb94e5247bb4081e31909bb->leave($__internal_b998a242c63dfa70622d5a1c62d5305b4d7d9a7fbcb94e5247bb4081e31909bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
