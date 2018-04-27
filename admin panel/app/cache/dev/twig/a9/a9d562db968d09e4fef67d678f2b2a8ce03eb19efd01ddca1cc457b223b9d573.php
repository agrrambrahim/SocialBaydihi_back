<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_42c72ecb866d0a701ce70dee37376aac3ba56961cad47432dac2ee8426bd27a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9c2057314931e47d08ae7530df2c464fe8a559249838408f0a58de7ab1bc6160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2057314931e47d08ae7530df2c464fe8a559249838408f0a58de7ab1bc6160->enter($__internal_9c2057314931e47d08ae7530df2c464fe8a559249838408f0a58de7ab1bc6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2057314931e47d08ae7530df2c464fe8a559249838408f0a58de7ab1bc6160->leave($__internal_9c2057314931e47d08ae7530df2c464fe8a559249838408f0a58de7ab1bc6160_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d649bd9491f0f5dee4b048e405db8a77892976c830ca0c1acc366e4cf812261d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d649bd9491f0f5dee4b048e405db8a77892976c830ca0c1acc366e4cf812261d->enter($__internal_d649bd9491f0f5dee4b048e405db8a77892976c830ca0c1acc366e4cf812261d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d649bd9491f0f5dee4b048e405db8a77892976c830ca0c1acc366e4cf812261d->leave($__internal_d649bd9491f0f5dee4b048e405db8a77892976c830ca0c1acc366e4cf812261d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
