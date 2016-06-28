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
        $__internal_44be00d466bad163e718d3c91f23b5ca7db2453b8cd2835f8b17f44867eb52d2 = $this->env->getExtension("native_profiler");
        $__internal_44be00d466bad163e718d3c91f23b5ca7db2453b8cd2835f8b17f44867eb52d2->enter($__internal_44be00d466bad163e718d3c91f23b5ca7db2453b8cd2835f8b17f44867eb52d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44be00d466bad163e718d3c91f23b5ca7db2453b8cd2835f8b17f44867eb52d2->leave($__internal_44be00d466bad163e718d3c91f23b5ca7db2453b8cd2835f8b17f44867eb52d2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bb66eec9ee9d645194b07036a088264491689c381dca016d7bec881b41da13b = $this->env->getExtension("native_profiler");
        $__internal_1bb66eec9ee9d645194b07036a088264491689c381dca016d7bec881b41da13b->enter($__internal_1bb66eec9ee9d645194b07036a088264491689c381dca016d7bec881b41da13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1bb66eec9ee9d645194b07036a088264491689c381dca016d7bec881b41da13b->leave($__internal_1bb66eec9ee9d645194b07036a088264491689c381dca016d7bec881b41da13b_prof);

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
