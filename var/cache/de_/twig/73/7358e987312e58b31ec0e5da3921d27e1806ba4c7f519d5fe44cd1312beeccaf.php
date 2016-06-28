<?php

/* @Publication/Laboratoire/view.html.twig */
class __TwigTemplate_7fd0edc76263dfe78fcfde87f5fe1e7afa594218343971dfe7d4f8ea963dc7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Laboratoire/view.html.twig", 1);
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
        $__internal_c3111860cddd5b404ec57c4467a7fac57c063448af19c74a84a3fa96296b6094 = $this->env->getExtension("native_profiler");
        $__internal_c3111860cddd5b404ec57c4467a7fac57c063448af19c74a84a3fa96296b6094->enter($__internal_c3111860cddd5b404ec57c4467a7fac57c063448af19c74a84a3fa96296b6094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Laboratoire/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3111860cddd5b404ec57c4467a7fac57c063448af19c74a84a3fa96296b6094->leave($__internal_c3111860cddd5b404ec57c4467a7fac57c063448af19c74a84a3fa96296b6094_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6841e48206014b53403e6e51c8983ebd7bc8c701044698bcb92ef843c26dbca = $this->env->getExtension("native_profiler");
        $__internal_e6841e48206014b53403e6e51c8983ebd7bc8c701044698bcb92ef843c26dbca->enter($__internal_e6841e48206014b53403e6e51c8983ebd7bc8c701044698bcb92ef843c26dbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des laboratoires";
        
        $__internal_e6841e48206014b53403e6e51c8983ebd7bc8c701044698bcb92ef843c26dbca->leave($__internal_e6841e48206014b53403e6e51c8983ebd7bc8c701044698bcb92ef843c26dbca_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_468488969466b034222b6e81fad1b944959c36912b17605169540c41ba8d3ba1 = $this->env->getExtension("native_profiler");
        $__internal_468488969466b034222b6e81fad1b944959c36912b17605169540c41ba8d3ba1->enter($__internal_468488969466b034222b6e81fad1b944959c36912b17605169540c41ba8d3ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_468488969466b034222b6e81fad1b944959c36912b17605169540c41ba8d3ba1->leave($__internal_468488969466b034222b6e81fad1b944959c36912b17605169540c41ba8d3ba1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_039c681ff4666f91cc700e06c532fd38027ddf1baa6db5bb7fba6f1c5c441278 = $this->env->getExtension("native_profiler");
        $__internal_039c681ff4666f91cc700e06c532fd38027ddf1baa6db5bb7fba6f1c5c441278->enter($__internal_039c681ff4666f91cc700e06c532fd38027ddf1baa6db5bb7fba6f1c5c441278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_039c681ff4666f91cc700e06c532fd38027ddf1baa6db5bb7fba6f1c5c441278->leave($__internal_039c681ff4666f91cc700e06c532fd38027ddf1baa6db5bb7fba6f1c5c441278_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Laboratoire/view.html.twig";
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
