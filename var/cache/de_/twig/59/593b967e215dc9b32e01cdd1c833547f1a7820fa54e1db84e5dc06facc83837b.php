<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dfddec2d476cc953d9836b54db6aee8c6e08ade45d60bdc4ca056f4f8d9a9d03 extends Twig_Template
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
        $__internal_147ccbcdb1032159c99cceb713b29eff62609ef8613ae98a2317f576c9db1e79 = $this->env->getExtension("native_profiler");
        $__internal_147ccbcdb1032159c99cceb713b29eff62609ef8613ae98a2317f576c9db1e79->enter($__internal_147ccbcdb1032159c99cceb713b29eff62609ef8613ae98a2317f576c9db1e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_147ccbcdb1032159c99cceb713b29eff62609ef8613ae98a2317f576c9db1e79->leave($__internal_147ccbcdb1032159c99cceb713b29eff62609ef8613ae98a2317f576c9db1e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
