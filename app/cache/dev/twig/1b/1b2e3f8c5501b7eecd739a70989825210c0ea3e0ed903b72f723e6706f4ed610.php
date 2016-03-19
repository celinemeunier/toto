<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bea0b0e443e75e3de2cb3122ed2d8d4c5679afecb339a9eb406e60363263ea13 extends Twig_Template
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
        $__internal_50ab000f884155737c6e8f075710609b4c7d66a9021809aba6c6c6b84d211325 = $this->env->getExtension("native_profiler");
        $__internal_50ab000f884155737c6e8f075710609b4c7d66a9021809aba6c6c6b84d211325->enter($__internal_50ab000f884155737c6e8f075710609b4c7d66a9021809aba6c6c6b84d211325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_50ab000f884155737c6e8f075710609b4c7d66a9021809aba6c6c6b84d211325->leave($__internal_50ab000f884155737c6e8f075710609b4c7d66a9021809aba6c6c6b84d211325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
