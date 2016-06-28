<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_632be7135665072e365af165e8fbe678c7d39ca7fe42817e070a18b6fb5cea38 extends Twig_Template
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
        $__internal_7a1362bee8cc18fe42195b540de1e7b41649115fda24d6609e4171ffd1c72bc2 = $this->env->getExtension("native_profiler");
        $__internal_7a1362bee8cc18fe42195b540de1e7b41649115fda24d6609e4171ffd1c72bc2->enter($__internal_7a1362bee8cc18fe42195b540de1e7b41649115fda24d6609e4171ffd1c72bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7a1362bee8cc18fe42195b540de1e7b41649115fda24d6609e4171ffd1c72bc2->leave($__internal_7a1362bee8cc18fe42195b540de1e7b41649115fda24d6609e4171ffd1c72bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
