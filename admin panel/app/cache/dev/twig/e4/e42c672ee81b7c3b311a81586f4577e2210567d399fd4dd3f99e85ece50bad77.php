<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5b0c778c978aea3f9f04387b6e6015522d7529b96d2b22b9071cca1c8af4b1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4fe0a60ee34103aee7ac69f126d6b3117aad2f444e63d81aba27645208ad1dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe0a60ee34103aee7ac69f126d6b3117aad2f444e63d81aba27645208ad1dd7->enter($__internal_4fe0a60ee34103aee7ac69f126d6b3117aad2f444e63d81aba27645208ad1dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe0a60ee34103aee7ac69f126d6b3117aad2f444e63d81aba27645208ad1dd7->leave($__internal_4fe0a60ee34103aee7ac69f126d6b3117aad2f444e63d81aba27645208ad1dd7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ef5b80f7336a705ca3305c5032bfb825397f308e1f0008a64725e1765cabf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef5b80f7336a705ca3305c5032bfb825397f308e1f0008a64725e1765cabf59->enter($__internal_0ef5b80f7336a705ca3305c5032bfb825397f308e1f0008a64725e1765cabf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0ef5b80f7336a705ca3305c5032bfb825397f308e1f0008a64725e1765cabf59->leave($__internal_0ef5b80f7336a705ca3305c5032bfb825397f308e1f0008a64725e1765cabf59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
