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
        $__internal_30d0408250707b197490ee0c6c641a65ff347c3c88778bbdf18a7c042212a1ba = $this->env->getExtension("native_profiler");
        $__internal_30d0408250707b197490ee0c6c641a65ff347c3c88778bbdf18a7c042212a1ba->enter($__internal_30d0408250707b197490ee0c6c641a65ff347c3c88778bbdf18a7c042212a1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d0408250707b197490ee0c6c641a65ff347c3c88778bbdf18a7c042212a1ba->leave($__internal_30d0408250707b197490ee0c6c641a65ff347c3c88778bbdf18a7c042212a1ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac858d81c51090ddb63ddd98d0726c5f259a0f7c64d3ff377489e26892367ca = $this->env->getExtension("native_profiler");
        $__internal_fac858d81c51090ddb63ddd98d0726c5f259a0f7c64d3ff377489e26892367ca->enter($__internal_fac858d81c51090ddb63ddd98d0726c5f259a0f7c64d3ff377489e26892367ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un article";
        
        $__internal_fac858d81c51090ddb63ddd98d0726c5f259a0f7c64d3ff377489e26892367ca->leave($__internal_fac858d81c51090ddb63ddd98d0726c5f259a0f7c64d3ff377489e26892367ca_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_f4791198a175c3d3bb07c2b31b120a3440832556575491830fea06e47b77cf8f = $this->env->getExtension("native_profiler");
        $__internal_f4791198a175c3d3bb07c2b31b120a3440832556575491830fea06e47b77cf8f->enter($__internal_f4791198a175c3d3bb07c2b31b120a3440832556575491830fea06e47b77cf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<script type=\"text/javascript\">
\tvar checkCategorie = function(value)
\t{
\t\tif (value == 2 || value == 4)
\t\t{
\t\t\t\$(\"#lieuHtml\").attr(\"required\", \"\");
\t\t\t\$(\"#lieuHtml\").show();
\t\t}
\t\telse
\t\t{
\t\t\t\$(\"#lieuHtml\").removeAttr(\"required\");
\t\t\t\$(\"#lieuHtml\").hide();
\t\t}
\t}

\tvar nombreAutheur = 1;
\tvar previous = \$('#autheurs');
\t\$(document).ready(function() {
\t\t\$('#file').bootstrapFileInput();
\t\t\$(\"#categorie\").val(1);
\t\t\$(\"#lieuHtml\").hide();

\t\t\$(\"#plus\").click(function() {
\t\t\tprevious = \$(\"#autheurs\").clone()
\t\t\t\$(this).before(previous);
\t\t\tnombreAutheur++;
\t\t});
\t\t\$(\"#minus\").click(function() {
\t\t\tprevious = \$(\"#autheurs\").clone()
\t\t\tif (nombreAutheur > 1)
\t\t\t{
\t\t\t\t\$(\"#autheurs\").remove();
\t\t\t\tnombreAutheur--;
\t\t\t}
\t\t});
\t});



</script>
";
        
        $__internal_f4791198a175c3d3bb07c2b31b120a3440832556575491830fea06e47b77cf8f->leave($__internal_f4791198a175c3d3bb07c2b31b120a3440832556575491830fea06e47b77cf8f_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb30b13705d5df8d6fb4baa62d17f4754adebd76d3b94445684300d6f5b48192 = $this->env->getExtension("native_profiler");
        $__internal_cb30b13705d5df8d6fb4baa62d17f4754adebd76d3b94445684300d6f5b48192->enter($__internal_cb30b13705d5df8d6fb4baa62d17f4754adebd76d3b94445684300d6f5b48192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
<form id=\"form\" role=\"form\" action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("publication_article_valid");
        echo "\" class=\"col-sm-6\" method=\"post\" enctype=\"multipart/form-data\">

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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCategorie"]) ? $context["listeCategorie"] : $this->getContext($context, "listeCategorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 65
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "abreviation", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</select>
\t</div>

\t<div class=\"form-group\" id=\"lieuHtml\">
\t\t<label for=\"lieu\">Lieu de la conférence :</label>
\t\t<input class=\"form-control\" type=\"text\" id=\"lieu\" name=\"lieu\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"datePublication\">Date de publication :</label>
\t\t<input pattern=\"[0-9]{4}\" required class=\"form-control\" type=\"text\" id=\"datePublication\" name=\"datePublication\" />
\t</div>

\t<div class=\"form-group\">
\t\t<input required class=\"\" type=\"file\" title=\"Rechercher un fichier (.pdf)\" name=\"pdfFile\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label form=\"autheur\">Autheur(s) :</label>
\t\t<select required class=\"form-control\" id=\"autheurs\" name=\"autheurs[]\">
\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
        foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
            // line 88
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
        // line 90
        echo "\t\t</select>
\t\t<button type=\"button\" id=\"plus\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span></button>
\t\t<button type=\"button\" id=\"minus\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-minus\"></span></button>
\t</div>
\t<input id=\"nombreAutheurs\" type=\"hidden\" value=\"1\" />

\t<button type=\"submit\" class=\"btn btn-default\">Enregistrer</button>

</form>

";
        
        $__internal_cb30b13705d5df8d6fb4baa62d17f4754adebd76d3b94445684300d6f5b48192->leave($__internal_cb30b13705d5df8d6fb4baa62d17f4754adebd76d3b94445684300d6f5b48192_prof);

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
        return array (  184 => 90,  171 => 88,  167 => 87,  145 => 67,  132 => 65,  128 => 64,  110 => 49,  107 => 48,  101 => 47,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un article{% endblock %}*/
/* {% block header %}*/
/* <script type="text/javascript">*/
/* 	var checkCategorie = function(value)*/
/* 	{*/
/* 		if (value == 2 || value == 4)*/
/* 		{*/
/* 			$("#lieuHtml").attr("required", "");*/
/* 			$("#lieuHtml").show();*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			$("#lieuHtml").removeAttr("required");*/
/* 			$("#lieuHtml").hide();*/
/* 		}*/
/* 	}*/
/* */
/* 	var nombreAutheur = 1;*/
/* 	var previous = $('#autheurs');*/
/* 	$(document).ready(function() {*/
/* 		$('#file').bootstrapFileInput();*/
/* 		$("#categorie").val(1);*/
/* 		$("#lieuHtml").hide();*/
/* */
/* 		$("#plus").click(function() {*/
/* 			previous = $("#autheurs").clone()*/
/* 			$(this).before(previous);*/
/* 			nombreAutheur++;*/
/* 		});*/
/* 		$("#minus").click(function() {*/
/* 			previous = $("#autheurs").clone()*/
/* 			if (nombreAutheur > 1)*/
/* 			{*/
/* 				$("#autheurs").remove();*/
/* 				nombreAutheur--;*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* */
/* */
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="form" role="form" action="{{ path("publication_article_valid") }}" class="col-sm-6" method="post" enctype="multipart/form-data">*/
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
/* 		<option value="{{ categorie.id }}">{{ categorie.abreviation }} : {{ categorie.nom }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div class="form-group" id="lieuHtml">*/
/* 		<label for="lieu">Lieu de la conférence :</label>*/
/* 		<input class="form-control" type="text" id="lieu" name="lieu" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="datePublication">Date de publication :</label>*/
/* 		<input pattern="[0-9]{4}" required class="form-control" type="text" id="datePublication" name="datePublication" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<input required class="" type="file" title="Rechercher un fichier (.pdf)" name="pdfFile" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label form="autheur">Autheur(s) :</label>*/
/* 		<select required class="form-control" id="autheurs" name="autheurs[]">*/
/* 		{% for chercheur in listeChercheur %}*/
/* 		<option value="{{ chercheur.id }}">{{ chercheur.nom }} {{ chercheur.prenom }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 		<button type="button" id="plus" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button>*/
/* 		<button type="button" id="minus" class="btn btn-primary"><span class="glyphicon glyphicon-minus"></span></button>*/
/* 	</div>*/
/* 	<input id="nombreAutheurs" type="hidden" value="1" />*/
/* */
/* 	<button type="submit" class="btn btn-default">Enregistrer</button>*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
