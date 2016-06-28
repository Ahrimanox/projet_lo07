<?php

/* PublicationBundle:Article:view.html.twig */
class __TwigTemplate_5669afe5e83dbd33b9e26db2cb4d328574a85740832d41e3adaab6e7f2fd4a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Article:view.html.twig", 1);
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
        $__internal_5266c10326aae5963a20afb1048c4ca6810539f941b596eed1e0fa6d91af2ca0 = $this->env->getExtension("native_profiler");
        $__internal_5266c10326aae5963a20afb1048c4ca6810539f941b596eed1e0fa6d91af2ca0->enter($__internal_5266c10326aae5963a20afb1048c4ca6810539f941b596eed1e0fa6d91af2ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5266c10326aae5963a20afb1048c4ca6810539f941b596eed1e0fa6d91af2ca0->leave($__internal_5266c10326aae5963a20afb1048c4ca6810539f941b596eed1e0fa6d91af2ca0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4777b65a985c6c7fd3e043e80331d4ebde0755c6c382a020dee3ec1028572983 = $this->env->getExtension("native_profiler");
        $__internal_4777b65a985c6c7fd3e043e80331d4ebde0755c6c382a020dee3ec1028572983->enter($__internal_4777b65a985c6c7fd3e043e80331d4ebde0755c6c382a020dee3ec1028572983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ICD";
        
        $__internal_4777b65a985c6c7fd3e043e80331d4ebde0755c6c382a020dee3ec1028572983->leave($__internal_4777b65a985c6c7fd3e043e80331d4ebde0755c6c382a020dee3ec1028572983_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_ba0c2561f8e23ae4f3dd94a87c490fa7bbb0a4a99282b27756f982c87d2334ee = $this->env->getExtension("native_profiler");
        $__internal_ba0c2561f8e23ae4f3dd94a87c490fa7bbb0a4a99282b27756f982c87d2334ee->enter($__internal_ba0c2561f8e23ae4f3dd94a87c490fa7bbb0a4a99282b27756f982c87d2334ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ba0c2561f8e23ae4f3dd94a87c490fa7bbb0a4a99282b27756f982c87d2334ee->leave($__internal_ba0c2561f8e23ae4f3dd94a87c490fa7bbb0a4a99282b27756f982c87d2334ee_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d838a5ad2455c7e44c0f43534c38c2b176722db9ae7eb6b1a9712814e293ab39 = $this->env->getExtension("native_profiler");
        $__internal_d838a5ad2455c7e44c0f43534c38c2b176722db9ae7eb6b1a9712814e293ab39->enter($__internal_d838a5ad2455c7e44c0f43534c38c2b176722db9ae7eb6b1a9712814e293ab39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"container article-container col-sm-7\">
\t<div class=\"container col-sm-12 article\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "
\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array())), "html", null, true);
        echo "
\t\t<div>Categorie : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "html", null, true);
        echo "</div>
\t\t<br />
\t\tEditeur : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "editeur", array()), "html", null, true);
        echo "
\t</div>
</div>

";
        
        $__internal_d838a5ad2455c7e44c0f43534c38c2b176722db9ae7eb6b1a9712814e293ab39->leave($__internal_d838a5ad2455c7e44c0f43534c38c2b176722db9ae7eb6b1a9712814e293ab39_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  82 => 13,  78 => 12,  74 => 11,  70 => 9,  64 => 8,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}ICD{% endblock %}*/
/* {% block header %}*/
/* 	<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container article-container col-sm-7">*/
/* 	<div class="container col-sm-12 article">*/
/* 		{{ article.id }}*/
/* 		{{ article.titre | upper }}*/
/* 		<div>Categorie : {{ article.categorie }}</div>*/
/* 		<br />*/
/* 		Editeur : {{ article.editeur}}*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
