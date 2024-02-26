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

/* socialNetwork/index.html.twig */
class __TwigTemplate_1dbc21add15c86f5731f4c8a787ced02 extends Template
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
        echo "<div id=\"sNetwork\" class=\"pAbsolute\">
    <a target=\"blank\" href=\"https://www.instagram.com/brasserie_sauvage/?hl=fr\">
        <i class=\"fa-brands fa-instagram\"></i>
    </a>
    <a target=\"blank\" href=\"https://www.facebook.com/sauvagebrasserie\">
        <i class=\"fa-brands fa-facebook\"></i>
    </a>
    <a target=\"blank\" href=\"mailto:allo@brasseriesauvage.co\">
        <i class=\"fa-regular fa-envelope\"></i>
    </a>
    <a target=\"blank\" href=\"https://soundcloud.com/brasserie_sauvage\">
        <i class=\"fa-brands fa-soundcloud\"></i>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "socialNetwork/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "socialNetwork/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/socialNetwork/index.html.twig");
    }
}
