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

/* admin/order/details.html.twig */
class __TwigTemplate_e491454a40fef78c557b596c2e6f4f1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/details.html.twig", 1);
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
        <h2>Détails commande n°";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["com"]) || array_key_exists("com", $context) ? $context["com"] : (function () { throw new RuntimeError('Variable "com" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2>
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order");
            echo "\">
                <button class=\"sbutton3\">Retour commande</button>
            </a>
            ";
            // line 11
            if (array_key_exists("shops", $context)) {
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 13
                    echo "            <div class=\"col-0 flex\">
            ";
                    // line 14
                    if (array_key_exists("beers", $context)) {
                        // line 15
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 15, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                            // line 16
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["shopbeer"]) || array_key_exists("shopbeer", $context) ? $context["shopbeer"] : (function () { throw new RuntimeError('Variable "shopbeer" does not exist.', 16, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["shopbe"]) {
                                // line 17
                                echo "                    ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shopbe"], "shop", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == (isset($context["com"]) || array_key_exists("com", $context) ? $context["com"] : (function () { throw new RuntimeError('Variable "com" does not exist.', 17, $this->source); })()))) {
                                    // line 18
                                    echo "                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 18) == (isset($context["com"]) || array_key_exists("com", $context) ? $context["com"] : (function () { throw new RuntimeError('Variable "com" does not exist.', 18, $this->source); })()))) {
                                        // line 19
                                        echo "                            ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shopbe"], "beer", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19))) {
                                            // line 20
                                            echo "                            <div id=\"beer";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 20), "html", null, true);
                                            echo "\" class=\"flex blocSP col-2\">
                                <div class=\"col-4 text-center\">
                                    <img src=\"";
                                            // line 22
                                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["beer"], "photo", [], "any", false, false, false, 22))), "html", null, true);
                                            echo "\" alt=\"\">
                                </div>
                                <div class=\"sPresent col-70\">
                                    <div class=\"text-left\">
                                        <h4>";
                                            // line 26
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "name", [], "any", false, false, false, 26), "html", null, true);
                                            echo "</h4>
                                        <h5>";
                                            // line 27
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["beer"], "category", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
                                            echo "</h5>
                                    </div>
                                    <div class=\"col-60\">
                                        <div>
                                            <p><span>Prix unitaire:</span> ";
                                            // line 31
                                            echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 31), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 31), 0, 1)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 31))), "html", null, true);
                                            echo "€</p>
                                            <p><span>Quantité achetée:</span> ";
                                            // line 32
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shopbe"], "quantity", [], "any", false, false, false, 32), "html", null, true);
                                            echo "</p>
                                            <p><span>Prix total:</span> ";
                                            // line 33
                                            echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["shopbe"], "priceQuantity", [], "any", false, false, false, 33), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["shopbe"], "priceQuantity", [], "any", false, false, false, 33), 0, 1)) : (twig_get_attribute($this->env, $this->source, $context["shopbe"], "priceQuantity", [], "any", false, false, false, 33))), "html", null, true);
                                            echo "€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                                        }
                                        // line 39
                                        echo "                        ";
                                    }
                                    // line 40
                                    echo "                    ";
                                }
                                // line 41
                                echo "                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopbe'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 42
                            echo "            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "            ";
                    }
                    // line 44
                    echo "            </div>
            <div class=\"col-0 flex help-text\">
            ";
                    // line 46
                    if ((twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 46) == (isset($context["com"]) || array_key_exists("com", $context) ? $context["com"] : (function () { throw new RuntimeError('Variable "com" does not exist.', 46, $this->source); })()))) {
                        // line 47
                        echo "                <p class=\"col-2\"><span>Statut de la commande:</span>";
                        if ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 47) == 0)) {
                            echo "en cours de préparation";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 47) == 1)) {
                            echo "en préparation";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 47) == 2)) {
                            echo "en cours d'acheminement";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 47) == 3)) {
                            echo "livrée";
                        }
                        echo "</p>
                <form action=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_details_order", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shop"], "user", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "com" => twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                        echo "\" class=\"col-0\">
                    <label for=\"statut\">Changer le statut de la commande :</label>
                    <select name=\"statut\" id=\"statut\" >
                        <option value=\"";
                        // line 51
                        echo 0;
                        echo "\">en cours de préparation</option>
                        <option value=\"";
                        // line 52
                        echo 1;
                        echo "\">en préparation</option>
                        <option value=\"";
                        // line 53
                        echo 2;
                        echo "\">en cours d'acheminement</option>
                        <option value=\"";
                        // line 54
                        echo 3;
                        echo "\">livrée</option>
                    </select>
                    <input type=\"submit\" value=\"Valider\">
                    <input type=\"text\" name=\"com\" value=\"";
                        // line 57
                        echo twig_escape_filter($this->env, (isset($context["com"]) || array_key_exists("com", $context) ? $context["com"] : (function () { throw new RuntimeError('Variable "com" does not exist.', 57, $this->source); })()), "html", null, true);
                        echo "\" class=\"vHidden\">
                </form>
                <p class=\"col-2\"><span>Date de la commande :</span>";
                        // line 59
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "orderDate", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
                        echo "</p>    
                <p class=\"col-2\" style=\"order: 4\"><span>Date de livraison prévue :</span>";
                        // line 60
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "shippingDate", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
                        echo "</p>    
                <p class=\"col-2\"><span>Montant total de la commande :</span>";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "priceOrder", [], "any", false, false, false, 61), "html", null, true);
                        echo "€</p>
            ";
                    }
                    // line 62
                    echo " 
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "            ";
            }
            // line 66
            echo "                <div class=\"blocBP\">
                    <h5>Client :</h5>
                    <div class=\"col-0 flex\">
                        <p class=\"col-0\"><span>Mail :</span>
                            <a target=\"blank\" href=\"mailto:";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                <button>Envoyer un mail au sujet de la commande</button>
                            </a>
                        </p>
                        <p class=\"col-2\"><span>Nom :</span>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "lastName", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Prénom :</span>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "firstName", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                        <p class=\"col-0\"><span>Adresse :</span>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "adress", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Ville :</span>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "city", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Code postal :</span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "postalCode", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Téléphone :</span>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "phone", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
                        <p class=\"col-0\"><span>Date d'anniversaire :</span>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "birthdayDate", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        // line 84
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 84,  287 => 80,  283 => 79,  279 => 78,  275 => 77,  271 => 76,  267 => 75,  263 => 74,  256 => 70,  250 => 66,  247 => 65,  239 => 62,  234 => 61,  230 => 60,  226 => 59,  221 => 57,  215 => 54,  211 => 53,  207 => 52,  203 => 51,  197 => 48,  184 => 47,  182 => 46,  178 => 44,  175 => 43,  169 => 42,  163 => 41,  160 => 40,  157 => 39,  148 => 33,  144 => 32,  140 => 31,  133 => 27,  129 => 26,  122 => 22,  116 => 20,  113 => 19,  110 => 18,  107 => 17,  102 => 16,  97 => 15,  95 => 14,  92 => 13,  87 => 12,  85 => 11,  78 => 8,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %}
    <div class=\"container\">
        <div id=\"profilPresent\">
        <h2>Détails commande n°{{com}}</h2>
            {% if is_granted(\"ROLE_ADMIN\") %}
            <a href=\"{{ path('app_admin_order') }}\">
                <button class=\"sbutton3\">Retour commande</button>
            </a>
            {% if shops is defined %}
            {% for shop in shops %}
            <div class=\"col-0 flex\">
            {% if beers is defined %}
            {% for beer in beers %}
                {% for shopbe in shopbeer %}
                    {% if shopbe.shop.id == com %}
                        {% if shop.id == com %}
                            {% if beer.id == shopbe.beer.id %}
                            <div id=\"beer{{ beer.id }}\" class=\"flex blocSP col-2\">
                                <div class=\"col-4 text-center\">
                                    <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\">
                                </div>
                                <div class=\"sPresent col-70\">
                                    <div class=\"text-left\">
                                        <h4>{{ beer.name }}</h4>
                                        <h5>{{ beer.category.name }}</h5>
                                    </div>
                                    <div class=\"col-60\">
                                        <div>
                                            <p><span>Prix unitaire:</span> {{ beer.price[2:] == '.00' ? beer.price[:1] : beer.price }}€</p>
                                            <p><span>Quantité achetée:</span> {{ shopbe.quantity }}</p>
                                            <p><span>Prix total:</span> {{ shopbe.priceQuantity[2:] == '.00' ? shopbe.priceQuantity[:1] : shopbe.priceQuantity }}€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            {% endif %}
            </div>
            <div class=\"col-0 flex help-text\">
            {% if shop.id == com %}
                <p class=\"col-2\"><span>Statut de la commande:</span>{% if shop.orderStatus == 0 %}en cours de préparation{% elseif shop.orderStatus == 1 %}en préparation{% elseif shop.orderStatus == 2 %}en cours d'acheminement{% elseif shop.orderStatus == 3 %}livrée{% endif %}</p>
                <form action=\"{{ path('app_admin_details_order', {'id' : shop.user.id, 'com': shop.id }) }}\" class=\"col-0\">
                    <label for=\"statut\">Changer le statut de la commande :</label>
                    <select name=\"statut\" id=\"statut\" >
                        <option value=\"{{0}}\">en cours de préparation</option>
                        <option value=\"{{1}}\">en préparation</option>
                        <option value=\"{{2}}\">en cours d'acheminement</option>
                        <option value=\"{{3}}\">livrée</option>
                    </select>
                    <input type=\"submit\" value=\"Valider\">
                    <input type=\"text\" name=\"com\" value=\"{{com}}\" class=\"vHidden\">
                </form>
                <p class=\"col-2\"><span>Date de la commande :</span>{{ shop.orderDate|date('d/m/Y') }}</p>    
                <p class=\"col-2\" style=\"order: 4\"><span>Date de livraison prévue :</span>{{ shop.shippingDate|date('d/m/Y') }}</p>    
                <p class=\"col-2\"><span>Montant total de la commande :</span>{{ shop.priceOrder }}€</p>
            {% endif %} 
            </div>
            {% endfor %}
            {% endif %}
                <div class=\"blocBP\">
                    <h5>Client :</h5>
                    <div class=\"col-0 flex\">
                        <p class=\"col-0\"><span>Mail :</span>
                            <a target=\"blank\" href=\"mailto:{{user.email}}\">
                                <button>Envoyer un mail au sujet de la commande</button>
                            </a>
                        </p>
                        <p class=\"col-2\"><span>Nom :</span>{{user.lastName}}</p>
                        <p class=\"col-2\"><span>Prénom :</span>{{user.firstName}}</p>
                        <p class=\"col-0\"><span>Adresse :</span>{{user.adress}}</p>
                        <p class=\"col-2\"><span>Ville :</span>{{user.city}}</p>
                        <p class=\"col-2\"><span>Code postal :</span>{{user.postalCode}}</p>
                        <p class=\"col-2\"><span>Téléphone :</span>{{user.phone}}</p>
                        <p class=\"col-0\"><span>Date d'anniversaire :</span>{{user.birthdayDate|date('d/m/Y')}}</p>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "admin/order/details.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/order/details.html.twig");
    }
}
