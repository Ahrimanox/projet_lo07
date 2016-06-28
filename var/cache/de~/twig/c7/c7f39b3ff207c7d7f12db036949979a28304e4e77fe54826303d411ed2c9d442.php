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
        $__internal_e263f4234cbbf3e5e4deac2119a07906c176580c7e5cad5a7a24ab7896f3226d = $this->env->getExtension("native_profiler");
        $__internal_e263f4234cbbf3e5e4deac2119a07906c176580c7e5cad5a7a24ab7896f3226d->enter($__internal_e263f4234cbbf3e5e4deac2119a07906c176580c7e5cad5a7a24ab7896f3226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e263f4234cbbf3e5e4deac2119a07906c176580c7e5cad5a7a24ab7896f3226d->leave($__internal_e263f4234cbbf3e5e4deac2119a07906c176580c7e5cad5a7a24ab7896f3226d_prof);

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
