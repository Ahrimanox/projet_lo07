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
        $__internal_7739829947b8afe24f08c1e628c49e7e30fdec5f3c02c9ec42c3d7901b794e01 = $this->env->getExtension("native_profiler");
        $__internal_7739829947b8afe24f08c1e628c49e7e30fdec5f3c02c9ec42c3d7901b794e01->enter($__internal_7739829947b8afe24f08c1e628c49e7e30fdec5f3c02c9ec42c3d7901b794e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7739829947b8afe24f08c1e628c49e7e30fdec5f3c02c9ec42c3d7901b794e01->leave($__internal_7739829947b8afe24f08c1e628c49e7e30fdec5f3c02c9ec42c3d7901b794e01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78914a434c90804a07c71c5e1ef60c628df28d5ee705951337dd5dc658ac04f7 = $this->env->getExtension("native_profiler");
        $__internal_78914a434c90804a07c71c5e1ef60c628df28d5ee705951337dd5dc658ac04f7->enter($__internal_78914a434c90804a07c71c5e1ef60c628df28d5ee705951337dd5dc658ac04f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78914a434c90804a07c71c5e1ef60c628df28d5ee705951337dd5dc658ac04f7->leave($__internal_78914a434c90804a07c71c5e1ef60c628df28d5ee705951337dd5dc658ac04f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2299eb5386b35b1711397bb788d36321be41f3078ec6e897e0c7391775251fe9 = $this->env->getExtension("native_profiler");
        $__internal_2299eb5386b35b1711397bb788d36321be41f3078ec6e897e0c7391775251fe9->enter($__internal_2299eb5386b35b1711397bb788d36321be41f3078ec6e897e0c7391775251fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2299eb5386b35b1711397bb788d36321be41f3078ec6e897e0c7391775251fe9->leave($__internal_2299eb5386b35b1711397bb788d36321be41f3078ec6e897e0c7391775251fe9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_56dcaf4784510403aea40fcbbf897dc4a5e27f8bf8127f29e7e0666d72f565db = $this->env->getExtension("native_profiler");
        $__internal_56dcaf4784510403aea40fcbbf897dc4a5e27f8bf8127f29e7e0666d72f565db->enter($__internal_56dcaf4784510403aea40fcbbf897dc4a5e27f8bf8127f29e7e0666d72f565db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56dcaf4784510403aea40fcbbf897dc4a5e27f8bf8127f29e7e0666d72f565db->leave($__internal_56dcaf4784510403aea40fcbbf897dc4a5e27f8bf8127f29e7e0666d72f565db_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64eea8929556ead1acf1bc4e52a6d83b59fc9e6db3588d9a2f0ea7af698b83fc = $this->env->getExtension("native_profiler");
        $__internal_64eea8929556ead1acf1bc4e52a6d83b59fc9e6db3588d9a2f0ea7af698b83fc->enter($__internal_64eea8929556ead1acf1bc4e52a6d83b59fc9e6db3588d9a2f0ea7af698b83fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_64eea8929556ead1acf1bc4e52a6d83b59fc9e6db3588d9a2f0ea7af698b83fc->leave($__internal_64eea8929556ead1acf1bc4e52a6d83b59fc9e6db3588d9a2f0ea7af698b83fc_prof);

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
