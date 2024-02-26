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
class __TwigTemplate_d18577c27ccc4f3f9c62c566b239d2b9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "shop/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["beers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                    echo " 
                        ";
                    // line 13
                    $context["idBeer"] = twig_array_merge(($context["idBeer"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["beer"], "id", [], "any", false, false, false, 13)]);
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
                $context['_seq'] = twig_ensure_traversable(($context["beers"] ?? null));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 64), "lastName", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Prénom :</h5>
                            <p class=\"space\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), "firstName", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Adresse :</h5>
                            <p class=\"space\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 72), "adress", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Ville :</h5>
                            <p class=\"space\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76), "city", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Code Postal :</h5>
                            <p class=\"space\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 80), "postalCode", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"flex jcCenter\">
                            <h5>Phone :</h5>
                            <p class=\"space\">+33 ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84), "phone", [], "any", false, false, false, 84), "html", null, true);
            echo "</p>
                        </div> 
                        <div>
                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edituser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">
                                <button class=\"sbutton2\">Modifier mes informations</button>
                            </a>
                        </div>                       
                        <div>
                            <form action=\"#checkout\" id=\"formdetailscommande\">
                                <div>
                                    ";
            // line 94
            $context["result"] = ($context["rb"] ?? null);
            // line 95
            echo "                                    ";
            if (array_key_exists("beers", $context)) {
                // line 96
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["beers"] ?? null))));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 97
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["idBeer"] ?? null), $context["j"], [], "array", true, true, false, 97)) {
                        // line 98
                        echo "                                            <input type=\"text\" name=\"";
                        echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                        echo "\" class=\"hiddenInput pAbsolute\" value=\"b";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["idBeer"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["j"]] ?? null) : null), "html", null, true);
                        echo "\">
                                            <input type=\"text\" name=\"b";
                        // line 99
                        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["idBeer"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["j"]] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["rb"] ?? null), "html", null, true);
            echo "\">
                                </div>
                                <button class=\"vHidden\"></button>
                            </form>
                        </div>                          
                    </div>
                    ";
            // line 109
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formShop"] ?? null), 'form_start', ["attr" => ["id" => "checkout"]]);
            echo "
                        ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formShop"] ?? null), "order_status", [], "any", false, false, false, 110), 'row');
            echo "
                        ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formShop"] ?? null), "order_date", [], "any", false, false, false, 111), 'row');
            echo "
                        ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formShop"] ?? null), "shipping_date", [], "any", false, false, false, 112), 'row');
            echo "
                        ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formShop"] ?? null), "price_order", [], "any", false, false, false, 113), 'row');
            echo "
                        <div class=\"col-0\">
                            <button type=\"submit\" id=\"checkout-button\">Payer</button>
                        </div>
                    ";
            // line 117
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formShop"] ?? null), 'form_end');
            echo "
                </div>
            </div>
        ";
        }
        // line 121
        echo "    </div>
";
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
        return array (  321 => 121,  314 => 117,  307 => 113,  303 => 112,  299 => 111,  295 => 110,  291 => 109,  281 => 103,  278 => 102,  272 => 101,  267 => 99,  260 => 98,  257 => 97,  252 => 96,  249 => 95,  247 => 94,  237 => 87,  231 => 84,  224 => 80,  217 => 76,  210 => 72,  203 => 68,  196 => 64,  190 => 60,  187 => 59,  174 => 52,  170 => 51,  162 => 48,  156 => 47,  150 => 44,  145 => 42,  141 => 41,  138 => 40,  133 => 39,  131 => 38,  125 => 34,  122 => 33,  111 => 28,  105 => 25,  99 => 22,  93 => 19,  87 => 16,  83 => 15,  78 => 14,  76 => 13,  69 => 12,  66 => 11,  64 => 10,  61 => 9,  59 => 8,  53 => 5,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/order.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/order.html.twig");
    }
}
