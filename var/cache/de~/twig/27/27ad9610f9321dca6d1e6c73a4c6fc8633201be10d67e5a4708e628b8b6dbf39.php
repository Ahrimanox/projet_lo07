<?php

/* ::base.html.twig */
class __TwigTemplate_e3669d8cc0713ec0af3ad18d01984952fa86893bd2ad76b32882b4622dca7d91 extends Twig_Template
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
        $__internal_b68e60d4f325a454efc311d9f9e16a9d4d24fba123ae48be9605818c46fb0142 = $this->env->getExtension("native_profiler");
        $__internal_b68e60d4f325a454efc311d9f9e16a9d4d24fba123ae48be9605818c46fb0142->enter($__internal_b68e60d4f325a454efc311d9f9e16a9d4d24fba123ae48be9605818c46fb0142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b68e60d4f325a454efc311d9f9e16a9d4d24fba123ae48be9605818c46fb0142->leave($__internal_b68e60d4f325a454efc311d9f9e16a9d4d24fba123ae48be9605818c46fb0142_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4195fa6e0f0b7e857ab6f3a5316328b8abba3e44089ddc972a61c7cc730e0089 = $this->env->getExtension("native_profiler");
        $__internal_4195fa6e0f0b7e857ab6f3a5316328b8abba3e44089ddc972a61c7cc730e0089->enter($__internal_4195fa6e0f0b7e857ab6f3a5316328b8abba3e44089ddc972a61c7cc730e0089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4195fa6e0f0b7e857ab6f3a5316328b8abba3e44089ddc972a61c7cc730e0089->leave($__internal_4195fa6e0f0b7e857ab6f3a5316328b8abba3e44089ddc972a61c7cc730e0089_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff28776b8d3c3fd99d6989afad35cafb523c3457870a390c817d84d93bc7dc80 = $this->env->getExtension("native_profiler");
        $__internal_ff28776b8d3c3fd99d6989afad35cafb523c3457870a390c817d84d93bc7dc80->enter($__internal_ff28776b8d3c3fd99d6989afad35cafb523c3457870a390c817d84d93bc7dc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ff28776b8d3c3fd99d6989afad35cafb523c3457870a390c817d84d93bc7dc80->leave($__internal_ff28776b8d3c3fd99d6989afad35cafb523c3457870a390c817d84d93bc7dc80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66c5e4f9a2578d654042cf0490f26c80b2b98b240dce163972d82cbce15c88ca = $this->env->getExtension("native_profiler");
        $__internal_66c5e4f9a2578d654042cf0490f26c80b2b98b240dce163972d82cbce15c88ca->enter($__internal_66c5e4f9a2578d654042cf0490f26c80b2b98b240dce163972d82cbce15c88ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66c5e4f9a2578d654042cf0490f26c80b2b98b240dce163972d82cbce15c88ca->leave($__internal_66c5e4f9a2578d654042cf0490f26c80b2b98b240dce163972d82cbce15c88ca_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b0e1fd7f0a124a1b3a788f2c539c5e651cc0a826fb37298d03be086d65641e7 = $this->env->getExtension("native_profiler");
        $__internal_9b0e1fd7f0a124a1b3a788f2c539c5e651cc0a826fb37298d03be086d65641e7->enter($__internal_9b0e1fd7f0a124a1b3a788f2c539c5e651cc0a826fb37298d03be086d65641e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b0e1fd7f0a124a1b3a788f2c539c5e651cc0a826fb37298d03be086d65641e7->leave($__internal_9b0e1fd7f0a124a1b3a788f2c539c5e651cc0a826fb37298d03be086d65641e7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
