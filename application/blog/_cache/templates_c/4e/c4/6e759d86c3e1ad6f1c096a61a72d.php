<?php

/* blueprint.html */
class __TwigTemplate_4ec46e759d86c3e1ad6f1c096a61a72d extends Twig_Template
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
        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/blueprint/screen.css\" type=\"text/css\" media=\"screen, projection\" />
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/blueprint/print.css\" type=\"text/css\" media=\"print\" /> 
<!--[if lt IE 8]>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/blueprint/ie.css\" type=\"text/css\" media=\"screen, projection\" />
<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "blueprint.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  80 => 11,  78 => 10,  38 => 2,  65 => 9,  35 => 2,  147 => 43,  144 => 42,  137 => 37,  134 => 36,  125 => 21,  122 => 20,  114 => 47,  110 => 45,  108 => 42,  103 => 39,  101 => 36,  92 => 30,  88 => 29,  84 => 28,  77 => 24,  74 => 23,  72 => 20,  64 => 15,  60 => 6,  55 => 13,  53 => 12,  48 => 5,  44 => 9,  40 => 3,  26 => 3,  24 => 2,  22 => 1,  52 => 9,  49 => 5,  43 => 7,  37 => 6,  31 => 6,  28 => 3,  19 => 1,);
    }
}
