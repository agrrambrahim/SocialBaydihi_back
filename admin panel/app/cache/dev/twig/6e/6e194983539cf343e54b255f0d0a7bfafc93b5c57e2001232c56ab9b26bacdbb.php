<?php

/* AppBundle:Support:index.html.twig */
class __TwigTemplate_8519d2a4b4e68bce8005e87480256e2d682c6ecc76d198ec07b55450bec461e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:index.html.twig", 1);
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
        $__internal_061a4021005c25d12d506ae4853ae52ecef145e89ce2e47e1f5e51c45521bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061a4021005c25d12d506ae4853ae52ecef145e89ce2e47e1f5e51c45521bae0->enter($__internal_061a4021005c25d12d506ae4853ae52ecef145e89ce2e47e1f5e51c45521bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Support:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061a4021005c25d12d506ae4853ae52ecef145e89ce2e47e1f5e51c45521bae0->leave($__internal_061a4021005c25d12d506ae4853ae52ecef145e89ce2e47e1f5e51c45521bae0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cef86f5aa1e576119bbff6d4860c978b56f46eb08bf508cf7a6af0585924853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cef86f5aa1e576119bbff6d4860c978b56f46eb08bf508cf7a6af0585924853->enter($__internal_1cef86f5aa1e576119bbff6d4860c978b56f46eb08bf508cf7a6af0585924853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t\t<div class=\"c-header\">
\t\t\t<h2>Support messages</h2>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<div class=\"action-header palette-Teal-400 bg clearfix\">
\t\t\t\t<div class=\"ah-label hidden-xs palette-White text\"></div>
\t\t\t\t<ul class=\"ah-actions actions a-alt\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-sort\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by full name", "s.subject");
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by Sending date", "s.created");
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by Sending email", "s.email");
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Refresh</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 40
        $context["k"] = 0;
        // line 41
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["support"]) {
            // line 42
            echo "\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t";
            // line 45
            if ((($context["k"] ?? $this->getContext($context, "k")) == 0)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 47
($context["k"] ?? $this->getContext($context, "k")) == 1)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 49
($context["k"] ?? $this->getContext($context, "k")) == 2)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 51
($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Red-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_delete", array("id" => $this->getAttribute($context["support"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_view", array("id" => $this->getAttribute($context["support"], "id", array()))), "html", null, true);
            echo "\">View</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"mailto:";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["support"], "subject", array()), "html", null, true);
            echo "?subject=feedback\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["support"], "email", array()), "html", null, true);
            echo " :  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["support"], "subject", array()), "html", null, true);
            echo " </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">";
            // line 74
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_convert_encoding(strip_tags($this->getAttribute($context["support"], "message", array())), "UTF-8", "HTML-ENTITIES"), 300, true), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["support"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["support"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 81
            if ((($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                // line 82
                echo "\t\t\t\t\t";
                $context["k"] = 0;
                // line 83
                echo "\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t";
                $context["k"] = (($context["k"] ?? $this->getContext($context, "k")) + 1);
                // line 85
                echo "\t\t\t\t";
            }
            // line 86
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "\t\t\t\t<p style=\"text-align:center\">
\t\t\t\t\t<img style=\"padding:50px;\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['support'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 92
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_1cef86f5aa1e576119bbff6d4860c978b56f46eb08bf508cf7a6af0585924853->leave($__internal_1cef86f5aa1e576119bbff6d4860c978b56f46eb08bf508cf7a6af0585924853_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Support:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 92,  211 => 91,  202 => 88,  199 => 87,  194 => 86,  191 => 85,  188 => 84,  185 => 83,  182 => 82,  180 => 81,  170 => 76,  165 => 74,  157 => 73,  147 => 66,  141 => 63,  130 => 54,  124 => 52,  122 => 51,  117 => 50,  115 => 49,  110 => 48,  108 => 47,  103 => 46,  101 => 45,  96 => 42,  90 => 41,  88 => 40,  69 => 24,  62 => 20,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
\t<div class=\"container\">
\t\t<div class=\"c-header\">
\t\t\t<h2>Support messages</h2>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<div class=\"action-header palette-Teal-400 bg clearfix\">
\t\t\t\t<div class=\"ah-label hidden-xs palette-White text\"></div>
\t\t\t\t<ul class=\"ah-actions actions a-alt\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-sort\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by full name', 's.subject') }}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Sending date', 's.created') }}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Sending email', 's.email') }}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Refresh</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t{% set k= 0 %}
\t\t\t{% for support in pagination %}
\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t{% if k==0 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==1 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==2 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==3 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Red-400 bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_support_delete\",{\"id\":support.id})}}\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_support_view\",{\"id\":support.id})}}\">View</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"mailto:{{support.subject}}?subject=feedback\" >{{support.email}} :  {{support.subject}} </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">{{support.message|striptags|convert_encoding('UTF-8', 'HTML-ENTITIES')|truncate(300, true)}}</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:{{support.created|date(\"d/m/Y\")}} at {{support.created|date(\"H:i\")}}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if k==3 %}
\t\t\t\t\t{% set k=0 %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set k=k+1 %}
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t<p style=\"text-align:center\">
\t\t\t\t\t<img style=\"padding:50px;\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t\t<div class=\" pull-right\">
\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock%}", "AppBundle:Support:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Support/index.html.twig");
    }
}
