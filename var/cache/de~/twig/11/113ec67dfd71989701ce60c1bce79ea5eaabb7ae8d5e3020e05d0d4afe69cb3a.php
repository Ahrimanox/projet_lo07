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
        $__internal_65169d429a01406b79222d9f1b18597f93132e5432d69b22f680ad09b4d0c0db = $this->env->getExtension("native_profiler");
        $__internal_65169d429a01406b79222d9f1b18597f93132e5432d69b22f680ad09b4d0c0db->enter($__internal_65169d429a01406b79222d9f1b18597f93132e5432d69b22f680ad09b4d0c0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_65169d429a01406b79222d9f1b18597f93132e5432d69b22f680ad09b4d0c0db->leave($__internal_65169d429a01406b79222d9f1b18597f93132e5432d69b22f680ad09b4d0c0db_prof);

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
