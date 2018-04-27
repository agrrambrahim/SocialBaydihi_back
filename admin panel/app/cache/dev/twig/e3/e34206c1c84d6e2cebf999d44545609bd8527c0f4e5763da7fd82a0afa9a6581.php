<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_dabdb22c00f05be9af08ba991a724d79b2e627ac188f0a3567e1345745285410 extends Twig_Template
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
        $__internal_620ffbf1b83083ca5e87f791b73a1a963567b3dc6a2ffcb0e5754c705e7d38f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620ffbf1b83083ca5e87f791b73a1a963567b3dc6a2ffcb0e5754c705e7d38f1->enter($__internal_620ffbf1b83083ca5e87f791b73a1a963567b3dc6a2ffcb0e5754c705e7d38f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_620ffbf1b83083ca5e87f791b73a1a963567b3dc6a2ffcb0e5754c705e7d38f1->leave($__internal_620ffbf1b83083ca5e87f791b73a1a963567b3dc6a2ffcb0e5754c705e7d38f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
