<?php

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_059b3227b26df66186c85176babfb57674a75d02f4385090987b84d8646994d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:edit.html.twig", 1);
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
        $__internal_adccdb8a2834b5e31661f30b2b57739cb780f399c95e5a2969e10947f547f70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adccdb8a2834b5e31661f30b2b57739cb780f399c95e5a2969e10947f547f70f->enter($__internal_adccdb8a2834b5e31661f30b2b57739cb780f399c95e5a2969e10947f547f70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adccdb8a2834b5e31661f30b2b57739cb780f399c95e5a2969e10947f547f70f->leave($__internal_adccdb8a2834b5e31661f30b2b57739cb780f399c95e5a2969e10947f547f70f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d1b94fa2fb0bb43e797d678d4340c777b09c33ca28a87c5a3908f31824f836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d1b94fa2fb0bb43e797d678d4340c777b09c33ca28a87c5a3908f31824f836->enter($__internal_05d1b94fa2fb0bb43e797d678d4340c777b09c33ca28a87c5a3908f31824f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li class=\"active waves-effect\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Infos</a></li>
            <li class=\"waves-effect\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_comment", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Comments</a></li>
        </ul>
        <div class=\"pmb-block\">
            <div class=\"card-body card-padding\">
                ";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                <div class=\"form-group fg-line\">
                    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
                    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                </div>
                <div class=\"checkbox\">
                    <label>
                        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo "
                        <i class=\"input-helper\"></i>
                        Enabled
                    </label>
                </div>
                <br>
                ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo "
                ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
</div>

</div>
";
        
        $__internal_05d1b94fa2fb0bb43e797d678d4340c777b09c33ca28a87c5a3908f31824f836->leave($__internal_05d1b94fa2fb0bb43e797d678d4340c777b09c33ca28a87c5a3908f31824f836_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 83,  189 => 82,  180 => 76,  173 => 72,  169 => 71,  165 => 70,  159 => 67,  155 => 66,  151 => 65,  145 => 62,  141 => 61,  137 => 60,  132 => 58,  125 => 54,  121 => 53,  98 => 33,  92 => 29,  88 => 27,  84 => 25,  82 => 24,  79 => 23,  77 => 22,  71 => 18,  65 => 16,  59 => 14,  57 => 13,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
            <li class=\"active waves-effect\"><a href=\"{{path('user_user_edit',{\"id\":user.id})}}\">Infos</a></li>
            <li class=\"waves-effect\"><a href=\"{{path('user_user_comment',{\"id\":user.id})}}\">Comments</a></li>
        </ul>
        <div class=\"pmb-block\">
            <div class=\"card-body card-padding\">
                {{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
                <div class=\"form-group fg-line\">
                    {{form_label(form.name,null,{label_attr:{\"class\":\"\"}})}}
                    {{form_widget(form.name,{attr:{\"class\":\"form-control\"}})}}
                    {{form_errors(form.name)}}
                </div>
                <div class=\"form-group fg-line\">
                    {{form_label(form.email,null,{label_attr:{\"class\":\"\"}})}}
                    {{form_widget(form.email,{attr:{\"class\":\"form-control\"}})}}
                    {{form_errors(form.email)}}
                </div>
                <div class=\"form-group fg-line\">
                    {{form_label(form.type,null,{label_attr:{\"class\":\"\"}})}}
                    {{form_widget(form.type,{attr:{\"class\":\"form-control\"}})}}
                    {{form_errors(form.type)}}
                </div>
                <div class=\"checkbox\">
                    <label>
                        {{form_widget(form.enabled)}}
                        <i class=\"input-helper\"></i>
                        Enabled
                    </label>
                </div>
                <br>
                {{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}}
                {{ form_end(form) }}
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
</div>

</div>
{% endblock%}", "UserBundle:User:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
