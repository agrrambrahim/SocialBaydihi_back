<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_71d69be382977fc303503228dafc3144fbee2259b1d3f60bf255797ae74fa1c6 extends Twig_Template
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
        $__internal_60ffbfeebecc0e6d1b19bda093c5d9ab36d1a6bf41b4ca3c9b15a8e070e588ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ffbfeebecc0e6d1b19bda093c5d9ab36d1a6bf41b4ca3c9b15a8e070e588ff->enter($__internal_60ffbfeebecc0e6d1b19bda093c5d9ab36d1a6bf41b4ca3c9b15a8e070e588ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_60ffbfeebecc0e6d1b19bda093c5d9ab36d1a6bf41b4ca3c9b15a8e070e588ff->leave($__internal_60ffbfeebecc0e6d1b19bda093c5d9ab36d1a6bf41b4ca3c9b15a8e070e588ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
