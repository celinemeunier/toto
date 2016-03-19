<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fa0a9de7dc1671b4fcf70b1b18910cf1df4a769d8e44a8a7ec6d906d8fac2cae extends Twig_Template
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
        $__internal_30e0744b519bbd98bca34b5cbd1ba581db5fa252909fcfcb9bab42e9bd159172 = $this->env->getExtension("native_profiler");
        $__internal_30e0744b519bbd98bca34b5cbd1ba581db5fa252909fcfcb9bab42e9bd159172->enter($__internal_30e0744b519bbd98bca34b5cbd1ba581db5fa252909fcfcb9bab42e9bd159172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30e0744b519bbd98bca34b5cbd1ba581db5fa252909fcfcb9bab42e9bd159172->leave($__internal_30e0744b519bbd98bca34b5cbd1ba581db5fa252909fcfcb9bab42e9bd159172_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
