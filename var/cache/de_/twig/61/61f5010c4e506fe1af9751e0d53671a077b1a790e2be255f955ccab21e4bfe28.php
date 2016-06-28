<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c32d7ecacb14f34783d6fb9a35b0be16501e785aa94258d4e25696512754553f extends Twig_Template
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
        $__internal_02e697bb6fa270e2f298eea28cdffb3256febcba507b4f8b800dc44950c990a2 = $this->env->getExtension("native_profiler");
        $__internal_02e697bb6fa270e2f298eea28cdffb3256febcba507b4f8b800dc44950c990a2->enter($__internal_02e697bb6fa270e2f298eea28cdffb3256febcba507b4f8b800dc44950c990a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_02e697bb6fa270e2f298eea28cdffb3256febcba507b4f8b800dc44950c990a2->leave($__internal_02e697bb6fa270e2f298eea28cdffb3256febcba507b4f8b800dc44950c990a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
