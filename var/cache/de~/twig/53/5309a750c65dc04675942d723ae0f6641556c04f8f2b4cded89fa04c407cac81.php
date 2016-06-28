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
        $__internal_e7a8eb664ce0742694012b66968a6a48407a3d91176e4b288e04cc3f7cdd8a4b = $this->env->getExtension("native_profiler");
        $__internal_e7a8eb664ce0742694012b66968a6a48407a3d91176e4b288e04cc3f7cdd8a4b->enter($__internal_e7a8eb664ce0742694012b66968a6a48407a3d91176e4b288e04cc3f7cdd8a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7a8eb664ce0742694012b66968a6a48407a3d91176e4b288e04cc3f7cdd8a4b->leave($__internal_e7a8eb664ce0742694012b66968a6a48407a3d91176e4b288e04cc3f7cdd8a4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c2a29dc288cfb689c9baff0c29663a1bdec6b50fcb68a615e331ab400317dd1 = $this->env->getExtension("native_profiler");
        $__internal_0c2a29dc288cfb689c9baff0c29663a1bdec6b50fcb68a615e331ab400317dd1->enter($__internal_0c2a29dc288cfb689c9baff0c29663a1bdec6b50fcb68a615e331ab400317dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c2a29dc288cfb689c9baff0c29663a1bdec6b50fcb68a615e331ab400317dd1->leave($__internal_0c2a29dc288cfb689c9baff0c29663a1bdec6b50fcb68a615e331ab400317dd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85f06767eea554f420f7165d248823abb1d70f128b4224a73b482bc0e52c2842 = $this->env->getExtension("native_profiler");
        $__internal_85f06767eea554f420f7165d248823abb1d70f128b4224a73b482bc0e52c2842->enter($__internal_85f06767eea554f420f7165d248823abb1d70f128b4224a73b482bc0e52c2842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85f06767eea554f420f7165d248823abb1d70f128b4224a73b482bc0e52c2842->leave($__internal_85f06767eea554f420f7165d248823abb1d70f128b4224a73b482bc0e52c2842_prof);

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
