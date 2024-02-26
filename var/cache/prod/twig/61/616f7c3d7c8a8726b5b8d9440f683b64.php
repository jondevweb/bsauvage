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

/* admin/beer/table_head_beer.html.twig */
class __TwigTemplate_7527457424ebf4d815caa5f92410de65 extends Template
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
        echo "<thead class=\"maxW\">
    <tr>
        <th>Nom / Catégorie / Couleur</th>
        <th>Photo</th>
        <th>1er Paragraphe</th>
        <th>2eme Paragraphe</th>
        <th>TA / Prix / Volume</th>
        <th>Date de création / Quantité</th>
    </tr>
</thead>
<thead class=\"vHidden pAbsolute minW\">
    <tr>
        <th class=\"pour20\">
            <p>Nom</p>
            <p>Catégorie</p>
            <p>Couleur</p>
            <p>Photo<p>
        </th>
        <th class=\"col-2\">
            <p>1er Paragraphe</p>
            <p>2eme Paragraphe</p>
        </th>
        <th class=\"col-3\">
            <p>TA</p>
            <p>Prix</p>
            <p>Volume</p>
            <p>Date de création</p>
            <p>Quantité</p>
        </th>
    </tr>
</thead>";
    }

    public function getTemplateName()
    {
        return "admin/beer/table_head_beer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/table_head_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/table_head_beer.html.twig");
    }
}
