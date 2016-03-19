<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_869013bb5dcd0b263d84e4f667ba84706010d3eedfcf1d3ddb81c974a5fd30b4 extends Twig_Template
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
        $__internal_cf448037505d81048c7679c822ffc1f07fd679f7414f6ca1da7894aa88df162b = $this->env->getExtension("native_profiler");
        $__internal_cf448037505d81048c7679c822ffc1f07fd679f7414f6ca1da7894aa88df162b->enter($__internal_cf448037505d81048c7679c822ffc1f07fd679f7414f6ca1da7894aa88df162b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cf448037505d81048c7679c822ffc1f07fd679f7414f6ca1da7894aa88df162b->leave($__internal_cf448037505d81048c7679c822ffc1f07fd679f7414f6ca1da7894aa88df162b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
