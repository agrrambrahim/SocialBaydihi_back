<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2454d0cfd9cea94c9b16058f54c51efb61b6f8873b161cfed685a7dc6b63661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89ea4f6c18727f5cb630ecbccc64dbb9f767c6bdbb613663070375b1922b5733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ea4f6c18727f5cb630ecbccc64dbb9f767c6bdbb613663070375b1922b5733->enter($__internal_89ea4f6c18727f5cb630ecbccc64dbb9f767c6bdbb613663070375b1922b5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ea4f6c18727f5cb630ecbccc64dbb9f767c6bdbb613663070375b1922b5733->leave($__internal_89ea4f6c18727f5cb630ecbccc64dbb9f767c6bdbb613663070375b1922b5733_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc2480d13ae6e8b5c56b96ce8f13903deb06bfcc1e34e6c4700427d9ba27aea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2480d13ae6e8b5c56b96ce8f13903deb06bfcc1e34e6c4700427d9ba27aea5->enter($__internal_dc2480d13ae6e8b5c56b96ce8f13903deb06bfcc1e34e6c4700427d9ba27aea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc2480d13ae6e8b5c56b96ce8f13903deb06bfcc1e34e6c4700427d9ba27aea5->leave($__internal_dc2480d13ae6e8b5c56b96ce8f13903deb06bfcc1e34e6c4700427d9ba27aea5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed4d6592bfce7c8eaa87666a705587605acd0de72517de38d630cc39ef99f393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4d6592bfce7c8eaa87666a705587605acd0de72517de38d630cc39ef99f393->enter($__internal_ed4d6592bfce7c8eaa87666a705587605acd0de72517de38d630cc39ef99f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed4d6592bfce7c8eaa87666a705587605acd0de72517de38d630cc39ef99f393->leave($__internal_ed4d6592bfce7c8eaa87666a705587605acd0de72517de38d630cc39ef99f393_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_813f55aac4965bbd4e7e2c3e98c7f7bdd92d45eb88afa277049120050969a5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813f55aac4965bbd4e7e2c3e98c7f7bdd92d45eb88afa277049120050969a5f0->enter($__internal_813f55aac4965bbd4e7e2c3e98c7f7bdd92d45eb88afa277049120050969a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_813f55aac4965bbd4e7e2c3e98c7f7bdd92d45eb88afa277049120050969a5f0->leave($__internal_813f55aac4965bbd4e7e2c3e98c7f7bdd92d45eb88afa277049120050969a5f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
