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
        $__internal_5d44e11a806589ab39bcda9dded9b412c728b2ee455738ca62493fbdaa315079 = $this->env->getExtension("native_profiler");
        $__internal_5d44e11a806589ab39bcda9dded9b412c728b2ee455738ca62493fbdaa315079->enter($__internal_5d44e11a806589ab39bcda9dded9b412c728b2ee455738ca62493fbdaa315079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d44e11a806589ab39bcda9dded9b412c728b2ee455738ca62493fbdaa315079->leave($__internal_5d44e11a806589ab39bcda9dded9b412c728b2ee455738ca62493fbdaa315079_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8e7c9df52b3c2292b4d6a7e9233d0afbc097d84dd9c0b4d8ad8b7d504c514ca = $this->env->getExtension("native_profiler");
        $__internal_b8e7c9df52b3c2292b4d6a7e9233d0afbc097d84dd9c0b4d8ad8b7d504c514ca->enter($__internal_b8e7c9df52b3c2292b4d6a7e9233d0afbc097d84dd9c0b4d8ad8b7d504c514ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8e7c9df52b3c2292b4d6a7e9233d0afbc097d84dd9c0b4d8ad8b7d504c514ca->leave($__internal_b8e7c9df52b3c2292b4d6a7e9233d0afbc097d84dd9c0b4d8ad8b7d504c514ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_929acfd496f67488f96ae64396ee8437fbd0b49d2337668d38058b3a5052636c = $this->env->getExtension("native_profiler");
        $__internal_929acfd496f67488f96ae64396ee8437fbd0b49d2337668d38058b3a5052636c->enter($__internal_929acfd496f67488f96ae64396ee8437fbd0b49d2337668d38058b3a5052636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_929acfd496f67488f96ae64396ee8437fbd0b49d2337668d38058b3a5052636c->leave($__internal_929acfd496f67488f96ae64396ee8437fbd0b49d2337668d38058b3a5052636c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_212455c997ae535a7254d7da4f0557f35b4f09f0c078cf4c1b6dbb72db90fd54 = $this->env->getExtension("native_profiler");
        $__internal_212455c997ae535a7254d7da4f0557f35b4f09f0c078cf4c1b6dbb72db90fd54->enter($__internal_212455c997ae535a7254d7da4f0557f35b4f09f0c078cf4c1b6dbb72db90fd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_212455c997ae535a7254d7da4f0557f35b4f09f0c078cf4c1b6dbb72db90fd54->leave($__internal_212455c997ae535a7254d7da4f0557f35b4f09f0c078cf4c1b6dbb72db90fd54_prof);

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
