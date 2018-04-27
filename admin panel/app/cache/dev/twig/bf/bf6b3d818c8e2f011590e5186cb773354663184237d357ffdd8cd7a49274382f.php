<?php

/* AppBundle:Categories:edit.html.twig */
class __TwigTemplate_d7c8c08be29763618ec8e7f025e9c5596caa37cdd2e8a352bb87ce41d47e6f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Categories:edit.html.twig", 1);
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
        $__internal_d55f5160094b4eee158d603c881bd154cd06954c09c92cae8d2581bf6743c1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55f5160094b4eee158d603c881bd154cd06954c09c92cae8d2581bf6743c1c5->enter($__internal_d55f5160094b4eee158d603c881bd154cd06954c09c92cae8d2581bf6743c1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categories:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55f5160094b4eee158d603c881bd154cd06954c09c92cae8d2581bf6743c1c5->leave($__internal_d55f5160094b4eee158d603c881bd154cd06954c09c92cae8d2581bf6743c1c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8fa58dfdf0406a04d25579e11b9192dfcd604b6c3e1fb87b7be6038eb7bee5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fa58dfdf0406a04d25579e11b9192dfcd604b6c3e1fb87b7be6038eb7bee5b->enter($__internal_a8fa58dfdf0406a04d25579e11b9192dfcd604b6c3e1fb87b7be6038eb7bee5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
    <div class=\"card col-md-offset-1 col-sm-8\">
        <div class=\"card-header\">
            <h1> Edit : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "title", array()), "html", null, true);
        echo "  <small>
            </small></h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "                               
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
                  ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                  ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                </div>
               \t<br>
 \t\t\t\t       ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
</div>
";
        
        $__internal_a8fa58dfdf0406a04d25579e11b9192dfcd604b6c3e1fb87b7be6038eb7bee5b->leave($__internal_a8fa58dfdf0406a04d25579e11b9192dfcd604b6c3e1fb87b7be6038eb7bee5b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categories:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  86 => 23,  80 => 20,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  58 => 13,  53 => 11,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"card col-md-offset-1 col-sm-8\">
        <div class=\"card-header\">
            <h1> Edit : {{ form.vars.value.title}}  <small>
            </small></h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t{{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}                               
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
\t                {{form_errors(form.title)}}
                </div>
                <div class=\"form-group fg-line\">
                  {{form_label(form.description,null,{label_attr:{\"class\":\"\"}})}}
                  {{form_widget(form.description,{attr:{\"class\":\"form-control\"}})}}
                  {{form_errors(form.description)}}
                </div>
               \t<br>
 \t\t\t\t       {{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}} 
            {{ form_end(form) }}
            <br>
            <br>
        </div>
    </div>
</div>
{% endblock %}
", "AppBundle:Categories:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Categories/edit.html.twig");
    }
}
