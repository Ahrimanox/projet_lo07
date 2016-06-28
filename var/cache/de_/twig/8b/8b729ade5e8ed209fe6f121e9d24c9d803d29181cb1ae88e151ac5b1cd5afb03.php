<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a4d41644e9b90b3c06ad38c14e07bc4a1f774c1c86dc6c057c0522161e95e7f3 extends Twig_Template
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
        $__internal_5cc070442898aa62acc2fdcef93c91dba264373456ccd4e57be60532f27968d3 = $this->env->getExtension("native_profiler");
        $__internal_5cc070442898aa62acc2fdcef93c91dba264373456ccd4e57be60532f27968d3->enter($__internal_5cc070442898aa62acc2fdcef93c91dba264373456ccd4e57be60532f27968d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_5cc070442898aa62acc2fdcef93c91dba264373456ccd4e57be60532f27968d3->leave($__internal_5cc070442898aa62acc2fdcef93c91dba264373456ccd4e57be60532f27968d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
