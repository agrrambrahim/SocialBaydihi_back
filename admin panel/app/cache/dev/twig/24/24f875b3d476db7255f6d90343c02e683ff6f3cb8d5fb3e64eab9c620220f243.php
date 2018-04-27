<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_619584a41887423626653a5364a05ff7447bb6b57033bb3ff295da290aeb0b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_938d2f4010964dd904dcbc5a8b8107c8de78a7a6b48470aeb5bd54d6f64c20f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938d2f4010964dd904dcbc5a8b8107c8de78a7a6b48470aeb5bd54d6f64c20f8->enter($__internal_938d2f4010964dd904dcbc5a8b8107c8de78a7a6b48470aeb5bd54d6f64c20f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_938d2f4010964dd904dcbc5a8b8107c8de78a7a6b48470aeb5bd54d6f64c20f8->leave($__internal_938d2f4010964dd904dcbc5a8b8107c8de78a7a6b48470aeb5bd54d6f64c20f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd1732df3dd9479ffc1888f28cdee4d2daaaefff7c02140e726a641101b3c692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1732df3dd9479ffc1888f28cdee4d2daaaefff7c02140e726a641101b3c692->enter($__internal_fd1732df3dd9479ffc1888f28cdee4d2daaaefff7c02140e726a641101b3c692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fd1732df3dd9479ffc1888f28cdee4d2daaaefff7c02140e726a641101b3c692->leave($__internal_fd1732df3dd9479ffc1888f28cdee4d2daaaefff7c02140e726a641101b3c692_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
