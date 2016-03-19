<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9770c725f71d1d19b45119e4fbf00777f3ee907fcd09ec1c5ac9f85bf80a8e7f extends Twig_Template
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
        $__internal_3449850121753242c7b9d15d50e7521f618e6b03637131aacfabe4d3aa49f5fa = $this->env->getExtension("native_profiler");
        $__internal_3449850121753242c7b9d15d50e7521f618e6b03637131aacfabe4d3aa49f5fa->enter($__internal_3449850121753242c7b9d15d50e7521f618e6b03637131aacfabe4d3aa49f5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3449850121753242c7b9d15d50e7521f618e6b03637131aacfabe4d3aa49f5fa->leave($__internal_3449850121753242c7b9d15d50e7521f618e6b03637131aacfabe4d3aa49f5fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
