<?php

/* AppBundle:Guides:view.html.twig */
class __TwigTemplate_59e1a695441a0daf5f1ef884c1d8d98a0191e3517d8047d869b14773a7a41b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:view.html.twig", 1);
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
        $__internal_aa23b7e6b25397353ae082ec764a4130a3166cafa9e1c0bf3483be8436578dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa23b7e6b25397353ae082ec764a4130a3166cafa9e1c0bf3483be8436578dfe->enter($__internal_aa23b7e6b25397353ae082ec764a4130a3166cafa9e1c0bf3483be8436578dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa23b7e6b25397353ae082ec764a4130a3166cafa9e1c0bf3483be8436578dfe->leave($__internal_aa23b7e6b25397353ae082ec764a4130a3166cafa9e1c0bf3483be8436578dfe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9acb159579dfe1329ba6f71f35b432413929db00f880beee767ec47ba70c7d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acb159579dfe1329ba6f71f35b432413929db00f880beee767ec47ba70c7d4a->enter($__internal_9acb159579dfe1329ba6f71f35b432413929db00f880beee767ec47ba70c7d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
<div class=\"col-sm-6\">
            ";
        // line 6
        if (($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "enabled", array()) == true)) {
            // line 7
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_notif", array("id" => $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_edit", array("id" => $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 20pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-off\"></i> Enable to send notification</h2>
                </a>
            ";
        }
        // line 15
        echo "            <div class=\"card\">
                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_index");
        echo "\" class=\"zmdi zmdi-arrow-left\"></a>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "title", array())), 40, true), "html", null, true);
        echo "</p>
                </div>
                <ul class=\"actions a-alt\" style=\"right: 4px;top: 34px;position: absolute;\">
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_delete", array("id" => $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_edit", array("id" => $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url(";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "media", array()), "link", array()), "product_img")), "html", null, true);
        echo "); height: 300px;\">
                    <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "created", array()));
        echo "</small>
                    <div class=\"card-header class-23\">
                        <h3 style=\"color:white\">
                        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "title", array()), "html", null, true);
        echo "
                        </h3>
                    </div>
                </div>
                <div class=\"class-28\">";
        // line 44
        echo $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "content", array());
        echo "</div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "created", array()), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "created", array()), "H:i"), "html", null, true);
        echo "</li>
                        <li>
                            Published:
                            ";
        // line 50
        if (($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "enabled", array()) == true)) {
            // line 51
            echo "                                Yes
                            ";
        } else {
            // line 53
            echo "                                No
                            ";
        }
        // line 55
        echo "                        </li>
                    </ul>
                </div>
            </div>
            <br>

\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["guide"] ?? $this->getContext($context, "guide")), "steps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 62
            echo "\t\t<div class=\"card\">
\t\t<div>
\t\t\t<span class=\"pos-step\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "position", array()), "html", null, true);
            echo "</span>
\t\t\t<span class=\"title-step\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", array()), "html", null, true);
            echo "</span>
\t\t</div>
        ";
            // line 67
            if (($this->getAttribute($context["step"], "media", array()) != null)) {
                // line 68
                echo "        <img style=\"width:100%;    max-height: 350px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["step"], "media", array()), "link", array())), "product_img"), "html", null, true);
                echo "\" />
        ";
            }
            // line 70
            echo "\t\t<div class=\"content-step\">
\t\t\t";
            // line 71
            echo $this->getAttribute($context["step"], "content", array());
            echo "
\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t</div>

        <div class=\"col-sm-6\">

            <div class=\"card\">

                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"#\" class=\"zmdi zmdi-comment-alt\"></a>
                    <p>Comments</p>
                </div>
                <div class=\"list-group lg-alt lg-even-black\">
                    ";
        // line 87
        $context["k"] = 0;
        // line 88
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 89
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                            ";
            // line 91
            if (($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "media", array()) == null)) {
                // line 92
                echo "                                ";
                if ((($context["k"] ?? $this->getContext($context, "k")) == 0)) {
                    // line 93
                    echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                } elseif ((                // line 94
($context["k"] ?? $this->getContext($context, "k")) == 1)) {
                    // line 95
                    echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                } elseif ((                // line 96
($context["k"] ?? $this->getContext($context, "k")) == 2)) {
                    // line 97
                    echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                } elseif ((                // line 98
($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                    // line 99
                    echo "                                    <div class=\"avatar-char palette-Red-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
                                ";
                }
                // line 101
                echo "                            ";
            } else {
                // line 102
                echo "                                <img class=\"avatar-char palette-Red-400 bg\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "media", array()), "link", array())), "profile_picture"), "html", null, true);
                echo "\" alt=\"\">
                            ";
            }
            // line 104
            echo "
                                
                            </div>
                            <div class=\"pull-right\">
                                <ul class=\"actions\">
                                    <li class=\"dropdown\">
                                        <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"zmdi zmdi-more-vert\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_hide", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">
                                                    ";
            // line 119
            if (($this->getAttribute($context["comment"], "enabled", array()) == true)) {
                // line 120
                echo "                                                        Hide
                                                    ";
            } else {
                // line 122
                echo "                                                        Show
                                                    ";
            }
            // line 124
            echo "                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"lgi-heading\"> <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "id", array()))), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()), "html", null, true);
            echo "</a> </div>
                                <small class=\"lgi-text\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</small>
                                <ul class=\"lgi-attrs\">
                                    <li>Date Created:";
            // line 134
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
                                    <li>
                                        Published:
                                        ";
            // line 137
            if (($this->getAttribute($context["comment"], "enabled", array()) == true)) {
                // line 138
                echo "                                            Yes
                                        ";
            } else {
                // line 140
                echo "                                            No
                                        ";
            }
            // line 142
            echo "                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        ";
            // line 147
            if ((($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                // line 148
                echo "                            ";
                $context["k"] = 0;
                // line 149
                echo "                        ";
            } else {
                // line 150
                echo "                            ";
                $context["k"] = (($context["k"] ?? $this->getContext($context, "k")) + 1);
                // line 151
                echo "                        ";
            }
            // line 152
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 153
            echo "                        <p style=\"text-align:center\">
                            <img style=\"padding:50px; width:100%\" src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                    <div class=\" pull-right\">
                        ";
        // line 158
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>
        </div>
</div>
";
        
        $__internal_9acb159579dfe1329ba6f71f35b432413929db00f880beee767ec47ba70c7d4a->leave($__internal_9acb159579dfe1329ba6f71f35b432413929db00f880beee767ec47ba70c7d4a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 158,  361 => 157,  352 => 154,  349 => 153,  344 => 152,  341 => 151,  338 => 150,  335 => 149,  332 => 148,  330 => 147,  323 => 142,  319 => 140,  315 => 138,  313 => 137,  305 => 134,  300 => 132,  294 => 131,  285 => 124,  281 => 122,  277 => 120,  275 => 119,  271 => 118,  265 => 115,  252 => 104,  246 => 102,  243 => 101,  237 => 99,  235 => 98,  230 => 97,  228 => 96,  223 => 95,  221 => 94,  216 => 93,  213 => 92,  211 => 91,  207 => 89,  201 => 88,  199 => 87,  185 => 75,  175 => 71,  172 => 70,  166 => 68,  164 => 67,  159 => 65,  155 => 64,  151 => 62,  147 => 61,  139 => 55,  135 => 53,  131 => 51,  129 => 50,  121 => 47,  115 => 44,  108 => 40,  102 => 37,  98 => 36,  90 => 31,  84 => 28,  72 => 19,  68 => 18,  63 => 15,  55 => 11,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}

<div class=\"container\">
<div class=\"col-sm-6\">
            {% if guide.enabled == true %}
                <a href=\"{{path(\"app_guides_notif\",{id:guide.id})}}\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            {% else %}
                <a href=\"{{path(\"app_guides_edit\",{id:guide.id})}}\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 20pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-off\"></i> Enable to send notification</h2>
                </a>
            {% endif %}
            <div class=\"card\">
                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"{{path(\"app_guides_index\")}}\" class=\"zmdi zmdi-arrow-left\"></a>
                    <p>{{guide.title|striptags|truncate(40, true)}}</p>
                </div>
                <ul class=\"actions a-alt\" style=\"right: 4px;top: 34px;position: absolute;\">
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a href=\"{{path(\"app_guides_delete\",{\"id\":guide.id})}}\">Delete</a>
                            </li>
                            <li>
                                <a href=\"{{path(\"app_guides_edit\",{\"id\":guide.id})}}\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url({{asset(guide.media.link|imagine_filter(\"product_img\"))}}); height: 300px;\">
                    <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">{{guide.created|ago}}</small>
                    <div class=\"card-header class-23\">
                        <h3 style=\"color:white\">
                        {{guide.title}}
                        </h3>
                    </div>
                </div>
                <div class=\"class-28\">{{guide.content|raw}}</div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:{{guide.created|date(\"d/m/Y\")}} at {{guide.created|date(\"H:i\")}}</li>
                        <li>
                            Published:
                            {% if guide.enabled == true %}
                                Yes
                            {% else %}
                                No
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </div>
            <br>

\t\t{% for step in guide.steps %}
\t\t<div class=\"card\">
\t\t<div>
\t\t\t<span class=\"pos-step\">{{step.position}}</span>
\t\t\t<span class=\"title-step\">{{step.title}}</span>
\t\t</div>
        {% if step.media != null %}
        <img style=\"width:100%;    max-height: 350px;\" src=\"{{asset(step.media.link)|imagine_filter('product_img')}}\" />
        {% endif %}
\t\t<div class=\"content-step\">
\t\t\t{{step.content|raw}}
\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>

        <div class=\"col-sm-6\">

            <div class=\"card\">

                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"#\" class=\"zmdi zmdi-comment-alt\"></a>
                    <p>Comments</p>
                </div>
                <div class=\"list-group lg-alt lg-even-black\">
                    {% set k= 0 %}
                    {% for comment in pagination %}
                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
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

                                
                            </div>
                            <div class=\"pull-right\">
                                <ul class=\"actions\">
                                    <li class=\"dropdown\">
                                        <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"zmdi zmdi-more-vert\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"{{path(\"app_comments_delete\",{\"id\":comment.id})}}\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"{{path(\"app_comments_hide\",{\"id\":comment.id})}}\">
                                                    {% if comment.enabled == true %}
                                                        Hide
                                                    {% else %}
                                                        Show
                                                    {% endif %}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"lgi-heading\"> <a href=\"{{path(\"user_user_edit\",{\"id\":comment.user.id})}}\" title=\"\">{{comment.user.name}}</a> </div>
                                <small class=\"lgi-text\">{{comment.content}}</small>
                                <ul class=\"lgi-attrs\">
                                    <li>Date Created:{{comment.created|date(\"d/m/Y\")}} at {{comment.created|date(\"H:i\")}}</li>
                                    <li>
                                        Published:
                                        {% if comment.enabled == true %}
                                            Yes
                                        {% else %}
                                            No
                                        {% endif %}
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {% if k==3 %}
                            {% set k=0 %}
                        {% else %}
                            {% set k=k+1 %}
                        {% endif %}
                    {% else %}
                        <p style=\"text-align:center\">
                            <img style=\"padding:50px; width:100%\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
                        </p>
                    {% endfor %}
                    <div class=\" pull-right\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                </div>
            </div>
        </div>
</div>
{% endblock %}", "AppBundle:Guides:view.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/view.html.twig");
    }
}
