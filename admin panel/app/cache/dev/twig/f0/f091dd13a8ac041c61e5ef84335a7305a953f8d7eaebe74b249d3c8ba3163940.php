<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1e6caea2861d056c7ac389095e3248337a785efd08fa1d5219162fd4da8c390b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e7388369759d44ce1bc04fa75518ece3a8ba675ccffcc5e379ef753581e7457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7388369759d44ce1bc04fa75518ece3a8ba675ccffcc5e379ef753581e7457->enter($__internal_4e7388369759d44ce1bc04fa75518ece3a8ba675ccffcc5e379ef753581e7457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7388369759d44ce1bc04fa75518ece3a8ba675ccffcc5e379ef753581e7457->leave($__internal_4e7388369759d44ce1bc04fa75518ece3a8ba675ccffcc5e379ef753581e7457_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d671b5489608f4726e1fc1bbbee589bc6a1c950a7935d5e823608c87a697683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d671b5489608f4726e1fc1bbbee589bc6a1c950a7935d5e823608c87a697683->enter($__internal_7d671b5489608f4726e1fc1bbbee589bc6a1c950a7935d5e823608c87a697683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7d671b5489608f4726e1fc1bbbee589bc6a1c950a7935d5e823608c87a697683->leave($__internal_7d671b5489608f4726e1fc1bbbee589bc6a1c950a7935d5e823608c87a697683_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f14156f5ea9b78cae768cd2d8191beb3d3ff4bb0b524ba4c8753eea21f52b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f14156f5ea9b78cae768cd2d8191beb3d3ff4bb0b524ba4c8753eea21f52b4c->enter($__internal_1f14156f5ea9b78cae768cd2d8191beb3d3ff4bb0b524ba4c8753eea21f52b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1f14156f5ea9b78cae768cd2d8191beb3d3ff4bb0b524ba4c8753eea21f52b4c->leave($__internal_1f14156f5ea9b78cae768cd2d8191beb3d3ff4bb0b524ba4c8753eea21f52b4c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
