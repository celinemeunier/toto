<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_144d2fec4ccf334f842b1025a9b730715c785457afe2a4539811835c5b6addf1 extends Twig_Template
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
        $__internal_30d1e62fe1f37649c898080583d02ac863322d2814ef9371d55bdec912d06c55 = $this->env->getExtension("native_profiler");
        $__internal_30d1e62fe1f37649c898080583d02ac863322d2814ef9371d55bdec912d06c55->enter($__internal_30d1e62fe1f37649c898080583d02ac863322d2814ef9371d55bdec912d06c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_30d1e62fe1f37649c898080583d02ac863322d2814ef9371d55bdec912d06c55->leave($__internal_30d1e62fe1f37649c898080583d02ac863322d2814ef9371d55bdec912d06c55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
