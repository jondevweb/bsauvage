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

/* button/button.html.twig */
class __TwigTemplate_9f74bbcad14e7dbfc53423a7c5943cef extends Template
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
        echo "<div id=\"button\" class=\"zI4 pAbsolute col-2 vHidden\">
    <div>
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        echo "\">
            <button class=\"button\">Boutique</button>
        </a>
    </div>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"col-2 text-center\">
            <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
                <button class=\"button\">Hello ";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "pseudo", [], "any", false, false, false, 10)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "pseudo", [], "any", false, false, false, 10)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "firstName", [], "any", false, false, false, 10))), "html", null, true);
            echo "</button>
            </a>
        </div>
    ";
        } else {
            // line 14
            echo "        <div class=\"pRelative col-2\">
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                <img class=\"login2\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
            echo "\" alt=\"\" title=\"connexion\">
                <button class=\"button\">Mon compte</button>
            </a>
            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                <img class=\"register2\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inscription.png"), "html", null, true);
            echo "\" alt=\"\" title=\"Inscription\">
                <button class=\"button\">Inscription</button>
            </a>
        </div>
    ";
        }
        // line 25
        echo "</div>
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
        <div id=\"profilBan\" class=\"text-center\">
            <p>Hello ";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "pseudo", [], "any", false, false, false, 29)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "pseudo", [], "any", false, false, false, 29)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29))), "html", null, true);
            echo "</p>
        </div>
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "button/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  94 => 27,  92 => 26,  89 => 25,  81 => 20,  77 => 19,  71 => 16,  67 => 15,  64 => 14,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "button/button.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/button/button.html.twig");
    }
}
