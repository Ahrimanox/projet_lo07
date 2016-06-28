<?php

/* @Publication/Article/add.html.twig */
class __TwigTemplate_6921d196225147d1fc0b9c961c6bc5bffd95277080f31ac0b8e3580106882abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "@Publication/Article/add.html.twig", 1);
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
        $__internal_78a2c14a6d45ae474db75b5eb90799d764a0516a3fc371ff9e5b36dd6cf28322 = $this->env->getExtension("native_profiler");
        $__internal_78a2c14a6d45ae474db75b5eb90799d764a0516a3fc371ff9e5b36dd6cf28322->enter($__internal_78a2c14a6d45ae474db75b5eb90799d764a0516a3fc371ff9e5b36dd6cf28322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Article/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a2c14a6d45ae474db75b5eb90799d764a0516a3fc371ff9e5b36dd6cf28322->leave($__internal_78a2c14a6d45ae474db75b5eb90799d764a0516a3fc371ff9e5b36dd6cf28322_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d05be49eb164308059d1f4e2138b34aff87cb40a65b2bf458917b70ebd258ff = $this->env->getExtension("native_profiler");
        $__internal_4d05be49eb164308059d1f4e2138b34aff87cb40a65b2bf458917b70ebd258ff->enter($__internal_4d05be49eb164308059d1f4e2138b34aff87cb40a65b2bf458917b70ebd258ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un article";
        
        $__internal_4d05be49eb164308059d1f4e2138b34aff87cb40a65b2bf458917b70ebd258ff->leave($__internal_4d05be49eb164308059d1f4e2138b34aff87cb40a65b2bf458917b70ebd258ff_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_bdd50c3235eac0eeeb815fff019eeefa8f42a89dc9436496fd5928215718b120 = $this->env->getExtension("native_profiler");
        $__internal_bdd50c3235eac0eeeb815fff019eeefa8f42a89dc9436496fd5928215718b120->enter($__internal_bdd50c3235eac0eeeb815fff019eeefa8f42a89dc9436496fd5928215718b120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_bdd50c3235eac0eeeb815fff019eeefa8f42a89dc9436496fd5928215718b120->leave($__internal_bdd50c3235eac0eeeb815fff019eeefa8f42a89dc9436496fd5928215718b120_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44e6230b758de271a13976b07a3ef4a87fc8642d28395842fb37f036b1a27a6 = $this->env->getExtension("native_profiler");
        $__internal_e44e6230b758de271a13976b07a3ef4a87fc8642d28395842fb37f036b1a27a6->enter($__internal_e44e6230b758de271a13976b07a3ef4a87fc8642d28395842fb37f036b1a27a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e44e6230b758de271a13976b07a3ef4a87fc8642d28395842fb37f036b1a27a6->leave($__internal_e44e6230b758de271a13976b07a3ef4a87fc8642d28395842fb37f036b1a27a6_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Article/add.html.twig";
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
