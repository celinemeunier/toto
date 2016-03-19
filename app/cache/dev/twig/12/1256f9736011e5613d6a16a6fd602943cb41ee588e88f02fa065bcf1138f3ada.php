<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_19ca92d71fdfe26e2f123f342bb3e26ca8de9038d176993efa3394a15e3af479 extends Twig_Template
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
        $__internal_9e587f76f3b17beb25097cebebc2ff02d39d3453af00e7701659458a42bd5680 = $this->env->getExtension("native_profiler");
        $__internal_9e587f76f3b17beb25097cebebc2ff02d39d3453af00e7701659458a42bd5680->enter($__internal_9e587f76f3b17beb25097cebebc2ff02d39d3453af00e7701659458a42bd5680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9e587f76f3b17beb25097cebebc2ff02d39d3453af00e7701659458a42bd5680->leave($__internal_9e587f76f3b17beb25097cebebc2ff02d39d3453af00e7701659458a42bd5680_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
