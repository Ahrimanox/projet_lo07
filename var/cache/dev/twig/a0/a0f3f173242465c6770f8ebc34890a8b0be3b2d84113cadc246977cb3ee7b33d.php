<?php

/* PublicationBundle:Recherche:index.html.twig */
class __TwigTemplate_6cd0fd0c87b4b9cc3ae636cd5331c89888dc453d61ff829dc7384d081502a0e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Recherche:index.html.twig", 1);
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
        $__internal_8fa2387444920ebd688ae7ddb064765ee9a447cea2431c6f021e0627410583b0 = $this->env->getExtension("native_profiler");
        $__internal_8fa2387444920ebd688ae7ddb064765ee9a447cea2431c6f021e0627410583b0->enter($__internal_8fa2387444920ebd688ae7ddb064765ee9a447cea2431c6f021e0627410583b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Recherche:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa2387444920ebd688ae7ddb064765ee9a447cea2431c6f021e0627410583b0->leave($__internal_8fa2387444920ebd688ae7ddb064765ee9a447cea2431c6f021e0627410583b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cadaefd56bb6b8c1f47e74e0645c3579c7cebc3c27edc1d87f2f01922ed9f405 = $this->env->getExtension("native_profiler");
        $__internal_cadaefd56bb6b8c1f47e74e0645c3579c7cebc3c27edc1d87f2f01922ed9f405->enter($__internal_cadaefd56bb6b8c1f47e74e0645c3579c7cebc3c27edc1d87f2f01922ed9f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_cadaefd56bb6b8c1f47e74e0645c3579c7cebc3c27edc1d87f2f01922ed9f405->leave($__internal_cadaefd56bb6b8c1f47e74e0645c3579c7cebc3c27edc1d87f2f01922ed9f405_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_2037a40ab0a8d973eb3db624f50551a55e185fb09767ce3cefc67eb4dac0278f = $this->env->getExtension("native_profiler");
        $__internal_2037a40ab0a8d973eb3db624f50551a55e185fb09767ce3cefc67eb4dac0278f->enter($__internal_2037a40ab0a8d973eb3db624f50551a55e185fb09767ce3cefc67eb4dac0278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2037a40ab0a8d973eb3db624f50551a55e185fb09767ce3cefc67eb4dac0278f->leave($__internal_2037a40ab0a8d973eb3db624f50551a55e185fb09767ce3cefc67eb4dac0278f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc5d6d9dcd0dd5856d8fb04da57e19f079ed83fb30c41f62fec14c52ffadd943 = $this->env->getExtension("native_profiler");
        $__internal_cc5d6d9dcd0dd5856d8fb04da57e19f079ed83fb30c41f62fec14c52ffadd943->enter($__internal_cc5d6d9dcd0dd5856d8fb04da57e19f079ed83fb30c41f62fec14c52ffadd943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
\t<form id=\"form1\" role=\"form\" class=\"col-sm-3\" method=\"post\" action=";
        // line 8
        echo $this->env->getExtension('routing')->getPath("publication_recherche_valid");
        echo ">
\t\t<h4>Par laboratoire et par annee</h4>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"laboratoire\">Laboratoire :</label>
\t\t\t<select id=\"laboratoire\" class=\"form-control\" name=\"laboratoire\">
\t\t\t<option selected=\"selected\">-- Choix du laboratoire --</option>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeLaboratoire"]) ? $context["listeLaboratoire"] : $this->getContext($context, "listeLaboratoire")));
        foreach ($context['_seq'] as $context["_key"] => $context["laboratoire"]) {
            // line 15
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laboratoire"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laboratoire"], "nom", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laboratoire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</select>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"annee\">A partir de quelle annee :</label>
\t\t\t<input type=\"text\" id=\"annee\" name=\"annee\" class=\"form-control\" />
\t\t</div>

\t\t<input name=\"type\" type=\"hidden\" value=\"1\" />

\t\t<div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Rechercher</button>\t
\t\t</div>
\t</form>


\t<form id=\"form2\" role=\"form\" class=\"col-sm-3\" method=\"post\" action=";
        // line 33
        echo $this->env->getExtension('routing')->getPath("publication_recherche_valid");
        echo ">
\t\t<h4>Par chercheur</h4>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"chercheur1\">Chercheur :</label>
\t\t\t<select id=\"chercheur1\" class=\"form-control\" name=\"chercheur\">
\t\t\t<option selected=\"selected\">-- Choix du chercheur --</option>
\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
        foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
            // line 40
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chercheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</select>
\t\t</div>

\t\t<input name=\"type\" type=\"hidden\" value=\"2\" />

\t\t<div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Rechercher</button>\t
\t\t</div>
\t</form>

\t<form id=\"form3\" role=\"form\" class=\"col-sm-3\" method=\"post\" action=";
        // line 52
        echo $this->env->getExtension('routing')->getPath("publication_recherche_valid");
        echo ">
\t\t<h4>Par chercheur et collaboration</h4>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"chercheur2\">Chercheur :</label>
\t\t\t<select id=\"chercheur2\" class=\"form-control\" name=\"chercheur\">
\t\t\t<option selected=\"selected\">-- Choix du chercheur --</option>
\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
        foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
            // line 59
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chercheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</select>
\t\t</div>

\t\t<input name=\"type\" type=\"hidden\" value=\"3\" />

\t\t<div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Rechercher</button>\t
\t\t</div>
\t</form>
</div>

<div class=\"container col-sm-12\">
";
        // line 73
        if (array_key_exists("liste", $context)) {
            // line 74
            echo "\t";
            if ((twig_length_filter($this->env, (isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste"))) >= 1)) {
                // line 75
                echo "\t\t";
                $this->loadTemplate("PublicationBundle:Article:article.html.twig", "PublicationBundle:Recherche:index.html.twig", 75)->display($context);
                // line 76
                echo "\t";
            } else {
                // line 77
                echo "\t\t<h1>Pas de resultats - Methode n° ";
                echo twig_escape_filter($this->env, (isset($context["methode"]) ? $context["methode"] : $this->getContext($context, "methode")), "html", null, true);
                echo "</h1>
\t";
            }
            // line 78
            echo "\t
";
        }
        // line 80
        echo "</div>


";
        
        $__internal_cc5d6d9dcd0dd5856d8fb04da57e19f079ed83fb30c41f62fec14c52ffadd943->leave($__internal_cc5d6d9dcd0dd5856d8fb04da57e19f079ed83fb30c41f62fec14c52ffadd943_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Recherche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  205 => 78,  199 => 77,  196 => 76,  193 => 75,  190 => 74,  188 => 73,  174 => 61,  161 => 59,  157 => 58,  148 => 52,  136 => 42,  123 => 40,  119 => 39,  110 => 33,  92 => 17,  81 => 15,  77 => 14,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Recherche{% endblock %}*/
/* {% block header %}{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* 	<form id="form1" role="form" class="col-sm-3" method="post" action={{ path("publication_recherche_valid") }}>*/
/* 		<h4>Par laboratoire et par annee</h4>*/
/* 		<div class="form-group">*/
/* 			<label for="laboratoire">Laboratoire :</label>*/
/* 			<select id="laboratoire" class="form-control" name="laboratoire">*/
/* 			<option selected="selected">-- Choix du laboratoire --</option>*/
/* 			{% for laboratoire in listeLaboratoire %}*/
/* 				<option value="{{ laboratoire.id }}">{{ laboratoire.nom }}</option>*/
/* 			{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label for="annee">A partir de quelle annee :</label>*/
/* 			<input type="text" id="annee" name="annee" class="form-control" />*/
/* 		</div>*/
/* */
/* 		<input name="type" type="hidden" value="1" />*/
/* */
/* 		<div>*/
/* 			<button type="submit" class="btn btn-default">Rechercher</button>	*/
/* 		</div>*/
/* 	</form>*/
/* */
/* */
/* 	<form id="form2" role="form" class="col-sm-3" method="post" action={{ path("publication_recherche_valid") }}>*/
/* 		<h4>Par chercheur</h4>*/
/* 		<div class="form-group">*/
/* 			<label for="chercheur1">Chercheur :</label>*/
/* 			<select id="chercheur1" class="form-control" name="chercheur">*/
/* 			<option selected="selected">-- Choix du chercheur --</option>*/
/* 			{% for chercheur in listeChercheur %}*/
/* 				<option value="{{ chercheur.id }}">{{ chercheur.prenom }} {{ chercheur.nom }}</option>*/
/* 			{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<input name="type" type="hidden" value="2" />*/
/* */
/* 		<div>*/
/* 			<button type="submit" class="btn btn-default">Rechercher</button>	*/
/* 		</div>*/
/* 	</form>*/
/* */
/* 	<form id="form3" role="form" class="col-sm-3" method="post" action={{ path("publication_recherche_valid") }}>*/
/* 		<h4>Par chercheur et collaboration</h4>*/
/* 		<div class="form-group">*/
/* 			<label for="chercheur2">Chercheur :</label>*/
/* 			<select id="chercheur2" class="form-control" name="chercheur">*/
/* 			<option selected="selected">-- Choix du chercheur --</option>*/
/* 			{% for chercheur in listeChercheur %}*/
/* 				<option value="{{ chercheur.id }}">{{ chercheur.prenom }} {{ chercheur.nom }}</option>*/
/* 			{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<input name="type" type="hidden" value="3" />*/
/* */
/* 		<div>*/
/* 			<button type="submit" class="btn btn-default">Rechercher</button>	*/
/* 		</div>*/
/* 	</form>*/
/* </div>*/
/* */
/* <div class="container col-sm-12">*/
/* {% if liste is defined %}*/
/* 	{% if liste|length >= 1 %}*/
/* 		{% include "PublicationBundle:Article:article.html.twig" %}*/
/* 	{% else %}*/
/* 		<h1>Pas de resultats - Methode n° {{ methode }}</h1>*/
/* 	{% endif %}	*/
/* {% endif %}*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
