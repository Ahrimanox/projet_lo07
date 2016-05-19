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
        $__internal_cd365e0745b4ee6cf15e2856ebe7f6f978c0b409fe3100c2adf27b866a510e86 = $this->env->getExtension("native_profiler");
        $__internal_cd365e0745b4ee6cf15e2856ebe7f6f978c0b409fe3100c2adf27b866a510e86->enter($__internal_cd365e0745b4ee6cf15e2856ebe7f6f978c0b409fe3100c2adf27b866a510e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd365e0745b4ee6cf15e2856ebe7f6f978c0b409fe3100c2adf27b866a510e86->leave($__internal_cd365e0745b4ee6cf15e2856ebe7f6f978c0b409fe3100c2adf27b866a510e86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfdf80b7d49cefbaf69f476b78c8202ee650693a584a148456b57cc9e88d6b53 = $this->env->getExtension("native_profiler");
        $__internal_bfdf80b7d49cefbaf69f476b78c8202ee650693a584a148456b57cc9e88d6b53->enter($__internal_bfdf80b7d49cefbaf69f476b78c8202ee650693a584a148456b57cc9e88d6b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfdf80b7d49cefbaf69f476b78c8202ee650693a584a148456b57cc9e88d6b53->leave($__internal_bfdf80b7d49cefbaf69f476b78c8202ee650693a584a148456b57cc9e88d6b53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf814680433d6dc03254d4c11da65cb9ab66c1a74a5cde374df6c921dc67f685 = $this->env->getExtension("native_profiler");
        $__internal_cf814680433d6dc03254d4c11da65cb9ab66c1a74a5cde374df6c921dc67f685->enter($__internal_cf814680433d6dc03254d4c11da65cb9ab66c1a74a5cde374df6c921dc67f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf814680433d6dc03254d4c11da65cb9ab66c1a74a5cde374df6c921dc67f685->leave($__internal_cf814680433d6dc03254d4c11da65cb9ab66c1a74a5cde374df6c921dc67f685_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6e29f51008f6d54c9503140250f03cf59db58f6a4c7be36793d912859eac7fd = $this->env->getExtension("native_profiler");
        $__internal_e6e29f51008f6d54c9503140250f03cf59db58f6a4c7be36793d912859eac7fd->enter($__internal_e6e29f51008f6d54c9503140250f03cf59db58f6a4c7be36793d912859eac7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6e29f51008f6d54c9503140250f03cf59db58f6a4c7be36793d912859eac7fd->leave($__internal_e6e29f51008f6d54c9503140250f03cf59db58f6a4c7be36793d912859eac7fd_prof);

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
