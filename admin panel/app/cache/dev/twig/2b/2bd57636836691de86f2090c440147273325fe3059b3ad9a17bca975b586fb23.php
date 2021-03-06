<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_065065598f9def880b960d65ca231e935ad0dbbe8e0e67114efe670a35a6e52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0f67ddda2eb92df3ee206ae61f582875b58b0c254fcdce0c71b159761194bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f67ddda2eb92df3ee206ae61f582875b58b0c254fcdce0c71b159761194bc0->enter($__internal_c0f67ddda2eb92df3ee206ae61f582875b58b0c254fcdce0c71b159761194bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_c0f67ddda2eb92df3ee206ae61f582875b58b0c254fcdce0c71b159761194bc0->leave($__internal_c0f67ddda2eb92df3ee206ae61f582875b58b0c254fcdce0c71b159761194bc0_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_837529aa4e9a7141e1278b886bdc22984740357109734c8ff1fc9a20a361b5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837529aa4e9a7141e1278b886bdc22984740357109734c8ff1fc9a20a361b5bb->enter($__internal_837529aa4e9a7141e1278b886bdc22984740357109734c8ff1fc9a20a361b5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (($context["enable"] ?? $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if (($context["autoload"] ?? $this->getContext($context, "autoload"))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath(($context["base_path"] ?? $this->getContext($context, "base_path")));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["js_path"] ?? $this->getContext($context, "js_path")));
                echo "\"></script>
            ";
                // line 10
                if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["jquery_path"] ?? $this->getContext($context, "jquery_path")));
                    echo "\"></script>
            ";
                }
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <script type=\"text/javascript\">
            ";
            // line 15
            if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
                // line 16
                echo "                \$(function () {
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy(($context["id"] ?? $this->getContext($context, "id")));
            echo "

            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 22
                echo "                ";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 26
                echo "                ";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 30
                echo "                ";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            ";
            // line 33
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget(($context["id"] ?? $this->getContext($context, "id")), ($context["config"] ?? $this->getContext($context, "config")), array("auto_inline" => ($context["auto_inline"] ?? $this->getContext($context, "auto_inline")), "inline" => ($context["inline"] ?? $this->getContext($context, "inline")), "input_sync" => ($context["input_sync"] ?? $this->getContext($context, "input_sync"))));
            echo "

            ";
            // line 35
            if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
                // line 36
                echo "                });
            ";
            }
            // line 38
            echo "        </script>
    ";
        }
        
        $__internal_837529aa4e9a7141e1278b886bdc22984740357109734c8ff1fc9a20a361b5bb->leave($__internal_837529aa4e9a7141e1278b886bdc22984740357109734c8ff1fc9a20a361b5bb_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  143 => 36,  141 => 35,  136 => 33,  133 => 32,  124 => 30,  120 => 29,  117 => 28,  108 => 26,  104 => 25,  101 => 24,  92 => 22,  88 => 21,  83 => 19,  80 => 18,  76 => 16,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable %}
        {% if autoload %}
            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
            </script>
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
            {% if jquery %}
                <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
            {% endif %}
        {% endif %}
        <script type=\"text/javascript\">
            {% if jquery %}
                \$(function () {
            {% endif %}

            {{ ckeditor_destroy(id) }}

            {% for plugin_name, plugin in plugins %}
                {{ ckeditor_plugin(plugin_name, plugin) }}
            {% endfor %}

            {% for style_name, style in styles %}
                {{ ckeditor_styles_set(style_name, style) }}
            {% endfor %}

            {% for template_name, template in templates %}
                {{ ckeditor_template(template_name, template) }}
            {% endfor %}

            {{ ckeditor_widget(id, config, {auto_inline: auto_inline, inline: inline, input_sync: input_sync}) }}

            {% if jquery %}
                });
            {% endif %}
        </script>
    {% endif %}
{% endblock %}
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
