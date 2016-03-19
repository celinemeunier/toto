<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d1409af5cd9e7d33f4096a5dab96d721d9b8f4df5b32412f9f0f546083b0db8c extends Twig_Template
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
        $__internal_acc630462e17cf1a8da52b2fa37cebefbad36ecc433debf971d3d6654f4667c5 = $this->env->getExtension("native_profiler");
        $__internal_acc630462e17cf1a8da52b2fa37cebefbad36ecc433debf971d3d6654f4667c5->enter($__internal_acc630462e17cf1a8da52b2fa37cebefbad36ecc433debf971d3d6654f4667c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_acc630462e17cf1a8da52b2fa37cebefbad36ecc433debf971d3d6654f4667c5->leave($__internal_acc630462e17cf1a8da52b2fa37cebefbad36ecc433debf971d3d6654f4667c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
