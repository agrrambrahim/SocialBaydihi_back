<?php

/* AppBundle:Guides:finish.html.twig */
class __TwigTemplate_41138f81858cad9f93864ba09e9b71cb90d35940301668cc2e92be310f7b000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:finish.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48296ae3182379ccdecb5a3398d6ecd1e9eb57cc9f7cad380fd1c8c3f43f45a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48296ae3182379ccdecb5a3398d6ecd1e9eb57cc9f7cad380fd1c8c3f43f45a2->enter($__internal_48296ae3182379ccdecb5a3398d6ecd1e9eb57cc9f7cad380fd1c8c3f43f45a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:finish.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48296ae3182379ccdecb5a3398d6ecd1e9eb57cc9f7cad380fd1c8c3f43f45a2->leave($__internal_48296ae3182379ccdecb5a3398d6ecd1e9eb57cc9f7cad380fd1c8c3f43f45a2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80edf3cf9e85c84bf7c243538d896796c697d6c3f8dde80b0c39183938687f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80edf3cf9e85c84bf7c243538d896796c697d6c3f8dde80b0c39183938687f5->enter($__internal_e80edf3cf9e85c84bf7c243538d896796c697d6c3f8dde80b0c39183938687f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
\t
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"row bs-wizard\" style=\"border-bottom:0;padding-top:20px\">
\t\t\t<div class=\"col-xs-4 bs-wizard-step complete\">
\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide infos</div>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-4 bs-wizard-step complete\"><!-- complete -->
\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide steps</div>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-4 bs-wizard-step active \"><!-- complete -->
\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Complete</div>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"card\">
        <div class=\"card-body card-padding\"> 
        <center>
\t\t\t<i class=\"zmdi zmdi-check-circle\" style=\"font-size: 150pt;color: #21668e;\"></i>
\t\t\t<H2 style=\"color: #21668e;\">YOU GUIDE HAS BEEN ADDED</H2>
\t\t\t<h4><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_view", array("id" => $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "id", array()))), "html", null, true);
        echo "\" title=\"\">VIEW THIS GUIDE</a></h4>
        </center>
        </div>
    </div>
</div>

</div>
";
        
        $__internal_e80edf3cf9e85c84bf7c243538d896796c697d6c3f8dde80b0c39183938687f5->leave($__internal_e80edf3cf9e85c84bf7c243538d896796c697d6c3f8dde80b0c39183938687f5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:finish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}

<div class=\"container\">
\t
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"row bs-wizard\" style=\"border-bottom:0;padding-top:20px\">
\t\t\t<div class=\"col-xs-4 bs-wizard-step complete\">
\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide infos</div>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-4 bs-wizard-step complete\"><!-- complete -->
\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide steps</div>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-4 bs-wizard-step active \"><!-- complete -->
\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Complete</div>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"card\">
        <div class=\"card-body card-padding\"> 
        <center>
\t\t\t<i class=\"zmdi zmdi-check-circle\" style=\"font-size: 150pt;color: #21668e;\"></i>
\t\t\t<H2 style=\"color: #21668e;\">YOU GUIDE HAS BEEN ADDED</H2>
\t\t\t<h4><a href=\"{{path(\"app_guides_view\",{id:guide.id})}}\" title=\"\">VIEW THIS GUIDE</a></h4>
        </center>
        </div>
    </div>
</div>

</div>
{% endblock %}", "AppBundle:Guides:finish.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/finish.html.twig");
    }
}
