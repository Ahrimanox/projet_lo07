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
        $__internal_27d06f04a84b520e2075b7cec42375e6155e281b3a386797f59266819fa40ee7 = $this->env->getExtension("native_profiler");
        $__internal_27d06f04a84b520e2075b7cec42375e6155e281b3a386797f59266819fa40ee7->enter($__internal_27d06f04a84b520e2075b7cec42375e6155e281b3a386797f59266819fa40ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d06f04a84b520e2075b7cec42375e6155e281b3a386797f59266819fa40ee7->leave($__internal_27d06f04a84b520e2075b7cec42375e6155e281b3a386797f59266819fa40ee7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df6f9e6f0744c49d6237a13f27f6e36a98de191d246d911a78eef8c897535cc3 = $this->env->getExtension("native_profiler");
        $__internal_df6f9e6f0744c49d6237a13f27f6e36a98de191d246d911a78eef8c897535cc3->enter($__internal_df6f9e6f0744c49d6237a13f27f6e36a98de191d246d911a78eef8c897535cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_df6f9e6f0744c49d6237a13f27f6e36a98de191d246d911a78eef8c897535cc3->leave($__internal_df6f9e6f0744c49d6237a13f27f6e36a98de191d246d911a78eef8c897535cc3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9561f321d2963a9a7b44952a9ece41121657400b94a6d02bc3e4bc2966a3e70c = $this->env->getExtension("native_profiler");
        $__internal_9561f321d2963a9a7b44952a9ece41121657400b94a6d02bc3e4bc2966a3e70c->enter($__internal_9561f321d2963a9a7b44952a9ece41121657400b94a6d02bc3e4bc2966a3e70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9561f321d2963a9a7b44952a9ece41121657400b94a6d02bc3e4bc2966a3e70c->leave($__internal_9561f321d2963a9a7b44952a9ece41121657400b94a6d02bc3e4bc2966a3e70c_prof);

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
