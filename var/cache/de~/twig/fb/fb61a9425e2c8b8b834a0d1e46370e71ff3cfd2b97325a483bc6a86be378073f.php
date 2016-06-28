<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ddfc6ad8443170eb75f264b230ba229129188ae3ae65dff2efebd3e943666176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_171b7d3ec6bc0b1549a3495b2216df1a0679f1e7ee323bd574c48f994382b1a2 = $this->env->getExtension("native_profiler");
        $__internal_171b7d3ec6bc0b1549a3495b2216df1a0679f1e7ee323bd574c48f994382b1a2->enter($__internal_171b7d3ec6bc0b1549a3495b2216df1a0679f1e7ee323bd574c48f994382b1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171b7d3ec6bc0b1549a3495b2216df1a0679f1e7ee323bd574c48f994382b1a2->leave($__internal_171b7d3ec6bc0b1549a3495b2216df1a0679f1e7ee323bd574c48f994382b1a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4def635c27031ef8a59303974b5fd42b5414db54902afe56635d3c051589580e = $this->env->getExtension("native_profiler");
        $__internal_4def635c27031ef8a59303974b5fd42b5414db54902afe56635d3c051589580e->enter($__internal_4def635c27031ef8a59303974b5fd42b5414db54902afe56635d3c051589580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4def635c27031ef8a59303974b5fd42b5414db54902afe56635d3c051589580e->leave($__internal_4def635c27031ef8a59303974b5fd42b5414db54902afe56635d3c051589580e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6969e7c8eaaa594929b5b03004f8221ba59323691ca661e209515925dab0ad42 = $this->env->getExtension("native_profiler");
        $__internal_6969e7c8eaaa594929b5b03004f8221ba59323691ca661e209515925dab0ad42->enter($__internal_6969e7c8eaaa594929b5b03004f8221ba59323691ca661e209515925dab0ad42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6969e7c8eaaa594929b5b03004f8221ba59323691ca661e209515925dab0ad42->leave($__internal_6969e7c8eaaa594929b5b03004f8221ba59323691ca661e209515925dab0ad42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d43fa2716805409c403d9e58afb32d08d8ab0e20e36e5beeb5b69f59d4b02547 = $this->env->getExtension("native_profiler");
        $__internal_d43fa2716805409c403d9e58afb32d08d8ab0e20e36e5beeb5b69f59d4b02547->enter($__internal_d43fa2716805409c403d9e58afb32d08d8ab0e20e36e5beeb5b69f59d4b02547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d43fa2716805409c403d9e58afb32d08d8ab0e20e36e5beeb5b69f59d4b02547->leave($__internal_d43fa2716805409c403d9e58afb32d08d8ab0e20e36e5beeb5b69f59d4b02547_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
