<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e78cf0efbaf14069972d44cfe6beb6154bf98763d66b453e0a2ce19d5153ad91 extends Twig_Template
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
        $__internal_83e171c8bdcf4c185841b1d14cfad5e1a7c34e9d3464c1c0709a42ba0dac7e84 = $this->env->getExtension("native_profiler");
        $__internal_83e171c8bdcf4c185841b1d14cfad5e1a7c34e9d3464c1c0709a42ba0dac7e84->enter($__internal_83e171c8bdcf4c185841b1d14cfad5e1a7c34e9d3464c1c0709a42ba0dac7e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_83e171c8bdcf4c185841b1d14cfad5e1a7c34e9d3464c1c0709a42ba0dac7e84->leave($__internal_83e171c8bdcf4c185841b1d14cfad5e1a7c34e9d3464c1c0709a42ba0dac7e84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
