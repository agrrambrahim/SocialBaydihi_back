<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_594b12853b29613bdfa1908d483da1b080924f78e3f2e7d57658ccc3f3ae9328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a0e040a62735a7668404dcf7a9d297035abb8edee6362b2761214d1c42aa41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0e040a62735a7668404dcf7a9d297035abb8edee6362b2761214d1c42aa41e->enter($__internal_4a0e040a62735a7668404dcf7a9d297035abb8edee6362b2761214d1c42aa41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4a0e040a62735a7668404dcf7a9d297035abb8edee6362b2761214d1c42aa41e->leave($__internal_4a0e040a62735a7668404dcf7a9d297035abb8edee6362b2761214d1c42aa41e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_99038d697ba08b9d06d5a64f7f1874cdf1f566c8bc1e75cb97d2f9aeeb901223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99038d697ba08b9d06d5a64f7f1874cdf1f566c8bc1e75cb97d2f9aeeb901223->enter($__internal_99038d697ba08b9d06d5a64f7f1874cdf1f566c8bc1e75cb97d2f9aeeb901223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_99038d697ba08b9d06d5a64f7f1874cdf1f566c8bc1e75cb97d2f9aeeb901223->leave($__internal_99038d697ba08b9d06d5a64f7f1874cdf1f566c8bc1e75cb97d2f9aeeb901223_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
