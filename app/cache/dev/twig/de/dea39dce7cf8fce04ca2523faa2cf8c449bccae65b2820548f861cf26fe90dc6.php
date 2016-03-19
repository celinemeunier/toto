<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_880215e1a7f65e560e2afe4514bf89141336b5e5a65cb999f081b83e3436f95b extends Twig_Template
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
        $__internal_993f23f0d22d129656ea3761ac7fc2d862fa625a02605b613e25c64e657b131b = $this->env->getExtension("native_profiler");
        $__internal_993f23f0d22d129656ea3761ac7fc2d862fa625a02605b613e25c64e657b131b->enter($__internal_993f23f0d22d129656ea3761ac7fc2d862fa625a02605b613e25c64e657b131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_993f23f0d22d129656ea3761ac7fc2d862fa625a02605b613e25c64e657b131b->leave($__internal_993f23f0d22d129656ea3761ac7fc2d862fa625a02605b613e25c64e657b131b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
