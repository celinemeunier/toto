<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_3da072dd30d1675472edf00e003b0e198e2cd21cd514cbec313f0789e27b236f extends Twig_Template
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
        $__internal_ae6a39a6eb9b3ff242740a7e92fa33d492a1a5fad977f60cd7be57c1fd8582ca = $this->env->getExtension("native_profiler");
        $__internal_ae6a39a6eb9b3ff242740a7e92fa33d492a1a5fad977f60cd7be57c1fd8582ca->enter($__internal_ae6a39a6eb9b3ff242740a7e92fa33d492a1a5fad977f60cd7be57c1fd8582ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ae6a39a6eb9b3ff242740a7e92fa33d492a1a5fad977f60cd7be57c1fd8582ca->leave($__internal_ae6a39a6eb9b3ff242740a7e92fa33d492a1a5fad977f60cd7be57c1fd8582ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
