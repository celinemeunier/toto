<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b2dd75c73909a2c2c383f686aa3bbf28c3a7f87683daf0f2fcae8142e2bc376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad6f621bbc8dd4ee8cd884f5b806e7ea07c5403293afe65b52cefee96b2c451f = $this->env->getExtension("native_profiler");
        $__internal_ad6f621bbc8dd4ee8cd884f5b806e7ea07c5403293afe65b52cefee96b2c451f->enter($__internal_ad6f621bbc8dd4ee8cd884f5b806e7ea07c5403293afe65b52cefee96b2c451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad6f621bbc8dd4ee8cd884f5b806e7ea07c5403293afe65b52cefee96b2c451f->leave($__internal_ad6f621bbc8dd4ee8cd884f5b806e7ea07c5403293afe65b52cefee96b2c451f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_61a05d7f574cd4f1ce89b2f8376b9612a3d66fe96cc29806ef99dd09c0c8ae25 = $this->env->getExtension("native_profiler");
        $__internal_61a05d7f574cd4f1ce89b2f8376b9612a3d66fe96cc29806ef99dd09c0c8ae25->enter($__internal_61a05d7f574cd4f1ce89b2f8376b9612a3d66fe96cc29806ef99dd09c0c8ae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_61a05d7f574cd4f1ce89b2f8376b9612a3d66fe96cc29806ef99dd09c0c8ae25->leave($__internal_61a05d7f574cd4f1ce89b2f8376b9612a3d66fe96cc29806ef99dd09c0c8ae25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
