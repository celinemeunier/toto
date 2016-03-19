<?php

/* base.html.twig */
class __TwigTemplate_cfdce9fb3cfe53f95a8b203eeef6a86feb907a93629a23efafa7b1fb2d10fa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d820201f383451bc297fb198528338f0eba8ef8ab03919088ecc3db1854286c = $this->env->getExtension("native_profiler");
        $__internal_1d820201f383451bc297fb198528338f0eba8ef8ab03919088ecc3db1854286c->enter($__internal_1d820201f383451bc297fb198528338f0eba8ef8ab03919088ecc3db1854286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1d820201f383451bc297fb198528338f0eba8ef8ab03919088ecc3db1854286c->leave($__internal_1d820201f383451bc297fb198528338f0eba8ef8ab03919088ecc3db1854286c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba70b87e2a10e609acaa0dd0832cb7d36abd6c33315a4aedb96420524acb45fe = $this->env->getExtension("native_profiler");
        $__internal_ba70b87e2a10e609acaa0dd0832cb7d36abd6c33315a4aedb96420524acb45fe->enter($__internal_ba70b87e2a10e609acaa0dd0832cb7d36abd6c33315a4aedb96420524acb45fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba70b87e2a10e609acaa0dd0832cb7d36abd6c33315a4aedb96420524acb45fe->leave($__internal_ba70b87e2a10e609acaa0dd0832cb7d36abd6c33315a4aedb96420524acb45fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0966eb996246e2245fbf22d6ea943f412864881171534d15060cb163bc976b8 = $this->env->getExtension("native_profiler");
        $__internal_b0966eb996246e2245fbf22d6ea943f412864881171534d15060cb163bc976b8->enter($__internal_b0966eb996246e2245fbf22d6ea943f412864881171534d15060cb163bc976b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0966eb996246e2245fbf22d6ea943f412864881171534d15060cb163bc976b8->leave($__internal_b0966eb996246e2245fbf22d6ea943f412864881171534d15060cb163bc976b8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa54eb4d4af27b1e7b25c269217e50334fc30faef78b1390eedf00d177e3cb68 = $this->env->getExtension("native_profiler");
        $__internal_aa54eb4d4af27b1e7b25c269217e50334fc30faef78b1390eedf00d177e3cb68->enter($__internal_aa54eb4d4af27b1e7b25c269217e50334fc30faef78b1390eedf00d177e3cb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa54eb4d4af27b1e7b25c269217e50334fc30faef78b1390eedf00d177e3cb68->leave($__internal_aa54eb4d4af27b1e7b25c269217e50334fc30faef78b1390eedf00d177e3cb68_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d2ea568ac67e3ba7fc2e045f1db6a0271894e600d22d8b0f0f3379ff64de0b3 = $this->env->getExtension("native_profiler");
        $__internal_9d2ea568ac67e3ba7fc2e045f1db6a0271894e600d22d8b0f0f3379ff64de0b3->enter($__internal_9d2ea568ac67e3ba7fc2e045f1db6a0271894e600d22d8b0f0f3379ff64de0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9d2ea568ac67e3ba7fc2e045f1db6a0271894e600d22d8b0f0f3379ff64de0b3->leave($__internal_9d2ea568ac67e3ba7fc2e045f1db6a0271894e600d22d8b0f0f3379ff64de0b3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
