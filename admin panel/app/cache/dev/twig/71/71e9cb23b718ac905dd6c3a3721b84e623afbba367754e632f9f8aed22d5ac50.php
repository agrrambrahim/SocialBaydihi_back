<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d3b85097e15133e32a3bf95636e1ca7ed1ef42d458f8c8a17cd1c82a7236152a extends Twig_Template
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
        $__internal_c1643a47587b7082d62fe7b572fa10aad18db01a8d86774416fdd0a679dc9b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1643a47587b7082d62fe7b572fa10aad18db01a8d86774416fdd0a679dc9b7c->enter($__internal_c1643a47587b7082d62fe7b572fa10aad18db01a8d86774416fdd0a679dc9b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c1643a47587b7082d62fe7b572fa10aad18db01a8d86774416fdd0a679dc9b7c->leave($__internal_c1643a47587b7082d62fe7b572fa10aad18db01a8d86774416fdd0a679dc9b7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show_content.html.twig");
    }
}
