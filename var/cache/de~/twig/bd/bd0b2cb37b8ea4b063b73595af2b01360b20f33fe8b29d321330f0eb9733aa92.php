<?php

/* @Publication/Default/base.html.twig */
class __TwigTemplate_ecebc60d68e826e3afe74005d7afde756b5954f30802f24704c64abb6914ce63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b4ab10f2990729b5e2ba48b136c7e919f50d366b3537b30d8cf18d49521d1ae = $this->env->getExtension("native_profiler");
        $__internal_0b4ab10f2990729b5e2ba48b136c7e919f50d366b3537b30d8cf18d49521d1ae->enter($__internal_0b4ab10f2990729b5e2ba48b136c7e919f50d366b3537b30d8cf18d49521d1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Default/base.html.twig"));

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
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" />

\t</head>
\t<body>
\t\t<header class=\"page-header container-fluid\">
\t\t\t<h1>";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>
\t\t</header>

\t\t<div class=\"body\">
\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t  \t<div class=\"container-fluid\">
\t\t\t    <div class=\"navbar-header\">
\t\t\t    \t<a class=\"navbar-brand\" href=\"#\">Acceuil</a>
\t\t\t    </div>
\t\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t\t    \t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a></li>
\t\t\t    \t<li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a></li>
\t\t\t    </ul>
\t\t\t  </div>
\t\t\t</nav>
\t\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "\t\t</div>

\t\t<footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<p class=\"text-muted\">&copy DUBUS Clément - NIVELET Clément, Site propulsé grâce à Symfony 3.0.4</p>
\t\t\t</div>
\t\t</footer>
\t</body>
</html>";
        
        $__internal_0b4ab10f2990729b5e2ba48b136c7e919f50d366b3537b30d8cf18d49521d1ae->leave($__internal_0b4ab10f2990729b5e2ba48b136c7e919f50d366b3537b30d8cf18d49521d1ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fdb514d28082eaa68d174331a3bd1630df4f017569ddef75321f415c526364c = $this->env->getExtension("native_profiler");
        $__internal_3fdb514d28082eaa68d174331a3bd1630df4f017569ddef75321f415c526364c->enter($__internal_3fdb514d28082eaa68d174331a3bd1630df4f017569ddef75321f415c526364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de publications";
        
        $__internal_3fdb514d28082eaa68d174331a3bd1630df4f017569ddef75321f415c526364c->leave($__internal_3fdb514d28082eaa68d174331a3bd1630df4f017569ddef75321f415c526364c_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_55a04636a60232696e1446cb5b6d4a29f2f88c4f5ca2dfdd0eddbaafb2fe154d = $this->env->getExtension("native_profiler");
        $__internal_55a04636a60232696e1446cb5b6d4a29f2f88c4f5ca2dfdd0eddbaafb2fe154d->enter($__internal_55a04636a60232696e1446cb5b6d4a29f2f88c4f5ca2dfdd0eddbaafb2fe154d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "Plateforme de publications scientifiques";
        
        $__internal_55a04636a60232696e1446cb5b6d4a29f2f88c4f5ca2dfdd0eddbaafb2fe154d->leave($__internal_55a04636a60232696e1446cb5b6d4a29f2f88c4f5ca2dfdd0eddbaafb2fe154d_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdf034faf412d0ded2f8a85cde39b4150afc33a607d030870204f21a1b309511 = $this->env->getExtension("native_profiler");
        $__internal_cdf034faf412d0ded2f8a85cde39b4150afc33a607d030870204f21a1b309511->enter($__internal_cdf034faf412d0ded2f8a85cde39b4150afc33a607d030870204f21a1b309511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "\t\t\t";
        
        $__internal_cdf034faf412d0ded2f8a85cde39b4150afc33a607d030870204f21a1b309511->leave($__internal_cdf034faf412d0ded2f8a85cde39b4150afc33a607d030870204f21a1b309511_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  108 => 29,  96 => 14,  84 => 5,  69 => 31,  67 => 29,  49 => 14,  41 => 9,  37 => 8,  31 => 5,  25 => 1,);
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
/* 		<link rel="stylesheet" href="{{ asset("css/base.css") }}" />*/
/* */
/* 	</head>*/
/* 	<body>*/
/* 		<header class="page-header container-fluid">*/
/* 			<h1>{% block header %}Plateforme de publications scientifiques{% endblock %}</h1>*/
/* 		</header>*/
/* */
/* 		<div class="body">*/
/* 			<nav class="navbar navbar-default">*/
/* 			  	<div class="container-fluid">*/
/* 			    <div class="navbar-header">*/
/* 			    	<a class="navbar-brand" href="#">Acceuil</a>*/
/* 			    </div>*/
/* 			    <ul class="nav navbar-nav navbar-right">*/
/* 			    	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>*/
/* 			    	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>*/
/* 			    </ul>*/
/* 			  </div>*/
/* 			</nav>*/
/* 			{% block body %}*/
/* 			{% endblock %}*/
/* 		</div>*/
/* */
/* 		<footer class="footer">*/
/* 			<div class="container">*/
/* 				<p class="text-muted">&copy DUBUS Clément - NIVELET Clément, Site propulsé grâce à Symfony 3.0.4</p>*/
/* 			</div>*/
/* 		</footer>*/
/* 	</body>*/
/* </html>*/
