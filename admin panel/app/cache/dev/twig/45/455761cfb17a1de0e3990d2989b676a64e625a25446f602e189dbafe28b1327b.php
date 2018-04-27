<?php

/* AppBundle:Categories:delete.html.twig */
class __TwigTemplate_60abfd54878d818cc0767c8191307a5595478adf07f6220e1f6b57a91bcba0fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Categories:delete.html.twig", 1);
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
        $__internal_8bd1cef5ba681b10fde8fb27f09ed22b1fd5e5b2f837a80fda9d792636dc179b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd1cef5ba681b10fde8fb27f09ed22b1fd5e5b2f837a80fda9d792636dc179b->enter($__internal_8bd1cef5ba681b10fde8fb27f09ed22b1fd5e5b2f837a80fda9d792636dc179b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categories:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd1cef5ba681b10fde8fb27f09ed22b1fd5e5b2f837a80fda9d792636dc179b->leave($__internal_8bd1cef5ba681b10fde8fb27f09ed22b1fd5e5b2f837a80fda9d792636dc179b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e273294fb6c2cc8d29f3bca1d64934b773bc78a347c5a5c18a53c180584fe43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e273294fb6c2cc8d29f3bca1d64934b773bc78a347c5a5c18a53c180584fe43a->enter($__internal_e273294fb6c2cc8d29f3bca1d64934b773bc78a347c5a5c18a53c180584fe43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Do you want to delete this category ?</h1>
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
        
        $__internal_e273294fb6c2cc8d29f3bca1d64934b773bc78a347c5a5c18a53c180584fe43a->leave($__internal_e273294fb6c2cc8d29f3bca1d64934b773bc78a347c5a5c18a53c180584fe43a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categories:delete.html.twig";
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
            <h1>Do you want to delete this category ?</h1>
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
", "AppBundle:Categories:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Categories/delete.html.twig");
    }
}
