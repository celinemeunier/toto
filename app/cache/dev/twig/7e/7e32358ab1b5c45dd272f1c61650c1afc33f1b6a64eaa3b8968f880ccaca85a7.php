<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_2a5a5a1c92300c9062293ed52845b866ce1bcd3c46703875856c82088acf1092 extends Twig_Template
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
        $__internal_382b8d7a209faa71c75c7e475e0d563f2cc9b6bbb2f2d528e923d524f60b9446 = $this->env->getExtension("native_profiler");
        $__internal_382b8d7a209faa71c75c7e475e0d563f2cc9b6bbb2f2d528e923d524f60b9446->enter($__internal_382b8d7a209faa71c75c7e475e0d563f2cc9b6bbb2f2d528e923d524f60b9446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_382b8d7a209faa71c75c7e475e0d563f2cc9b6bbb2f2d528e923d524f60b9446->leave($__internal_382b8d7a209faa71c75c7e475e0d563f2cc9b6bbb2f2d528e923d524f60b9446_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
