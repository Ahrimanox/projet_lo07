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
        $__internal_68af73c7040957d41f846c22d741a73a0ea205b54efd74364260f21ae8ddcc27 = $this->env->getExtension("native_profiler");
        $__internal_68af73c7040957d41f846c22d741a73a0ea205b54efd74364260f21ae8ddcc27->enter($__internal_68af73c7040957d41f846c22d741a73a0ea205b54efd74364260f21ae8ddcc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_68af73c7040957d41f846c22d741a73a0ea205b54efd74364260f21ae8ddcc27->leave($__internal_68af73c7040957d41f846c22d741a73a0ea205b54efd74364260f21ae8ddcc27_prof);

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
