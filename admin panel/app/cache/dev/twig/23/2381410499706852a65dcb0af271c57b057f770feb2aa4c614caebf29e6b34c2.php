<?php

/* MediaBundle::layout.html.twig */
class __TwigTemplate_42faeef5cb06f5dcacde32d17c39b17f1f3b464f5241b8635e475c051567fd77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3205bbaa63a0e81af6b6e4e86c836557d4bb658ce786b11d7d567ff6a7cc01f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3205bbaa63a0e81af6b6e4e86c836557d4bb658ce786b11d7d567ff6a7cc01f7->enter($__internal_3205bbaa63a0e81af6b6e4e86c836557d4bb658ce786b11d7d567ff6a7cc01f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title></title>
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/box.css"), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
</head>
<body>
<script type=\"text/javascript\">
function sendToParent(file_path) {
    window.opener.InsertHTML(file_path);
}
</script>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "</body>
</html>";
        
        $__internal_3205bbaa63a0e81af6b6e4e86c836557d4bb658ce786b11d7d567ff6a7cc01f7->leave($__internal_3205bbaa63a0e81af6b6e4e86c836557d4bb658ce786b11d7d567ff6a7cc01f7_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4ebccc2a60dc26fcb9986c1270d5e790a62beff93fd51c6825ddc52d37fa47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ebccc2a60dc26fcb9986c1270d5e790a62beff93fd51c6825ddc52d37fa47d->enter($__internal_a4ebccc2a60dc26fcb9986c1270d5e790a62beff93fd51c6825ddc52d37fa47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    
";
        
        $__internal_a4ebccc2a60dc26fcb9986c1270d5e790a62beff93fd51c6825ddc52d37fa47d->leave($__internal_a4ebccc2a60dc26fcb9986c1270d5e790a62beff93fd51c6825ddc52d37fa47d_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  59 => 16,  51 => 19,  49 => 16,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
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
\t<title></title>
  <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"css/box.css\")}}\">

\t<link rel=\"stylesheet\" href=\"{{asset(\"font-awesome/css/font-awesome.min.css\")}}\">
</head>
<body>
<script type=\"text/javascript\">
function sendToParent(file_path) {
    window.opener.InsertHTML(file_path);
}
</script>
{% block body %}
    
{% endblock %}
</body>
</html>", "MediaBundle::layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/MediaBundle/Resources/views/layout.html.twig");
    }
}
