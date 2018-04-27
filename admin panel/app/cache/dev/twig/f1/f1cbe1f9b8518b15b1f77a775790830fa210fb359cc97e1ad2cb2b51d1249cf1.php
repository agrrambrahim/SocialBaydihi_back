<?php

/* AppBundle:Guides:steps.html.twig */
class __TwigTemplate_8e9acff9f67454b9212e46613287007baa60de983a12ba20f957692d7cc1cbe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:steps.html.twig", 1);
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
        $__internal_99abef9c4c3388ae8a34d39571bc902eaa3e4371f1aba7edb04121713fdbd954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99abef9c4c3388ae8a34d39571bc902eaa3e4371f1aba7edb04121713fdbd954->enter($__internal_99abef9c4c3388ae8a34d39571bc902eaa3e4371f1aba7edb04121713fdbd954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:steps.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99abef9c4c3388ae8a34d39571bc902eaa3e4371f1aba7edb04121713fdbd954->leave($__internal_99abef9c4c3388ae8a34d39571bc902eaa3e4371f1aba7edb04121713fdbd954_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a214f85329a48c73d065c71af3f1c68c6f6ed6ee8e3bcd257ecfce50f4cfcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a214f85329a48c73d065c71af3f1c68c6f6ed6ee8e3bcd257ecfce50f4cfcee->enter($__internal_3a214f85329a48c73d065c71af3f1c68c6f6ed6ee8e3bcd257ecfce50f4cfcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">

\t    <div class=\"col-md-offset-1 col-sm-8\">

\t\t    <div class=\"card\">
\t\t        <div class=\"row bs-wizard\" style=\"border-bottom:0;padding-top:20px\">
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step complete\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide infos</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step active\"><!-- complete -->
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide steps</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step disabled \"><!-- complete -->
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Complete</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"col-md-offset-1 col-sm-8\">
\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "steps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 30
            echo "\t\t<div class=\"card\">
\t\t<div class=\"action-step\">
\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_down_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-down\"></i></a>
\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_up_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-up\"></i></a>
\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_delete_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"zmdi zmdi-delete\"></i></a>
\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_edit_step_two", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"zmdi zmdi-edit\"></i></a>

\t\t</div>
\t\t<div>
\t\t\t<span class=\"pos-step\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "position", array()), "html", null, true);
            echo "</span>
\t\t\t<span class=\"title-step\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", array()), "html", null, true);
            echo "</span>
\t\t</div>
\t\t";
            // line 42
            if (($this->getAttribute($context["step"], "media", array()) != null)) {
                // line 43
                echo "\t\t<img style=\"width:100%;    max-height: 350px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["step"], "media", array()), "link", array())), "product_img"), "html", null, true);
                echo "\" />
\t\t";
            }
            // line 45
            echo "\t\t<div class=\"content-step\">
\t\t\t";
            // line 46
            echo $this->getAttribute($context["step"], "content", array());
            echo "
\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</div>
\t";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t<div class=\"col-md-offset-1 col-sm-8\">
\t\t<div style=\"background:white\">
\t\t\t<span class=\"pos-step\">+</span>
\t\t\t<span class=\"title-step\">INSERT NEW STEP</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t <img id=\"img-preview\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image.png"), "product_img"), "html", null, true);
        echo "\" />
\t\t     ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "input-file img-selector")));
        echo "
\t\t     <span  class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t\t<div class=\"card\">
\t\t\t         ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "3")));
        echo "
\t\t\t\t                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t \t\t\t\t";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-info btn-lg waves-effect pull-right")));
        echo " 
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guide_finish", array("id" => $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success btn-lg waves-effect pull-right\" title=\"\">FINISH</a>
\t\t</div>
\t";
        // line 84
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_3a214f85329a48c73d065c71af3f1c68c6f6ed6ee8e3bcd257ecfce50f4cfcee->leave($__internal_3a214f85329a48c73d065c71af3f1c68c6f6ed6ee8e3bcd257ecfce50f4cfcee_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 84,  192 => 82,  183 => 76,  178 => 74,  174 => 73,  170 => 72,  164 => 69,  160 => 68,  156 => 67,  150 => 64,  142 => 59,  138 => 58,  128 => 51,  125 => 50,  115 => 46,  112 => 45,  106 => 43,  104 => 42,  99 => 40,  95 => 39,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 30,  68 => 29,  40 => 3,  34 => 2,  11 => 1,);
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

\t    <div class=\"col-md-offset-1 col-sm-8\">

\t\t    <div class=\"card\">
\t\t        <div class=\"row bs-wizard\" style=\"border-bottom:0;padding-top:20px\">
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step complete\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide infos</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step active\"><!-- complete -->
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide steps</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 bs-wizard-step disabled \"><!-- complete -->
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Complete</div>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"col-md-offset-1 col-sm-8\">
\t{% for step in guide.steps %}
\t\t<div class=\"card\">
\t\t<div class=\"action-step\">
\t\t\t<a href=\"{{path(\"app_step_down_step\",{id:step.id})}}\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-down\"></i></a>
\t\t\t<a href=\"{{path(\"app_step_up_step\",{id:step.id})}}\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-up\"></i></a>
\t\t\t<a href=\"{{path(\"app_step_delete_step\",{id:step.id})}}\" class=\"btn btn-danger\"><i class=\"zmdi zmdi-delete\"></i></a>
\t\t\t<a href=\"{{path(\"app_step_edit_step_two\",{id:step.id})}}\" class=\"btn btn-success\"><i class=\"zmdi zmdi-edit\"></i></a>

\t\t</div>
\t\t<div>
\t\t\t<span class=\"pos-step\">{{step.position}}</span>
\t\t\t<span class=\"title-step\">{{step.title}}</span>
\t\t</div>
\t\t{% if step.media != null %}
\t\t<img style=\"width:100%;    max-height: 350px;\" src=\"{{asset(step.media.link)|imagine_filter('product_img')}}\" />
\t\t{% endif %}
\t\t<div class=\"content-step\">
\t\t\t{{step.content|raw}}
\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
\t{{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
\t<div class=\"col-md-offset-1 col-sm-8\">
\t\t<div style=\"background:white\">
\t\t\t<span class=\"pos-step\">+</span>
\t\t\t<span class=\"title-step\">INSERT NEW STEP</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t <img id=\"img-preview\" src=\"{{asset(\"img/image.png\")|imagine_filter('product_img')}}\" />
\t\t     {{form_widget(form.file,{\"attr\":{\"class\":\"input-file img-selector\"}})}}
\t\t     <span  class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t\t<div class=\"card\">
\t\t\t         {{form_errors(form.file)}}
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
\t\t\t\t                {{form_errors(form.title)}}
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form.content,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form.content,{attr:{\"class\":\"form-control\",\"rows\":\"3\"}})}}
\t\t\t\t                {{form_errors(form.content)}}
\t\t\t                </div>
\t\t\t \t\t\t\t{{form_widget(form.save,{attr:{\"class\":\"btn btn-info btn-lg waves-effect pull-right\"}})}} 
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"{{path('app_guide_finish',{id:guide.id})}}\" class=\"btn btn-success btn-lg waves-effect pull-right\" title=\"\">FINISH</a>
\t\t</div>
\t{{ form_end(form) }}
</div>
{% endblock %}", "AppBundle:Guides:steps.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/steps.html.twig");
    }
}
