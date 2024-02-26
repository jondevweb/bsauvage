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

/* profil/orders.html.twig */
class __TwigTemplate_6c250d195135fcde7cf51efb23574389 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/orders.html.twig", 1);
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
            <h2>Mes commandes</h2>
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
        echo "\">
                <button class=\"sbutton3\">Retour profil</button>
            </a>
            <div class=\"flex col-0\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 12
            echo "                    <div class=\"blocSP col-3\">
                        <p><span>Commande n°:</span>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details_order", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "com" => twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">
                            <button class=\"sbutton4\">Détail commande</button>
                        </a>
                        <p><span>Statut :</span>";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 17) == 0)) {
                echo "en cours de préparation";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 17) == 1)) {
                echo "en préparation";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 17) == 2)) {
                echo "en cours d'acheminement";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["shop"], "orderStatus", [], "any", false, false, false, 17) == 3)) {
                echo "livrée";
            }
            echo "</p>    
                        <p><span>Date de la commande :</span>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "orderDate", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
            echo "</p>    
                        <p><span>Date de livraison prévue :</span>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "shippingDate", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "</p>    
                        <p><span>Montant de la commande :</span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "priceOrder", [], "any", false, false, false, 20), "html", null, true);
            echo "€</p>        
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  117 => 20,  113 => 19,  109 => 18,  97 => 17,  91 => 14,  87 => 13,  84 => 12,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %}
    <div class=\"container\">
        <div id=\"profilPresent\">
            <h2>Mes commandes</h2>
            <a href=\"{{ path('app_profil') }}\">
                <button class=\"sbutton3\">Retour profil</button>
            </a>
            <div class=\"flex col-0\">
                {% for shop in shops %}
                    <div class=\"blocSP col-3\">
                        <p><span>Commande n°:</span>{{ shop.id }}</p>
                        <a href=\"{{ path('app_details_order', {'id' : app.user.id, 'com': shop.id }) }}\">
                            <button class=\"sbutton4\">Détail commande</button>
                        </a>
                        <p><span>Statut :</span>{% if shop.orderStatus == 0 %}en cours de préparation{% elseif shop.orderStatus == 1 %}en préparation{% elseif shop.orderStatus == 2 %}en cours d'acheminement{% elseif shop.orderStatus == 3 %}livrée{% endif %}</p>    
                        <p><span>Date de la commande :</span>{{ shop.orderDate|date('d/m/Y') }}</p>    
                        <p><span>Date de livraison prévue :</span>{{ shop.shippingDate|date('d/m/Y') }}</p>    
                        <p><span>Montant de la commande :</span>{{ shop.priceOrder }}€</p>        
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "profil/orders.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/profil/orders.html.twig");
    }
}
