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

/* admin/beer/info_beer_800.html.twig */
class __TwigTemplate_810ec2914cbe345c8a1851d1d9deba9a extends Template
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
        echo "<tr class=\"vHidden pAbsolute minW\">
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
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "photo", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" alt=\"\" >
        <p class=\"text-center\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_modif", ["id" => twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">
                <img class=\"iMin\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/modif.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </p>
    </td>
    <td class=\"col-2\">
        <p>
            <span></span>
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "p1", [], "any", false, false, false, 25), "html", null, true);
        echo "
        </p>
        <hr>
        <p>
            <span></span>
            ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "p2", [], "any", false, false, false, 30), "html", null, true);
        echo "
        </p>
    </td>
    <td class=\"col-3\">
        <p>
            <span>Taux d'alcool :</span>
                ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 36), "html", null, true);
        echo "%
        </p>
        <p>
            <span>Prix Unitaire:</span>
                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 40), "html", null, true);
        echo "€
        </p>
        <p>
            <span>Volume canette:</span>
                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 44), "html", null, true);
        echo "cl
        </p>
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
        <p class=\"text-center\">
            <a id=\"deleteBeerM";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\" href=\"\">
                <img class=\"iMin\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </p>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/beer/info_beer_800.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  132 => 55,  126 => 52,  119 => 48,  112 => 44,  105 => 40,  98 => 36,  89 => 30,  81 => 25,  71 => 18,  67 => 17,  62 => 15,  57 => 13,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/info_beer_800.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/info_beer_800.html.twig");
    }
}
