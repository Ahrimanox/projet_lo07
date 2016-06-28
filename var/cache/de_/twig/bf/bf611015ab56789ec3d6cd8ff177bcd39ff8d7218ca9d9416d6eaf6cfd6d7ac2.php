<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ff506538156e2e1e19dae7dedab4c2b137044c073c3e7e3388365a873a0ff852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_57e894178281696a8376fbc1eed556eab0ab3e3a9000565d77480bda4cd6b0b1 = $this->env->getExtension("native_profiler");
        $__internal_57e894178281696a8376fbc1eed556eab0ab3e3a9000565d77480bda4cd6b0b1->enter($__internal_57e894178281696a8376fbc1eed556eab0ab3e3a9000565d77480bda4cd6b0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e894178281696a8376fbc1eed556eab0ab3e3a9000565d77480bda4cd6b0b1->leave($__internal_57e894178281696a8376fbc1eed556eab0ab3e3a9000565d77480bda4cd6b0b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e72feb5e51c361edd7a843f740bbb9c337f3472c51a66c518ab5583fff3fa58 = $this->env->getExtension("native_profiler");
        $__internal_7e72feb5e51c361edd7a843f740bbb9c337f3472c51a66c518ab5583fff3fa58->enter($__internal_7e72feb5e51c361edd7a843f740bbb9c337f3472c51a66c518ab5583fff3fa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7e72feb5e51c361edd7a843f740bbb9c337f3472c51a66c518ab5583fff3fa58->leave($__internal_7e72feb5e51c361edd7a843f740bbb9c337f3472c51a66c518ab5583fff3fa58_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff4c998bb93cd146f27258bc21dc026f575996122154a8e784d28fa05c53968b = $this->env->getExtension("native_profiler");
        $__internal_ff4c998bb93cd146f27258bc21dc026f575996122154a8e784d28fa05c53968b->enter($__internal_ff4c998bb93cd146f27258bc21dc026f575996122154a8e784d28fa05c53968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ff4c998bb93cd146f27258bc21dc026f575996122154a8e784d28fa05c53968b->leave($__internal_ff4c998bb93cd146f27258bc21dc026f575996122154a8e784d28fa05c53968b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_133487bd2b1ac7fe9efc772ab505882a5112df425899b0da3c7ed552e429dd1a = $this->env->getExtension("native_profiler");
        $__internal_133487bd2b1ac7fe9efc772ab505882a5112df425899b0da3c7ed552e429dd1a->enter($__internal_133487bd2b1ac7fe9efc772ab505882a5112df425899b0da3c7ed552e429dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_133487bd2b1ac7fe9efc772ab505882a5112df425899b0da3c7ed552e429dd1a->leave($__internal_133487bd2b1ac7fe9efc772ab505882a5112df425899b0da3c7ed552e429dd1a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
