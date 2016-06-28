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
        $__internal_4767434e2ec3ae47fd4de30bfbe09b61f98d9d44f7705e3c5306704e6759e0c4 = $this->env->getExtension("native_profiler");
        $__internal_4767434e2ec3ae47fd4de30bfbe09b61f98d9d44f7705e3c5306704e6759e0c4->enter($__internal_4767434e2ec3ae47fd4de30bfbe09b61f98d9d44f7705e3c5306704e6759e0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4767434e2ec3ae47fd4de30bfbe09b61f98d9d44f7705e3c5306704e6759e0c4->leave($__internal_4767434e2ec3ae47fd4de30bfbe09b61f98d9d44f7705e3c5306704e6759e0c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46f235e09848c79866c6ea29b3f272aa3eaef33b5d9f4b4d7310fa54d837f2f0 = $this->env->getExtension("native_profiler");
        $__internal_46f235e09848c79866c6ea29b3f272aa3eaef33b5d9f4b4d7310fa54d837f2f0->enter($__internal_46f235e09848c79866c6ea29b3f272aa3eaef33b5d9f4b4d7310fa54d837f2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un article";
        
        $__internal_46f235e09848c79866c6ea29b3f272aa3eaef33b5d9f4b4d7310fa54d837f2f0->leave($__internal_46f235e09848c79866c6ea29b3f272aa3eaef33b5d9f4b4d7310fa54d837f2f0_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_47f88969f10f92d943254c87270b77deab7ec35479f3fc7e9028f6c08e9ee2d1 = $this->env->getExtension("native_profiler");
        $__internal_47f88969f10f92d943254c87270b77deab7ec35479f3fc7e9028f6c08e9ee2d1->enter($__internal_47f88969f10f92d943254c87270b77deab7ec35479f3fc7e9028f6c08e9ee2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_47f88969f10f92d943254c87270b77deab7ec35479f3fc7e9028f6c08e9ee2d1->leave($__internal_47f88969f10f92d943254c87270b77deab7ec35479f3fc7e9028f6c08e9ee2d1_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b9140b641c3b13f39a0b4c0571019afa70aa294b5f5bb9fb6eda968227a70f = $this->env->getExtension("native_profiler");
        $__internal_d8b9140b641c3b13f39a0b4c0571019afa70aa294b5f5bb9fb6eda968227a70f->enter($__internal_d8b9140b641c3b13f39a0b4c0571019afa70aa294b5f5bb9fb6eda968227a70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8b9140b641c3b13f39a0b4c0571019afa70aa294b5f5bb9fb6eda968227a70f->leave($__internal_d8b9140b641c3b13f39a0b4c0571019afa70aa294b5f5bb9fb6eda968227a70f_prof);

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
