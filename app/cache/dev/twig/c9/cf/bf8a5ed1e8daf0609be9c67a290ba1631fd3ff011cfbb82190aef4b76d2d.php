<?php

/* HerperBaseBundle:Default:base.html.twig */
class __TwigTemplate_c9cfbf8a5ed1e8daf0609be9c67a290ba1631fd3ff011cfbb82190aef4b76d2d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>

    <title>Bootstrap 101 Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 11
        $this->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig", "HerperBaseBundle:Default:base.html.twig", 11)->display($context);
        // line 12
        echo "
</head>

<body>
<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
    <li><a tabindex=\"-1\" href=\"#\">Action</a></li>
    <li><a tabindex=\"-1\" href=\"#\">Another action</a></li>
    <li><a tabindex=\"-1\" href=\"#\">Something else here</a></li>
    <li class=\"divider\"></li>
    <li><a tabindex=\"-1\" href=\"#\">Separated link</a></li>
</ul>
<div class=\"btn-group\">
    <button class=\"btn\">Left</button>
    <button class=\"btn\">Middle</button>
    <button class=\"btn\">Right</button>
</div>
<h1>Hello, ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- Include all JavaScripts, compiled by Assetic -->
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "HerperBaseBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 33,  60 => 31,  54 => 28,  36 => 12,  34 => 11,  28 => 8,  19 => 1,);
    }
}
