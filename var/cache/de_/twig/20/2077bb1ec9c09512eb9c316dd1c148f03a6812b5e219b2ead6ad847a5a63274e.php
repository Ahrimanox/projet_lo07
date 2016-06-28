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
        $__internal_2f155eb1f12fee8f0b1d428f5782740ca0bea857cdee610eb20d339348625388 = $this->env->getExtension("native_profiler");
        $__internal_2f155eb1f12fee8f0b1d428f5782740ca0bea857cdee610eb20d339348625388->enter($__internal_2f155eb1f12fee8f0b1d428f5782740ca0bea857cdee610eb20d339348625388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2f155eb1f12fee8f0b1d428f5782740ca0bea857cdee610eb20d339348625388->leave($__internal_2f155eb1f12fee8f0b1d428f5782740ca0bea857cdee610eb20d339348625388_prof);

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
