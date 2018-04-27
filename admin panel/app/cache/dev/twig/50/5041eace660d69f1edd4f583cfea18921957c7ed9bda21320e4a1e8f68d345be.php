<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8231a4f9aa4d4209c79abce39136b0e2cf472a9652d2ad1d0f13527941874af0 extends Twig_Template
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
        $__internal_b3e0f505d657453ced9afea276095b1570d3922efc642bbe2dee56a2b11cd0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e0f505d657453ced9afea276095b1570d3922efc642bbe2dee56a2b11cd0b8->enter($__internal_b3e0f505d657453ced9afea276095b1570d3922efc642bbe2dee56a2b11cd0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b3e0f505d657453ced9afea276095b1570d3922efc642bbe2dee56a2b11cd0b8->leave($__internal_b3e0f505d657453ced9afea276095b1570d3922efc642bbe2dee56a2b11cd0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
