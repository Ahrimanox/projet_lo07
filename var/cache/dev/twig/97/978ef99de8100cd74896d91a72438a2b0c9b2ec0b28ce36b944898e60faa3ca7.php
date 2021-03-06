<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dcaa5ad8dc0ec9dd70175d8e7ab7551a404065da937c64032c35aa4d244264b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_520f0e0bea9648d4bebb6fc9c3be46f8cdd1d57e77dab363dae21717ea665458 = $this->env->getExtension("native_profiler");
        $__internal_520f0e0bea9648d4bebb6fc9c3be46f8cdd1d57e77dab363dae21717ea665458->enter($__internal_520f0e0bea9648d4bebb6fc9c3be46f8cdd1d57e77dab363dae21717ea665458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520f0e0bea9648d4bebb6fc9c3be46f8cdd1d57e77dab363dae21717ea665458->leave($__internal_520f0e0bea9648d4bebb6fc9c3be46f8cdd1d57e77dab363dae21717ea665458_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b935c77eb574a9b5c5476b8ed72f66e2766774d1a7ef7627fe2a7f5f84a06f7 = $this->env->getExtension("native_profiler");
        $__internal_6b935c77eb574a9b5c5476b8ed72f66e2766774d1a7ef7627fe2a7f5f84a06f7->enter($__internal_6b935c77eb574a9b5c5476b8ed72f66e2766774d1a7ef7627fe2a7f5f84a06f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b935c77eb574a9b5c5476b8ed72f66e2766774d1a7ef7627fe2a7f5f84a06f7->leave($__internal_6b935c77eb574a9b5c5476b8ed72f66e2766774d1a7ef7627fe2a7f5f84a06f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a2c58d70107d2368d8fc5ffcde92e666acebc3abe3b9e411175c8d0b9c65cfe = $this->env->getExtension("native_profiler");
        $__internal_2a2c58d70107d2368d8fc5ffcde92e666acebc3abe3b9e411175c8d0b9c65cfe->enter($__internal_2a2c58d70107d2368d8fc5ffcde92e666acebc3abe3b9e411175c8d0b9c65cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a2c58d70107d2368d8fc5ffcde92e666acebc3abe3b9e411175c8d0b9c65cfe->leave($__internal_2a2c58d70107d2368d8fc5ffcde92e666acebc3abe3b9e411175c8d0b9c65cfe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b912f8b55ecbe81c89ab711c8594ccf74f2ea05496edbab9bf08f8ebea0a5a63 = $this->env->getExtension("native_profiler");
        $__internal_b912f8b55ecbe81c89ab711c8594ccf74f2ea05496edbab9bf08f8ebea0a5a63->enter($__internal_b912f8b55ecbe81c89ab711c8594ccf74f2ea05496edbab9bf08f8ebea0a5a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b912f8b55ecbe81c89ab711c8594ccf74f2ea05496edbab9bf08f8ebea0a5a63->leave($__internal_b912f8b55ecbe81c89ab711c8594ccf74f2ea05496edbab9bf08f8ebea0a5a63_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
