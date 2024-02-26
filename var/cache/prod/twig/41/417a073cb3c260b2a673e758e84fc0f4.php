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

/* shop/info_shop_beer.html.twig */
class __TwigTemplate_d0eccdf76811105721b4a575d0687cce extends Template
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
        echo "<div id=\"beer";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"flex text-center blocSP\">
    <div class=\"col-4\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "photo", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" alt=\"\">
    </div>
    <div class=\"sPresent col-70\">
        <div class=\"text-left p15\">
            <h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h4>
            <h5>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "category", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"flex col-60 jcSpace p15\">
            <div>
                <p class=\"space\"><span>Alcool :</span> ";
        // line 12
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 12), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 12), 0, 1)) : (twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 12))), "html", null, true);
        echo "%</p>
            </div>
            <div>
                <p class=\"space\"><span>Couleur :</span> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "color", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
            <div>
                <p class=\"space\"><span>Prix :</span> ";
        // line 18
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 18), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 18), 0, 1)) : (twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 18))), "html", null, true);
        echo "€</p>
            </div>
            <div>
                <p class=\"space\"><span>Volume :</span> ";
        // line 21
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 21), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 21), 0, 2)) : (twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 21))), "html", null, true);
        echo "cl</p>
            </div>
        </div>
        <form action=\"\" class=\"flex col-70\">
            <div class=\"spaceBasket\">
                    <select name=\"\" id=\"stockBeer";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "quantity", [], "any", false, false, false, 27)));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>
            </div>
            <div class=\"spaceBasket2\">
                <span id=\"resultPrice";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"resultPrice\">x ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 33), "html", null, true);
        echo "€ =</span>
                <input id=\"price";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\" class=\"price\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
            </div>
            <div class=\"spaceBasket3\">
                <input id=\"valuePrice";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"valuePrice\" value=\"";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 37), 2), "html", null, true);
        echo "€\">
                <span id=\"valuePResult";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"valuePResult\"></span>
            </div>
            <div class=\"spaceBasket\">
                <a id=\"basAdd";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" href=\"\">
                    <input class=\"basket pRelative\" type=\"submit\" value=\"Ajouter\">
                </a>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "shop/info_shop_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  131 => 38,  125 => 37,  117 => 34,  111 => 33,  106 => 30,  95 => 28,  91 => 27,  87 => 26,  79 => 21,  73 => 18,  67 => 15,  61 => 12,  54 => 8,  50 => 7,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/info_shop_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/info_shop_beer.html.twig");
    }
}
