<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f9c7f9dab4b43a7dc13c3ab4c64a6cfda9a3f5712edde1e1269a471dacc911b3 extends Twig_Template
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
        $__internal_b7afbcb05871c8ff6cdde08225367784f8838729a5a42135ce745650528bc015 = $this->env->getExtension("native_profiler");
        $__internal_b7afbcb05871c8ff6cdde08225367784f8838729a5a42135ce745650528bc015->enter($__internal_b7afbcb05871c8ff6cdde08225367784f8838729a5a42135ce745650528bc015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b7afbcb05871c8ff6cdde08225367784f8838729a5a42135ce745650528bc015->leave($__internal_b7afbcb05871c8ff6cdde08225367784f8838729a5a42135ce745650528bc015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
