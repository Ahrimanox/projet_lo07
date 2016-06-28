<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0dd74dd0bf5f9a37d951f85d5cdcc597ebe77ebb519733d4f7da4b7edc911fd5 extends Twig_Template
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
        $__internal_f96ecabbafe41af0d038ce7f4a0cf9e5b4858e52750ff48c4054346219aec40b = $this->env->getExtension("native_profiler");
        $__internal_f96ecabbafe41af0d038ce7f4a0cf9e5b4858e52750ff48c4054346219aec40b->enter($__internal_f96ecabbafe41af0d038ce7f4a0cf9e5b4858e52750ff48c4054346219aec40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f96ecabbafe41af0d038ce7f4a0cf9e5b4858e52750ff48c4054346219aec40b->leave($__internal_f96ecabbafe41af0d038ce7f4a0cf9e5b4858e52750ff48c4054346219aec40b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
