<?php

/* macros_less.html */
class __TwigTemplate_6bf4fcd6da625f62b382ab724e98c2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 1
    public function getstylesheet($_baker = null, $_server = null, $_path = null, $_media = null)
    {
        $context = $this->env->mergeGlobals(array(
            "baker" => $_baker,
            "server" => $_server,
            "path" => $_path,
            "media" => $_media,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (($this->getAttribute((isset($context["baker"]) ? $context["baker"] : null), "is_baking") || $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "is_hosting"))) {
                // line 3
                echo "<link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo ".css\" type=\"text/css\" media=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("media", $context)) ? (_twig_default_filter((isset($context["media"]) ? $context["media"] : null), "all")) : ("all")), "html", null, true);
                echo "\" />
";
            } else {
                // line 5
                echo "<link rel=\"stylesheet/less\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo ".less\" type=\"text/css\" media=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("media", $context)) ? (_twig_default_filter((isset($context["media"]) ? $context["media"] : null), "all")) : ("all")), "html", null, true);
                echo "\" />
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getless_js($_baker = null, $_server = null, $_site_root = null)
    {
        $context = $this->env->mergeGlobals(array(
            "baker" => $_baker,
            "server" => $_server,
            "site_root" => $_site_root,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            if (((!$this->getAttribute((isset($context["baker"]) ? $context["baker"] : null), "is_baking")) && (!$this->getAttribute((isset($context["server"]) ? $context["server"] : null), "is_hosting")))) {
                // line 11
                echo "<script src=\"";
                echo twig_escape_filter($this->env, (isset($context["site_root"]) ? $context["site_root"] : null), "html", null, true);
                echo "js/less-1.0.41.min.js\" type=\"text/javascript\"></script>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros_less.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  78 => 10,  38 => 2,  65 => 9,  35 => 2,  147 => 43,  144 => 42,  137 => 37,  134 => 36,  125 => 21,  122 => 20,  114 => 47,  110 => 45,  108 => 42,  103 => 39,  101 => 36,  92 => 30,  88 => 29,  84 => 28,  77 => 24,  74 => 23,  72 => 20,  64 => 15,  60 => 6,  55 => 13,  53 => 12,  48 => 5,  44 => 9,  40 => 3,  26 => 3,  24 => 1,  22 => 1,  52 => 9,  49 => 5,  43 => 7,  37 => 6,  31 => 6,  28 => 3,  19 => 8,);
    }
}
