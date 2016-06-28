<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_278503a4e076cf571e8e16977a9a5c4d5f852baf943e4f030b009145b248418f extends Twig_Template
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
        $__internal_e14806c8f1981bc92b0bcea3f38ea28679fc1509ffe723c126558bf8b1d7a944 = $this->env->getExtension("native_profiler");
        $__internal_e14806c8f1981bc92b0bcea3f38ea28679fc1509ffe723c126558bf8b1d7a944->enter($__internal_e14806c8f1981bc92b0bcea3f38ea28679fc1509ffe723c126558bf8b1d7a944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e14806c8f1981bc92b0bcea3f38ea28679fc1509ffe723c126558bf8b1d7a944->leave($__internal_e14806c8f1981bc92b0bcea3f38ea28679fc1509ffe723c126558bf8b1d7a944_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
