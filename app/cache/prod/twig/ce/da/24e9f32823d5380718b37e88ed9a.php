<?php

/* CoreBundle:Categories:category.html.twig */
class __TwigTemplate_ceda24e9f32823d5380718b37e88ed9a extends Twig_Template
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
        echo twig_escape_filter($this->env, ("MarwolfGaming - " . $this->getAttribute($this->getContext($context, "category"), "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo " -> Topics!</h1>
\t<div id=\"create-topic\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
        echo "create\">Create Topic</a></div>
\t<div id=\"topics-list\">
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "topics"));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 10
            echo "\t\t<div class=\"topic\" id=\"topic_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "id"), "html", null, true);
            echo "\">
\t\t\t<div class=\"topic_rank\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "rank"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"topic_title\">
\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topics"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "id"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, strtr(twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject")), array(" " => "-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject"), "html", null, true);
            echo "</a>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Categories:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  60 => 13,  55 => 11,  50 => 10,  46 => 9,  41 => 7,  36 => 6,  33 => 5,  27 => 3,);
    }
}
