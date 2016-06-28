<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fd1e5b00b64af86fff0c6352379dd2dbe58e38f9bb64508e6902a0aa15821dfc extends Twig_Template
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
        $__internal_c529d5ac36e15ac4e3d9310bb3b46e4ea927d7179fa8e9f204b5541278d270e3 = $this->env->getExtension("native_profiler");
        $__internal_c529d5ac36e15ac4e3d9310bb3b46e4ea927d7179fa8e9f204b5541278d270e3->enter($__internal_c529d5ac36e15ac4e3d9310bb3b46e4ea927d7179fa8e9f204b5541278d270e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c529d5ac36e15ac4e3d9310bb3b46e4ea927d7179fa8e9f204b5541278d270e3->leave($__internal_c529d5ac36e15ac4e3d9310bb3b46e4ea927d7179fa8e9f204b5541278d270e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
