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
        $__internal_463b3f1bb0ff84fb76a0ac63f069f0837f34c6c46bd6a898bbbefacf0c244e46 = $this->env->getExtension("native_profiler");
        $__internal_463b3f1bb0ff84fb76a0ac63f069f0837f34c6c46bd6a898bbbefacf0c244e46->enter($__internal_463b3f1bb0ff84fb76a0ac63f069f0837f34c6c46bd6a898bbbefacf0c244e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463b3f1bb0ff84fb76a0ac63f069f0837f34c6c46bd6a898bbbefacf0c244e46->leave($__internal_463b3f1bb0ff84fb76a0ac63f069f0837f34c6c46bd6a898bbbefacf0c244e46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8c0c5e15d6153526876d70d2b960e2a40bad88e07ec49c9bdb858b1a62c7470 = $this->env->getExtension("native_profiler");
        $__internal_d8c0c5e15d6153526876d70d2b960e2a40bad88e07ec49c9bdb858b1a62c7470->enter($__internal_d8c0c5e15d6153526876d70d2b960e2a40bad88e07ec49c9bdb858b1a62c7470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8c0c5e15d6153526876d70d2b960e2a40bad88e07ec49c9bdb858b1a62c7470->leave($__internal_d8c0c5e15d6153526876d70d2b960e2a40bad88e07ec49c9bdb858b1a62c7470_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfc3ca1d43b3bc62f10aa1c9bc72d5a7d471c0f760798a31a9a9b74f1fdeddfe = $this->env->getExtension("native_profiler");
        $__internal_bfc3ca1d43b3bc62f10aa1c9bc72d5a7d471c0f760798a31a9a9b74f1fdeddfe->enter($__internal_bfc3ca1d43b3bc62f10aa1c9bc72d5a7d471c0f760798a31a9a9b74f1fdeddfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bfc3ca1d43b3bc62f10aa1c9bc72d5a7d471c0f760798a31a9a9b74f1fdeddfe->leave($__internal_bfc3ca1d43b3bc62f10aa1c9bc72d5a7d471c0f760798a31a9a9b74f1fdeddfe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c6115eb693fe5523a99f6a6f9aafa988360b9550675efe08fd138043e0c2889 = $this->env->getExtension("native_profiler");
        $__internal_0c6115eb693fe5523a99f6a6f9aafa988360b9550675efe08fd138043e0c2889->enter($__internal_0c6115eb693fe5523a99f6a6f9aafa988360b9550675efe08fd138043e0c2889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c6115eb693fe5523a99f6a6f9aafa988360b9550675efe08fd138043e0c2889->leave($__internal_0c6115eb693fe5523a99f6a6f9aafa988360b9550675efe08fd138043e0c2889_prof);

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
