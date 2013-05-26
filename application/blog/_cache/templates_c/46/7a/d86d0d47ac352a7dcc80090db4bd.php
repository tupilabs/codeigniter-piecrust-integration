<?php

/* default.html */
class __TwigTemplate_467ad86d0d47ac352a7dcc80090db4bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["google"] = $this->env->loadTemplate("macros_google.html");
        // line 2
        $context["less"] = $this->env->loadTemplate("macros_less.html");
        // line 3
        echo "<!doctype html>
<html>
<head>
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        if ((!twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")))) {
            echo " &mdash; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        }
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description"), "html", null, true);
        echo "\" />
\t<meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author"), "html", null, true);
        echo "\" />
    <meta name=\"generator\" content=\"PieCrust ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "version"), "html", null, true);
        echo "\" />
    <meta name=\"template-engine\" content=\"Twig\" />
";
        // line 12
        $this->env->loadTemplate("blueprint.html")->display($context);
        // line 13
        echo "\t";
        echo $context["google"]->getwebfonts("Lobster");
        echo "
\t";
        // line 14
        echo $context["less"]->getstylesheet((isset($context["baker"]) ? $context["baker"] : null), (isset($context["server"]) ? $context["server"] : null), ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root") . "css/default"));
        echo "
    ";
        // line 15
        echo $context["less"]->getless_js((isset($context["baker"]) ? $context["baker"] : null), (isset($context["server"]) ? $context["server"] : null), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"));
        echo "
</head>
<body>
    <div id=\"container\" class=\"container\">
        <div id=\"header\" class=\"span-24 last\">
\t\t\t";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "        </div>
        <p>Click <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "base_url"), "html", null, true);
        echo "\">here</a> to go back to the home page</p>
        <div id=\"menu\" class=\"span-4 push-20 last\">
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("blog"), "html", null, true);
        echo "\">Blog</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("about"), "html", null, true);
        echo "\">About</a></li>
\t\t\t\t</ul>
\t\t\t</div>
        </div>
        <div id=\"content\" class=\"span-20 pull-4 last\">
            <div class=\"content\">
                ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "            </div>
        </div>
        <div id=\"footer\" class=\"span-24 last\">
\t\t\t";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "        </div>
    </div>
\t";
        // line 47
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "debug_info");
        echo "
</body>
</html>
";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "            <h1><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        echo "</a></h1>
\t\t\t";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "                ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        \t\t";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "            <p>";
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "branding");
        echo "</p>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  144 => 42,  137 => 37,  134 => 36,  125 => 21,  122 => 20,  114 => 47,  110 => 45,  108 => 42,  103 => 39,  101 => 36,  92 => 30,  88 => 29,  84 => 28,  77 => 24,  74 => 23,  72 => 20,  64 => 15,  60 => 14,  55 => 13,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  26 => 3,  24 => 2,  22 => 1,  52 => 9,  49 => 8,  43 => 7,  37 => 6,  31 => 6,  28 => 3,  19 => 1,);
    }
}
