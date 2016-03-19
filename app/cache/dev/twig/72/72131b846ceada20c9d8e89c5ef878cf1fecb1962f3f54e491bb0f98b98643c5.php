<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d5b235fa16b93f3218aa404083384684b03a4fdf28d7121f756af7fd11a182d1 extends Twig_Template
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
        $__internal_a1958d49a608882922d54c98eede752fdde89ad13910d741a4ee0fe2529eab80 = $this->env->getExtension("native_profiler");
        $__internal_a1958d49a608882922d54c98eede752fdde89ad13910d741a4ee0fe2529eab80->enter($__internal_a1958d49a608882922d54c98eede752fdde89ad13910d741a4ee0fe2529eab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a1958d49a608882922d54c98eede752fdde89ad13910d741a4ee0fe2529eab80->leave($__internal_a1958d49a608882922d54c98eede752fdde89ad13910d741a4ee0fe2529eab80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
