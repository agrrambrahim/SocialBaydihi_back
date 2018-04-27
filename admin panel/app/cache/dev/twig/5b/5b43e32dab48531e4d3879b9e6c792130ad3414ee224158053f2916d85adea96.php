<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a618d3f1c9935d89a7685bc0f48588fd63a0bad1baa9c6f5c854b446cfa803a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_861f559f0fee061456e58075de2b03c0c9e445ab5fc7c78dcfa3a43d4c163230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861f559f0fee061456e58075de2b03c0c9e445ab5fc7c78dcfa3a43d4c163230->enter($__internal_861f559f0fee061456e58075de2b03c0c9e445ab5fc7c78dcfa3a43d4c163230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861f559f0fee061456e58075de2b03c0c9e445ab5fc7c78dcfa3a43d4c163230->leave($__internal_861f559f0fee061456e58075de2b03c0c9e445ab5fc7c78dcfa3a43d4c163230_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f5bd826455ba1787b3a702acb944ca581f8ef86e72b1f560a326b469db8dd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5bd826455ba1787b3a702acb944ca581f8ef86e72b1f560a326b469db8dd9d->enter($__internal_4f5bd826455ba1787b3a702acb944ca581f8ef86e72b1f560a326b469db8dd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4f5bd826455ba1787b3a702acb944ca581f8ef86e72b1f560a326b469db8dd9d->leave($__internal_4f5bd826455ba1787b3a702acb944ca581f8ef86e72b1f560a326b469db8dd9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
