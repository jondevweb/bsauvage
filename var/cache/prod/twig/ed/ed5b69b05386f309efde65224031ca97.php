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
class __TwigTemplate_1b96d3a640a64cd6edcdb6d35980b524 extends Template
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
        echo "<div class=\"flex jcCenter basketLeft\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "quantity", [], "any", false, false, false, 2) > 0)) {
            // line 3
            echo "    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\" class=\"flex\">
        <div class=\"spaceBasket\">
            <select name=\"quantity\" id=\"stockBeer";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
                ";
            // line 6
            $context["selected"] = "";
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "quantity", [], "any", false, false, false, 7)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 8
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, ($context["selected"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"resultPrice\">x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 13), "html", null, true);
            echo "€ =</span>
            <input name=\"price\" id=\"price";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"price\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
        </div>
        <div class=\"spaceBasket3\">
            <input id=\"valuePrice";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"valuePrice\" value=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "price", [], "any", false, false, false, 17), 2), "html", null, true);
            echo "€\">
            <span id=\"valuePResult";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"valuePResult\"></span>
        </div>
        <a class=\"spaceBasket\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\">
            <input type=\"text\" name=\"bid\" class=\"cache vHidden pAbsolute\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["beer"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
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
        return array (  129 => 32,  125 => 30,  120 => 27,  116 => 25,  112 => 23,  110 => 22,  106 => 21,  102 => 20,  97 => 18,  91 => 17,  83 => 14,  77 => 13,  72 => 10,  59 => 8,  54 => 7,  52 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "beer/basket_price.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/beer/basket_price.html.twig");
    }
}
