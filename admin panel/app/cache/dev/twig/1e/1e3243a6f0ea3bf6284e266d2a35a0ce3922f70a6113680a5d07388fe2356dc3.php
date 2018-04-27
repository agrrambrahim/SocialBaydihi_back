<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_235a742b7d047b7ec523216bb6b7d0969c94d88401e70416edba936e96bd2a5a extends Twig_Template
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
        $__internal_ed30a9bc696e0b976b3babe0a8c8cd597875c4393619ab9d67ecae806b630862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed30a9bc696e0b976b3babe0a8c8cd597875c4393619ab9d67ecae806b630862->enter($__internal_ed30a9bc696e0b976b3babe0a8c8cd597875c4393619ab9d67ecae806b630862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo "<div class=\"pad col-md-offset-4 col-md-4\">
\t";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t        <div class=\"form-group label-floating is-empty\">
                ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "first", array()), 'label');
        echo "
                ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"error-form\">
                ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "first", array()), 'errors');
        echo "
                </span>
            </div>
\t\t     <div class=\"form-group label-floating is-empty\">
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "second", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"error-form\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "new", array()), "second", array()), 'errors');
        echo "
                </span>
            </div> 
\t<input type=\"submit\" class=\"btn btn-primary  btn-raised col-md-12\" name=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_ed30a9bc696e0b976b3babe0a8c8cd597875c4393619ab9d67ecae806b630862->leave($__internal_ed30a9bc696e0b976b3babe0a8c8cd597875c4393619ab9d67ecae806b630862_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  61 => 17,  55 => 14,  50 => 12,  46 => 11,  39 => 7,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"pad col-md-offset-4 col-md-4\">
\t{{form_start(form)}}
\t        <div class=\"form-group label-floating is-empty\">
                {{ form_label(form.new.first) }}
                {{ form_widget(form.new.first,{\"attr\":{\"class\":\"form-control\"}}) }}
                <span class=\"error-form\">
                {{ form_errors(form.new.first) }}
                </span>
            </div>
\t\t     <div class=\"form-group label-floating is-empty\">
                {{ form_label(form.new.second) }}
                {{ form_widget(form.new.second,{\"attr\":{\"class\":\"form-control\"}}) }}
                <span class=\"error-form\">
                {{ form_errors(form.new.second) }}
                </span>
            </div> 
\t<input type=\"submit\" class=\"btn btn-primary  btn-raised col-md-12\" name=\"\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\">
\t{{form_end(form)}}
</div>
", "FOSUserBundle:Resetting:reset_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
