<?php

/* AppBundle:Comments:index.html.twig */
class __TwigTemplate_cad8126637eeb0e8f34b04eda4a1ae2a5d92c370ae00a0452b8811f5230df6eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Comments:index.html.twig", 1);
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
        $__internal_9ec2a148d2995853d48a3fbe1ba9621dcdf8adf04788b346b8cb3a63dd14f6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec2a148d2995853d48a3fbe1ba9621dcdf8adf04788b346b8cb3a63dd14f6f9->enter($__internal_9ec2a148d2995853d48a3fbe1ba9621dcdf8adf04788b346b8cb3a63dd14f6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Comments:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ec2a148d2995853d48a3fbe1ba9621dcdf8adf04788b346b8cb3a63dd14f6f9->leave($__internal_9ec2a148d2995853d48a3fbe1ba9621dcdf8adf04788b346b8cb3a63dd14f6f9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f35484b27e98034e18e4aab0ce5be4f49dbccf5ab6fcc3203bd6a3eec792fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f35484b27e98034e18e4aab0ce5be4f49dbccf5ab6fcc3203bd6a3eec792fb1->enter($__internal_9f35484b27e98034e18e4aab0ce5be4f49dbccf5ab6fcc3203bd6a3eec792fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t\t<div class=\"c-header\">
\t\t\t<h2>Comments List</h2>
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by Posted date", "c.created");
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by Published", "c.enabled");
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
        // line 37
        $context["k"] = 0;
        // line 38
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
                            ";
            // line 42
            if (($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "media", array()) == null)) {
                // line 43
                echo "                                ";
                if ((($context["k"] ?? $this->getContext($context, "k")) == 0)) {
                    // line 44
                    echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                } elseif ((                // line 45
($context["k"] ?? $this->getContext($context, "k")) == 1)) {
                    // line 46
                    echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                } elseif ((                // line 47
($context["k"] ?? $this->getContext($context, "k")) == 2)) {
                    // line 48
                    echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                } elseif ((                // line 49
($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                    // line 50
                    echo "                                    <div class=\"avatar-char palette-Red-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                }
                // line 52
                echo "                            ";
            } else {
                // line 53
                echo "                                <img class=\"avatar-char palette-Red-400 bg\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "media", array()), "link", array())), "profile_picture"), "html", null, true);
                echo "\" alt=\"\">
                            ";
            }
            // line 55
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_delete_two", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_hide_two", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            if (($this->getAttribute($context["comment"], "enabled", array()) == true)) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\tHide
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\tShow
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()), "html", null, true);
            echo " </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">";
            // line 82
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_convert_encoding(strip_tags($this->getAttribute($context["comment"], "content", array())), "UTF-8", "HTML-ENTITIES"), 300, true), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tPublished:
\t\t\t\t\t\t\t\t\t";
            // line 87
            if (($this->getAttribute($context["comment"], "enabled", array()) == true)) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 97
            if ((($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                // line 98
                echo "\t\t\t\t\t";
                $context["k"] = 0;
                // line 99
                echo "\t\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t\t";
                $context["k"] = (($context["k"] ?? $this->getContext($context, "k")) + 1);
                // line 101
                echo "\t\t\t\t";
            }
            // line 102
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "\t\t\t\t<p style=\"text-align:center\">
\t\t\t\t\t<img style=\"padding:50px;\" src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 108
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_9f35484b27e98034e18e4aab0ce5be4f49dbccf5ab6fcc3203bd6a3eec792fb1->leave($__internal_9f35484b27e98034e18e4aab0ce5be4f49dbccf5ab6fcc3203bd6a3eec792fb1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Comments:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 108,  244 => 107,  235 => 104,  232 => 103,  227 => 102,  224 => 101,  221 => 100,  218 => 99,  215 => 98,  213 => 97,  206 => 92,  202 => 90,  198 => 88,  196 => 87,  188 => 84,  183 => 82,  177 => 81,  168 => 74,  164 => 72,  160 => 70,  158 => 69,  154 => 68,  148 => 65,  136 => 55,  130 => 53,  127 => 52,  121 => 50,  119 => 49,  114 => 48,  112 => 47,  107 => 46,  105 => 45,  100 => 44,  97 => 43,  95 => 42,  90 => 39,  84 => 38,  82 => 37,  63 => 21,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
\t\t\t<h2>Comments List</h2>
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
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Posted date', 'c.created') }}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Published', 'c.enabled') }}
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
\t\t\t{% for comment in pagination %}
\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
                            {% if comment.user.media == null %}
                                {% if k==0 %}
                                    <div class=\"avatar-char palette-Light-Blue bg\">{{comment.user.name|first|lower}}</div>
                                {% elseif k==1 %}
                                    <div class=\"avatar-char palette-Purple-300 bg\">{{comment.user.name|first|lower}}</div>
                                {% elseif k==2 %}
                                    <div class=\"avatar-char palette-Green-400 bg\">{{comment.user.name|first|lower}}</div>
                                {% elseif k==3 %}
                                    <div class=\"avatar-char palette-Red-400 bg\">{{comment.user.name|first|lower}}</div>
                                {% endif %}
                            {% else %}
                                <img class=\"avatar-char palette-Red-400 bg\" src=\"{{asset(comment.user.media.link)|imagine_filter(\"profile_picture\")}}\" alt=\"\">
                            {% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_comments_delete_two\",{\"id\":comment.id})}}\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_comments_hide_two\",{\"id\":comment.id})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if comment.enabled == true %}
\t\t\t\t\t\t\t\t\t\t\t\t\tHide
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tShow
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"{{path(\"user_user_edit\",{id:comment.user.id})}}\" >{{comment.user.name}} </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">{{comment.content|striptags|convert_encoding('UTF-8', 'HTML-ENTITIES')|truncate(300, true)}}</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:{{comment.created|date(\"d/m/Y\")}} at {{comment.created|date(\"H:i\")}}</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tPublished:
\t\t\t\t\t\t\t\t\t{% if comment.enabled == true %}
\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>
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
{% endblock%}", "AppBundle:Comments:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Comments/index.html.twig");
    }
}
