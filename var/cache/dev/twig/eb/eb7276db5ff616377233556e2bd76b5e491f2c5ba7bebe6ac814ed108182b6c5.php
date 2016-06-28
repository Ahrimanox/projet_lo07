<?php

/* PublicationBundle:Chercheur:view.html.twig */
class __TwigTemplate_0066ece5f5b8473d7d2aee1faac5fdaff309ba57f43a0fcc20ec51392a4ff5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Chercheur:view.html.twig", 1);
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
        $__internal_b57bd4c9b601fd14457229e62ba276e6bbb693403f10cb771fb24f7fcc0cf39c = $this->env->getExtension("native_profiler");
        $__internal_b57bd4c9b601fd14457229e62ba276e6bbb693403f10cb771fb24f7fcc0cf39c->enter($__internal_b57bd4c9b601fd14457229e62ba276e6bbb693403f10cb771fb24f7fcc0cf39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b57bd4c9b601fd14457229e62ba276e6bbb693403f10cb771fb24f7fcc0cf39c->leave($__internal_b57bd4c9b601fd14457229e62ba276e6bbb693403f10cb771fb24f7fcc0cf39c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24241942bc62426c59fe27793537e2b0eed4fe2c8fe488f27a9c73d043a52187 = $this->env->getExtension("native_profiler");
        $__internal_24241942bc62426c59fe27793537e2b0eed4fe2c8fe488f27a9c73d043a52187->enter($__internal_24241942bc62426c59fe27793537e2b0eed4fe2c8fe488f27a9c73d043a52187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des chercheurs";
        
        $__internal_24241942bc62426c59fe27793537e2b0eed4fe2c8fe488f27a9c73d043a52187->leave($__internal_24241942bc62426c59fe27793537e2b0eed4fe2c8fe488f27a9c73d043a52187_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_dcdbd8a2f52d69eb1a9a055506b4c1723592ef0fdca983481e2d1672d3c38cc4 = $this->env->getExtension("native_profiler");
        $__internal_dcdbd8a2f52d69eb1a9a055506b4c1723592ef0fdca983481e2d1672d3c38cc4->enter($__internal_dcdbd8a2f52d69eb1a9a055506b4c1723592ef0fdca983481e2d1672d3c38cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_dcdbd8a2f52d69eb1a9a055506b4c1723592ef0fdca983481e2d1672d3c38cc4->leave($__internal_dcdbd8a2f52d69eb1a9a055506b4c1723592ef0fdca983481e2d1672d3c38cc4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b42fd0277bde97e18dbf1669ebf0903d1c85bce70f722f5e27cc2a5c839e8a6 = $this->env->getExtension("native_profiler");
        $__internal_5b42fd0277bde97e18dbf1669ebf0903d1c85bce70f722f5e27cc2a5c839e8a6->enter($__internal_5b42fd0277bde97e18dbf1669ebf0903d1c85bce70f722f5e27cc2a5c839e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("chercheur", $context)) {
            // line 9
            echo "\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "nom", array()), "html", null, true);
            echo " travaille dans le laboratoire ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "laboratoire", array()), "nom", array()), "html", null, true);
            echo " à l'organisation ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chercheur"]) ? $context["chercheur"] : $this->getContext($context, "chercheur")), "organisation", array()), "nom", array()), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>Photo</th>
\t\t\t<th>Nom Prénom</th>
\t\t\t<th>Organisation</th>
\t\t\t<th>Laboratoire</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
            foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
                // line 23
                echo "\t\t<tr>
\t\t\t<td><img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["chercheur"], "picture", array()))), "html", null, true);
                echo "\" alt=\"Photo\" class=\"img img-rounded\" width=\"100\" height=\"100\" /></td>
\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chercheur"], "organisation", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chercheur"], "laboratoire", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t<td><a type=\"button\" class=\"btn btn-success\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_chercheur_article_view", array("id" => $this->getAttribute($context["chercheur"], "id", array()))), "html", null, true);
                echo "\">Voir articles</a></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chercheur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</tbody>
</table>
";
        }
        
        $__internal_5b42fd0277bde97e18dbf1669ebf0903d1c85bce70f722f5e27cc2a5c839e8a6->leave($__internal_5b42fd0277bde97e18dbf1669ebf0903d1c85bce70f722f5e27cc2a5c839e8a6_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  120 => 28,  116 => 27,  112 => 26,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  82 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Liste des chercheurs{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if chercheur is defined %}*/
/* 	<h1>{{ chercheur.id }} : {{ chercheur.nom }} travaille dans le laboratoire {{ chercheur.laboratoire.nom }} à l'organisation {{ chercheur.organisation.nom }}</h1>*/
/* {% else %}*/
/* <table class="table table-striped">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th>Photo</th>*/
/* 			<th>Nom Prénom</th>*/
/* 			<th>Organisation</th>*/
/* 			<th>Laboratoire</th>*/
/* 			<th></th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	{% for chercheur in listeChercheur %}*/
/* 		<tr>*/
/* 			<td><img src="{{ asset('uploads/' ~ chercheur.picture) }}" alt="Photo" class="img img-rounded" width="100" height="100" /></td>*/
/* 			<td>{{ chercheur.prenom }} {{ chercheur.nom }}</td>*/
/* 			<td>{{ chercheur.organisation.nom }}</td>*/
/* 			<td>{{ chercheur.laboratoire.nom }}</td>*/
/* 			<td><a type="button" class="btn btn-success" href="{{ path("publication_chercheur_article_view", {id: chercheur.id}) }}">Voir articles</a></td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* {% endif %}*/
/* {% endblock %}*/
