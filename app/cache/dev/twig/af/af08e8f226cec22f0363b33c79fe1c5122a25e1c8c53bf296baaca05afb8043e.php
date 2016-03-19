<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e1605b1e51b89a4a42b6e88d53a5ac32d4731f5a0910d4ecb92fb4f49b974806 extends Twig_Template
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
        $__internal_0994405c781813763ca30062c885f3fdc01acd03ba9a5bc40f804282e6a524f2 = $this->env->getExtension("native_profiler");
        $__internal_0994405c781813763ca30062c885f3fdc01acd03ba9a5bc40f804282e6a524f2->enter($__internal_0994405c781813763ca30062c885f3fdc01acd03ba9a5bc40f804282e6a524f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0994405c781813763ca30062c885f3fdc01acd03ba9a5bc40f804282e6a524f2->leave($__internal_0994405c781813763ca30062c885f3fdc01acd03ba9a5bc40f804282e6a524f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
