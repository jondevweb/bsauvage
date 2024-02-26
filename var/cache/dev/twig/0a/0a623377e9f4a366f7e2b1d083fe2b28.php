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
class __TwigTemplate_dcbf3442277b42d5b3de3d85b1483217 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/info_shop_beer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/info_shop_beer.html.twig"));

        // line 1
        echo "<div id=\"beer";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"flex text-center blocSP\">
    <div class=\"col-4\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 3, $this->source); })()), "photo", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" alt=\"\">
    </div>
    <div class=\"sPresent col-70\">
        <div class=\"text-left p15\">
            <h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h4>
            <h5>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"flex col-60 jcSpace p15\">
            <div>
                <p class=\"space\"><span>Alcool :</span> ";
        // line 12
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 12, $this->source); })()), "alcool", [], "any", false, false, false, 12), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 12, $this->source); })()), "alcool", [], "any", false, false, false, 12), 0, 1)) : (twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 12, $this->source); })()), "alcool", [], "any", false, false, false, 12))), "html", null, true);
        echo "%</p>
            </div>
            <div>
                <p class=\"space\"><span>Couleur :</span> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 15, $this->source); })()), "color", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
            <div>
                <p class=\"space\"><span>Prix :</span> ";
        // line 18
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), 0, 1)) : (twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18))), "html", null, true);
        echo "€</p>
            </div>
            <div>
                <p class=\"space\"><span>Volume :</span> ";
        // line 21
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 21, $this->source); })()), "volume", [], "any", false, false, false, 21), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 21, $this->source); })()), "volume", [], "any", false, false, false, 21), 0, 2)) : (twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 21, $this->source); })()), "volume", [], "any", false, false, false, 21))), "html", null, true);
        echo "cl</p>
            </div>
        </div>
        <form action=\"\" class=\"flex col-70\">
            <div class=\"spaceBasket\">
                    <select name=\"\" id=\"stockBeer";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 27, $this->source); })()), "quantity", [], "any", false, false, false, 27)));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"resultPrice\">x ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), "html", null, true);
        echo "€ =</span>
                <input id=\"price";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\" class=\"price\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
            </div>
            <div class=\"spaceBasket3\">
                <input id=\"valuePrice";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"valuePrice\" value=\"";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), 2), "html", null, true);
        echo "€\">
                <span id=\"valuePResult";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"valuePResult\"></span>
            </div>
            <div class=\"spaceBasket\">
                <a id=\"basAdd";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" href=\"\">
                    <input class=\"basket pRelative\" type=\"submit\" value=\"Ajouter\">
                </a>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  143 => 41,  137 => 38,  131 => 37,  123 => 34,  117 => 33,  112 => 30,  101 => 28,  97 => 27,  93 => 26,  85 => 21,  79 => 18,  73 => 15,  67 => 12,  60 => 8,  56 => 7,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"beer{{ beer.id }}\" class=\"flex text-center blocSP\">
    <div class=\"col-4\">
        <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\">
    </div>
    <div class=\"sPresent col-70\">
        <div class=\"text-left p15\">
            <h4>{{ beer.name }}</h4>
            <h5>{{ beer.category.name }}</h5>
        </div>
        <div class=\"flex col-60 jcSpace p15\">
            <div>
                <p class=\"space\"><span>Alcool :</span> {{ beer.alcool[2:] == '.00' ? beer.alcool[:1] : beer.alcool  }}%</p>
            </div>
            <div>
                <p class=\"space\"><span>Couleur :</span> {{ beer.color }}</p>
            </div>
            <div>
                <p class=\"space\"><span>Prix :</span> {{ beer.price[2:] == '.00' ? beer.price[:1] : beer.price }}€</p>
            </div>
            <div>
                <p class=\"space\"><span>Volume :</span> {{ beer.volume[2:] == '.00' ? beer.volume[:2] : beer.volume }}cl</p>
            </div>
        </div>
        <form action=\"\" class=\"flex col-70\">
            <div class=\"spaceBasket\">
                    <select name=\"\" id=\"stockBeer{{ beer.id }}\">
                        {% for j in 1..beer.quantity %}
                            <option value=\"{{j}}\">{{j}}</option>
                        {% endfor %}
                    </select>
            </div>
            <div class=\"spaceBasket2\">
                <span id=\"resultPrice{{ beer.id }}\" class=\"resultPrice\">x {{ beer.price }}€ =</span>
                <input id=\"price{{ beer.id }}\" class=\"price\" value=\"{{ beer.price }}\">
            </div>
            <div class=\"spaceBasket3\">
                <input id=\"valuePrice{{ beer.id }}\" class=\"valuePrice\" value=\"{{ beer.price|number_format(2) }}€\">
                <span id=\"valuePResult{{ beer.id }}\" class=\"valuePResult\"></span>
            </div>
            <div class=\"spaceBasket\">
                <a id=\"basAdd{{ beer.id }}\" href=\"\">
                    <input class=\"basket pRelative\" type=\"submit\" value=\"Ajouter\">
                </a>
            </div>
        </form>
    </div>
</div>", "shop/info_shop_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/info_shop_beer.html.twig");
    }
}
