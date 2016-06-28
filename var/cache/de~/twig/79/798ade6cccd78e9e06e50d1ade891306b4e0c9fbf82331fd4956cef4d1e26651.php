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
        $__internal_ec117f96c564f700f7fefe5480d698d6e2a65e22c7e15d34b13ede26c6abc6ca = $this->env->getExtension("native_profiler");
        $__internal_ec117f96c564f700f7fefe5480d698d6e2a65e22c7e15d34b13ede26c6abc6ca->enter($__internal_ec117f96c564f700f7fefe5480d698d6e2a65e22c7e15d34b13ede26c6abc6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Laboratoire:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec117f96c564f700f7fefe5480d698d6e2a65e22c7e15d34b13ede26c6abc6ca->leave($__internal_ec117f96c564f700f7fefe5480d698d6e2a65e22c7e15d34b13ede26c6abc6ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a27e6e24ad606806efe745cbe34a9d61b1f8ea67dd2c2574305d4e83a41a6336 = $this->env->getExtension("native_profiler");
        $__internal_a27e6e24ad606806efe745cbe34a9d61b1f8ea67dd2c2574305d4e83a41a6336->enter($__internal_a27e6e24ad606806efe745cbe34a9d61b1f8ea67dd2c2574305d4e83a41a6336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des laboratoires";
        
        $__internal_a27e6e24ad606806efe745cbe34a9d61b1f8ea67dd2c2574305d4e83a41a6336->leave($__internal_a27e6e24ad606806efe745cbe34a9d61b1f8ea67dd2c2574305d4e83a41a6336_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_ee43aec06144757e9ce8a74a4c7360db9063f97a7b0e7616348d2b4973ca364e = $this->env->getExtension("native_profiler");
        $__internal_ee43aec06144757e9ce8a74a4c7360db9063f97a7b0e7616348d2b4973ca364e->enter($__internal_ee43aec06144757e9ce8a74a4c7360db9063f97a7b0e7616348d2b4973ca364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_ee43aec06144757e9ce8a74a4c7360db9063f97a7b0e7616348d2b4973ca364e->leave($__internal_ee43aec06144757e9ce8a74a4c7360db9063f97a7b0e7616348d2b4973ca364e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3d45b8ea68fe8e43bd9e51c0c7cae4ce8fc9aa56d0cf72685b2b58b50e7e635 = $this->env->getExtension("native_profiler");
        $__internal_b3d45b8ea68fe8e43bd9e51c0c7cae4ce8fc9aa56d0cf72685b2b58b50e7e635->enter($__internal_b3d45b8ea68fe8e43bd9e51c0c7cae4ce8fc9aa56d0cf72685b2b58b50e7e635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("laboratoire", $context)) {
            // line 9
            echo "\t
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
        
        $__internal_b3d45b8ea68fe8e43bd9e51c0c7cae4ce8fc9aa56d0cf72685b2b58b50e7e635->leave($__internal_b3d45b8ea68fe8e43bd9e51c0c7cae4ce8fc9aa56d0cf72685b2b58b50e7e635_prof);

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
        return array (  96 => 17,  92 => 15,  81 => 13,  77 => 12,  74 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
/* 	*/
/* {% else %}*/
/* <ul>*/
/* {% for laboratoire in listeLaboratoire %}*/
/* 	<li>{{ laboratoire.id }} : {{ laboratoire.nom }}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
