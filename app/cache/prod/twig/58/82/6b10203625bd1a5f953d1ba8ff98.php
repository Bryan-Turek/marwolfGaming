<?php

/* CoreBundle:Issues:index.html.twig */
class __TwigTemplate_58826b10203625bd1a5f953d1ba8ff98 extends Twig_Template
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
    <div id=\"topics-list\">
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "topics"));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 11
            echo "\t\t\t<a href=\"/topics/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject"), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topic"), "subject"), "html", null, true);
            echo "
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Issues:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  56 => 12,  51 => 11,  47 => 10,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
