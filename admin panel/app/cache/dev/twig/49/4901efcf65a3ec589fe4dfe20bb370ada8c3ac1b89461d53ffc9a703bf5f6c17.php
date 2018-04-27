<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_5a3275f2d57652e41db26d9266ab87a6742673499b8d00867811fb0421e39c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:index.html.twig", 1);
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
        $__internal_be99024aa5e949e1104f75c3f67789b8dff3a1133ef57a9cdb2d1c3487001fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be99024aa5e949e1104f75c3f67789b8dff3a1133ef57a9cdb2d1c3487001fb4->enter($__internal_be99024aa5e949e1104f75c3f67789b8dff3a1133ef57a9cdb2d1c3487001fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be99024aa5e949e1104f75c3f67789b8dff3a1133ef57a9cdb2d1c3487001fb4->leave($__internal_be99024aa5e949e1104f75c3f67789b8dff3a1133ef57a9cdb2d1c3487001fb4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad76f852a7e8afcd4435d48f7dfbb36d0f545fdfb852896b0a54f3399aaff96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad76f852a7e8afcd4435d48f7dfbb36d0f545fdfb852896b0a54f3399aaff96->enter($__internal_5ad76f852a7e8afcd4435d48f7dfbb36d0f545fdfb852896b0a54f3399aaff96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        ";
        // line 11
        echo twig_escape_filter($this->env, ($context["applications_count"] ?? $this->getContext($context, "applications_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Applications</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-green bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                                ";
        // line 22
        echo twig_escape_filter($this->env, ($context["categories_count"] ?? $this->getContext($context, "categories_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Categories</h2>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Cyan bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-text\"></i><font><font>
                        ";
        // line 34
        echo twig_escape_filter($this->env, ($context["guides_count"] ?? $this->getContext($context, "guides_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Guides</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Purple bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-item\"></i><font><font>
                        ";
        // line 45
        echo twig_escape_filter($this->env, ($context["steps_count"] ?? $this->getContext($context, "steps_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Steps</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-sm-offset-1\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Pink bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-comments\"></i><font><font>
                        ";
        // line 56
        echo twig_escape_filter($this->env, ($context["comments_count"] ?? $this->getContext($context, "comments_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Comments</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Blue-Grey bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-account\"></i><font><font>
                        ";
        // line 67
        echo twig_escape_filter($this->env, ($context["users_count"] ?? $this->getContext($context, "users_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Users</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-help m-r-5 zmdi-48\"></i><font><font>
                        ";
        // line 78
        echo twig_escape_filter($this->env, ($context["messages_count"] ?? $this->getContext($context, "messages_count")), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Messages</h2>
                </div>
            </div>
        </div>
    </div>
<div class=\"row\">
    <br/>
    <h3 class=\"text-info\">Applications :</h3>

        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 90
            echo "            <div class=\"col-sm-4\" style=\"padding:10px;\">
                <div class=\"card palette-Light-Blue bg\">
                    <ul class=\"actions a-alt\">
                        <li class=\"dropdown\">
                            <a href=\"\" data-toggle=\"dropdown\">
                                <i class=\"zmdi zmdi-more-vert\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li>
                                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_up", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Up</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 108
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
            // line 116
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
        // line 124
        echo "            </div>
</div>
";
        
        $__internal_5ad76f852a7e8afcd4435d48f7dfbb36d0f545fdfb852896b0a54f3399aaff96->leave($__internal_5ad76f852a7e8afcd4435d48f7dfbb36d0f545fdfb852896b0a54f3399aaff96_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 124,  193 => 116,  182 => 108,  176 => 105,  170 => 102,  164 => 99,  153 => 90,  149 => 89,  135 => 78,  121 => 67,  107 => 56,  93 => 45,  79 => 34,  64 => 22,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"row\">

        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        {{applications_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Applications</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-green bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                                {{categories_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Categories</h2>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Cyan bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-text\"></i><font><font>
                        {{guides_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Guides</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Purple bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-item\"></i><font><font>
                        {{steps_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Steps</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-sm-offset-1\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Pink bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-comments\"></i><font><font>
                        {{comments_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Comments</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Blue-Grey bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-account\"></i><font><font>
                        {{users_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Users</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-help m-r-5 zmdi-48\"></i><font><font>
                        {{messages_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Messages</h2>
                </div>
            </div>
        </div>
    </div>
<div class=\"row\">
    <br/>
    <h3 class=\"text-info\">Applications :</h3>

        {% for item in applications %}
            <div class=\"col-sm-4\" style=\"padding:10px;\">
                <div class=\"card palette-Light-Blue bg\">
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
{% endblock%}", "AppBundle:Home:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
