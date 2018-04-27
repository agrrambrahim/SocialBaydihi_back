<?php

/* AppBundle:Applications:index.html.twig */
class __TwigTemplate_843806f1b7e929774fd246fedc4e5d4d3aac5101c1b3db419bea0ab25c2122c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Applications:index.html.twig", 1);
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
        $__internal_a819a420ac63cbb74face3da5df5a84fd5a43abc811f11bd0a4f257f5e0f2dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a819a420ac63cbb74face3da5df5a84fd5a43abc811f11bd0a4f257f5e0f2dcc->enter($__internal_a819a420ac63cbb74face3da5df5a84fd5a43abc811f11bd0a4f257f5e0f2dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Applications:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a819a420ac63cbb74face3da5df5a84fd5a43abc811f11bd0a4f257f5e0f2dcc->leave($__internal_a819a420ac63cbb74face3da5df5a84fd5a43abc811f11bd0a4f257f5e0f2dcc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffbbd0934b74883b3c76b3f17ac48aaad822650b214dcbf675f1cb91e5c84dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbbd0934b74883b3c76b3f17ac48aaad822650b214dcbf675f1cb91e5c84dd0->enter($__internal_ffbbd0934b74883b3c76b3f17ac48aaad822650b214dcbf675f1cb91e5c84dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
        <div class=\"row\">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_add");
        echo "\" title=\"\">
                    <div class=\"bg col-sm-4\" style=\"padding:10px;\">
                    <div class=\"card palette-Light-Blue bg\">
     
                            <div>
                                <div class=\"cw-current media\">
                                    <div class=\"cwc-info media-body\">
                                            <div class=\"cwci-temp\">New Application</div>
                                            <br>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "            <div class=\"bg col-sm-4\" style=\"padding:10px;\">
                <div class=\"card \"  style=\"background-color:#00b3a2\">
                    <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_up", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Up</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_down", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Down</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div>
                            <div class=\"cw-current media\">
                                <div class=\"cwc-info media-body\">
                                        <div class=\"cwci-temp\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</div>
                                        <br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>
</div>

";
        
        $__internal_ffbbd0934b74883b3c76b3f17ac48aaad822650b214dcbf675f1cb91e5c84dd0->leave($__internal_ffbbd0934b74883b3c76b3f17ac48aaad822650b214dcbf675f1cb91e5c84dd0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Applications:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 56,  107 => 48,  96 => 40,  90 => 37,  84 => 34,  78 => 31,  67 => 22,  63 => 21,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
{% block body %}

<div class=\"container\">
        <div class=\"row\">
                <a href=\"{{path(\"app_applications_add\")}}\" title=\"\">
                    <div class=\"bg col-sm-4\" style=\"padding:10px;\">
                    <div class=\"card palette-Light-Blue bg\">
     
                            <div>
                                <div class=\"cw-current media\">
                                    <div class=\"cwc-info media-body\">
                                            <div class=\"cwci-temp\">New Application</div>
                                            <br>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        {% for item in applications %}
            <div class=\"bg col-sm-4\" style=\"padding:10px;\">
                <div class=\"card \"  style=\"background-color:#00b3a2\">
                    <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"{{path(\"app_applications_delete\",{\"id\":item.id})}}\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"app_applications_edit\",{\"id\":item.id})}}\">Edit</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"app_applications_up\",{\"id\":item.id})}}\">Up</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"app_applications_down\",{\"id\":item.id})}}\">Down</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div>
                            <div class=\"cw-current media\">
                                <div class=\"cwc-info media-body\">
                                        <div class=\"cwci-temp\">{{item.title}}</div>
                                        <br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

{% endblock%}", "AppBundle:Applications:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Applications/index.html.twig");
    }
}
