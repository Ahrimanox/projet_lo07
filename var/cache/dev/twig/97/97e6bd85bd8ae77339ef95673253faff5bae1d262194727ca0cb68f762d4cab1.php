<?php

/* PublicationBundle:Default:base.html.twig */
class __TwigTemplate_c7ab51c7cc5128e3f7be6a00d8cf93d8f52970b8ca37f9c395305fd65654c21a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7751ae3bff29c762c71b20cc5d47be4b28912aa3f3ea97795a768b9526f92a2a = $this->env->getExtension("native_profiler");
        $__internal_7751ae3bff29c762c71b20cc5d47be4b28912aa3f3ea97795a768b9526f92a2a->enter($__internal_7751ae3bff29c762c71b20cc5d47be4b28912aa3f3ea97795a768b9526f92a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head> 
\t\t<meta charset=\"utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

\t</head>
\t<body>
\t\t<div class=\"jumbotron\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1>Site de publication scientifique</h1>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
        
        $__internal_7751ae3bff29c762c71b20cc5d47be4b28912aa3f3ea97795a768b9526f92a2a->leave($__internal_7751ae3bff29c762c71b20cc5d47be4b28912aa3f3ea97795a768b9526f92a2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_155d804cb390656bf39b7a0c311607bbf5e9448bb6e4cc1c5473ce8a02b54ad7 = $this->env->getExtension("native_profiler");
        $__internal_155d804cb390656bf39b7a0c311607bbf5e9448bb6e4cc1c5473ce8a02b54ad7->enter($__internal_155d804cb390656bf39b7a0c311607bbf5e9448bb6e4cc1c5473ce8a02b54ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de publications";
        
        $__internal_155d804cb390656bf39b7a0c311607bbf5e9448bb6e4cc1c5473ce8a02b54ad7->leave($__internal_155d804cb390656bf39b7a0c311607bbf5e9448bb6e4cc1c5473ce8a02b54ad7_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  35 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head> */
/* 		<meta charset="utf-8" />*/
/* 		<title>{% block title %}Plateforme de publications{% endblock %}</title>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* */
/* 		<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" />*/
/* */
/* 	</head>*/
/* 	<body>*/
/* 		<div class="jumbotron">*/
/* 			<div class="container">*/
/* 				<h1>Site de publication scientifique</h1>*/
/* 			</div>*/
/* 		</div>*/
/* 	</body>*/
/* </html>*/
