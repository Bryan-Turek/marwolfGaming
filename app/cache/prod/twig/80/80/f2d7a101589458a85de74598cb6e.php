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
    </head>
    <body>
\t\t<div id=\"header\">
\t\t\t<h1><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">MarwolfGaming</a></h1>
\t\t\t<ul id=\"menu\">
\t\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">Games</a></li>
\t\t\t\t<li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
        echo "\">Topics</a></li>
\t\t\t</ul>
\t\t</div>
        <div id=\"wrapper\">
            ";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 20
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 24
        echo "
            <div class=\"content\">
                ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
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

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
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
        return array (  91 => 27,  88 => 26,  82 => 7,  74 => 28,  72 => 26,  68 => 24,  62 => 21,  59 => 20,  57 => 19,  50 => 15,  46 => 14,  41 => 12,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
