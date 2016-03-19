<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8314c5bbe9318511637fdd50e1a0926b0af730e210a575a6fca40066b8ed761f extends Twig_Template
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
        $__internal_552a5ca422d5716b446c71e27495d45b33f609c052f01c54d3db4270f4d3e512 = $this->env->getExtension("native_profiler");
        $__internal_552a5ca422d5716b446c71e27495d45b33f609c052f01c54d3db4270f4d3e512->enter($__internal_552a5ca422d5716b446c71e27495d45b33f609c052f01c54d3db4270f4d3e512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_552a5ca422d5716b446c71e27495d45b33f609c052f01c54d3db4270f4d3e512->leave($__internal_552a5ca422d5716b446c71e27495d45b33f609c052f01c54d3db4270f4d3e512_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
