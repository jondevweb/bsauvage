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

/* shop/basket_shop.html.twig */
class __TwigTemplate_6103729a79b1252177583451c85582d8 extends Template
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
        echo "<div id=\"newB\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, ($context["bid"] ?? null), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo "</p>
</div>
<div id=\"allBasket\" class=\"allBasket zI4 vHidden\">
    <h5 class=\"text-center\">Remplissez votre panier</h5>
    ";
        // line 8
        $context["items"] = [];
        // line 9
        echo "    ";
        if (array_key_exists("beers", $context)) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["beers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 11
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["beer"], "quantity", [], "any", false, false, false, 11) > 0)) {
                    // line 12
                    echo "            <div class=\"flex\">
                <div id=\"addBasInfo";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 13), "html", null, true);
                    echo "\"></div>
                <div class=\"pou5 text-center\">
                    <a id=\"deleteBeerBas";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" href=\"\">
                        <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
                    echo "\" alt=\"\">
                    </a> 
                </div>
            </div>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        $context["result"] = 0;
        // line 24
        echo "</div>
";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "    <form id=\"formShop2\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_order", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" method=\"get\">
        <input id=\"resultBasket\" type=\"text\" class=\"text-center zI4\" disabled value=\"\">
        <input name=\"resultBasket\" type=\"text\" class=\"text-center\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
            echo "\">         
        <input id=\"order\" type=\"submit\" class=\"submit zI4\" value=\"commander\">
    </form>
";
        } else {
            // line 32
            echo "        <input name=\"resultBasket\" id=\"resultBasket\" type=\"text\" class=\"text-center zI4\" disabled value=\"\">
        <div id=\"modalShop\"> 
            <p class=\"text-center\">Merci de vous inscrire ou connectez afin de poursuivre vos achats.</p>
            <div class=\"text-center\">
                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                    <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
            echo "\" alt=\"\" title=\"connexion\">
                    <button class=\"button buttonne\">Mon compte</button>
                </a>
                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                    <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inscription.png"), "html", null, true);
            echo "\" alt=\"\" title=\"Inscription\">
                    <button class=\"button buttonne\">Inscription</button>
                </a>
            </div>
        </div>
        <input id=\"order2\" type=\"submit\" class=\"submit zI4\" value=\"commander\">
";
        }
        // line 48
        echo "<input id=\"basQuantity\" type=\"text\" value=\"\">";
    }

    public function getTemplateName()
    {
        return "shop/basket_shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  138 => 41,  134 => 40,  128 => 37,  124 => 36,  118 => 32,  111 => 28,  105 => 26,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  88 => 21,  80 => 16,  76 => 15,  71 => 13,  68 => 12,  65 => 11,  60 => 10,  57 => 9,  55 => 8,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/basket_shop.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/basket_shop.html.twig");
    }
}
