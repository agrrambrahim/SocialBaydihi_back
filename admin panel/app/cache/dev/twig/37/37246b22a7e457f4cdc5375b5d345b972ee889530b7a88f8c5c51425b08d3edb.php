<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b53009cfddfb50d68682def760c9e09ea83bdfdb56b778e2b282634da990ce49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99fdf0063ed964d1f06e9337ea2e63c3cc080bce24f4b71f39f88230a66810d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fdf0063ed964d1f06e9337ea2e63c3cc080bce24f4b71f39f88230a66810d3->enter($__internal_99fdf0063ed964d1f06e9337ea2e63c3cc080bce24f4b71f39f88230a66810d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99fdf0063ed964d1f06e9337ea2e63c3cc080bce24f4b71f39f88230a66810d3->leave($__internal_99fdf0063ed964d1f06e9337ea2e63c3cc080bce24f4b71f39f88230a66810d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b4fd22903935784c4c73e5d5c3c7c6a32d5db1ec770c4aefb5bdc9f31516c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4fd22903935784c4c73e5d5c3c7c6a32d5db1ec770c4aefb5bdc9f31516c79->enter($__internal_1b4fd22903935784c4c73e5d5c3c7c6a32d5db1ec770c4aefb5bdc9f31516c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b4fd22903935784c4c73e5d5c3c7c6a32d5db1ec770c4aefb5bdc9f31516c79->leave($__internal_1b4fd22903935784c4c73e5d5c3c7c6a32d5db1ec770c4aefb5bdc9f31516c79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe288dc46a7864b0b418e4fdb85d817ae7d10ec641a85720a1e03ce83a46389e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe288dc46a7864b0b418e4fdb85d817ae7d10ec641a85720a1e03ce83a46389e->enter($__internal_fe288dc46a7864b0b418e4fdb85d817ae7d10ec641a85720a1e03ce83a46389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe288dc46a7864b0b418e4fdb85d817ae7d10ec641a85720a1e03ce83a46389e->leave($__internal_fe288dc46a7864b0b418e4fdb85d817ae7d10ec641a85720a1e03ce83a46389e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9590dad2538e53113291fcb8bfae713ac8de554aec4f32870b6b84be48833bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9590dad2538e53113291fcb8bfae713ac8de554aec4f32870b6b84be48833bf4->enter($__internal_9590dad2538e53113291fcb8bfae713ac8de554aec4f32870b6b84be48833bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9590dad2538e53113291fcb8bfae713ac8de554aec4f32870b6b84be48833bf4->leave($__internal_9590dad2538e53113291fcb8bfae713ac8de554aec4f32870b6b84be48833bf4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
