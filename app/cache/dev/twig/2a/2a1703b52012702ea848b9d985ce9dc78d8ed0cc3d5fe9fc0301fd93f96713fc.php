<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_92ef2e178e24f15e95c1b1ce48a61d0f276f6d8b10af2fb41b454b5e3a72f5c9 extends Twig_Template
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
        $__internal_4177184be5cd459733c188a3822fab2ff0405254b9b7223fbb4faabb9a45ad39 = $this->env->getExtension("native_profiler");
        $__internal_4177184be5cd459733c188a3822fab2ff0405254b9b7223fbb4faabb9a45ad39->enter($__internal_4177184be5cd459733c188a3822fab2ff0405254b9b7223fbb4faabb9a45ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4177184be5cd459733c188a3822fab2ff0405254b9b7223fbb4faabb9a45ad39->leave($__internal_4177184be5cd459733c188a3822fab2ff0405254b9b7223fbb4faabb9a45ad39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
