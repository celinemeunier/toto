<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1549ab26db59df7b5d354cd093b52a887fc5cf5436284db54136a62f09bcc44b extends Twig_Template
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
        $__internal_e1ebbc69873d820e62f66a93efb932ca201aff6f442d95b6b4ee740092114226 = $this->env->getExtension("native_profiler");
        $__internal_e1ebbc69873d820e62f66a93efb932ca201aff6f442d95b6b4ee740092114226->enter($__internal_e1ebbc69873d820e62f66a93efb932ca201aff6f442d95b6b4ee740092114226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_e1ebbc69873d820e62f66a93efb932ca201aff6f442d95b6b4ee740092114226->leave($__internal_e1ebbc69873d820e62f66a93efb932ca201aff6f442d95b6b4ee740092114226_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
