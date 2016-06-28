<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_362448f12aa0c388ba1d21c9bdf2f0e3e77ba89cdcc283e522ba8a0e37653cca extends Twig_Template
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
        $__internal_5f75afe901116a464cdcee61425e9b62d90f8f15e4c3e3759d5bdbbb4a776ac6 = $this->env->getExtension("native_profiler");
        $__internal_5f75afe901116a464cdcee61425e9b62d90f8f15e4c3e3759d5bdbbb4a776ac6->enter($__internal_5f75afe901116a464cdcee61425e9b62d90f8f15e4c3e3759d5bdbbb4a776ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5f75afe901116a464cdcee61425e9b62d90f8f15e4c3e3759d5bdbbb4a776ac6->leave($__internal_5f75afe901116a464cdcee61425e9b62d90f8f15e4c3e3759d5bdbbb4a776ac6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
