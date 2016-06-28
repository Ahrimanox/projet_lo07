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
        $__internal_83001e27df4264b781c80ed14e3bedbbb7006239f4e4be933d94b4d9b7747b96 = $this->env->getExtension("native_profiler");
        $__internal_83001e27df4264b781c80ed14e3bedbbb7006239f4e4be933d94b4d9b7747b96->enter($__internal_83001e27df4264b781c80ed14e3bedbbb7006239f4e4be933d94b4d9b7747b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83001e27df4264b781c80ed14e3bedbbb7006239f4e4be933d94b4d9b7747b96->leave($__internal_83001e27df4264b781c80ed14e3bedbbb7006239f4e4be933d94b4d9b7747b96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75ede09935a2d4d89be786aeb7134a1268bfd9a5a25df8eecaa50c95d82049d2 = $this->env->getExtension("native_profiler");
        $__internal_75ede09935a2d4d89be786aeb7134a1268bfd9a5a25df8eecaa50c95d82049d2->enter($__internal_75ede09935a2d4d89be786aeb7134a1268bfd9a5a25df8eecaa50c95d82049d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75ede09935a2d4d89be786aeb7134a1268bfd9a5a25df8eecaa50c95d82049d2->leave($__internal_75ede09935a2d4d89be786aeb7134a1268bfd9a5a25df8eecaa50c95d82049d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0f077990777fd7f6eaa7a60e9c26993cf4d16cf865818f2eff6b7187b74e4fe = $this->env->getExtension("native_profiler");
        $__internal_b0f077990777fd7f6eaa7a60e9c26993cf4d16cf865818f2eff6b7187b74e4fe->enter($__internal_b0f077990777fd7f6eaa7a60e9c26993cf4d16cf865818f2eff6b7187b74e4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0f077990777fd7f6eaa7a60e9c26993cf4d16cf865818f2eff6b7187b74e4fe->leave($__internal_b0f077990777fd7f6eaa7a60e9c26993cf4d16cf865818f2eff6b7187b74e4fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7283ef89cbe1f883398483a8a92982055f59774cc3bc01ad51b85fdc6e0bc01d = $this->env->getExtension("native_profiler");
        $__internal_7283ef89cbe1f883398483a8a92982055f59774cc3bc01ad51b85fdc6e0bc01d->enter($__internal_7283ef89cbe1f883398483a8a92982055f59774cc3bc01ad51b85fdc6e0bc01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7283ef89cbe1f883398483a8a92982055f59774cc3bc01ad51b85fdc6e0bc01d->leave($__internal_7283ef89cbe1f883398483a8a92982055f59774cc3bc01ad51b85fdc6e0bc01d_prof);

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
