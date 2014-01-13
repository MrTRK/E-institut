<?php

/* EieinstitutBundle::Master-Base.html.twig */
class __TwigTemplate_7a72f30a0ec9708f4d53753b780805ca2c1c65377284d2ac01b8ecc01e0d2383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 8 ]><html lang=\"en\" class=\"no-js ie ie7\"><![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie\"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<html lang=\"en\" class=\"no-js\"><!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t
\t<title>E-institut</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
        
        
        <!-- Global stylesheets -->
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/standard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Comment/uncomment one of these files to toggle between fixed and fluid layout -->
\t<!--<link href=\"css/960.gs.css\" rel=\"stylesheet\" type=\"text/css\">-->
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/960.gs.fluid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Custom styles -->
        
\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/simple-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/block-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/planning.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/calendars.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/}}css/wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Favicon -->
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/favicon.ico"), "html", null, true);
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/favicon-large.png"), "html", null, true);
        echo "\">
\t
\t<!-- Modernizr for support detection, all javascript libs are moved right above </body> for better performance -->
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
\t
\t<!--///////////////////////////////////////////////////////////////////////////////////////////////////
        //
        //\t\tStyles Camera Slide
        //
        ///////////////////////////////////////////////////////////////////////////////////////////////////-->
        
        <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
 

        
        ";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</head>
<body>
    ";
        // line 60
        $this->env->loadTemplate("EieinstitutBundle::include/Header.html.twig")->display($context);
        // line 61
        echo "
\t<article class=\"container_12\">

\t";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "
\t</article>
\t
    ";
        // line 70
        $this->env->loadTemplate("EieinstitutBundle::include/Footer.html.twig")->display($context);
        // line 71
        echo "    
         
     <!--
\t
\tUpdated as v1.5:
\tLibs are moved here to improve performance
\t
\t-->
\t
\t<!-- Generic libs -->
\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery-1.6.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/old-browsers.js"), "html", null, true);
        echo "\"></script>\t\t<!-- remove if you do not need older browsers detection -->
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.hashchange.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Template libs -->
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.accessibleList.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/searchField.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/common.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/standard.js"), "html", null, true);
        echo "\"></script>
\t<!--[if lte IE 8]><script src=\"js/standard.ie.js\"></script><![endif]-->
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.tip.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.contextMenu.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.modal.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Custom styles lib -->
\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/list.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Plugins -->
\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.datepick/jquery.datepick.min.js"), "html", null, true);
        echo "\"></script>
\t


\t\t  <!-- <script type='text/javascript' src='js/camera.slide/jquery.min.js'></script>-->
\t<script type='text/javascript' src='";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/camera.slide/jquery.mobile.customized.min.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/camera.slide/jquery.easing.1.3.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/camera.slide/camera.min.js"), "html", null, true);
        echo "'></script>
\t<script>
\t\tjQuery(function(){
\t\t\tjQuery('#camera_wrap_1').camera({
\t\t\t\tthumbnails: true
\t\t\t});
\t\t});
\t</script>

\t<!-- Charts library -->
\t<!--Load the AJAX API-->
\t<script src=\"http://www.google.com/jsapi\"></script>
     ";
        // line 119
        $this->displayBlock('javascripts_Bottom', $context, $blocks);
        // line 122
        echo "</body>
</html>";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "
        ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "
        ";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "
\t";
    }

    // line 119
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 120
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::Master-Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 120,  275 => 119,  270 => 65,  267 => 64,  262 => 56,  259 => 55,  254 => 53,  251 => 52,  246 => 122,  244 => 119,  229 => 107,  225 => 106,  221 => 105,  213 => 100,  209 => 99,  203 => 96,  197 => 93,  193 => 92,  189 => 91,  184 => 89,  180 => 88,  176 => 87,  172 => 86,  166 => 83,  162 => 82,  158 => 81,  146 => 71,  144 => 70,  139 => 67,  137 => 64,  132 => 61,  130 => 60,  126 => 58,  123 => 55,  121 => 52,  106 => 40,  100 => 37,  96 => 36,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  59 => 23,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  23 => 1,);
    }
}
