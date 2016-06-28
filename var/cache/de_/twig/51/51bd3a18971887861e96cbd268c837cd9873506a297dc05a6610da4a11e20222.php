<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c2dff8949bf996560d8af682ef01cb582934807acefcb7baf4cf345019a46b83 extends Twig_Template
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
        $__internal_64725c09404e62be74a156a577de77e4f00182df42b895326b18fde08b182355 = $this->env->getExtension("native_profiler");
        $__internal_64725c09404e62be74a156a577de77e4f00182df42b895326b18fde08b182355->enter($__internal_64725c09404e62be74a156a577de77e4f00182df42b895326b18fde08b182355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_64725c09404e62be74a156a577de77e4f00182df42b895326b18fde08b182355->leave($__internal_64725c09404e62be74a156a577de77e4f00182df42b895326b18fde08b182355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
