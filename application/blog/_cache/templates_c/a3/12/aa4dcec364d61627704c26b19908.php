<?php

/* macros_google.html */
class __TwigTemplate_a312aa4dcec364d61627704c26b19908 extends Twig_Template
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
        // line 4
        echo "
";
    }

    // line 1
    public function getwebfonts($_fontnames = null)
    {
        $context = $this->env->mergeGlobals(array(
            "fontnames" => $_fontnames,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, (isset($context["fontnames"]) ? $context["fontnames"] : null), "html", null, true);
            echo "\">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getanalytics($_siteId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "siteId" => $_siteId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["siteId"]) ? $context["siteId"] : null), "html", null, true);
            echo "']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros_google.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  35 => 2,  147 => 43,  144 => 42,  137 => 37,  134 => 36,  125 => 21,  122 => 20,  114 => 47,  110 => 45,  108 => 42,  103 => 39,  101 => 36,  92 => 30,  88 => 29,  84 => 28,  77 => 24,  74 => 23,  72 => 20,  64 => 15,  60 => 6,  55 => 13,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  26 => 3,  24 => 1,  22 => 1,  52 => 9,  49 => 5,  43 => 7,  37 => 6,  31 => 6,  28 => 3,  19 => 4,);
    }
}
