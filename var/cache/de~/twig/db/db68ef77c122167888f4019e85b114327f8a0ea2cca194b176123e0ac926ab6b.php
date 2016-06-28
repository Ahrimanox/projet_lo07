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
        $__internal_49c292f9c4e36e9ae126367817f197963ee9c86ca00f983b7aa23542eafafe02 = $this->env->getExtension("native_profiler");
        $__internal_49c292f9c4e36e9ae126367817f197963ee9c86ca00f983b7aa23542eafafe02->enter($__internal_49c292f9c4e36e9ae126367817f197963ee9c86ca00f983b7aa23542eafafe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_49c292f9c4e36e9ae126367817f197963ee9c86ca00f983b7aa23542eafafe02->leave($__internal_49c292f9c4e36e9ae126367817f197963ee9c86ca00f983b7aa23542eafafe02_prof);

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
