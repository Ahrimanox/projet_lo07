<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d5b670508f62ffc8e70a0e9e0817d9e176f49b53196f941ec950e3506eac1266 extends Twig_Template
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
        $__internal_dd1c6875f5465be63d40c2149e3b262b82e2cfb3e366f22528b4dc3c8578363a = $this->env->getExtension("native_profiler");
        $__internal_dd1c6875f5465be63d40c2149e3b262b82e2cfb3e366f22528b4dc3c8578363a->enter($__internal_dd1c6875f5465be63d40c2149e3b262b82e2cfb3e366f22528b4dc3c8578363a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_dd1c6875f5465be63d40c2149e3b262b82e2cfb3e366f22528b4dc3c8578363a->leave($__internal_dd1c6875f5465be63d40c2149e3b262b82e2cfb3e366f22528b4dc3c8578363a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
