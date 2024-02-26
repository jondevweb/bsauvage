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

/* security/login.html.twig */
class __TwigTemplate_ca4f8f61e22afae8a8b39d3099e6856a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div id=\"brasseriePresent\">
            <h2>Connectez-vous</h2> 
            <form id=\"login\" method=\"post\" class=\"text-center flex\">
                ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "                    <div class=\"alert alert-danger\">
                        <p>Identifiant ou mot de passe invalide</p>
                    </div>
                ";
        }
        // line 13
        echo "
                ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                    <div class=\"mb-3\">
                        <p>Vous êtes connecté en tant que ";
            // line 16
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "pseudo", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "pseudo", [], "any", false, false, false, 16)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "firstName", [], "any", false, false, false, 16))), "html", null, true);
            echo "!</p>
                        <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><p>Déconnexion</p></a>
                    </div>
                ";
        }
        // line 20
        echo "
                <label for=\"inputEmail\">Adresse Email</label>
                <input type=\"email\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                ";
        // line 38
        echo "                <input type=\"submit\" class=\"submit\" value=\"se connecter\">
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  93 => 26,  86 => 22,  82 => 20,  76 => 17,  72 => 16,  69 => 15,  67 => 14,  64 => 13,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/security/login.html.twig");
    }
}
