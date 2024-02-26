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

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_2e67de28b051c2d5eafe4d1a9e51b3ef extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error500.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <div class=\"container\">
        <div id=\"errorShop\"  class=\"text-center\">
            <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "?animation=non&arrow=down\">
                <button class=\"sbutton3\">Retour accueil</button>
            </a>
            <h2>Une erreur est survenue, désolé!</h2>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error500.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/bundles/TwigBundle/Exception/error500.html.twig");
    }
}
