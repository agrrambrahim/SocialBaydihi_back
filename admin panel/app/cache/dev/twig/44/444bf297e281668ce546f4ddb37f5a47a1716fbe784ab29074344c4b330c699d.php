<?php

/* AppBundle:Guides:index.html.twig */
class __TwigTemplate_d3acdbd0d3dfb79bd045ac4fba565f0a7b7b2507456e6dc12b6675ef4fa76e43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Guides:index.html.twig", 1);
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
        $__internal_d8b120debcd841a8a55ad7623485cbb8ea9cccdbb1b73bdfd8ef1ad9e0e8e3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b120debcd841a8a55ad7623485cbb8ea9cccdbb1b73bdfd8ef1ad9e0e8e3f3->enter($__internal_d8b120debcd841a8a55ad7623485cbb8ea9cccdbb1b73bdfd8ef1ad9e0e8e3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Guides:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b120debcd841a8a55ad7623485cbb8ea9cccdbb1b73bdfd8ef1ad9e0e8e3f3->leave($__internal_d8b120debcd841a8a55ad7623485cbb8ea9cccdbb1b73bdfd8ef1ad9e0e8e3f3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf65faa153b6390ab7c16de616aa0ec0ca604aa5c7e4771a7e27d1302f0fd87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf65faa153b6390ab7c16de616aa0ec0ca604aa5c7e4771a7e27d1302f0fd87d->enter($__internal_bf65faa153b6390ab7c16de616aa0ec0ca604aa5c7e4771a7e27d1302f0fd87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"card\">
            <div class=\"action-header palette-Teal-400 bg clearfix\">
                <div class=\"ah-label hidden-xs palette-White text\">Search for guides by title</div>
                <div class=\"ah-search\">
                    <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
                        <input type=\"text\" name=\"title\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\" placeholder=\"Search for guides by title\" class=\"ahs-input\">
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
                    <li>
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_add");
        echo "\">
                            <i class=\"zmdi  zmdi-file-plus\"></i>
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            <i class=\"zmdi zmdi-sort\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                ";
        // line 31
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["guides"] ?? $this->getContext($context, "guides")), "Sort by title", "a.title");
        echo "
                            </li>
                            <li>
                                ";
        // line 34
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["guides"] ?? $this->getContext($context, "guides")), "Sort by created date ", "a.created");
        echo "
                            </li>
                            <li>
                                ";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["guides"] ?? $this->getContext($context, "guides")), "Sort by Publish ", "a.enabled");
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
        </div>
        <div class=\"row\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["guides"] ?? $this->getContext($context, "guides")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "                <div class=\"col-sm-4\" >
                    <div class=\"card\">
                        <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                    </li>
                                    ";
            // line 70
            if (($this->getAttribute($context["item"], "enabled", array()) == true)) {
                // line 71
                echo "                                         <li>
                                            <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_notif", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\">Send notification</a>
                                        </li>
                                    ";
            }
            // line 75
            echo "                                </ul>
                            </li>
                        </ul>
                        <div class=\"card-header ch-img  class-24\" style=\"background-image: url(";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["item"], "media", array()), "link", array()), "product_img")), "html", null, true);
            echo "); height: 170px;\">
                            <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">";
            // line 79
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "created", array()));
            echo "</small>
                            <div class=\"card-header\">

                            </div>
                            <span class=\"pos-step\" style=\"line-height: initial;padding: 5px;\">
                            \t";
            // line 84
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["item"], "steps", array())), "html", null, true);
            echo "<br><small style=\"font-size:9pt\">steps</small>
                            </span>
                        </div>
                        <div class=\"card-body card-padding class-25\" >
                            <h4 style=\"line-height: 1.4;\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
                            <ul class=\"lgi-attrs\" style=\"position: absolute;bottom: 5px;\">
                                <li class=\"primary\">
                                    Published:
                                    ";
            // line 92
            if (($this->getAttribute($context["item"], "enabled", array()) == true)) {
                // line 93
                echo "                                        Yes
                                    ";
            } else {
                // line 95
                echo "                                        No
                                    ";
            }
            // line 97
            echo "                                </li>
                            </ul>
                            <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_view", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"view-more pull-right class-26\"><i class=\"zmdi zmdi-long-arrow-right\"></i> View Guide...</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "                <div class=\"col-sm-12\">
                    <div class=\"card\">
                        <p style=\"text-align:center\">
                            <img style=\"padding:50px;\" src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                        </p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            <div class=\"col-sm-12 \">
                <div class=\"pull-right\" style=\"padding-right:30px;\">
                    ";
        // line 114
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["guides"] ?? $this->getContext($context, "guides")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_bf65faa153b6390ab7c16de616aa0ec0ca604aa5c7e4771a7e27d1302f0fd87d->leave($__internal_bf65faa153b6390ab7c16de616aa0ec0ca604aa5c7e4771a7e27d1302f0fd87d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Guides:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 114,  218 => 112,  207 => 107,  202 => 104,  192 => 99,  188 => 97,  184 => 95,  180 => 93,  178 => 92,  171 => 88,  164 => 84,  156 => 79,  152 => 78,  147 => 75,  141 => 72,  138 => 71,  136 => 70,  131 => 68,  125 => 65,  114 => 56,  109 => 55,  88 => 37,  82 => 34,  76 => 31,  63 => 21,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
        <div class=\"card\">
            <div class=\"action-header palette-Teal-400 bg clearfix\">
                <div class=\"ah-label hidden-xs palette-White text\">Search for guides by title</div>
                <div class=\"ah-search\">
                    <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
                        <input type=\"text\" name=\"title\" value=\"{{app.request.get('title')}}\" placeholder=\"Search for guides by title\" class=\"ahs-input\">
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
                    <li>
                        <a href=\"{{path(\"app_guides_add\")}}\">
                            <i class=\"zmdi  zmdi-file-plus\"></i>
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            <i class=\"zmdi zmdi-sort\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                {{ knp_pagination_sortable(guides, 'Sort by title', 'a.title') }}
                            </li>
                            <li>
                                {{ knp_pagination_sortable(guides, 'Sort by created date ', 'a.created') }}
                            </li>
                            <li>
                                {{ knp_pagination_sortable(guides, 'Sort by Publish ', 'a.enabled') }}
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
        </div>
        <div class=\"row\">
            {% for item in guides %}
                <div class=\"col-sm-4\" >
                    <div class=\"card\">
                        <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"{{path(\"app_guides_delete\",{\"id\":item.id})}}\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"app_guides_edit\",{\"id\":item.id})}}\">Edit</a>
                                    </li>
                                    {% if item.enabled == true %}
                                         <li>
                                            <a href=\"{{path(\"app_guides_notif\",{\"id\":item.id})}}\">Send notification</a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </li>
                        </ul>
                        <div class=\"card-header ch-img  class-24\" style=\"background-image: url({{asset(item.media.link|imagine_filter(\"product_img\"))}}); height: 170px;\">
                            <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">{{item.created|ago}}</small>
                            <div class=\"card-header\">

                            </div>
                            <span class=\"pos-step\" style=\"line-height: initial;padding: 5px;\">
                            \t{{item.steps|length}}<br><small style=\"font-size:9pt\">steps</small>
                            </span>
                        </div>
                        <div class=\"card-body card-padding class-25\" >
                            <h4 style=\"line-height: 1.4;\">{{item.title}}</h4>
                            <ul class=\"lgi-attrs\" style=\"position: absolute;bottom: 5px;\">
                                <li class=\"primary\">
                                    Published:
                                    {% if item.enabled == true %}
                                        Yes
                                    {% else %}
                                        No
                                    {% endif %}
                                </li>
                            </ul>
                            <a href=\"{{path(\"app_guides_view\",{'id':item.id})}}\" class=\"view-more pull-right class-26\"><i class=\"zmdi zmdi-long-arrow-right\"></i> View Guide...</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-sm-12\">
                    <div class=\"card\">
                        <p style=\"text-align:center\">
                            <img style=\"padding:50px;\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
                        </p>
                    </div>
                </div>
            {% endfor %}
            <div class=\"col-sm-12 \">
                <div class=\"pull-right\" style=\"padding-right:30px;\">
                    {{ knp_pagination_render(guides) }}
                </div>
            </div>
        </div>
    </div>
{% endblock%}", "AppBundle:Guides:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/index.html.twig");
    }
}
