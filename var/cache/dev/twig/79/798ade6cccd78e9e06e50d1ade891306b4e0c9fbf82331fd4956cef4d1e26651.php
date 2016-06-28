<?php

/* PublicationBundle:Laboratoire:view.html.twig */
class __TwigTemplate_ca3ccf3d2d83939f7e2f747c5c8c2d738549d585e5cd7861f58203a2aa6d6438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Laboratoire:view.html.twig", 1);
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
        $__internal_449f2c4ef4834472623d90ef00f1b80a86b89e3746630e570fbb50874e851fa2 = $this->env->getExtension("native_profiler");
        $__internal_449f2c4ef4834472623d90ef00f1b80a86b89e3746630e570fbb50874e851fa2->enter($__internal_449f2c4ef4834472623d90ef00f1b80a86b89e3746630e570fbb50874e851fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Laboratoire:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_449f2c4ef4834472623d90ef00f1b80a86b89e3746630e570fbb50874e851fa2->leave($__internal_449f2c4ef4834472623d90ef00f1b80a86b89e3746630e570fbb50874e851fa2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00845579a301b4bf6565c50d658099dc695f170c174726f482d675d8a498c124 = $this->env->getExtension("native_profiler");
        $__internal_00845579a301b4bf6565c50d658099dc695f170c174726f482d675d8a498c124->enter($__internal_00845579a301b4bf6565c50d658099dc695f170c174726f482d675d8a498c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des laboratoires";
        
        $__internal_00845579a301b4bf6565c50d658099dc695f170c174726f482d675d8a498c124->leave($__internal_00845579a301b4bf6565c50d658099dc695f170c174726f482d675d8a498c124_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_c9555918333ae62e6f2d4d99bd158e61dc99a8b52cf4ba6c9e7c76e1b325451d = $this->env->getExtension("native_profiler");
        $__internal_c9555918333ae62e6f2d4d99bd158e61dc99a8b52cf4ba6c9e7c76e1b325451d->enter($__internal_c9555918333ae62e6f2d4d99bd158e61dc99a8b52cf4ba6c9e7c76e1b325451d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c9555918333ae62e6f2d4d99bd158e61dc99a8b52cf4ba6c9e7c76e1b325451d->leave($__internal_c9555918333ae62e6f2d4d99bd158e61dc99a8b52cf4ba6c9e7c76e1b325451d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_31b596dbd85066d00d8219190335ff2c81f0e5827e9afa5d597c00da0d217719 = $this->env->getExtension("native_profiler");
        $__internal_31b596dbd85066d00d8219190335ff2c81f0e5827e9afa5d597c00da0d217719->enter($__internal_31b596dbd85066d00d8219190335ff2c81f0e5827e9afa5d597c00da0d217719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("laboratoire", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laboratoire"]) ? $context["laboratoire"] : $this->getContext($context, "laboratoire")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laboratoire"]) ? $context["laboratoire"] : $this->getContext($context, "laboratoire")), "nom", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<ul>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeLaboratoire"]) ? $context["listeLaboratoire"] : $this->getContext($context, "listeLaboratoire")));
            foreach ($context['_seq'] as $context["_key"] => $context["laboratoire"]) {
                // line 13
                echo "\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["laboratoire"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["laboratoire"], "nom", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laboratoire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</ul>
";
        }
        // line 17
        echo "
";
        
        $__internal_31b596dbd85066d00d8219190335ff2c81f0e5827e9afa5d597c00da0d217719->leave($__internal_31b596dbd85066d00d8219190335ff2c81f0e5827e9afa5d597c00da0d217719_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Laboratoire:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  96 => 15,  85 => 13,  81 => 12,  78 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Liste des laboratoires{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if laboratoire is defined %}*/
/* 	<h1>{{ laboratoire.id }} : {{ laboratoire.nom }}</h1>*/
/* {% else %}*/
/* <ul>*/
/* {% for laboratoire in listeLaboratoire %}*/
/* 	<li>{{ laboratoire.id }} : {{ laboratoire.nom }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
