<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_43381e12f8794b41ea49a4bed12eaef3d76d13b45186d4aa010ec6b3e55e5242 extends Twig_Template
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
        $__internal_17af6292653bfd89b90f918a6ae04c81b2e37fcd3cdf510822771e6ab1cfa64f = $this->env->getExtension("native_profiler");
        $__internal_17af6292653bfd89b90f918a6ae04c81b2e37fcd3cdf510822771e6ab1cfa64f->enter($__internal_17af6292653bfd89b90f918a6ae04c81b2e37fcd3cdf510822771e6ab1cfa64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_17af6292653bfd89b90f918a6ae04c81b2e37fcd3cdf510822771e6ab1cfa64f->leave($__internal_17af6292653bfd89b90f918a6ae04c81b2e37fcd3cdf510822771e6ab1cfa64f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
