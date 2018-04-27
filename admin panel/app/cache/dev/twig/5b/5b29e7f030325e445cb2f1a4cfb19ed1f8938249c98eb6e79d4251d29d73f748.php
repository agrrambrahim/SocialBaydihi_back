<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d9cb854cb08ac36236c036cfcb2d78a9df326015a32e06f032ca22f0f8e6d8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5333b2a7b84e1938aa096576452ef292568ff7c1a89b67921b9f00c0e8c0fe49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5333b2a7b84e1938aa096576452ef292568ff7c1a89b67921b9f00c0e8c0fe49->enter($__internal_5333b2a7b84e1938aa096576452ef292568ff7c1a89b67921b9f00c0e8c0fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5333b2a7b84e1938aa096576452ef292568ff7c1a89b67921b9f00c0e8c0fe49->leave($__internal_5333b2a7b84e1938aa096576452ef292568ff7c1a89b67921b9f00c0e8c0fe49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53b1d50923e05c406e972ebb4b25114995841fe495da166ae80c92f06ebf369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b1d50923e05c406e972ebb4b25114995841fe495da166ae80c92f06ebf369f->enter($__internal_53b1d50923e05c406e972ebb4b25114995841fe495da166ae80c92f06ebf369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_53b1d50923e05c406e972ebb4b25114995841fe495da166ae80c92f06ebf369f->leave($__internal_53b1d50923e05c406e972ebb4b25114995841fe495da166ae80c92f06ebf369f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
