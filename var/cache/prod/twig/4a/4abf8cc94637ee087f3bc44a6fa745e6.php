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

/* admin/contact/modif_contact.html.twig */
class __TwigTemplate_0681b1454bd8b9b915277e41396694e0 extends Template
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
        echo "    <td class=\"modifContact\">
        <div>
            <p>
                <span>Date du message : </pan>
                <p>";
        // line 5
        ((($context["contacts"] ?? null)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "date", [], "any", false, false, false, 5), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</p>
            </p>
        </div>
        <div class=\"flex\">
            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "readding", [], "any", false, false, false, 9) == 0)) {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 10), "check" => 1]), "html", null, true);
            echo "\">
                    <img class=\"case\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 14), "check" => 0]), "html", null, true);
            echo "\">
                    <img class=\"caseCoche\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case_coche.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        }
        // line 18
        echo "            <p>Lu</p>
        </div>
        <div class=\"flex\">
            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "answer", [], "any", false, false, false, 21) == 0)) {
            // line 22
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 22), "check" => 3]), "html", null, true);
            echo "\">
                    <img class=\"case\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        } else {
            // line 26
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 26), "check" => 2]), "html", null, true);
            echo "\">
                    <img class=\"caseCoche\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case_coche.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        }
        // line 30
        echo "            <p>Répondu</p>
        </div>
        <a id=\"deleteContact";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\" href=\"\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>
    </td>
</tr>

<tr class=\"col-0\">
    <td colspan=\"2\" class=\"col-0 modHide\" id=\"supContact\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modalCt";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
            <p>Voulez-vous vraiment supprimer le message concernant \"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 41), "html", null, true);
        echo "\" de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo " ?</p>
            <a id=\"okct";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">
                <p>Oui</p>
            </a>
            <a id=\"noct";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                <p>Non</p>
            </a>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/contact/modif_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  131 => 42,  125 => 41,  121 => 40,  111 => 33,  107 => 32,  103 => 30,  97 => 27,  92 => 26,  86 => 23,  81 => 22,  79 => 21,  74 => 18,  68 => 15,  63 => 14,  57 => 11,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/contact/modif_contact.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/modif_contact.html.twig");
    }
}
