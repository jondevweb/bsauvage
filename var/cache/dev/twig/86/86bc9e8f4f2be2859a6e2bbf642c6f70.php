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
class __TwigTemplate_ccfb3965457e20e8fc673e0ac3b3b7b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/info_beer_800.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/info_beer_800.html.twig"));

        // line 1
        echo "<tr class=\"vHidden pAbsolute minW\">
    <td class=\"pour20\">
        <p>
            <span>Nom :</span> 
                ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
        </p>
        <p>
            <span>Catégorie :</span>
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 9, $this->source); })()), "category", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "
        </p>
        <p>
            <span>Couleur :</span>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo "
        </p>
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 15, $this->source); })()), "photo", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" alt=\"\" >
        <p class=\"text-center\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_modif", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 25, $this->source); })()), "p1", [], "any", false, false, false, 25), "html", null, true);
        echo "
        </p>
        <hr>
        <p>
            <span></span>
            ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 30, $this->source); })()), "p2", [], "any", false, false, false, 30), "html", null, true);
        echo "
        </p>
    </td>
    <td class=\"col-3\">
        <p>
            <span>Taux d'alcool :</span>
                ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 36, $this->source); })()), "alcool", [], "any", false, false, false, 36), "html", null, true);
        echo "%
        </p>
        <p>
            <span>Prix Unitaire:</span>
                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), "html", null, true);
        echo "€
        </p>
        <p>
            <span>Volume canette:</span>
                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 44, $this->source); })()), "volume", [], "any", false, false, false, 44), "html", null, true);
        echo "cl
        </p>
        <p>
            <span>Date de création :</span>
                ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
        echo "
        </p>
        <p>
            <span>Stock :</span> 
            ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 52, $this->source); })()), "quantity", [], "any", false, false, false, 52), "html", null, true);
        echo "
        </p>
        <p class=\"text-center\">
            <a id=\"deleteBeerM";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\" href=\"\">
                <img class=\"iMin\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </p>
    </td>
</tr>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  142 => 56,  138 => 55,  132 => 52,  125 => 48,  118 => 44,  111 => 40,  104 => 36,  95 => 30,  87 => 25,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"vHidden pAbsolute minW\">
    <td class=\"pour20\">
        <p>
            <span>Nom :</span> 
                {{ beer.name }}
        </p>
        <p>
            <span>Catégorie :</span>
                {{ beer.category.name }}
        </p>
        <p>
            <span>Couleur :</span>
                {{ beer.color }}
        </p>
        <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\" >
        <p class=\"text-center\">
            <a href=\"{{ path('app_admin_beer_modif', {id: beer.id}) }}\">
                <img class=\"iMin\" src=\"{{ asset('img/modif.png') }}\" alt=\"\">
            </a>
        </p>
    </td>
    <td class=\"col-2\">
        <p>
            <span></span>
            {{ beer.p1 }}
        </p>
        <hr>
        <p>
            <span></span>
            {{ beer.p2 }}
        </p>
    </td>
    <td class=\"col-3\">
        <p>
            <span>Taux d'alcool :</span>
                {{ beer.alcool }}%
        </p>
        <p>
            <span>Prix Unitaire:</span>
                {{ beer.price }}€
        </p>
        <p>
            <span>Volume canette:</span>
                {{ beer.volume }}cl
        </p>
        <p>
            <span>Date de création :</span>
                {{ beer.date|date('d/m/Y') }}
        </p>
        <p>
            <span>Stock :</span> 
            {{ beer.quantity }}
        </p>
        <p class=\"text-center\">
            <a id=\"deleteBeerM{{beer.id}}\" href=\"\">
                <img class=\"iMin\" src=\"{{ asset('img/sup.png') }}\" alt=\"\">
            </a>
        </p>
    </td>
</tr>", "admin/beer/info_beer_800.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/info_beer_800.html.twig");
    }
}
