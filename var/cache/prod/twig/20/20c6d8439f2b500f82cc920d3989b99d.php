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

/* language/index.html.twig */
class __TwigTemplate_bf7c502c8a77422f82ba98cc785a8d9e extends Template
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
        echo "<div class=\"pAbsolute right col-4\">
    <div class=\"flex pRelative col-0 right3\">        
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <div>
            <a href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
                <button class=\"helloButton\">Hello ";
            // line 6
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "pseudo", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "pseudo", [], "any", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "firstName", [], "any", false, false, false, 6))), "html", null, true);
            echo "</button>
            </a>
        </div>
    ";
        } else {
            // line 10
            echo "       <div class=\"flex pAbsolute col-2\">
            <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                <img class=\"homeImg login3\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
            echo "\" alt=\"\" title=\"connexion\">
                <button class=\"hiddenInput\">Mon compte</button>
            </a>
        </div>
        <div class=\"flex pAbsolute col-2\">
            <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                <img class=\"homeImg register2\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inscription.png"), "html", null, true);
            echo "\" alt=\"\" title=\"Inscription\">
                <button class=\"hiddenInput\">Inscription</button>
            </a>
        </div>
    ";
        }
        // line 23
        echo "    </div> 
    <div class=\"pAbsolute right col-80 flex zI5 column\"> 
        <p class=\"padding\">
            <a href=\"#\">FR
                <img class=\"fr\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fr.jpg"), "html", null, true);
        echo "\" alt=\"drapeau français\">
            </a>
        </p>
        <p class=\"space\">|</p>  
         <p> 
            <ul>
                <li class=\"uk\">
                    <p class=\"padding\">
                        <a href=\"#\" class=\"lT zI4\">EN 
                            <img class=\"fr\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uk.jpg"), "html", null, true);
        echo "\" alt=\"drapeau royaume-uni\">
                        </a>
                    </p> 
                    <ul id=\"hiddenEnglish\" class=\"pAbsolute right vHidden\">
                        <li class=\"uk\">
                           <span>
                             <img class=\"cSoon\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cSoon.jpg"), "html", null, true);
        echo "\" alt=\"Image arrive bientot\">
                            </span>
                        </li>
                    </ul>
                </li>
            </ul>
        </p> 
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "language/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  102 => 36,  90 => 27,  84 => 23,  76 => 18,  72 => 17,  64 => 12,  60 => 11,  57 => 10,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "language/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/language/index.html.twig");
    }
}
