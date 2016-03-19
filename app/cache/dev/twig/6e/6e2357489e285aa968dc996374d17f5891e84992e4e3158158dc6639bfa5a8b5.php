<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_be656c0bd7f4978f87d0f1bc5416e8ad0288000e776152c051c675c8ce93f7d4 extends Twig_Template
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
        $__internal_64ca4b72f63ecc4a885dda51b0c55ce15296db85c013612f47e43264c9fa0a73 = $this->env->getExtension("native_profiler");
        $__internal_64ca4b72f63ecc4a885dda51b0c55ce15296db85c013612f47e43264c9fa0a73->enter($__internal_64ca4b72f63ecc4a885dda51b0c55ce15296db85c013612f47e43264c9fa0a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64ca4b72f63ecc4a885dda51b0c55ce15296db85c013612f47e43264c9fa0a73->leave($__internal_64ca4b72f63ecc4a885dda51b0c55ce15296db85c013612f47e43264c9fa0a73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
