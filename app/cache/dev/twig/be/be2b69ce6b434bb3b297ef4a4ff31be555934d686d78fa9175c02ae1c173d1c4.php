<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8bc4bf229261e4187de1bfba40d911abaf5e3e2a91fca78bd0c107b6136ec98f extends Twig_Template
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
        $__internal_806ede127faf4b0ccfadf20724c074555bebac8547fbeef932047e0cbd53964a = $this->env->getExtension("native_profiler");
        $__internal_806ede127faf4b0ccfadf20724c074555bebac8547fbeef932047e0cbd53964a->enter($__internal_806ede127faf4b0ccfadf20724c074555bebac8547fbeef932047e0cbd53964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_806ede127faf4b0ccfadf20724c074555bebac8547fbeef932047e0cbd53964a->leave($__internal_806ede127faf4b0ccfadf20724c074555bebac8547fbeef932047e0cbd53964a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
