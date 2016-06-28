<?php

/* @Publication/Article/view.html.twig */
class __TwigTemplate_1b313eb6993d7eb507c711f67346caf8b2997b5749300cc9a5dab848bd0e41f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Article/view.html.twig", 1);
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
        $__internal_19d115176d06668bd13a732c5fbc58a054c9bbaf095cad05f5ee370488af021e = $this->env->getExtension("native_profiler");
        $__internal_19d115176d06668bd13a732c5fbc58a054c9bbaf095cad05f5ee370488af021e->enter($__internal_19d115176d06668bd13a732c5fbc58a054c9bbaf095cad05f5ee370488af021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Article/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d115176d06668bd13a732c5fbc58a054c9bbaf095cad05f5ee370488af021e->leave($__internal_19d115176d06668bd13a732c5fbc58a054c9bbaf095cad05f5ee370488af021e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9991e45c0af00ede5d479dfcabaeee7fad072a7db1071100592b747efac25e18 = $this->env->getExtension("native_profiler");
        $__internal_9991e45c0af00ede5d479dfcabaeee7fad072a7db1071100592b747efac25e18->enter($__internal_9991e45c0af00ede5d479dfcabaeee7fad072a7db1071100592b747efac25e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des chercheurs";
        
        $__internal_9991e45c0af00ede5d479dfcabaeee7fad072a7db1071100592b747efac25e18->leave($__internal_9991e45c0af00ede5d479dfcabaeee7fad072a7db1071100592b747efac25e18_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_6f1608fc80651fb91834ea7dc4ef36b636981e0a15e5552e608190bdcac23571 = $this->env->getExtension("native_profiler");
        $__internal_6f1608fc80651fb91834ea7dc4ef36b636981e0a15e5552e608190bdcac23571->enter($__internal_6f1608fc80651fb91834ea7dc4ef36b636981e0a15e5552e608190bdcac23571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f1608fc80651fb91834ea7dc4ef36b636981e0a15e5552e608190bdcac23571->leave($__internal_6f1608fc80651fb91834ea7dc4ef36b636981e0a15e5552e608190bdcac23571_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c871c2dab8a511bb746d78035c711e812007a33d070165e4587a85b354d22adf = $this->env->getExtension("native_profiler");
        $__internal_c871c2dab8a511bb746d78035c711e812007a33d070165e4587a85b354d22adf->enter($__internal_c871c2dab8a511bb746d78035c711e812007a33d070165e4587a85b354d22adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c871c2dab8a511bb746d78035c711e812007a33d070165e4587a85b354d22adf->leave($__internal_c871c2dab8a511bb746d78035c711e812007a33d070165e4587a85b354d22adf_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Article/view.html.twig";
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
