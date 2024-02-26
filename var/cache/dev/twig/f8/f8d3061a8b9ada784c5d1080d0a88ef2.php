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

/* admin/order/index.html.twig */
class __TwigTemplate_f5bb559e93da139dc910117efd31de2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/index.html.twig", 1);
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
            <h2>Commandes</h2>
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "            <form action=\"\" class=\"text-center\">
                <select name=\"\" id=\"orderAdmin\">
                    <option value=\"0\">non finalisées par le client</option>
                    <option value=\"1\">à traiter</option>
                    <option value=\"2\">en cours d'acheminement</option>
                    <option value=\"3\">livrées</option>
                    <option value=\"\" selected>(selectionner)</option>
                </select>
            </form>
            <div class=\"pRelative\">
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande non finalisées par le client : ";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["shop0"]) || array_key_exists("shop0", $context) ? $context["shop0"] : (function () { throw new RuntimeError('Variable "shop0" does not exist.', 18, $this->source); })())), "html", null, true);
            echo "</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande à traiter : ";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["shop1"]) || array_key_exists("shop1", $context) ? $context["shop1"] : (function () { throw new RuntimeError('Variable "shop1" does not exist.', 19, $this->source); })())), "html", null, true);
            echo "</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande en cours d'acheminement : ";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["shop2"]) || array_key_exists("shop2", $context) ? $context["shop2"] : (function () { throw new RuntimeError('Variable "shop2" does not exist.', 20, $this->source); })())), "html", null, true);
            echo "</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande livrée : ";
            // line 21
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["shop3"]) || array_key_exists("shop3", $context) ? $context["shop3"] : (function () { throw new RuntimeError('Variable "shop3" does not exist.', 21, $this->source); })())), "html", null, true);
            echo "</h5>
            </div>
            <div class=\"flex col-0 pRelative\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                // line 25
                echo "                    <div class=\"blocSP col-3 vHidden pAbsolute\">
                        <p><span>Commande n°:</span>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_details_order", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shop"], "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "com" => twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">
                            <button class=\"sbutton4\">Détail commande</button>
                        </a>
                        <p><span>Statut :</span>";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 30) == 0)) {
                    echo "en cours de préparation";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 30) == 1)) {
                    echo "en préparation";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 30) == 2)) {
                    echo "en cours d'acheminement";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 30) == 3)) {
                    echo "livrée";
                }
                echo "</p>    
                        <p><span>Date de la commande :</span>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "orderDate", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
                echo "</p>    
                        <p><span>Date de livraison prévue :</span>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "shippingDate", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
                echo "</p>    
                        <p><span>Montant de la commande :</span>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "priceOrder", [], "any", false, false, false, 33), "html", null, true);
                echo "€</p>        
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </div>
            ";
        }
        // line 38
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 38,  151 => 36,  142 => 33,  138 => 32,  134 => 31,  122 => 30,  116 => 27,  112 => 26,  109 => 25,  105 => 24,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %}
    <div class=\"container\">
        <div id=\"profilPresent\">
            <h2>Commandes</h2>
            {% if is_granted(\"ROLE_ADMIN\") %}
            <form action=\"\" class=\"text-center\">
                <select name=\"\" id=\"orderAdmin\">
                    <option value=\"0\">non finalisées par le client</option>
                    <option value=\"1\">à traiter</option>
                    <option value=\"2\">en cours d'acheminement</option>
                    <option value=\"3\">livrées</option>
                    <option value=\"\" selected>(selectionner)</option>
                </select>
            </form>
            <div class=\"pRelative\">
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande non finalisées par le client : {{ shop0|length }}</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande à traiter : {{ shop1|length }}</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande en cours d'acheminement : {{ shop2|length }}</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande livrée : {{ shop3|length }}</h5>
            </div>
            <div class=\"flex col-0 pRelative\">
                {% for shop in shops %}
                    <div class=\"blocSP col-3 vHidden pAbsolute\">
                        <p><span>Commande n°:</span>{{ shop.id }}</p>
                        <a href=\"{{ path('app_admin_details_order', {'id' : shop.user.id, 'com': shop.id }) }}\">
                            <button class=\"sbutton4\">Détail commande</button>
                        </a>
                        <p><span>Statut :</span>{% if shop.orderStatus == 0 %}en cours de préparation{% elseif shop.orderStatus == 1 %}en préparation{% elseif shop.orderStatus == 2 %}en cours d'acheminement{% elseif shop.orderStatus == 3 %}livrée{% endif %}</p>    
                        <p><span>Date de la commande :</span>{{ shop.orderDate|date('d/m/Y') }}</p>    
                        <p><span>Date de livraison prévue :</span>{{ shop.shippingDate|date('d/m/Y') }}</p>    
                        <p><span>Montant de la commande :</span>{{ shop.priceOrder }}€</p>        
                    </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "admin/order/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/order/index.html.twig");
    }
}
