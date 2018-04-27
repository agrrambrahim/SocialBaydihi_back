<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0872dd0ae1e53a570d988accf487a8ad18482f42cc4172cfc8eca0e37d5bdd25 extends Twig_Template
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
        $__internal_df698111b779c7e4dd6b6f2c9a93ee5f7a5588e06a28a9372ec7a0566f1ee231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df698111b779c7e4dd6b6f2c9a93ee5f7a5588e06a28a9372ec7a0566f1ee231->enter($__internal_df698111b779c7e4dd6b6f2c9a93ee5f7a5588e06a28a9372ec7a0566f1ee231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_df698111b779c7e4dd6b6f2c9a93ee5f7a5588e06a28a9372ec7a0566f1ee231->leave($__internal_df698111b779c7e4dd6b6f2c9a93ee5f7a5588e06a28a9372ec7a0566f1ee231_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
