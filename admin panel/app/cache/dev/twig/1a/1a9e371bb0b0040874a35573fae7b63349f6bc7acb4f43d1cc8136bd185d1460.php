<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_5342142681a0596e294246785ac37fcad1ae98fc9b3faf0eec2baf08f2c964f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_71842fb2e03875e60047910f1b3672ad99959eff320d4b62b963861e0e5e09e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71842fb2e03875e60047910f1b3672ad99959eff320d4b62b963861e0e5e09e1->enter($__internal_71842fb2e03875e60047910f1b3672ad99959eff320d4b62b963861e0e5e09e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71842fb2e03875e60047910f1b3672ad99959eff320d4b62b963861e0e5e09e1->leave($__internal_71842fb2e03875e60047910f1b3672ad99959eff320d4b62b963861e0e5e09e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ff7ca56a3eb6cdfdd471b69c4b4826b7660909d786e4f26279db603c3b1a8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff7ca56a3eb6cdfdd471b69c4b4826b7660909d786e4f26279db603c3b1a8da->enter($__internal_1ff7ca56a3eb6cdfdd471b69c4b4826b7660909d786e4f26279db603c3b1a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div class=\"pad\">
\t<p class=\"alert alert-primary\">
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
\t</p>
</div>

";
        
        $__internal_1ff7ca56a3eb6cdfdd471b69c4b4826b7660909d786e4f26279db603c3b1a8da->leave($__internal_1ff7ca56a3eb6cdfdd471b69c4b4826b7660909d786e4f26279db603c3b1a8da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
<div class=\"pad\">
\t<p class=\"alert alert-primary\">
\t{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
\t</p>
</div>

{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
