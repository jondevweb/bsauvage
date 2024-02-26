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
class __TwigTemplate_364de8283b8229cca6a85dc7afa2f8cb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div id=\"profilPresent\">
            <h2>Profil</h2>
            ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_orders", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                        <button class=\"sbutton1\">Voir mes commandes</button>
                    </a>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edituser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">
                        <button class=\"sbutton2\">Modifier mes informations</button>
                    </a>
                    <div>
                        <p><span>Pseudo :</span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "pseudo", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        <p><span>Nom :</span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "lastName", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                        <p><span>Prénom :</span>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "firstName", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                        <p><span>E-mail :</span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                        <p><span>Mot de passe :</span>********</p>
                        <p><span>Adresse</span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25), "adress", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                        <p><span>Ville</span>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "city", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                        <p><span>Code Postal</span>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "postalCode", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                        <p><span>Téléphone</span> +33 ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28), "phone", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                        <p><span>Date d'anniversaire</span>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "birthdayDate", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <h3>Mes bières favorites</h3>
                <div class=\"flex col-2 div100\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["beers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 35
                echo "                    ";
                if (twig_in_filter($context["beer"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "favoris", [], "any", false, false, false, 35))) {
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
        return array (  185 => 63,  181 => 61,  175 => 60,  167 => 55,  161 => 52,  155 => 49,  149 => 46,  142 => 42,  138 => 41,  131 => 37,  128 => 36,  125 => 35,  121 => 34,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  73 => 16,  67 => 13,  61 => 10,  57 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/profil/index.html.twig");
    }
}
