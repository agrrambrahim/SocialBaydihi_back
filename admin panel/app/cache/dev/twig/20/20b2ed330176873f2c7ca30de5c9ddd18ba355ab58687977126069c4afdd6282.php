<?php

/* AppBundle:Categories:add.html.twig */
class __TwigTemplate_9166079b0fbbc26b6bd7458cea4fe7d783de06b83ec293c00ca1032479c8b448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Categories:add.html.twig", 1);
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
        $__internal_feafffbb51ca166851d091b3b3893ec7b07899f84d917f8ffbccc61ed3553f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feafffbb51ca166851d091b3b3893ec7b07899f84d917f8ffbccc61ed3553f06->enter($__internal_feafffbb51ca166851d091b3b3893ec7b07899f84d917f8ffbccc61ed3553f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categories:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feafffbb51ca166851d091b3b3893ec7b07899f84d917f8ffbccc61ed3553f06->leave($__internal_feafffbb51ca166851d091b3b3893ec7b07899f84d917f8ffbccc61ed3553f06_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_917530e4fc63b7547c303cc10b7b0aa50c0339290d531665d84c466c0350ea7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917530e4fc63b7547c303cc10b7b0aa50c0339290d531665d84c466c0350ea7d->enter($__internal_917530e4fc63b7547c303cc10b7b0aa50c0339290d531665d84c466c0350ea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
    
        <div class=\"card col-md-offset-1 col-sm-8\">
            <div class=\"card-header\">
                <h2>ADD NEW CATEGORY<small>
                </small></h2>
            </div>
            <div class=\"card-body card-padding\">
                ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                <div class=\"form-group fg-line\">
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                </div>
                <br>
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo "
                ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                <br>
                <br>
            </div>
        </div>
    </div>
";
        
        $__internal_917530e4fc63b7547c303cc10b7b0aa50c0339290d531665d84c466c0350ea7d->leave($__internal_917530e4fc63b7547c303cc10b7b0aa50c0339290d531665d84c466c0350ea7d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categories:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  98 => 29,  92 => 26,  88 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 19,  64 => 16,  60 => 15,  56 => 14,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
                <h2>ADD NEW CATEGORY<small>
                </small></h2>
            </div>
            <div class=\"card-body card-padding\">
                {{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
                <div class=\"form-group fg-line\">
                    {{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
                    {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
                    {{form_errors(form.title)}}
                </div>
                <div class=\"form-group fg-line\">
                    {{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
                    {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
                    {{form_errors(form.title)}}
                </div>
                <div class=\"form-group fg-line\">
                    {{form_label(form.description,null,{label_attr:{\"class\":\"\"}})}}
                    {{form_widget(form.description,{attr:{\"class\":\"form-control\",\"rows\":\"7\"}})}}
                    {{form_errors(form.description)}}
                </div>
                <br>
                {{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}}
                {{ form_end(form) }}
                <br>
                <br>
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:Categories:add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Categories/add.html.twig");
    }
}
