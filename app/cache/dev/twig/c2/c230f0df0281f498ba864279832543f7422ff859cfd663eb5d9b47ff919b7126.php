<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5b433293720eb22e0dde209d66aeef8063216324bf80965fb5d60e50da3ff84c extends Twig_Template
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
        $__internal_be7ae739626252f1081fc52dd540b774f50a10dce40da3bacbc0534a39dd3e19 = $this->env->getExtension("native_profiler");
        $__internal_be7ae739626252f1081fc52dd540b774f50a10dce40da3bacbc0534a39dd3e19->enter($__internal_be7ae739626252f1081fc52dd540b774f50a10dce40da3bacbc0534a39dd3e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be7ae739626252f1081fc52dd540b774f50a10dce40da3bacbc0534a39dd3e19->leave($__internal_be7ae739626252f1081fc52dd540b774f50a10dce40da3bacbc0534a39dd3e19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
