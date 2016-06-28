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
        $__internal_83434c72ad96d21ba6885067b3e772866cef8933af51ec9fe8fa90cbb447a42a = $this->env->getExtension("native_profiler");
        $__internal_83434c72ad96d21ba6885067b3e772866cef8933af51ec9fe8fa90cbb447a42a->enter($__internal_83434c72ad96d21ba6885067b3e772866cef8933af51ec9fe8fa90cbb447a42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_83434c72ad96d21ba6885067b3e772866cef8933af51ec9fe8fa90cbb447a42a->leave($__internal_83434c72ad96d21ba6885067b3e772866cef8933af51ec9fe8fa90cbb447a42a_prof);

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
