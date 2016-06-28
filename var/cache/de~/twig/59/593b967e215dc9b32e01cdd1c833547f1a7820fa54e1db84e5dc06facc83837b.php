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
        $__internal_dfda762bc13dbd9bce6d393813756c49629846fa9b024ad47e22e3c9e7a9f958 = $this->env->getExtension("native_profiler");
        $__internal_dfda762bc13dbd9bce6d393813756c49629846fa9b024ad47e22e3c9e7a9f958->enter($__internal_dfda762bc13dbd9bce6d393813756c49629846fa9b024ad47e22e3c9e7a9f958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dfda762bc13dbd9bce6d393813756c49629846fa9b024ad47e22e3c9e7a9f958->leave($__internal_dfda762bc13dbd9bce6d393813756c49629846fa9b024ad47e22e3c9e7a9f958_prof);

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
