<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_620622340c293cf24c4c91d5038dee13397d269295a2eab7a15067932ee3cdbf extends Twig_Template
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
        $__internal_1da62995eb73c7b9b0d0656984bee55939e3e239558a8db5af9cfb434aa8763b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da62995eb73c7b9b0d0656984bee55939e3e239558a8db5af9cfb434aa8763b->enter($__internal_1da62995eb73c7b9b0d0656984bee55939e3e239558a8db5af9cfb434aa8763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1da62995eb73c7b9b0d0656984bee55939e3e239558a8db5af9cfb434aa8763b->leave($__internal_1da62995eb73c7b9b0d0656984bee55939e3e239558a8db5af9cfb434aa8763b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
