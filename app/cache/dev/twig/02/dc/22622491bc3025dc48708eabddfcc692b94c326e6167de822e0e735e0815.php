<?php

/* EieinstitutBundle:Pages:Licence.html.twig */
class __TwigTemplate_02dc22622491bc3025dc48708eabddfcc692b94c326e6167de822e0e735e0815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EieinstitutBundle::Master-Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <!--section detail-->\t
\t\t
\t\t<section class=\"grid_12\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t<h1>Licence </h1>
\t\t\t\t\t</div>
\t\t\t\t<div >
\t\t\t\t\t<div class=\"float-right\" title=\"Commentaires\">
\t\t\t\t\t\t\t12<img src=\"images/icons/web-app/24/Comment.png\" width=\"24\" height=\"24\">
\t\t\t\t\t </div>
\t\t\t\t\t\t\t<div class=\"float-left\" title=\"Préconisations\">
\t\t\t\t\t\t\t12<img src=\"images/icons/web-app/24/Bar-chart.png\" width=\"24\" height=\"24\">
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"fieldset  grey-bg clearfix\">
\t\t\t\t<div class=\"grid_2 box float-left\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"bullet-list  with-icon\">
\t\t\t\t\t\t<li><a href=\"#\">F.A.Q</a></li> 
\t\t\t\t\t\t<li><a href=\"#\">Charte d'utilisation</a> </li>
\t\t\t\t\t\t<li><a href=\"#\">Sécurité </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Licence </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact </a></li>\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"task-description\"><p style=\"font-weight:bold\">Principe Général</p>

<p>E-institut propose à ses utilisateurs deux sortes de licences pour leur contenu :</p>

<p><b>Les licences Creative Commons. </b>
Pour plus d'informations sur les options qui vous sont offertes, rendez-vous sur le site des licences Creative Commons. :</p>

<ul>
\t<li>http://creativecommons.org/licenses/</li>
\t<li>Pour choisir une licence creative commons</li>
\t<li>http://creativecommons.org/choose/?lang=fr</li>
</ul>

<p ><b>Le copyright </b>(tout droit réservé)<br />
http://fr.wikipedia.org/wiki/Droit_d%27auteur </p>

<p>Que vous choisissiez une licence creative commons ou un copyright pour vos contenus, tout ce que vous publiez sur E-institut est consultable et réutilisable gratuitement et librement sur E-institut. Cependant ces licences protègent ou restreignent l'utilisation de vos publications en dehors de E-institut sans votre accord express.</p>

<p style=\"font-weight:bold\">Utilisation interne et externe des contenus éducatifs de la communauté E-institut </p>

<p>Une fois qu'un contenu (contenu éducatif) est sur E-institut, il est libre d'utilisation et de modification pour tous ses membres. Si un membre souhaite récupérer un contenu pour l'utiliser à l'extérieur de E-institut, sur le web ou dans le monde physique, ce contenu lui est proposé sous licence Creative Commons Attribution Non-Commerciale NoDerivs. Cette licence prévoit les dispositions principales suivantes :</p>


<p>les Contenus restent libres et gratuits où qu'ils soient reproduits <br />
    les Contenus ne sont pas exploitables commercialement par des tiers sauf avec votre accord express<br />
    les Contenus s'ils sont modifiés doivent l'être au sein de E-institut.</p>

<p>Si ce contenu est copyrighté par son auteur, toute utilisation de ce contenu à l’extérieur E-institut doit être au préalable confirmé par son auteur.</p>



<p>Il s'agit pour nous d'une question de réciprocité. Exemple: si vous donnez votre savoir à la communauté, et que quelqu'un le fait évoluer, il nous semble normal que vous-même et la communauté E-institut puissiez bénéficier de cette évolution.</p>

<p style=\"font-weight:bold\">
(idem : modèle beebac, début de réflexion pour rédiger les conditions spécifiques à E-institut et savoir comment Beebac peut affirmer que les modifications faites sur son site sont légales. Autrement dit : Beebac a-t-il demander ou fait une déclaration officielle auprès d'un organisme particulier. <br />
E-institut est-il soumis aux règles de droits français ? a priori oui)</p></div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t    </div>
\t\t\t\t
\t\t\t</div>
 
\t\t</section>
\t\t<!--fin section lioste des publications -->\t
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages:Licence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
