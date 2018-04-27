<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7fb7f80ca71604c75e065a001b8460c3c77640a2326540489b6b989862a3e5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6f79a3232549852fb2f7f466dd9bd4702bddd6e4b2db8409d6983db233580c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f79a3232549852fb2f7f466dd9bd4702bddd6e4b2db8409d6983db233580c32->enter($__internal_6f79a3232549852fb2f7f466dd9bd4702bddd6e4b2db8409d6983db233580c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f79a3232549852fb2f7f466dd9bd4702bddd6e4b2db8409d6983db233580c32->leave($__internal_6f79a3232549852fb2f7f466dd9bd4702bddd6e4b2db8409d6983db233580c32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3c27b53f70eebd9fa9757a6f61386b9a41c9c54fda842d2226ecf4c8fd1ff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c27b53f70eebd9fa9757a6f61386b9a41c9c54fda842d2226ecf4c8fd1ff8f->enter($__internal_d3c27b53f70eebd9fa9757a6f61386b9a41c9c54fda842d2226ecf4c8fd1ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d3c27b53f70eebd9fa9757a6f61386b9a41c9c54fda842d2226ecf4c8fd1ff8f->leave($__internal_d3c27b53f70eebd9fa9757a6f61386b9a41c9c54fda842d2226ecf4c8fd1ff8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
