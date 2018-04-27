<?php

/* MediaBundle:Media:index.html.twig */
class __TwigTemplate_b0c3c094901a4f4cc02e2d037a2d9b0e7c455f39157f6f31261a41e2eaf86030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:index.html.twig", 1);
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
        $__internal_30256be65c8c86ed5733ab08ac2af68406ca657c2275977fa22ebf2d81909998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30256be65c8c86ed5733ab08ac2af68406ca657c2275977fa22ebf2d81909998->enter($__internal_30256be65c8c86ed5733ab08ac2af68406ca657c2275977fa22ebf2d81909998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Media:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30256be65c8c86ed5733ab08ac2af68406ca657c2275977fa22ebf2d81909998->leave($__internal_30256be65c8c86ed5733ab08ac2af68406ca657c2275977fa22ebf2d81909998_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_db59506c502a4d13c67b3b789e9e4b9ef2e323a176b85434ab43a9b167cbef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db59506c502a4d13c67b3b789e9e4b9ef2e323a176b85434ab43a9b167cbef65->enter($__internal_db59506c502a4d13c67b3b789e9e4b9ef2e323a176b85434ab43a9b167cbef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_add", array("CKEditor" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>Add image</a>
\t\t\t<span class=\"notif-title\">Images List</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 10
            echo "\t\t\t\t<div class=\"thumb img-thumbnail\">
\t\t\t\t\t<img  src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["media"], "link", array()), "media_thumb"), "html", null, true);
            echo "\">
\t\t\t\t\t<div>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "titre", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"select\"  onclick='sendToParent(\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["media"], "link", array()), "media_article"), "html", null, true);
            echo "\");window.close();'> Insert Image <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "\t\t\tImages list is empty \"Add new image\" to insert image
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t\t<div>
\t\t\t";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_db59506c502a4d13c67b3b789e9e4b9ef2e323a176b85434ab43a9b167cbef65->leave($__internal_db59506c502a4d13c67b3b789e9e4b9ef2e323a176b85434ab43a9b167cbef65_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  82 => 18,  75 => 16,  67 => 13,  63 => 12,  59 => 11,  56 => 10,  51 => 9,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"{{path(\"media_add\",{CKEditor:app.request.query.get(\"CKEditor\"),CKEditorFuncNum:app.request.query.get(\"CKEditorFuncNum\"),langCode:app.request.query.get(\"langCode\")})}}\" class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>Add image</a>
\t\t\t<span class=\"notif-title\">Images List</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t{% for media in pagination %}
\t\t\t\t<div class=\"thumb img-thumbnail\">
\t\t\t\t\t<img  src=\"{{media.link|imagine_filter('media_thumb')}}\">
\t\t\t\t\t<div>{{media.titre}}</div>
\t\t\t\t\t<div class=\"select\"  onclick='sendToParent(\"{{media.link|imagine_filter('media_article')}}\");window.close();'> Insert Image <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\tImages list is empty \"Add new image\" to insert image
\t\t\t{% endfor %}
\t\t</div>
\t\t<div>
\t\t\t{{ knp_pagination_render(pagination) }}
\t\t</div>
\t</div>

{% endblock %}", "MediaBundle:Media:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/MediaBundle/Resources/views/Media/index.html.twig");
    }
}
