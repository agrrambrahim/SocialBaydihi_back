<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_0a30f46ac1eaeff7fb1677cdf4aea8eed9558347655b178780fbc18c4067e383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_cef0550112f31b96df0f398b412f134501a27f3d38712176ba5d943a73434bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef0550112f31b96df0f398b412f134501a27f3d38712176ba5d943a73434bd8->enter($__internal_cef0550112f31b96df0f398b412f134501a27f3d38712176ba5d943a73434bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef0550112f31b96df0f398b412f134501a27f3d38712176ba5d943a73434bd8->leave($__internal_cef0550112f31b96df0f398b412f134501a27f3d38712176ba5d943a73434bd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e55a086bcd1142cda1098ebd5dfac51cf91e9ec68017890be884ef0cdc9ba20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e55a086bcd1142cda1098ebd5dfac51cf91e9ec68017890be884ef0cdc9ba20->enter($__internal_0e55a086bcd1142cda1098ebd5dfac51cf91e9ec68017890be884ef0cdc9ba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0e55a086bcd1142cda1098ebd5dfac51cf91e9ec68017890be884ef0cdc9ba20->leave($__internal_0e55a086bcd1142cda1098ebd5dfac51cf91e9ec68017890be884ef0cdc9ba20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
