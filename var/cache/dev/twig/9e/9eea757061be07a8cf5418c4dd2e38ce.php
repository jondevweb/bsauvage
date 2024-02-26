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
class __TwigTemplate_6e0963de57d9aad145e3648df510d186 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "language/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "language/index.html.twig"));

        // line 1
        echo "<div class=\"pAbsolute right col-4\">
    <div class=\"flex pRelative col-0 right3\">        
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <div>
            <a href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
                <button class=\"helloButton\">Hello ";
            // line 6
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "pseudo", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "pseudo", [], "any", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "firstName", [], "any", false, false, false, 6))), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  117 => 42,  108 => 36,  96 => 27,  90 => 23,  82 => 18,  78 => 17,  70 => 12,  66 => 11,  63 => 10,  56 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pAbsolute right col-4\">
    <div class=\"flex pRelative col-0 right3\">        
    {% if app.user %}
        <div>
            <a href=\"{{ path('app_profil')}}\">
                <button class=\"helloButton\">Hello {{ app.user.pseudo ? app.user.pseudo : app.user.firstName }}</button>
            </a>
        </div>
    {% else %}
       <div class=\"flex pAbsolute col-2\">
            <a href=\"{{ path('app_login')}}\">
                <img class=\"homeImg login3\" src=\"{{ asset('img/profil.png') }}\" alt=\"\" title=\"connexion\">
                <button class=\"hiddenInput\">Mon compte</button>
            </a>
        </div>
        <div class=\"flex pAbsolute col-2\">
            <a href=\"{{ path('app_register')}}\">
                <img class=\"homeImg register2\" src=\"{{ asset('img/inscription.png') }}\" alt=\"\" title=\"Inscription\">
                <button class=\"hiddenInput\">Inscription</button>
            </a>
        </div>
    {% endif %}
    </div> 
    <div class=\"pAbsolute right col-80 flex zI5 column\"> 
        <p class=\"padding\">
            <a href=\"#\">FR
                <img class=\"fr\" src=\"{{ asset('img/fr.jpg') }}\" alt=\"drapeau français\">
            </a>
        </p>
        <p class=\"space\">|</p>  
         <p> 
            <ul>
                <li class=\"uk\">
                    <p class=\"padding\">
                        <a href=\"#\" class=\"lT zI4\">EN 
                            <img class=\"fr\" src=\"{{ asset('img/uk.jpg') }}\" alt=\"drapeau royaume-uni\">
                        </a>
                    </p> 
                    <ul id=\"hiddenEnglish\" class=\"pAbsolute right vHidden\">
                        <li class=\"uk\">
                           <span>
                             <img class=\"cSoon\" src=\"{{ asset('img/cSoon.jpg') }}\" alt=\"Image arrive bientot\">
                            </span>
                        </li>
                    </ul>
                </li>
            </ul>
        </p> 
    </div>
</div>", "language/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/language/index.html.twig");
    }
}
