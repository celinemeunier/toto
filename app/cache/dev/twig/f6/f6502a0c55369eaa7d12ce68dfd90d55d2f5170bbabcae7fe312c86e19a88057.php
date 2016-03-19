<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6a2263e79b4da913d5c1a3b03327f3b8c65e87db71941acac1b666b16c5bd23a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_34a78570e568536e55b7ce75d9bd8e069d402987645cae2407024a9f9ad8c6d8 = $this->env->getExtension("native_profiler");
        $__internal_34a78570e568536e55b7ce75d9bd8e069d402987645cae2407024a9f9ad8c6d8->enter($__internal_34a78570e568536e55b7ce75d9bd8e069d402987645cae2407024a9f9ad8c6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a78570e568536e55b7ce75d9bd8e069d402987645cae2407024a9f9ad8c6d8->leave($__internal_34a78570e568536e55b7ce75d9bd8e069d402987645cae2407024a9f9ad8c6d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d434ca205266bb42a794da03e63e4a2d18bf703e9fe0d078a07009be377183c = $this->env->getExtension("native_profiler");
        $__internal_0d434ca205266bb42a794da03e63e4a2d18bf703e9fe0d078a07009be377183c->enter($__internal_0d434ca205266bb42a794da03e63e4a2d18bf703e9fe0d078a07009be377183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0d434ca205266bb42a794da03e63e4a2d18bf703e9fe0d078a07009be377183c->leave($__internal_0d434ca205266bb42a794da03e63e4a2d18bf703e9fe0d078a07009be377183c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ccb39d4ab01d597ed79cab282620873c540af8f70f0bccd07b74a4c009aa92d = $this->env->getExtension("native_profiler");
        $__internal_1ccb39d4ab01d597ed79cab282620873c540af8f70f0bccd07b74a4c009aa92d->enter($__internal_1ccb39d4ab01d597ed79cab282620873c540af8f70f0bccd07b74a4c009aa92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ccb39d4ab01d597ed79cab282620873c540af8f70f0bccd07b74a4c009aa92d->leave($__internal_1ccb39d4ab01d597ed79cab282620873c540af8f70f0bccd07b74a4c009aa92d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6245948a12a768ca765931f1362e896ce432a5d2041920db9ab7905bec67e44d = $this->env->getExtension("native_profiler");
        $__internal_6245948a12a768ca765931f1362e896ce432a5d2041920db9ab7905bec67e44d->enter($__internal_6245948a12a768ca765931f1362e896ce432a5d2041920db9ab7905bec67e44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6245948a12a768ca765931f1362e896ce432a5d2041920db9ab7905bec67e44d->leave($__internal_6245948a12a768ca765931f1362e896ce432a5d2041920db9ab7905bec67e44d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
