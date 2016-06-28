<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f5bf384ddf78d66bf7bc48b353b57ae612562ccfc785f56563439ad0ac3837b3 extends Twig_Template
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
        $__internal_621479779de996675350748d73b9d1e839f8c9045fb9e11913875fd928da5d69 = $this->env->getExtension("native_profiler");
        $__internal_621479779de996675350748d73b9d1e839f8c9045fb9e11913875fd928da5d69->enter($__internal_621479779de996675350748d73b9d1e839f8c9045fb9e11913875fd928da5d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_621479779de996675350748d73b9d1e839f8c9045fb9e11913875fd928da5d69->leave($__internal_621479779de996675350748d73b9d1e839f8c9045fb9e11913875fd928da5d69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
