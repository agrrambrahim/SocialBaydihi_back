<?php

/* UserBundle:User:comment.html.twig */
class __TwigTemplate_103b87d5989845ee2d08ddfa91c68f7f7a22657167475bf4423a736aed81c217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:comment.html.twig", 1);
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
        $__internal_91cf9e34daa1a0418ce53966c44966269f3b76c611cbe806bde1891562e53724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cf9e34daa1a0418ce53966c44966269f3b76c611cbe806bde1891562e53724->enter($__internal_91cf9e34daa1a0418ce53966c44966269f3b76c611cbe806bde1891562e53724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91cf9e34daa1a0418ce53966c44966269f3b76c611cbe806bde1891562e53724->leave($__internal_91cf9e34daa1a0418ce53966c44966269f3b76c611cbe806bde1891562e53724_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_86a3b3bfde60eeb4f61ff7c07a24f688970024a765858138b6b316f4904b50d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a3b3bfde60eeb4f61ff7c07a24f688970024a765858138b6b316f4904b50d4->enter($__internal_86a3b3bfde60eeb4f61ff7c07a24f688970024a765858138b6b316f4904b50d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"container\">
            <div class=\"c-header\">
                <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "<small>( ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " )</small></h2>
            </div>
            <div class=\"card\" id=\"profile-main\">
                <div class=\"pm-overview c-overflow mCustomScrollbar _mCS_4 mCS-autoHide\" style=\"overflow: visible;\"><div id=\"mCSB_4\" class=\"mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside\" tabindex=\"0\"><div id=\"mCSB_4_container\" class=\"mCSB_container mCS_x_hidden mCS_no_scrollbar_x\" style=\"position: relative; top: 0px; left: 0px; width: 100%;\" dir=\"ltr\">
                    <div class=\"pmo-pic\">
                        <div class=\"p-relative\">
                            <a href=\"\">
                            ";
        // line 13
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", array()) == null)) {
            // line 14
            echo "                                  <div class=\" palette-Red-400 bg img-responsive mCS_img_loaded\" style=\"min-height: 200px;color: white;text-align: center;height: auto;line-height: 200px;font-size: 71pt;text-transform: uppercase;\">";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()))), "html", null, true);
            echo "</div>
                            ";
        } else {
            // line 16
            echo "                                <img class=\"img-responsive mCS_img_loaded\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", array()), "link", array())), "profile_picture"), "html", null, true);
            echo "\" alt=\"\">
                            ";
        }
        // line 18
        echo "
                            </a>
                            <div class=\"dropdown pmop-message\">
                                <span  class=\"btn palette-White bg btn-float  \">
                                    ";
        // line 22
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "type", array()) == "google")) {
            // line 23
            echo "                                    <i class=\"zmdi zmdi-google-glass\" style=\"line-height: 40px;\"></i>
                                    ";
        } elseif (($this->getAttribute(        // line 24
($context["user"] ?? $this->getContext($context, "user")), "type", array()) == "facebook")) {
            // line 25
            echo "                                    <i class=\"zmdi zmdi-facebook-box\" style=\"line-height: 40px;\"></i>
                                    ";
        } else {
            // line 27
            echo "                                    <i class=\"zmdi zmdi-email\" style=\"line-height: 40px;\"></i>
                                    ";
        }
        // line 29
        echo "                                </span>
                            </div>
                        </div>
                        <div class=\"pmo-stat\">
                            <h2 class=\"m-0 c-white\">";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "comments", array())), "html", null, true);
        echo "</h2>
                            Total Comments
                        </div>
                    </div>
                    <div class=\"pmo-block pmo-contact hidden-xs\">
                        <h2></h2>
                    </div>
                    
                </div>
            </div>

            <div id=\"mCSB_4_scrollbar_horizontal\" class=\"mCSB_scrollTools mCSB_4_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal\" style=\"display: none;\">
                <div class=\"mCSB_draggerContainer\">
                    <div id=\"mCSB_4_dragger_horizontal\" class=\"mCSB_dragger\" style=\"position: absolute; min-width: 50px; width: 0px; left: 0px;\" oncontextmenu=\"return false;\"><div class=\"mCSB_dragger_bar\"></div>
                </div>
                <div class=\"mCSB_draggerRail\"></div>
            </div>
        </div>
    </div>
    <div class=\"pm-body clearfix\">
        <ul class=\"tab-nav tn-justified\">
            <li class=\"waves-effect\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Infos</a></li>
            <li class=\"active waves-effect\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_comment", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Comments</a></li>
        </ul>
        <div class=\"\">
\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t        ";
        // line 59
        $context["k"] = 0;
        // line 60
        echo "\t\t        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 61
            echo "\t\t            <div class=\"list-group-item media\">
\t\t                <div class=\"pull-left\">
\t\t                    ";
            // line 63
            if (($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "media", array()) == null)) {
                // line 64
                echo "\t\t                        ";
                if ((($context["k"] ?? $this->getContext($context, "k")) == 0)) {
                    // line 65
                    echo "\t\t                            <div class=\"avatar-char palette-Light-Blue bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
\t\t                        ";
                } elseif ((                // line 66
($context["k"] ?? $this->getContext($context, "k")) == 1)) {
                    // line 67
                    echo "\t\t                            <div class=\"avatar-char palette-Purple-300 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
\t\t                        ";
                } elseif ((                // line 68
($context["k"] ?? $this->getContext($context, "k")) == 2)) {
                    // line 69
                    echo "\t\t                            <div class=\"avatar-char palette-Green-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
\t\t                        ";
                } elseif ((                // line 70
($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                    // line 71
                    echo "\t\t                            <div class=\"avatar-char palette-Red-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "name", array()))), "html", null, true);
                    echo "</div>
\t\t                        ";
                }
                // line 73
                echo "\t\t                    ";
            } else {
                // line 74
                echo "\t\t                        <img class=\"avatar-char palette-Red-400 bg\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "media", array()), "link", array())), "profile_picture"), "html", null, true);
                echo "\" alt=\"\">
\t\t                    ";
            }
            // line 76
            echo "\t\t                </div>
\t\t                <div class=\"pull-right\">
\t\t                    <ul class=\"actions\">
\t\t                        <li class=\"dropdown\">
\t\t                            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t                                <i class=\"zmdi zmdi-more-vert\"></i>
\t\t                            </a>
\t\t                            <ul class=\"dropdown-menu dropdown-menu-right\">
\t\t                                <li>
\t\t                                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_delete", array("id" => $this->getAttribute($context["comment"], "id", array()), "from" => "user")), "html", null, true);
            echo "\">Delete</a>
\t\t                                </li>
\t\t                                <li>
\t\t                                    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_hide", array("id" => $this->getAttribute($context["comment"], "id", array()), "from" => "user")), "html", null, true);
            echo "\">
\t\t                                        ";
            // line 89
            if (($this->getAttribute($context["comment"], "enabled", array()) == true)) {
                // line 90
                echo "\t\t                                            Hide
\t\t                                        ";
            } else {
                // line 92
                echo "\t\t                                            Show
\t\t                                        ";
            }
            // line 94
            echo "\t\t                                    </a>
\t\t                                </li>
\t\t                            </ul>
\t\t                        </li>
\t\t                    </ul>
\t\t                </div>
\t\t                <div class=\"media-body\">
\t\t                    <div class=\"lgi-heading\">
\t\t                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_view", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "guide", array()), "id", array()))), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "guide", array()), "title", array()), "html", null, true);
            echo "</a>
\t\t                    </div>
\t\t                    <small class=\"lgi-text\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</small>
\t\t                    <ul class=\"lgi-attrs\">
\t\t                        <li>Date Created:";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
\t\t                        <li>
\t\t                            Published:
\t\t                            ";
            // line 109
            if (($this->getAttribute($context["comment"], "enabled", array()) == true)) {
                // line 110
                echo "\t\t                                Yes
\t\t                            ";
            } else {
                // line 112
                echo "\t\t                                No
\t\t                            ";
            }
            // line 114
            echo "\t\t                            
\t\t                        </li>
\t\t                    </ul>
\t\t                </div>
\t\t            </div>
\t\t            ";
            // line 119
            if ((($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                // line 120
                echo "\t\t                ";
                $context["k"] = 0;
                // line 121
                echo "\t\t            ";
            } else {
                // line 122
                echo "\t\t                ";
                $context["k"] = (($context["k"] ?? $this->getContext($context, "k")) + 1);
                // line 123
                echo "\t\t            ";
            }
            // line 124
            echo "\t\t        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "\t\t            <p style=\"text-align:center\">
\t\t                <img style=\"padding:50px; width:100%\" src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t            </p>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "\t\t        <div class=\" pull-right\">
\t\t            ";
        // line 130
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t        </div>
\t        </div>
        </div>
    </div>
</div>
</div>

";
        
        $__internal_86a3b3bfde60eeb4f61ff7c07a24f688970024a765858138b6b316f4904b50d4->leave($__internal_86a3b3bfde60eeb4f61ff7c07a24f688970024a765858138b6b316f4904b50d4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 130,  295 => 129,  286 => 126,  283 => 125,  278 => 124,  275 => 123,  272 => 122,  269 => 121,  266 => 120,  264 => 119,  257 => 114,  253 => 112,  249 => 110,  247 => 109,  239 => 106,  234 => 104,  227 => 102,  217 => 94,  213 => 92,  209 => 90,  207 => 89,  203 => 88,  197 => 85,  186 => 76,  180 => 74,  177 => 73,  171 => 71,  169 => 70,  164 => 69,  162 => 68,  157 => 67,  155 => 66,  150 => 65,  147 => 64,  145 => 63,  141 => 61,  135 => 60,  133 => 59,  126 => 55,  122 => 54,  98 => 33,  92 => 29,  88 => 27,  84 => 25,  82 => 24,  79 => 23,  77 => 22,  71 => 18,  65 => 16,  59 => 14,  57 => 13,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"container\">
            <div class=\"c-header\">
                <h2>{{user.name}}<small>( {{user.username}} )</small></h2>
            </div>
            <div class=\"card\" id=\"profile-main\">
                <div class=\"pm-overview c-overflow mCustomScrollbar _mCS_4 mCS-autoHide\" style=\"overflow: visible;\"><div id=\"mCSB_4\" class=\"mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside\" tabindex=\"0\"><div id=\"mCSB_4_container\" class=\"mCSB_container mCS_x_hidden mCS_no_scrollbar_x\" style=\"position: relative; top: 0px; left: 0px; width: 100%;\" dir=\"ltr\">
                    <div class=\"pmo-pic\">
                        <div class=\"p-relative\">
                            <a href=\"\">
                            {% if user.media==null %}
                                  <div class=\" palette-Red-400 bg img-responsive mCS_img_loaded\" style=\"min-height: 200px;color: white;text-align: center;height: auto;line-height: 200px;font-size: 71pt;text-transform: uppercase;\">{{user.name|first|lower}}</div>
                            {% else %}
                                <img class=\"img-responsive mCS_img_loaded\" src=\"{{asset(user.media.link)|imagine_filter(\"profile_picture\")}}\" alt=\"\">
                            {% endif %}

                            </a>
                            <div class=\"dropdown pmop-message\">
                                <span  class=\"btn palette-White bg btn-float  \">
                                    {% if user.type==\"google\" %}
                                    <i class=\"zmdi zmdi-google-glass\" style=\"line-height: 40px;\"></i>
                                    {% elseif user.type==\"facebook\" %}
                                    <i class=\"zmdi zmdi-facebook-box\" style=\"line-height: 40px;\"></i>
                                    {% else %}
                                    <i class=\"zmdi zmdi-email\" style=\"line-height: 40px;\"></i>
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                        <div class=\"pmo-stat\">
                            <h2 class=\"m-0 c-white\">{{user.comments|length}}</h2>
                            Total Comments
                        </div>
                    </div>
                    <div class=\"pmo-block pmo-contact hidden-xs\">
                        <h2></h2>
                    </div>
                    
                </div>
            </div>

            <div id=\"mCSB_4_scrollbar_horizontal\" class=\"mCSB_scrollTools mCSB_4_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal\" style=\"display: none;\">
                <div class=\"mCSB_draggerContainer\">
                    <div id=\"mCSB_4_dragger_horizontal\" class=\"mCSB_dragger\" style=\"position: absolute; min-width: 50px; width: 0px; left: 0px;\" oncontextmenu=\"return false;\"><div class=\"mCSB_dragger_bar\"></div>
                </div>
                <div class=\"mCSB_draggerRail\"></div>
            </div>
        </div>
    </div>
    <div class=\"pm-body clearfix\">
        <ul class=\"tab-nav tn-justified\">
            <li class=\"waves-effect\"><a href=\"{{path('user_user_edit',{\"id\":user.id})}}\">Infos</a></li>
            <li class=\"active waves-effect\"><a href=\"{{path('user_user_comment',{\"id\":user.id})}}\">Comments</a></li>
        </ul>
        <div class=\"\">
\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t        {% set k= 0 %}
\t\t        {% for comment in pagination %}
\t\t            <div class=\"list-group-item media\">
\t\t                <div class=\"pull-left\">
\t\t                    {% if comment.user.media == null %}
\t\t                        {% if k==0 %}
\t\t                            <div class=\"avatar-char palette-Light-Blue bg\">{{comment.user.name|first|lower}}</div>
\t\t                        {% elseif k==1 %}
\t\t                            <div class=\"avatar-char palette-Purple-300 bg\">{{comment.user.name|first|lower}}</div>
\t\t                        {% elseif k==2 %}
\t\t                            <div class=\"avatar-char palette-Green-400 bg\">{{comment.user.name|first|lower}}</div>
\t\t                        {% elseif k==3 %}
\t\t                            <div class=\"avatar-char palette-Red-400 bg\">{{comment.user.name|first|lower}}</div>
\t\t                        {% endif %}
\t\t                    {% else %}
\t\t                        <img class=\"avatar-char palette-Red-400 bg\" src=\"{{asset(comment.user.media.link)|imagine_filter(\"profile_picture\")}}\" alt=\"\">
\t\t                    {% endif %}
\t\t                </div>
\t\t                <div class=\"pull-right\">
\t\t                    <ul class=\"actions\">
\t\t                        <li class=\"dropdown\">
\t\t                            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t                                <i class=\"zmdi zmdi-more-vert\"></i>
\t\t                            </a>
\t\t                            <ul class=\"dropdown-menu dropdown-menu-right\">
\t\t                                <li>
\t\t                                    <a href=\"{{path(\"app_comments_delete\",{\"id\":comment.id,\"from\":\"user\"})}}\">Delete</a>
\t\t                                </li>
\t\t                                <li>
\t\t                                    <a href=\"{{path(\"app_comments_hide\",{\"id\":comment.id,\"from\":\"user\"})}}\">
\t\t                                        {% if comment.enabled == true %}
\t\t                                            Hide
\t\t                                        {% else %}
\t\t                                            Show
\t\t                                        {% endif %}
\t\t                                    </a>
\t\t                                </li>
\t\t                            </ul>
\t\t                        </li>
\t\t                    </ul>
\t\t                </div>
\t\t                <div class=\"media-body\">
\t\t                    <div class=\"lgi-heading\">
\t\t                        <a href=\"{{path(\"app_guides_view\",{\"id\":comment.guide.id})}}\" title=\"\">{{comment.guide.title}}</a>
\t\t                    </div>
\t\t                    <small class=\"lgi-text\">{{comment.content}}</small>
\t\t                    <ul class=\"lgi-attrs\">
\t\t                        <li>Date Created:{{comment.created|date(\"d/m/Y\")}} at {{comment.created|date(\"H:i\")}}</li>
\t\t                        <li>
\t\t                            Published:
\t\t                            {% if comment.enabled == true %}
\t\t                                Yes
\t\t                            {% else %}
\t\t                                No
\t\t                            {% endif %}
\t\t                            
\t\t                        </li>
\t\t                    </ul>
\t\t                </div>
\t\t            </div>
\t\t            {% if k==3 %}
\t\t                {% set k=0 %}
\t\t            {% else %}
\t\t                {% set k=k+1 %}
\t\t            {% endif %}
\t\t        {% else %}
\t\t            <p style=\"text-align:center\">
\t\t                <img style=\"padding:50px; width:100%\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
\t\t            </p>
\t\t        {% endfor %}
\t\t        <div class=\" pull-right\">
\t\t            {{ knp_pagination_render(pagination) }}
\t\t        </div>
\t        </div>
        </div>
    </div>
</div>
</div>

{% endblock%}", "UserBundle:User:comment.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/User/comment.html.twig");
    }
}
