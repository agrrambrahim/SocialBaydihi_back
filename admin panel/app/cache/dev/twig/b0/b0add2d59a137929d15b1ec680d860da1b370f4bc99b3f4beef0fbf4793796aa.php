<?php

/* ::base.html.twig */
class __TwigTemplate_3154969f59c1e02fbcda01b9d119e41bb27b9775b50580310181e4c435bfdc9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f50ffa79050ca75b3afa3cb5befaff0dcac2a65ce37d944154fff864bd92a514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50ffa79050ca75b3afa3cb5befaff0dcac2a65ce37d944154fff864bd92a514->enter($__internal_f50ffa79050ca75b3afa3cb5befaff0dcac2a65ce37d944154fff864bd92a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f50ffa79050ca75b3afa3cb5befaff0dcac2a65ce37d944154fff864bd92a514->leave($__internal_f50ffa79050ca75b3afa3cb5befaff0dcac2a65ce37d944154fff864bd92a514_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2198e6b8b29371625efe9098fa81337e29d7b6086e7609b0597a985d8ef3af42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2198e6b8b29371625efe9098fa81337e29d7b6086e7609b0597a985d8ef3af42->enter($__internal_2198e6b8b29371625efe9098fa81337e29d7b6086e7609b0597a985d8ef3af42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2198e6b8b29371625efe9098fa81337e29d7b6086e7609b0597a985d8ef3af42->leave($__internal_2198e6b8b29371625efe9098fa81337e29d7b6086e7609b0597a985d8ef3af42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3527a82c99a5adc7ee0bef6dec81f19ab8d6845325bb09c9d07e9e229bf220f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527a82c99a5adc7ee0bef6dec81f19ab8d6845325bb09c9d07e9e229bf220f9->enter($__internal_3527a82c99a5adc7ee0bef6dec81f19ab8d6845325bb09c9d07e9e229bf220f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3527a82c99a5adc7ee0bef6dec81f19ab8d6845325bb09c9d07e9e229bf220f9->leave($__internal_3527a82c99a5adc7ee0bef6dec81f19ab8d6845325bb09c9d07e9e229bf220f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f86fbfbd42ea043d5264dfe79ddb626e527a8270a5ab4b55bc983e2df93fa7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86fbfbd42ea043d5264dfe79ddb626e527a8270a5ab4b55bc983e2df93fa7a6->enter($__internal_f86fbfbd42ea043d5264dfe79ddb626e527a8270a5ab4b55bc983e2df93fa7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f86fbfbd42ea043d5264dfe79ddb626e527a8270a5ab4b55bc983e2df93fa7a6->leave($__internal_f86fbfbd42ea043d5264dfe79ddb626e527a8270a5ab4b55bc983e2df93fa7a6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc90cc22c4796248cbba2f60eb8ea071334a417d0892bc69ac22e985f618d38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc90cc22c4796248cbba2f60eb8ea071334a417d0892bc69ac22e985f618d38b->enter($__internal_cc90cc22c4796248cbba2f60eb8ea071334a417d0892bc69ac22e985f618d38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cc90cc22c4796248cbba2f60eb8ea071334a417d0892bc69ac22e985f618d38b->leave($__internal_cc90cc22c4796248cbba2f60eb8ea071334a417d0892bc69ac22e985f618d38b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/app/Resources/views/base.html.twig");
    }
}
