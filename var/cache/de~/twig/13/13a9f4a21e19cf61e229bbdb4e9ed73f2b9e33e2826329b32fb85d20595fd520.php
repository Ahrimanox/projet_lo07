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
        $__internal_05cda1bde9d2d2a014503bc58d2320723259b5777e5eed60af246423872ff6e0 = $this->env->getExtension("native_profiler");
        $__internal_05cda1bde9d2d2a014503bc58d2320723259b5777e5eed60af246423872ff6e0->enter($__internal_05cda1bde9d2d2a014503bc58d2320723259b5777e5eed60af246423872ff6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_05cda1bde9d2d2a014503bc58d2320723259b5777e5eed60af246423872ff6e0->leave($__internal_05cda1bde9d2d2a014503bc58d2320723259b5777e5eed60af246423872ff6e0_prof);

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
