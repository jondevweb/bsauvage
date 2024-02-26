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

/* beer/info_beer.html.twig */
class __TwigTemplate_8a0c718cc700d50f293e1bf01f41b7bc extends Template
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
        echo "<div class=\"col-40 h0\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "photo", [], "any", false, false, false, 2))), "html", null, true);
        echo "\" alt=\"\">
</div>
<div class=\"col-60 bPresent\">
    <h4>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>
    <h5>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "category", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h5>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"pRelative\">
        ";
            // line 9
            if (twig_in_filter(($context["beer"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "favoris", [], "any", false, false, false, 9))) {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer_favoris", ["id" => twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 10), "heart" => 0, "user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
                echo "\">
                <img class=\"heartf pAbsolute\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/full_heart.png"), "html", null, true);
                echo "\" alt=\"\">
            </a>
        ";
            } else {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer_favoris", ["id" => twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 14), "heart" => 1, "user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\">
                <img class=\"hearte pAbsolute\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/empty_heart.png"), "html", null, true);
                echo "\" alt=\"\">
            </a>
        ";
            }
            // line 18
            echo "    </div>
    ";
        } else {
            // line 20
            echo "    <div class=\"pRelative\">
        <a href=\"\" class=\"heart\">
            <img class=\"hearte pAbsolute\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/empty_heart.png"), "html", null, true);
            echo "\" alt=\"\">
        </a>
        <div id=\"modalShop\"> 
            <p class=\"text-center\">Merci de vous inscrire ou connectez afin de poursuivre vos achats.</p>
            <div class=\"text-center pRelative\">
                <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                    <img style=\"width: 50px\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
            echo "\" alt=\"\" title=\"connexion\">
                    <button class=\"button\">Mon compte</button>
                </a>
                <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                    <img class=\"register2\" style=\"width: 50px\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inscription.png"), "html", null, true);
            echo "\" alt=\"\" title=\"Inscription\">
                    <button class=\"button\">Inscription</button>
                </a>
            </div>
        </div>
    </div>
    ";
        }
        // line 39
        echo "    <div>
        <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "p1", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
        <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "p2", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
    </div>
    <div class=\"flex jcSpace leftInfo\">
        <div>
            <p><span>Alcool :</span> ";
        // line 45
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 45), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 45), 0, 1)) : (twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "alcool", [], "any", false, false, false, 45))), "html", null, true);
        echo "%</p>
        </div>
        <div>
            <p><span>Couleur :</span> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "color", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
        </div>
        <div>
            <p><span>Prix :</span> ";
        // line 51
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 51), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 51), 0, 1)) : (twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 51))), "html", null, true);
        echo "€</p>
        </div>
        <div>
            <p><span>Volume :</span> ";
        // line 54
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 54), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 54), 0, 2)) : (twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "volume", [], "any", false, false, false, 54))), "html", null, true);
        echo "cl</p>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "beer/info_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  149 => 51,  143 => 48,  137 => 45,  130 => 41,  126 => 40,  123 => 39,  113 => 32,  109 => 31,  103 => 28,  99 => 27,  91 => 22,  87 => 20,  83 => 18,  77 => 15,  72 => 14,  66 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "beer/info_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/beer/info_beer.html.twig");
    }
}
