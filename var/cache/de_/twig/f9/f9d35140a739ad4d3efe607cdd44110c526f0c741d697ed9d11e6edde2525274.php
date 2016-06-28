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
        $__internal_693091c3f0dd021b0d3809182901e8003ad1afb6a70ee1266b33e4ee95dfab20 = $this->env->getExtension("native_profiler");
        $__internal_693091c3f0dd021b0d3809182901e8003ad1afb6a70ee1266b33e4ee95dfab20->enter($__internal_693091c3f0dd021b0d3809182901e8003ad1afb6a70ee1266b33e4ee95dfab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_693091c3f0dd021b0d3809182901e8003ad1afb6a70ee1266b33e4ee95dfab20->leave($__internal_693091c3f0dd021b0d3809182901e8003ad1afb6a70ee1266b33e4ee95dfab20_prof);

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
