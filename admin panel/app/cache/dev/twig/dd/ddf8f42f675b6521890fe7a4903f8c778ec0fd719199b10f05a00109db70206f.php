<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c1af771730d829cfc771b03e712f3f9b6769b839d24d509e89bcd99ae583065a extends Twig_Template
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
        $__internal_eafcefbf53d4e7678e1d96b68f0598dc6044836adf68cce94dffff5de01974f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafcefbf53d4e7678e1d96b68f0598dc6044836adf68cce94dffff5de01974f3->enter($__internal_eafcefbf53d4e7678e1d96b68f0598dc6044836adf68cce94dffff5de01974f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eafcefbf53d4e7678e1d96b68f0598dc6044836adf68cce94dffff5de01974f3->leave($__internal_eafcefbf53d4e7678e1d96b68f0598dc6044836adf68cce94dffff5de01974f3_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_28dfbe597bc3d9d52130707c24a0bb821823ddbef2557383b024b4275b9979c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dfbe597bc3d9d52130707c24a0bb821823ddbef2557383b024b4275b9979c5->enter($__internal_28dfbe597bc3d9d52130707c24a0bb821823ddbef2557383b024b4275b9979c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28dfbe597bc3d9d52130707c24a0bb821823ddbef2557383b024b4275b9979c5->leave($__internal_28dfbe597bc3d9d52130707c24a0bb821823ddbef2557383b024b4275b9979c5_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e106d90aa69413f20518716ee14bb48c5961b67834ab45beaeb7a0a123cf3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e106d90aa69413f20518716ee14bb48c5961b67834ab45beaeb7a0a123cf3b6->enter($__internal_3e106d90aa69413f20518716ee14bb48c5961b67834ab45beaeb7a0a123cf3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e106d90aa69413f20518716ee14bb48c5961b67834ab45beaeb7a0a123cf3b6->leave($__internal_3e106d90aa69413f20518716ee14bb48c5961b67834ab45beaeb7a0a123cf3b6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7302ae4c241f02ebfe48c23835fce2a25821c86364e50443b78c5ddf449fe2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7302ae4c241f02ebfe48c23835fce2a25821c86364e50443b78c5ddf449fe2a1->enter($__internal_7302ae4c241f02ebfe48c23835fce2a25821c86364e50443b78c5ddf449fe2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7302ae4c241f02ebfe48c23835fce2a25821c86364e50443b78c5ddf449fe2a1->leave($__internal_7302ae4c241f02ebfe48c23835fce2a25821c86364e50443b78c5ddf449fe2a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
