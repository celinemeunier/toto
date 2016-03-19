<?php

/* ::base.html.twig */
class __TwigTemplate_73b0c2b472ecfd5ba0c950ea9e86a66f4b86a8aecaadc430d2e54556c0ca0613 extends Twig_Template
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
        $__internal_6cb5c547e93811af9860713dec4008be96e71c193447109711041bdd6a960443 = $this->env->getExtension("native_profiler");
        $__internal_6cb5c547e93811af9860713dec4008be96e71c193447109711041bdd6a960443->enter($__internal_6cb5c547e93811af9860713dec4008be96e71c193447109711041bdd6a960443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6cb5c547e93811af9860713dec4008be96e71c193447109711041bdd6a960443->leave($__internal_6cb5c547e93811af9860713dec4008be96e71c193447109711041bdd6a960443_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7241cee0656295cac9c419af0c971f4512b919f349c50858a03d9000c3a8b56 = $this->env->getExtension("native_profiler");
        $__internal_f7241cee0656295cac9c419af0c971f4512b919f349c50858a03d9000c3a8b56->enter($__internal_f7241cee0656295cac9c419af0c971f4512b919f349c50858a03d9000c3a8b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7241cee0656295cac9c419af0c971f4512b919f349c50858a03d9000c3a8b56->leave($__internal_f7241cee0656295cac9c419af0c971f4512b919f349c50858a03d9000c3a8b56_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0f356592c6c3afe61cf6e641c203a03e3c7d31af39b419d393c4c18f961dbdd = $this->env->getExtension("native_profiler");
        $__internal_b0f356592c6c3afe61cf6e641c203a03e3c7d31af39b419d393c4c18f961dbdd->enter($__internal_b0f356592c6c3afe61cf6e641c203a03e3c7d31af39b419d393c4c18f961dbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0f356592c6c3afe61cf6e641c203a03e3c7d31af39b419d393c4c18f961dbdd->leave($__internal_b0f356592c6c3afe61cf6e641c203a03e3c7d31af39b419d393c4c18f961dbdd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_72799e64930ded35a9cfe291ed1364f4ac37b457f85521385f6641415fc2c18a = $this->env->getExtension("native_profiler");
        $__internal_72799e64930ded35a9cfe291ed1364f4ac37b457f85521385f6641415fc2c18a->enter($__internal_72799e64930ded35a9cfe291ed1364f4ac37b457f85521385f6641415fc2c18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72799e64930ded35a9cfe291ed1364f4ac37b457f85521385f6641415fc2c18a->leave($__internal_72799e64930ded35a9cfe291ed1364f4ac37b457f85521385f6641415fc2c18a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c1c09111a41bd4a11de41bd7126180df26c0d4e354f0529fbea87edcd7e5908 = $this->env->getExtension("native_profiler");
        $__internal_6c1c09111a41bd4a11de41bd7126180df26c0d4e354f0529fbea87edcd7e5908->enter($__internal_6c1c09111a41bd4a11de41bd7126180df26c0d4e354f0529fbea87edcd7e5908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c1c09111a41bd4a11de41bd7126180df26c0d4e354f0529fbea87edcd7e5908->leave($__internal_6c1c09111a41bd4a11de41bd7126180df26c0d4e354f0529fbea87edcd7e5908_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
