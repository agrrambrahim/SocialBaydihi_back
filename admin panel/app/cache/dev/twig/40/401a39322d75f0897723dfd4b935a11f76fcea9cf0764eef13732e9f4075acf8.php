<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_96091557bc0e6fad0a16df0c10383734c028654126de8f6ed5046de37c68dc4f extends Twig_Template
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
        $__internal_5cb1be6e73ab0cf81690d107b3b7e9ff115665533b43700bec798dc11ff779e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb1be6e73ab0cf81690d107b3b7e9ff115665533b43700bec798dc11ff779e2->enter($__internal_5cb1be6e73ab0cf81690d107b3b7e9ff115665533b43700bec798dc11ff779e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5cb1be6e73ab0cf81690d107b3b7e9ff115665533b43700bec798dc11ff779e2->leave($__internal_5cb1be6e73ab0cf81690d107b3b7e9ff115665533b43700bec798dc11ff779e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
