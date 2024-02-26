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
class __TwigTemplate_cb258c48f462e66c5f1fa69cd0e2936c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            <div class=\"pRelative minHeight\">
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande non finalisée";
            // line 18
            echo (((twig_length_filter($this->env, ($context["shop0"] ?? null)) > 1)) ? ("s") : (""));
            echo " par le client : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["shop0"] ?? null)), "html", null, true);
            echo "</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande";
            // line 19
            echo (((twig_length_filter($this->env, ($context["shop1"] ?? null)) > 1)) ? ("s") : (""));
            echo " à traiter : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["shop1"] ?? null)), "html", null, true);
            echo "</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande";
            // line 20
            echo (((twig_length_filter($this->env, ($context["shop2"] ?? null)) > 1)) ? ("s") : (""));
            echo " en cours d'acheminement : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["shop2"] ?? null)), "html", null, true);
            echo "</h5>
                <h5 class=\"text-center vHidden pAbsolute\">Nombre de commande livrée";
            // line 21
            echo (((twig_length_filter($this->env, ($context["shop3"] ?? null)) > 1)) ? ("s") : (""));
            echo " : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["shop3"] ?? null)), "html", null, true);
            echo "</h5>
            </div>
            <div class=\"flex col-0 pRelative\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shops"] ?? null));
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
        return array (  145 => 38,  141 => 36,  132 => 33,  128 => 32,  124 => 31,  112 => 30,  106 => 27,  102 => 26,  99 => 25,  95 => 24,  87 => 21,  81 => 20,  75 => 19,  69 => 18,  57 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/order/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/order/index.html.twig");
    }
}
