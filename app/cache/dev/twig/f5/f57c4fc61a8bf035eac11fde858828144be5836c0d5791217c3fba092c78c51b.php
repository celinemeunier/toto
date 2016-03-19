<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_42ceac06a0c15a7419a406929e24e9823c5d7ca85c332d56e02902c19dc5e7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5f4b8ca3dbe56131542ac59a3e562943e4566a14f92a8beb576631498c003007 = $this->env->getExtension("native_profiler");
        $__internal_5f4b8ca3dbe56131542ac59a3e562943e4566a14f92a8beb576631498c003007->enter($__internal_5f4b8ca3dbe56131542ac59a3e562943e4566a14f92a8beb576631498c003007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4b8ca3dbe56131542ac59a3e562943e4566a14f92a8beb576631498c003007->leave($__internal_5f4b8ca3dbe56131542ac59a3e562943e4566a14f92a8beb576631498c003007_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b6029e4b84deedc2d393460492fa8077515d339eaf37e5b48444a5f235dc9b1 = $this->env->getExtension("native_profiler");
        $__internal_5b6029e4b84deedc2d393460492fa8077515d339eaf37e5b48444a5f235dc9b1->enter($__internal_5b6029e4b84deedc2d393460492fa8077515d339eaf37e5b48444a5f235dc9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b6029e4b84deedc2d393460492fa8077515d339eaf37e5b48444a5f235dc9b1->leave($__internal_5b6029e4b84deedc2d393460492fa8077515d339eaf37e5b48444a5f235dc9b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4411776c33b9a2282d3e8e6ce0f5d6e3fb4d3ce170bfdb4cbb0c6d8b96418d6 = $this->env->getExtension("native_profiler");
        $__internal_d4411776c33b9a2282d3e8e6ce0f5d6e3fb4d3ce170bfdb4cbb0c6d8b96418d6->enter($__internal_d4411776c33b9a2282d3e8e6ce0f5d6e3fb4d3ce170bfdb4cbb0c6d8b96418d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4411776c33b9a2282d3e8e6ce0f5d6e3fb4d3ce170bfdb4cbb0c6d8b96418d6->leave($__internal_d4411776c33b9a2282d3e8e6ce0f5d6e3fb4d3ce170bfdb4cbb0c6d8b96418d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
