<?php

/* EieinstitutBundle::include/Header.html.twig */
class __TwigTemplate_9e180fd4455a1b42e775aa0fc8ac091a0850ff26eb692f760ec14b6c64a4903e extends Twig_Template
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
        // line 1
        echo "\t<!-- Header -->
\t<a href=\"#\"><img style=\"float:left;padding-left:10%;padding-top:5px;\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/logo_s2.png"), "html", null, true);
        echo "\" width=\"231\" height=\"91\"></a>
\t<!-- Server status -->
\t<header>
\t\t<div class=\"container_12\">
\t\t\t<div class=\"server-info\"> <a href=\"http://www.reseau-ramses.org/\" target=\"_blank\">RAMSSES</a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://www.facebook.com/pages/E-Institut-Espace-Num%C3%A9rique-Acad%C3%A9mique-Unifi%C3%A9-ENAU/212028762219064\" target=\"_blank\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/fb.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://twitter.com/EInstitut\"target=\"_blank\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/tw.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"http://www.linkedin.com/pub/e-institut/45/a43/168\" target=\"_blank\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/ln.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a> </div>
\t\t\t<div class=\"server-info\"><a href=\"http://www.youtube.com/channel/UCNJWFhvZoYW_Qx-GoHHRBcw\" target=\"_blank\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/yt.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://plus.google.com/112849304228527795761/posts\" target=\"_blank\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/goo.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"#\" target=\"_blank\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/rss.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t
\t\t
\t\t</div>

\t</header>
\t<!-- End server status -->
\t
\t<!-- Main nav -->
\t<nav id=\"main-nav\">
\t\t<ul class=\"container_12\">
\t\t\t
\t\t\t<li class=\"accueil current\"><a href=\"#\" title=\"\">Accueil</a></li>
\t\t\t<li class=\"users\" title=\"Espace personnel\"><a href=\"#\" title=\"\">Espace personnel</a></li>
\t\t\t<li class=\"medias\" title=\"Ressources\"><a href=\"#\" title=\"\">Ressources</a></li>
\t\t\t<li class=\"comments\" title=\"Tutoriels en ligne\"><a href=\"#\" title=\"\">Tutoriels en ligne</a></li>
\t\t\t<li class=\"contacts\" title=\"Annuaire\"><a href=\"#\" title=\"\">Annuaire</a></li>
\t\t\t<li class=\"settings\" title=\"Forum\"><a href=\"#\" title=\"\">Forum</a></li>
\t\t</ul>
\t</nav>
\t\t
\t\t\t
\t<!-- End main nav -->
\t
\t<!-- Sub nav -->
\t<div id=\"sub-nav\"><div class=\"container_12\">
\t\t
\t\t<a href=\"#\" title=\"Aide\" class=\"nav-button\"><b>Rechercher</b></a>
\t
\t\t<form id=\"search-form\" name=\"search-form\" method=\"post\" action=\"search.html\">
\t\t\t<input type=\"text\" name=\"s\" id=\"s\" value=\"\" title=\"Search admin...\" autocomplete=\"off\">
\t\t</form>
\t
\t</div></div>
\t<!-- End sub nav -->
\t
\t<!-- Status bar -->
\t<div id=\"status-bar\">
\t\t<div class=\"container_12\">

\t\t\t<ul id=\"status-infos\">
\t\t\t<li class=\"spaced\">Bonjour  <strong>Jean</strong></li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"2 messages\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> <strong>2</strong></a>
\t\t\t\t<div id=\"messages-list\" class=\"result-block\" style=\"display: none;\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"small-files-list icon-mail relative\" style=\"overflow: hidden;\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>10:15</strong> Please update...<br>
\t\t\t\t\t\t\t<small>From: System</small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Yest.</strong> Hi<br>
\t\t\t\t\t\t\t<small>From: Jane</small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<p id=\"messages-info\" class=\"result-info\"><a href=\"#\">Voir ma messagerie</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"2 comments\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/balloon.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> <strong>2</strong></a>
\t\t\t\t<div id=\"comments-list\" class=\"result-block\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"small-files-list icon-comment\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Jane</strong>: I don't think so<br>
\t\t\t\t\t\t\t<small>On <strong>Post title</strong></small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Ken_54</strong>: What about using a different...<br>
\t\t\t\t\t\t\t<small>On <strong>Post title</strong></small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<p id=\"comments-info\" class=\"result-info\"><a href=\"#\">Voir tous les commentaires</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li><a href=\"#\" class=\"button red\" title=\"Déconnexion\"><span class=\"smaller\">Déconnexion</span></a></li>
\t\t</ul>
\t\t\t
\t\t\t<ul id=\"breadcrumb\">
\t\t\t\t<li><a href=\"#\" title=\"Accueil\">Accueil</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- End status bar -->
\t
\t<div id=\"header-shadow\"></div>
\t<!-- End header -->
\t
\t";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::include/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 75,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,  275 => 117,  272 => 116,  267 => 64,  264 => 63,  259 => 56,  256 => 55,  251 => 53,  248 => 52,  243 => 119,  241 => 116,  226 => 104,  222 => 103,  218 => 102,  210 => 97,  206 => 96,  200 => 93,  194 => 90,  190 => 89,  186 => 88,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  163 => 80,  159 => 79,  155 => 78,  143 => 68,  141 => 67,  138 => 66,  136 => 63,  132 => 61,  130 => 60,  126 => 58,  123 => 55,  121 => 52,  106 => 40,  100 => 37,  96 => 55,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  59 => 23,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  23 => 1,);
    }
}
