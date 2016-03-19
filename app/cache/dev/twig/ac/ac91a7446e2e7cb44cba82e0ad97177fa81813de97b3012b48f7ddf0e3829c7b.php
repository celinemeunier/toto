<?php

/* :job:index.html.twig */
class __TwigTemplate_948687e1960eea54f017a2dbde4a18d7c67a757690fb9a87247c8e3e34537bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0480f07eec54cfc44bef1d10ff6112e991a2e11d6d098cf25447d4742de022b = $this->env->getExtension("native_profiler");
        $__internal_e0480f07eec54cfc44bef1d10ff6112e991a2e11d6d098cf25447d4742de022b->enter($__internal_e0480f07eec54cfc44bef1d10ff6112e991a2e11d6d098cf25447d4742de022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0480f07eec54cfc44bef1d10ff6112e991a2e11d6d098cf25447d4742de022b->leave($__internal_e0480f07eec54cfc44bef1d10ff6112e991a2e11d6d098cf25447d4742de022b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43e55459e0022601a69f31e51a9d3159d7aa6d2d2075475725a65622223c8605 = $this->env->getExtension("native_profiler");
        $__internal_43e55459e0022601a69f31e51a9d3159d7aa6d2d2075475725a65622223c8605->enter($__internal_43e55459e0022601a69f31e51a9d3159d7aa6d2d2075475725a65622223c8605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Compagny</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>Howtoapply</th>
                <th>Token</th>
                <th>Ispublic</th>
                <th>Isactivated</th>
                <th>Email</th>
                <th>Expiresat</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "compagny", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howToApply", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "token", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["job"], "isPublic", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["job"], "isActivated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["job"], "expiresAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["job"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["job"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_edit", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("imie_job_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_43e55459e0022601a69f31e51a9d3159d7aa6d2d2075475725a65622223c8605->leave($__internal_43e55459e0022601a69f31e51a9d3159d7aa6d2d2075475725a65622223c8605_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  175 => 59,  163 => 53,  157 => 50,  148 => 46,  142 => 45,  136 => 44,  132 => 43,  124 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  74 => 31,  71 => 30,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Type</th>*/
/*                 <th>Compagny</th>*/
/*                 <th>Logo</th>*/
/*                 <th>Url</th>*/
/*                 <th>Position</th>*/
/*                 <th>Location</th>*/
/*                 <th>Description</th>*/
/*                 <th>Howtoapply</th>*/
/*                 <th>Token</th>*/
/*                 <th>Ispublic</th>*/
/*                 <th>Isactivated</th>*/
/*                 <th>Email</th>*/
/*                 <th>Expiresat</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for job in jobs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('imie_job_show', { 'id': job.id }) }}">{{ job.id }}</a></td>*/
/*                 <td>{{ job.type }}</td>*/
/*                 <td>{{ job.compagny }}</td>*/
/*                 <td>{{ job.logo }}</td>*/
/*                 <td>{{ job.url }}</td>*/
/*                 <td>{{ job.position }}</td>*/
/*                 <td>{{ job.location }}</td>*/
/*                 <td>{{ job.description }}</td>*/
/*                 <td>{{ job.howToApply }}</td>*/
/*                 <td>{{ job.token }}</td>*/
/*                 <td>{% if job.isPublic %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if job.isActivated %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ job.email }}</td>*/
/*                 <td>{% if job.expiresAt %}{{ job.expiresAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.createdAt %}{{ job.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.updatedAt %}{{ job.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('imie_job_show', { 'id': job.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('imie_job_edit', { 'id': job.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('imie_job_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
