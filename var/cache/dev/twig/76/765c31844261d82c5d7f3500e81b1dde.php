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

/* beer/basket_price.html.twig */
class __TwigTemplate_25f236adef4239feef09433b38a59045 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beer/basket_price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beer/basket_price.html.twig"));

        // line 1
        echo "<div class=\"flex jcCenter basketLeft\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 2, $this->source); })()), "quantity", [], "any", false, false, false, 2) > 0)) {
            // line 3
            echo "    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\" class=\"flex\">
        <div class=\"spaceBasket\">
            <select name=\"quantity\" id=\"stockBeer";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
                ";
            // line 6
            $context["selected"] = "";
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 7, $this->source); })()), "quantity", [], "any", false, false, false, 7)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 8
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 8, $this->source); })()), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </select>
        </div>
        <div class=\"spaceBasket2\">
            <span id=\"resultPrice";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"resultPrice\">x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 13, $this->source); })()), "price", [], "any", false, false, false, 13), "html", null, true);
            echo "€ =</span>
            <input name=\"price\" id=\"price";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"price\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
        </div>
        <div class=\"spaceBasket3\">
            <input id=\"valuePrice";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"valuePrice\" value=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 17, $this->source); })()), "price", [], "any", false, false, false, 17), 2), "html", null, true);
            echo "€\">
            <span id=\"valuePResult";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"valuePResult\"></span>
        </div>
        <a class=\"spaceBasket\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\">
            <input type=\"text\" name=\"bid\" class=\"cache vHidden pAbsolute\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
            ";
            // line 22
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "                <input class=\"basket pRelative\" disabled type=\"submit\" value=\"Ajouter au panier\">
            ";
            } else {
                // line 25
                echo "                <input class=\"basket pRelative\" type=\"submit\" value=\"Ajouter au panier\">
            ";
            }
            // line 27
            echo "        </a>
    </form>
    ";
        } else {
            // line 30
            echo "    <h3>Produit indisponible pour le moment! Désolé!!!</h3>
    ";
        }
        // line 32
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "beer/basket_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  131 => 30,  126 => 27,  122 => 25,  118 => 23,  116 => 22,  112 => 21,  108 => 20,  103 => 18,  97 => 17,  89 => 14,  83 => 13,  78 => 10,  65 => 8,  60 => 7,  58 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex jcCenter basketLeft\">
    {% if beer.quantity > 0 %}
    <form action=\"{{ path('app_shop')}}\" class=\"flex\">
        <div class=\"spaceBasket\">
            <select name=\"quantity\" id=\"stockBeer{{ beer.id }}\">
                {% set selected = \"\" %}
                {% for j in 1..beer.quantity %}
                    <option value=\"{{j}}\"{{selected}}>{{j}}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"spaceBasket2\">
            <span id=\"resultPrice{{ beer.id }}\" class=\"resultPrice\">x {{ beer.price }}€ =</span>
            <input name=\"price\" id=\"price{{ beer.id }}\" class=\"price\" value=\"{{ beer.price }}\">
        </div>
        <div class=\"spaceBasket3\">
            <input id=\"valuePrice{{ beer.id }}\" class=\"valuePrice\" value=\"{{ beer.price|number_format(2) }}€\">
            <span id=\"valuePResult{{ beer.id }}\" class=\"valuePResult\"></span>
        </div>
        <a class=\"spaceBasket\" href=\"{{ path('app_shop')}}\">
            <input type=\"text\" name=\"bid\" class=\"cache vHidden pAbsolute\" value=\"{{beer.id}}\">
            {% if is_granted(\"ROLE_ADMIN\") %}
                <input class=\"basket pRelative\" disabled type=\"submit\" value=\"Ajouter au panier\">
            {% else %}
                <input class=\"basket pRelative\" type=\"submit\" value=\"Ajouter au panier\">
            {% endif %}
        </a>
    </form>
    {% else %}
    <h3>Produit indisponible pour le moment! Désolé!!!</h3>
    {% endif %}
</div>", "beer/basket_price.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/beer/basket_price.html.twig");
    }
}
