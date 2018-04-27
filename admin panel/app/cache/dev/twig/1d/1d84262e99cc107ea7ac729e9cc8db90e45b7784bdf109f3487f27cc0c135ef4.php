<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_9fa1b0fbbb9cac7078fdc83c63afc4d4f2bd1058e94f2ce45c1d8b2cea5e6702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e2642fda74a2597e191c90787c224292cbc5b696ed8c277d48a4aa33c0b584e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2642fda74a2597e191c90787c224292cbc5b696ed8c277d48a4aa33c0b584e->enter($__internal_2e2642fda74a2597e191c90787c224292cbc5b696ed8c277d48a4aa33c0b584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>How To Admin Panel</title>

        <!-- Vendor CSS -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">        
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/palette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <!-- CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
          <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>

    </head>
    <body data-ma-header=\"teal\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "        <div class=\"alert alert-success alert-dismissible alert-home\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
            ";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

        <header id=\"header\" class=\"media\">
            <div class=\"pull-left h-logo\">
                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_index");
        echo "\" class=\"hidden-xs\">
                    How To  
                    <small>admin panel</small>
                </a>
                
                <div class=\"menu-collapse\" data-ma-action=\"sidebar-open\" data-ma-target=\"main-menu\">
                    <div class=\"mc-wrap\">
                        <div class=\"mcw-line top palette-White bg\"></div>
                        <div class=\"mcw-line center palette-White bg\"></div>
                        <div class=\"mcw-line bottom palette-White bg\"></div>
                    </div>
                </div>
            </div>

            <ul class=\"pull-right h-menu\">
                <li class=\"hm-search-trigger\">
                    <a href=\"\" data-ma-action=\"search-open\">
                        <i class=\"hm-icon zmdi zmdi-search\"></i>
                    </a>
                </li>
                <li class=\"dropdown hm-profile\">
                    <a data-toggle=\"dropdown\" href=\"\">
                        <i style=\"font-size:30pt\" class=\"hm-icon zmdi zmdi-account-circle\"></i>
                    </a>
                    
                    <ul class=\"dropdown-menu pull-right dm-icon\">
                        <li>
                            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><i class=\"zmdi zmdi-settings\"></i> Change Password</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"zmdi zmdi-time-restore\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>        
        </header>

        <section id=\"main\">
            <aside id=\"s-main-menu\" class=\"sidebar\">
                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Elements:menu"), array());
        // line 74
        echo "            </aside>

            <section id=\"content\">
                ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "            </section>

            <footer id=\"footer\">
                Copyright &copy; 2017 How To Admin Panel

            </footer>

        </section>

        <!-- Page Loader -->
        <div class=\"page-loader palette-Teal bg\">
            <div class=\"preloader pl-xl pls-white\">
                <svg class=\"pl-circular\" viewBox=\"25 25 50 50\">
                    <circle class=\"plc-path\" cx=\"50\" cy=\"50\" r=\"20\"/>
                </svg>
            </div>
        </div>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class=\"ie-warning\">
                <h1 class=\"c-white\">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class=\"iew-container\">
                    <ul class=\"iew-download\">
                        <li>
                            <a href=\"http://www.google.com/chrome/\">
                                <img src=\"img/browsers/chrome.png\" alt=\"\">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                                <img src=\"img/browsers/firefox.png\" alt=\"\">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://www.opera.com\">
                                <img src=\"img/browsers/opera.png\" alt=\"\">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.apple.com/safari/\">
                                <img src=\"img/browsers/safari.png\" alt=\"\">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                                <img src=\"img/browsers/ie.png\" alt=\"\">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-growl.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.simpleWeather.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/salvattore.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/curved-line-chart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/line-chart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script>
       ";
        // line 169
        $this->displayBlock('javascripts', $context, $blocks);
        // line 173
        echo "
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

    </body>
  </html>";
        
        $__internal_2e2642fda74a2597e191c90787c224292cbc5b696ed8c277d48a4aa33c0b584e->leave($__internal_2e2642fda74a2597e191c90787c224292cbc5b696ed8c277d48a4aa33c0b584e_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee313e7296d29a30b091dd4c316838213b120a594ffd504e323cc14a6fefbbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee313e7296d29a30b091dd4c316838213b120a594ffd504e323cc14a6fefbbf8->enter($__internal_ee313e7296d29a30b091dd4c316838213b120a594ffd504e323cc14a6fefbbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "
                ";
        
        $__internal_ee313e7296d29a30b091dd4c316838213b120a594ffd504e323cc14a6fefbbf8->leave($__internal_ee313e7296d29a30b091dd4c316838213b120a594ffd504e323cc14a6fefbbf8_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a5f5f627c960990105baca987cbfbba4718f842b5c133c8be4e88fa4a8af70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5f5f627c960990105baca987cbfbba4718f842b5c133c8be4e88fa4a8af70e->enter($__internal_4a5f5f627c960990105baca987cbfbba4718f842b5c133c8be4e88fa4a8af70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "
        
        ";
        
        $__internal_4a5f5f627c960990105baca987cbfbba4718f842b5c133c8be4e88fa4a8af70e->leave($__internal_4a5f5f627c960990105baca987cbfbba4718f842b5c133c8be4e88fa4a8af70e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 170,  355 => 169,  347 => 78,  341 => 77,  330 => 177,  326 => 176,  322 => 175,  318 => 174,  315 => 173,  313 => 169,  309 => 168,  305 => 167,  300 => 165,  295 => 163,  288 => 159,  284 => 158,  280 => 157,  276 => 156,  272 => 155,  268 => 154,  264 => 153,  260 => 152,  255 => 150,  251 => 149,  247 => 148,  243 => 147,  239 => 146,  235 => 145,  231 => 144,  227 => 143,  223 => 142,  159 => 80,  157 => 77,  152 => 74,  150 => 73,  138 => 64,  132 => 61,  102 => 34,  96 => 30,  90 => 29,  81 => 26,  77 => 24,  72 => 23,  68 => 22,  60 => 17,  56 => 16,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>How To Admin Panel</title>

        <!-- Vendor CSS -->
        <link href=\"{{asset(\"css/fullcalendar.min.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/animate.min.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/material-design-iconic-font.min.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/jquery.mCustomScrollbar.min.css\")}}\" rel=\"stylesheet\">        
        <link href=\"{{asset(\"css/palette.css\")}}\" rel=\"stylesheet\">
        
        <!-- CSS -->
        <link href=\"{{asset(\"css/app.min.1.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/app.min.2.css\")}}\" rel=\"stylesheet\"> 
          <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>

    </head>
    <body data-ma-header=\"teal\">
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
        <div class=\"alert alert-success alert-dismissible alert-home\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
            {{message|trans}}
        </div>
        {% endfor %}
    {% endfor %}


        <header id=\"header\" class=\"media\">
            <div class=\"pull-left h-logo\">
                <a href=\"{{path(\"app_home_index\")}}\" class=\"hidden-xs\">
                    How To  
                    <small>admin panel</small>
                </a>
                
                <div class=\"menu-collapse\" data-ma-action=\"sidebar-open\" data-ma-target=\"main-menu\">
                    <div class=\"mc-wrap\">
                        <div class=\"mcw-line top palette-White bg\"></div>
                        <div class=\"mcw-line center palette-White bg\"></div>
                        <div class=\"mcw-line bottom palette-White bg\"></div>
                    </div>
                </div>
            </div>

            <ul class=\"pull-right h-menu\">
                <li class=\"hm-search-trigger\">
                    <a href=\"\" data-ma-action=\"search-open\">
                        <i class=\"hm-icon zmdi zmdi-search\"></i>
                    </a>
                </li>
                <li class=\"dropdown hm-profile\">
                    <a data-toggle=\"dropdown\" href=\"\">
                        <i style=\"font-size:30pt\" class=\"hm-icon zmdi zmdi-account-circle\"></i>
                    </a>
                    
                    <ul class=\"dropdown-menu pull-right dm-icon\">
                        <li>
                            <a href=\"{{path(\"fos_user_change_password\")}}\"><i class=\"zmdi zmdi-settings\"></i> Change Password</a>
                        </li>
                        <li>
                            <a href=\"{{path(\"fos_user_security_logout\")}}\"><i class=\"zmdi zmdi-time-restore\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>        
        </header>

        <section id=\"main\">
            <aside id=\"s-main-menu\" class=\"sidebar\">
                {% render(controller(\"AppBundle:Elements:menu\")) %}
            </aside>

            <section id=\"content\">
                {% block body %}

                {% endblock %}
            </section>

            <footer id=\"footer\">
                Copyright &copy; 2017 How To Admin Panel

            </footer>

        </section>

        <!-- Page Loader -->
        <div class=\"page-loader palette-Teal bg\">
            <div class=\"preloader pl-xl pls-white\">
                <svg class=\"pl-circular\" viewBox=\"25 25 50 50\">
                    <circle class=\"plc-path\" cx=\"50\" cy=\"50\" r=\"20\"/>
                </svg>
            </div>
        </div>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class=\"ie-warning\">
                <h1 class=\"c-white\">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class=\"iew-container\">
                    <ul class=\"iew-download\">
                        <li>
                            <a href=\"http://www.google.com/chrome/\">
                                <img src=\"img/browsers/chrome.png\" alt=\"\">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                                <img src=\"img/browsers/firefox.png\" alt=\"\">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://www.opera.com\">
                                <img src=\"img/browsers/opera.png\" alt=\"\">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.apple.com/safari/\">
                                <img src=\"img/browsers/safari.png\" alt=\"\">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                                <img src=\"img/browsers/ie.png\" alt=\"\">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src=\"{{asset(\"js/jquery.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/bootstrap.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/jquery.mCustomScrollbar.concat.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/waves.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/bootstrap-growl.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/moment.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/fullcalendar.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/jquery.simpleWeather.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/salvattore.min.js\")}}\"></script>

        <script src=\"{{asset(\"js/jquery.flot.js\")}}\"></script>
        <script src=\"{{asset(\"js/jquery.flot.resize.js\")}}\"></script>
        <script src=\"{{asset(\"js/curvedLines.js\")}}\"></script>
        <script src=\"{{asset(\"js/jquery.sparkline.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/jquery.easypiechart.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/curved-line-chart.js\")}}\"></script>
        <script src=\"{{asset(\"js/line-chart.js\")}}\"></script>
        <script src=\"{{asset(\"js/bootstrap-select.js\")}}\"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <script src=\"{{asset(\"js/jquery.placeholder.min.js\")}}\"></script>
        <![endif]-->
        <script src=\"{{asset(\"js/fileinput.min.js\")}}\"></script>

        <script src=\"{{asset(\"js/chosen.jquery.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/charts.js\")}}\"></script>
       {% block javascripts %}

        
        {% endblock %}

        <script src=\"{{asset(\"js/functions.js\")}}\"></script>
        <script src=\"{{asset(\"js/actions.js\")}}\"></script>
        <script src=\"{{asset(\"js/demo.js\")}}\"></script>
        <script src=\"{{asset(\"js/app.js\")}}\"></script>

    </body>
  </html>", "AppBundle::layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/layout.html.twig");
    }
}
