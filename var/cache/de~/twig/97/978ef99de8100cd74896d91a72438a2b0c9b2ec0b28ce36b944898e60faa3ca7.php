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
        $__internal_fe3728953c716921c09674070e6e2b131d41885bb34c0c78912812fd994138a6 = $this->env->getExtension("native_profiler");
        $__internal_fe3728953c716921c09674070e6e2b131d41885bb34c0c78912812fd994138a6->enter($__internal_fe3728953c716921c09674070e6e2b131d41885bb34c0c78912812fd994138a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3728953c716921c09674070e6e2b131d41885bb34c0c78912812fd994138a6->leave($__internal_fe3728953c716921c09674070e6e2b131d41885bb34c0c78912812fd994138a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae60ce39c50aa9620c53fbb5fb9dc20df41a9ec2fd5d7baeb02433d5c379bd30 = $this->env->getExtension("native_profiler");
        $__internal_ae60ce39c50aa9620c53fbb5fb9dc20df41a9ec2fd5d7baeb02433d5c379bd30->enter($__internal_ae60ce39c50aa9620c53fbb5fb9dc20df41a9ec2fd5d7baeb02433d5c379bd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae60ce39c50aa9620c53fbb5fb9dc20df41a9ec2fd5d7baeb02433d5c379bd30->leave($__internal_ae60ce39c50aa9620c53fbb5fb9dc20df41a9ec2fd5d7baeb02433d5c379bd30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3210ad47bddc45cd78d842814ff72f952502f7d2ceab62843b8668685e5201d9 = $this->env->getExtension("native_profiler");
        $__internal_3210ad47bddc45cd78d842814ff72f952502f7d2ceab62843b8668685e5201d9->enter($__internal_3210ad47bddc45cd78d842814ff72f952502f7d2ceab62843b8668685e5201d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3210ad47bddc45cd78d842814ff72f952502f7d2ceab62843b8668685e5201d9->leave($__internal_3210ad47bddc45cd78d842814ff72f952502f7d2ceab62843b8668685e5201d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_190fd2ae823d4d3db9487775ed58fc0300d87cc0ac8d2477fd058e857eb7f779 = $this->env->getExtension("native_profiler");
        $__internal_190fd2ae823d4d3db9487775ed58fc0300d87cc0ac8d2477fd058e857eb7f779->enter($__internal_190fd2ae823d4d3db9487775ed58fc0300d87cc0ac8d2477fd058e857eb7f779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_190fd2ae823d4d3db9487775ed58fc0300d87cc0ac8d2477fd058e857eb7f779->leave($__internal_190fd2ae823d4d3db9487775ed58fc0300d87cc0ac8d2477fd058e857eb7f779_prof);

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
