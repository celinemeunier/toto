<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f08542b0821744c86026f090dedd6d1054b8e00dd485ae672a0cfed2509fde97 extends Twig_Template
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
        $__internal_17a8b5550f8976fdd29a3072e565d05f164c2a1b1c6f94a6820166d5f1f023e8 = $this->env->getExtension("native_profiler");
        $__internal_17a8b5550f8976fdd29a3072e565d05f164c2a1b1c6f94a6820166d5f1f023e8->enter($__internal_17a8b5550f8976fdd29a3072e565d05f164c2a1b1c6f94a6820166d5f1f023e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_17a8b5550f8976fdd29a3072e565d05f164c2a1b1c6f94a6820166d5f1f023e8->leave($__internal_17a8b5550f8976fdd29a3072e565d05f164c2a1b1c6f94a6820166d5f1f023e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
