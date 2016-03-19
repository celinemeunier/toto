<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7b60f5d6337a2af26610a21b17a9a14ab8f2137fa49b5f574d7aec58903b7778 extends Twig_Template
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
        $__internal_a2ed779feef6f28e782518493d8e88838e9fa6c8d9e459363acec659cc69696e = $this->env->getExtension("native_profiler");
        $__internal_a2ed779feef6f28e782518493d8e88838e9fa6c8d9e459363acec659cc69696e->enter($__internal_a2ed779feef6f28e782518493d8e88838e9fa6c8d9e459363acec659cc69696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a2ed779feef6f28e782518493d8e88838e9fa6c8d9e459363acec659cc69696e->leave($__internal_a2ed779feef6f28e782518493d8e88838e9fa6c8d9e459363acec659cc69696e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
