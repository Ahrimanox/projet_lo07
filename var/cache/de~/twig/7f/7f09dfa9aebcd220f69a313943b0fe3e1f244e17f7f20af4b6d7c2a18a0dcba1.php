<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2873f494b208145b7f2130610ae325eaf68e7fe245965e7cdbea2f4e9456d8b2 extends Twig_Template
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
        $__internal_24f980ca2b9627ebb6b8d2426bb5b052b0bcae72b46d0f25a1fb7243f48e021d = $this->env->getExtension("native_profiler");
        $__internal_24f980ca2b9627ebb6b8d2426bb5b052b0bcae72b46d0f25a1fb7243f48e021d->enter($__internal_24f980ca2b9627ebb6b8d2426bb5b052b0bcae72b46d0f25a1fb7243f48e021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_24f980ca2b9627ebb6b8d2426bb5b052b0bcae72b46d0f25a1fb7243f48e021d->leave($__internal_24f980ca2b9627ebb6b8d2426bb5b052b0bcae72b46d0f25a1fb7243f48e021d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
