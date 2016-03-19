<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a71810d1fbf4c941c946d18dd63c5fa332e5faf3762a8d2a443cf63ffd6bb022 extends Twig_Template
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
        $__internal_8e89979def924c408bb345b90c0ece483462400b5fe062e97bb9347436f56021 = $this->env->getExtension("native_profiler");
        $__internal_8e89979def924c408bb345b90c0ece483462400b5fe062e97bb9347436f56021->enter($__internal_8e89979def924c408bb345b90c0ece483462400b5fe062e97bb9347436f56021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8e89979def924c408bb345b90c0ece483462400b5fe062e97bb9347436f56021->leave($__internal_8e89979def924c408bb345b90c0ece483462400b5fe062e97bb9347436f56021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
