<?php

/* CoreBundle:Topics:topic.html.twig */
class __TwigTemplate_acce731d87f1ba3a740be602c19554ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("MarwolfGaming - " . $this->getAttribute($this->getContext($context, "topic"), "subject")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject"), "html", null, true);
        echo "</h1>
\t<div id=\"breadcrumb\">Category : <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_categories"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "category"), "name"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "category"), "name"), "html", null, true);
        echo "</a></div>
\t";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "logged_in"), "method")) {
            // line 9
            echo "\t\t<div id=\"create-reply\"><a href=\"#reply_box\">Reply</a></div>
\t";
        }
        // line 11
        echo "\t<div id=\"posts-list\">
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "posts"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "\t\t\t<div class=\"post\" id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "id"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"user_box\">
\t\t\t\t\t<img src=\"http://www.vanillicon.com/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "author"), "encname"), "html", null, true);
            echo "_100.png\" />
\t\t\t\t\t<span class=\"user_title\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_users"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "author"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "author"), "name"), "html", null, true);
            echo "</a></span>
\t\t\t\t\t<span class=\"user_info\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "posted"), "m/d/Y"), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t<p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "content"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t\t<div id=\"noPosts\">No posts found!</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t<div id=\"reply_box\" style=\"\">
\t\t\t<h1>Reply</h1>
\t\t\t";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "logged_in"), "method")) {
            // line 29
            echo "\t\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "id"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, strtr(twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject")), array(" " => "-")), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "reply"));
            echo ">
\t\t\t\t\t";
            // line 30
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "reply"));
            echo "
\t\t\t\t\t<input type=\"submit\" />
\t\t\t\t</form>
\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t<p>Please login to reply to this topic</p>
\t\t\t";
        }
        // line 36
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Topics:topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  124 => 34,  117 => 30,  107 => 29,  105 => 28,  101 => 26,  94 => 24,  85 => 20,  79 => 17,  72 => 16,  68 => 15,  62 => 13,  57 => 12,  54 => 11,  50 => 9,  48 => 8,  41 => 7,  36 => 6,  33 => 5,  27 => 3,);
    }
}
