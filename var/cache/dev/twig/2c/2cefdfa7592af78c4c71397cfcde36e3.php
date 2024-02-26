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

/* button/button.html.twig */
class __TwigTemplate_158c8b730ac116a3b8e840a63de867ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "button/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "button/button.html.twig"));

        // line 1
        echo "<div id=\"button\" class=\"zI4 pAbsolute col-2 vHidden\">
    <div>
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        echo "\">
            <button class=\"button\">Boutique</button>
        </a>
    </div>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"col-2 text-center\">
            <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
                <button class=\"button\">Hello ";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "pseudo", [], "any", false, false, false, 10)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "pseudo", [], "any", false, false, false, 10)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstName", [], "any", false, false, false, 10))), "html", null, true);
            echo "</button>
            </a>
        </div>
    ";
        } else {
            // line 14
            echo "        <div class=\"pRelative col-2\">
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                <img class=\"login2\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
            echo "\" alt=\"\" title=\"connexion\">
                <button class=\"button\">Mon compte</button>
            </a>
            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                <img class=\"register2\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/inscription.png"), "html", null, true);
            echo "\" alt=\"\" title=\"Inscription\">
                <button class=\"button\">Inscription</button>
            </a>
        </div>
    ";
        }
        // line 25
        echo "</div>
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
        <div id=\"profilBan\" class=\"text-center\">
            <p>Hello ";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "pseudo", [], "any", false, false, false, 29)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "pseudo", [], "any", false, false, false, 29)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29))), "html", null, true);
            echo "</p>
        </div>
    </a>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "button/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 27,  98 => 26,  95 => 25,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  70 => 14,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"button\" class=\"zI4 pAbsolute col-2 vHidden\">
    <div>
        <a href=\"{{ path('app_shop')}}\">
            <button class=\"button\">Boutique</button>
        </a>
    </div>
    {% if app.user %}
        <div class=\"col-2 text-center\">
            <a href=\"{{ path('app_profil')}}\">
                <button class=\"button\">Hello {{ app.user.pseudo ? app.user.pseudo : app.user.firstName }}</button>
            </a>
        </div>
    {% else %}
        <div class=\"pRelative col-2\">
            <a href=\"{{ path('app_login')}}\">
                <img class=\"login2\" src=\"{{ asset('img/profil.png') }}\" alt=\"\" title=\"connexion\">
                <button class=\"button\">Mon compte</button>
            </a>
            <a href=\"{{ path('app_register')}}\">
                <img class=\"register2\" src=\"{{ asset('img/inscription.png') }}\" alt=\"\" title=\"Inscription\">
                <button class=\"button\">Inscription</button>
            </a>
        </div>
    {% endif %}
</div>
{% if app.user %}
    <a href=\"{{ path('app_profil')}}\">
        <div id=\"profilBan\" class=\"text-center\">
            <p>Hello {{ app.user.pseudo ? app.user.pseudo : app.user.firstName }}</p>
        </div>
    </a>
{% endif %}", "button/button.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/button/button.html.twig");
    }
}
