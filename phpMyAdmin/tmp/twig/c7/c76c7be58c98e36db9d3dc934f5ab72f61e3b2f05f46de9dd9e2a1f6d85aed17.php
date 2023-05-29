<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navigation/tree/controls.twig */
class __TwigTemplate_531955ec4724bbdaae89dc5ef096ab6b53f3d3e888c1769e9717f94df84cd26a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- CONTROLS START -->
<li id=\"navigation_controls_outer\">
    <div id=\"navigation_controls\">
        ";
        // line 4
        echo ($context["collapse_all"] ?? null);
        echo "
        ";
        // line 5
        echo ($context["unlink"] ?? null);
        echo "
    </div>
</li>
<!-- CONTROLS ENDS -->
";
    }

    public function getTemplateName()
    {
        return "navigation/tree/controls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/tree/controls.twig", "D:\\WEB\\phpMyAdmin\\templates\\navigation\\tree\\controls.twig");
    }
}
