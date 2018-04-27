<?php

/* @App/Guides/get.html.php */
class __TwigTemplate_e0dde7e58dea18c5d768a070816cb1ab07e9ef01a82df0bf5c0515b5f7c649d7 extends Twig_Template
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
        $__internal_aeded7c703f0adb531cdf2608f7db22e640ba07b6a8eb492aaed993195a83ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeded7c703f0adb531cdf2608f7db22e640ba07b6a8eb492aaed993195a83ace->enter($__internal_aeded7c703f0adb531cdf2608f7db22e640ba07b6a8eb492aaed993195a83ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Guides/get.html.php"));

        // line 1
        echo "<?php 
\t\$a[\"id\"]=\$guide->getId();
\t\$a[\"title\"]=\$guide->getTitle();
\t\$a[\"category\"]=\$guide->getCategory()?\$guide->getCategory()->getTitle(): null ;
\t\$a[\"content\"]=\$guide->getContent();
\t\$a[\"comment\"]=\$guide->getComment();
\t\$a[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$guide->getMedia()->getLink()), 'api_img');
\t\$a[\"created\"]=\$view['time']->diff(\$guide->getCreated());
\t\$list=array();
\tforeach (\$guide->getSteps() as \$key => \$step) {
\t\t\$s[\"id\"]=\$step->getId();
\t\t\$s[\"title\"]=\$step->getTitle();
\t\t\$s[\"position\"]=\$step->getPosition();
\t\t\$s[\"content\"]=\$step->getContent();
\t\tif (\$step->getMedia()!=null) {
\t\t\t\$s[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$step->getMedia()->getLink()), 'api_img');
\t\t}else{
\t\t\t\$s[\"image\"]= null;\t\t\t
\t\t}

\t\t\$list[]=\$s;
\t}
\t\$a[\"steps\"]=\$list;
\t\$comments=array();
\tforeach (\$guide->getComments() as \$key => \$comment) {
\t\t\$c[\"id\"]=\$comment->getId();
\t\t\$c[\"content\"]=\$comment->getContent();
\t\t\$c[\"enabled\"]=\$comment->getEnabled();
\t\t\$c[\"author\"]=\$comment->getUser()->getName();

        if (\$comment->getUser()->getMedia()==null) {
            \$c[\"image\"]=\$this['imagine']->filter(\"img/default_male.png\", 'profile_picture');        
        }else{
            \$c[\"image\"]=\$this['imagine']->filter(\$comment->getUser()->getMedia()->getLink(), 'profile_picture');        
        }
\t\t\$c[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\t\$comments[]=\$c;
\t}
\t\$a[\"comments\"]=\$comments;
\techo json_encode(\$a, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_aeded7c703f0adb531cdf2608f7db22e640ba07b6a8eb492aaed993195a83ace->leave($__internal_aeded7c703f0adb531cdf2608f7db22e640ba07b6a8eb492aaed993195a83ace_prof);

    }

    public function getTemplateName()
    {
        return "@App/Guides/get.html.php";
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
\t\$a[\"id\"]=\$guide->getId();
\t\$a[\"title\"]=\$guide->getTitle();
\t\$a[\"category\"]=\$guide->getCategory()?\$guide->getCategory()->getTitle(): null ;
\t\$a[\"content\"]=\$guide->getContent();
\t\$a[\"comment\"]=\$guide->getComment();
\t\$a[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$guide->getMedia()->getLink()), 'api_img');
\t\$a[\"created\"]=\$view['time']->diff(\$guide->getCreated());
\t\$list=array();
\tforeach (\$guide->getSteps() as \$key => \$step) {
\t\t\$s[\"id\"]=\$step->getId();
\t\t\$s[\"title\"]=\$step->getTitle();
\t\t\$s[\"position\"]=\$step->getPosition();
\t\t\$s[\"content\"]=\$step->getContent();
\t\tif (\$step->getMedia()!=null) {
\t\t\t\$s[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$step->getMedia()->getLink()), 'api_img');
\t\t}else{
\t\t\t\$s[\"image\"]= null;\t\t\t
\t\t}

\t\t\$list[]=\$s;
\t}
\t\$a[\"steps\"]=\$list;
\t\$comments=array();
\tforeach (\$guide->getComments() as \$key => \$comment) {
\t\t\$c[\"id\"]=\$comment->getId();
\t\t\$c[\"content\"]=\$comment->getContent();
\t\t\$c[\"enabled\"]=\$comment->getEnabled();
\t\t\$c[\"author\"]=\$comment->getUser()->getName();

        if (\$comment->getUser()->getMedia()==null) {
            \$c[\"image\"]=\$this['imagine']->filter(\"img/default_male.png\", 'profile_picture');        
        }else{
            \$c[\"image\"]=\$this['imagine']->filter(\$comment->getUser()->getMedia()->getLink(), 'profile_picture');        
        }
\t\t\$c[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\t\$comments[]=\$c;
\t}
\t\$a[\"comments\"]=\$comments;
\techo json_encode(\$a, JSON_UNESCAPED_UNICODE);
?>", "@App/Guides/get.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/get.html.php");
    }
}
