<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8ffd58d4f582e25bc3b9c2accb1c4445f092bfba1e93a16303066c387fb0bdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3522dd1c885c2ac4675c7999bb314e765394edfc847508a03f1d7292fcc7b54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3522dd1c885c2ac4675c7999bb314e765394edfc847508a03f1d7292fcc7b54c->enter($__internal_3522dd1c885c2ac4675c7999bb314e765394edfc847508a03f1d7292fcc7b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

<head>
  <title>How To Admin Panel</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

  <!-- Mobile support -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Material Design fonts -->
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

  <!-- Bootstrap -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Bootstrap Material Design -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-material-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ripples.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Dropdown.js -->
  <link href=\"//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css\" rel=\"stylesheet\">

  <!-- Page style -->
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- jQuery -->
  <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>

</head>
<body>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 37
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
        <div>
            ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        echo "        </div>
    </body>
</html>
";
        
        $__internal_3522dd1c885c2ac4675c7999bb314e765394edfc847508a03f1d7292fcc7b54c->leave($__internal_3522dd1c885c2ac4675c7999bb314e765394edfc847508a03f1d7292fcc7b54c_prof);

    }

    // line 44
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab58642ca4fde2436d4ae3e35c0631b09bfaf95ce58665e2769e83ff5d69c8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab58642ca4fde2436d4ae3e35c0631b09bfaf95ce58665e2769e83ff5d69c8e7->enter($__internal_ab58642ca4fde2436d4ae3e35c0631b09bfaf95ce58665e2769e83ff5d69c8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 45
        echo "            ";
        
        $__internal_ab58642ca4fde2436d4ae3e35c0631b09bfaf95ce58665e2769e83ff5d69c8e7->leave($__internal_ab58642ca4fde2436d4ae3e35c0631b09bfaf95ce58665e2769e83ff5d69c8e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  116 => 44,  106 => 46,  104 => 44,  100 => 42,  94 => 41,  85 => 38,  80 => 37,  75 => 36,  71 => 35,  61 => 28,  52 => 22,  48 => 21,  42 => 18,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

<head>
  <title>How To Admin Panel</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

  <!-- Mobile support -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Material Design fonts -->
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

  <!-- Bootstrap -->
  <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

  <!-- Bootstrap Material Design -->
  <link href=\"{{asset('css/bootstrap-material-design.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('css/ripples.min.css')}}\" rel=\"stylesheet\">

  <!-- Dropdown.js -->
  <link href=\"//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css\" rel=\"stylesheet\">

  <!-- Page style -->
  <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">

  <!-- jQuery -->
  <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>

</head>
<body>
        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"alert alert-{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "FOSUserBundle::layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/layout.html.twig");
    }
}
