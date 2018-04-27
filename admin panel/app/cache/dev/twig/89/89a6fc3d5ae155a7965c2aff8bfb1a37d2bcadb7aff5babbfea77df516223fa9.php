<?php

/* MediaBundle:Media:add.html.twig */
class __TwigTemplate_d59dda5dd5e219d195107178008f250e62e9f92c973b37f711cef3a7c97c21d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1ddf4ea73133d528e3f28fd5e40ae5f450b235809701e02960fae34cb2692e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ddf4ea73133d528e3f28fd5e40ae5f450b235809701e02960fae34cb2692e7->enter($__internal_d1ddf4ea73133d528e3f28fd5e40ae5f450b235809701e02960fae34cb2692e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Media:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ddf4ea73133d528e3f28fd5e40ae5f450b235809701e02960fae34cb2692e7->leave($__internal_d1ddf4ea73133d528e3f28fd5e40ae5f450b235809701e02960fae34cb2692e7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e51f1bb4a38336ec2754af03a5c15003f12b01646b213294bcea8d6350fa5217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51f1bb4a38336ec2754af03a5c15003f12b01646b213294bcea8d6350fa5217->enter($__internal_e51f1bb4a38336ec2754af03a5c15003f12b01646b213294bcea8d6350fa5217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        if (($this->getAttribute(($context["media"] ?? $this->getContext($context, "media")), "id", array()) != null)) {
            // line 4
            echo "\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["media"] ?? $this->getContext($context, "media")), "link", array())), "media_article"), "html", null, true);
            echo "\");
\t\twindow.close();
\t\t</script>
\t";
        }
        // line 9
        echo "\t<div class=\"notif\" >
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_index", array("CKEditor" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("style" => "opacity:0;")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_e51f1bb4a38336ec2754af03a5c15003f12b01646b213294bcea8d6350fa5217->leave($__internal_e51f1bb4a38336ec2754af03a5c15003f12b01646b213294bcea8d6350fa5217_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  78 => 23,  72 => 20,  63 => 14,  57 => 11,  53 => 9,  46 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MediaBundle::layout.html.twig' %}
{% block body %}
\t{% if media.id !=null %}
\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"{{asset(media.link)|imagine_filter('media_article')}}\");
\t\twindow.close();
\t\t</script>
\t{% endif %}
\t<div class=\"notif\" >
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"{{path(\"media_index\",{CKEditor:app.request.query.get(\"CKEditor\"),CKEditorFuncNum:app.request.query.get(\"CKEditorFuncNum\"),langCode:app.request.query.get(\"langCode\")})}}\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t{{ form_start(form)}}
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t{{form_widget(form.file,{\"attr\":{\"style\":\"opacity:0;\"}})}}
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t{{form_errors(form.file)}}
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t{{form_end(form)}}
\t\t</div>
\t</div>
{% endblock %}", "MediaBundle:Media:add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/MediaBundle/Resources/views/Media/add.html.twig");
    }
}
