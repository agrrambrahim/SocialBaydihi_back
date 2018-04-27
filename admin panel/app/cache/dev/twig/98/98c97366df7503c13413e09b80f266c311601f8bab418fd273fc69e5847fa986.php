<?php

/* @App/Guides/api_all.html.php */
class __TwigTemplate_50db1a3b602c19d8d97ecc1e297e232898c181725b99e39db05a390739abc9ef extends Twig_Template
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
        $__internal_7d3e90adb7c8b00bda47e7e0d621086a8afff72656f7219bef9a867963f5c7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3e90adb7c8b00bda47e7e0d621086a8afff72656f7219bef9a867963f5c7db->enter($__internal_7d3e90adb7c8b00bda47e7e0d621086a8afff72656f7219bef9a867963f5c7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Guides/api_all.html.php"));

        // line 1
        echo "<?php 
\$list=array();
foreach (\$guides as \$key => \$guide) {
\t\$a[\"id\"]=\$guide->getId();
\t\$a[\"title\"]=\$guide->getTitle();
\t\$a[\"category\"]=\$guide->getCategory()?\$guide->getCategory()->getTitle(): null ;
\t
\t\$a[\"content\"]=\$guide->getContent();
\t\$a[\"comment\"]=\$guide->getComment();
\t\$a[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$guide->getMedia()->getLink()), 'api_img');
\t\$a[\"created\"]=\$view['time']->diff(\$guide->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_7d3e90adb7c8b00bda47e7e0d621086a8afff72656f7219bef9a867963f5c7db->leave($__internal_7d3e90adb7c8b00bda47e7e0d621086a8afff72656f7219bef9a867963f5c7db_prof);

    }

    public function getTemplateName()
    {
        return "@App/Guides/api_all.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php 
\$list=array();
foreach (\$guides as \$key => \$guide) {
\t\$a[\"id\"]=\$guide->getId();
\t\$a[\"title\"]=\$guide->getTitle();
\t\$a[\"category\"]=\$guide->getCategory()?\$guide->getCategory()->getTitle(): null ;
\t
\t\$a[\"content\"]=\$guide->getContent();
\t\$a[\"comment\"]=\$guide->getComment();
\t\$a[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$guide->getMedia()->getLink()), 'api_img');
\t\$a[\"created\"]=\$view['time']->diff(\$guide->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>", "@App/Guides/api_all.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/api_all.html.php");
    }
}
