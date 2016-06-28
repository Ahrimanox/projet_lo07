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
        $__internal_a9bb48bd9c68a41fec6471376ae57c582db5637758adfee4ab16e60d965dba09 = $this->env->getExtension("native_profiler");
        $__internal_a9bb48bd9c68a41fec6471376ae57c582db5637758adfee4ab16e60d965dba09->enter($__internal_a9bb48bd9c68a41fec6471376ae57c582db5637758adfee4ab16e60d965dba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9bb48bd9c68a41fec6471376ae57c582db5637758adfee4ab16e60d965dba09->leave($__internal_a9bb48bd9c68a41fec6471376ae57c582db5637758adfee4ab16e60d965dba09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_422f47df3d77b7a95bc6be1642fdf15c028183a503efd096502aea1bed4d824c = $this->env->getExtension("native_profiler");
        $__internal_422f47df3d77b7a95bc6be1642fdf15c028183a503efd096502aea1bed4d824c->enter($__internal_422f47df3d77b7a95bc6be1642fdf15c028183a503efd096502aea1bed4d824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_422f47df3d77b7a95bc6be1642fdf15c028183a503efd096502aea1bed4d824c->leave($__internal_422f47df3d77b7a95bc6be1642fdf15c028183a503efd096502aea1bed4d824c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2677f5b729565780969474fb7d1ec17cac82436ef2b6b5ac506517851e2aad8 = $this->env->getExtension("native_profiler");
        $__internal_b2677f5b729565780969474fb7d1ec17cac82436ef2b6b5ac506517851e2aad8->enter($__internal_b2677f5b729565780969474fb7d1ec17cac82436ef2b6b5ac506517851e2aad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2677f5b729565780969474fb7d1ec17cac82436ef2b6b5ac506517851e2aad8->leave($__internal_b2677f5b729565780969474fb7d1ec17cac82436ef2b6b5ac506517851e2aad8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36420914ec04eae19082c23c171e1e5aaa6448023d9e8ca9274c821dbe55ddaf = $this->env->getExtension("native_profiler");
        $__internal_36420914ec04eae19082c23c171e1e5aaa6448023d9e8ca9274c821dbe55ddaf->enter($__internal_36420914ec04eae19082c23c171e1e5aaa6448023d9e8ca9274c821dbe55ddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36420914ec04eae19082c23c171e1e5aaa6448023d9e8ca9274c821dbe55ddaf->leave($__internal_36420914ec04eae19082c23c171e1e5aaa6448023d9e8ca9274c821dbe55ddaf_prof);

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
