<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d404e97ad3e90de5277f9a949ead841c194a1f99122f4f4767f20bd5d7399f5b extends Twig_Template
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
        $__internal_b28619bcd56017177660b6a76ab56f524e77e888b22ff58faecb0b3c964b093e = $this->env->getExtension("native_profiler");
        $__internal_b28619bcd56017177660b6a76ab56f524e77e888b22ff58faecb0b3c964b093e->enter($__internal_b28619bcd56017177660b6a76ab56f524e77e888b22ff58faecb0b3c964b093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b28619bcd56017177660b6a76ab56f524e77e888b22ff58faecb0b3c964b093e->leave($__internal_b28619bcd56017177660b6a76ab56f524e77e888b22ff58faecb0b3c964b093e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
