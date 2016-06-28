<?php

/* PublicationBundle:Default:test.html.twig */
class __TwigTemplate_26b1a3ea9d4d21991a3d81c26e84bc51b2a1012c3479ad71bcb0172390106790 extends Twig_Template
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
        $__internal_b55249ac9b74b3297db23cea7192c036d09a3c288cbd75fb0b14b6190685fff4 = $this->env->getExtension("native_profiler");
        $__internal_b55249ac9b74b3297db23cea7192c036d09a3c288cbd75fb0b14b6190685fff4->enter($__internal_b55249ac9b74b3297db23cea7192c036d09a3c288cbd75fb0b14b6190685fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Default:test.html.twig"));

        // line 1
        echo "<ul>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 3
            echo "<li>";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 5
            echo "<h1>Tableau vide</h1>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
Hello !";
        
        $__internal_b55249ac9b74b3297db23cea7192c036d09a3c288cbd75fb0b14b6190685fff4->leave($__internal_b55249ac9b74b3297db23cea7192c036d09a3c288cbd75fb0b14b6190685fff4_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  38 => 5,  30 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul>*/
/* {% for value in array %}*/
/* <li>{{ value }}</li>*/
/* {% else %}*/
/* <h1>Tableau vide</h1>*/
/* {% endfor %}*/
/* </ul>*/
/* Hello !*/
