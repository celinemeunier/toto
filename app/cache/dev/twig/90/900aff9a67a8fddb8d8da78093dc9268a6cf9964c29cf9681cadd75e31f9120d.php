<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f8019eaa6d4d26c0c9824bedf61a31bf3bcd9fe95916102b72803a7aa4e46f23 extends Twig_Template
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
        $__internal_6c66328002e65f7af36ce735e18a91ae1205e7b964fde7e5a40fa6affd2461c6 = $this->env->getExtension("native_profiler");
        $__internal_6c66328002e65f7af36ce735e18a91ae1205e7b964fde7e5a40fa6affd2461c6->enter($__internal_6c66328002e65f7af36ce735e18a91ae1205e7b964fde7e5a40fa6affd2461c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c66328002e65f7af36ce735e18a91ae1205e7b964fde7e5a40fa6affd2461c6->leave($__internal_6c66328002e65f7af36ce735e18a91ae1205e7b964fde7e5a40fa6affd2461c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
