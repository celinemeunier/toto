<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_08aabd45e4580f96f9a668227ec4e8fcd523774678f6e89a2a2e4aa7a8deb29e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7515824e5a569780eaa355d01d56591081388e586b9100377f95a0d6844ad1b = $this->env->getExtension("native_profiler");
        $__internal_a7515824e5a569780eaa355d01d56591081388e586b9100377f95a0d6844ad1b->enter($__internal_a7515824e5a569780eaa355d01d56591081388e586b9100377f95a0d6844ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a7515824e5a569780eaa355d01d56591081388e586b9100377f95a0d6844ad1b->leave($__internal_a7515824e5a569780eaa355d01d56591081388e586b9100377f95a0d6844ad1b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23cd1ac51a3ebc5e7da727282c7a65082bd7dbb9f64a1e27cae30c1b3b897ffa = $this->env->getExtension("native_profiler");
        $__internal_23cd1ac51a3ebc5e7da727282c7a65082bd7dbb9f64a1e27cae30c1b3b897ffa->enter($__internal_23cd1ac51a3ebc5e7da727282c7a65082bd7dbb9f64a1e27cae30c1b3b897ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23cd1ac51a3ebc5e7da727282c7a65082bd7dbb9f64a1e27cae30c1b3b897ffa->leave($__internal_23cd1ac51a3ebc5e7da727282c7a65082bd7dbb9f64a1e27cae30c1b3b897ffa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
