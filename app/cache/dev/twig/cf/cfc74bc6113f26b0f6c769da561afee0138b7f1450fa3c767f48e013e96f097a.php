<?php

/* job/show.html.twig */
class __TwigTemplate_f3fe09130100e7c73d7ef3cf035bd70c59e4f0a0b3a6a1ce65f0524c848cd57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "job/show.html.twig", 1);
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
        $__internal_e2681589808fe81722c7fcec2100a3c5ed833b1e5d6888432073a7ae0fd72d3c = $this->env->getExtension("native_profiler");
        $__internal_e2681589808fe81722c7fcec2100a3c5ed833b1e5d6888432073a7ae0fd72d3c->enter($__internal_e2681589808fe81722c7fcec2100a3c5ed833b1e5d6888432073a7ae0fd72d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2681589808fe81722c7fcec2100a3c5ed833b1e5d6888432073a7ae0fd72d3c->leave($__internal_e2681589808fe81722c7fcec2100a3c5ed833b1e5d6888432073a7ae0fd72d3c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eaf266d9ade3508d300594c15d14b120a91951e83799eb0997843051c20c4150 = $this->env->getExtension("native_profiler");
        $__internal_eaf266d9ade3508d300594c15d14b120a91951e83799eb0997843051c20c4150->enter($__internal_eaf266d9ade3508d300594c15d14b120a91951e83799eb0997843051c20c4150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ImieToto/css/job.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_eaf266d9ade3508d300594c15d14b120a91951e83799eb0997843051c20c4150->leave($__internal_eaf266d9ade3508d300594c15d14b120a91951e83799eb0997843051c20c4150_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd8b34438f22175f3a08ebc9b0a840bf6f6b992ff95c979e8c3464d6151a8063 = $this->env->getExtension("native_profiler");
        $__internal_bd8b34438f22175f3a08ebc9b0a840bf6f6b992ff95c979e8c3464d6151a8063->enter($__internal_bd8b34438f22175f3a08ebc9b0a840bf6f6b992ff95c979e8c3464d6151a8063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"job\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 17
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 18
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\"
                        alt=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 25
        echo "
        <div class=\"description\">
            ";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("erlem_job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
        
        $__internal_bd8b34438f22175f3a08ebc9b0a840bf6f6b992ff95c979e8c3464d6151a8063->leave($__internal_bd8b34438f22175f3a08ebc9b0a840bf6f6b992ff95c979e8c3464d6151a8063_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  121 => 35,  115 => 32,  107 => 27,  103 => 25,  96 => 21,  92 => 20,  88 => 19,  85 => 18,  83 => 17,  77 => 14,  73 => 13,  68 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/ImieToto/css/job.css') }} type="text/css" media="all" />*/
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
/*             <a href="{{ path('erlem_job_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
