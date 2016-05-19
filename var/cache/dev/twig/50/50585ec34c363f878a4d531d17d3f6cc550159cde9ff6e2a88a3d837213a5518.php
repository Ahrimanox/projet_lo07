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
        $__internal_cfea2644ea43c876274eb572b64db1858b8cd23f6164b58ae55a8599ba091b70 = $this->env->getExtension("native_profiler");
        $__internal_cfea2644ea43c876274eb572b64db1858b8cd23f6164b58ae55a8599ba091b70->enter($__internal_cfea2644ea43c876274eb572b64db1858b8cd23f6164b58ae55a8599ba091b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfea2644ea43c876274eb572b64db1858b8cd23f6164b58ae55a8599ba091b70->leave($__internal_cfea2644ea43c876274eb572b64db1858b8cd23f6164b58ae55a8599ba091b70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_540d9c5a2a413c97fc72199c3e2eff9c9485312784e15cb8808bb31acec563d7 = $this->env->getExtension("native_profiler");
        $__internal_540d9c5a2a413c97fc72199c3e2eff9c9485312784e15cb8808bb31acec563d7->enter($__internal_540d9c5a2a413c97fc72199c3e2eff9c9485312784e15cb8808bb31acec563d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_540d9c5a2a413c97fc72199c3e2eff9c9485312784e15cb8808bb31acec563d7->leave($__internal_540d9c5a2a413c97fc72199c3e2eff9c9485312784e15cb8808bb31acec563d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69f6f53a1a593057b83070fade6a5069f112ff303be9537a6171d468a1c80156 = $this->env->getExtension("native_profiler");
        $__internal_69f6f53a1a593057b83070fade6a5069f112ff303be9537a6171d468a1c80156->enter($__internal_69f6f53a1a593057b83070fade6a5069f112ff303be9537a6171d468a1c80156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69f6f53a1a593057b83070fade6a5069f112ff303be9537a6171d468a1c80156->leave($__internal_69f6f53a1a593057b83070fade6a5069f112ff303be9537a6171d468a1c80156_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eca47c7586cb5c5a620b557c9286f32a295ae5ebf3de360b7ba56d7c4c2abf08 = $this->env->getExtension("native_profiler");
        $__internal_eca47c7586cb5c5a620b557c9286f32a295ae5ebf3de360b7ba56d7c4c2abf08->enter($__internal_eca47c7586cb5c5a620b557c9286f32a295ae5ebf3de360b7ba56d7c4c2abf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eca47c7586cb5c5a620b557c9286f32a295ae5ebf3de360b7ba56d7c4c2abf08->leave($__internal_eca47c7586cb5c5a620b557c9286f32a295ae5ebf3de360b7ba56d7c4c2abf08_prof);

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
