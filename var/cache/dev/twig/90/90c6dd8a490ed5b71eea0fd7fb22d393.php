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
class __TwigTemplate_1edb72d1ab61c0b21a4dcfdd9a4b05ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  164 => 63,  136 => 38,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\" class=\"zI1 pAbsolute col-0\">
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
                    <a href=\"{{ path('app_home') }}?animation=non&arrow=down\"><p>Accueil</p></a>
                    <a href=\"{{ path('app_register')}}\"><p>Inscription</p></a>
                    <a href=\"{{ path('app_login')}}\"><p>Connexion</p></a>
                    <a href=\"{{ path('app_contact') }}\"><p>Contact</p></a>
                    <a href=\"{{ path('app_shop') }}\"><p>Boutique</p></a>
                    <a href=\"{{ path('app_beer') }}\"><p>Nos Bières</p></a>
                    <a href=\"{{ path('app_engage') }}\"><p>Nos Engagement</p></a>
                    <a href=\"{{ path('app_brasserie') }}\"><p>La Brasserie</p></a>
                    <a href=\"{{ path('app_home') }}?animation=non&id=#tendances\"><p>Tendances / Evenements</p></a>
                    <a href=\"{{ path('app_home') }}?animation=non&id=#creations\"><p>Créations</p></a>
                    <a href=\"{{ path('app_home') }}?animation=non&id=#projets\"><p>Projets</p></a>
                    <a href=\"{{ path('app_home') }}?animation=non&id=#pressRessource\"><p>Articles de presse</p></a>
                    <a href=\"{{ path('app_home') }}?animation=non&id=#gallerie\"><p>Gallerie</p></a>
                </div>
                <h4>Les classiques</h4>
                <div class=\"p15\">
                    <a href=\"{{ path('app_beer') }}\"><p>Tutti Va Bene</p></a>
                    <a href=\"{{ path('app_beer') }}\"><p>Eh Boboy</p></a>
                    <a href=\"{{ path('app_beer') }}\"><p>5 à 7</p></a>
                    <a href=\"{{ path('app_beer') }}\"><p>Jenga</p></a>
                    <a href=\"{{ path('app_beer') }}\"><p>4507</p></a>
                </div>
            </div>
            <div class=\"col-3 text-center column\">
                <img id=\"logo\" src=\"{{ asset('img/logobs.jpg') }}\" alt=\"logo brasserie sauvage septembre 2022\">
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
                <a href=\"{{ path('app_mentions') }}\">Mentions Légales & Politique de confidentialité</a> / <a href=\"{{ path('app_contact') }}\">Renseignements & contact</a>
            </p>
        </div>
    </div>
</div>", "footer/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/footer/index.html.twig");
    }
}
