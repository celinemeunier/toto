<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ece62c7f4630c7a09b092e53f0485b717de7ff751551be411a08d715fcfe47ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94208745cc5c7ec4e0126118fd06704ad36e2b685df1389c63b5109678bfa08f = $this->env->getExtension("native_profiler");
        $__internal_94208745cc5c7ec4e0126118fd06704ad36e2b685df1389c63b5109678bfa08f->enter($__internal_94208745cc5c7ec4e0126118fd06704ad36e2b685df1389c63b5109678bfa08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94208745cc5c7ec4e0126118fd06704ad36e2b685df1389c63b5109678bfa08f->leave($__internal_94208745cc5c7ec4e0126118fd06704ad36e2b685df1389c63b5109678bfa08f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aab788c1d11a59daff7dbd90f1e7d308089d9d8a5d0058867fbd61e9768bf58c = $this->env->getExtension("native_profiler");
        $__internal_aab788c1d11a59daff7dbd90f1e7d308089d9d8a5d0058867fbd61e9768bf58c->enter($__internal_aab788c1d11a59daff7dbd90f1e7d308089d9d8a5d0058867fbd61e9768bf58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aab788c1d11a59daff7dbd90f1e7d308089d9d8a5d0058867fbd61e9768bf58c->leave($__internal_aab788c1d11a59daff7dbd90f1e7d308089d9d8a5d0058867fbd61e9768bf58c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_430618f56f18c31043f0fc8267a6f265ff84ee9ad4a25ac9478e606c898b41d5 = $this->env->getExtension("native_profiler");
        $__internal_430618f56f18c31043f0fc8267a6f265ff84ee9ad4a25ac9478e606c898b41d5->enter($__internal_430618f56f18c31043f0fc8267a6f265ff84ee9ad4a25ac9478e606c898b41d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_430618f56f18c31043f0fc8267a6f265ff84ee9ad4a25ac9478e606c898b41d5->leave($__internal_430618f56f18c31043f0fc8267a6f265ff84ee9ad4a25ac9478e606c898b41d5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a386b356c6b4a421800e423c73357de7f8eeeebf9e9badd7e726452da236c6d = $this->env->getExtension("native_profiler");
        $__internal_5a386b356c6b4a421800e423c73357de7f8eeeebf9e9badd7e726452da236c6d->enter($__internal_5a386b356c6b4a421800e423c73357de7f8eeeebf9e9badd7e726452da236c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a386b356c6b4a421800e423c73357de7f8eeeebf9e9badd7e726452da236c6d->leave($__internal_5a386b356c6b4a421800e423c73357de7f8eeeebf9e9badd7e726452da236c6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
