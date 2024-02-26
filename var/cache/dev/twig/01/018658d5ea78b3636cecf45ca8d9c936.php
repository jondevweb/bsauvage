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
class __TwigTemplate_c4dcf139f4a20229c536ed3460600671 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  156 => 40,  150 => 38,  144 => 36,  141 => 35,  135 => 32,  131 => 31,  126 => 30,  120 => 28,  117 => 27,  111 => 25,  105 => 23,  102 => 22,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  73 => 12,  67 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <li class=\"menuOpen2\">
        <img id=\"menuImg\" class=\"zI5 pAbsolute vHidden\" src=\"{{ asset('img/menu.png') }}\" alt=\"\">
        <div id=\"menu\" class=\"pAbsolute zI6 col-0 hiddenMenu2\">
            <ul class=\"flex jcSpace text-center\">
                <li><a href=\"{{ path('app_home') }}?animation=non&arrow=down\">Accueil</a></li>
                <li><a href=\"{{ path('app_brasserie') }}\">La Brasserie</a></li>
                <li><a href=\"{{ path('app_beer') }}\">Nos Bières</a></li>
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li><a href=\"{{ path('app_admin_beer') }}\">Gestion bières</a></li>
                {% else %}
                <li class=\"pRelative menuOpen\"><span id=\"actu\"><a href=\"{{ path('app_home') }}?animation=non&id=#actuality\">Actualités</a></span>
                    <ul class=\"hiddenMenu pAbsolute vHidden\">
                        <li class=\"hoverStyle\"><a href=\"{{ path('app_home') }}?animation=non&id=#tendances\">Tendances</a></li>
                        <li class=\"hoverStyle\"><a href=\"{{ path('app_home') }}?animation=non&id=#creations\">Créations</a></li>
                        <li class=\"hoverStyle\"><a href=\"{{ path('app_home') }}?animation=non&id=#projets\">Projets</a></li>
                        <li class=\"hoverStyle\"><a href=\"{{ path('app_home') }}?animation=non&id=#pressRessource\">Press<span class=\"opaq\">_</span>Ressource</a></li>
                        <li class=\"hoverStyle\"><a href=\"{{ path('app_home') }}?animation=non&id=#gallerie\">Gallerie</a></li>
                    </ul>
                </li>
                {% endif %}
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li><a href=\"{{ path('app_admin_order') }}\">Gestion commandes</a></li>
                {% else %}
                    <li><a href=\"{{ path('app_engage') }}\">Engagements</a></li>
                {% endif %}
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li class=\"menuOpen\"><a href=\"{{ path('app_shop') }}\"></a></li>
                {% else %}
                    <li class=\"menuOpen\"><a href=\"{{ path('app_shop') }}\">Boutique</a></li>
                    <a href=\"{{ path('app_shop') }}\">
                        <img id=\"panier\" class=\"panier\" src=\"{{ asset('img/pack.png') }}\" alt=\"\" title=\"commande en cours\">
                    </a>
                {% endif %}
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li class=\"collect\"><a href=\"{{ path('app_admin_contact') }}\">Contacts reçus</a></li>
                {% else %}
                    <li class=\"collect\"><a href=\"{{ path('app_contact') }}\">Contact</a></li>
                {% endif %}
            </ul>
        </div>
    </li>
</ul>", "menu/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/menu/index.html.twig");
    }
}
