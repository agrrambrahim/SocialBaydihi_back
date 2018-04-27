<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_abb6aef2dc5f4aba25bdf2f39bb46e13dd96f7a521340ba7e48143203b2621d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 1);
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
        $__internal_cd3da62deec23f66e10ee6eacd123d0c957e27ac1b4c2d745f76ea82881140ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3da62deec23f66e10ee6eacd123d0c957e27ac1b4c2d745f76ea82881140ee->enter($__internal_cd3da62deec23f66e10ee6eacd123d0c957e27ac1b4c2d745f76ea82881140ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3da62deec23f66e10ee6eacd123d0c957e27ac1b4c2d745f76ea82881140ee->leave($__internal_cd3da62deec23f66e10ee6eacd123d0c957e27ac1b4c2d745f76ea82881140ee_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c15e14da1dea568930bba47c3fc1bdc78fd5d97a1038c8e40f93a88a2e12381d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15e14da1dea568930bba47c3fc1bdc78fd5d97a1038c8e40f93a88a2e12381d->enter($__internal_c15e14da1dea568930bba47c3fc1bdc78fd5d97a1038c8e40f93a88a2e12381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Chnage your password<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\"> 
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'label');
        echo " 
\t\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "first", array()), 'label');
        echo "
\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "first", array()), 'errors');
        echo " 
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "second", array()), 'label');
        echo " 
\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "second", array()), 'errors');
        echo "
\t\t</div>
\t\t<button  class=\"btn btn-raised btn-primary pull-right\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password"), "html", null, true);
        echo "</button> 
\t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
             
            <br>
            <br>
        </div>
    </div>
</div>

</div>
";
        
        $__internal_c15e14da1dea568930bba47c3fc1bdc78fd5d97a1038c8e40f93a88a2e12381d->leave($__internal_c15e14da1dea568930bba47c3fc1bdc78fd5d97a1038c8e40f93a88a2e12381d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  97 => 28,  92 => 26,  88 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 19,  64 => 16,  60 => 15,  56 => 14,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Chnage your password<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\"> 
            {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t{{form_label(form.current_password)}} 
\t\t\t{{ form_widget(form.current_password,{attr:{\"class\":\"form-control\"}})}}
\t\t\t{{ form_errors(form.current_password)}}
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t{{form_label(form.new.first)}}
\t\t\t{{ form_widget(form.new.first,{attr:{\"class\":\"form-control\"}})}}
\t\t\t{{ form_errors(form.new.first)}} 
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t{{form_label(form.new.second)}} 
\t\t\t{{ form_widget(form.new.second,{attr:{\"class\":\"form-control\"}})}}
\t\t\t{{ form_errors(form.new.second)}}
\t\t</div>
\t\t<button  class=\"btn btn-raised btn-primary pull-right\">{{ 'Change password'|trans }}</button> 
\t\t{{ form_end(form) }}
             
            <br>
            <br>
        </div>
    </div>
</div>

</div>
{% endblock %}", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/ChangePassword/changePassword_content.html.twig");
    }
}
