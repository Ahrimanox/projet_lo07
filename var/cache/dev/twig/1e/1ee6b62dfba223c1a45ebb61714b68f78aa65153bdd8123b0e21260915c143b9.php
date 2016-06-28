<?php

/* PublicationBundle:User:add.html.twig */
class __TwigTemplate_e59f4b741d5f7e35b96e0d76c14ce64e65eb26d39b4e234add020172f1dc1638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:User:add.html.twig", 1);
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
        $__internal_fd3532f68d4b160821ee34c77b4bedb2045ad021c27f64819aaf9e3e7e8722b9 = $this->env->getExtension("native_profiler");
        $__internal_fd3532f68d4b160821ee34c77b4bedb2045ad021c27f64819aaf9e3e7e8722b9->enter($__internal_fd3532f68d4b160821ee34c77b4bedb2045ad021c27f64819aaf9e3e7e8722b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3532f68d4b160821ee34c77b4bedb2045ad021c27f64819aaf9e3e7e8722b9->leave($__internal_fd3532f68d4b160821ee34c77b4bedb2045ad021c27f64819aaf9e3e7e8722b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_592abcab4cd538b0ff3dd4447532509efcdd5722d931a50cd9c1930a01b458fe = $this->env->getExtension("native_profiler");
        $__internal_592abcab4cd538b0ff3dd4447532509efcdd5722d931a50cd9c1930a01b458fe->enter($__internal_592abcab4cd538b0ff3dd4447532509efcdd5722d931a50cd9c1930a01b458fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_592abcab4cd538b0ff3dd4447532509efcdd5722d931a50cd9c1930a01b458fe->leave($__internal_592abcab4cd538b0ff3dd4447532509efcdd5722d931a50cd9c1930a01b458fe_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_37383e5829166c429f0458a597a9d8eb9d89c22dd8d606c28018c05c86ac25a4 = $this->env->getExtension("native_profiler");
        $__internal_37383e5829166c429f0458a597a9d8eb9d89c22dd8d606c28018c05c86ac25a4->enter($__internal_37383e5829166c429f0458a597a9d8eb9d89c22dd8d606c28018c05c86ac25a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<script type=\"text/javascript\">

var textBase = \"-- Choisisser d'abord une organisation --\";
\$(document).ready(function() {
\t\$('#organisation option[value=\"\"]').prop('selected', true);
\t\$('#laboratoire option[value=\"\"]').prop('selected', true);
\tvar value = \$('#organisation').val();
\t\$('#laboratoire option').each(function() {
\t\tif (\$(this).val() == value)
\t\t{
\t\t\t\$(this).show();
\t\t}
\t\telse
\t\t{
\t\t\t\$(this).hide();
\t\t}
\t});
});
var change = function(value)
{
\tvar c = 0;
\tvar i = 0;
\t\$('#organisation option[value=\"\"]').remove();
\tvar valueLab = -1;
\t\$('#laboratoire option').each(function() {
\t\t++i;
\t\tif (\$(this).attr('id') == value)
\t\t{
\t\t\t++c;
\t\t\t\$(this).show();
\t\t}
\t\telse
\t\t{
\t\t\t\$(this).hide();
\t\t}
\t});



\tif (c>0)
\t{
\t\t\$('#laboratoire option:eq(' + i + ')').prop('selected', true);
\t}
}
</script>
";
        
        $__internal_37383e5829166c429f0458a597a9d8eb9d89c22dd8d606c28018c05c86ac25a4->leave($__internal_37383e5829166c429f0458a597a9d8eb9d89c22dd8d606c28018c05c86ac25a4_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca41b852b6751be557efc11c9de3e63f69500c23ec73e079963ad7a2cefcfd0c = $this->env->getExtension("native_profiler");
        $__internal_ca41b852b6751be557efc11c9de3e63f69500c23ec73e079963ad7a2cefcfd0c->enter($__internal_ca41b852b6751be557efc11c9de3e63f69500c23ec73e079963ad7a2cefcfd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "<form id=\"form\" role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("publication_user_valid");
        echo "\" class=\"col-sm-6\" method=\"post\" enctype=\"multipart/form-data\">
\t<div class=\"form-group\">
\t\t<label for=\"login\">Login :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"password\">Mot de Passe :</label>
\t\t<input required type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"nom\">Nom :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"prenom\">Prenom :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"organisation\">Organisation :</label>
\t\t<select required class=\"form-control\" id=\"organisation\" name=\"organisation\" onchange=\"change(this.value)\">
\t\t<option value=\"\">-- Choisissez une organisation --</option>
\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeOrganisation"]) ? $context["listeOrganisation"] : $this->getContext($context, "listeOrganisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["organisation"]) {
            // line 79
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "nom", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t</select>
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"laboratoire\">Laboratoire :</label>
\t\t<select required class=\"form-control\" id=\"laboratoire\" name=\"laboratoire\">
\t\t<option value=\"\">-- Choisisser d'abord une organisation --</option>
\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeLaboratoire"]) ? $context["listeLaboratoire"] : $this->getContext($context, "listeLaboratoire")));
        foreach ($context['_seq'] as $context["_key"] => $context["laboratoire"]) {
            // line 89
            echo "\t\t<option id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["laboratoire"], "organisation", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laboratoire"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laboratoire"], "nom", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laboratoire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t</select>
\t</div>

\t<input required id=\"picture\" type=\"file\" name=\"picture\" />

\t<button type=\"submit\" class=\"btn btn-default\">Enregistrer</button>

</form>

";
        
        $__internal_ca41b852b6751be557efc11c9de3e63f69500c23ec73e079963ad7a2cefcfd0c->leave($__internal_ca41b852b6751be557efc11c9de3e63f69500c23ec73e079963ad7a2cefcfd0c_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 91,  169 => 89,  165 => 88,  156 => 81,  145 => 79,  141 => 78,  112 => 53,  106 => 52,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Ajout d'un chercheur{% endblock %}*/
/* {% block header %}*/
/* <script type="text/javascript">*/
/* */
/* var textBase = "-- Choisisser d'abord une organisation --";*/
/* $(document).ready(function() {*/
/* 	$('#organisation option[value=""]').prop('selected', true);*/
/* 	$('#laboratoire option[value=""]').prop('selected', true);*/
/* 	var value = $('#organisation').val();*/
/* 	$('#laboratoire option').each(function() {*/
/* 		if ($(this).val() == value)*/
/* 		{*/
/* 			$(this).show();*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			$(this).hide();*/
/* 		}*/
/* 	});*/
/* });*/
/* var change = function(value)*/
/* {*/
/* 	var c = 0;*/
/* 	var i = 0;*/
/* 	$('#organisation option[value=""]').remove();*/
/* 	var valueLab = -1;*/
/* 	$('#laboratoire option').each(function() {*/
/* 		++i;*/
/* 		if ($(this).attr('id') == value)*/
/* 		{*/
/* 			++c;*/
/* 			$(this).show();*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			$(this).hide();*/
/* 		}*/
/* 	});*/
/* */
/* */
/* */
/* 	if (c>0)*/
/* 	{*/
/* 		$('#laboratoire option:eq(' + i + ')').prop('selected', true);*/
/* 	}*/
/* }*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <form id="form" role="form" action="{{ path("publication_user_valid") }}" class="col-sm-6" method="post" enctype="multipart/form-data">*/
/* 	<div class="form-group">*/
/* 		<label for="login">Login :</label>*/
/* 		<input required type="text" class="form-control" id="login" name="login" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="password">Mot de Passe :</label>*/
/* 		<input required type="password" class="form-control" id="password" name="password" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="nom">Nom :</label>*/
/* 		<input required type="text" class="form-control" id="nom" name="nom" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="prenom">Prenom :</label>*/
/* 		<input required type="text" class="form-control" id="prenom" name="prenom" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="organisation">Organisation :</label>*/
/* 		<select required class="form-control" id="organisation" name="organisation" onchange="change(this.value)">*/
/* 		<option value="">-- Choisissez une organisation --</option>*/
/* 		{% for organisation in listeOrganisation %}*/
/* 		<option value="{{ organisation.id }}">{{ organisation.nom }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="laboratoire">Laboratoire :</label>*/
/* 		<select required class="form-control" id="laboratoire" name="laboratoire">*/
/* 		<option value="">-- Choisisser d'abord une organisation --</option>*/
/* 		{% for laboratoire in listeLaboratoire %}*/
/* 		<option id="{{ laboratoire.organisation.id }}" value="{{ laboratoire.id }}">{{ laboratoire.nom }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<input required id="picture" type="file" name="picture" />*/
/* */
/* 	<button type="submit" class="btn btn-default">Enregistrer</button>*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
