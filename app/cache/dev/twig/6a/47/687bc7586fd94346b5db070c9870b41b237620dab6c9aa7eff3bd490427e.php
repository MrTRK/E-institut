<?php

/* EieinstitutBundle:Default:index.html.twig */
class __TwigTemplate_6a47687bc7586fd94346b5db070c9870b41b237620dab6c9aa7eff3bd490427e extends Twig_Template
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
        echo "<html>
    <head>
        <title>Test Page</title>
    </head>
    <body>
        <h1>Hello ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
