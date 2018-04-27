<?php

/* AppBundle:Guides:edit_step.html.twig */
class __TwigTemplate_400065d3dc2e841550fe2b0c30cb830c87a83b1b73780a3e0ada7eead67a4430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:edit_step.html.twig", 1);
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
        $__internal_5759cd2646f331812087d10012378b3226ada68d6cf100f18084d1623d0280f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5759cd2646f331812087d10012378b3226ada68d6cf100f18084d1623d0280f6->enter($__internal_5759cd2646f331812087d10012378b3226ada68d6cf100f18084d1623d0280f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:edit_step.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5759cd2646f331812087d10012378b3226ada68d6cf100f18084d1623d0280f6->leave($__internal_5759cd2646f331812087d10012378b3226ada68d6cf100f18084d1623d0280f6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_37ec3563d22bf1c84ab73b74cbc72f75d8d1697cb9c871b428da9aaf2cbba86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ec3563d22bf1c84ab73b74cbc72f75d8d1697cb9c871b428da9aaf2cbba86c->enter($__internal_37ec3563d22bf1c84ab73b74cbc72f75d8d1697cb9c871b428da9aaf2cbba86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
\t";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t<div class=\"col-md-offset-1 col-sm-8\">
\t\t<div style=\"background:white\">
\t\t\t<span class=\"pos-step\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["step"] ?? $this->getContext($context, "step")), "position", array()), "html", null, true);
        echo "</span>
\t\t\t<span class=\"title-step\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["step"] ?? $this->getContext($context, "step")), "title", array()), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t";
        // line 12
        if (($this->getAttribute(($context["step"] ?? $this->getContext($context, "step")), "media", array()) == null)) {
            // line 13
            echo "\t\t\t<img id=\"img-preview\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image.png"), "product_img"), "html", null, true);
            echo "\" />
\t\t\t";
        } else {
            // line 15
            echo "\t\t\t <img id=\"img-preview\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["step"] ?? $this->getContext($context, "step")), "media", array()), "link", array())), "product_img"), "html", null, true);
            echo "\" />
\t\t\t";
        }
        // line 17
        echo "\t\t     ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "input-file img-selector")));
        echo "
\t\t     <span  class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t\t<div class=\"card\">
\t\t\t         ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "3")));
        echo "
\t\t\t\t                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t                <span class=\"pull-right\"> 
\t\t\t                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_edit", array("id" => $this->getAttribute($this->getAttribute(($context["step"] ?? $this->getContext($context, "step")), "guide", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-lg waves-effect \">BACK</a>
\t\t\t \t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-info btn-lg waves-effect ")));
        echo "
\t\t\t \t\t\t\t</span>
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_37ec3563d22bf1c84ab73b74cbc72f75d8d1697cb9c871b428da9aaf2cbba86c->leave($__internal_37ec3563d22bf1c84ab73b74cbc72f75d8d1697cb9c871b428da9aaf2cbba86c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:edit_step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  121 => 36,  117 => 35,  111 => 32,  107 => 31,  103 => 30,  97 => 27,  93 => 26,  89 => 25,  83 => 22,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  54 => 9,  50 => 8,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
\t{{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
\t<div class=\"col-md-offset-1 col-sm-8\">
\t\t<div style=\"background:white\">
\t\t\t<span class=\"pos-step\">{{step.position}}</span>
\t\t\t<span class=\"title-step\">{{step.title}}</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t{% if step.media==null %}
\t\t\t<img id=\"img-preview\" src=\"{{asset(\"img/image.png\")|imagine_filter('product_img')}}\" />
\t\t\t{% else %}
\t\t\t <img id=\"img-preview\" src=\"{{asset(step.media.link)|imagine_filter('product_img')}}\" />
\t\t\t{% endif %}
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
\t\t\t                <span class=\"pull-right\"> 
\t\t\t                <a href=\"{{path(\"app_guides_edit\",{id:step.guide.id})}}\" class=\"btn btn-danger btn-lg waves-effect \">BACK</a>
\t\t\t \t\t\t\t{{form_widget(form.save,{attr:{\"class\":\"btn btn-info btn-lg waves-effect \"}})}}
\t\t\t \t\t\t\t</span>
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{{ form_end(form) }}
</div>
{% endblock %}", "AppBundle:Guides:edit_step.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/edit_step.html.twig");
    }
}
