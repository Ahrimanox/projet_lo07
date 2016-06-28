<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c40a541c3edb45fe3ddb43c3d8e107fd24226c922d6fa026d843f945b3b4a1c6 extends Twig_Template
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
        $__internal_4a986918964118f8875812173cbf535f05f8d93891bfd2988b9d6441205ff67c = $this->env->getExtension("native_profiler");
        $__internal_4a986918964118f8875812173cbf535f05f8d93891bfd2988b9d6441205ff67c->enter($__internal_4a986918964118f8875812173cbf535f05f8d93891bfd2988b9d6441205ff67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4a986918964118f8875812173cbf535f05f8d93891bfd2988b9d6441205ff67c->leave($__internal_4a986918964118f8875812173cbf535f05f8d93891bfd2988b9d6441205ff67c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
