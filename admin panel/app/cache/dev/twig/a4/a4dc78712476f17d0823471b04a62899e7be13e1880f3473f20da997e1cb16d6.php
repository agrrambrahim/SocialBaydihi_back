<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9a95aae041e8f89d682b444abb873c21658f19dd6b6f4cef18a5f9c84275b75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1e8e725ab7b4254ea073212f92989a11a2a5e63b4199878e082bfdbaca489482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8e725ab7b4254ea073212f92989a11a2a5e63b4199878e082bfdbaca489482->enter($__internal_1e8e725ab7b4254ea073212f92989a11a2a5e63b4199878e082bfdbaca489482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8e725ab7b4254ea073212f92989a11a2a5e63b4199878e082bfdbaca489482->leave($__internal_1e8e725ab7b4254ea073212f92989a11a2a5e63b4199878e082bfdbaca489482_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a1b38efc11ccb6ec523ff8e739e78f3d3ca0c030171685b326e0ae59571dc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1b38efc11ccb6ec523ff8e739e78f3d3ca0c030171685b326e0ae59571dc45->enter($__internal_5a1b38efc11ccb6ec523ff8e739e78f3d3ca0c030171685b326e0ae59571dc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a1b38efc11ccb6ec523ff8e739e78f3d3ca0c030171685b326e0ae59571dc45->leave($__internal_5a1b38efc11ccb6ec523ff8e739e78f3d3ca0c030171685b326e0ae59571dc45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e1edea5c45a4e080cbf2cc684a18999a3a88085b379f46ede3164e3f2c135ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1edea5c45a4e080cbf2cc684a18999a3a88085b379f46ede3164e3f2c135ab->enter($__internal_5e1edea5c45a4e080cbf2cc684a18999a3a88085b379f46ede3164e3f2c135ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e1edea5c45a4e080cbf2cc684a18999a3a88085b379f46ede3164e3f2c135ab->leave($__internal_5e1edea5c45a4e080cbf2cc684a18999a3a88085b379f46ede3164e3f2c135ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_890905a8b5dc33001e09fb2ec049d6ce22e39f83b0f1e2f6e79690b40f5dff5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890905a8b5dc33001e09fb2ec049d6ce22e39f83b0f1e2f6e79690b40f5dff5c->enter($__internal_890905a8b5dc33001e09fb2ec049d6ce22e39f83b0f1e2f6e79690b40f5dff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_890905a8b5dc33001e09fb2ec049d6ce22e39f83b0f1e2f6e79690b40f5dff5c->leave($__internal_890905a8b5dc33001e09fb2ec049d6ce22e39f83b0f1e2f6e79690b40f5dff5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
