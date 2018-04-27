<?php

/* AppBundle:Guides:edit.html.twig */
class __TwigTemplate_8c94ab78c3b5628ad81420e55ddb7b92ee00347540ab4cfd19d50dd01af1fd4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:edit.html.twig", 1);
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
        $__internal_e25a8cce26c62eb0f781f102065baac4976396ce1557cae439b93b6801360534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25a8cce26c62eb0f781f102065baac4976396ce1557cae439b93b6801360534->enter($__internal_e25a8cce26c62eb0f781f102065baac4976396ce1557cae439b93b6801360534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25a8cce26c62eb0f781f102065baac4976396ce1557cae439b93b6801360534->leave($__internal_e25a8cce26c62eb0f781f102065baac4976396ce1557cae439b93b6801360534_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c9f5f50fb95c7e54382f8643608b876bcbb3132f7aa0ec66a70bb405720c5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9f5f50fb95c7e54382f8643608b876bcbb3132f7aa0ec66a70bb405720c5fd->enter($__internal_6c9f5f50fb95c7e54382f8643608b876bcbb3132f7aa0ec66a70bb405720c5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
<div class=\"col-sm-6\">
        ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t<div style=\"position: relative;\">
\t\t\t\t <img id=\"img-preview\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "media", array()), "link", array())), "product_img"), "html", null, true);
        echo "\" />
\t\t\t     ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "input-file img-selector")));
        echo "
\t\t\t     <a class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
\t\t\t\t</div>

\t\t\t    <div class=\"card\">
\t\t\t         ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "selectpicker bs-select-hidden")));
        echo "
\t\t\t\t                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
\t\t\t\t                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
\t\t\t                </div>


\t\t\t                <div class=\"checkbox\">
\t\t\t                        <label>
\t\t\t                        \t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo "
\t\t\t                            <i class=\"input-helper\"></i>
\t\t\t                            Publish
\t\t\t                        </label>
\t\t\t                    </div>

\t\t\t                <div class=\"checkbox\">
\t\t\t                        <label>
\t\t\t                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "
\t\t\t                            <i class=\"input-helper\"></i>
\t\t\t                            Allows comments
\t\t\t                        </label>
\t\t\t                    </div>
\t\t\t               \t<br>

\t\t\t \t\t\t\t";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
\t\t\t            
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form_step"] ?? $this->getContext($context, "form_step")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t<div>
\t\t<div style=\"background:white\">
\t\t\t<span class=\"pos-step\">+</span>
\t\t\t<span class=\"title-step\">INSERT NEW STEP</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t <img id=\"img-preview-2\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image.png"), "product_img"), "html", null, true);
        echo "\" />
\t\t     ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "file", array()), 'widget', array("attr" => array("class" => "input-file-2 img-selector-2")));
        echo "
\t\t     <span  class=\"btn btn-info btn-lg waves-effect btn-select-2\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t\t<div class=\"card\">
\t\t\t         ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "file", array()), 'errors');
        echo "
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "title", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t                ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "3")));
        echo "
\t\t\t\t                ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "content", array()), 'errors');
        echo "
\t\t\t                </div>
\t\t\t \t\t\t\t";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_step"] ?? $this->getContext($context, "form_step")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-info btn-lg waves-effect pull-right")));
        echo " 
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        // line 90
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form_step"] ?? $this->getContext($context, "form_step")), 'form_end');
        echo "
\t</div>
\t<div class=\"col-sm-6\">
\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "steps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 94
            echo "\t\t<div class=\"card\">
\t\t<div class=\"action-step\">
\t\t\t<a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_down_edit_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-down\"></i></a>
\t\t\t<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_up_edit_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-up\"></i></a>
\t\t\t<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_delete_edit_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"zmdi zmdi-delete\"></i></a>
\t\t\t<a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_step_edit_step", array("id" => $this->getAttribute($context["step"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"zmdi zmdi-border-color\"></i></a>
\t\t</div>
\t\t<div>
\t\t\t<span class=\"pos-step\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "position", array()), "html", null, true);
            echo "</span>
\t\t\t<span class=\"title-step\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", array()), "html", null, true);
            echo "</span>
\t\t</div>
\t\t";
            // line 105
            if (($this->getAttribute($context["step"], "media", array()) != null)) {
                // line 106
                echo "\t\t<img style=\"width:100%;    max-height: 350px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["step"], "media", array()), "link", array())), "product_img"), "html", null, true);
                echo "\" />
\t\t";
            }
            // line 108
            echo "\t\t<div class=\"content-step\">
\t\t\t";
            // line 109
            echo $this->getAttribute($context["step"], "content", array());
            echo "
\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
\t</div>        
</div>
";
        
        $__internal_6c9f5f50fb95c7e54382f8643608b876bcbb3132f7aa0ec66a70bb405720c5fd->leave($__internal_6c9f5f50fb95c7e54382f8643608b876bcbb3132f7aa0ec66a70bb405720c5fd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 113,  265 => 109,  262 => 108,  256 => 106,  254 => 105,  249 => 103,  245 => 102,  239 => 99,  235 => 98,  231 => 97,  227 => 96,  223 => 94,  219 => 93,  213 => 90,  203 => 83,  198 => 81,  194 => 80,  190 => 79,  184 => 76,  180 => 75,  176 => 74,  170 => 71,  162 => 66,  158 => 65,  148 => 58,  144 => 57,  135 => 51,  125 => 44,  114 => 36,  105 => 30,  101 => 29,  97 => 28,  91 => 25,  87 => 24,  83 => 23,  77 => 20,  73 => 19,  69 => 18,  63 => 15,  55 => 10,  51 => 9,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
<div class=\"col-sm-6\">
        {{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}

\t\t\t\t<div style=\"position: relative;\">
\t\t\t\t <img id=\"img-preview\" src=\"{{asset(guide.media.link)|imagine_filter('product_img')}}\" />
\t\t\t     {{form_widget(form.file,{\"attr\":{\"class\":\"input-file img-selector\"}})}}
\t\t\t     <a class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
\t\t\t\t</div>

\t\t\t    <div class=\"card\">
\t\t\t         {{form_errors(form.file)}}
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
\t\t\t\t                {{form_errors(form.title)}}
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form.category,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form.category,{attr:{\"class\":\"selectpicker bs-select-hidden\"}})}}
\t\t\t\t                {{form_errors(form.category)}}
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form.content,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form.content,{attr:{\"class\":\"form-control\",\"rows\":\"7\"}})}}
\t\t\t\t                {{form_errors(form.content)}}
\t\t\t                </div>


\t\t\t                <div class=\"checkbox\">
\t\t\t                        <label>
\t\t\t                        \t{{form_widget(form.enabled)}}
\t\t\t                            <i class=\"input-helper\"></i>
\t\t\t                            Publish
\t\t\t                        </label>
\t\t\t                    </div>

\t\t\t                <div class=\"checkbox\">
\t\t\t                        <label>
\t\t\t                            {{form_widget(form.comment)}}
\t\t\t                            <i class=\"input-helper\"></i>
\t\t\t                            Allows comments
\t\t\t                        </label>
\t\t\t                    </div>
\t\t\t               \t<br>

\t\t\t \t\t\t\t{{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}} 
\t\t\t            
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t{{ form_end(form) }}
{{ form_start(form_step,{attr:{\"class\":\"form-horizontal\"}}) }}
\t<div>
\t\t<div style=\"background:white\">
\t\t\t<span class=\"pos-step\">+</span>
\t\t\t<span class=\"title-step\">INSERT NEW STEP</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t <img id=\"img-preview-2\" src=\"{{asset(\"img/image.png\")|imagine_filter('product_img')}}\" />
\t\t     {{form_widget(form_step.file,{\"attr\":{\"class\":\"input-file-2 img-selector-2\"}})}}
\t\t     <span  class=\"btn btn-info btn-lg waves-effect btn-select-2\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</span>
\t\t</div>
\t\t<div style=\"position: relative;\">
\t\t\t\t<div class=\"card\">
\t\t\t         {{form_errors(form_step.file)}}
\t\t\t        <div class=\"card-body card-padding\"> 
\t\t\t\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form_step.title,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form_step.title,{attr:{\"class\":\"form-control\"}})}}
\t\t\t\t                {{form_errors(form_step.title)}}
\t\t\t                </div>
\t\t\t                <div class=\"form-group fg-line\">
\t\t\t\t\t\t\t\t{{form_label(form_step.content,null,{label_attr:{\"class\":\"\"}})}}
\t\t\t\t                {{form_widget(form_step.content,{attr:{\"class\":\"form-control\",\"rows\":\"3\"}})}}
\t\t\t\t                {{form_errors(form_step.content)}}
\t\t\t                </div>
\t\t\t \t\t\t\t{{form_widget(form_step.save,{attr:{\"class\":\"btn btn-info btn-lg waves-effect pull-right\"}})}} 
\t\t\t            <br>
\t\t\t            <br>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{{ form_end(form_step) }}
\t</div>
\t<div class=\"col-sm-6\">
\t\t{% for step in guide.steps %}
\t\t<div class=\"card\">
\t\t<div class=\"action-step\">
\t\t\t<a href=\"{{path(\"app_step_down_edit_step\",{id:step.id})}}\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-down\"></i></a>
\t\t\t<a href=\"{{path(\"app_step_up_edit_step\",{id:step.id})}}\" class=\"btn btn-info\"><i class=\"zmdi zmdi-chevron-up\"></i></a>
\t\t\t<a href=\"{{path(\"app_step_delete_edit_step\",{id:step.id})}}\" class=\"btn btn-danger\"><i class=\"zmdi zmdi-delete\"></i></a>
\t\t\t<a href=\"{{path(\"app_step_edit_step\",{id:step.id})}}\" class=\"btn btn-success\"><i class=\"zmdi zmdi-border-color\"></i></a>
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
</div>
{% endblock %}", "AppBundle:Guides:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/edit.html.twig");
    }
}
