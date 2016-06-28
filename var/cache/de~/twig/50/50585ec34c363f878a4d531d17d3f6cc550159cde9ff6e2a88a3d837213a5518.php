<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e73d08f08e0ce7b6dc8802fa0dc26391db9b15faa89db909d4bf78b784a45c63 extends Twig_Template
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
        $__internal_aa5a54bbafba76d7adbe3a668dc57b5a33beab4724fb248c60eaa38ab2c59a29 = $this->env->getExtension("native_profiler");
        $__internal_aa5a54bbafba76d7adbe3a668dc57b5a33beab4724fb248c60eaa38ab2c59a29->enter($__internal_aa5a54bbafba76d7adbe3a668dc57b5a33beab4724fb248c60eaa38ab2c59a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5a54bbafba76d7adbe3a668dc57b5a33beab4724fb248c60eaa38ab2c59a29->leave($__internal_aa5a54bbafba76d7adbe3a668dc57b5a33beab4724fb248c60eaa38ab2c59a29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61649a0bf2a189a4b5d536269b411ca5f417014cfd6d963e69be129c80556a98 = $this->env->getExtension("native_profiler");
        $__internal_61649a0bf2a189a4b5d536269b411ca5f417014cfd6d963e69be129c80556a98->enter($__internal_61649a0bf2a189a4b5d536269b411ca5f417014cfd6d963e69be129c80556a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61649a0bf2a189a4b5d536269b411ca5f417014cfd6d963e69be129c80556a98->leave($__internal_61649a0bf2a189a4b5d536269b411ca5f417014cfd6d963e69be129c80556a98_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aca2c3b0a57ca9dedb55e3cb9835d6883236babc372aa523002bc08f6b56f22 = $this->env->getExtension("native_profiler");
        $__internal_3aca2c3b0a57ca9dedb55e3cb9835d6883236babc372aa523002bc08f6b56f22->enter($__internal_3aca2c3b0a57ca9dedb55e3cb9835d6883236babc372aa523002bc08f6b56f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3aca2c3b0a57ca9dedb55e3cb9835d6883236babc372aa523002bc08f6b56f22->leave($__internal_3aca2c3b0a57ca9dedb55e3cb9835d6883236babc372aa523002bc08f6b56f22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cae1ebc3c709d88387f1d2af367e586b5c2bdd0cd8293eb8baef10e076788914 = $this->env->getExtension("native_profiler");
        $__internal_cae1ebc3c709d88387f1d2af367e586b5c2bdd0cd8293eb8baef10e076788914->enter($__internal_cae1ebc3c709d88387f1d2af367e586b5c2bdd0cd8293eb8baef10e076788914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cae1ebc3c709d88387f1d2af367e586b5c2bdd0cd8293eb8baef10e076788914->leave($__internal_cae1ebc3c709d88387f1d2af367e586b5c2bdd0cd8293eb8baef10e076788914_prof);

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
