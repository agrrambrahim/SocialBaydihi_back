<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8271151ddbfec2f1026f631f7c365323ef1d22e563b3ba266e17379f3c4e4ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c06c0092dfcea993d39494ac05ee192987f429a517b5806b527296bcb73f67f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06c0092dfcea993d39494ac05ee192987f429a517b5806b527296bcb73f67f2->enter($__internal_c06c0092dfcea993d39494ac05ee192987f429a517b5806b527296bcb73f67f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06c0092dfcea993d39494ac05ee192987f429a517b5806b527296bcb73f67f2->leave($__internal_c06c0092dfcea993d39494ac05ee192987f429a517b5806b527296bcb73f67f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc1733c3934d25d308a7841f8c64858da7e573ed6ce63f8e662ecd8ebe0a0e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1733c3934d25d308a7841f8c64858da7e573ed6ce63f8e662ecd8ebe0a0e32->enter($__internal_dc1733c3934d25d308a7841f8c64858da7e573ed6ce63f8e662ecd8ebe0a0e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc1733c3934d25d308a7841f8c64858da7e573ed6ce63f8e662ecd8ebe0a0e32->leave($__internal_dc1733c3934d25d308a7841f8c64858da7e573ed6ce63f8e662ecd8ebe0a0e32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_000e7a1b8d26ed2131251e5289fe877e610aff799629a50b57823d658db70d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000e7a1b8d26ed2131251e5289fe877e610aff799629a50b57823d658db70d61->enter($__internal_000e7a1b8d26ed2131251e5289fe877e610aff799629a50b57823d658db70d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_000e7a1b8d26ed2131251e5289fe877e610aff799629a50b57823d658db70d61->leave($__internal_000e7a1b8d26ed2131251e5289fe877e610aff799629a50b57823d658db70d61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aa29e9572253a0d4c4f5b99a717c11192f60553fb16933e54bb0e3188dd5da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa29e9572253a0d4c4f5b99a717c11192f60553fb16933e54bb0e3188dd5da3->enter($__internal_7aa29e9572253a0d4c4f5b99a717c11192f60553fb16933e54bb0e3188dd5da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7aa29e9572253a0d4c4f5b99a717c11192f60553fb16933e54bb0e3188dd5da3->leave($__internal_7aa29e9572253a0d4c4f5b99a717c11192f60553fb16933e54bb0e3188dd5da3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
