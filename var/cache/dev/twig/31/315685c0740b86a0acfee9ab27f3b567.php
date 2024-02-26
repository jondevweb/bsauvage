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
class __TwigTemplate_c45d2c25c6d0d8d27d3fca129a766ed7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beer/info_beer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beer/info_beer.html.twig"));

        // line 1
        echo "<div class=\"col-40 h0\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 2, $this->source); })()), "photo", [], "any", false, false, false, 2))), "html", null, true);
        echo "\" alt=\"\">
</div>
<div class=\"col-60 bPresent\">
    <h4>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>
    <h5>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 6, $this->source); })()), "category", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h5>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"pRelative\">
        ";
            // line 9
            if (twig_in_filter((isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 9, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "favoris", [], "any", false, false, false, 9))) {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer_favoris", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "heart" => 0, "user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer_favoris", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "heart" => 1, "user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 40, $this->source); })()), "p1", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
        <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 41, $this->source); })()), "p2", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
    </div>
    <div class=\"flex jcSpace leftInfo\">
        <div>
            <p><span>Alcool :</span> ";
        // line 45
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 45, $this->source); })()), "alcool", [], "any", false, false, false, 45), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 45, $this->source); })()), "alcool", [], "any", false, false, false, 45), 0, 1)) : (twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 45, $this->source); })()), "alcool", [], "any", false, false, false, 45))), "html", null, true);
        echo "%</p>
        </div>
        <div>
            <p><span>Couleur :</span> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 48, $this->source); })()), "color", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
        </div>
        <div>
            <p><span>Prix :</span> ";
        // line 51
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51), 0, 1)) : (twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51))), "html", null, true);
        echo "€</p>
        </div>
        <div>
            <p><span>Volume :</span> ";
        // line 54
        echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 54, $this->source); })()), "volume", [], "any", false, false, false, 54), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 54, $this->source); })()), "volume", [], "any", false, false, false, 54), 0, 2)) : (twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 54, $this->source); })()), "volume", [], "any", false, false, false, 54))), "html", null, true);
        echo "cl</p>
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  161 => 54,  155 => 51,  149 => 48,  143 => 45,  136 => 41,  132 => 40,  129 => 39,  119 => 32,  115 => 31,  109 => 28,  105 => 27,  97 => 22,  93 => 20,  89 => 18,  83 => 15,  78 => 14,  72 => 11,  67 => 10,  65 => 9,  62 => 8,  60 => 7,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-40 h0\">
    <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\">
</div>
<div class=\"col-60 bPresent\">
    <h4>{{ beer.name }}</h4>
    <h5>{{ beer.category.name }}</h5>
    {% if app.user %}
    <div class=\"pRelative\">
        {% if beer in app.user.favoris %}
            <a href=\"{{ path('app_beer_favoris', {'id': beer.id, 'heart': 0, 'user' : app.user.id})}}\">
                <img class=\"heartf pAbsolute\" src=\"{{ asset('img/full_heart.png') }}\" alt=\"\">
            </a>
        {% else %}
            <a href=\"{{ path('app_beer_favoris', {'id': beer.id, 'heart': 1, 'user' : app.user.id})}}\">
                <img class=\"hearte pAbsolute\" src=\"{{ asset('img/empty_heart.png') }}\" alt=\"\">
            </a>
        {% endif %}
    </div>
    {% else %}
    <div class=\"pRelative\">
        <a href=\"\" class=\"heart\">
            <img class=\"hearte pAbsolute\" src=\"{{ asset('img/empty_heart.png') }}\" alt=\"\">
        </a>
        <div id=\"modalShop\"> 
            <p class=\"text-center\">Merci de vous inscrire ou connectez afin de poursuivre vos achats.</p>
            <div class=\"text-center pRelative\">
                <a href=\"{{ path('app_login')}}\">
                    <img style=\"width: 50px\" src=\"{{ asset('img/profil.png') }}\" alt=\"\" title=\"connexion\">
                    <button class=\"button\">Mon compte</button>
                </a>
                <a href=\"{{ path('app_register')}}\">
                    <img class=\"register2\" style=\"width: 50px\" src=\"{{ asset('img/inscription.png') }}\" alt=\"\" title=\"Inscription\">
                    <button class=\"button\">Inscription</button>
                </a>
            </div>
        </div>
    </div>
    {% endif %}
    <div>
        <p>{{ beer.p1 }}</p>
        <p>{{ beer.p2 }}</p>
    </div>
    <div class=\"flex jcSpace leftInfo\">
        <div>
            <p><span>Alcool :</span> {{ beer.alcool[2:] == '.00' ? beer.alcool[:1] : beer.alcool  }}%</p>
        </div>
        <div>
            <p><span>Couleur :</span> {{ beer.color }}</p>
        </div>
        <div>
            <p><span>Prix :</span> {{ beer.price[2:] == '.00' ? beer.price[:1] : beer.price }}€</p>
        </div>
        <div>
            <p><span>Volume :</span> {{ beer.volume[2:] == '.00' ? beer.volume[:2] : beer.volume }}cl</p>
        </div>
    </div>", "beer/info_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/beer/info_beer.html.twig");
    }
}
