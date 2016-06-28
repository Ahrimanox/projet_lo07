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
        $__internal_d724453958faa06d043c4a71a136142bed00ddb81f7fc21850eb18f40354f5cc = $this->env->getExtension("native_profiler");
        $__internal_d724453958faa06d043c4a71a136142bed00ddb81f7fc21850eb18f40354f5cc->enter($__internal_d724453958faa06d043c4a71a136142bed00ddb81f7fc21850eb18f40354f5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d724453958faa06d043c4a71a136142bed00ddb81f7fc21850eb18f40354f5cc->leave($__internal_d724453958faa06d043c4a71a136142bed00ddb81f7fc21850eb18f40354f5cc_prof);

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
