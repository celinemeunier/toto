<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9467d9592f2bbeeb8c56ef1499c152be87e41e61597fbec04938081e412ddaf extends Twig_Template
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
        $__internal_67ec369492a5cff7d7705632572a22f43eec8e619b19a66899b9117aefd4029e = $this->env->getExtension("native_profiler");
        $__internal_67ec369492a5cff7d7705632572a22f43eec8e619b19a66899b9117aefd4029e->enter($__internal_67ec369492a5cff7d7705632572a22f43eec8e619b19a66899b9117aefd4029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_67ec369492a5cff7d7705632572a22f43eec8e619b19a66899b9117aefd4029e->leave($__internal_67ec369492a5cff7d7705632572a22f43eec8e619b19a66899b9117aefd4029e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
