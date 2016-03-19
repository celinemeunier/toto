<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1bd280f39f97b206c945a9e48246dfefc056c64854e4be7340d5854bd75321fb extends Twig_Template
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
        $__internal_0b7eaeb1d37ecbb88b212c0ccf8d0e48c58304bd3c82db449a7911f6699d17bb = $this->env->getExtension("native_profiler");
        $__internal_0b7eaeb1d37ecbb88b212c0ccf8d0e48c58304bd3c82db449a7911f6699d17bb->enter($__internal_0b7eaeb1d37ecbb88b212c0ccf8d0e48c58304bd3c82db449a7911f6699d17bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0b7eaeb1d37ecbb88b212c0ccf8d0e48c58304bd3c82db449a7911f6699d17bb->leave($__internal_0b7eaeb1d37ecbb88b212c0ccf8d0e48c58304bd3c82db449a7911f6699d17bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
