<?php

/* @App/Comments/api_by.html.php */
class __TwigTemplate_5fdfc6b7286b5d919613ebb5d4373c97d6da6d7f71892cceeb44b1fe3bec5494 extends Twig_Template
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
        $__internal_eeee1de4d0f4266a049ef6b29426a842bd95dc2fa42c709c09e9e7ab97c0c5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeee1de4d0f4266a049ef6b29426a842bd95dc2fa42c709c09e9e7ab97c0c5fb->enter($__internal_eeee1de4d0f4266a049ef6b29426a842bd95dc2fa42c709c09e9e7ab97c0c5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Comments/api_by.html.php"));

        // line 1
        echo "<?php 
\$list=array();
foreach (\$comments as \$key => \$comment) {
\t\$a[\"id\"]=\$comment->getId();
\t\$a[\"author\"]=\$comment->getUser()->getName();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"enabled\"]=\$comment->getEnabled();
\t\$a[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_eeee1de4d0f4266a049ef6b29426a842bd95dc2fa42c709c09e9e7ab97c0c5fb->leave($__internal_eeee1de4d0f4266a049ef6b29426a842bd95dc2fa42c709c09e9e7ab97c0c5fb_prof);

    }

    public function getTemplateName()
    {
        return "@App/Comments/api_by.html.php";
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
foreach (\$comments as \$key => \$comment) {
\t\$a[\"id\"]=\$comment->getId();
\t\$a[\"author\"]=\$comment->getUser()->getName();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"enabled\"]=\$comment->getEnabled();
\t\$a[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>", "@App/Comments/api_by.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Comments/api_by.html.php");
    }
}
