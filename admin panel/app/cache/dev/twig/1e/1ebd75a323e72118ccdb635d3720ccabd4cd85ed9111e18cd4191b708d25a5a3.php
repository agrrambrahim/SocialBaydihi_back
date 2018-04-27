<?php

/* @App/Guides/notif.html.php */
class __TwigTemplate_94db76fc3d9b588cd722b1e6a208f13aaf5142acb246447bae981a2684110f2f extends Twig_Template
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
        $__internal_d6a461cfab6799ceaf9498d5ac6539224759d695618eec5a154c20d256761962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a461cfab6799ceaf9498d5ac6539224759d695618eec5a154c20d256761962->enter($__internal_d6a461cfab6799ceaf9498d5ac6539224759d695618eec5a154c20d256761962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Guides/notif.html.php"));

        // line 1
        echo "
<?php 
    function send_notification (\$tokens, \$message,\$key)
    {
        \$url = 'https://fcm.googleapis.com/fcm/send';
        \$fields = array(
             'registration_ids' => \$tokens,
             'data' => \$message

            );
        \$headers = array(
            'Authorization:key = '.\$key,
            'Content-Type: application/json'
            );
       \$ch = curl_init();
       curl_setopt(\$ch, CURLOPT_URL, \$url);
       curl_setopt(\$ch, CURLOPT_POST, true);
       curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
       curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt (\$ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt(\$ch, CURLOPT_POSTFIELDS, json_encode(\$fields));
       \$result = curl_exec(\$ch);           
       if (\$result === FALSE) {
           die('Curl failed: ' . curl_error(\$ch));
       }
       curl_close(\$ch);
       return \$result;
    }
          \$message = array(
                      \"id\"=>\$guide->getId(),
                      \"title\"=>\$guide->getTitle(),
                      \"time\"=>\$view['time']->diff(\$guide->getCreated()),
                      \"category\"=>\$guide->getCategory()?\$guide->getCategory()->getTitle(): null,
                      \"image\"=> \$this['imagine']->filter(\$view['assets']->getUrl(\$guide->getMedia()->getLink()), 'api_img'),
                      );
        \$key=\$this->container->getParameter('fire_base_key');
        \$message_status = send_notification(\$tokens, \$message,\$key);
        echo \$message_status;
        header(\"Location: \".\$view['router']->path('app_guides_view',array(\"id\"=>\$guide->getId())));
        die();

 ?>";
        
        $__internal_d6a461cfab6799ceaf9498d5ac6539224759d695618eec5a154c20d256761962->leave($__internal_d6a461cfab6799ceaf9498d5ac6539224759d695618eec5a154c20d256761962_prof);

    }

    public function getTemplateName()
    {
        return "@App/Guides/notif.html.php";
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
        return new Twig_Source("
<?php 
    function send_notification (\$tokens, \$message,\$key)
    {
        \$url = 'https://fcm.googleapis.com/fcm/send';
        \$fields = array(
             'registration_ids' => \$tokens,
             'data' => \$message

            );
        \$headers = array(
            'Authorization:key = '.\$key,
            'Content-Type: application/json'
            );
       \$ch = curl_init();
       curl_setopt(\$ch, CURLOPT_URL, \$url);
       curl_setopt(\$ch, CURLOPT_POST, true);
       curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
       curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt (\$ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt(\$ch, CURLOPT_POSTFIELDS, json_encode(\$fields));
       \$result = curl_exec(\$ch);           
       if (\$result === FALSE) {
           die('Curl failed: ' . curl_error(\$ch));
       }
       curl_close(\$ch);
       return \$result;
    }
          \$message = array(
                      \"id\"=>\$guide->getId(),
                      \"title\"=>\$guide->getTitle(),
                      \"time\"=>\$view['time']->diff(\$guide->getCreated()),
                      \"category\"=>\$guide->getCategory()?\$guide->getCategory()->getTitle(): null,
                      \"image\"=> \$this['imagine']->filter(\$view['assets']->getUrl(\$guide->getMedia()->getLink()), 'api_img'),
                      );
        \$key=\$this->container->getParameter('fire_base_key');
        \$message_status = send_notification(\$tokens, \$message,\$key);
        echo \$message_status;
        header(\"Location: \".\$view['router']->path('app_guides_view',array(\"id\"=>\$guide->getId())));
        die();

 ?>", "@App/Guides/notif.html.php", "/Applications/XAMPP/xamppfiles/htdocs/SocialBaydihi_back/admin panel/src/AppBundle/Resources/views/Guides/notif.html.php");
    }
}
