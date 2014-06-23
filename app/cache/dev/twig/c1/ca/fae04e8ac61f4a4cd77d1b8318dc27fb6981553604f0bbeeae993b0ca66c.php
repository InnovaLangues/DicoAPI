<?php

/* ::base.html.twig */
class __TwigTemplate_c1cafae04e8ac61f4a4cd77d1b8318dc27fb6981553604f0bbeeae993b0ca66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/innovadicoapi/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/innovadicoapi/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
          <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">DicoAPI</a>
            </div>
            <div class=\"navbar-collapse collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Voyelles</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"navbar-right\"><a href=\"#\">Login</a></li>
                    
                </ul>
            </div>
          </div>
        </nav>
        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/innovadicoapi/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  111 => 38,  106 => 37,  80 => 14,  77 => 13,  71 => 8,  66 => 7,  57 => 5,  51 => 41,  48 => 38,  45 => 37,  43 => 13,  36 => 10,  34 => 6,  30 => 5,  24 => 1,  136 => 48,  125 => 44,  121 => 43,  117 => 41,  112 => 40,  105 => 35,  94 => 31,  90 => 30,  86 => 28,  81 => 27,  74 => 22,  63 => 6,  59 => 17,  55 => 15,  50 => 14,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
