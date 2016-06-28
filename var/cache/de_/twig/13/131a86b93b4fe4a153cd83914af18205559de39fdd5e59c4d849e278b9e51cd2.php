<?php

/* @Publication/Organisation/view.html.twig */
class __TwigTemplate_eca6722a4396608d61f2a63c1435015b53e06741c2656fef646cc87a9a6016bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Organisation/view.html.twig", 1);
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
        $__internal_e44374b1c43de03c76f7b7f6a9a47054f6d2818a2d6bfe51a15d2d88e750f0f1 = $this->env->getExtension("native_profiler");
        $__internal_e44374b1c43de03c76f7b7f6a9a47054f6d2818a2d6bfe51a15d2d88e750f0f1->enter($__internal_e44374b1c43de03c76f7b7f6a9a47054f6d2818a2d6bfe51a15d2d88e750f0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Organisation/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e44374b1c43de03c76f7b7f6a9a47054f6d2818a2d6bfe51a15d2d88e750f0f1->leave($__internal_e44374b1c43de03c76f7b7f6a9a47054f6d2818a2d6bfe51a15d2d88e750f0f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdf45644caf7e9c77990517d37376fa10826996b2b57b48b6bc7b2e06165245c = $this->env->getExtension("native_profiler");
        $__internal_bdf45644caf7e9c77990517d37376fa10826996b2b57b48b6bc7b2e06165245c->enter($__internal_bdf45644caf7e9c77990517d37376fa10826996b2b57b48b6bc7b2e06165245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des organisations";
        
        $__internal_bdf45644caf7e9c77990517d37376fa10826996b2b57b48b6bc7b2e06165245c->leave($__internal_bdf45644caf7e9c77990517d37376fa10826996b2b57b48b6bc7b2e06165245c_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_2fdc9e78a4cdc2b5b673852745bc269cccf87bb3ebd3519faeb2b963d466422a = $this->env->getExtension("native_profiler");
        $__internal_2fdc9e78a4cdc2b5b673852745bc269cccf87bb3ebd3519faeb2b963d466422a->enter($__internal_2fdc9e78a4cdc2b5b673852745bc269cccf87bb3ebd3519faeb2b963d466422a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2fdc9e78a4cdc2b5b673852745bc269cccf87bb3ebd3519faeb2b963d466422a->leave($__internal_2fdc9e78a4cdc2b5b673852745bc269cccf87bb3ebd3519faeb2b963d466422a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8899638a99b4ad827d36c648748459406d7606839e0e65ff948db185ac3c7771 = $this->env->getExtension("native_profiler");
        $__internal_8899638a99b4ad827d36c648748459406d7606839e0e65ff948db185ac3c7771->enter($__internal_8899638a99b4ad827d36c648748459406d7606839e0e65ff948db185ac3c7771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8899638a99b4ad827d36c648748459406d7606839e0e65ff948db185ac3c7771->leave($__internal_8899638a99b4ad827d36c648748459406d7606839e0e65ff948db185ac3c7771_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Organisation/view.html.twig";
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
