<?php

/* AppBundle:Support:view.html.twig */
class __TwigTemplate_4fef53c1dd3ef0b88e13e2efd716be8aabae33e372690b6130dbde559a69a212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed8b2c64ac8b7479e6993f1642b2fe1cf6034701a27fdc0d9f56bcf24bdbe3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8b2c64ac8b7479e6993f1642b2fe1cf6034701a27fdc0d9f56bcf24bdbe3eb->enter($__internal_ed8b2c64ac8b7479e6993f1642b2fe1cf6034701a27fdc0d9f56bcf24bdbe3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Support:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8b2c64ac8b7479e6993f1642b2fe1cf6034701a27fdc0d9f56bcf24bdbe3eb->leave($__internal_ed8b2c64ac8b7479e6993f1642b2fe1cf6034701a27fdc0d9f56bcf24bdbe3eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_39ef17277734886f49b8896e92aa3c788c8a5934c673f4a1c076dff69cf21c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ef17277734886f49b8896e92aa3c788c8a5934c673f4a1c076dff69cf21c65->enter($__internal_39ef17277734886f49b8896e92aa3c788c8a5934c673f4a1c076dff69cf21c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"card\" id=\"todo-lists\">
    <div class=\"card-header ch-dark palette-Teal-600 bg\">
        <h2>Full name : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "subject", array()), "html", null, true);
        echo "
        <small>E-mail : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "email", array()), "html", null, true);
        echo "</small>
        </h2>

        <ul class=\"actions a-alt\">
            <li class=\"dropdown\">
                <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"zmdi zmdi-more-vert\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_delete", array("id" => $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_view", array("id" => $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "id", array()))), "html", null, true);
        echo "\">View</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"card-body\">
        <div class=\"list-group lg-alt\">
            <div class=\"list-group-item-header palette-Purple text\">Message</div>
            <div style=\"padding:40px; text-align: justify;padding:40px;\">
            \t";
        // line 31
        echo $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "message", array());
        echo "
            \t<br>
            \t<br>
            \t<br>
\t            <ul class=\"lgi-attrs pull-right\">
\t                <li>Sending Date:";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "created", array()), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "created", array()), "H:i"), "html", null, true);
        echo "</li>
\t            </ul>
            </div>

        </div>
        <a href=\"mailto:";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "email", array()), "html", null, true);
        echo "?subject=feedback\" class=\"btn palette-Blue-300 bg btn-float waves-effect waves-circle waves-float\"><i class=\"zmdi zmdi-mail-reply\"></i></a>
    </div>
</div>
";
        
        $__internal_39ef17277734886f49b8896e92aa3c788c8a5934c673f4a1c076dff69cf21c65->leave($__internal_39ef17277734886f49b8896e92aa3c788c8a5934c673f4a1c076dff69cf21c65_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Support:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  90 => 36,  82 => 31,  68 => 20,  62 => 17,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
<div class=\"card\" id=\"todo-lists\">
    <div class=\"card-header ch-dark palette-Teal-600 bg\">
        <h2>Full name : {{support.subject}}
        <small>E-mail : {{support.email}}</small>
        </h2>

        <ul class=\"actions a-alt\">
            <li class=\"dropdown\">
                <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"zmdi zmdi-more-vert\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a href=\"{{path(\"app_support_delete\",{\"id\":support.id})}}\">Delete</a>
                    </li>
                    <li>
                        <a href=\"{{path(\"app_support_view\",{\"id\":support.id})}}\">View</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"card-body\">
        <div class=\"list-group lg-alt\">
            <div class=\"list-group-item-header palette-Purple text\">Message</div>
            <div style=\"padding:40px; text-align: justify;padding:40px;\">
            \t{{ support.message | raw }}
            \t<br>
            \t<br>
            \t<br>
\t            <ul class=\"lgi-attrs pull-right\">
\t                <li>Sending Date:{{support.created|date(\"d/m/Y\")}} at {{support.created|date(\"H:i\")}}</li>
\t            </ul>
            </div>

        </div>
        <a href=\"mailto:{{support.email}}?subject=feedback\" class=\"btn palette-Blue-300 bg btn-float waves-effect waves-circle waves-float\"><i class=\"zmdi zmdi-mail-reply\"></i></a>
    </div>
</div>
{% endblock%}", "AppBundle:Support:view.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Support/view.html.twig");
    }
}
