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
class __TwigTemplate_cccfd565574d21bca1367022fc172f92 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profil/orders.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["shops"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 12
            echo "                    <div class=\"blocSP col-3\">
                        <p><span>Commande n°:</span>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details_order", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "com" => twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 14)]), "html", null, true);
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
        return array (  108 => 23,  99 => 20,  95 => 19,  91 => 18,  79 => 17,  73 => 14,  69 => 13,  66 => 12,  62 => 11,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/orders.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/profil/orders.html.twig");
    }
}
