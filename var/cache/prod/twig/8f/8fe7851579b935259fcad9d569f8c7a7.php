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

/* admin/beer/edit_delete_beer.html.twig */
class __TwigTemplate_37e7429c0a0021f543e70a8718317e5a extends Template
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
        echo "    <td class=\"pour5 text-center\">
        <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_modif", ["id" => twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">
            <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/modif.png"), "html", null, true);
        echo "\" alt=\"\">
            <p>modifier</p>
        </a>
        <a id=\"deleteBeer";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" href=\"\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
            <p>supprimer</p>
        </a> 
    </td>
</tr>
<tr class=\"col-0\">
    <td colspan=\"7\" class=\"col-0 modHide\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modal";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
            <p>Voulez-vous vraiment supprimer ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo " ?</p>
            <a id=\"okB";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
                <p>Oui</p>
            </a>
            <a id=\"noB";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                <p>Non</p>
            </a>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/beer/edit_delete_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  72 => 16,  68 => 15,  64 => 14,  54 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/edit_delete_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/edit_delete_beer.html.twig");
    }
}
