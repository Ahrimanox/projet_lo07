<?php

/* @Publication/Categorie/view.html.twig */
class __TwigTemplate_dfe88c6a5912f11b82304ff223f77007690e5173ff31452be810ad7bcd199d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Categorie/view.html.twig", 1);
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
        $__internal_67f4e0c7b894074835b2d1c40848fb7df8b90394b401e906aff9f0e1ecf9d64c = $this->env->getExtension("native_profiler");
        $__internal_67f4e0c7b894074835b2d1c40848fb7df8b90394b401e906aff9f0e1ecf9d64c->enter($__internal_67f4e0c7b894074835b2d1c40848fb7df8b90394b401e906aff9f0e1ecf9d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Categorie/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f4e0c7b894074835b2d1c40848fb7df8b90394b401e906aff9f0e1ecf9d64c->leave($__internal_67f4e0c7b894074835b2d1c40848fb7df8b90394b401e906aff9f0e1ecf9d64c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7b3d581da2c8df8d20b5562a3d2783badcd96daa8e81b8a1303bdf1b21902be = $this->env->getExtension("native_profiler");
        $__internal_b7b3d581da2c8df8d20b5562a3d2783badcd96daa8e81b8a1303bdf1b21902be->enter($__internal_b7b3d581da2c8df8d20b5562a3d2783badcd96daa8e81b8a1303bdf1b21902be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des categories";
        
        $__internal_b7b3d581da2c8df8d20b5562a3d2783badcd96daa8e81b8a1303bdf1b21902be->leave($__internal_b7b3d581da2c8df8d20b5562a3d2783badcd96daa8e81b8a1303bdf1b21902be_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb2524a1e28b2601dfa0d1a6648b0b884bba10d7694cdd3d314353297383184d = $this->env->getExtension("native_profiler");
        $__internal_cb2524a1e28b2601dfa0d1a6648b0b884bba10d7694cdd3d314353297383184d->enter($__internal_cb2524a1e28b2601dfa0d1a6648b0b884bba10d7694cdd3d314353297383184d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cb2524a1e28b2601dfa0d1a6648b0b884bba10d7694cdd3d314353297383184d->leave($__internal_cb2524a1e28b2601dfa0d1a6648b0b884bba10d7694cdd3d314353297383184d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a32a6b20f7902b3e716e0ee0c37b098db7b43d60d4d3ab26748a743173de11d = $this->env->getExtension("native_profiler");
        $__internal_5a32a6b20f7902b3e716e0ee0c37b098db7b43d60d4d3ab26748a743173de11d->enter($__internal_5a32a6b20f7902b3e716e0ee0c37b098db7b43d60d4d3ab26748a743173de11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("categorie", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<ul>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCategorie"]) ? $context["listeCategorie"] : $this->getContext($context, "listeCategorie")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 13
                echo "\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</ul>
";
        }
        // line 17
        echo "
";
        
        $__internal_5a32a6b20f7902b3e716e0ee0c37b098db7b43d60d4d3ab26748a743173de11d->leave($__internal_5a32a6b20f7902b3e716e0ee0c37b098db7b43d60d4d3ab26748a743173de11d_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Categorie/view.html.twig";
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
/* {% block title %}Liste des categories{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if categorie is defined %}*/
/* 	<h1>{{ categorie.id }} : {{ categorie.nom }}</h1>*/
/* {% else %}*/
/* <ul>*/
/* {% for categorie in listeCategorie %}*/
/* 	<li>{{ categorie.id }} : {{ categorie.nom }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
