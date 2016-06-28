<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c32d7ecacb14f34783d6fb9a35b0be16501e785aa94258d4e25696512754553f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a6518de827023c3cd86440c2ef6fead7a8605d6672549e6f8fce218b413306f = $this->env->getExtension("native_profiler");
        $__internal_0a6518de827023c3cd86440c2ef6fead7a8605d6672549e6f8fce218b413306f->enter($__internal_0a6518de827023c3cd86440c2ef6fead7a8605d6672549e6f8fce218b413306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0a6518de827023c3cd86440c2ef6fead7a8605d6672549e6f8fce218b413306f->leave($__internal_0a6518de827023c3cd86440c2ef6fead7a8605d6672549e6f8fce218b413306f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
