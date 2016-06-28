<?php

/* PublicationBundle:Organisation:view.html.twig */
class __TwigTemplate_b0f1b3759a0972de4b0f3fb26eb8c2f7432526c5b060bfbf158d934eb78228e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Organisation:view.html.twig", 1);
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
        $__internal_e177a3529865c6d8adc06b77005813f93991e6450ade447aa01d2425b786d1ad = $this->env->getExtension("native_profiler");
        $__internal_e177a3529865c6d8adc06b77005813f93991e6450ade447aa01d2425b786d1ad->enter($__internal_e177a3529865c6d8adc06b77005813f93991e6450ade447aa01d2425b786d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Organisation:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e177a3529865c6d8adc06b77005813f93991e6450ade447aa01d2425b786d1ad->leave($__internal_e177a3529865c6d8adc06b77005813f93991e6450ade447aa01d2425b786d1ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e5acc2382e9355f65638de3b17dc9abc2e93872aee9f62398b05c472951da5d = $this->env->getExtension("native_profiler");
        $__internal_1e5acc2382e9355f65638de3b17dc9abc2e93872aee9f62398b05c472951da5d->enter($__internal_1e5acc2382e9355f65638de3b17dc9abc2e93872aee9f62398b05c472951da5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des organisations";
        
        $__internal_1e5acc2382e9355f65638de3b17dc9abc2e93872aee9f62398b05c472951da5d->leave($__internal_1e5acc2382e9355f65638de3b17dc9abc2e93872aee9f62398b05c472951da5d_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_c8716e97a67a18a50fb90435224b024a149daa4ac209f81064fd6b83104f5b9f = $this->env->getExtension("native_profiler");
        $__internal_c8716e97a67a18a50fb90435224b024a149daa4ac209f81064fd6b83104f5b9f->enter($__internal_c8716e97a67a18a50fb90435224b024a149daa4ac209f81064fd6b83104f5b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c8716e97a67a18a50fb90435224b024a149daa4ac209f81064fd6b83104f5b9f->leave($__internal_c8716e97a67a18a50fb90435224b024a149daa4ac209f81064fd6b83104f5b9f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_913fa411c570f82ff44a2f9d69b2d1be068056a22cfd30c4320e0b5a044d99b1 = $this->env->getExtension("native_profiler");
        $__internal_913fa411c570f82ff44a2f9d69b2d1be068056a22cfd30c4320e0b5a044d99b1->enter($__internal_913fa411c570f82ff44a2f9d69b2d1be068056a22cfd30c4320e0b5a044d99b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("organisation", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "nom", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<ul>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeOrganisation"]) ? $context["listeOrganisation"] : $this->getContext($context, "listeOrganisation")));
            foreach ($context['_seq'] as $context["_key"] => $context["organisation"]) {
                // line 13
                echo "\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "nom", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</ul>
";
        }
        // line 17
        echo "
";
        
        $__internal_913fa411c570f82ff44a2f9d69b2d1be068056a22cfd30c4320e0b5a044d99b1->leave($__internal_913fa411c570f82ff44a2f9d69b2d1be068056a22cfd30c4320e0b5a044d99b1_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Organisation:view.html.twig";
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
/* {% block title %}Liste des organisations{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if organisation is defined %}*/
/* 	<h1>{{ organisation.id }} : {{ organisation.nom }}</h1>*/
/* {% else %}*/
/* <ul>*/
/* {% for organisation in listeOrganisation %}*/
/* 	<li>{{ organisation.id }} : {{ organisation.nom }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
