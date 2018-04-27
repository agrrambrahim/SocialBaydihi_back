<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ed9ce574f8bb365b56fb3ebe20927b6b92108746d22188859d33f5c3b25105b9 extends Twig_Template
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
        $__internal_a82cb2b4392e5611fc462fe7661a4aa654ab9052b102a6a7e23b91eff4c8d499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82cb2b4392e5611fc462fe7661a4aa654ab9052b102a6a7e23b91eff4c8d499->enter($__internal_a82cb2b4392e5611fc462fe7661a4aa654ab9052b102a6a7e23b91eff4c8d499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a82cb2b4392e5611fc462fe7661a4aa654ab9052b102a6a7e23b91eff4c8d499->leave($__internal_a82cb2b4392e5611fc462fe7661a4aa654ab9052b102a6a7e23b91eff4c8d499_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
