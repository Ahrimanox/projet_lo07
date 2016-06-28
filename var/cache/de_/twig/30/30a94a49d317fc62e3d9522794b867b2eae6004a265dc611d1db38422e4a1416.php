<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fffda222c5d5e19e38ada5ce354876ebb16995f39a78f6f05660d194e7046d77 extends Twig_Template
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
        $__internal_2b3fe6bc52ddcf50de1c8179891e7928abb1df52cbf7ab16af7b0c722a1e09cd = $this->env->getExtension("native_profiler");
        $__internal_2b3fe6bc52ddcf50de1c8179891e7928abb1df52cbf7ab16af7b0c722a1e09cd->enter($__internal_2b3fe6bc52ddcf50de1c8179891e7928abb1df52cbf7ab16af7b0c722a1e09cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2b3fe6bc52ddcf50de1c8179891e7928abb1df52cbf7ab16af7b0c722a1e09cd->leave($__internal_2b3fe6bc52ddcf50de1c8179891e7928abb1df52cbf7ab16af7b0c722a1e09cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
