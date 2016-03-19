<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d5c3e70c2b52a3a02a3199920f95cab59a4bfbea8001434e05defa4579111835 extends Twig_Template
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
        $__internal_534805ddfa58b0f20c55fd40c2cd9aa0615dcc5f673b7fa3cc0675b71c2c42d3 = $this->env->getExtension("native_profiler");
        $__internal_534805ddfa58b0f20c55fd40c2cd9aa0615dcc5f673b7fa3cc0675b71c2c42d3->enter($__internal_534805ddfa58b0f20c55fd40c2cd9aa0615dcc5f673b7fa3cc0675b71c2c42d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_534805ddfa58b0f20c55fd40c2cd9aa0615dcc5f673b7fa3cc0675b71c2c42d3->leave($__internal_534805ddfa58b0f20c55fd40c2cd9aa0615dcc5f673b7fa3cc0675b71c2c42d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
