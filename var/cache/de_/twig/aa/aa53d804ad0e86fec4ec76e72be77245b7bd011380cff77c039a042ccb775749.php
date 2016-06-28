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
        $__internal_058780fcf6fe5e46c106bd3f12e227f65226f75eba90a22436908ac79a3ad7d7 = $this->env->getExtension("native_profiler");
        $__internal_058780fcf6fe5e46c106bd3f12e227f65226f75eba90a22436908ac79a3ad7d7->enter($__internal_058780fcf6fe5e46c106bd3f12e227f65226f75eba90a22436908ac79a3ad7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058780fcf6fe5e46c106bd3f12e227f65226f75eba90a22436908ac79a3ad7d7->leave($__internal_058780fcf6fe5e46c106bd3f12e227f65226f75eba90a22436908ac79a3ad7d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4471232b3664845a5fec8781c23b31920b415e9405f46ed3bf2d3be960b36922 = $this->env->getExtension("native_profiler");
        $__internal_4471232b3664845a5fec8781c23b31920b415e9405f46ed3bf2d3be960b36922->enter($__internal_4471232b3664845a5fec8781c23b31920b415e9405f46ed3bf2d3be960b36922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des chercheurs";
        
        $__internal_4471232b3664845a5fec8781c23b31920b415e9405f46ed3bf2d3be960b36922->leave($__internal_4471232b3664845a5fec8781c23b31920b415e9405f46ed3bf2d3be960b36922_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_24eb814ae4e28957355dadaaba3d4ca5576752d487a8461e359a9ef28c8454aa = $this->env->getExtension("native_profiler");
        $__internal_24eb814ae4e28957355dadaaba3d4ca5576752d487a8461e359a9ef28c8454aa->enter($__internal_24eb814ae4e28957355dadaaba3d4ca5576752d487a8461e359a9ef28c8454aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_24eb814ae4e28957355dadaaba3d4ca5576752d487a8461e359a9ef28c8454aa->leave($__internal_24eb814ae4e28957355dadaaba3d4ca5576752d487a8461e359a9ef28c8454aa_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c70f52e1343b2e9b84405ddd98d27e395d2b20a53739fe0df4ed6307af9fa6df = $this->env->getExtension("native_profiler");
        $__internal_c70f52e1343b2e9b84405ddd98d27e395d2b20a53739fe0df4ed6307af9fa6df->enter($__internal_c70f52e1343b2e9b84405ddd98d27e395d2b20a53739fe0df4ed6307af9fa6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("article", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<ul>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 13
                echo "\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</ul>
";
        }
        // line 17
        echo "

";
        
        $__internal_c70f52e1343b2e9b84405ddd98d27e395d2b20a53739fe0df4ed6307af9fa6df->leave($__internal_c70f52e1343b2e9b84405ddd98d27e395d2b20a53739fe0df4ed6307af9fa6df_prof);

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
        return array (  100 => 17,  96 => 15,  85 => 13,  81 => 12,  78 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Liste des chercheurs{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if article is defined %}*/
/* 	<h1>{{ article.id }} : {{ article.titre }}</h1>*/
/* {% else %}*/
/* <ul>*/
/* {% for article in listeChercheur %}*/
/* 	<li>{{ article.id }} : {{ article.titre }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* */
/* {% endblock %}*/
