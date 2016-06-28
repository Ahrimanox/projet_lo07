<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_301e5b6e5d2be24d923a5de15eedbcc8d7147bc8028b1e8badbba8c776450258 extends Twig_Template
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
        $__internal_fda3316ebbb4f9e6496fabcdb7cccab7a2d66063ce08e1ec5aee0f1f5f37787e = $this->env->getExtension("native_profiler");
        $__internal_fda3316ebbb4f9e6496fabcdb7cccab7a2d66063ce08e1ec5aee0f1f5f37787e->enter($__internal_fda3316ebbb4f9e6496fabcdb7cccab7a2d66063ce08e1ec5aee0f1f5f37787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fda3316ebbb4f9e6496fabcdb7cccab7a2d66063ce08e1ec5aee0f1f5f37787e->leave($__internal_fda3316ebbb4f9e6496fabcdb7cccab7a2d66063ce08e1ec5aee0f1f5f37787e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
