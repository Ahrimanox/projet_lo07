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
        $__internal_612b2c0a1f2f11474d124148e4a61cb6e6089020f4f5d1385d7a16f64d944c3d = $this->env->getExtension("native_profiler");
        $__internal_612b2c0a1f2f11474d124148e4a61cb6e6089020f4f5d1385d7a16f64d944c3d->enter($__internal_612b2c0a1f2f11474d124148e4a61cb6e6089020f4f5d1385d7a16f64d944c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_612b2c0a1f2f11474d124148e4a61cb6e6089020f4f5d1385d7a16f64d944c3d->leave($__internal_612b2c0a1f2f11474d124148e4a61cb6e6089020f4f5d1385d7a16f64d944c3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67f63e83dc29b108e7121eb4bc6b26059fe04c0309c8dd3424c4c7383a606262 = $this->env->getExtension("native_profiler");
        $__internal_67f63e83dc29b108e7121eb4bc6b26059fe04c0309c8dd3424c4c7383a606262->enter($__internal_67f63e83dc29b108e7121eb4bc6b26059fe04c0309c8dd3424c4c7383a606262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article";
        
        $__internal_67f63e83dc29b108e7121eb4bc6b26059fe04c0309c8dd3424c4c7383a606262->leave($__internal_67f63e83dc29b108e7121eb4bc6b26059fe04c0309c8dd3424c4c7383a606262_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_6623034799b3f4493a1502b8d621b2bc1e927f66dd00e41ea8af8446e5576124 = $this->env->getExtension("native_profiler");
        $__internal_6623034799b3f4493a1502b8d621b2bc1e927f66dd00e41ea8af8446e5576124->enter($__internal_6623034799b3f4493a1502b8d621b2bc1e927f66dd00e41ea8af8446e5576124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6623034799b3f4493a1502b8d621b2bc1e927f66dd00e41ea8af8446e5576124->leave($__internal_6623034799b3f4493a1502b8d621b2bc1e927f66dd00e41ea8af8446e5576124_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_739c32cd11bc7aadf6cac0f3ae7ef79b3cc0823baec436538b0799dfb4b52a11 = $this->env->getExtension("native_profiler");
        $__internal_739c32cd11bc7aadf6cac0f3ae7ef79b3cc0823baec436538b0799dfb4b52a11->enter($__internal_739c32cd11bc7aadf6cac0f3ae7ef79b3cc0823baec436538b0799dfb4b52a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        if (array_key_exists("article", $context)) {
            // line 9
            echo "
<div class=\"container col-sm-12 article\">
\t<h4>";
            // line 11
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array())), "html", null, true);
            echo "</h4>

\t<div>
\t\tAutheurs : 
\t\t<bold>
\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chercheurs"]) ? $context["chercheurs"] : $this->getContext($context, "chercheurs")));
            foreach ($context['_seq'] as $context["ordre"] => $context["chercheur"]) {
                // line 17
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $context["ordre"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
                echo ",
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['chercheur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</bold>
\t</div>

\t<div>
\t\tLabel :
\t\t<i>
\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "label", array()), "html", null, true);
            echo "
\t\t</i>
\t</div>

\t<div>
\t\tCategorie : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "nom", array()), "html", null, true);
            echo "
\t</div>

\t<div>
\t\tDate : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "datePublication", array()), "html", null, true);
            echo "
\t</div>

\t<div>
\t\tLieu : ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "lieu", array()), "html", null, true);
            echo "
\t</div>
</div>
<div class=\"col-sm-3\"></div>
<div class=\"col-sm-6\"><h3>A Propos des Acteurs :</h3></div>
<div class=\"col-sm-3\"></div>

<div class=\"container col-sm-12\">
<div class=\"container col-sm-1\"></div>
";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chercheurs"]) ? $context["chercheurs"] : $this->getContext($context, "chercheurs")));
            foreach ($context['_seq'] as $context["ordre"] => $context["chercheur"]) {
                // line 48
                echo "\t<div class=\"container col-sm-2 auteur\">
\t\t<div class=\"container col-sm-12\">
\t\t\t<a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_chercheur_view", array("id" => $this->getAttribute($context["chercheur"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["chercheur"], "picture", array()))), "html", null, true);
                echo "\" alt=\"Photo\" class=\"img img-rounded\" width=\"100\" height=\"100\" /></a>
\t\t</div>
\t\t<div class=\"container col-sm-12\">
\t\t\t<i>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
                echo "</i>
\t\t</div>
\t</div>
\t<div class=\"container col-sm-2\">
\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['chercheur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</div>

";
        } else {
            // line 62
            echo "
";
            // line 63
            $this->loadTemplate("PublicationBundle:Article:article.html.twig", "PublicationBundle:Article:view.html.twig", 63)->display($context);
            // line 64
            echo "
";
        }
        // line 66
        echo "
";
        
        $__internal_739c32cd11bc7aadf6cac0f3ae7ef79b3cc0823baec436538b0799dfb4b52a11->leave($__internal_739c32cd11bc7aadf6cac0f3ae7ef79b3cc0823baec436538b0799dfb4b52a11_prof);

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
        return array (  185 => 66,  181 => 64,  179 => 63,  176 => 62,  171 => 59,  157 => 53,  149 => 50,  145 => 48,  141 => 47,  129 => 38,  122 => 34,  115 => 30,  107 => 25,  99 => 19,  86 => 17,  82 => 16,  74 => 11,  70 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Article{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if article is defined %}*/
/* */
/* <div class="container col-sm-12 article">*/
/* 	<h4>{{ article.titre | upper }}</h4>*/
/* */
/* 	<div>*/
/* 		Autheurs : */
/* 		<bold>*/
/* 		{% for ordre, chercheur in chercheurs %}*/
/* 			{{ ordre }} {{ chercheur.prenom }} {{ chercheur.nom }},*/
/* 		{% endfor %}*/
/* 		</bold>*/
/* 	</div>*/
/* */
/* 	<div>*/
/* 		Label :*/
/* 		<i>*/
/* 		{{ article.label }}*/
/* 		</i>*/
/* 	</div>*/
/* */
/* 	<div>*/
/* 		Categorie : {{ article.categorie.nom }}*/
/* 	</div>*/
/* */
/* 	<div>*/
/* 		Date : {{ article.datePublication }}*/
/* 	</div>*/
/* */
/* 	<div>*/
/* 		Lieu : {{ article.lieu }}*/
/* 	</div>*/
/* </div>*/
/* <div class="col-sm-3"></div>*/
/* <div class="col-sm-6"><h3>A Propos des Acteurs :</h3></div>*/
/* <div class="col-sm-3"></div>*/
/* */
/* <div class="container col-sm-12">*/
/* <div class="container col-sm-1"></div>*/
/* {% for ordre, chercheur in chercheurs %}*/
/* 	<div class="container col-sm-2 auteur">*/
/* 		<div class="container col-sm-12">*/
/* 			<a href="{{ path('publication_chercheur_view', {id: chercheur.id}) }}"><img src="{{ asset('uploads/' ~ chercheur.picture) }}" alt="Photo" class="img img-rounded" width="100" height="100" /></a>*/
/* 		</div>*/
/* 		<div class="container col-sm-12">*/
/* 			<i>{{ chercheur.prenom }} {{ chercheur.nom }}</i>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container col-sm-2">*/
/* 	</div>*/
/* {% endfor %}*/
/* </div>*/
/* */
/* {% else %}*/
/* */
/* {% include "PublicationBundle:Article:article.html.twig" %}*/
/* */
/* {% endif %}*/
/* */
/* {% endblock %}*/
