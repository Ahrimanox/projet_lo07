<?php

/* PublicationBundle:Chercheur:add2.html.twig */
class __TwigTemplate_6f9baa185032c5a6d2c2ba3e2cb0f7a47e6281d3dc9f3077788007f79ac14045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Chercheur:add2.html.twig", 1);
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
        $__internal_36f4cb3472b3b31293ca13742ec232f68ba498ec4a8f99ae07add17b1a41be5d = $this->env->getExtension("native_profiler");
        $__internal_36f4cb3472b3b31293ca13742ec232f68ba498ec4a8f99ae07add17b1a41be5d->enter($__internal_36f4cb3472b3b31293ca13742ec232f68ba498ec4a8f99ae07add17b1a41be5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:add2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f4cb3472b3b31293ca13742ec232f68ba498ec4a8f99ae07add17b1a41be5d->leave($__internal_36f4cb3472b3b31293ca13742ec232f68ba498ec4a8f99ae07add17b1a41be5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0f4bd7c0f759f26e004dbed209dc64ac2e867763b4dbe21444213487652e905 = $this->env->getExtension("native_profiler");
        $__internal_d0f4bd7c0f759f26e004dbed209dc64ac2e867763b4dbe21444213487652e905->enter($__internal_d0f4bd7c0f759f26e004dbed209dc64ac2e867763b4dbe21444213487652e905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'un chercheur";
        
        $__internal_d0f4bd7c0f759f26e004dbed209dc64ac2e867763b4dbe21444213487652e905->leave($__internal_d0f4bd7c0f759f26e004dbed209dc64ac2e867763b4dbe21444213487652e905_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_5e3f5852cac5e6e2f66f4351464e905a292e72fc51f141f43388ebcd8f07c9e4 = $this->env->getExtension("native_profiler");
        $__internal_5e3f5852cac5e6e2f66f4351464e905a292e72fc51f141f43388ebcd8f07c9e4->enter($__internal_5e3f5852cac5e6e2f66f4351464e905a292e72fc51f141f43388ebcd8f07c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_5e3f5852cac5e6e2f66f4351464e905a292e72fc51f141f43388ebcd8f07c9e4->leave($__internal_5e3f5852cac5e6e2f66f4351464e905a292e72fc51f141f43388ebcd8f07c9e4_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8215b897bc67bcee12b840355a0735a117be83b4735b705aff464022e761d53 = $this->env->getExtension("native_profiler");
        $__internal_d8215b897bc67bcee12b840355a0735a117be83b4735b705aff464022e761d53->enter($__internal_d8215b897bc67bcee12b840355a0735a117be83b4735b705aff464022e761d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "<form id=\"form\" role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("publication_chercheur_valid");
        echo "\" class=\"col-sm-6\" method=\"post\" enctype=\"multipart/form-data\">

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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeOrganisation"]) ? $context["listeOrganisation"] : $this->getContext($context, "listeOrganisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["organisation"]) {
            // line 70
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
        // line 72
        echo "\t\t</select>
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"laboratoire\">Laboratoire :</label>
\t\t<select required class=\"form-control\" id=\"laboratoire\" name=\"laboratoire\">
\t\t<option value=\"\">-- Choisisser d'abord une organisation --</option>
\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeLaboratoire"]) ? $context["listeLaboratoire"] : $this->getContext($context, "listeLaboratoire")));
        foreach ($context['_seq'] as $context["_key"] => $context["laboratoire"]) {
            // line 80
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
        // line 82
        echo "\t\t</select>
\t</div>

\t<input required id=\"picture\" type=\"file\" name=\"picture\" />

\t<button type=\"submit\" class=\"btn btn-default\">Enregistrer</button>

</form>

";
        
        $__internal_d8215b897bc67bcee12b840355a0735a117be83b4735b705aff464022e761d53->leave($__internal_d8215b897bc67bcee12b840355a0735a117be83b4735b705aff464022e761d53_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:add2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 82,  160 => 80,  156 => 79,  147 => 72,  136 => 70,  132 => 69,  112 => 53,  106 => 52,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
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
/* <form id="form" role="form" action="{{ path("publication_chercheur_valid") }}" class="col-sm-6" method="post" enctype="multipart/form-data">*/
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
