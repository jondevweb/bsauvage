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

/* admin/beer/info_beer.html.twig */
class __TwigTemplate_cc85474c5e9ad76032bafb624312d350 extends Template
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
        echo "<tr class=\"text-left maxW\">
    <td class=\"pour20\">
        <p>
            <span>Nom :</span> 
                ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
        </p>
        <p>
            <span>Catégorie :</span>
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "category", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "
        </p>
        <p>
            <span>Couleur :</span>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "color", [], "any", false, false, false, 13), "html", null, true);
        echo "
        </p>
    </td>
    <td class=\"vaT\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "photo", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" alt=\"\" >
    </td>
    <td class=\"pour25\">
        <p>
            <span></span>
            ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "p1", [], "any", false, false, false, 22), "html", null, true);
        echo "
        </p>
    </td>
    <td class=\"pour15\">
        <p>
            <span></span>
            ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "p2", [], "any", false, false, false, 28), "html", null, true);
        echo "
        </p>
    </td>
    <td>
        <p>
            <span>Taux d'alcool :</span>
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 34), "html", null, true);
        echo "%
        </p>
        <p>
            <span>Prix Unitaire:</span>
                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 38), "html", null, true);
        echo "€
        </p>
        <p>
            <span>Volume canette:</span>
                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 42), "html", null, true);
        echo "cl
        </p>
    </td>
    <td>
        <p>
            <span>Date de création :</span>
                ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "date", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
        echo "
        </p>
        <p>
            <span>Stock :</span> 
            ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "quantity", [], "any", false, false, false, 52), "html", null, true);
        echo "
        </p>  
    </td>";
    }

    public function getTemplateName()
    {
        return "admin/beer/info_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  113 => 48,  104 => 42,  97 => 38,  90 => 34,  81 => 28,  72 => 22,  64 => 17,  57 => 13,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/info_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/info_beer.html.twig");
    }
}
