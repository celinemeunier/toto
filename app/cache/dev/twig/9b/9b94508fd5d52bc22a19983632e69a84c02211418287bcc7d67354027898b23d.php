<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fa2cccaa2a9127367205667263af136b14d26cf6a1c3a8c106928a7569616e92 extends Twig_Template
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
        $__internal_0c0ee18947ec458db5de371667e6c5e05b39c4bf4226e7ba7b5ea2ef9d954e03 = $this->env->getExtension("native_profiler");
        $__internal_0c0ee18947ec458db5de371667e6c5e05b39c4bf4226e7ba7b5ea2ef9d954e03->enter($__internal_0c0ee18947ec458db5de371667e6c5e05b39c4bf4226e7ba7b5ea2ef9d954e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0c0ee18947ec458db5de371667e6c5e05b39c4bf4226e7ba7b5ea2ef9d954e03->leave($__internal_0c0ee18947ec458db5de371667e6c5e05b39c4bf4226e7ba7b5ea2ef9d954e03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
