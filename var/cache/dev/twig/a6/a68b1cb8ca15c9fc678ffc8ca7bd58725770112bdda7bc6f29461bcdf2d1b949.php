<?php

/* PublicationBundle:Article:article.html.twig */
class __TwigTemplate_6546a25bc34714fe1ce9eab776012163386294d8e984d17ea59764409d045461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d3153a09c12f837d4aac94172c1e822b00155926e2d4b2c3861204aeec75c2b = $this->env->getExtension("native_profiler");
        $__internal_2d3153a09c12f837d4aac94172c1e822b00155926e2d4b2c3861204aeec75c2b->enter($__internal_2d3153a09c12f837d4aac94172c1e822b00155926e2d4b2c3861204aeec75c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:article.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 2
            echo "\t<div class=\"container col-sm-10 article\">
\t\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_article_view", array("id" => $this->getAttribute($this->getAttribute($context["element"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">
\t\t\t<h4>";
            // line 4
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], 0, array(), "array"), "titre", array())), "html", null, true);
            echo "</h4>
\t\t</a>
\t\t
\t\t<div>
\t\t\t<bold>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["element"], 1, array(), "array"));
            foreach ($context['_seq'] as $context["ordre"] => $context["chercheur"]) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_chercheur_article_view", array("id" => $this->getAttribute($context["chercheur"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
                echo "</a>,
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['chercheur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t</bold>
\t\t</div>

\t\t<div>
\t\t<i>
\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], 0, array(), "array"), "label", array()), "html", null, true);
            echo "
\t\t</i>
\t\t</div>

\t\t<div>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], 0, array(), "array"), "categorie", array()), "abreviation", array()), "html", null, true);
            echo "</div>
\t\t<div class=\"btn-group bouton_infos\">
\t\t    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["element"], 0, array(), "array"), "pdfFile", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-download-alt\"></span> Telecharger</a>
\t\t    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_article_modif", array("id" => $this->getAttribute($this->getAttribute($context["element"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success btn-sm\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a>
\t  \t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2d3153a09c12f837d4aac94172c1e822b00155926e2d4b2c3861204aeec75c2b->leave($__internal_2d3153a09c12f837d4aac94172c1e822b00155926e2d4b2c3861204aeec75c2b_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Article:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  77 => 23,  72 => 21,  65 => 17,  58 => 12,  45 => 10,  41 => 9,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for element in liste %}*/
/* 	<div class="container col-sm-10 article">*/
/* 		<a href="{{ path("publication_article_view", { "id" : element[0].id }) }}">*/
/* 			<h4>{{ element[0].titre | upper }}</h4>*/
/* 		</a>*/
/* 		*/
/* 		<div>*/
/* 			<bold>*/
/* 			{% for ordre, chercheur in element[1] %}*/
/* 				<a href="{{ path('publication_chercheur_article_view', {id: chercheur.id}) }}">{{ chercheur.prenom }} {{ chercheur.nom }}</a>,*/
/* 			{% endfor %}*/
/* 			</bold>*/
/* 		</div>*/
/* */
/* 		<div>*/
/* 		<i>*/
/* 		{{ element[0].label }}*/
/* 		</i>*/
/* 		</div>*/
/* */
/* 		<div>{{ element[0].categorie.abreviation }}</div>*/
/* 		<div class="btn-group bouton_infos">*/
/* 		    <a href="{{ asset('uploads/' ~ element[0].pdfFile) }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Telecharger</a>*/
/* 		    <a href="{{ path('publication_article_modif', {id: element[0].id}) }}" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Modifier</a>*/
/* 	  	</div>*/
/* 	</div>*/
/* {% endfor %}*/
/* */
