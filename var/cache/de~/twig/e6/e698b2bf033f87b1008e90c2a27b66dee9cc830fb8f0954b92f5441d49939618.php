<?php

/* PublicationBundle:Article:new.html.twig */
class __TwigTemplate_0dead66b2ff2f6d10d7a6c4263622a76c1352965cfb9ef42717001ecbb0a132e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Article:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicationBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e830858a779157fb5b10046f21f7d43ed635d5589c2885d3a116911a78b3f8 = $this->env->getExtension("native_profiler");
        $__internal_28e830858a779157fb5b10046f21f7d43ed635d5589c2885d3a116911a78b3f8->enter($__internal_28e830858a779157fb5b10046f21f7d43ed635d5589c2885d3a116911a78b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e830858a779157fb5b10046f21f7d43ed635d5589c2885d3a116911a78b3f8->leave($__internal_28e830858a779157fb5b10046f21f7d43ed635d5589c2885d3a116911a78b3f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8c35e00a9b666d83de7611eeed436dca194e6b59d9adabacfc2e92b6d3c030e = $this->env->getExtension("native_profiler");
        $__internal_d8c35e00a9b666d83de7611eeed436dca194e6b59d9adabacfc2e92b6d3c030e->enter($__internal_d8c35e00a9b666d83de7611eeed436dca194e6b59d9adabacfc2e92b6d3c030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un article";
        
        $__internal_d8c35e00a9b666d83de7611eeed436dca194e6b59d9adabacfc2e92b6d3c030e->leave($__internal_d8c35e00a9b666d83de7611eeed436dca194e6b59d9adabacfc2e92b6d3c030e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_f71141e6c3903d3384e76b6f11d6632566f2caf061fc9fb304a297f57dfeaa9e = $this->env->getExtension("native_profiler");
        $__internal_f71141e6c3903d3384e76b6f11d6632566f2caf061fc9fb304a297f57dfeaa9e->enter($__internal_f71141e6c3903d3384e76b6f11d6632566f2caf061fc9fb304a297f57dfeaa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_f71141e6c3903d3384e76b6f11d6632566f2caf061fc9fb304a297f57dfeaa9e->leave($__internal_f71141e6c3903d3384e76b6f11d6632566f2caf061fc9fb304a297f57dfeaa9e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f871ef5ace2d0ead27519b13df2f528d704f2df5403a793d2b86244ac79453 = $this->env->getExtension("native_profiler");
        $__internal_65f871ef5ace2d0ead27519b13df2f528d704f2df5403a793d2b86244ac79453->enter($__internal_65f871ef5ace2d0ead27519b13df2f528d704f2df5403a793d2b86244ac79453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_65f871ef5ace2d0ead27519b13df2f528d704f2df5403a793d2b86244ac79453->leave($__internal_65f871ef5ace2d0ead27519b13df2f528d704f2df5403a793d2b86244ac79453_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  72 => 10,  68 => 9,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un article{% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* 	{{ form_start(form) }}*/
/* 	{{ form_widget(form) }}*/
/* 	{{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
