<?php

/* blog.html */
class __TwigTemplate_30e9030f914abe6af4803e9504480ca6 extends Twig_Template
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
        echo "
";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

<div id=\"navigation\">
\t";
        // line 8
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prev_page")) {
            // line 9
            echo "\t\t&laquo;&nbsp;<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prev_page")), "html", null, true);
            echo "\" id=\"navigation-next\">Newer Entries</a>
\t";
        }
        // line 11
        echo "\t";
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "next_page")) {
            // line 12
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "next_page")), "html", null, true);
            echo "\" id=\"navigation-next\">Older Entries</a>&nbsp;&raquo;
\t";
        }
        // line 14
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  51 => 12,  42 => 9,  34 => 5,  116 => 25,  107 => 21,  105 => 20,  100 => 18,  96 => 16,  69 => 12,  45 => 8,  36 => 2,  29 => 4,  80 => 11,  78 => 13,  38 => 2,  65 => 9,  35 => 5,  147 => 43,  144 => 42,  137 => 37,  134 => 36,  125 => 21,  122 => 20,  114 => 47,  110 => 22,  108 => 42,  103 => 39,  101 => 36,  92 => 14,  88 => 29,  84 => 28,  77 => 24,  74 => 23,  72 => 20,  64 => 15,  60 => 6,  55 => 13,  53 => 12,  48 => 11,  44 => 9,  40 => 8,  26 => 3,  24 => 2,  22 => 2,  52 => 11,  49 => 5,  43 => 7,  37 => 6,  31 => 4,  28 => 3,  19 => 1,);
    }
}
