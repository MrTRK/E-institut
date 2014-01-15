<?php

/* EieinstitutBundle::Sub-Master-Right.html.twig */
class __TwigTemplate_17f6f6bef70ec33a4dbba2e981c162b5b8fd02bd77a83c8dea7626f4460d1a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'Sub_Content' => array($this, 'block_Sub_Content'),
            'Slide' => array($this, 'block_Slide'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t
\t<section class=\"grid_9\">
\t\t<div class=\"block-border\">
\t\t\t<div class=\"block-content\">
\t\t\t\t<h1>Titre </h1>
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t<div class=\"controls-buttons\">
\t\t\t\t\t\t<div class=\"sub-hover\">
\t\t\t\t\t\t\t<a href=\"#\">link></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t
\t\t\t\t";
        // line 27
        $this->displayBlock('Sub_Content', $context, $blocks);
        // line 30
        echo "\t\t\t</div>
\t\t</div>
    </section>
    <section class=\"grid_3\">
\t";
        // line 34
        $this->displayBlock('Slide', $context, $blocks);
        // line 37
        echo "\t</section>
";
    }

    // line 27
    public function block_Sub_Content($context, array $blocks = array())
    {
        // line 28
        echo "
\t\t\t\t";
    }

    // line 34
    public function block_Slide($context, array $blocks = array())
    {
        // line 35
        echo "
\t";
    }

    // line 40
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::Sub-Master-Right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  98 => 40,  93 => 35,  90 => 34,  85 => 28,  82 => 27,  77 => 37,  75 => 34,  69 => 30,  67 => 27,  52 => 14,  49 => 13,  44 => 9,  41 => 8,  36 => 5,  33 => 4,);
    }
}
