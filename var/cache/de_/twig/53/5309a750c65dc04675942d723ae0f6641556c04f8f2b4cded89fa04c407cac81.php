<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cdca7437c7966acd49f95cceac046fd18d5602bdea83abc21204a37bb2891920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_599f6e25f0dfa2546c09e72854c69b4adb1e034636ed2f743dc69a9f57d15967 = $this->env->getExtension("native_profiler");
        $__internal_599f6e25f0dfa2546c09e72854c69b4adb1e034636ed2f743dc69a9f57d15967->enter($__internal_599f6e25f0dfa2546c09e72854c69b4adb1e034636ed2f743dc69a9f57d15967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_599f6e25f0dfa2546c09e72854c69b4adb1e034636ed2f743dc69a9f57d15967->leave($__internal_599f6e25f0dfa2546c09e72854c69b4adb1e034636ed2f743dc69a9f57d15967_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ea96cb63a961b0b8e906c9d2c0f2d605b503ab2561ad7a361bdeb7f91a7c17 = $this->env->getExtension("native_profiler");
        $__internal_78ea96cb63a961b0b8e906c9d2c0f2d605b503ab2561ad7a361bdeb7f91a7c17->enter($__internal_78ea96cb63a961b0b8e906c9d2c0f2d605b503ab2561ad7a361bdeb7f91a7c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_78ea96cb63a961b0b8e906c9d2c0f2d605b503ab2561ad7a361bdeb7f91a7c17->leave($__internal_78ea96cb63a961b0b8e906c9d2c0f2d605b503ab2561ad7a361bdeb7f91a7c17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_739a8a172d0db62f9303f3853a3d48769f058776deadb49929c2f7e3de8a7359 = $this->env->getExtension("native_profiler");
        $__internal_739a8a172d0db62f9303f3853a3d48769f058776deadb49929c2f7e3de8a7359->enter($__internal_739a8a172d0db62f9303f3853a3d48769f058776deadb49929c2f7e3de8a7359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_739a8a172d0db62f9303f3853a3d48769f058776deadb49929c2f7e3de8a7359->leave($__internal_739a8a172d0db62f9303f3853a3d48769f058776deadb49929c2f7e3de8a7359_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
