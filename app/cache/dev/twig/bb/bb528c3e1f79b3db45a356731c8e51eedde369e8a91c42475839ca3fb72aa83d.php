<?php

/* ImieTotoBundle:Job:index.html.twig */
class __TwigTemplate_c5c7e885ce7a3a0aba75db2c9e32f0de5eac3c269064c4956c76297003377fae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "ImieTotoBundle:Job:index.html.twig", 1);
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
        $__internal_8f38f28ea0e24488ce15ffea9d6ca82b299648fbeab28b29941529bcece6714f = $this->env->getExtension("native_profiler");
        $__internal_8f38f28ea0e24488ce15ffea9d6ca82b299648fbeab28b29941529bcece6714f->enter($__internal_8f38f28ea0e24488ce15ffea9d6ca82b299648fbeab28b29941529bcece6714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImieTotoBundle:Job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f38f28ea0e24488ce15ffea9d6ca82b299648fbeab28b29941529bcece6714f->leave($__internal_8f38f28ea0e24488ce15ffea9d6ca82b299648fbeab28b29941529bcece6714f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b022890018820eff7b112eb9503616e06bb7bb86db119ca5d2f91435618d8fa5 = $this->env->getExtension("native_profiler");
        $__internal_b022890018820eff7b112eb9503616e06bb7bb86db119ca5d2f91435618d8fa5->enter($__internal_b022890018820eff7b112eb9503616e06bb7bb86db119ca5d2f91435618d8fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/css/jobs.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_b022890018820eff7b112eb9503616e06bb7bb86db119ca5d2f91435618d8fa5->leave($__internal_b022890018820eff7b112eb9503616e06bb7bb86db119ca5d2f91435618d8fa5_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_498a95759fcdab2d5387021b2499a00b2fa63c65c9d5aea4e708a1117842e215 = $this->env->getExtension("native_profiler");
        $__internal_498a95759fcdab2d5387021b2499a00b2fa63c65c9d5aea4e708a1117842e215->enter($__internal_498a95759fcdab2d5387021b2499a00b2fa63c65c9d5aea4e708a1117842e215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td class=\"company\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
    </div>
";
        
        $__internal_498a95759fcdab2d5387021b2499a00b2fa63c65c9d5aea4e708a1117842e215->leave($__internal_498a95759fcdab2d5387021b2499a00b2fa63c65c9d5aea4e708a1117842e215_prof);

    }

    public function getTemplateName()
    {
        return "ImieTotoBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  102 => 19,  96 => 16,  92 => 15,  87 => 13,  82 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/*   */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/imietoto/css/jobs.css') }} type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         <table class="jobs">*/
/*             {% for entity in entities %}*/
/*                 <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                     <td class="location">{{ entity.location }}</td>*/
/*                     <td class="position">*/
/*                         <a href="{{ path('imie_job_show', { 'id': entity.id }) }}">*/
/*                             {{ entity.position }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td class="company">{{ entity.company }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
