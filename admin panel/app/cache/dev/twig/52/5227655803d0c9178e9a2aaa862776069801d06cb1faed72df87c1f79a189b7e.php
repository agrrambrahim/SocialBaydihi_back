<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a54aeebc7465ea8d59802cfac7a48a483d2d4e90e6df60dc03b8a5f94316e524 extends Twig_Template
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
        $__internal_f8fafeb82442b031ed764ebb175faeb5f05acfc056d3be3efd718265fe81d052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fafeb82442b031ed764ebb175faeb5f05acfc056d3be3efd718265fe81d052->enter($__internal_f8fafeb82442b031ed764ebb175faeb5f05acfc056d3be3efd718265fe81d052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f8fafeb82442b031ed764ebb175faeb5f05acfc056d3be3efd718265fe81d052->leave($__internal_f8fafeb82442b031ed764ebb175faeb5f05acfc056d3be3efd718265fe81d052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
