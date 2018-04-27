<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ab34dc96e2f7ad850e87786bfdcd3c098df534cf8390b53e2fa4b077b3c96537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a6071b421e7834c4ab1327801b5388af6f8e2c909aa5b9161514aa51ce4a359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6071b421e7834c4ab1327801b5388af6f8e2c909aa5b9161514aa51ce4a359d->enter($__internal_a6071b421e7834c4ab1327801b5388af6f8e2c909aa5b9161514aa51ce4a359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6071b421e7834c4ab1327801b5388af6f8e2c909aa5b9161514aa51ce4a359d->leave($__internal_a6071b421e7834c4ab1327801b5388af6f8e2c909aa5b9161514aa51ce4a359d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0b989dc0ede4bbc99219abfa952071ddd182f0675af918893c6d85c3329bf8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b989dc0ede4bbc99219abfa952071ddd182f0675af918893c6d85c3329bf8f->enter($__internal_c0b989dc0ede4bbc99219abfa952071ddd182f0675af918893c6d85c3329bf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c0b989dc0ede4bbc99219abfa952071ddd182f0675af918893c6d85c3329bf8f->leave($__internal_c0b989dc0ede4bbc99219abfa952071ddd182f0675af918893c6d85c3329bf8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
