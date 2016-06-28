<?php

/* @Publication/Default/test.html.twig */
class __TwigTemplate_7e7ac26b3729772b441a2509045a0c8ffa06f19811ae247ce7ecb45b5f71ae65 extends Twig_Template
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
        $__internal_116a9b58ea63736ba8e7a2adb6a963085e801e62b65ba4dfa69dc3f0dbf7fc1d = $this->env->getExtension("native_profiler");
        $__internal_116a9b58ea63736ba8e7a2adb6a963085e801e62b65ba4dfa69dc3f0dbf7fc1d->enter($__internal_116a9b58ea63736ba8e7a2adb6a963085e801e62b65ba4dfa69dc3f0dbf7fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Publication/Default/test.html.twig"));

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
        
        $__internal_116a9b58ea63736ba8e7a2adb6a963085e801e62b65ba4dfa69dc3f0dbf7fc1d->leave($__internal_116a9b58ea63736ba8e7a2adb6a963085e801e62b65ba4dfa69dc3f0dbf7fc1d_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Default/test.html.twig";
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
