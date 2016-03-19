<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_76096ce16068bd338ec16b4f49062f8f9ba1bca26bba03df2216df10789e91d5 extends Twig_Template
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
        $__internal_d6aff7f57b693514ef4df682ef90632af2292fcdde0c935463a11128cd9f0a65 = $this->env->getExtension("native_profiler");
        $__internal_d6aff7f57b693514ef4df682ef90632af2292fcdde0c935463a11128cd9f0a65->enter($__internal_d6aff7f57b693514ef4df682ef90632af2292fcdde0c935463a11128cd9f0a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d6aff7f57b693514ef4df682ef90632af2292fcdde0c935463a11128cd9f0a65->leave($__internal_d6aff7f57b693514ef4df682ef90632af2292fcdde0c935463a11128cd9f0a65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
