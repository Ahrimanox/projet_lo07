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
        $__internal_9a494bf77f2d5f4e218eb658be5b72218fb7dc9a95793fffabd69385f28fa0b7 = $this->env->getExtension("native_profiler");
        $__internal_9a494bf77f2d5f4e218eb658be5b72218fb7dc9a95793fffabd69385f28fa0b7->enter($__internal_9a494bf77f2d5f4e218eb658be5b72218fb7dc9a95793fffabd69385f28fa0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a494bf77f2d5f4e218eb658be5b72218fb7dc9a95793fffabd69385f28fa0b7->leave($__internal_9a494bf77f2d5f4e218eb658be5b72218fb7dc9a95793fffabd69385f28fa0b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49879213d30a216e9956e3962507ef0b12e07d257ed37a64c18cbf63f1eaddc1 = $this->env->getExtension("native_profiler");
        $__internal_49879213d30a216e9956e3962507ef0b12e07d257ed37a64c18cbf63f1eaddc1->enter($__internal_49879213d30a216e9956e3962507ef0b12e07d257ed37a64c18cbf63f1eaddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49879213d30a216e9956e3962507ef0b12e07d257ed37a64c18cbf63f1eaddc1->leave($__internal_49879213d30a216e9956e3962507ef0b12e07d257ed37a64c18cbf63f1eaddc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd417d1bf81070ac742a9ae2de1ab3afb9dfaeca4652483c9ac95f0d8b141dd = $this->env->getExtension("native_profiler");
        $__internal_edd417d1bf81070ac742a9ae2de1ab3afb9dfaeca4652483c9ac95f0d8b141dd->enter($__internal_edd417d1bf81070ac742a9ae2de1ab3afb9dfaeca4652483c9ac95f0d8b141dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_edd417d1bf81070ac742a9ae2de1ab3afb9dfaeca4652483c9ac95f0d8b141dd->leave($__internal_edd417d1bf81070ac742a9ae2de1ab3afb9dfaeca4652483c9ac95f0d8b141dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8378e6b1d1de100586eaf4b33509118f7ca73eb5b165e1e5baa280070f94f155 = $this->env->getExtension("native_profiler");
        $__internal_8378e6b1d1de100586eaf4b33509118f7ca73eb5b165e1e5baa280070f94f155->enter($__internal_8378e6b1d1de100586eaf4b33509118f7ca73eb5b165e1e5baa280070f94f155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8378e6b1d1de100586eaf4b33509118f7ca73eb5b165e1e5baa280070f94f155->leave($__internal_8378e6b1d1de100586eaf4b33509118f7ca73eb5b165e1e5baa280070f94f155_prof);

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
