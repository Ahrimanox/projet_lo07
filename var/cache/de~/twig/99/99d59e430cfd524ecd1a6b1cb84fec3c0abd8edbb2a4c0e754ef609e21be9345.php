<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c01d4292c87d3df44dc61309c6c55f758230d1702f7a630b63e067e57fc27c17 extends Twig_Template
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
        $__internal_adecbd926a8fb3385c27786d5d18035652cf46d2cad8ca60fa2a0fbf50fd44b4 = $this->env->getExtension("native_profiler");
        $__internal_adecbd926a8fb3385c27786d5d18035652cf46d2cad8ca60fa2a0fbf50fd44b4->enter($__internal_adecbd926a8fb3385c27786d5d18035652cf46d2cad8ca60fa2a0fbf50fd44b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_adecbd926a8fb3385c27786d5d18035652cf46d2cad8ca60fa2a0fbf50fd44b4->leave($__internal_adecbd926a8fb3385c27786d5d18035652cf46d2cad8ca60fa2a0fbf50fd44b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
