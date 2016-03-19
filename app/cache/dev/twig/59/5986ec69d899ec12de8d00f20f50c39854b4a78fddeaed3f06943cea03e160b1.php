<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_764912e7f0d27d889b31f2ca016fa394d04cb96286a93bac47737c3132a2f334 extends Twig_Template
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
        $__internal_62f74bb9eb0fbe875c4ece9186132e715ebe5cd7385ae8ffe82ac6426e0c8f5c = $this->env->getExtension("native_profiler");
        $__internal_62f74bb9eb0fbe875c4ece9186132e715ebe5cd7385ae8ffe82ac6426e0c8f5c->enter($__internal_62f74bb9eb0fbe875c4ece9186132e715ebe5cd7385ae8ffe82ac6426e0c8f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_62f74bb9eb0fbe875c4ece9186132e715ebe5cd7385ae8ffe82ac6426e0c8f5c->leave($__internal_62f74bb9eb0fbe875c4ece9186132e715ebe5cd7385ae8ffe82ac6426e0c8f5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
