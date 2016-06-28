<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0f0c7259d163931f38cf9258f41cc94ef60667a39112a2553527868bf54346ae extends Twig_Template
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
        $__internal_286a951174d86ed1909c1ff0f5c62727243c2954c6715c343466bfd183f64e0c = $this->env->getExtension("native_profiler");
        $__internal_286a951174d86ed1909c1ff0f5c62727243c2954c6715c343466bfd183f64e0c->enter($__internal_286a951174d86ed1909c1ff0f5c62727243c2954c6715c343466bfd183f64e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_286a951174d86ed1909c1ff0f5c62727243c2954c6715c343466bfd183f64e0c->leave($__internal_286a951174d86ed1909c1ff0f5c62727243c2954c6715c343466bfd183f64e0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
