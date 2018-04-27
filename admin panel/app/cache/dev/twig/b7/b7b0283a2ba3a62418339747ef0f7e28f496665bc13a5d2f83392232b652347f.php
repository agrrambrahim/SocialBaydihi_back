<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_29871ac61644d1c55c5661c3ccd275ef58c79544f4f070322ab2ddbeaf85a398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d0b4676f209263b8bc799fd51afd3f09f2f0ce63d0ac8cb5559d48ae7ec30b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0b4676f209263b8bc799fd51afd3f09f2f0ce63d0ac8cb5559d48ae7ec30b7->enter($__internal_9d0b4676f209263b8bc799fd51afd3f09f2f0ce63d0ac8cb5559d48ae7ec30b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d0b4676f209263b8bc799fd51afd3f09f2f0ce63d0ac8cb5559d48ae7ec30b7->leave($__internal_9d0b4676f209263b8bc799fd51afd3f09f2f0ce63d0ac8cb5559d48ae7ec30b7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_be3de52b49cc2217587f4a347d664c8482deadeca75ae1ffcfa1830767e647be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3de52b49cc2217587f4a347d664c8482deadeca75ae1ffcfa1830767e647be->enter($__internal_be3de52b49cc2217587f4a347d664c8482deadeca75ae1ffcfa1830767e647be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_be3de52b49cc2217587f4a347d664c8482deadeca75ae1ffcfa1830767e647be->leave($__internal_be3de52b49cc2217587f4a347d664c8482deadeca75ae1ffcfa1830767e647be_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_72e7da6f2400a889835e626e8a66e7f2afb5dac8cb4a19dd8d9e3fc371b15ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e7da6f2400a889835e626e8a66e7f2afb5dac8cb4a19dd8d9e3fc371b15ff2->enter($__internal_72e7da6f2400a889835e626e8a66e7f2afb5dac8cb4a19dd8d9e3fc371b15ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_72e7da6f2400a889835e626e8a66e7f2afb5dac8cb4a19dd8d9e3fc371b15ff2->leave($__internal_72e7da6f2400a889835e626e8a66e7f2afb5dac8cb4a19dd8d9e3fc371b15ff2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6bfe7e010c24e2d14cc98694b562d2a406fca360abb2f57439215e68273d958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bfe7e010c24e2d14cc98694b562d2a406fca360abb2f57439215e68273d958->enter($__internal_b6bfe7e010c24e2d14cc98694b562d2a406fca360abb2f57439215e68273d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6bfe7e010c24e2d14cc98694b562d2a406fca360abb2f57439215e68273d958->leave($__internal_b6bfe7e010c24e2d14cc98694b562d2a406fca360abb2f57439215e68273d958_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
