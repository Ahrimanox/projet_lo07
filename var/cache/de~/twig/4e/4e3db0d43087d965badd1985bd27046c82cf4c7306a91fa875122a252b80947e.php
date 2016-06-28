<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6bb15e448b05614379befb5313fd16c2adf5a25a739d850bc94bd9b86e769afe extends Twig_Template
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
        $__internal_f6118e727b9adbf0e90b94be44fa853e5ba60819eeb2b06eff434091a19e3c63 = $this->env->getExtension("native_profiler");
        $__internal_f6118e727b9adbf0e90b94be44fa853e5ba60819eeb2b06eff434091a19e3c63->enter($__internal_f6118e727b9adbf0e90b94be44fa853e5ba60819eeb2b06eff434091a19e3c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f6118e727b9adbf0e90b94be44fa853e5ba60819eeb2b06eff434091a19e3c63->leave($__internal_f6118e727b9adbf0e90b94be44fa853e5ba60819eeb2b06eff434091a19e3c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
