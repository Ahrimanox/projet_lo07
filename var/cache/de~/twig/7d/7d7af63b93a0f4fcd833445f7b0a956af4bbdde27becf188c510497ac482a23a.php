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
        $__internal_923189b0b5faa47aee46ee094bf87f3e0e437c54cf9493c226f2110acd88f4f5 = $this->env->getExtension("native_profiler");
        $__internal_923189b0b5faa47aee46ee094bf87f3e0e437c54cf9493c226f2110acd88f4f5->enter($__internal_923189b0b5faa47aee46ee094bf87f3e0e437c54cf9493c226f2110acd88f4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_923189b0b5faa47aee46ee094bf87f3e0e437c54cf9493c226f2110acd88f4f5->leave($__internal_923189b0b5faa47aee46ee094bf87f3e0e437c54cf9493c226f2110acd88f4f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c8cbabab6640cbd9cc4fb99528f9694ce2fa67b9629d1aa3d61e910bd6f5b77 = $this->env->getExtension("native_profiler");
        $__internal_2c8cbabab6640cbd9cc4fb99528f9694ce2fa67b9629d1aa3d61e910bd6f5b77->enter($__internal_2c8cbabab6640cbd9cc4fb99528f9694ce2fa67b9629d1aa3d61e910bd6f5b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c8cbabab6640cbd9cc4fb99528f9694ce2fa67b9629d1aa3d61e910bd6f5b77->leave($__internal_2c8cbabab6640cbd9cc4fb99528f9694ce2fa67b9629d1aa3d61e910bd6f5b77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6708af51ad42c2cef7f5c5f8c2365e2ce4f7361bf3bceb0d657451eefd28b18 = $this->env->getExtension("native_profiler");
        $__internal_c6708af51ad42c2cef7f5c5f8c2365e2ce4f7361bf3bceb0d657451eefd28b18->enter($__internal_c6708af51ad42c2cef7f5c5f8c2365e2ce4f7361bf3bceb0d657451eefd28b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6708af51ad42c2cef7f5c5f8c2365e2ce4f7361bf3bceb0d657451eefd28b18->leave($__internal_c6708af51ad42c2cef7f5c5f8c2365e2ce4f7361bf3bceb0d657451eefd28b18_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27690fbbd9ac23926110b9a1e10cc7af587a15840d7ffa5f274581fdbab109e = $this->env->getExtension("native_profiler");
        $__internal_c27690fbbd9ac23926110b9a1e10cc7af587a15840d7ffa5f274581fdbab109e->enter($__internal_c27690fbbd9ac23926110b9a1e10cc7af587a15840d7ffa5f274581fdbab109e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c27690fbbd9ac23926110b9a1e10cc7af587a15840d7ffa5f274581fdbab109e->leave($__internal_c27690fbbd9ac23926110b9a1e10cc7af587a15840d7ffa5f274581fdbab109e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a42f3ae5cccf19b1299a36f8ac56fcbae51ddcafdbf61d39a583186a7fd1ae12 = $this->env->getExtension("native_profiler");
        $__internal_a42f3ae5cccf19b1299a36f8ac56fcbae51ddcafdbf61d39a583186a7fd1ae12->enter($__internal_a42f3ae5cccf19b1299a36f8ac56fcbae51ddcafdbf61d39a583186a7fd1ae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a42f3ae5cccf19b1299a36f8ac56fcbae51ddcafdbf61d39a583186a7fd1ae12->leave($__internal_a42f3ae5cccf19b1299a36f8ac56fcbae51ddcafdbf61d39a583186a7fd1ae12_prof);

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
