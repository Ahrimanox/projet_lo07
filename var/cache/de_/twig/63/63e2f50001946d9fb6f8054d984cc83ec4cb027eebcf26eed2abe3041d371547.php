<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b11b45d7c159c1eeb226f3c884fba7c0e3419552598f508619def77647524029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6659c5adf967e41d5479631d1043f38f8ca14f5cf46c9772ce5e2d23e3006dfc = $this->env->getExtension("native_profiler");
        $__internal_6659c5adf967e41d5479631d1043f38f8ca14f5cf46c9772ce5e2d23e3006dfc->enter($__internal_6659c5adf967e41d5479631d1043f38f8ca14f5cf46c9772ce5e2d23e3006dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6659c5adf967e41d5479631d1043f38f8ca14f5cf46c9772ce5e2d23e3006dfc->leave($__internal_6659c5adf967e41d5479631d1043f38f8ca14f5cf46c9772ce5e2d23e3006dfc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_34308043467a5bb3dd857355222f5a9324677d242e4753c13b9cea05404be448 = $this->env->getExtension("native_profiler");
        $__internal_34308043467a5bb3dd857355222f5a9324677d242e4753c13b9cea05404be448->enter($__internal_34308043467a5bb3dd857355222f5a9324677d242e4753c13b9cea05404be448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_34308043467a5bb3dd857355222f5a9324677d242e4753c13b9cea05404be448->leave($__internal_34308043467a5bb3dd857355222f5a9324677d242e4753c13b9cea05404be448_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
