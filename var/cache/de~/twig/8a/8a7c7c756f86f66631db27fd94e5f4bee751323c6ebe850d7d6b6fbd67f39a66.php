<?php

/* PublicationBundle:Article:add.html.twig */
class __TwigTemplate_6ca33762bed093b0f36da32ad130d3004a325d1e901088d2cfe49a23e3c1e47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Article:add.html.twig", 1);
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
        $__internal_682b53424f075515e503c11013947c9232bf04cf9994c351488f840f6fff90e7 = $this->env->getExtension("native_profiler");
        $__internal_682b53424f075515e503c11013947c9232bf04cf9994c351488f840f6fff90e7->enter($__internal_682b53424f075515e503c11013947c9232bf04cf9994c351488f840f6fff90e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682b53424f075515e503c11013947c9232bf04cf9994c351488f840f6fff90e7->leave($__internal_682b53424f075515e503c11013947c9232bf04cf9994c351488f840f6fff90e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30936db6505603b8aa65282b66a60e71b360ed100376b82490cbdf12659dae08 = $this->env->getExtension("native_profiler");
        $__internal_30936db6505603b8aa65282b66a60e71b360ed100376b82490cbdf12659dae08->enter($__internal_30936db6505603b8aa65282b66a60e71b360ed100376b82490cbdf12659dae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un article";
        
        $__internal_30936db6505603b8aa65282b66a60e71b360ed100376b82490cbdf12659dae08->leave($__internal_30936db6505603b8aa65282b66a60e71b360ed100376b82490cbdf12659dae08_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_20f09677b4f44d3b6dbe519b79ba9b6270870b435ec792d0d03516259731685e = $this->env->getExtension("native_profiler");
        $__internal_20f09677b4f44d3b6dbe519b79ba9b6270870b435ec792d0d03516259731685e->enter($__internal_20f09677b4f44d3b6dbe519b79ba9b6270870b435ec792d0d03516259731685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
<script type=\"text/javascript\">
\tvar authorNumber = 1;
\tvar lieuHtml = '<div class=\"form-group\" id=\"lieuHtml\"><label for=\"lieu\">Lieu de la conférence :</label><input required class=\"form-control\" type=\"text\" id=\"lieu\" /></div>';

\tvar checkCategorie = function(value)
\t{
\t\tif (value == 2 || value == 4)
\t\t{
\t\t\t\$(\"#categorie\").after(lieuHtml);
\t\t}
\t\telse
\t\t{
\t\t\t\$(\"#lieuHtml\").remove();
\t\t}
\t}

\t\$(document).ready(function() {
\t\t\$(\"#categorie\").val(1)
\t});

\t\$(document).ready(function() {
\t\t\$(\"#plus\").click(function() {
\t\t\t\$(this).before(\$(\"#autheurs\").clone());
\t\t});
\t});


</script>
";
        
        $__internal_20f09677b4f44d3b6dbe519b79ba9b6270870b435ec792d0d03516259731685e->leave($__internal_20f09677b4f44d3b6dbe519b79ba9b6270870b435ec792d0d03516259731685e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb8f1b2ce09e3bfbe64d4da77e540aee4d257239347a895344130e160ee5d63 = $this->env->getExtension("native_profiler");
        $__internal_8eb8f1b2ce09e3bfbe64d4da77e540aee4d257239347a895344130e160ee5d63->enter($__internal_8eb8f1b2ce09e3bfbe64d4da77e540aee4d257239347a895344130e160ee5d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
<form id=\"form\" role=\"form\" action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("publication_article_valid");
        echo "\" class=\"col-sm-6\" method=\"post\">

\t<div class=\"form-group\">
\t\t<label for=\"titre\">Titre :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"titre\" name=\"titre\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"label\">Label :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"label\" name=\"label\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"categorie\">Categorie :</label>
\t\t<select required class=\"form-control\" id=\"categorie\" name=\"categorie\" onchange=\"checkCategorie(this.value)\">
\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCategorie"]) ? $context["listeCategorie"] : $this->getContext($context, "listeCategorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 54
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t</select>
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"datePublication\">Date de publication :</label>
\t\t<input required class=\"form-control\" type=\"text\" id=\"datePublication\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"autheurs\">Autheur(s) :</label>
\t\t<select required class=\"form-control\" id=\"autheurs\" name=\"autheurs\">
\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
        foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
            // line 68
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chercheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t</select>
\t\t<button type=\"button\" id=\"plus\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span></button>
\t</div>

\t<button type=\"submit\" class=\"btn btn-default\">Enregistrer</button>
</form>

";
        
        $__internal_8eb8f1b2ce09e3bfbe64d4da77e540aee4d257239347a895344130e160ee5d63->leave($__internal_8eb8f1b2ce09e3bfbe64d4da77e540aee4d257239347a895344130e160ee5d63_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 70,  149 => 68,  145 => 67,  132 => 56,  121 => 54,  117 => 53,  99 => 38,  96 => 37,  90 => 36,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un article{% endblock %}*/
/* {% block header %}*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* <script type="text/javascript">*/
/* 	var authorNumber = 1;*/
/* 	var lieuHtml = '<div class="form-group" id="lieuHtml"><label for="lieu">Lieu de la conférence :</label><input required class="form-control" type="text" id="lieu" /></div>';*/
/* */
/* 	var checkCategorie = function(value)*/
/* 	{*/
/* 		if (value == 2 || value == 4)*/
/* 		{*/
/* 			$("#categorie").after(lieuHtml);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			$("#lieuHtml").remove();*/
/* 		}*/
/* 	}*/
/* */
/* 	$(document).ready(function() {*/
/* 		$("#categorie").val(1)*/
/* 	});*/
/* */
/* 	$(document).ready(function() {*/
/* 		$("#plus").click(function() {*/
/* 			$(this).before($("#autheurs").clone());*/
/* 		});*/
/* 	});*/
/* */
/* */
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="form" role="form" action="{{ path("publication_article_valid") }}" class="col-sm-6" method="post">*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="titre">Titre :</label>*/
/* 		<input required type="text" class="form-control" id="titre" name="titre" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="label">Label :</label>*/
/* 		<input required type="text" class="form-control" id="label" name="label" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="categorie">Categorie :</label>*/
/* 		<select required class="form-control" id="categorie" name="categorie" onchange="checkCategorie(this.value)">*/
/* 		{% for categorie in listeCategorie %}*/
/* 		<option value="{{ categorie.id }}">{{ categorie.nom }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="datePublication">Date de publication :</label>*/
/* 		<input required class="form-control" type="text" id="datePublication" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="autheurs">Autheur(s) :</label>*/
/* 		<select required class="form-control" id="autheurs" name="autheurs">*/
/* 		{% for chercheur in listeChercheur %}*/
/* 		<option value="{{ chercheur.id }}">{{ chercheur.nom }} {{ chercheur.prenom }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 		<button type="button" id="plus" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button>*/
/* 	</div>*/
/* */
/* 	<button type="submit" class="btn btn-default">Enregistrer</button>*/
/* </form>*/
/* */
/* {% endblock %}*/
