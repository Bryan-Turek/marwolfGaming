<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_8080f2d7a101589458a85de74598cb6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/site/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    </head>
    <body>
\t\t<div id=\"header\">
\t\t\t<h1><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">MarwolfGaming</a></h1>
\t\t\t<ul id=\"menu\">
\t\t\t\t<li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">Games</a></li>
\t\t\t\t<li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
        echo "\">Topics</a></li>
\t\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_users"), "html", null, true);
        echo "\">Users</a></li>
\t\t\t</ul>
\t\t\t<div id=\"user_panel\">
\t\t\t\t";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "logged_in"), "method")) {
            // line 21
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_users"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "username"), "method"), "html", null, true);
            echo "\">PROFILE</a>
\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout"), "html", null, true);
            echo "\">LOGOUT</a>
\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_registration"), "html", null, true);
            echo "\">REGISTER</a>
\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_login"), "html", null, true);
            echo "\">LOGIN</a>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</div>
\t\t</div>
        <div id=\"wrapper\">
            ";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 31
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 35
        echo "
            <div class=\"content\">
                ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "                ";
    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  120 => 37,  114 => 7,  106 => 39,  104 => 37,  100 => 35,  94 => 32,  91 => 31,  89 => 30,  84 => 27,  79 => 25,  74 => 24,  69 => 22,  63 => 21,  61 => 20,  55 => 17,  51 => 16,  47 => 15,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
