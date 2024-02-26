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

/* admin/contact/modif_projet.html.twig */
class __TwigTemplate_3799c0dbb6050754704dc6588c3d5f90 extends Template
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
        echo "    <td class=\"modifProjet\">
        <a id=\"deleteProjet";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" href=\"\">
            <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>
    </td>
</tr>
<tr class=\"col-0\">
    <td colspan=\"2\" class=\"col-0 modHide\" id=\"supProjet\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modalPt";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            <p>Voulez-vous vraiment supprimer le message concernant \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "\" de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo " ?</p>
            <a id=\"okpt";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_projet_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">
                <p>Oui</p>
            </a>
            <a id=\"nopt";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
                <p>Non</p>
            </a>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "admin/contact/modif_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  63 => 11,  57 => 10,  53 => 9,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/contact/modif_projet.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/modif_projet.html.twig");
    }
}
