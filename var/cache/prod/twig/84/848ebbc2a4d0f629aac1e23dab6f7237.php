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
class __TwigTemplate_255ac02e2a1d233291e8f77957763e8b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div id=\"profilPresent\">
        <h2>Détails commande n°";
        // line 6
        echo twig_escape_filter($this->env, ($context["com"] ?? null), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["shops"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 13
                    echo "            <div class=\"col-0 flex\">
            ";
                    // line 14
                    if (array_key_exists("beers", $context)) {
                        // line 15
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["beers"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                            // line 16
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["shopbeer"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["shopbe"]) {
                                // line 17
                                echo "                    ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shopbe"], "shop", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == ($context["com"] ?? null))) {
                                    // line 18
                                    echo "                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 18) == ($context["com"] ?? null))) {
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
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shopbe"], "priceQuantity", [], "any", false, false, false, 33), "html", null, true);
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
                    if ((twig_get_attribute($this->env, $this->source, $context["shop"], "id", [], "any", false, false, false, 46) == ($context["com"] ?? null))) {
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
                        echo twig_escape_filter($this->env, ($context["com"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                <button>Envoyer un mail au sujet de la commande</button>
                            </a>
                        </p>
                        <p class=\"col-2\"><span>Nom :</span>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Prénom :</span>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                        <p class=\"col-0\"><span>Adresse :</span>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adress", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Ville :</span>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Code postal :</span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "postalCode", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                        <p class=\"col-2\"><span>Téléphone :</span>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
                        <p class=\"col-0\"><span>Date d'anniversaire :</span>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthdayDate", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        // line 84
        echo "        </div>
    </div>
";
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
        return array (  276 => 84,  269 => 80,  265 => 79,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  238 => 70,  232 => 66,  229 => 65,  221 => 62,  216 => 61,  212 => 60,  208 => 59,  203 => 57,  197 => 54,  193 => 53,  189 => 52,  185 => 51,  179 => 48,  166 => 47,  164 => 46,  160 => 44,  157 => 43,  151 => 42,  145 => 41,  142 => 40,  139 => 39,  130 => 33,  126 => 32,  122 => 31,  115 => 27,  111 => 26,  104 => 22,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  84 => 16,  79 => 15,  77 => 14,  74 => 13,  69 => 12,  67 => 11,  60 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/order/details.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/order/details.html.twig");
    }
}
