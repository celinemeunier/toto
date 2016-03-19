<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7ebb7c686cd82be7473e5e5a3799f207cf05d66a4a0ab0201fbfc64d3f427e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_347f857f0929504ea6be47021c90e2d80e041b4321ad5496a6f91a5ab9d14e54 = $this->env->getExtension("native_profiler");
        $__internal_347f857f0929504ea6be47021c90e2d80e041b4321ad5496a6f91a5ab9d14e54->enter($__internal_347f857f0929504ea6be47021c90e2d80e041b4321ad5496a6f91a5ab9d14e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_347f857f0929504ea6be47021c90e2d80e041b4321ad5496a6f91a5ab9d14e54->leave($__internal_347f857f0929504ea6be47021c90e2d80e041b4321ad5496a6f91a5ab9d14e54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_469f2ab37bbc7efd04bcdff7047c0a53863797aaa1755c9b818889986814ff99 = $this->env->getExtension("native_profiler");
        $__internal_469f2ab37bbc7efd04bcdff7047c0a53863797aaa1755c9b818889986814ff99->enter($__internal_469f2ab37bbc7efd04bcdff7047c0a53863797aaa1755c9b818889986814ff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_469f2ab37bbc7efd04bcdff7047c0a53863797aaa1755c9b818889986814ff99->leave($__internal_469f2ab37bbc7efd04bcdff7047c0a53863797aaa1755c9b818889986814ff99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_337ddb8ce1ddf0edda6411f012e0ee9de9d704664dd837ee496c21b76562dd72 = $this->env->getExtension("native_profiler");
        $__internal_337ddb8ce1ddf0edda6411f012e0ee9de9d704664dd837ee496c21b76562dd72->enter($__internal_337ddb8ce1ddf0edda6411f012e0ee9de9d704664dd837ee496c21b76562dd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_337ddb8ce1ddf0edda6411f012e0ee9de9d704664dd837ee496c21b76562dd72->leave($__internal_337ddb8ce1ddf0edda6411f012e0ee9de9d704664dd837ee496c21b76562dd72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52fce4feed459a719d1730939c9641d489d3d4fc133c0402b0d98eaaec11cc15 = $this->env->getExtension("native_profiler");
        $__internal_52fce4feed459a719d1730939c9641d489d3d4fc133c0402b0d98eaaec11cc15->enter($__internal_52fce4feed459a719d1730939c9641d489d3d4fc133c0402b0d98eaaec11cc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52fce4feed459a719d1730939c9641d489d3d4fc133c0402b0d98eaaec11cc15->leave($__internal_52fce4feed459a719d1730939c9641d489d3d4fc133c0402b0d98eaaec11cc15_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
