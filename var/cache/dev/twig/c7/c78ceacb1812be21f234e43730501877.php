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

/* modal/alcoholWarning.html.twig */
class __TwigTemplate_0e262d3b60b81aefa4b47cda57f0414b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modal/alcoholWarning.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modal/alcoholWarning.html.twig"));

        // line 1
        echo "<div id=\"alcoholWarning\" class=\"zI6\">
    <div class=\"text-center\" id=\"modal\">
        <p>la vente d'alcool à des mineurs de moins de dix-huit ans est interdite!</p>
        <p>L’abus d’alcool est dangereux pour la santé. À consommer avec modération.</p>
        <p>Etes vous majeur?</p> 
        <div class=\"flex col-0 text-center\">
            <a id=\"ok\"><p>Oui</p></a>
            <a id=\"no\" href=\"https://www.google.fr\"><p>Non</p></a>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "modal/alcoholWarning.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"alcoholWarning\" class=\"zI6\">
    <div class=\"text-center\" id=\"modal\">
        <p>la vente d'alcool à des mineurs de moins de dix-huit ans est interdite!</p>
        <p>L’abus d’alcool est dangereux pour la santé. À consommer avec modération.</p>
        <p>Etes vous majeur?</p> 
        <div class=\"flex col-0 text-center\">
            <a id=\"ok\"><p>Oui</p></a>
            <a id=\"no\" href=\"https://www.google.fr\"><p>Non</p></a>
        </div>
    </div>
</div>", "modal/alcoholWarning.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/modal/alcoholWarning.html.twig");
    }
}
