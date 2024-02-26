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

/* menu/index.html.twig */
class __TwigTemplate_5d1a81caf1ac24ae80d29a05d208b14d extends Template
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
        echo "<ul>
    <li class=\"menuOpen2\">
        <img id=\"menuImg\" class=\"zI5 pAbsolute vHidden\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/menu.png"), "html", null, true);
        echo "\" alt=\"\">
        <div id=\"menu\" class=\"pAbsolute zI6 col-0 hiddenMenu2\">
            <ul class=\"flex jcSpace text-center\">
                <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&arrow=down\">Accueil</a></li>
                <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brasserie");
        echo "\">La Brasserie</a></li>
                <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_beer");
        echo "\">Nos Bières</a></li>
                ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer");
            echo "\">Gestion bières</a></li>
                ";
        } else {
            // line 12
            echo "                <li class=\"pRelative menuOpen\"><span id=\"actu\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "?animation=non&id=#actuality\">Actualités</a></span>
                    <ul class=\"hiddenMenu pAbsolute vHidden\">
                        <li class=\"hoverStyle\"><a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "?animation=non&id=#tendances\">Tendances</a></li>
                        <li class=\"hoverStyle\"><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "?animation=non&id=#creations\">Créations</a></li>
                        <li class=\"hoverStyle\"><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "?animation=non&id=#projets\">Projets</a></li>
                        <li class=\"hoverStyle\"><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "?animation=non&id=#pressRessource\">Press<span class=\"opaq\">_</span>Ressource</a></li>
                        <li class=\"hoverStyle\"><a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "?animation=non&id=#gallerie\">Gallerie</a></li>
                    </ul>
                </li>
                ";
        }
        // line 22
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order");
            echo "\">Gestion commandes</a></li>
                ";
        } else {
            // line 25
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_engage");
            echo "\">Engagements</a></li>
                ";
        }
        // line 27
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                    <li class=\"menuOpen\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\"></a></li>
                ";
        } else {
            // line 30
            echo "                    <li class=\"menuOpen\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\">Boutique</a></li>
                    <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            echo "\">
                        <img id=\"panier\" class=\"panier\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pack.png"), "html", null, true);
            echo "\" alt=\"\" title=\"commande en cours\">
                    </a>
                ";
        }
        // line 35
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                    <li class=\"collect\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact");
            echo "\">Contacts reçus</a></li>
                ";
        } else {
            // line 38
            echo "                    <li class=\"collect\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            echo "\">Contact</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 38,  138 => 36,  135 => 35,  129 => 32,  125 => 31,  120 => 30,  114 => 28,  111 => 27,  105 => 25,  99 => 23,  96 => 22,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  67 => 12,  61 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/menu/index.html.twig");
    }
}
