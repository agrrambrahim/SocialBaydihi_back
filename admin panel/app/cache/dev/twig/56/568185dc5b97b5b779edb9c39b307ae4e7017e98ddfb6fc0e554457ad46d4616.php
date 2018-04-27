<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_9f65f2fdfd887c9d88014c477efad1b75bfd7f14f9c5030b58917779f0540268 extends Twig_Template
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
        $__internal_fb6ef7b061d81823f838bbcac383269c5db45dbc4cd7454b024264410e484a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6ef7b061d81823f838bbcac383269c5db45dbc4cd7454b024264410e484a00->enter($__internal_fb6ef7b061d81823f838bbcac383269c5db45dbc4cd7454b024264410e484a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => ($context["invalid_username"] ?? $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_fb6ef7b061d81823f838bbcac383269c5db45dbc4cd7454b024264410e484a00->leave($__internal_fb6ef7b061d81823f838bbcac383269c5db45dbc4cd7454b024264410e484a00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  36 => 6,  30 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        {% if invalid_username is defined %}
            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>
        {% endif %}
        <label for=\"username\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
