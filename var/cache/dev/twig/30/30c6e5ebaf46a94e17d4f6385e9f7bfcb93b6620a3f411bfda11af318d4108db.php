<?php

/* PublicationBundle:Article:modif.html.twig */
class __TwigTemplate_3e0136a611d1c98e3d02fcf17a5536419c8175d08af7ed1692f58e4fa611a202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Article:modif.html.twig", 1);
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
        $__internal_6b1c1edcfcc8d6ca670fc98b502ca191c5fa1509638af2ed1bf93b9e41f40d7d = $this->env->getExtension("native_profiler");
        $__internal_6b1c1edcfcc8d6ca670fc98b502ca191c5fa1509638af2ed1bf93b9e41f40d7d->enter($__internal_6b1c1edcfcc8d6ca670fc98b502ca191c5fa1509638af2ed1bf93b9e41f40d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Article:modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1c1edcfcc8d6ca670fc98b502ca191c5fa1509638af2ed1bf93b9e41f40d7d->leave($__internal_6b1c1edcfcc8d6ca670fc98b502ca191c5fa1509638af2ed1bf93b9e41f40d7d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75a25b17464e2cdd546da05ba39222f6a1999c0adda662bf7ed2c8925bbfcc78 = $this->env->getExtension("native_profiler");
        $__internal_75a25b17464e2cdd546da05ba39222f6a1999c0adda662bf7ed2c8925bbfcc78->enter($__internal_75a25b17464e2cdd546da05ba39222f6a1999c0adda662bf7ed2c8925bbfcc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modification d'un article";
        
        $__internal_75a25b17464e2cdd546da05ba39222f6a1999c0adda662bf7ed2c8925bbfcc78->leave($__internal_75a25b17464e2cdd546da05ba39222f6a1999c0adda662bf7ed2c8925bbfcc78_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_9348109bca7adc5b67ac402349b0d4c3b5d1a3e7d01025fb1f22fd6077cca25c = $this->env->getExtension("native_profiler");
        $__internal_9348109bca7adc5b67ac402349b0d4c3b5d1a3e7d01025fb1f22fd6077cca25c->enter($__internal_9348109bca7adc5b67ac402349b0d4c3b5d1a3e7d01025fb1f22fd6077cca25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<script type=\"text/javascript\">
var nbchercheur = \$('#nbchercheur').val();

var change = function(pos, sens)
{
\tvar chLink = '#ch' + pos;
\tvar idLink = '#id' + pos;

\t//var temp_ord = \t\$(ordLink).text();
\tvar temp_ch = \t\$(chLink).text();
\tvar temp_id = \t\$(idLink).val();

\tif (sens == '-')
\t{
\t\t\$(chLink).text(\$('#ch' + (pos+1)).text());
\t\t\$(idLink).val(\$('#id' + (pos+1)).val());

\t\t\$('#ch' + (pos+1)).text(temp_ch);
\t\t\$('#id' + (pos+1)).val(temp_id);
\t}
\telse if (sens == '+')
\t{
\t\t\$(chLink).text(\$('#ch' + (pos-1)).text());
\t\t\$(idLink).val(\$('#id' + (pos-1)).val());

\t\t\$('#ch' + (pos-1)).text(temp_ch);
\t\t\$('#id' + (pos-1)).val(temp_id);
\t}
}
</script>
";
        
        $__internal_9348109bca7adc5b67ac402349b0d4c3b5d1a3e7d01025fb1f22fd6077cca25c->leave($__internal_9348109bca7adc5b67ac402349b0d4c3b5d1a3e7d01025fb1f22fd6077cca25c_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b0654e6421ef1febb445bf0ac47d25b83cf52ca291104dd2314c105360a824 = $this->env->getExtension("native_profiler");
        $__internal_d9b0654e6421ef1febb445bf0ac47d25b83cf52ca291104dd2314c105360a824->enter($__internal_d9b0654e6421ef1febb445bf0ac47d25b83cf52ca291104dd2314c105360a824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "
<form id=\"form\" role=\"form\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_article_modif_valid", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"col-sm-6\" method=\"post\" enctype=\"multipart/form-data\">
\t<div class=\"form-group\">
\t\t<label for=\"titre\">Titre :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"titre\" name=\"titre\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"label\">Label :</label>
\t\t<input required type=\"text\" class=\"form-control\" id=\"label\" name=\"label\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "label", array()), "html", null, true);
        echo "\" />
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"categorie\">Categorie :</label>
\t\t<input disabled required value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "abreviation", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"categorie\" name=\"categorie\" />
\t</div>

\t";
        // line 55
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "lieu", array()) != null)) {
            // line 56
            echo "\t\t<div class=\"form-group\" id=\"lieuHtml\">
\t\t\t<label for=\"lieu\">Lieu de la conférence :</label>
\t\t\t<input class=\"form-control\" type=\"text\" id=\"lieu\" name=\"lieu\" />
\t\t</div>
\t";
        }
        // line 61
        echo "
\t<div class=\"form-group\">
\t\t<label for=\"datePublication\">Date de publication :</label>
\t\t<input disabled pattern=\"[0-9]{4}\" required class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "datePublication", array()), "html", null, true);
        echo "\" type=\"text\" id=\"datePublication\" name=\"datePublication\" />
\t</div>

\t<input type=\"hidden\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["nbchercheur"]) ? $context["nbchercheur"] : $this->getContext($context, "nbchercheur")), "html", null, true);
        echo "\" name=\"nbchercheur\" />
\t<div class=\"form-group\">
\t\t<table class=\"table table-striped\">
\t\t\t";
        // line 70
        $context["c"] = 1;
        // line 71
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chercheurs"]) ? $context["chercheurs"] : $this->getContext($context, "chercheurs")));
        foreach ($context['_seq'] as $context["ordre"] => $context["chercheur"]) {
            // line 72
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td id=\"ord";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["ordre"], "html", null, true);
            echo "</td>
\t\t\t\t\t<td id=\"ch";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<input type=\"hidden\" id=\"id";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t";
            // line 76
            if (((isset($context["nbchercheur"]) ? $context["nbchercheur"] : $this->getContext($context, "nbchercheur")) > 1)) {
                // line 77
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 78
                if (((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == 1)) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" type=\"button\" onclick=\"change(";
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo ", '-')\"><span class=\"glyphicon glyphicon-minus\"></span></button>
\t\t\t\t\t\t\t";
                } elseif ((                // line 80
(isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == twig_length_filter($this->env, (isset($context["chercheurs"]) ? $context["chercheurs"] : $this->getContext($context, "chercheurs"))))) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"button\" onclick=\"change(";
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo ", '+')\"><span class=\"glyphicon glyphicon-plus\"></span></button>
\t\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" type=\"button\" onclick=\"change(";
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo ", '-')\"><span class=\"glyphicon glyphicon-minus\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"button\" onclick=\"change(";
                    // line 84
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo ", '+')\"><span class=\"glyphicon glyphicon-plus\"></span></button>
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t</tr>
\t\t\t\t";
            // line 89
            $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
            // line 90
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['chercheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t</table>
\t</div>
\t<input id=\"nombreAutheurs\" type=\"hidden\" value=\"1\" />

\t<button type=\"submit\" class=\"btn btn-default\">Enregistrer</button>

</form>

";
        
        $__internal_d9b0654e6421ef1febb445bf0ac47d25b83cf52ca291104dd2314c105360a824->leave($__internal_d9b0654e6421ef1febb445bf0ac47d25b83cf52ca291104dd2314c105360a824_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Article:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 91,  225 => 90,  223 => 89,  220 => 88,  216 => 86,  211 => 84,  206 => 83,  200 => 81,  198 => 80,  193 => 79,  191 => 78,  188 => 77,  186 => 76,  178 => 75,  170 => 74,  164 => 73,  161 => 72,  156 => 71,  154 => 70,  148 => 67,  142 => 64,  137 => 61,  130 => 56,  128 => 55,  122 => 52,  114 => 47,  106 => 42,  100 => 39,  97 => 38,  91 => 37,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Modification d'un article{% endblock %}*/
/* {% block header %}*/
/* <script type="text/javascript">*/
/* var nbchercheur = $('#nbchercheur').val();*/
/* */
/* var change = function(pos, sens)*/
/* {*/
/* 	var chLink = '#ch' + pos;*/
/* 	var idLink = '#id' + pos;*/
/* */
/* 	//var temp_ord = 	$(ordLink).text();*/
/* 	var temp_ch = 	$(chLink).text();*/
/* 	var temp_id = 	$(idLink).val();*/
/* */
/* 	if (sens == '-')*/
/* 	{*/
/* 		$(chLink).text($('#ch' + (pos+1)).text());*/
/* 		$(idLink).val($('#id' + (pos+1)).val());*/
/* */
/* 		$('#ch' + (pos+1)).text(temp_ch);*/
/* 		$('#id' + (pos+1)).val(temp_id);*/
/* 	}*/
/* 	else if (sens == '+')*/
/* 	{*/
/* 		$(chLink).text($('#ch' + (pos-1)).text());*/
/* 		$(idLink).val($('#id' + (pos-1)).val());*/
/* */
/* 		$('#ch' + (pos-1)).text(temp_ch);*/
/* 		$('#id' + (pos-1)).val(temp_id);*/
/* 	}*/
/* }*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="form" role="form" action="{{ path("publication_article_modif_valid", {id: article.id}) }}" class="col-sm-6" method="post" enctype="multipart/form-data">*/
/* 	<div class="form-group">*/
/* 		<label for="titre">Titre :</label>*/
/* 		<input required type="text" class="form-control" id="titre" name="titre" value="{{ article.titre }}" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="label">Label :</label>*/
/* 		<input required type="text" class="form-control" id="label" name="label" value="{{ article.label }}" />*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="categorie">Categorie :</label>*/
/* 		<input disabled required value="{{ article.categorie.abreviation }}" class="form-control" id="categorie" name="categorie" />*/
/* 	</div>*/
/* */
/* 	{% if article.lieu != null %}*/
/* 		<div class="form-group" id="lieuHtml">*/
/* 			<label for="lieu">Lieu de la conférence :</label>*/
/* 			<input class="form-control" type="text" id="lieu" name="lieu" />*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="form-group">*/
/* 		<label for="datePublication">Date de publication :</label>*/
/* 		<input disabled pattern="[0-9]{4}" required class="form-control" value="{{ article.datePublication }}" type="text" id="datePublication" name="datePublication" />*/
/* 	</div>*/
/* */
/* 	<input type="hidden" value="{{ nbchercheur }}" name="nbchercheur" />*/
/* 	<div class="form-group">*/
/* 		<table class="table table-striped">*/
/* 			{% set c = 1 %}*/
/* 			{% for ordre, chercheur in chercheurs %}*/
/* 				<tr>*/
/* 					<td id="ord{{c}}">{{ ordre }}</td>*/
/* 					<td id="ch{{c}}">{{ chercheur.prenom }} {{ chercheur.nom }}</td>*/
/* 					<input type="hidden" id="id{{c}}" name="{{c}}" value="{{ chercheur.id }}" />*/
/* 					{% if nbchercheur > 1 %}*/
/* 						<td>*/
/* 							{% if c == 1 %}*/
/* 								<button class="btn btn-danger btn-sm" type="button" onclick="change({{c}}, '-')"><span class="glyphicon glyphicon-minus"></span></button>*/
/* 							{% elseif c == chercheurs|length %}*/
/* 								<button class="btn btn-primary btn-sm" type="button" onclick="change({{c}}, '+')"><span class="glyphicon glyphicon-plus"></span></button>*/
/* 							{% else %}*/
/* 								<button class="btn btn-danger btn-sm" type="button" onclick="change({{c}}, '-')"><span class="glyphicon glyphicon-minus"></span></button>*/
/* 								<button class="btn btn-primary btn-sm" type="button" onclick="change({{c}}, '+')"><span class="glyphicon glyphicon-plus"></span></button>*/
/* 							{% endif %}*/
/* 						</td>*/
/* 					{% endif %}*/
/* 				</tr>*/
/* 				{% set c = c+1 %}*/
/* 			{% endfor %}*/
/* 		</table>*/
/* 	</div>*/
/* 	<input id="nombreAutheurs" type="hidden" value="1" />*/
/* */
/* 	<button type="submit" class="btn btn-default">Enregistrer</button>*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
