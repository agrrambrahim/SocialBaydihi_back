<?php

/* AppBundle:Support:delete.html.twig */
class __TwigTemplate_938b2ce769b8ddb3b374e963e471c5820cc625f347c8339bcda36a6da7732b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:delete.html.twig", 1);
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
        $__internal_54fb839f47a1676b63e80086b15632bf8c6499ecaf882795c3de216666e5841a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fb839f47a1676b63e80086b15632bf8c6499ecaf882795c3de216666e5841a->enter($__internal_54fb839f47a1676b63e80086b15632bf8c6499ecaf882795c3de216666e5841a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Support:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54fb839f47a1676b63e80086b15632bf8c6499ecaf882795c3de216666e5841a->leave($__internal_54fb839f47a1676b63e80086b15632bf8c6499ecaf882795c3de216666e5841a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f2484ec897153c58b9027eec1681e006d34e0f5ab101092430cf25756cc5f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2484ec897153c58b9027eec1681e006d34e0f5ab101092430cf25756cc5f0e->enter($__internal_9f2484ec897153c58b9027eec1681e006d34e0f5ab101092430cf25756cc5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Do you want to delete this message ?</h1>
        </div>
        <div class=\"card-body card-padding\">
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_index");
        echo "\" class=\"btn btn-raised btn-lg  btn-warning\">No</a>
              ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Yes", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-raised btn-primary")));
        echo "
            </div>
        </div>
        <br>
        <br>
    ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_9f2484ec897153c58b9027eec1681e006d34e0f5ab101092430cf25756cc5f0e->leave($__internal_9f2484ec897153c58b9027eec1681e006d34e0f5ab101092430cf25756cc5f0e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Support:delete.html.twig";
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
            <h1>Do you want to delete this message ?</h1>
        </div>
        <div class=\"card-body card-padding\">
    {{form_start(form)}}
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"{{path(\"app_support_index\")}}\" class=\"btn btn-raised btn-lg  btn-warning\">No</a>
              {{form_widget(form.Yes,{\"attr\":{\"class\":\"btn btn-lg btn-raised btn-primary\"}})}}
            </div>
        </div>
        <br>
        <br>
    {{form_end(form)}}
  </div>
</div>
{% endblock %}
", "AppBundle:Support:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Support/delete.html.twig");
    }
}
