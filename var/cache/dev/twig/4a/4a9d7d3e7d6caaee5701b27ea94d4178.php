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
class __TwigTemplate_3a5d38b39e62ec465d9d1e36e40a0c7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/basket_shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/basket_shop.html.twig"));

        // line 1
        echo "<div id=\"newB\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["bid"]) || array_key_exists("bid", $context) ? $context["bid"] : (function () { throw new RuntimeError('Variable "bid" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 4, $this->source); })()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 10, $this->source); })()));
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "    <form id=\"formShop2\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_order", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" method=\"get\">
        <input id=\"resultBasket\" type=\"text\" class=\"text-center zI4\" disabled value=\"\">
        <input name=\"resultBasket\" type=\"text\" class=\"text-center\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 28, $this->source); })()), "html", null, true);
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
                    <button class=\"button\">Mon compte</button>
                </a>
                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                    <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inscription.png"), "html", null, true);
            echo "\" alt=\"\" title=\"Inscription\">
                    <button class=\"button\">Inscription</button>
                </a>
            </div>
        </div>
        <input id=\"order2\" type=\"submit\" class=\"submit zI4\" value=\"commander\">
";
        }
        // line 48
        echo "<input id=\"basQuantity\" type=\"text\" value=\"\">";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  154 => 48,  144 => 41,  140 => 40,  134 => 37,  130 => 36,  124 => 32,  117 => 28,  111 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  94 => 21,  86 => 16,  82 => 15,  77 => 13,  74 => 12,  71 => 11,  66 => 10,  63 => 9,  61 => 8,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"newB\">
    <p>{{quantity}}</p>
    <p>{{bid}}</p>
    <p>{{price}}</p>
</div>
<div id=\"allBasket\" class=\"allBasket zI4 vHidden\">
    <h5 class=\"text-center\">Remplissez votre panier</h5>
    {% set items = [] %}
    {% if beers is defined %}
    {% for beer in beers %}
        {% if beer.quantity > 0 %}
            <div class=\"flex\">
                <div id=\"addBasInfo{{ beer.id }}\"></div>
                <div class=\"pou5 text-center\">
                    <a id=\"deleteBeerBas{{beer.id}}\" href=\"\">
                        <img src=\"{{ asset('img/sup.png') }}\" alt=\"\">
                    </a> 
                </div>
            </div>
        {% endif %}
    {% endfor %}
    {% endif %}
    {% set result = 0 %}
</div>
{% if app.user %}
    <form id=\"formShop2\" action=\"{{ path('app_shop_order', {'id': app.user.id}) }}\" method=\"get\">
        <input id=\"resultBasket\" type=\"text\" class=\"text-center zI4\" disabled value=\"\">
        <input name=\"resultBasket\" type=\"text\" class=\"text-center\" value=\"{{result}}\">         
        <input id=\"order\" type=\"submit\" class=\"submit zI4\" value=\"commander\">
    </form>
{% else %}
        <input name=\"resultBasket\" id=\"resultBasket\" type=\"text\" class=\"text-center zI4\" disabled value=\"\">
        <div id=\"modalShop\"> 
            <p class=\"text-center\">Merci de vous inscrire ou connectez afin de poursuivre vos achats.</p>
            <div class=\"text-center\">
                <a href=\"{{ path('app_login')}}\">
                    <img src=\"{{ asset('img/profil.png') }}\" alt=\"\" title=\"connexion\">
                    <button class=\"button\">Mon compte</button>
                </a>
                <a href=\"{{ path('app_register')}}\">
                    <img src=\"{{ asset('img/inscription.png') }}\" alt=\"\" title=\"Inscription\">
                    <button class=\"button\">Inscription</button>
                </a>
            </div>
        </div>
        <input id=\"order2\" type=\"submit\" class=\"submit zI4\" value=\"commander\">
{% endif %}
<input id=\"basQuantity\" type=\"text\" value=\"\">", "shop/basket_shop.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/basket_shop.html.twig");
    }
}
