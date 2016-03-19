<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6d359a4c09398f9f170655f667bab2ad46dcc4012c623702aaadcda6fc8f48e4 extends Twig_Template
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
        $__internal_f5c4f98bd9e869b98e91474b862d8fda32624a4bb0a04dd21f44d0262fbf602b = $this->env->getExtension("native_profiler");
        $__internal_f5c4f98bd9e869b98e91474b862d8fda32624a4bb0a04dd21f44d0262fbf602b->enter($__internal_f5c4f98bd9e869b98e91474b862d8fda32624a4bb0a04dd21f44d0262fbf602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f5c4f98bd9e869b98e91474b862d8fda32624a4bb0a04dd21f44d0262fbf602b->leave($__internal_f5c4f98bd9e869b98e91474b862d8fda32624a4bb0a04dd21f44d0262fbf602b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
