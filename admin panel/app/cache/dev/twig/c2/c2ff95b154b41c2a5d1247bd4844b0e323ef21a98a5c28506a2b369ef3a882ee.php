<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_ba3b1ddaee64a5afabef4dd18acfd5ea55793a379b41fed02750ba3b169285b9 extends Twig_Template
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
        $__internal_139ed0c5c5c8e0d8ceab0b1d0e9ff47e8daa76da2ba3fffc53d25cee1854e034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139ed0c5c5c8e0d8ceab0b1d0e9ff47e8daa76da2ba3fffc53d25cee1854e034->enter($__internal_139ed0c5c5c8e0d8ceab0b1d0e9ff47e8daa76da2ba3fffc53d25cee1854e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
        <?php if (\$jquery) : ?>
            <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
        <?php endif; ?>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php if (\$jquery) : ?>
            \$(function () {
        <?php endif; ?>

        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderWidget(\$id, \$config, array('auto_inline' => \$auto_inline, 'inline' => \$inline, 'input_sync' => \$input_sync)); ?>

        <?php if (\$jquery) : ?>
            });
        <?php endif; ?>
    </script>
<?php endif; ?>
";
        
        $__internal_139ed0c5c5c8e0d8ceab0b1d0e9ff47e8daa76da2ba3fffc53d25cee1854e034->leave($__internal_139ed0c5c5c8e0d8ceab0b1d0e9ff47e8daa76da2ba3fffc53d25cee1854e034_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
        <?php if (\$jquery) : ?>
            <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
        <?php endif; ?>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php if (\$jquery) : ?>
            \$(function () {
        <?php endif; ?>

        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderWidget(\$id, \$config, array('auto_inline' => \$auto_inline, 'inline' => \$inline, 'input_sync' => \$input_sync)); ?>

        <?php if (\$jquery) : ?>
            });
        <?php endif; ?>
    </script>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
