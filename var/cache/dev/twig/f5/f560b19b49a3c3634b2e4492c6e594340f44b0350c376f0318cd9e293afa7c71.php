<?php

/* PublicationBundle:Categorie:view.html.twig */
class __TwigTemplate_4ded94fc9e71defe88b1a6f585cda775bad18091eb231c23328137651ccf8522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Categorie:view.html.twig", 1);
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
        $__internal_9adcdbf165c84340aa5b866f701f5fa1e0cda3a2d06aa55f9c4b771e2384928a = $this->env->getExtension("native_profiler");
        $__internal_9adcdbf165c84340aa5b866f701f5fa1e0cda3a2d06aa55f9c4b771e2384928a->enter($__internal_9adcdbf165c84340aa5b866f701f5fa1e0cda3a2d06aa55f9c4b771e2384928a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Categorie:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adcdbf165c84340aa5b866f701f5fa1e0cda3a2d06aa55f9c4b771e2384928a->leave($__internal_9adcdbf165c84340aa5b866f701f5fa1e0cda3a2d06aa55f9c4b771e2384928a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73da471e66dce6de62c5f48b10f3b0b83f3ba742eec5502a270e408c757d495d = $this->env->getExtension("native_profiler");
        $__internal_73da471e66dce6de62c5f48b10f3b0b83f3ba742eec5502a270e408c757d495d->enter($__internal_73da471e66dce6de62c5f48b10f3b0b83f3ba742eec5502a270e408c757d495d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des categories";
        
        $__internal_73da471e66dce6de62c5f48b10f3b0b83f3ba742eec5502a270e408c757d495d->leave($__internal_73da471e66dce6de62c5f48b10f3b0b83f3ba742eec5502a270e408c757d495d_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_5abb428e100b1b95927df8bbbac3916d4e59a2c67ee6d74ec318852bac2dc346 = $this->env->getExtension("native_profiler");
        $__internal_5abb428e100b1b95927df8bbbac3916d4e59a2c67ee6d74ec318852bac2dc346->enter($__internal_5abb428e100b1b95927df8bbbac3916d4e59a2c67ee6d74ec318852bac2dc346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_5abb428e100b1b95927df8bbbac3916d4e59a2c67ee6d74ec318852bac2dc346->leave($__internal_5abb428e100b1b95927df8bbbac3916d4e59a2c67ee6d74ec318852bac2dc346_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_205012904a3c4c4ccb21f9d1c2367b4371e53f48565dcc62159bd88b9ccf9cd1 = $this->env->getExtension("native_profiler");
        $__internal_205012904a3c4c4ccb21f9d1c2367b4371e53f48565dcc62159bd88b9ccf9cd1->enter($__internal_205012904a3c4c4ccb21f9d1c2367b4371e53f48565dcc62159bd88b9ccf9cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_205012904a3c4c4ccb21f9d1c2367b4371e53f48565dcc62159bd88b9ccf9cd1->leave($__internal_205012904a3c4c4ccb21f9d1c2367b4371e53f48565dcc62159bd88b9ccf9cd1_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Categorie:view.html.twig";
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
