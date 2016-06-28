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
        $__internal_909cf864da0b99e983199762ac905e75909609f8d45af06b78243e1cee332704 = $this->env->getExtension("native_profiler");
        $__internal_909cf864da0b99e983199762ac905e75909609f8d45af06b78243e1cee332704->enter($__internal_909cf864da0b99e983199762ac905e75909609f8d45af06b78243e1cee332704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_909cf864da0b99e983199762ac905e75909609f8d45af06b78243e1cee332704->leave($__internal_909cf864da0b99e983199762ac905e75909609f8d45af06b78243e1cee332704_prof);

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
