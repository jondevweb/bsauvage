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

/* admin/beer/info_beer.html.twig */
class __TwigTemplate_14750c999a63b45900343fe2bbfb28eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/info_beer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/info_beer.html.twig"));

        // line 1
        echo "<tr class=\"text-left maxW\">
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
    </td>
    <td class=\"vaT\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 17, $this->source); })()), "photo", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" alt=\"\" >
    </td>
    <td class=\"pour25\">
        <p>
            <span></span>
            ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 22, $this->source); })()), "p1", [], "any", false, false, false, 22), "html", null, true);
        echo "
        </p>
    </td>
    <td class=\"pour15\">
        <p>
            <span></span>
            ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 28, $this->source); })()), "p2", [], "any", false, false, false, 28), "html", null, true);
        echo "
        </p>
    </td>
    <td>
        <p>
            <span>Taux d'alcool :</span>
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 34, $this->source); })()), "alcool", [], "any", false, false, false, 34), "html", null, true);
        echo "%
        </p>
        <p>
            <span>Prix Unitaire:</span>
                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 38, $this->source); })()), "price", [], "any", false, false, false, 38), "html", null, true);
        echo "€
        </p>
        <p>
            <span>Volume canette:</span>
                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 42, $this->source); })()), "volume", [], "any", false, false, false, 42), "html", null, true);
        echo "cl
        </p>
    </td>
    <td>
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
    </td>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/beer/info_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  119 => 48,  110 => 42,  103 => 38,  96 => 34,  87 => 28,  78 => 22,  70 => 17,  63 => 13,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"text-left maxW\">
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
    </td>
    <td class=\"vaT\">
        <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\" >
    </td>
    <td class=\"pour25\">
        <p>
            <span></span>
            {{ beer.p1 }}
        </p>
    </td>
    <td class=\"pour15\">
        <p>
            <span></span>
            {{ beer.p2 }}
        </p>
    </td>
    <td>
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
    </td>
    <td>
        <p>
            <span>Date de création :</span>
                {{ beer.date|date('d/m/Y') }}
        </p>
        <p>
            <span>Stock :</span> 
            {{ beer.quantity }}
        </p>  
    </td>", "admin/beer/info_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/info_beer.html.twig");
    }
}
