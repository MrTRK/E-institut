<?php

/* EieinstitutBundle::Sub-Master-Base.html.twig */
class __TwigTemplate_3979945bf73119c606caebdd2f36f0976d48f1c1a00bfe708cc2bc406ef0fb2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'sub_content' => array($this, 'block_sub_content'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
        

\t";
        // line 13
        $this->displayBlock('sub_content', $context, $blocks);
        // line 27
        echo "
";
    }

    // line 13
    public function block_sub_content($context, array $blocks = array())
    {
        // line 14
        echo "\t\t
        <section class=\"grid_8 right\">
                <div class=\"block-border\">
                        <div class=\"block-content\">\t
                        
                        
                        </div>
                </div>
        </section>
\t
\t\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::Sub-Master-Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  57 => 27,  55 => 13,  50 => 10,  47 => 9,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
