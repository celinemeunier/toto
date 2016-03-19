<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f4d5748bdda8941233337514f69252e95a7a1bf20bd20d6943b52695f6a95018 extends Twig_Template
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
        $__internal_931265be30734ac68db05e0a5f2d35dc9e5d38f3af76e6353b0e2c58539be1ff = $this->env->getExtension("native_profiler");
        $__internal_931265be30734ac68db05e0a5f2d35dc9e5d38f3af76e6353b0e2c58539be1ff->enter($__internal_931265be30734ac68db05e0a5f2d35dc9e5d38f3af76e6353b0e2c58539be1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_931265be30734ac68db05e0a5f2d35dc9e5d38f3af76e6353b0e2c58539be1ff->leave($__internal_931265be30734ac68db05e0a5f2d35dc9e5d38f3af76e6353b0e2c58539be1ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
