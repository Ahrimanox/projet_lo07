<?php

/* base.html.twig */
class __TwigTemplate_046e36e5b3c0cf8a3bf82df2f4ba1d14b52efd0832c3ff3e27ffaae1bf51db52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c926dd3ee2d06600123906190b6da63322b4ad5c272183a8638a8d68b07cb5c = $this->env->getExtension("native_profiler");
        $__internal_4c926dd3ee2d06600123906190b6da63322b4ad5c272183a8638a8d68b07cb5c->enter($__internal_4c926dd3ee2d06600123906190b6da63322b4ad5c272183a8638a8d68b07cb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4c926dd3ee2d06600123906190b6da63322b4ad5c272183a8638a8d68b07cb5c->leave($__internal_4c926dd3ee2d06600123906190b6da63322b4ad5c272183a8638a8d68b07cb5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbad9e6fec61dd58bb5feabe4a1763508d51717129a743932f7dd10347631c86 = $this->env->getExtension("native_profiler");
        $__internal_cbad9e6fec61dd58bb5feabe4a1763508d51717129a743932f7dd10347631c86->enter($__internal_cbad9e6fec61dd58bb5feabe4a1763508d51717129a743932f7dd10347631c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cbad9e6fec61dd58bb5feabe4a1763508d51717129a743932f7dd10347631c86->leave($__internal_cbad9e6fec61dd58bb5feabe4a1763508d51717129a743932f7dd10347631c86_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c389ad0e2cb15d87a3199311dc830efdb0baeba23ba38cc76529966aefd6b8d = $this->env->getExtension("native_profiler");
        $__internal_2c389ad0e2cb15d87a3199311dc830efdb0baeba23ba38cc76529966aefd6b8d->enter($__internal_2c389ad0e2cb15d87a3199311dc830efdb0baeba23ba38cc76529966aefd6b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c389ad0e2cb15d87a3199311dc830efdb0baeba23ba38cc76529966aefd6b8d->leave($__internal_2c389ad0e2cb15d87a3199311dc830efdb0baeba23ba38cc76529966aefd6b8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_db9f8340591f1ce4978b02873ba1135243ace275c75b472d809446ca07495b40 = $this->env->getExtension("native_profiler");
        $__internal_db9f8340591f1ce4978b02873ba1135243ace275c75b472d809446ca07495b40->enter($__internal_db9f8340591f1ce4978b02873ba1135243ace275c75b472d809446ca07495b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db9f8340591f1ce4978b02873ba1135243ace275c75b472d809446ca07495b40->leave($__internal_db9f8340591f1ce4978b02873ba1135243ace275c75b472d809446ca07495b40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1dc841da5715238c0207cb3a4a7e470b13eb6cf6a4d82f425d9511552f781e9b = $this->env->getExtension("native_profiler");
        $__internal_1dc841da5715238c0207cb3a4a7e470b13eb6cf6a4d82f425d9511552f781e9b->enter($__internal_1dc841da5715238c0207cb3a4a7e470b13eb6cf6a4d82f425d9511552f781e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1dc841da5715238c0207cb3a4a7e470b13eb6cf6a4d82f425d9511552f781e9b->leave($__internal_1dc841da5715238c0207cb3a4a7e470b13eb6cf6a4d82f425d9511552f781e9b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
