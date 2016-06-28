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
        $__internal_d95c963204015c065a2e90a8b7bbca5c7f8f1d66eb021076b39b2eed4bbc6e8a = $this->env->getExtension("native_profiler");
        $__internal_d95c963204015c065a2e90a8b7bbca5c7f8f1d66eb021076b39b2eed4bbc6e8a->enter($__internal_d95c963204015c065a2e90a8b7bbca5c7f8f1d66eb021076b39b2eed4bbc6e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d95c963204015c065a2e90a8b7bbca5c7f8f1d66eb021076b39b2eed4bbc6e8a->leave($__internal_d95c963204015c065a2e90a8b7bbca5c7f8f1d66eb021076b39b2eed4bbc6e8a_prof);

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
