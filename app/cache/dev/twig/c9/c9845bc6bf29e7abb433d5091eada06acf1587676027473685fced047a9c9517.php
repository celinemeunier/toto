<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9bf7f85175c5903d45fda84ad911f5a340d6b19d6b3aa58b81305e2b7b927784 extends Twig_Template
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
        $__internal_f4389599f8d701ab82ff560a2ff065d2593360e08d2f33b2f9c7486620f3edf3 = $this->env->getExtension("native_profiler");
        $__internal_f4389599f8d701ab82ff560a2ff065d2593360e08d2f33b2f9c7486620f3edf3->enter($__internal_f4389599f8d701ab82ff560a2ff065d2593360e08d2f33b2f9c7486620f3edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f4389599f8d701ab82ff560a2ff065d2593360e08d2f33b2f9c7486620f3edf3->leave($__internal_f4389599f8d701ab82ff560a2ff065d2593360e08d2f33b2f9c7486620f3edf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
