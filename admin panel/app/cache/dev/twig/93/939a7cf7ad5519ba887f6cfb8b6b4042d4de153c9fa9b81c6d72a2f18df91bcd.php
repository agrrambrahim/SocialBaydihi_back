<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9eac0918882cca0cc95286f699a2f2fe45967fa321c3d0a43ae841986e284924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8afd811c14094734812250c0bbdc51ec88d1d6a01fd67f4f5c3df197885553a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afd811c14094734812250c0bbdc51ec88d1d6a01fd67f4f5c3df197885553a6->enter($__internal_8afd811c14094734812250c0bbdc51ec88d1d6a01fd67f4f5c3df197885553a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>


        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        <div>
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>
";
        
        $__internal_8afd811c14094734812250c0bbdc51ec88d1d6a01fd67f4f5c3df197885553a6->leave($__internal_8afd811c14094734812250c0bbdc51ec88d1d6a01fd67f4f5c3df197885553a6_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18c1399dbad38c9185ca101ba06e8463274da348416b45ca9e7e2165d6c3e412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c1399dbad38c9185ca101ba06e8463274da348416b45ca9e7e2165d6c3e412->enter($__internal_18c1399dbad38c9185ca101ba06e8463274da348416b45ca9e7e2165d6c3e412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_18c1399dbad38c9185ca101ba06e8463274da348416b45ca9e7e2165d6c3e412->leave($__internal_18c1399dbad38c9185ca101ba06e8463274da348416b45ca9e7e2165d6c3e412_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  78 => 18,  68 => 20,  66 => 18,  62 => 16,  56 => 15,  47 => 12,  42 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>


        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/layout.html.twig");
    }
}
