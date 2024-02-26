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

/* admin/beer/info_category.html.twig */
class __TwigTemplate_0c7b5cfd64b665132177c8b3b17145a0 extends Template
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
        echo "<div class=\"catTable2 pRelative\">
    <div class=\"flex text-center p55\">
        <a class=\"col-15\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_modif", ["id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/modif.png"), "html", null, true);
        echo "\" alt=\"\">
            <span>modifier</span>
        </a>
        <p class=\"col-70\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
        <a class=\"col-15\" id=\"deleteCategory";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" href=\"\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
            <span>supprimer</span>
        </a>
    </div>
    <div class=\"modHide2 pAbsolute\">
        <div class=\"modal22 text-center pAbsolute zI6\" id=\"modalC";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
            <p class=\"col-0\">Supprimer ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            <div class=\"flex jcSpace pRelative\">
                <a id=\"okC";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">
                    <p>Oui</p>
                </a>
                <a id=\"noC";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
                    <p>Non</p>
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/beer/info_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  76 => 17,  71 => 15,  67 => 14,  59 => 9,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/info_category.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/info_category.html.twig");
    }
}
