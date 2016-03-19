<?php

/* :job:new.html.twig */
class __TwigTemplate_30cc601e442612a79d0dadbbfa5ab17ccbfbd6b30dd4ecc817daf2d63d1effea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15535c9032845765e82a166b2fbbc80d613e8b511a9a9e70b794e26d05aa96f2 = $this->env->getExtension("native_profiler");
        $__internal_15535c9032845765e82a166b2fbbc80d613e8b511a9a9e70b794e26d05aa96f2->enter($__internal_15535c9032845765e82a166b2fbbc80d613e8b511a9a9e70b794e26d05aa96f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15535c9032845765e82a166b2fbbc80d613e8b511a9a9e70b794e26d05aa96f2->leave($__internal_15535c9032845765e82a166b2fbbc80d613e8b511a9a9e70b794e26d05aa96f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e458cd10ca2739978803dd15778177864f1fa6e9311779e2d759a0d562976107 = $this->env->getExtension("native_profiler");
        $__internal_e458cd10ca2739978803dd15778177864f1fa6e9311779e2d759a0d562976107->enter($__internal_e458cd10ca2739978803dd15778177864f1fa6e9311779e2d759a0d562976107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("imie_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e458cd10ca2739978803dd15778177864f1fa6e9311779e2d759a0d562976107->leave($__internal_e458cd10ca2739978803dd15778177864f1fa6e9311779e2d759a0d562976107_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('imie_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
