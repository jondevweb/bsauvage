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
class __TwigTemplate_40c6e55898de7e4acf2039ccba4124d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/table_head_beer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/table_head_beer.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/beer/table_head_beer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<thead class=\"maxW\">
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
</thead>", "admin/beer/table_head_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/table_head_beer.html.twig");
    }
}
