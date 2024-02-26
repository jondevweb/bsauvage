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

/* footer/index.html.twig */
class __TwigTemplate_633a7211a8d58878bf71fe0fc09b4cd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"footer\" class=\"zI1 pAbsolute col-0\">
    <div class=\"container\">
        <div class=\"flex jcBetween\">   
            <div class=\"col-3\">
                <p>3 Rue Jacqueline Auriol</p>
                <p>35136 Saint-Jacques-de-la-Lande</p>
                <p>FRANCE</p>
                <p>Adresse e-mail :</p>
                <a href=\"mailto:allo@brasseriesauvage.co\" target=\"blank\"><p>allo@brasseriesauvage.co</p></a>
            </div>
            <div class=\"col-3 text-center zI1\">
                <h4>Plan de site</h4>
                <div class=\"p15\">
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&arrow=down\"><p>Accueil</p></a>
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><p>Inscription</p></a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><p>Connexion</p></a>
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"><p>Contact</p></a>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        echo "\"><p>Boutique</p></a>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\"><p>Nos Bières</p></a>
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_engage");
        echo "\"><p>Nos Engagement</p></a>
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brasserie");
        echo "\"><p>La Brasserie</p></a>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&id=#tendances\"><p>Tendances / Evenements</p></a>
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&id=#creations\"><p>Créations</p></a>
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&id=#projets\"><p>Projets</p></a>
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&id=#pressRessource\"><p>Articles de presse</p></a>
                    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&id=#gallerie\"><p>Gallerie</p></a>
                </div>
                <h4>Les classiques</h4>
                <div class=\"p15\">
                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\"><p>Tutti Va Bene</p></a>
                    <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\"><p>Eh Boboy</p></a>
                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\"><p>5 à 7</p></a>
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\"><p>Jenga</p></a>
                    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\"><p>4507</p></a>
                </div>
            </div>
            <div class=\"col-3 text-center column\">
                <img id=\"logo\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logobs.jpg"), "html", null, true);
        echo "\" alt=\"logo brasserie sauvage septembre 2022\">
                <h2 id=\"h1\">Brasserie <span>Sauvage</span>!</h2>
            </div>
        </div>
        <div class=\"flex pAbsolute footop col-0 jcBetween\">
            <div class=\"col-3 text-center\">
                <p>L’abus d’alcool est dangereux pour la santé. À consommer avec modération.</p>
            </div> 
            <div id=\"sNetwork\" class=\"col-3 text-center\">
                <a target=\"blank\" href=\"https://www.instagram.com/brasserie_sauvage/?hl=fr\">
                    <i class=\"fa-brands fa-instagram\"></i>
                </a>
                <a target=\"blank\" href=\"https://www.facebook.com/sauvagebrasserie\">
                    <i class=\"fa-brands fa-facebook\"></i>
                </a>
                <a target=\"blank\" href=\"mailto:allo@brasseriesauvage.co\">
                    <i class=\"fa-regular fa-envelope\"></i>
                </a>
                <a target=\"blank\" href=\"https://soundcloud.com/brasserie_sauvage\">
                    <i class=\"fa-brands fa-soundcloud\"></i>
                </a>
            </div>
        </div>
        <div  class=\"col-80 text-center mauto\">
            <p>
                <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions");
        echo "\">Mentions Légales & Politique de confidentialité</a> / <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Renseignements & contact</a>
            </p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "footer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  130 => 38,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/footer/index.html.twig");
    }
}
