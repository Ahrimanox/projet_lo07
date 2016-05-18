<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b0a1e579d77589c3d2106148a56f90a48543c591d18d4c086288a06b3ffbf00 extends Twig_Template
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
        $__internal_6af005deaae5d8a1e24cdeeab81257be9dc2e154cf6d3c4e5f07e116c758a7d2 = $this->env->getExtension("native_profiler");
        $__internal_6af005deaae5d8a1e24cdeeab81257be9dc2e154cf6d3c4e5f07e116c758a7d2->enter($__internal_6af005deaae5d8a1e24cdeeab81257be9dc2e154cf6d3c4e5f07e116c758a7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af005deaae5d8a1e24cdeeab81257be9dc2e154cf6d3c4e5f07e116c758a7d2->leave($__internal_6af005deaae5d8a1e24cdeeab81257be9dc2e154cf6d3c4e5f07e116c758a7d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ea2ec365adb705e9ebc0e2b103f4d455eebd6deedf073d921590dc123d34816 = $this->env->getExtension("native_profiler");
        $__internal_9ea2ec365adb705e9ebc0e2b103f4d455eebd6deedf073d921590dc123d34816->enter($__internal_9ea2ec365adb705e9ebc0e2b103f4d455eebd6deedf073d921590dc123d34816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ea2ec365adb705e9ebc0e2b103f4d455eebd6deedf073d921590dc123d34816->leave($__internal_9ea2ec365adb705e9ebc0e2b103f4d455eebd6deedf073d921590dc123d34816_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_929068cabd2e58a847ab97fa7d4171399d88a0148f009cfb5c6a62cb60e734ef = $this->env->getExtension("native_profiler");
        $__internal_929068cabd2e58a847ab97fa7d4171399d88a0148f009cfb5c6a62cb60e734ef->enter($__internal_929068cabd2e58a847ab97fa7d4171399d88a0148f009cfb5c6a62cb60e734ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_929068cabd2e58a847ab97fa7d4171399d88a0148f009cfb5c6a62cb60e734ef->leave($__internal_929068cabd2e58a847ab97fa7d4171399d88a0148f009cfb5c6a62cb60e734ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f66aeee88b191c2f358ea922e8ee101cd739ebf469de94c1004fa3a730d06e95 = $this->env->getExtension("native_profiler");
        $__internal_f66aeee88b191c2f358ea922e8ee101cd739ebf469de94c1004fa3a730d06e95->enter($__internal_f66aeee88b191c2f358ea922e8ee101cd739ebf469de94c1004fa3a730d06e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f66aeee88b191c2f358ea922e8ee101cd739ebf469de94c1004fa3a730d06e95->leave($__internal_f66aeee88b191c2f358ea922e8ee101cd739ebf469de94c1004fa3a730d06e95_prof);

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
