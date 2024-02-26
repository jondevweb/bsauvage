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

/* modal/alcoholWarning.html.twig */
class __TwigTemplate_f0ff6df9671d69028d26e22825f0c797 extends Template
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
        echo "<div id=\"alcoholWarning\" class=\"zI6\">
    <div class=\"text-center\" id=\"modal\">
        <p style=\"text-decoration: underline;\">(Site e-commerce test. Achat fictif pour le moment.)</p>
        <p>la vente d'alcool à des mineurs de moins de dix-huit ans est interdite!</p>
        <p>L’abus d’alcool est dangereux pour la santé. À consommer avec modération.</p>
        <p>Etes vous majeur?</p> 
        <div class=\"flex col-0 text-center\">
            <a id=\"ok\"><p>Oui</p></a>
            <a id=\"no\" href=\"https://www.google.fr\"><p>Non</p></a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modal/alcoholWarning.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modal/alcoholWarning.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/modal/alcoholWarning.html.twig");
    }
}
