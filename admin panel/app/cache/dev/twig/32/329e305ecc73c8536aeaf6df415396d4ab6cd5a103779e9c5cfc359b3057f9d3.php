<?php

/* UserBundle:Resetting:reseted.html.twig */
class __TwigTemplate_d355bf79f7de7de0f353878b690248c4c6244e88e6a38a10e6137a382a0be7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reseted.html.twig", 1);
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
        $__internal_38f8cac95c6ae68ef14575abdc75c203b1de372f1de3f96a61f8cfe84aada85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f8cac95c6ae68ef14575abdc75c203b1de372f1de3f96a61f8cfe84aada85b->enter($__internal_38f8cac95c6ae68ef14575abdc75c203b1de372f1de3f96a61f8cfe84aada85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reseted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f8cac95c6ae68ef14575abdc75c203b1de372f1de3f96a61f8cfe84aada85b->leave($__internal_38f8cac95c6ae68ef14575abdc75c203b1de372f1de3f96a61f8cfe84aada85b_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e44566aab59435f2b1d0efe2113b2317b7bd6c00d410d194de6537902acdf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e44566aab59435f2b1d0efe2113b2317b7bd6c00d410d194de6537902acdf00->enter($__internal_4e44566aab59435f2b1d0efe2113b2317b7bd6c00d410d194de6537902acdf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<div class='pad'><p class='alert alert-success'>votre mot de passe a été modifié</p></div>
";
        
        $__internal_4e44566aab59435f2b1d0efe2113b2317b7bd6c00d410d194de6537902acdf00->leave($__internal_4e44566aab59435f2b1d0efe2113b2317b7bd6c00d410d194de6537902acdf00_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reseted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
<div class='pad'><p class='alert alert-success'>votre mot de passe a été modifié</p></div>
{% endblock fos_user_content %}

", "UserBundle:Resetting:reseted.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/Resetting/reseted.html.twig");
    }
}
