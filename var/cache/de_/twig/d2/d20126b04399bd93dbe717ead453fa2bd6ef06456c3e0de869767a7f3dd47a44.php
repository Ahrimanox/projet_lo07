<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_00734589285507b9433a3abdd8eca8c5175cf31c0c4d1a237f5b8853f142b3d3 extends Twig_Template
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
        $__internal_895fa204c7602352ceb5807accb36ff61b81ef4657ba381b45a614f17ee17921 = $this->env->getExtension("native_profiler");
        $__internal_895fa204c7602352ceb5807accb36ff61b81ef4657ba381b45a614f17ee17921->enter($__internal_895fa204c7602352ceb5807accb36ff61b81ef4657ba381b45a614f17ee17921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_895fa204c7602352ceb5807accb36ff61b81ef4657ba381b45a614f17ee17921->leave($__internal_895fa204c7602352ceb5807accb36ff61b81ef4657ba381b45a614f17ee17921_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
