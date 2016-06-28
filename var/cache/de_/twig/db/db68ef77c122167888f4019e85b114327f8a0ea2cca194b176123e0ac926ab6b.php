<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cb3b15ac52c37b379b628ad0ec48459fc4d2aaa0b44b1eb0b39d8c2e64bcd560 extends Twig_Template
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
        $__internal_69d077a2d14204589e6d1b9c7d56b5e4bea2bb2805f592033561ecbb38031c8e = $this->env->getExtension("native_profiler");
        $__internal_69d077a2d14204589e6d1b9c7d56b5e4bea2bb2805f592033561ecbb38031c8e->enter($__internal_69d077a2d14204589e6d1b9c7d56b5e4bea2bb2805f592033561ecbb38031c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_69d077a2d14204589e6d1b9c7d56b5e4bea2bb2805f592033561ecbb38031c8e->leave($__internal_69d077a2d14204589e6d1b9c7d56b5e4bea2bb2805f592033561ecbb38031c8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
