<?php

/* MediaBundle:Media:delete.html.twig */
class __TwigTemplate_78a6e6c8cc77f0cd586e5caa19f37b6ef978f4d641d64635fab943789d9a6e77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:delete.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40b59ed108e96f98326deb500a858cc46bfab011dd2431b5bfa5d20bc4f50477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b59ed108e96f98326deb500a858cc46bfab011dd2431b5bfa5d20bc4f50477->enter($__internal_40b59ed108e96f98326deb500a858cc46bfab011dd2431b5bfa5d20bc4f50477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Media:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b59ed108e96f98326deb500a858cc46bfab011dd2431b5bfa5d20bc4f50477->leave($__internal_40b59ed108e96f98326deb500a858cc46bfab011dd2431b5bfa5d20bc4f50477_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d222e54b1923bbfdb5ea1ce9c3ed405df065e455b0866986d16609a6f3be3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d222e54b1923bbfdb5ea1ce9c3ed405df065e455b0866986d16609a6f3be3c9->enter($__internal_3d222e54b1923bbfdb5ea1ce9c3ed405df065e455b0866986d16609a6f3be3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<span class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>  اظافة صورة جديدية</span>
\t\t\t<span class=\"notif-title\">قاءمة الصورة الخاصة بك</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? $this->getContext($context, "medias")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 10
            echo "\t\t\t\t<div class=\"thumb img-thumbnail \">
\t\t\t\t\t<img  src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["media"], "link", array()), "media_thumb"), "html", null, true);
            echo "\">
\t\t\t\t\t<div>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "titre", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"select\"> اظافة الصورة  للمقال <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "\t\t\tلا توجد لذيك اي صورة حاليا اظغطي على زر \"اظاف صورة\" اعلاه لاظافة صور جديدة
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t</div>
";
        
        $__internal_3d222e54b1923bbfdb5ea1ce9c3ed405df065e455b0866986d16609a6f3be3c9->leave($__internal_3d222e54b1923bbfdb5ea1ce9c3ed405df065e455b0866986d16609a6f3be3c9_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  69 => 16,  60 => 12,  56 => 11,  53 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MediaBundle::layout.html.twig' %}
{% block body %}
\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<span class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>  اظافة صورة جديدية</span>
\t\t\t<span class=\"notif-title\">قاءمة الصورة الخاصة بك</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t{% for media in medias %}
\t\t\t\t<div class=\"thumb img-thumbnail \">
\t\t\t\t\t<img  src=\"{{media.link|imagine_filter('media_thumb')}}\">
\t\t\t\t\t<div>{{media.titre}}</div>
\t\t\t\t\t<div class=\"select\"> اظافة الصورة  للمقال <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\tلا توجد لذيك اي صورة حاليا اظغطي على زر \"اظاف صورة\" اعلاه لاظافة صور جديدة
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}", "MediaBundle:Media:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/MediaBundle/Resources/views/Media/delete.html.twig");
    }
}
