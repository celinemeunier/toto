<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d802a258031d532167ddf46d278aa9d610e3b290527b4dbb9dbfff5cadd76827 extends Twig_Template
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
        $__internal_1bfc828e42451ed41b6b611ee9433f8e5562458923f9fc34701482692f90dc55 = $this->env->getExtension("native_profiler");
        $__internal_1bfc828e42451ed41b6b611ee9433f8e5562458923f9fc34701482692f90dc55->enter($__internal_1bfc828e42451ed41b6b611ee9433f8e5562458923f9fc34701482692f90dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1bfc828e42451ed41b6b611ee9433f8e5562458923f9fc34701482692f90dc55->leave($__internal_1bfc828e42451ed41b6b611ee9433f8e5562458923f9fc34701482692f90dc55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
