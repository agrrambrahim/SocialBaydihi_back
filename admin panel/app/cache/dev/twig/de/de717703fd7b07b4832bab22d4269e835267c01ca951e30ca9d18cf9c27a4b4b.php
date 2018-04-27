<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_18b6b2a28de984e45d980e3a5fffb2c4d230b8eafecdf68dafc74497b5b7ed77 extends Twig_Template
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
        $__internal_6f43c21f7357662fb7774ebd307a1dfe45f48aeb3b68a45d74c9844541001368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f43c21f7357662fb7774ebd307a1dfe45f48aeb3b68a45d74c9844541001368->enter($__internal_6f43c21f7357662fb7774ebd307a1dfe45f48aeb3b68a45d74c9844541001368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f43c21f7357662fb7774ebd307a1dfe45f48aeb3b68a45d74c9844541001368->leave($__internal_6f43c21f7357662fb7774ebd307a1dfe45f48aeb3b68a45d74c9844541001368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
