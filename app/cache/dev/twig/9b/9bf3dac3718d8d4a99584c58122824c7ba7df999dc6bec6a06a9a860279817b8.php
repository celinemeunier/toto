<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c2c55989c1362a004816590d8f3dcc08ea4876cfbd68f8a42581b6304e049f72 extends Twig_Template
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
        $__internal_6dc7c4093808ce455c3a0d371ee527b9fa9fec62064f52b2906e9748013e2735 = $this->env->getExtension("native_profiler");
        $__internal_6dc7c4093808ce455c3a0d371ee527b9fa9fec62064f52b2906e9748013e2735->enter($__internal_6dc7c4093808ce455c3a0d371ee527b9fa9fec62064f52b2906e9748013e2735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6dc7c4093808ce455c3a0d371ee527b9fa9fec62064f52b2906e9748013e2735->leave($__internal_6dc7c4093808ce455c3a0d371ee527b9fa9fec62064f52b2906e9748013e2735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
