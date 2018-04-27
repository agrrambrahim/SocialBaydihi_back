<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_709cb9287219016e921b216e4b92119286b5d96188c99b9fa1e7204e1628858b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d0e40187bd36dde70958cac0ec911c77e1e5a1d65c88f014a14735fae9914cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e40187bd36dde70958cac0ec911c77e1e5a1d65c88f014a14735fae9914cb7->enter($__internal_d0e40187bd36dde70958cac0ec911c77e1e5a1d65c88f014a14735fae9914cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e40187bd36dde70958cac0ec911c77e1e5a1d65c88f014a14735fae9914cb7->leave($__internal_d0e40187bd36dde70958cac0ec911c77e1e5a1d65c88f014a14735fae9914cb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c31ea2de896810a9bc41841a4b94e7155eee18caae34fb0518d4f6493f0e2ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31ea2de896810a9bc41841a4b94e7155eee18caae34fb0518d4f6493f0e2ca4->enter($__internal_c31ea2de896810a9bc41841a4b94e7155eee18caae34fb0518d4f6493f0e2ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c31ea2de896810a9bc41841a4b94e7155eee18caae34fb0518d4f6493f0e2ca4->leave($__internal_c31ea2de896810a9bc41841a4b94e7155eee18caae34fb0518d4f6493f0e2ca4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
