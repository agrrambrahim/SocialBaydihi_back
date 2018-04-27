<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f73aa2257d0050e009345e99cc8b7574b608861736b0f8f666f0976ddaac3479 extends Twig_Template
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
        $__internal_b23bd25183a634efafa86bef39e05bb7ae234b8be2d956a38aea44ccb6be380b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23bd25183a634efafa86bef39e05bb7ae234b8be2d956a38aea44ccb6be380b->enter($__internal_b23bd25183a634efafa86bef39e05bb7ae234b8be2d956a38aea44ccb6be380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b23bd25183a634efafa86bef39e05bb7ae234b8be2d956a38aea44ccb6be380b->leave($__internal_b23bd25183a634efafa86bef39e05bb7ae234b8be2d956a38aea44ccb6be380b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
