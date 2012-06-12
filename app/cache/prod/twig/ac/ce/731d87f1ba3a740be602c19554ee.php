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
\t<div id=\"create-topic\"><a href=\"#\">Reply</a></div>
\t<div id=\"posts-list\">
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "posts"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "\t\t<div class=\"post\" id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "id"), "html", null, true);
            echo "\">
\t\t\t<div class=\"user_box\">
\t\t\t\t<span class=\"user_title\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_users"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "author"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "author"), "name"), "html", null, true);
            echo "</a></span>
\t\t\t\t<span class=\"user_info\">";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "posted"), "m/d/Y"), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t\t<div class=\"post_content\">
\t\t\t\t<p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "content"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "\t\t\t<div id=\"noPosts\">No posts found!</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "\t</div>
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
        return array (  90 => 23,  83 => 21,  74 => 17,  68 => 14,  61 => 13,  55 => 11,  50 => 10,  41 => 7,  36 => 6,  33 => 5,  27 => 3,);
    }
}