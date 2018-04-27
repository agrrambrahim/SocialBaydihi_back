<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_6aa61b7a7c0012485e0cddcff735ecec023305429edfd71b619adf51079a23fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:index.html.twig", 1);
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
        $__internal_512ff42690c4fb745e993b86b6c6dfa39a0fd9eacec667d125248fbaf20be2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ff42690c4fb745e993b86b6c6dfa39a0fd9eacec667d125248fbaf20be2bc->enter($__internal_512ff42690c4fb745e993b86b6c6dfa39a0fd9eacec667d125248fbaf20be2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512ff42690c4fb745e993b86b6c6dfa39a0fd9eacec667d125248fbaf20be2bc->leave($__internal_512ff42690c4fb745e993b86b6c6dfa39a0fd9eacec667d125248fbaf20be2bc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9784b68a88f433ce16be33d87d5ed68173806fe97e9f5c48c74c3e8fbb6f91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9784b68a88f433ce16be33d87d5ed68173806fe97e9f5c48c74c3e8fbb6f91f->enter($__internal_c9784b68a88f433ce16be33d87d5ed68173806fe97e9f5c48c74c3e8fbb6f91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"container\">
    <div class=\"c-header\">
      <h2>Users list</h2>
    </div>
    <div class=\"card\">
      <div class=\"action-header palette-Teal-400 bg clearfix\">
        <div class=\"ah-label hidden-xs palette-White text\">Find users by  full name, email or AuthID.</div>
        <div class=\"ah-search\">
          <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
            <input type=\"text\" name=\"q\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\" placeholder=\"Search for articles by title\" class=\"ahs-input\">
            <i class=\"ah-search-close zmdi zmdi-long-arrow-left\" data-ma-action=\"ah-search-close\"></i>
            <button type=\"submit\" class=\"class-27\">Search</button>
          </form>
        </div>
        <ul class=\"ah-actions actions a-alt\">
          <li>
            <a href=\"\" class=\"ah-search-trigger\" data-ma-action=\"ah-search-open\">
              <i class=\"zmdi zmdi-search\"></i>
            </a>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-sort\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                ";
        // line 29
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by id", "u.id");
        echo "
              </li>
              <li>
                ";
        // line 32
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by type", "u.id");
        echo "
              </li>
              <li>
                ";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by full name", "u.name");
        echo "
              </li>
              <li>
                ";
        // line 38
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by E-mail", "u.username");
        echo "
              </li>
              <li>
                ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Sort by Account state", "u.username");
        echo "
              </li>
            </ul>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-more-vert\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                <a href=\"\">Refresh</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class=\"list-group lg-alt lg-even-black\">
        <div class=\"table-responsive\">
          <table class=\"table table-striped\">
            <thead>
              <tr>
                <th width=\"70px\">Id</th>
                <th width=\"70px\">Type</th>
                <th>Full Name</th>
                <th>E-mail or AuthID</th>
                <th>Account state</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
             ";
        // line 71
        $context["k"] = 0;
        // line 72
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 73
            echo "                <tr>
                  <td>
                    ";
            // line 75
            if (($this->getAttribute($context["user"], "media", array()) == null)) {
                // line 76
                echo "                        ";
                if ((($context["k"] ?? $this->getContext($context, "k")) == 0)) {
                    // line 77
                    echo "                            <div class=\"avatar-char palette-Light-Blue bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["user"], "name", array()))), "html", null, true);
                    echo "</div>
                        ";
                } elseif ((                // line 78
($context["k"] ?? $this->getContext($context, "k")) == 1)) {
                    // line 79
                    echo "                            <div class=\"avatar-char palette-Purple-300 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["user"], "name", array()))), "html", null, true);
                    echo "</div>
                        ";
                } elseif ((                // line 80
($context["k"] ?? $this->getContext($context, "k")) == 2)) {
                    // line 81
                    echo "                            <div class=\"avatar-char palette-Green-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["user"], "name", array()))), "html", null, true);
                    echo "</div>
                        ";
                } elseif ((                // line 82
($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                    // line 83
                    echo "                            <div class=\"avatar-char palette-Red-400 bg\">";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($context["user"], "name", array()))), "html", null, true);
                    echo "</div>
                        ";
                }
                // line 85
                echo "                    ";
            } else {
                // line 86
                echo "                        <img class=\"avatar-char palette-Red-400 bg\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["user"], "media", array()), "link", array())), "profile_picture"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 88
            echo "
                  </td>
                  <td>
                    ";
            // line 91
            if (($this->getAttribute($context["user"], "type", array()) == "google")) {
                // line 92
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/google.png"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } elseif (($this->getAttribute(            // line 93
$context["user"], "type", array()) == "facebook")) {
                // line 94
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/facebook.png"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } else {
                // line 96
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/email.png"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 98
            echo "                  </td>
                  <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 102
            if (($this->getAttribute($context["user"], "enabled", array()) == true)) {
                // line 103
                echo "                      <span class=\"label label-success\">Enabled</span>
                    ";
            } else {
                // line 105
                echo "                      <span class=\"label label-danger\">Disabled</span>
                    ";
            }
            // line 107
            echo "                  </td>
                  <td>
                    <div class=\"pull-right\">
                      <ul class=\"actions\">
                        <li class=\"dropdown\">
                          <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                          </a>
                          <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                              <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            </li>
                            <li>
                              <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_comment", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Comments</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                ";
            // line 128
            if ((($context["k"] ?? $this->getContext($context, "k")) == 3)) {
                // line 129
                echo "                    ";
                $context["k"] = 0;
                // line 130
                echo "                ";
            } else {
                // line 131
                echo "                    ";
                $context["k"] = (($context["k"] ?? $this->getContext($context, "k")) + 1);
                // line 132
                echo "                ";
            }
            // line 133
            echo "              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            echo "                <tr>
                  <td colspan=\"6\">
                    <p style=\"text-align:center\">
                      <img style=\"padding:50px;\" src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                    </p>
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "            </tbody>
          </table>
          <div class=\" pull-right\" style=\"padding-right:30px;\">
            ";
        // line 145
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_c9784b68a88f433ce16be33d87d5ed68173806fe97e9f5c48c74c3e8fbb6f91f->leave($__internal_c9784b68a88f433ce16be33d87d5ed68173806fe97e9f5c48c74c3e8fbb6f91f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 145,  293 => 142,  282 => 137,  277 => 134,  272 => 133,  269 => 132,  266 => 131,  263 => 130,  260 => 129,  258 => 128,  247 => 120,  241 => 117,  229 => 107,  225 => 105,  221 => 103,  219 => 102,  214 => 100,  210 => 99,  207 => 98,  201 => 96,  195 => 94,  193 => 93,  188 => 92,  186 => 91,  181 => 88,  175 => 86,  172 => 85,  166 => 83,  164 => 82,  159 => 81,  157 => 80,  152 => 79,  150 => 78,  145 => 77,  142 => 76,  140 => 75,  136 => 73,  130 => 72,  128 => 71,  95 => 41,  89 => 38,  83 => 35,  77 => 32,  71 => 29,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"c-header\">
      <h2>Users list</h2>
    </div>
    <div class=\"card\">
      <div class=\"action-header palette-Teal-400 bg clearfix\">
        <div class=\"ah-label hidden-xs palette-White text\">Find users by  full name, email or AuthID.</div>
        <div class=\"ah-search\">
          <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
            <input type=\"text\" name=\"q\" value=\"{{app.request.get('title')}}\" placeholder=\"Search for articles by title\" class=\"ahs-input\">
            <i class=\"ah-search-close zmdi zmdi-long-arrow-left\" data-ma-action=\"ah-search-close\"></i>
            <button type=\"submit\" class=\"class-27\">Search</button>
          </form>
        </div>
        <ul class=\"ah-actions actions a-alt\">
          <li>
            <a href=\"\" class=\"ah-search-trigger\" data-ma-action=\"ah-search-open\">
              <i class=\"zmdi zmdi-search\"></i>
            </a>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-sort\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by id', 'u.id') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by type', 'u.id') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by full name', 'u.name') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by E-mail', 'u.username') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by Account state', 'u.username') }}
              </li>
            </ul>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-more-vert\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                <a href=\"\">Refresh</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class=\"list-group lg-alt lg-even-black\">
        <div class=\"table-responsive\">
          <table class=\"table table-striped\">
            <thead>
              <tr>
                <th width=\"70px\">Id</th>
                <th width=\"70px\">Type</th>
                <th>Full Name</th>
                <th>E-mail or AuthID</th>
                <th>Account state</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
             {% set k= 0 %}
              {% for user in pagination %}
                <tr>
                  <td>
                    {% if user.media == null %}
                        {% if k==0 %}
                            <div class=\"avatar-char palette-Light-Blue bg\">{{user.name|first|lower}}</div>
                        {% elseif k==1 %}
                            <div class=\"avatar-char palette-Purple-300 bg\">{{user.name|first|lower}}</div>
                        {% elseif k==2 %}
                            <div class=\"avatar-char palette-Green-400 bg\">{{user.name|first|lower}}</div>
                        {% elseif k==3 %}
                            <div class=\"avatar-char palette-Red-400 bg\">{{user.name|first|lower}}</div>
                        {% endif %}
                    {% else %}
                        <img class=\"avatar-char palette-Red-400 bg\" src=\"{{asset(user.media.link)|imagine_filter(\"profile_picture\")}}\" alt=\"\">
                    {% endif %}

                  </td>
                  <td>
                    {% if user.type==\"google\" %}
                      <img src=\"{{asset(\"img/google.png\")}}\" alt=\"\">
                    {% elseif user.type==\"facebook\" %}
                      <img src=\"{{asset(\"img/facebook.png\")}}\" alt=\"\">
                    {% else %}
                      <img src=\"{{asset(\"img/email.png\")}}\" alt=\"\">
                    {% endif %}
                  </td>
                  <td>{{user.name}}</td>
                  <td>{{user.email}}</td>
                  <td>
                    {% if user.enabled==true %}
                      <span class=\"label label-success\">Enabled</span>
                    {% else %}
                      <span class=\"label label-danger\">Disabled</span>
                    {% endif %}
                  </td>
                  <td>
                    <div class=\"pull-right\">
                      <ul class=\"actions\">
                        <li class=\"dropdown\">
                          <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                          </a>
                          <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                              <a href=\"{{path(\"user_user_edit\",{\"id\":user.id})}}\">Edit</a>
                            </li>
                            <li>
                              <a href=\"{{path(\"user_user_comment\",{\"id\":user.id})}}\">Comments</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                {% if k==3 %}
                    {% set k=0 %}
                {% else %}
                    {% set k=k+1 %}
                {% endif %}
              {% else %}
                <tr>
                  <td colspan=\"6\">
                    <p style=\"text-align:center\">
                      <img style=\"padding:50px;\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
                    </p>
                  </td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
          <div class=\" pull-right\" style=\"padding-right:30px;\">
            {{ knp_pagination_render(pagination) }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock%}", "UserBundle:User:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/User/index.html.twig");
    }
}
