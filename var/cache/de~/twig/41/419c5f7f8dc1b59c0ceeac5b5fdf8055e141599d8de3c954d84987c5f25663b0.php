<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_786f12b0b9180ae4c513fa350ecd7f350a6f35fc316569bceca964ecd4080ef0 extends Twig_Template
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
        $__internal_fc570d982cf4d5fc01b4bff51ef0ae913220d55aa5661524b489b993dc9061fb = $this->env->getExtension("native_profiler");
        $__internal_fc570d982cf4d5fc01b4bff51ef0ae913220d55aa5661524b489b993dc9061fb->enter($__internal_fc570d982cf4d5fc01b4bff51ef0ae913220d55aa5661524b489b993dc9061fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc570d982cf4d5fc01b4bff51ef0ae913220d55aa5661524b489b993dc9061fb->leave($__internal_fc570d982cf4d5fc01b4bff51ef0ae913220d55aa5661524b489b993dc9061fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
