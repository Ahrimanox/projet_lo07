<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_62622b66e8bfa0d4c0a20d735afb9901eec74ed7807a6a6ebfe5aabda217b688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7eb11e4bcd29a9726b0d058790d881a7608a95718640f2daf674204c4c8de5c = $this->env->getExtension("native_profiler");
        $__internal_b7eb11e4bcd29a9726b0d058790d881a7608a95718640f2daf674204c4c8de5c->enter($__internal_b7eb11e4bcd29a9726b0d058790d881a7608a95718640f2daf674204c4c8de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7eb11e4bcd29a9726b0d058790d881a7608a95718640f2daf674204c4c8de5c->leave($__internal_b7eb11e4bcd29a9726b0d058790d881a7608a95718640f2daf674204c4c8de5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c4e8cb7ca7b042ef477e3cb449bc0b137b8c6c9cad9c618110879eea9eec96f = $this->env->getExtension("native_profiler");
        $__internal_6c4e8cb7ca7b042ef477e3cb449bc0b137b8c6c9cad9c618110879eea9eec96f->enter($__internal_6c4e8cb7ca7b042ef477e3cb449bc0b137b8c6c9cad9c618110879eea9eec96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6c4e8cb7ca7b042ef477e3cb449bc0b137b8c6c9cad9c618110879eea9eec96f->leave($__internal_6c4e8cb7ca7b042ef477e3cb449bc0b137b8c6c9cad9c618110879eea9eec96f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79defa2c59ec0347d5be2d1d0be582681e2607819d68f686c2a3b0b98245a044 = $this->env->getExtension("native_profiler");
        $__internal_79defa2c59ec0347d5be2d1d0be582681e2607819d68f686c2a3b0b98245a044->enter($__internal_79defa2c59ec0347d5be2d1d0be582681e2607819d68f686c2a3b0b98245a044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_79defa2c59ec0347d5be2d1d0be582681e2607819d68f686c2a3b0b98245a044->leave($__internal_79defa2c59ec0347d5be2d1d0be582681e2607819d68f686c2a3b0b98245a044_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
