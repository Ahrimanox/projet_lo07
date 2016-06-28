<?php

/* PublicationBundle:Chercheur:view_article.html.twig */
class __TwigTemplate_9bb305ba4cd3aa703570c7055f9a7f28e0ef86d6dae74713d183d6faf2d4b2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Chercheur:view_article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PublicationBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b5ff3ed44a58ddbb87093e9f5058e391d6bb2b99fede49961c6d0e94ec9a621 = $this->env->getExtension("native_profiler");
        $__internal_0b5ff3ed44a58ddbb87093e9f5058e391d6bb2b99fede49961c6d0e94ec9a621->enter($__internal_0b5ff3ed44a58ddbb87093e9f5058e391d6bb2b99fede49961c6d0e94ec9a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:view_article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5ff3ed44a58ddbb87093e9f5058e391d6bb2b99fede49961c6d0e94ec9a621->leave($__internal_0b5ff3ed44a58ddbb87093e9f5058e391d6bb2b99fede49961c6d0e94ec9a621_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f2461f985ac8f0740b09b6076f5122b429b9c84d399b82b8b4288720d8b573 = $this->env->getExtension("native_profiler");
        $__internal_c3f2461f985ac8f0740b09b6076f5122b429b9c84d399b82b8b4288720d8b573->enter($__internal_c3f2461f985ac8f0740b09b6076f5122b429b9c84d399b82b8b4288720d8b573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article du chercheur";
        
        $__internal_c3f2461f985ac8f0740b09b6076f5122b429b9c84d399b82b8b4288720d8b573->leave($__internal_c3f2461f985ac8f0740b09b6076f5122b429b9c84d399b82b8b4288720d8b573_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee389fa909723b3e085ce91d9b97f47ed6815ea39d7956132eb08e29ae16920 = $this->env->getExtension("native_profiler");
        $__internal_eee389fa909723b3e085ce91d9b97f47ed6815ea39d7956132eb08e29ae16920->enter($__internal_eee389fa909723b3e085ce91d9b97f47ed6815ea39d7956132eb08e29ae16920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

";
        // line 8
        $this->loadTemplate("PublicationBundle:Article:article.html.twig", "PublicationBundle:Chercheur:view_article.html.twig", 8)->display($context);
        // line 9
        echo "

";
        
        $__internal_eee389fa909723b3e085ce91d9b97f47ed6815ea39d7956132eb08e29ae16920->leave($__internal_eee389fa909723b3e085ce91d9b97f47ed6815ea39d7956132eb08e29ae16920_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:view_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Article du chercheur{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% include "PublicationBundle:Article:article.html.twig" %}*/
/* */
/* */
/* {% endblock %}*/
