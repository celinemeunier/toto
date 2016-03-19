<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_dcce19078ae691f4c68428bf5a518afb0b6b90fc8d382064caa508c704c8c6b9 extends Twig_Template
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
        $__internal_2db47cc735a8579649aee53a6dbd19ade24a7c8950e0b7e4070b918414f8d13b = $this->env->getExtension("native_profiler");
        $__internal_2db47cc735a8579649aee53a6dbd19ade24a7c8950e0b7e4070b918414f8d13b->enter($__internal_2db47cc735a8579649aee53a6dbd19ade24a7c8950e0b7e4070b918414f8d13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2db47cc735a8579649aee53a6dbd19ade24a7c8950e0b7e4070b918414f8d13b->leave($__internal_2db47cc735a8579649aee53a6dbd19ade24a7c8950e0b7e4070b918414f8d13b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
