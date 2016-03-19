<?php

/* ImieTotoBundle:Job:show.html.twig */
class __TwigTemplate_af686e9b1d2c301584d6f58ba11c6739f0997fd9dd412d6f528ea9a9a2934520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "ImieTotoBundle:Job:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ImieTotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4fd1b70e9ae518c2fa9df3431b7bbaa9083d8e8c82fd703c734a81717acef71 = $this->env->getExtension("native_profiler");
        $__internal_b4fd1b70e9ae518c2fa9df3431b7bbaa9083d8e8c82fd703c734a81717acef71->enter($__internal_b4fd1b70e9ae518c2fa9df3431b7bbaa9083d8e8c82fd703c734a81717acef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImieTotoBundle:Job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4fd1b70e9ae518c2fa9df3431b7bbaa9083d8e8c82fd703c734a81717acef71->leave($__internal_b4fd1b70e9ae518c2fa9df3431b7bbaa9083d8e8c82fd703c734a81717acef71_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00e251ca3ee12883c7bdcc3b33db6ba4a3b506e7595a354bce20cf66f92aa224 = $this->env->getExtension("native_profiler");
        $__internal_00e251ca3ee12883c7bdcc3b33db6ba4a3b506e7595a354bce20cf66f92aa224->enter($__internal_00e251ca3ee12883c7bdcc3b33db6ba4a3b506e7595a354bce20cf66f92aa224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/css/job.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_00e251ca3ee12883c7bdcc3b33db6ba4a3b506e7595a354bce20cf66f92aa224->leave($__internal_00e251ca3ee12883c7bdcc3b33db6ba4a3b506e7595a354bce20cf66f92aa224_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b16a34363e34a99e3cc2dc4e54ea51d5dad216e8e230b2c59dd1b1cdb6b4e4c = $this->env->getExtension("native_profiler");
        $__internal_7b16a34363e34a99e3cc2dc4e54ea51d5dad216e8e230b2c59dd1b1cdb6b4e4c->enter($__internal_7b16a34363e34a99e3cc2dc4e54ea51d5dad216e8e230b2c59dd1b1cdb6b4e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div id=\"job\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 16
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 17
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\"
                        alt=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 24
        echo "
        <div class=\"description\">
            ";
        // line 26
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
        
        $__internal_7b16a34363e34a99e3cc2dc4e54ea51d5dad216e8e230b2c59dd1b1cdb6b4e4c->leave($__internal_7b16a34363e34a99e3cc2dc4e54ea51d5dad216e8e230b2c59dd1b1cdb6b4e4c_prof);

    }

    public function getTemplateName()
    {
        return "ImieTotoBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  121 => 34,  115 => 31,  107 => 26,  103 => 24,  96 => 20,  92 => 19,  88 => 18,  85 => 17,  83 => 16,  77 => 13,  73 => 12,  68 => 10,  64 => 9,  61 => 8,  55 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/imietoto/css/job.css') }} type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div id="job">*/
/*         <h1>{{ entity.company }}</h1>*/
/*         <h2>{{ entity.location }}</h2>*/
/*         <h3>*/
/*             {{ entity.position }}*/
/*             <small> - {{ entity.type }}</small>*/
/*         </h3>*/
/* */
/*         {% if entity.logo %}*/
/*             <div class="logo">*/
/*                 <a href="{{ entity.url }}">*/
/*                     <img src="/uploads/jobs/{{ entity.logo }}"*/
/*                         alt="{{ entity.company }} logo" />*/
/*                 </a>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="description">*/
/*             {{ entity.description|nl2br }}*/
/*         </div>*/
/* */
/*         <h4>How to apply?</h4>*/
/* */
/*         <p class="how_to_apply">{{ entity.howtoapply }}</p>*/
/* */
/*         <div class="meta">*/
/*             <small>posted on {{ entity.createdat|date('m/d/Y') }}</small>*/
/*         </div>*/
/* */
/*         <div style="padding: 20px 0">*/
/*             <a href="{{ path('imie_job_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
