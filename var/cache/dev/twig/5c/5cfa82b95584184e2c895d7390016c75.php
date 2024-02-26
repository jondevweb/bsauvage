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

/* profil/index.html.twig */
class __TwigTemplate_cb581d6a2246766376453deafdbfcf7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body2' => [$this, 'block_body2'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        // line 4
        echo "    <div class=\"container\">
        <div id=\"profilPresent\">
            <h2>Profil</h2>
            ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "                <div>
                    <h3>Mes informations</h3>
                    <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        <button class=\"sbutton3\">Déconnexion</button>
                    </a>
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_orders", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                        <button class=\"sbutton1\">Voir mes commandes</button>
                    </a>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edituser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">
                        <button class=\"sbutton2\">Modifier mes informations</button>
                    </a>
                    <div>
                        <p><span>Pseudo :</span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "pseudo", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        <p><span>Nom :</span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "lastName", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                        <p><span>Prénom :</span>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstName", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                        <p><span>E-mail :</span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                        <p><span>Mot de passe :</span>********</p>
                        <p><span>Adresse</span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "adress", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                        <p><span>Ville</span>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "city", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                        <p><span>Code Postal</span>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "postalCode", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                        <p><span>Téléphone</span> +33 ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "phone", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                        <p><span>Date d'anniversaire</span>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "birthdayDate", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <h3>Mes bières favorites</h3>
                <div class=\"flex col-2 div100\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 35
                echo "                    ";
                if (twig_in_filter($context["beer"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "favoris", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                    <div class=\"col-40 h0 mauto\">
                        <img src=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["beer"], "photo", [], "any", false, false, false, 37))), "html", null, true);
                    echo "\" alt=\"\">
                    </div>
                    <div class=\"col-60 bPresent\">
                        <div class=\"flex jcSpace\">
                            <h4>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "name", [], "any", false, false, false, 41), "html", null, true);
                    echo "</h4>
                            <h5>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["beer"], "category", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                    echo "</h5>
                        </div>
                        <div class=\"flex jcSpace leftInfo\">
                            <div>
                                <p><span>Alcool :</span> ";
                    // line 46
                    echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "alcool", [], "any", false, false, false, 46), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "alcool", [], "any", false, false, false, 46), 0, 1)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "alcool", [], "any", false, false, false, 46))), "html", null, true);
                    echo "%</p>
                            </div>
                            <div>
                                <p><span>Couleur :</span> ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "color", [], "any", false, false, false, 49), "html", null, true);
                    echo "</p>
                            </div>
                            <div>
                                <p><span>Prix :</span> ";
                    // line 52
                    echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 52), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 52), 0, 1)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 52))), "html", null, true);
                    echo "€</p>
                            </div>
                            <div>
                                <p><span>Volume :</span> ";
                    // line 55
                    echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "volume", [], "any", false, false, false, 55), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "volume", [], "any", false, false, false, 55), 0, 2)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "volume", [], "any", false, false, false, 55))), "html", null, true);
                    echo "cl</p>
                            </div>
                        </div>
                    </div>
                    ";
                }
                // line 60
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                </div>
            ";
        }
        // line 63
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 63,  199 => 61,  193 => 60,  185 => 55,  179 => 52,  173 => 49,  167 => 46,  160 => 42,  156 => 41,  149 => 37,  146 => 36,  143 => 35,  139 => 34,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  91 => 16,  85 => 13,  79 => 10,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %}
    <div class=\"container\">
        <div id=\"profilPresent\">
            <h2>Profil</h2>
            {% if app.user %}
                <div>
                    <h3>Mes informations</h3>
                    <a href=\"{{ path('app_logout') }}\">
                        <button class=\"sbutton3\">Déconnexion</button>
                    </a>
                    <a href=\"{{ path('app_profil_orders', {'id' : app.user.id }) }}\">
                        <button class=\"sbutton1\">Voir mes commandes</button>
                    </a>
                    <a href=\"{{ path('app_profil_edituser', {'id' : app.user.id }) }}\">
                        <button class=\"sbutton2\">Modifier mes informations</button>
                    </a>
                    <div>
                        <p><span>Pseudo :</span>{{ app.user.pseudo }}</p>
                        <p><span>Nom :</span>{{ app.user.lastName }}</p>
                        <p><span>Prénom :</span>{{ app.user.firstName }}</p>
                        <p><span>E-mail :</span>{{ app.user.email }}</p>
                        <p><span>Mot de passe :</span>********</p>
                        <p><span>Adresse</span>{{ app.user.adress }}</p>
                        <p><span>Ville</span>{{ app.user.city }}</p>
                        <p><span>Code Postal</span>{{ app.user.postalCode }}</p>
                        <p><span>Téléphone</span> +33 {{ app.user.phone }}</p>
                        <p><span>Date d'anniversaire</span>{{ app.user.birthdayDate|date('d/m/Y') }}</p>
                    </div>
                </div>
                <h3>Mes bières favorites</h3>
                <div class=\"flex col-2 div100\">
                {% for beer in beers %}
                    {% if beer in app.user.favoris %}
                    <div class=\"col-40 h0 mauto\">
                        <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\">
                    </div>
                    <div class=\"col-60 bPresent\">
                        <div class=\"flex jcSpace\">
                            <h4>{{ beer.name }}</h4>
                            <h5>{{ beer.category.name }}</h5>
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
                        </div>
                    </div>
                    {% endif %}
                {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "profil/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/profil/index.html.twig");
    }
}
