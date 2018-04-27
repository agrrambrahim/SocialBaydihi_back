<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_973557e9c927cfd99703c027ed030452f299593a4b784f9a3590c5873b67c7d3 extends Twig_Template
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
        $__internal_03c8b2027f512a0ad8b609a1fd69bd4779f6e6512edade7d33de3f9066e01827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c8b2027f512a0ad8b609a1fd69bd4779f6e6512edade7d33de3f9066e01827->enter($__internal_03c8b2027f512a0ad8b609a1fd69bd4779f6e6512edade7d33de3f9066e01827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_03c8b2027f512a0ad8b609a1fd69bd4779f6e6512edade7d33de3f9066e01827->leave($__internal_03c8b2027f512a0ad8b609a1fd69bd4779f6e6512edade7d33de3f9066e01827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
