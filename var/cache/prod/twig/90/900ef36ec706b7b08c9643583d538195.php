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

/* admin/beer/edit_delete_beer_800.html.twig */
class __TwigTemplate_e82bba2fc005805383542b7d9c21915f extends Template
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
        echo "</tr>
    <tr class=\"col-0\">
        <td colspan=\"7\" class=\"col-0 modHide\">
            <div class=\"modal2 text-center pAbsolute zI6\" id=\"modal";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
                <p>Voulez-vous vraiment supprimer ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " ?</p>
                <a id=\"okB";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\">
                    <p>Oui</p>
                </a>
                <a id=\"noB";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
                    <p>Non</p>
                </a>
            </div>
        </td>
    </tr>";
    }

    public function getTemplateName()
    {
        return "admin/beer/edit_delete_beer_800.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/edit_delete_beer_800.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/edit_delete_beer_800.html.twig");
    }
}
