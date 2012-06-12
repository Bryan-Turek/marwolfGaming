<?php

/* CoreBundle:Topics:create.html.twig */
class __TwigTemplate_23f87e10a388de0c70851a9912d18ac1 extends Twig_Template
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
        echo "MarwolfGaming - Create Topic";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>Create a Topic!</h1>
\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topic_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "subject"));
        echo ">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "subject"));
        echo "
\t\t<input type=\"submit\" />
\t</form>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Topics:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  39 => 7,  36 => 6,  33 => 5,  27 => 3,);
    }
}
