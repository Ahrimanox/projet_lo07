<?php

/* PublicationBundle:Statistiques:index.html.twig */
class __TwigTemplate_3a8f3269fef75fcf795cd5fc3d70ddaffd40bd6d389bfe7c5e40f15effc4098b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PublicationBundle:Default:base.html.twig", "PublicationBundle:Statistiques:index.html.twig", 1);
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
        $__internal_13297efd2d72b84123769e22e5d9b6a14ff946cecd3a7ce80d710b01fc06a152 = $this->env->getExtension("native_profiler");
        $__internal_13297efd2d72b84123769e22e5d9b6a14ff946cecd3a7ce80d710b01fc06a152->enter($__internal_13297efd2d72b84123769e22e5d9b6a14ff946cecd3a7ce80d710b01fc06a152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Statistiques:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13297efd2d72b84123769e22e5d9b6a14ff946cecd3a7ce80d710b01fc06a152->leave($__internal_13297efd2d72b84123769e22e5d9b6a14ff946cecd3a7ce80d710b01fc06a152_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6c5dee82ec9b85ef0d507deac804c79a633fff39e4bde15d1a311c4ee61a1ed = $this->env->getExtension("native_profiler");
        $__internal_e6c5dee82ec9b85ef0d507deac804c79a633fff39e4bde15d1a311c4ee61a1ed->enter($__internal_e6c5dee82ec9b85ef0d507deac804c79a633fff39e4bde15d1a311c4ee61a1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_e6c5dee82ec9b85ef0d507deac804c79a633fff39e4bde15d1a311c4ee61a1ed->leave($__internal_e6c5dee82ec9b85ef0d507deac804c79a633fff39e4bde15d1a311c4ee61a1ed_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_607eabed8444ea94c818ae7ebeca9f40e2aae690460ca0ecf503a2b768077908 = $this->env->getExtension("native_profiler");
        $__internal_607eabed8444ea94c818ae7ebeca9f40e2aae690460ca0ecf503a2b768077908->enter($__internal_607eabed8444ea94c818ae7ebeca9f40e2aae690460ca0ecf503a2b768077908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_607eabed8444ea94c818ae7ebeca9f40e2aae690460ca0ecf503a2b768077908->leave($__internal_607eabed8444ea94c818ae7ebeca9f40e2aae690460ca0ecf503a2b768077908_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc8b2afbf5e0619c599594689be2db59bf0a2a60128a9c61d197447b6f9ed48b = $this->env->getExtension("native_profiler");
        $__internal_cc8b2afbf5e0619c599594689be2db59bf0a2a60128a9c61d197447b6f9ed48b->enter($__internal_cc8b2afbf5e0619c599594689be2db59bf0a2a60128a9c61d197447b6f9ed48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container col-sm-7\">
\t<form role=\"form\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"chercheur\">Chercheur :</label>
\t\t\t<select id=\"chercheur\" class=\"form-control\" name=\"chercheur\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChercheur"]) ? $context["listeChercheur"] : $this->getContext($context, "listeChercheur")));
        foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
            // line 14
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
        // line 16
        echo "\t\t\t</select>\t
\t\t</div>

\t\t<button id=\"computeButton\" type=\"button\" class=\"btn btn-primary\" onclick=computeStats()>Calculer</button>
\t</form>
</div>
<div class=\"container col-sm-5\">
\t<canvas id=\"bar-chart\" width=\"50\" height=\"50\"></canvas>
\t<script>
\tvar ctx = \$(\"#bar-chart\");

\tvar computeStats = function()
\t{
\t\tvar value = \$(\"#chercheur\").val();
\t\t//ctx.clearRect(0, 0, canvas.width, canvas.height);
\t    \$.post(\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("publication_statistiques_get");
        echo "\",
\t\t    {
\t\t    \tchercheur: value
\t\t    },
\t\t    function(data, status)
\t\t    {
\t\t    \tvar bardata = JSON.parse(data, function (key, value) {
\t\t\t\t    var type;
\t\t\t\t    if (value && typeof value === 'object') {
\t\t\t\t        type = value.type;
\t\t\t\t        if (typeof type === 'string' && typeof window[type] === 'function') {
\t\t\t\t            return new (window[type])(value);
\t\t\t\t        }
\t\t\t\t    }
\t\t\t\t    return value;
\t\t\t\t});

\t\t        var idCher = bardata.chercheur;
\t\t        var min = bardata.min;
\t\t        var max = bardata.max;
\t\t        var nombreAnnee = max - min + 1;

\t\t        var nombresArticles = bardata.numberOfArticle;
\t\t        var annees = new Array();
\t\t        for (var i = min; i <= max; ++i)
\t\t        {
\t\t        \tannees.push(i);
\t\t        }
\t\t        var nombres = new Array();

\t\t        for (var i = 0; i < nombreAnnee; ++i)
\t\t        {
\t\t        \t//console.log(\"\" + annees[i]);
\t\t        \tnombres.push(nombresArticles[ \"\" + annees[i] ]);
\t\t        }

\t\t        barData = {
\t\t\t\t    labels: annees,
\t\t\t\t    datasets: {
\t\t\t\t    \tlabel: \"Nombre d'article par année\",
\t\t\t\t    \tdata: nombres
\t\t\t\t    }\t
\t\t\t\t};
\t\t\t\t
\t\t\t\tvar barchart = new Chart(ctx, {
\t\t\t\t\ttype: 'bar',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlabels:\tannees,
\t\t\t\t\t\tdatasets: [{
\t\t\t\t\t\t\tlabel: \"Nombre d'articles\",
\t\t\t\t            data: nombres
\t\t\t\t        }]
\t\t\t\t    },
\t\t\t\t    options: {
\t\t\t\t\t\tscales: {
\t\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\t\tbeginAtZero:true
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t    
\t    \t});
\t}
\t</script>
</div>

";
        
        $__internal_cc8b2afbf5e0619c599594689be2db59bf0a2a60128a9c61d197447b6f9ed48b->leave($__internal_cc8b2afbf5e0619c599594689be2db59bf0a2a60128a9c61d197447b6f9ed48b_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Statistiques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  89 => 16,  76 => 14,  72 => 13,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "PublicationBundle:Default:base.html.twig" %}*/
/* */
/* {% block title %}Recherche{% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container col-sm-7">*/
/* 	<form role="form" method="post">*/
/* 		<div class="form-group">*/
/* 			<label for="chercheur">Chercheur :</label>*/
/* 			<select id="chercheur" class="form-control" name="chercheur">*/
/* 			{% for chercheur in listeChercheur %}*/
/* 				<option value="{{ chercheur.id }}">{{ chercheur.prenom }} {{ chercheur.nom }}</option>*/
/* 			{% endfor %}*/
/* 			</select>	*/
/* 		</div>*/
/* */
/* 		<button id="computeButton" type="button" class="btn btn-primary" onclick=computeStats()>Calculer</button>*/
/* 	</form>*/
/* </div>*/
/* <div class="container col-sm-5">*/
/* 	<canvas id="bar-chart" width="50" height="50"></canvas>*/
/* 	<script>*/
/* 	var ctx = $("#bar-chart");*/
/* */
/* 	var computeStats = function()*/
/* 	{*/
/* 		var value = $("#chercheur").val();*/
/* 		//ctx.clearRect(0, 0, canvas.width, canvas.height);*/
/* 	    $.post("{{ path("publication_statistiques_get") }}",*/
/* 		    {*/
/* 		    	chercheur: value*/
/* 		    },*/
/* 		    function(data, status)*/
/* 		    {*/
/* 		    	var bardata = JSON.parse(data, function (key, value) {*/
/* 				    var type;*/
/* 				    if (value && typeof value === 'object') {*/
/* 				        type = value.type;*/
/* 				        if (typeof type === 'string' && typeof window[type] === 'function') {*/
/* 				            return new (window[type])(value);*/
/* 				        }*/
/* 				    }*/
/* 				    return value;*/
/* 				});*/
/* */
/* 		        var idCher = bardata.chercheur;*/
/* 		        var min = bardata.min;*/
/* 		        var max = bardata.max;*/
/* 		        var nombreAnnee = max - min + 1;*/
/* */
/* 		        var nombresArticles = bardata.numberOfArticle;*/
/* 		        var annees = new Array();*/
/* 		        for (var i = min; i <= max; ++i)*/
/* 		        {*/
/* 		        	annees.push(i);*/
/* 		        }*/
/* 		        var nombres = new Array();*/
/* */
/* 		        for (var i = 0; i < nombreAnnee; ++i)*/
/* 		        {*/
/* 		        	//console.log("" + annees[i]);*/
/* 		        	nombres.push(nombresArticles[ "" + annees[i] ]);*/
/* 		        }*/
/* */
/* 		        barData = {*/
/* 				    labels: annees,*/
/* 				    datasets: {*/
/* 				    	label: "Nombre d'article par année",*/
/* 				    	data: nombres*/
/* 				    }	*/
/* 				};*/
/* 				*/
/* 				var barchart = new Chart(ctx, {*/
/* 					type: 'bar',*/
/* 					data: {*/
/* 						labels:	annees,*/
/* 						datasets: [{*/
/* 							label: "Nombre d'articles",*/
/* 				            data: nombres*/
/* 				        }]*/
/* 				    },*/
/* 				    options: {*/
/* 						scales: {*/
/* 							yAxes: [{*/
/* 								ticks: {*/
/* 									beginAtZero:true*/
/* 								}*/
/* 							}]*/
/* 						}*/
/* 					}*/
/* 				});*/
/* 				    */
/* 	    	});*/
/* 	}*/
/* 	</script>*/
/* </div>*/
/* */
/* {% endblock %}*/
