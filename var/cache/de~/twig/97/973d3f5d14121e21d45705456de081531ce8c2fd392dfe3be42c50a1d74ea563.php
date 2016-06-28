<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e94cb3b9a49dc5559ee57445371b8246c41d4712962104b8ea0ac6321a207570 extends Twig_Template
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
        $__internal_fa6323446b577905052f767974eaaddc95f5266a695151dd0dcad55562e6cc53 = $this->env->getExtension("native_profiler");
        $__internal_fa6323446b577905052f767974eaaddc95f5266a695151dd0dcad55562e6cc53->enter($__internal_fa6323446b577905052f767974eaaddc95f5266a695151dd0dcad55562e6cc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa6323446b577905052f767974eaaddc95f5266a695151dd0dcad55562e6cc53->leave($__internal_fa6323446b577905052f767974eaaddc95f5266a695151dd0dcad55562e6cc53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
