<?php

/* PublicationBundle:Chercheur:view.html.twig */
class __TwigTemplate_27bf2afec4ea2a16e11fdc2eaf89b47da8cf2fa80831909a60f0add9c1cd78f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a7c88baf7d02ee632c74c723565168687d787d323c2dbee79b71a3d92157065 = $this->env->getExtension("native_profiler");
        $__internal_2a7c88baf7d02ee632c74c723565168687d787d323c2dbee79b71a3d92157065->enter($__internal_2a7c88baf7d02ee632c74c723565168687d787d323c2dbee79b71a3d92157065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>ICD | Chercheurs</title>
\t</head>
\t<body>
\t\t<h1>Voici les beaux chercheurs</h1>
\t\t<ul>
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listChercheur"]) ? $context["listChercheur"] : $this->getContext($context, "listChercheur")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chercheur"]) {
            // line 10
            echo "\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "id", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["chercheur"], "nom", array())), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "organisation", array()), "html", null, true);
            echo " dans l'équipe ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chercheur"], "equipe", array()), "html", null, true);
            echo " </li>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "\t\t\t\t<li>Pas de chercheurs dans la base de données</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chercheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</ul>
\t</body>
</html>";
        
        $__internal_2a7c88baf7d02ee632c74c723565168687d787d323c2dbee79b71a3d92157065->leave($__internal_2a7c88baf7d02ee632c74c723565168687d787d323c2dbee79b71a3d92157065_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 12,  37 => 10,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>ICD | Chercheurs</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Voici les beaux chercheurs</h1>*/
/* 		<ul>*/
/* 			{% for chercheur in listChercheur %}*/
/* 				<li>{{ chercheur.id }} {{ chercheur.prenom }} {{ chercheur.nom | upper }} à {{ chercheur.organisation }} dans l'équipe {{ chercheur.equipe }} </li>*/
/* 			{% else %}*/
/* 				<li>Pas de chercheurs dans la base de données</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</body>*/
/* </html>*/
