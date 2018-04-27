<?php

/* AppBundle:Guides:add.html.twig */
class __TwigTemplate_e947b806e09d5415f68afee9972a943bfcbb284187de11cf4778ca46d6541b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:add.html.twig", 1);
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
        $__internal_223c614fd54e4a543f2a6135765a34442ffb5a9d9189cad60c0db35548a67c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223c614fd54e4a543f2a6135765a34442ffb5a9d9189cad60c0db35548a67c6a->enter($__internal_223c614fd54e4a543f2a6135765a34442ffb5a9d9189cad60c0db35548a67c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_223c614fd54e4a543f2a6135765a34442ffb5a9d9189cad60c0db35548a67c6a->leave($__internal_223c614fd54e4a543f2a6135765a34442ffb5a9d9189cad60c0db35548a67c6a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_963cd467a511d0a1a97cde42948bead35a0e3b09a1744d1ecab3470481d57a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963cd467a511d0a1a97cde42948bead35a0e3b09a1744d1ecab3470481d57a79->enter($__internal_963cd467a511d0a1a97cde42948bead35a0e3b09a1744d1ecab3470481d57a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"row bs-wizard\" style=\"border-bottom:0;padding-top:20px\">
\t\t<div class=\"col-xs-4 bs-wizard-step active\">
\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide infos</div>
\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t</div>
\t\t
\t\t<div class=\"col-xs-4 bs-wizard-step disabled\"><!-- complete -->
\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide steps</div>
\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t</div>
\t\t
\t\t<div class=\"col-xs-4 bs-wizard-step disabled \"><!-- complete -->
\t\t\t<div class=\"text-center bs-wizard-stepnum\">Complete</div>
\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t</div>
\t</div></div>
\t<div style=\"position: relative;\">
\t <img id=\"img-preview\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image.png"), "product_img"), "html", null, true);
        echo "\" />
     ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "input-file img-selector")));
        echo "
     <a href=\"#\" class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
\t</div>

    <div class=\"card\">
         ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
        <div class=\"card-body card-padding\"> 
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "selectpicker bs-select-hidden")));
        echo "
\t                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
\t                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                </div>


                <div class=\"checkbox\">
                        <label>
                        \t";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>

                <div class=\"checkbox\">
                        <label>
                            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
               \t<br>

 \t\t\t\t";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            
            <br>
            <br>
        </div>
    </div>
</div>
";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_963cd467a511d0a1a97cde42948bead35a0e3b09a1744d1ecab3470481d57a79->leave($__internal_963cd467a511d0a1a97cde42948bead35a0e3b09a1744d1ecab3470481d57a79_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 78,  155 => 71,  145 => 64,  134 => 56,  125 => 50,  121 => 49,  117 => 48,  111 => 45,  107 => 44,  103 => 43,  97 => 40,  93 => 39,  89 => 38,  83 => 35,  75 => 30,  71 => 29,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
{{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
\t
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"row bs-wizard\" style=\"border-bottom:0;padding-top:20px\">
\t\t<div class=\"col-xs-4 bs-wizard-step active\">
\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide infos</div>
\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t</div>
\t\t
\t\t<div class=\"col-xs-4 bs-wizard-step disabled\"><!-- complete -->
\t\t\t<div class=\"text-center bs-wizard-stepnum\">Guide steps</div>
\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t</div>
\t\t
\t\t<div class=\"col-xs-4 bs-wizard-step disabled \"><!-- complete -->
\t\t\t<div class=\"text-center bs-wizard-stepnum\">Complete</div>
\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t<a class=\"bs-wizard-dot\"></a>
\t\t</div>
\t</div></div>
\t<div style=\"position: relative;\">
\t <img id=\"img-preview\" src=\"{{asset(\"img/image.png\")|imagine_filter('product_img')}}\" />
     {{form_widget(form.file,{\"attr\":{\"class\":\"input-file img-selector\"}})}}
     <a href=\"#\" class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
\t</div>

    <div class=\"card\">
         {{form_errors(form.file)}}
        <div class=\"card-body card-padding\"> 
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
\t                {{form_errors(form.title)}}
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.category,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.category,{attr:{\"class\":\"selectpicker bs-select-hidden\"}})}}
\t                {{form_errors(form.category)}}
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.content,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.content,{attr:{\"class\":\"form-control\",\"rows\":\"7\"}})}}
\t                {{form_errors(form.content)}}
                </div>


                <div class=\"checkbox\">
                        <label>
                        \t{{form_widget(form.enabled)}}
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>

                <div class=\"checkbox\">
                        <label>
                            {{form_widget(form.comment)}}
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
               \t<br>

 \t\t\t\t{{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}} 
            
            <br>
            <br>
        </div>
    </div>
</div>
{{ form_end(form) }}
</div>
{% endblock %}", "AppBundle:Guides:add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/add.html.twig");
    }
}
