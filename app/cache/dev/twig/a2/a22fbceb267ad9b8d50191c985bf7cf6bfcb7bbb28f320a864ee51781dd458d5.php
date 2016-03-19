<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_76dbe7d1ea7366dcc72504975f61be5f8d75c718b9b01cb7e51c09e10abcb21e extends Twig_Template
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
        $__internal_0451d63d7402846a42ca01306e0eb7e1c1dbf476b1c78cd0038efeb266122ba3 = $this->env->getExtension("native_profiler");
        $__internal_0451d63d7402846a42ca01306e0eb7e1c1dbf476b1c78cd0038efeb266122ba3->enter($__internal_0451d63d7402846a42ca01306e0eb7e1c1dbf476b1c78cd0038efeb266122ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0451d63d7402846a42ca01306e0eb7e1c1dbf476b1c78cd0038efeb266122ba3->leave($__internal_0451d63d7402846a42ca01306e0eb7e1c1dbf476b1c78cd0038efeb266122ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
