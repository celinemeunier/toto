<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ab9901d1cb72ef102b0db6e8e3e03190145eee333635b20fc9327433371426cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a834466d67c954789558608acc8d31736d16d71b294b5fc42d789d33dbd66430 = $this->env->getExtension("native_profiler");
        $__internal_a834466d67c954789558608acc8d31736d16d71b294b5fc42d789d33dbd66430->enter($__internal_a834466d67c954789558608acc8d31736d16d71b294b5fc42d789d33dbd66430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a834466d67c954789558608acc8d31736d16d71b294b5fc42d789d33dbd66430->leave($__internal_a834466d67c954789558608acc8d31736d16d71b294b5fc42d789d33dbd66430_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b07b45890fa44b8de493017a3c9357699afca35fe737a8b332ed887638a50fc4 = $this->env->getExtension("native_profiler");
        $__internal_b07b45890fa44b8de493017a3c9357699afca35fe737a8b332ed887638a50fc4->enter($__internal_b07b45890fa44b8de493017a3c9357699afca35fe737a8b332ed887638a50fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b07b45890fa44b8de493017a3c9357699afca35fe737a8b332ed887638a50fc4->leave($__internal_b07b45890fa44b8de493017a3c9357699afca35fe737a8b332ed887638a50fc4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_53250d694cf49b743ff4195ab84e5ff6e4af17f104078494a1ad363308d73d7d = $this->env->getExtension("native_profiler");
        $__internal_53250d694cf49b743ff4195ab84e5ff6e4af17f104078494a1ad363308d73d7d->enter($__internal_53250d694cf49b743ff4195ab84e5ff6e4af17f104078494a1ad363308d73d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_53250d694cf49b743ff4195ab84e5ff6e4af17f104078494a1ad363308d73d7d->leave($__internal_53250d694cf49b743ff4195ab84e5ff6e4af17f104078494a1ad363308d73d7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
