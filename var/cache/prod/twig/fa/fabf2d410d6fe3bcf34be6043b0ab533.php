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

/* engage/index.html.twig */
class __TwigTemplate_d7d39b35db69cf9280d9766854c78a7e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "engage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <div class=\"container\">
        <div id=\"engagePresent\">
            <h2>Nos Engagements</h2>
            <div>
                <h4>La Canette</h4>
                <div class=\"flex\">
                    <div class=\"col-0\">   
                        <div>
                            <p>Contrairement aux idées reçues, le verre, souvent plébiscité face au plastique, n’est pas la solution la plus écologique s’il ne provient pas du recyclage.</p>
                            <p>Des chercheurs de l’université de Southampton ont ainsi démontré que la canette en aluminium dépasse largement ses concurrents et qu’étonnamment, le plastique n’est pas si mal placé. D’après leur étude publiée en décembre 2020, pour des contenants pressurisés, l’aluminium est plus écologique que le plastique et encore plus que le verre.</p>
                        </div>                    
                        <div>
                            <p>Le mauvais score du verre s’explique notamment par l’énergie dépensée pour le produire. Des températures très élevées sont nécessaires, jusqu’à 1 500 degrés, contre environ 750 degrés pour l’aluminium.</p>
                        </div>
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/canette_sauvage.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div>
                    <div class=\"flex col-0\">
                        <h5>ELLES SONT 100% RECYCLABLES</h5>
                        <div>
                            <img class=\"pImg\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/recycle.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-80\">
                        <div>
                            <p>Qu’elles soient faites d’acier ou d’aluminium, les canettes présentent en effet la particularité d’être intégralement valorisables.</p>
                            <p>Plus étonnant : elles le sont indéfiniment, puisque les divers traitements subis n’affectent jamais leurs qualités initiales. </p>
                        </div>
                        <div>
                            <p>Par ailleurs, le recyclage d’une canette permet d’économiser la majeure partie de l’énergie consommée pour la fabriquer, de l’extraction du minerai jusqu’au transport (une tonne d’aluminium recyclé permet ainsi d’éviter l’usage d’une tonne de pétrole brut). </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class=\"flex col-0\">
                        <h5>ELLES PEUVENT DEVENIR DES VELOS</h5>
                        <div>
                            <img class=\"pImg\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/alurecyclage.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-80\">
                        <div>
                            <p>Mais pas uniquement. Avions, aérosols, pièces automobiles, pièces de monnaie, appareils électroménagers, trottinettes : le recyclage des canettes usagées permet de fabriquer des centaines de produits différents. </p>
                            <p>Triés à la source, puis collectés par des entreprises spécialisées – comme Easyrecyclage – ces déchets sont ensuite séparés en deux flux.</p>
                        </div>
                        <div>
                            <p>Les canettes en aluminium d’une part, qui sont broyées, fondues et compactées en balles, et les canettes en acier d’autre part, qui sont expédiées vers des aciéries pour devenir des bobines, des barres ou des fils.</p> 
                            <p>Avant d’être réutilisées pour réintégrer votre quotidien sous une nouvelle forme !</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>                    
                <h4>Le Carton d'emballage</h4>
                <div class=\"col-0 flex\">
                    <div class=\"col-80\">
                        <div>
                            <p>Le carton est l’un des emballages écologiques qui a le moins d’impact sur l’environnement. En effet, sa fabrication ne nécessite pas de pétrole, contrairement à la production de plastique. </p>
                            <p>L’emballage plastique est encore massivement utilisé dans de nombreux secteurs et notamment pour les denrées alimentaires. Le carton est alors devenu une alternative pour les entreprises qui souhaitent utiliser des packagings écologiques.</p>
                        </div>
                        <div>
                            <p>En optimisant la quantité de matière utilisée lors de sa production, l’emballage en carton écologique permet de réduire son empreinte environnementale. Près de 90% d’eau en moins et 50% d’électricité en moins sont nécessaires pour la fabrication d’un packaging écologique en carton.</p>
                        </div>
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carton1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-0\">
                <div class=\"flex col-0\">
                    <h4>Les Transporteurs</h4>
                    <div>
                        <img src=\"\" alt=\"\">
                    </div>
                </div>
                <div>
                    <div class=\"flex col-0\">
                        <h5>Colis Privé</h5>
                        <div>
                            <img class=\"pImg\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/colis_prive.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-80\">
                        <div>
                            <p>L’entreprise a signé des protocoles nationaux avec les constructeurs Nissan et Fiat qui disposent de VUL électriques (Véhicule Utilitaire Léger) et de GNV (Gaz Naturel pour Véhicule). </p>
                            <p>Les véhicules émettent moins de CO2, moins de Nox et de particules fines que les véhicules thermiques traditionnels.</p>
                        </div>
                        <div>
                            <p>Conformément à l’obligation d’Information CO2 de ses clients chargeurs Colis Privé mesure depuis 2016 les émissions de CO2 de ses livraisons.</p>
                        </div>
                    </div>            
                </div>
                <div>
                    <div class=\"flex col-0\">
                        <h5>Mondial Relay</h5>
                        <div>
                            <img class=\"pImg\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mondial_relay.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-80\">
                        <div>
                            <p>Les transporteurs roulent au gaz naturel.</p>
                            <p>Un mode de livraison optimisé limitant les émissions de CO2 grâce à sa possibilité de livrer simultanément plusieurs dizaines de colis en un point.</p>
                        </div>
                        <div>
                            <p>Accueil de ruches, avec plus de 120 000 abeilles, maillon essentielles de la biodiversité.</p>
                        </div>
                    </div>              
                </div>
            </div>
            <div>
                <h4>Le Houblon</h4>
                <div class=\"flex\">
                    <div class=\"col-2\">
                        <div>          
                            <p>Une houblonnière bio d’un hectare, produit à Allaire (Morbihan), production française, 100% bio et sans additifs.</p>
                        </div>
                        <div>
                            <p>La récolte du houblon et le tri sont effectués manuellement puis les cônes sont séchés à basse température par déshydratation pour préserver au maximum les arômes.</p>
                        </div>
                        <div>
                            <p>le conditionnement est fait en sachet sous-vide de 100g, ils sont stockés au froid (-18°C) dans l’attente de leur expédition.</p>
                        </div>
                    </div>
                    <div class=\"col-3\">
                        <img class=\"pImg2\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/houblon1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "engage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 133,  167 => 104,  147 => 87,  129 => 72,  98 => 44,  78 => 27,  68 => 20,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "engage/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/engage/index.html.twig");
    }
}
