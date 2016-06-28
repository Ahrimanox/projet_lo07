<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_dbeccce5f2131ac4f74fc558ba8c446889dc66248ca1e285bce811c773ae04fd extends Twig_Template
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
        $__internal_3e4d74df303b16631bbce889ca7ef80f4679023a10d416d19fff1bb0c0f69080 = $this->env->getExtension("native_profiler");
        $__internal_3e4d74df303b16631bbce889ca7ef80f4679023a10d416d19fff1bb0c0f69080->enter($__internal_3e4d74df303b16631bbce889ca7ef80f4679023a10d416d19fff1bb0c0f69080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3e4d74df303b16631bbce889ca7ef80f4679023a10d416d19fff1bb0c0f69080->leave($__internal_3e4d74df303b16631bbce889ca7ef80f4679023a10d416d19fff1bb0c0f69080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
