<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_067938c06d02d8ba96388f914ffc00ce361c9cb474d9ae84a8ab788ad2643c28 extends Twig_Template
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
        $__internal_142abbe6f5ab958b1ae0d25443fb16565397ebaca425b1a8cfb854f72012cec2 = $this->env->getExtension("native_profiler");
        $__internal_142abbe6f5ab958b1ae0d25443fb16565397ebaca425b1a8cfb854f72012cec2->enter($__internal_142abbe6f5ab958b1ae0d25443fb16565397ebaca425b1a8cfb854f72012cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_142abbe6f5ab958b1ae0d25443fb16565397ebaca425b1a8cfb854f72012cec2->leave($__internal_142abbe6f5ab958b1ae0d25443fb16565397ebaca425b1a8cfb854f72012cec2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
