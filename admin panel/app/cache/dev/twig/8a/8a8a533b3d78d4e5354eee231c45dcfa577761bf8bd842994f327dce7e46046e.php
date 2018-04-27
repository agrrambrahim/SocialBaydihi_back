<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_9411de79b09a82e38645c099577ad1f2c3c3a84458febeb9ae297d8c71d6eaeb extends Twig_Template
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
        $__internal_c05b2f4966487ed47ebedd0ce7c1e8fa449bef595e542258f105e6e19b3fa9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05b2f4966487ed47ebedd0ce7c1e8fa449bef595e542258f105e6e19b3fa9ee->enter($__internal_c05b2f4966487ed47ebedd0ce7c1e8fa449bef595e542258f105e6e19b3fa9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<div class=\"pad col-md-offset-4 col-md-4\">
    
    <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div >
            ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "                <p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => ($context["invalid_username"] ?? $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 8
        echo "            <div class=\"form-group label-floating is-empty\">
                <label for=\"username\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" required=\"required\" />
                <span class=\"error-form\">
                </span>
            </div>
        </div>
        <div>
            <input class=\"btn btn-primary  btn-raised col-md-12\" type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
</div>";
        
        $__internal_c05b2f4966487ed47ebedd0ce7c1e8fa449bef595e542258f105e6e19b3fa9ee->leave($__internal_c05b2f4966487ed47ebedd0ce7c1e8fa449bef595e542258f105e6e19b3fa9ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  42 => 9,  39 => 8,  33 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"pad col-md-offset-4 col-md-4\">
    
    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div >
            {% if invalid_username is defined %}
                <p class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>
            {% endif %}
            <div class=\"form-group label-floating is-empty\">
                <label for=\"username\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>
                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" required=\"required\" />
                <span class=\"error-form\">
                </span>
            </div>
        </div>
        <div>
            <input class=\"btn btn-primary  btn-raised col-md-12\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" />
        </div>
    </form>
</div>", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
