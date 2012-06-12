<?php

/* CoreBundle:Topics:index.html.twig */
class __TwigTemplate_0cf8015aa2d8d821ce9ded88f74f33eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "MarwolfGaming - Topics";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Topics</h1>
\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "logged_in"), "method")) {
            // line 10
            echo "\t\t<div id=\"create-topic\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
            echo "create\">Create Topic</a></div>
    ";
        }
        // line 12
        echo "\t<div id=\"topics-list\">
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "topics"));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 14
            echo "\t\t<div class=\"topic\" id=\"topic_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "id"), "html", null, true);
            echo "\">
\t\t\t<div class=\"topic_rank\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "rank"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"topic_title\">
\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "id"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, strtr(twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject")), array(" " => "-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject"), "html", null, true);
            echo "</a>
\t\t\t\t<div class=\"topic_info\">
\t\t\t\t\tPosted by: <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_users"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "author"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "topic"), "author"), "name"), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Topics:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  81 => 19,  71 => 17,  66 => 15,  61 => 14,  57 => 13,  54 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
