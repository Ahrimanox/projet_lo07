<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7a5d6a96cacaa85bf919c62f35bcef161f9af8cfb5607ecaef467586df03bbd3 extends Twig_Template
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
        $__internal_62374bc34ba0e997f351e35e8c1b2891a2ab54a727b126f55d7941a0ec3ae546 = $this->env->getExtension("native_profiler");
        $__internal_62374bc34ba0e997f351e35e8c1b2891a2ab54a727b126f55d7941a0ec3ae546->enter($__internal_62374bc34ba0e997f351e35e8c1b2891a2ab54a727b126f55d7941a0ec3ae546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_62374bc34ba0e997f351e35e8c1b2891a2ab54a727b126f55d7941a0ec3ae546->leave($__internal_62374bc34ba0e997f351e35e8c1b2891a2ab54a727b126f55d7941a0ec3ae546_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
