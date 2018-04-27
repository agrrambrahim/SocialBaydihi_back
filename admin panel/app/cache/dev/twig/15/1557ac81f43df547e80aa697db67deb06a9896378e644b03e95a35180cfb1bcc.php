<?php

/* AppBundle:Elements:menu.html.twig */
class __TwigTemplate_daf93e450660fe6cd42186ea0b192e8bca05a8ac1000bb279260e54921560711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9730281b0a9c84d797110c62554360923c4043794520e4543306b1b0d811c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9730281b0a9c84d797110c62554360923c4043794520e4543306b1b0d811c0b->enter($__internal_d9730281b0a9c84d797110c62554360923c4043794520e4543306b1b0d811c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Elements:menu.html.twig"));

        // line 1
        echo "<ul class=\"smm-alerts\">
  <li>
   <a  class=\"class-29\"href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" title=\"\"><i class=\"zmdi zmdi-power\" style=\"margin-top: 11px;\"></i></a>
  </li>
  <li>
    <a  class=\"class-29\"href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_index");
        echo "\" title=\"\"><i class=\"zmdi zmdi-home\"  style=\"margin-top: 11px;\"></i></a>
  </li>
</ul>
<ul class=\"main-menu\">    
  <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_index");
        echo "\"  ><i class=\"zmdi zmdi-home\"></i>Home</a></li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-format-list-bulleted\"></i>Applications</a>
    <ul>
      <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_index");
        echo "\">Applications List</a></li>
      <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_applications_add");
        echo "\">New Application</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
  <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-format-list-bulleted\"></i>Categories</a>
  <ul>
    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_categories_index");
        echo "\">Categories List</a></li>
    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_categories_add");
        echo "\">New Categorie</a></li>
  </ul>
  </li>

  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Guides</a>
    <ul>
      <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_index");
        echo "\">Guides List</a></li>
      <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_guides_add");
        echo "\">New Guide</a></li>
    </ul>
  </li>
  <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comments_index");
        echo "\"  ><i class=\"zmdi zmdi-comments\"></i>Comments</a></li>
    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_index");
        echo "\"  ><i class=\"zmdi zmdi-account\"></i>Users</a></li>
    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_index");
        echo "\"  ><i class=\"zmdi zmdi-help\"></i>Support messages</a></li>
  </ul>";
        
        $__internal_d9730281b0a9c84d797110c62554360923c4043794520e4543306b1b0d811c0b->leave($__internal_d9730281b0a9c84d797110c62554360923c4043794520e4543306b1b0d811c0b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Elements:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  87 => 34,  83 => 33,  77 => 30,  73 => 29,  63 => 22,  59 => 21,  50 => 15,  46 => 14,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"smm-alerts\">
  <li>
   <a  class=\"class-29\"href=\"{{path(\"fos_user_security_logout\")}}\" title=\"\"><i class=\"zmdi zmdi-power\" style=\"margin-top: 11px;\"></i></a>
  </li>
  <li>
    <a  class=\"class-29\"href=\"{{path(\"app_home_index\")}}\" title=\"\"><i class=\"zmdi zmdi-home\"  style=\"margin-top: 11px;\"></i></a>
  </li>
</ul>
<ul class=\"main-menu\">    
  <li><a href=\"{{path(\"app_home_index\")}}\"  ><i class=\"zmdi zmdi-home\"></i>Home</a></li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-format-list-bulleted\"></i>Applications</a>
    <ul>
      <li><a href=\"{{path(\"app_applications_index\")}}\">Applications List</a></li>
      <li><a href=\"{{path(\"app_applications_add\")}}\">New Application</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
  <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-format-list-bulleted\"></i>Categories</a>
  <ul>
    <li><a href=\"{{path(\"app_categories_index\")}}\">Categories List</a></li>
    <li><a href=\"{{path(\"app_categories_add\")}}\">New Categorie</a></li>
  </ul>
  </li>

  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Guides</a>
    <ul>
      <li><a href=\"{{path(\"app_guides_index\")}}\">Guides List</a></li>
      <li><a href=\"{{path(\"app_guides_add\")}}\">New Guide</a></li>
    </ul>
  </li>
  <li><a href=\"{{path(\"app_comments_index\")}}\"  ><i class=\"zmdi zmdi-comments\"></i>Comments</a></li>
    <li><a href=\"{{path(\"user_user_index\")}}\"  ><i class=\"zmdi zmdi-account\"></i>Users</a></li>
    <li><a href=\"{{path(\"app_support_index\")}}\"  ><i class=\"zmdi zmdi-help\"></i>Support messages</a></li>
  </ul>", "AppBundle:Elements:menu.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Elements/menu.html.twig");
    }
}
