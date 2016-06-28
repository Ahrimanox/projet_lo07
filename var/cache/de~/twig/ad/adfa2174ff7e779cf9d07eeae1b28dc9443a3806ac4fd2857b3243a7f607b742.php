<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0f0c7259d163931f38cf9258f41cc94ef60667a39112a2553527868bf54346ae extends Twig_Template
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
        $__internal_cc25e4b1436c22ee6477d2891dd4ff5f518819259349b343e9800bc27e503e25 = $this->env->getExtension("native_profiler");
        $__internal_cc25e4b1436c22ee6477d2891dd4ff5f518819259349b343e9800bc27e503e25->enter($__internal_cc25e4b1436c22ee6477d2891dd4ff5f518819259349b343e9800bc27e503e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cc25e4b1436c22ee6477d2891dd4ff5f518819259349b343e9800bc27e503e25->leave($__internal_cc25e4b1436c22ee6477d2891dd4ff5f518819259349b343e9800bc27e503e25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
