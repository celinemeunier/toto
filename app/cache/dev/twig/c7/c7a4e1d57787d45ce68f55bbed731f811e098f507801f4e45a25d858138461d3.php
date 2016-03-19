<?php

/* job/new.html.twig */
class __TwigTemplate_a16e3e668d02cdb188fea8feff9794fec3ca0143af64f789d9a786210fa36050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ImieTotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16f02b0a26ea758fbceecfca3d75c99e2d4e612f149fd92ebd02ddaa420ce83f = $this->env->getExtension("native_profiler");
        $__internal_16f02b0a26ea758fbceecfca3d75c99e2d4e612f149fd92ebd02ddaa420ce83f->enter($__internal_16f02b0a26ea758fbceecfca3d75c99e2d4e612f149fd92ebd02ddaa420ce83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f02b0a26ea758fbceecfca3d75c99e2d4e612f149fd92ebd02ddaa420ce83f->leave($__internal_16f02b0a26ea758fbceecfca3d75c99e2d4e612f149fd92ebd02ddaa420ce83f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a1bdf632907a0fdf71db32b4e8f7f8787311fb2cd6ce5bb4471e9b370ca80bc = $this->env->getExtension("native_profiler");
        $__internal_6a1bdf632907a0fdf71db32b4e8f7f8787311fb2cd6ce5bb4471e9b370ca80bc->enter($__internal_6a1bdf632907a0fdf71db32b4e8f7f8787311fb2cd6ce5bb4471e9b370ca80bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a1bdf632907a0fdf71db32b4e8f7f8787311fb2cd6ce5bb4471e9b370ca80bc->leave($__internal_6a1bdf632907a0fdf71db32b4e8f7f8787311fb2cd6ce5bb4471e9b370ca80bc_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
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
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
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
