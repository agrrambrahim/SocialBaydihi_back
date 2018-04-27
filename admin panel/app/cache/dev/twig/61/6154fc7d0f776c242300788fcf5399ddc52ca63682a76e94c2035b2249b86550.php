<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b8ffa4ce053cf7e1151214ecdec9e40740740daafa54eb783146e49e74fba413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3157695c28d14aad4465e2ae8f28f4d7f4d9e0cf2abb3f4031175a0c32185037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3157695c28d14aad4465e2ae8f28f4d7f4d9e0cf2abb3f4031175a0c32185037->enter($__internal_3157695c28d14aad4465e2ae8f28f4d7f4d9e0cf2abb3f4031175a0c32185037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1)->display($context);
        
        $__internal_3157695c28d14aad4465e2ae8f28f4d7f4d9e0cf2abb3f4031175a0c32185037->leave($__internal_3157695c28d14aad4465e2ae8f28f4d7f4d9e0cf2abb3f4031175a0c32185037_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
