<?php

/* post.html */
class __TwigTemplate_d8a6b228147d7e249b65b20d2985c528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        echo "</h2>
\t<div class=\"post-meta\">
\t\t<span class=\"post-date\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "time"), "html", null, true);
        echo "</span>
\t\t";
        // line 7
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "author")) {
            echo "<span class=\"post-author\">by ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "author"), "html", null, true);
            echo "</span>";
        }
        // line 8
        echo "\t</div>
\t";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  49 => 8,  43 => 7,  37 => 6,  31 => 4,  28 => 3,  19 => 1,);
    }
}
