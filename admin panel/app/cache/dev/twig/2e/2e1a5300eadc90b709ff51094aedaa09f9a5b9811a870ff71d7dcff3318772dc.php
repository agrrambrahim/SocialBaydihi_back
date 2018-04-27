<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_8b59b59f607f05322bbe1c0d7fd606475c2887b5d1928e557880b11193dc9564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4d2e10f2c4538e4fa754979b5f5b6d8add50a7a1f96a1eab575443b561e54d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2e10f2c4538e4fa754979b5f5b6d8add50a7a1f96a1eab575443b561e54d84->enter($__internal_4d2e10f2c4538e4fa754979b5f5b6d8add50a7a1f96a1eab575443b561e54d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2e10f2c4538e4fa754979b5f5b6d8add50a7a1f96a1eab575443b561e54d84->leave($__internal_4d2e10f2c4538e4fa754979b5f5b6d8add50a7a1f96a1eab575443b561e54d84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc08d7194a3f2d75740cb7d42e15f294caf24b0787d7897469502f9e3a85e2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc08d7194a3f2d75740cb7d42e15f294caf24b0787d7897469502f9e3a85e2ac->enter($__internal_fc08d7194a3f2d75740cb7d42e15f294caf24b0787d7897469502f9e3a85e2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div class=\"pad\">
\t

<p class=\"alert alert-primary\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fc08d7194a3f2d75740cb7d42e15f294caf24b0787d7897469502f9e3a85e2ac->leave($__internal_fc08d7194a3f2d75740cb7d42e15f294caf24b0787d7897469502f9e3a85e2ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
\t

<p class=\"alert alert-primary\">{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
</div>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
