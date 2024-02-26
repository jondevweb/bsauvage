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

/* shop/order.html.twig */
class __TwigTemplate_8dde2db24db1004437a535930bb21e18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/order.html.twig", 1);
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

        echo " 
    <div class=\"container\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        echo "\">
            <button class=\"sbutton3\">Retour modification</button>
        </a>
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "            <div id=\"hiddenOrder\">
                ";
            // line 10
            $context["idBeer"] = [];
            // line 11
            echo "                ";
            if (array_key_exists("beers", $context)) {
                // line 12
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                    echo " 
                        ";
                    // line 13
                    $context["idBeer"] = twig_array_merge((isset($context["idBeer"]) || array_key_exists("idBeer", $context) ? $context["idBeer"] : (function () { throw new RuntimeError('Variable "idBeer" does not exist.', 13, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 13)]);
                    // line 14
                    echo "                        <div id=\"be";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 14), "html", null, true);
                    echo "\">  
                            <h4>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "name", [], "any", false, false, false, 15), "html", null, true);
                    echo "</h4>
                            <h5>";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["beer"], "category", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
                    echo "</h5>
                            <div class=\"flex jcSpace leftInfo\">
                                <div>
                                    <p>";
                    // line 19
                    echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "alcool", [], "any", false, false, false, 19), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "alcool", [], "any", false, false, false, 19), 0, 1)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "alcool", [], "any", false, false, false, 19))), "html", null, true);
                    echo "</p>
                                </div>
                                <div>
                                    <p>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "color", [], "any", false, false, false, 22), "html", null, true);
                    echo "</p>
                                </div>
                                <div>
                                    <p>";
                    // line 25
                    echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 25), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 25), 0, 1)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 25))), "html", null, true);
                    echo "</p>
                                </div>
                                <div>
                                    <p>";
                    // line 28
                    echo twig_escape_filter($this->env, (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "volume", [], "any", false, false, false, 28), 2, null) == ".00")) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "volume", [], "any", false, false, false, 28), 0, 2)) : (twig_get_attribute($this->env, $this->source, $context["beer"], "volume", [], "any", false, false, false, 28))), "html", null, true);
                    echo "</p>
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                ";
            }
            // line 34
            echo "            </div>
            <div id=\"orderShop\">
                <div id=\"allBasket\" class=\"allBasket zI4\">
                    <h5 class=\"text-center\">Confirmez la commande avant paiement</h5>
                    ";
            // line 38
            if (array_key_exists("beers", $context)) {
                // line 39
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 39, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                    // line 40
                    echo "                            <div class=\"flex\">
                                <div id=\"addBasInfo";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 41), "html", null, true);
                    echo "\">
                                    <div id=\"beer";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" class=\"flex text-center blocSP\">
                                        <div class=\"col-4\">
                                            <img src=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["beer"], "photo", [], "any", false, false, false, 44))), "html", null, true);
                    echo "\" alt=\"\">
                                        </div>
                                        <div class=\"spaceBasket2\">
                                            <span id=\"resultPrice";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" class=\"resultPrice\">x ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 47), "html", null, true);
                    echo "€ =</span>
                                            <input id=\"price";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\" class=\"price\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "price", [], "any", false, false, false, 48), "html", null, true);
                    echo "\">
                                        </div>
                                        <div class=\"text-center\">
                                            <a id=\"deleteBeerBas";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" href=\"\">
                                                <img src=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
                    echo "\" alt=\"\">
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                    <div class=\"text-center blocBP\">
                        <input id=\"order\" type=\"submit\" class=\"submit\" value=\"payer\">                    
                        <div class=\"flex jcCenter\">
                            <h5>Nom :</h5>
                            <p class=\"space\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "lastName", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Prénom :</h5>
                            <p class=\"space\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "firstName", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Adresse :</h5>
                            <p class=\"space\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "adress", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Ville :</h5>
                            <p class=\"space\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "city", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Code Postal :</h5>
                            <p class=\"space\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "postalCode", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Phone :</h5>
                            <p class=\"space\">+33 ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "phone", [], "any", false, false, false, 84), "html", null, true);
            echo "</p>
                        </div> 
                        <div>
                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edituser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">
                                <button class=\"sbutton2\">Modifier mes informations</button>
                            </a>
                        </div>                       
                        <div>
                            <form action=\"#checkout\" id=\"formdetailscommande\">
                                <div>
                                    ";
            // line 94
            $context["result"] = (isset($context["rb"]) || array_key_exists("rb", $context) ? $context["rb"] : (function () { throw new RuntimeError('Variable "rb" does not exist.', 94, $this->source); })());
            // line 95
            echo "                                    ";
            if (array_key_exists("beers", $context)) {
                // line 96
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 96, $this->source); })()))));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 97
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["idBeer"] ?? null), $context["j"], [], "array", true, true, false, 97)) {
                        // line 98
                        echo "                                            <input type=\"text\" name=\"";
                        echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                        echo "\" class=\"hiddenInput pAbsolute\" value=\"b";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["idBeer"]) || array_key_exists("idBeer", $context) ? $context["idBeer"] : (function () { throw new RuntimeError('Variable "idBeer" does not exist.', 98, $this->source); })()), $context["j"], [], "array", false, false, false, 98), "html", null, true);
                        echo "\">
                                            <input type=\"text\" name=\"b";
                        // line 99
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["idBeer"]) || array_key_exists("idBeer", $context) ? $context["idBeer"] : (function () { throw new RuntimeError('Variable "idBeer" does not exist.', 99, $this->source); })()), $context["j"], [], "array", false, false, false, 99), "html", null, true);
                        echo "\" class=\"hiddenInput pAbsolute\" value=\"0\">
                                            ";
                    }
                    // line 101
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                                    ";
            }
            // line 103
            echo "                                    <input name=\"resultBasket\" type=\"text\" class=\"text-center hiddenInput pAbsolute\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["rb"]) || array_key_exists("rb", $context) ? $context["rb"] : (function () { throw new RuntimeError('Variable "rb" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "\">
                                </div>
                                <button class=\"vHidden\"></button>
                            </form>
                        </div>                          
                    </div>
                    ";
            // line 109
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formShop"]) || array_key_exists("formShop", $context) ? $context["formShop"] : (function () { throw new RuntimeError('Variable "formShop" does not exist.', 109, $this->source); })()), 'form_start', ["attr" => ["id" => "checkout"]]);
            echo "
                        ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formShop"]) || array_key_exists("formShop", $context) ? $context["formShop"] : (function () { throw new RuntimeError('Variable "formShop" does not exist.', 110, $this->source); })()), "order_status", [], "any", false, false, false, 110), 'row');
            echo "
                        ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formShop"]) || array_key_exists("formShop", $context) ? $context["formShop"] : (function () { throw new RuntimeError('Variable "formShop" does not exist.', 111, $this->source); })()), "order_date", [], "any", false, false, false, 111), 'row');
            echo "
                        ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formShop"]) || array_key_exists("formShop", $context) ? $context["formShop"] : (function () { throw new RuntimeError('Variable "formShop" does not exist.', 112, $this->source); })()), "shipping_date", [], "any", false, false, false, 112), 'row');
            echo "
                        ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formShop"]) || array_key_exists("formShop", $context) ? $context["formShop"] : (function () { throw new RuntimeError('Variable "formShop" does not exist.', 113, $this->source); })()), "price_order", [], "any", false, false, false, 113), 'row');
            echo "
                        <div class=\"col-0\">
                            <button type=\"submit\" id=\"checkout-button\">Payer</button>
                        </div>
                    ";
            // line 117
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formShop"]) || array_key_exists("formShop", $context) ? $context["formShop"] : (function () { throw new RuntimeError('Variable "formShop" does not exist.', 117, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        ";
        }
        // line 121
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "shop/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 121,  332 => 117,  325 => 113,  321 => 112,  317 => 111,  313 => 110,  309 => 109,  299 => 103,  296 => 102,  290 => 101,  285 => 99,  278 => 98,  275 => 97,  270 => 96,  267 => 95,  265 => 94,  255 => 87,  249 => 84,  242 => 80,  235 => 76,  228 => 72,  221 => 68,  214 => 64,  208 => 60,  205 => 59,  192 => 52,  188 => 51,  180 => 48,  174 => 47,  168 => 44,  163 => 42,  159 => 41,  156 => 40,  151 => 39,  149 => 38,  143 => 34,  140 => 33,  129 => 28,  123 => 25,  117 => 22,  111 => 19,  105 => 16,  101 => 15,  96 => 14,  94 => 13,  87 => 12,  84 => 11,  82 => 10,  79 => 9,  77 => 8,  71 => 5,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %} 
    <div class=\"container\">
        <a href=\"{{ path('app_shop') }}\">
            <button class=\"sbutton3\">Retour modification</button>
        </a>
        {% if app.user %}
            <div id=\"hiddenOrder\">
                {% set idBeer = [] %}
                {% if beers is defined %}
                    {% for beer in beers %} 
                        {% set idBeer =  idBeer|merge([beer.id]) %}
                        <div id=\"be{{ beer.id }}\">  
                            <h4>{{ beer.name }}</h4>
                            <h5>{{ beer.category.name }}</h5>
                            <div class=\"flex jcSpace leftInfo\">
                                <div>
                                    <p>{{ beer.alcool[2:] == '.00' ? beer.alcool[:1] : beer.alcool  }}</p>
                                </div>
                                <div>
                                    <p>{{ beer.color }}</p>
                                </div>
                                <div>
                                    <p>{{ beer.price[2:] == '.00' ? beer.price[:1] : beer.price }}</p>
                                </div>
                                <div>
                                    <p>{{ beer.volume[2:] == '.00' ? beer.volume[:2] : beer.volume }}</p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
            <div id=\"orderShop\">
                <div id=\"allBasket\" class=\"allBasket zI4\">
                    <h5 class=\"text-center\">Confirmez la commande avant paiement</h5>
                    {% if beers is defined %}
                        {% for beer in beers %}
                            <div class=\"flex\">
                                <div id=\"addBasInfo{{ beer.id }}\">
                                    <div id=\"beer{{ beer.id }}\" class=\"flex text-center blocSP\">
                                        <div class=\"col-4\">
                                            <img src=\"{{ asset('img/' ~ beer.photo) }}\" alt=\"\">
                                        </div>
                                        <div class=\"spaceBasket2\">
                                            <span id=\"resultPrice{{ beer.id }}\" class=\"resultPrice\">x {{ beer.price }}€ =</span>
                                            <input id=\"price{{ beer.id }}\" class=\"price\" value=\"{{ beer.price }}\">
                                        </div>
                                        <div class=\"text-center\">
                                            <a id=\"deleteBeerBas{{beer.id}}\" href=\"\">
                                                <img src=\"{{ asset('img/sup.png') }}\" alt=\"\">
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    {% endif %}
                    <div class=\"text-center blocBP\">
                        <input id=\"order\" type=\"submit\" class=\"submit\" value=\"payer\">                    
                        <div class=\"flex jcCenter\">
                            <h5>Nom :</h5>
                            <p class=\"space\">{{ app.user.lastName }}</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Prénom :</h5>
                            <p class=\"space\">{{ app.user.firstName }}</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Adresse :</h5>
                            <p class=\"space\">{{ app.user.adress }}</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Ville :</h5>
                            <p class=\"space\">{{ app.user.city }}</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Code Postal :</h5>
                            <p class=\"space\">{{ app.user.postalCode }}</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Phone :</h5>
                            <p class=\"space\">+33 {{ app.user.phone }}</p>
                        </div> 
                        <div>
                            <a href=\"{{ path('app_profil_edituser', {'id' : app.user.id }) }}\">
                                <button class=\"sbutton2\">Modifier mes informations</button>
                            </a>
                        </div>                       
                        <div>
                            <form action=\"#checkout\" id=\"formdetailscommande\">
                                <div>
                                    {% set result = rb %}
                                    {% if beers is defined %}
                                        {% for j in 0..beers|length %}
                                        {% if idBeer[j] is defined %}
                                            <input type=\"text\" name=\"{{j}}\" class=\"hiddenInput pAbsolute\" value=\"b{{idBeer[j]}}\">
                                            <input type=\"text\" name=\"b{{idBeer[j]}}\" class=\"hiddenInput pAbsolute\" value=\"0\">
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <input name=\"resultBasket\" type=\"text\" class=\"text-center hiddenInput pAbsolute\" value=\"{{rb}}\">
                                </div>
                                <button class=\"vHidden\"></button>
                            </form>
                        </div>                          
                    </div>
                    {{ form_start(formShop, {'attr': {'id': 'checkout'}} )}}
                        {{ form_row(formShop.order_status) }}
                        {{ form_row(formShop.order_date) }}
                        {{ form_row(formShop.shipping_date) }}
                        {{ form_row(formShop.price_order)}}
                        <div class=\"col-0\">
                            <button type=\"submit\" id=\"checkout-button\">Payer</button>
                        </div>
                    {{ form_end(formShop) }}
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %} ", "shop/order.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/order.html.twig");
    }
}
