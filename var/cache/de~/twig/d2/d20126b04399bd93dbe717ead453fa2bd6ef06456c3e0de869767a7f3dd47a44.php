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
        $__internal_a0de7686e8e2e4352474daf81240eb631ce488b4a17b22a6848a0eae3652e75b = $this->env->getExtension("native_profiler");
        $__internal_a0de7686e8e2e4352474daf81240eb631ce488b4a17b22a6848a0eae3652e75b->enter($__internal_a0de7686e8e2e4352474daf81240eb631ce488b4a17b22a6848a0eae3652e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a0de7686e8e2e4352474daf81240eb631ce488b4a17b22a6848a0eae3652e75b->leave($__internal_a0de7686e8e2e4352474daf81240eb631ce488b4a17b22a6848a0eae3652e75b_prof);

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
