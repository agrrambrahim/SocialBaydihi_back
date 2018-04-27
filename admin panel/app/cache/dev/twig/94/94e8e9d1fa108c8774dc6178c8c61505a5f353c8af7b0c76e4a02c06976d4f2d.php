<?php

/* AppBundle:Guides:delete.html.twig */
class __TwigTemplate_dc42aa908875e4fcc672ab19abc7e5a6ada33a6416be73bd3fa1d99c003afd27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:delete.html.twig", 1);
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
        $__internal_c42190046dd788bafb5b9eebab0e27eb54c2917097f9436eae7cfd55ca718601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42190046dd788bafb5b9eebab0e27eb54c2917097f9436eae7cfd55ca718601->enter($__internal_c42190046dd788bafb5b9eebab0e27eb54c2917097f9436eae7cfd55ca718601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42190046dd788bafb5b9eebab0e27eb54c2917097f9436eae7cfd55ca718601->leave($__internal_c42190046dd788bafb5b9eebab0e27eb54c2917097f9436eae7cfd55ca718601_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_81b521ff320859c7c5149889801f1e31198da932c62d723cc4dc11beb6ecbff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b521ff320859c7c5149889801f1e31198da932c62d723cc4dc11beb6ecbff1->enter($__internal_81b521ff320859c7c5149889801f1e31198da932c62d723cc4dc11beb6ecbff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Do you want to delete this guide ?</h1>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_index");
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
        
        $__internal_81b521ff320859c7c5149889801f1e31198da932c62d723cc4dc11beb6ecbff1->leave($__internal_81b521ff320859c7c5149889801f1e31198da932c62d723cc4dc11beb6ecbff1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:delete.html.twig";
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
            <h1>Do you want to delete this guide ?</h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t{{form_start(form)}}
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"{{path(\"app_guides_index\")}}\" class=\"btn btn-raised btn-lg  btn-warning\">No</a>
              {{form_widget(form.Yes,{\"attr\":{\"class\":\"btn btn-lg btn-raised btn-primary\"}})}}
            </div>
        </div>
        <br>
        <br>
\t\t{{form_end(form)}}
\t</div>
</div>
{% endblock %}
", "AppBundle:Guides:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/delete.html.twig");
    }
}
