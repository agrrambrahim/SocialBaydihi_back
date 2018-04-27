<?php

/* AppBundle:Comments:delete.html.twig */
class __TwigTemplate_198709cb4f01ff4ee72ac280fb42b69c65b69ebdd1d1abd142a623603b6d9e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Comments:delete.html.twig", 1);
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
        $__internal_57d633ca73a2a8c6373be648a68097171c0a5fa846866d8d26d71f6f2689756b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d633ca73a2a8c6373be648a68097171c0a5fa846866d8d26d71f6f2689756b->enter($__internal_57d633ca73a2a8c6373be648a68097171c0a5fa846866d8d26d71f6f2689756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Comments:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d633ca73a2a8c6373be648a68097171c0a5fa846866d8d26d71f6f2689756b->leave($__internal_57d633ca73a2a8c6373be648a68097171c0a5fa846866d8d26d71f6f2689756b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0bb4b7ee37b8bc01e2167eaeeb3c926be68d7d418b0a4c3e7bcf83bcee942d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bb4b7ee37b8bc01e2167eaeeb3c926be68d7d418b0a4c3e7bcf83bcee942d2->enter($__internal_c0bb4b7ee37b8bc01e2167eaeeb3c926be68d7d418b0a4c3e7bcf83bcee942d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Do you want to delete this comment ?</h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-raised btn-lg  btn-warning\">No</a>
              ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Yes", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-raised btn-primary")));
        echo "
            </div>
        </div>
        <br>
        <br>
\t\t";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_c0bb4b7ee37b8bc01e2167eaeeb3c926be68d7d418b0a4c3e7bcf83bcee942d2->leave($__internal_c0bb4b7ee37b8bc01e2167eaeeb3c926be68d7d418b0a4c3e7bcf83bcee942d2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Comments:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  58 => 13,  54 => 12,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Do you want to delete this comment ?</h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t{{form_start(form)}}
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"{{app.request.headers.get('referer')}}\" class=\"btn btn-raised btn-lg  btn-warning\">No</a>
              {{form_widget(form.Yes,{\"attr\":{\"class\":\"btn btn-lg btn-raised btn-primary\"}})}}
            </div>
        </div>
        <br>
        <br>
\t\t{{form_end(form)}}
\t</div>
</div>
{% endblock %}
", "AppBundle:Comments:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Comments/delete.html.twig");
    }
}
