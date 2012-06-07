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
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
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
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/site/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"wrapper\">
            <div id=\"header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/site/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony\">
                </a>
            </div>

            ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 18
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('content_header', $context, $blocks);
        // line 32
        echo "
            <div class=\"content\">
                ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "            </div>

            ";
        // line 38
        if (array_key_exists("code", $context)) {
            // line 39
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 40
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 42
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 23
    public function block_content_header($context, array $blocks = array())
    {
        // line 24
        echo "                <ul id=\"menu\">
                    ";
        // line 25
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 28
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 25
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 26
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
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
        return array (  131 => 35,  128 => 34,  121 => 26,  118 => 25,  111 => 28,  109 => 25,  106 => 24,  103 => 23,  97 => 6,  90 => 42,  85 => 40,  82 => 39,  80 => 38,  76 => 36,  74 => 34,  70 => 32,  68 => 23,  65 => 22,  59 => 19,  56 => 18,  54 => 17,  47 => 13,  35 => 7,  31 => 6,  27 => 5,  21 => 1,  43 => 12,  40 => 7,  34 => 5,  28 => 3,);
    }
}
