<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_31d2c2979458473654b6da2c8273782eeebefe1e6d81e1a31a03fa2a13f19d54 extends Twig_Template
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
        $__internal_6e29888ce70dbe63fd698556466d9840714409bbf39ced0d959fe9c7f4405113 = $this->env->getExtension("native_profiler");
        $__internal_6e29888ce70dbe63fd698556466d9840714409bbf39ced0d959fe9c7f4405113->enter($__internal_6e29888ce70dbe63fd698556466d9840714409bbf39ced0d959fe9c7f4405113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6e29888ce70dbe63fd698556466d9840714409bbf39ced0d959fe9c7f4405113->leave($__internal_6e29888ce70dbe63fd698556466d9840714409bbf39ced0d959fe9c7f4405113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
