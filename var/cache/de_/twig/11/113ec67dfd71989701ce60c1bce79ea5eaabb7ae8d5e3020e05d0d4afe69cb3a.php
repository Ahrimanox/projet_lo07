<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_739205b78335dcdca9702f447fe4e7e6089dd9de4a9d19df0301dd48b16133c4 extends Twig_Template
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
        $__internal_7d119f20afff8af9a8e7daea69d261e5a00a749b08466ed7a9b0b788b93f5593 = $this->env->getExtension("native_profiler");
        $__internal_7d119f20afff8af9a8e7daea69d261e5a00a749b08466ed7a9b0b788b93f5593->enter($__internal_7d119f20afff8af9a8e7daea69d261e5a00a749b08466ed7a9b0b788b93f5593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7d119f20afff8af9a8e7daea69d261e5a00a749b08466ed7a9b0b788b93f5593->leave($__internal_7d119f20afff8af9a8e7daea69d261e5a00a749b08466ed7a9b0b788b93f5593_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
