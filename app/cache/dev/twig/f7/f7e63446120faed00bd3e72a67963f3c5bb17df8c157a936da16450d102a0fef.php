<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3e1ac1815da91b4dae7873098dd7a28551af3435534cb427b8e117f6c8916e09 extends Twig_Template
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
        $__internal_80f78b55a4b1e69a56367db71719fba85f1a88795c8157fb1316702f137daa8b = $this->env->getExtension("native_profiler");
        $__internal_80f78b55a4b1e69a56367db71719fba85f1a88795c8157fb1316702f137daa8b->enter($__internal_80f78b55a4b1e69a56367db71719fba85f1a88795c8157fb1316702f137daa8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_80f78b55a4b1e69a56367db71719fba85f1a88795c8157fb1316702f137daa8b->leave($__internal_80f78b55a4b1e69a56367db71719fba85f1a88795c8157fb1316702f137daa8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
