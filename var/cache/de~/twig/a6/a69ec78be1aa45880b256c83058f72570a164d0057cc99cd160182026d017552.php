<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4b2a58e4402257b0c33d72ed3cf251d315abdc42cbfc8e05ea3d5e3c687a1524 extends Twig_Template
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
        $__internal_7bdc339108756930b971476d3355f94126c9309fcbeb20db5e4ef80a0b08a132 = $this->env->getExtension("native_profiler");
        $__internal_7bdc339108756930b971476d3355f94126c9309fcbeb20db5e4ef80a0b08a132->enter($__internal_7bdc339108756930b971476d3355f94126c9309fcbeb20db5e4ef80a0b08a132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7bdc339108756930b971476d3355f94126c9309fcbeb20db5e4ef80a0b08a132->leave($__internal_7bdc339108756930b971476d3355f94126c9309fcbeb20db5e4ef80a0b08a132_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
