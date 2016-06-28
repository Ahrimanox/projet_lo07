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
        $__internal_5d5e63a966e8e031c6e493e1babf9ddfa0bf7b2466148f094d49346e13384cfb = $this->env->getExtension("native_profiler");
        $__internal_5d5e63a966e8e031c6e493e1babf9ddfa0bf7b2466148f094d49346e13384cfb->enter($__internal_5d5e63a966e8e031c6e493e1babf9ddfa0bf7b2466148f094d49346e13384cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5d5e63a966e8e031c6e493e1babf9ddfa0bf7b2466148f094d49346e13384cfb->leave($__internal_5d5e63a966e8e031c6e493e1babf9ddfa0bf7b2466148f094d49346e13384cfb_prof);

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
