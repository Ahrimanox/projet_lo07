<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_31f35923384e46df2aaad971560e8ead0a60689cca9cf7eff81f3fbeed6f9cf6 extends Twig_Template
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
        $__internal_4e42e2711ef2e216c7b7073ac0fe0630161b7d2f41dc1ac822ec9e7ca5702f3e = $this->env->getExtension("native_profiler");
        $__internal_4e42e2711ef2e216c7b7073ac0fe0630161b7d2f41dc1ac822ec9e7ca5702f3e->enter($__internal_4e42e2711ef2e216c7b7073ac0fe0630161b7d2f41dc1ac822ec9e7ca5702f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4e42e2711ef2e216c7b7073ac0fe0630161b7d2f41dc1ac822ec9e7ca5702f3e->leave($__internal_4e42e2711ef2e216c7b7073ac0fe0630161b7d2f41dc1ac822ec9e7ca5702f3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
