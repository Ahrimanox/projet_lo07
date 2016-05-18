<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3dc6485aa43b00f3fb2e0eefa41c8a8abf69d06101a0923d24c3443a2fa87838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dbc0557c1f3c32a1293e20c26c180f38f1a7add6f8d5f18726142ef946034d5 = $this->env->getExtension("native_profiler");
        $__internal_6dbc0557c1f3c32a1293e20c26c180f38f1a7add6f8d5f18726142ef946034d5->enter($__internal_6dbc0557c1f3c32a1293e20c26c180f38f1a7add6f8d5f18726142ef946034d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbc0557c1f3c32a1293e20c26c180f38f1a7add6f8d5f18726142ef946034d5->leave($__internal_6dbc0557c1f3c32a1293e20c26c180f38f1a7add6f8d5f18726142ef946034d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee695aa3677806c480cb2981d73ca7247fef93c6739361f380cd4ff1c46d9a21 = $this->env->getExtension("native_profiler");
        $__internal_ee695aa3677806c480cb2981d73ca7247fef93c6739361f380cd4ff1c46d9a21->enter($__internal_ee695aa3677806c480cb2981d73ca7247fef93c6739361f380cd4ff1c46d9a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee695aa3677806c480cb2981d73ca7247fef93c6739361f380cd4ff1c46d9a21->leave($__internal_ee695aa3677806c480cb2981d73ca7247fef93c6739361f380cd4ff1c46d9a21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e18086d91c733bf4e5eab4bca843958e0d17f435df95d6030db6c11ab76d9f42 = $this->env->getExtension("native_profiler");
        $__internal_e18086d91c733bf4e5eab4bca843958e0d17f435df95d6030db6c11ab76d9f42->enter($__internal_e18086d91c733bf4e5eab4bca843958e0d17f435df95d6030db6c11ab76d9f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e18086d91c733bf4e5eab4bca843958e0d17f435df95d6030db6c11ab76d9f42->leave($__internal_e18086d91c733bf4e5eab4bca843958e0d17f435df95d6030db6c11ab76d9f42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6287ff580153f31864730ca1812bc663d25a3f262fdb0dd76cef7d36c4dd76d6 = $this->env->getExtension("native_profiler");
        $__internal_6287ff580153f31864730ca1812bc663d25a3f262fdb0dd76cef7d36c4dd76d6->enter($__internal_6287ff580153f31864730ca1812bc663d25a3f262fdb0dd76cef7d36c4dd76d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6287ff580153f31864730ca1812bc663d25a3f262fdb0dd76cef7d36c4dd76d6->leave($__internal_6287ff580153f31864730ca1812bc663d25a3f262fdb0dd76cef7d36c4dd76d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
