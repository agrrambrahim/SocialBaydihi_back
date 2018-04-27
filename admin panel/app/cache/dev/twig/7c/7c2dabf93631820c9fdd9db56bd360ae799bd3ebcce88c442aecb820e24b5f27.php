<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_80ef0c2145692b9f0a53894b18cf1dc6ddef2fb7a4b11dd2ec679a1947ff145c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a582e885f04c9285f3777867b0000f0581502a8f4f96716241dd08ffdca3d6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a582e885f04c9285f3777867b0000f0581502a8f4f96716241dd08ffdca3d6e8->enter($__internal_a582e885f04c9285f3777867b0000f0581502a8f4f96716241dd08ffdca3d6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a582e885f04c9285f3777867b0000f0581502a8f4f96716241dd08ffdca3d6e8->leave($__internal_a582e885f04c9285f3777867b0000f0581502a8f4f96716241dd08ffdca3d6e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07ccac17ea9fe0c318a7a0e21785b38795aca1eb1e98ebd5e868b7bf60c4425d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ccac17ea9fe0c318a7a0e21785b38795aca1eb1e98ebd5e868b7bf60c4425d->enter($__internal_07ccac17ea9fe0c318a7a0e21785b38795aca1eb1e98ebd5e868b7bf60c4425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_07ccac17ea9fe0c318a7a0e21785b38795aca1eb1e98ebd5e868b7bf60c4425d->leave($__internal_07ccac17ea9fe0c318a7a0e21785b38795aca1eb1e98ebd5e868b7bf60c4425d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
