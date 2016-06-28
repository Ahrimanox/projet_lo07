<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_14e3ba1ef3a12f7492fae85d9ce7a09c4f64ad4b16f59d305a3cc68642f1a941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f9d04f58b51ba01868f1f8962aa7617a8862776180d3128f154399d83db319e4 = $this->env->getExtension("native_profiler");
        $__internal_f9d04f58b51ba01868f1f8962aa7617a8862776180d3128f154399d83db319e4->enter($__internal_f9d04f58b51ba01868f1f8962aa7617a8862776180d3128f154399d83db319e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d04f58b51ba01868f1f8962aa7617a8862776180d3128f154399d83db319e4->leave($__internal_f9d04f58b51ba01868f1f8962aa7617a8862776180d3128f154399d83db319e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e4ea61d5adb4ed1f2bd04bc596c2b915fcf4dc0d18c8e807c3b43df31f03676 = $this->env->getExtension("native_profiler");
        $__internal_1e4ea61d5adb4ed1f2bd04bc596c2b915fcf4dc0d18c8e807c3b43df31f03676->enter($__internal_1e4ea61d5adb4ed1f2bd04bc596c2b915fcf4dc0d18c8e807c3b43df31f03676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e4ea61d5adb4ed1f2bd04bc596c2b915fcf4dc0d18c8e807c3b43df31f03676->leave($__internal_1e4ea61d5adb4ed1f2bd04bc596c2b915fcf4dc0d18c8e807c3b43df31f03676_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2663bd80aac9a6fe8a0702731a0431e36a1f04f29454edf537c5d9fa3aeeb701 = $this->env->getExtension("native_profiler");
        $__internal_2663bd80aac9a6fe8a0702731a0431e36a1f04f29454edf537c5d9fa3aeeb701->enter($__internal_2663bd80aac9a6fe8a0702731a0431e36a1f04f29454edf537c5d9fa3aeeb701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2663bd80aac9a6fe8a0702731a0431e36a1f04f29454edf537c5d9fa3aeeb701->leave($__internal_2663bd80aac9a6fe8a0702731a0431e36a1f04f29454edf537c5d9fa3aeeb701_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd9c98ae5b5ba562a527e462e54d882dff0f859f27ff6db8cd8b9ac1b48c1f97 = $this->env->getExtension("native_profiler");
        $__internal_dd9c98ae5b5ba562a527e462e54d882dff0f859f27ff6db8cd8b9ac1b48c1f97->enter($__internal_dd9c98ae5b5ba562a527e462e54d882dff0f859f27ff6db8cd8b9ac1b48c1f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dd9c98ae5b5ba562a527e462e54d882dff0f859f27ff6db8cd8b9ac1b48c1f97->leave($__internal_dd9c98ae5b5ba562a527e462e54d882dff0f859f27ff6db8cd8b9ac1b48c1f97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
