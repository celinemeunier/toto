<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_67a96055f5f21b4abde028e2640257d2076c9ec9b02d5543640329909e0fe588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6246bb0d242f5e2a10c6adf6de2f93164b0bd2f4121f5640f392e6befdcb668 = $this->env->getExtension("native_profiler");
        $__internal_b6246bb0d242f5e2a10c6adf6de2f93164b0bd2f4121f5640f392e6befdcb668->enter($__internal_b6246bb0d242f5e2a10c6adf6de2f93164b0bd2f4121f5640f392e6befdcb668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6246bb0d242f5e2a10c6adf6de2f93164b0bd2f4121f5640f392e6befdcb668->leave($__internal_b6246bb0d242f5e2a10c6adf6de2f93164b0bd2f4121f5640f392e6befdcb668_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ffc8c3ae5be7ef8ece33d275e194f1a5f1c35845791f0f15ef3162544712114 = $this->env->getExtension("native_profiler");
        $__internal_7ffc8c3ae5be7ef8ece33d275e194f1a5f1c35845791f0f15ef3162544712114->enter($__internal_7ffc8c3ae5be7ef8ece33d275e194f1a5f1c35845791f0f15ef3162544712114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ffc8c3ae5be7ef8ece33d275e194f1a5f1c35845791f0f15ef3162544712114->leave($__internal_7ffc8c3ae5be7ef8ece33d275e194f1a5f1c35845791f0f15ef3162544712114_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57607992165ffb2a1475074980ab43f2ebe4115f1139f7c29ca2fe6c15c3ca13 = $this->env->getExtension("native_profiler");
        $__internal_57607992165ffb2a1475074980ab43f2ebe4115f1139f7c29ca2fe6c15c3ca13->enter($__internal_57607992165ffb2a1475074980ab43f2ebe4115f1139f7c29ca2fe6c15c3ca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57607992165ffb2a1475074980ab43f2ebe4115f1139f7c29ca2fe6c15c3ca13->leave($__internal_57607992165ffb2a1475074980ab43f2ebe4115f1139f7c29ca2fe6c15c3ca13_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99bb68e2a8fb6079fa2b8507a11380d947fa46069e45c18478b2718c81c20846 = $this->env->getExtension("native_profiler");
        $__internal_99bb68e2a8fb6079fa2b8507a11380d947fa46069e45c18478b2718c81c20846->enter($__internal_99bb68e2a8fb6079fa2b8507a11380d947fa46069e45c18478b2718c81c20846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_99bb68e2a8fb6079fa2b8507a11380d947fa46069e45c18478b2718c81c20846->leave($__internal_99bb68e2a8fb6079fa2b8507a11380d947fa46069e45c18478b2718c81c20846_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
