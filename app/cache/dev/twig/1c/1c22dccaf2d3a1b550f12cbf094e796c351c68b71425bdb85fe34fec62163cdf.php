<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d63ed07dba6395b61991b8eb7d2c8e47bce4b957377235d391430671e400d704 extends Twig_Template
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
        $__internal_366c7d5e232091eb2fa0c3c43e0fa3cb57e4ca40a11e78e8c46bd10ce7416d5a = $this->env->getExtension("native_profiler");
        $__internal_366c7d5e232091eb2fa0c3c43e0fa3cb57e4ca40a11e78e8c46bd10ce7416d5a->enter($__internal_366c7d5e232091eb2fa0c3c43e0fa3cb57e4ca40a11e78e8c46bd10ce7416d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366c7d5e232091eb2fa0c3c43e0fa3cb57e4ca40a11e78e8c46bd10ce7416d5a->leave($__internal_366c7d5e232091eb2fa0c3c43e0fa3cb57e4ca40a11e78e8c46bd10ce7416d5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_484d6f251831b2cd8ed269e0c4e178347e19a1d3b9acaa6efae9259e567f6159 = $this->env->getExtension("native_profiler");
        $__internal_484d6f251831b2cd8ed269e0c4e178347e19a1d3b9acaa6efae9259e567f6159->enter($__internal_484d6f251831b2cd8ed269e0c4e178347e19a1d3b9acaa6efae9259e567f6159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_484d6f251831b2cd8ed269e0c4e178347e19a1d3b9acaa6efae9259e567f6159->leave($__internal_484d6f251831b2cd8ed269e0c4e178347e19a1d3b9acaa6efae9259e567f6159_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0e74143d7167a49c4499fcbeb12b75f110bfa28e42f2d5c2df1d2f74ed3599 = $this->env->getExtension("native_profiler");
        $__internal_cc0e74143d7167a49c4499fcbeb12b75f110bfa28e42f2d5c2df1d2f74ed3599->enter($__internal_cc0e74143d7167a49c4499fcbeb12b75f110bfa28e42f2d5c2df1d2f74ed3599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc0e74143d7167a49c4499fcbeb12b75f110bfa28e42f2d5c2df1d2f74ed3599->leave($__internal_cc0e74143d7167a49c4499fcbeb12b75f110bfa28e42f2d5c2df1d2f74ed3599_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e171b1b58488b0deade008436d288f4b159c46364cbd691f3ff8a26d1f113aef = $this->env->getExtension("native_profiler");
        $__internal_e171b1b58488b0deade008436d288f4b159c46364cbd691f3ff8a26d1f113aef->enter($__internal_e171b1b58488b0deade008436d288f4b159c46364cbd691f3ff8a26d1f113aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e171b1b58488b0deade008436d288f4b159c46364cbd691f3ff8a26d1f113aef->leave($__internal_e171b1b58488b0deade008436d288f4b159c46364cbd691f3ff8a26d1f113aef_prof);

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
