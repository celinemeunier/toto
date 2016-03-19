<?php

/* job/index.html.twig */
class __TwigTemplate_d3421a156c2a0c510d654abc87501b40324fb5041a5b3aaf487d354f2ee1f2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "job/index.html.twig", 1);
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
        $__internal_a3e0d75459eb7ccf26062ab1f0e7f1a754e1803f1f8b37388f713fd64222c727 = $this->env->getExtension("native_profiler");
        $__internal_a3e0d75459eb7ccf26062ab1f0e7f1a754e1803f1f8b37388f713fd64222c727->enter($__internal_a3e0d75459eb7ccf26062ab1f0e7f1a754e1803f1f8b37388f713fd64222c727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3e0d75459eb7ccf26062ab1f0e7f1a754e1803f1f8b37388f713fd64222c727->leave($__internal_a3e0d75459eb7ccf26062ab1f0e7f1a754e1803f1f8b37388f713fd64222c727_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1388f466114d318ee021004f5642170e8cd5fdd44e1513acdc0b12da30e49a68 = $this->env->getExtension("native_profiler");
        $__internal_1388f466114d318ee021004f5642170e8cd5fdd44e1513acdc0b12da30e49a68->enter($__internal_1388f466114d318ee021004f5642170e8cd5fdd44e1513acdc0b12da30e49a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ImieToto/css/jobs.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_1388f466114d318ee021004f5642170e8cd5fdd44e1513acdc0b12da30e49a68->leave($__internal_1388f466114d318ee021004f5642170e8cd5fdd44e1513acdc0b12da30e49a68_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e34b031b3342b134e5c91d272c10188f3c971a64af2cf72cc325ca418362499 = $this->env->getExtension("native_profiler");
        $__internal_6e34b031b3342b134e5c91d272c10188f3c971a64af2cf72cc325ca418362499->enter($__internal_6e34b031b3342b134e5c91d272c10188f3c971a64af2cf72cc325ca418362499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("erlem_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        
        $__internal_6e34b031b3342b134e5c91d272c10188f3c971a64af2cf72cc325ca418362499->leave($__internal_6e34b031b3342b134e5c91d272c10188f3c971a64af2cf72cc325ca418362499_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
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
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/ImieToto/css/jobs.css') }} type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         <table class="jobs">*/
/*             {% for entity in entities %}*/
/*                 <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                     <td class="location">{{ entity.location }}</td>*/
/*                     <td class="position">*/
/*                         <a href="{{ path('erlem_job_show', { 'id': entity.id }) }}">*/
/*                             {{ entity.position }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td class="company">{{ entity.company }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
