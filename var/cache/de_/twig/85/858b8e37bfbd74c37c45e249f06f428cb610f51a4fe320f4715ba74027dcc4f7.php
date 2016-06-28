<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_14e3ba1ef3a12f7492fae85d9ce7a09c4f64ad4b16f59d305a3cc68642f1a941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf7a6ccc1889962111ee687125343d7e8cc3435ec4a09f5c6dae80e5825bde11 = $this->env->getExtension("native_profiler");
        $__internal_cf7a6ccc1889962111ee687125343d7e8cc3435ec4a09f5c6dae80e5825bde11->enter($__internal_cf7a6ccc1889962111ee687125343d7e8cc3435ec4a09f5c6dae80e5825bde11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7a6ccc1889962111ee687125343d7e8cc3435ec4a09f5c6dae80e5825bde11->leave($__internal_cf7a6ccc1889962111ee687125343d7e8cc3435ec4a09f5c6dae80e5825bde11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36b439e7922e2d4e5e80d0541ab676b7dd87d6ce70a971ea25cc00691934c3c4 = $this->env->getExtension("native_profiler");
        $__internal_36b439e7922e2d4e5e80d0541ab676b7dd87d6ce70a971ea25cc00691934c3c4->enter($__internal_36b439e7922e2d4e5e80d0541ab676b7dd87d6ce70a971ea25cc00691934c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36b439e7922e2d4e5e80d0541ab676b7dd87d6ce70a971ea25cc00691934c3c4->leave($__internal_36b439e7922e2d4e5e80d0541ab676b7dd87d6ce70a971ea25cc00691934c3c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16c2760f3a2ca7db7460e769da44a707bfa4816e2f3fc6411657f11e5df51f2d = $this->env->getExtension("native_profiler");
        $__internal_16c2760f3a2ca7db7460e769da44a707bfa4816e2f3fc6411657f11e5df51f2d->enter($__internal_16c2760f3a2ca7db7460e769da44a707bfa4816e2f3fc6411657f11e5df51f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16c2760f3a2ca7db7460e769da44a707bfa4816e2f3fc6411657f11e5df51f2d->leave($__internal_16c2760f3a2ca7db7460e769da44a707bfa4816e2f3fc6411657f11e5df51f2d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba71ce45ddcd8d4465365be01ed263cec8ddb3b441eedce49710897fee7c229c = $this->env->getExtension("native_profiler");
        $__internal_ba71ce45ddcd8d4465365be01ed263cec8ddb3b441eedce49710897fee7c229c->enter($__internal_ba71ce45ddcd8d4465365be01ed263cec8ddb3b441eedce49710897fee7c229c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ba71ce45ddcd8d4465365be01ed263cec8ddb3b441eedce49710897fee7c229c->leave($__internal_ba71ce45ddcd8d4465365be01ed263cec8ddb3b441eedce49710897fee7c229c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
