<?php

/* AppBundle:Applications:delete.html.twig */
class __TwigTemplate_458ea8205b46fcc140af2e4ac902a8fc6c733fb873234c636e6b2b5f099c3e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Applications:delete.html.twig", 1);
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
        $__internal_c0f64556c0fd999e3f4d13f92de33a95d68d8aac1849ce5dce364d6b8aa14f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f64556c0fd999e3f4d13f92de33a95d68d8aac1849ce5dce364d6b8aa14f6f->enter($__internal_c0f64556c0fd999e3f4d13f92de33a95d68d8aac1849ce5dce364d6b8aa14f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Applications:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f64556c0fd999e3f4d13f92de33a95d68d8aac1849ce5dce364d6b8aa14f6f->leave($__internal_c0f64556c0fd999e3f4d13f92de33a95d68d8aac1849ce5dce364d6b8aa14f6f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_841549cdd8f35c9cb55bd651c04084274e088b628b43e5708f492ff51da9926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841549cdd8f35c9cb55bd651c04084274e088b628b43e5708f492ff51da9926c->enter($__internal_841549cdd8f35c9cb55bd651c04084274e088b628b43e5708f492ff51da9926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Do you want to delete this application ?</h1>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_categories_index");
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
        
        $__internal_841549cdd8f35c9cb55bd651c04084274e088b628b43e5708f492ff51da9926c->leave($__internal_841549cdd8f35c9cb55bd651c04084274e088b628b43e5708f492ff51da9926c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Applications:delete.html.twig";
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
            <h1>Do you want to delete this application ?</h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t{{form_start(form)}}
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"{{path(\"app_categories_index\")}}\" class=\"btn btn-raised btn-lg  btn-warning\">No</a>
              {{form_widget(form.Yes,{\"attr\":{\"class\":\"btn btn-lg btn-raised btn-primary\"}})}}
            </div>
        </div>
        <br>
        <br>
\t\t{{form_end(form)}}
\t</div>
</div>
{% endblock %}
", "AppBundle:Applications:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Applications/delete.html.twig");
    }
}
