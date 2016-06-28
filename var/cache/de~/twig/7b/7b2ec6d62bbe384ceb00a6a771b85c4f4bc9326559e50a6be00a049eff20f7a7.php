<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9d00e2581e52a83293f6650231b9f81f52128f47cae58b383565292adb75d900 extends Twig_Template
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
        $__internal_9f24ed5751dc305abc210ff64052a828b093d7501ae64c3847feea47ef3f159f = $this->env->getExtension("native_profiler");
        $__internal_9f24ed5751dc305abc210ff64052a828b093d7501ae64c3847feea47ef3f159f->enter($__internal_9f24ed5751dc305abc210ff64052a828b093d7501ae64c3847feea47ef3f159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9f24ed5751dc305abc210ff64052a828b093d7501ae64c3847feea47ef3f159f->leave($__internal_9f24ed5751dc305abc210ff64052a828b093d7501ae64c3847feea47ef3f159f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
