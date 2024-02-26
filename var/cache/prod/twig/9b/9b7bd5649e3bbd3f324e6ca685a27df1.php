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

/* default/success.html.twig */
class __TwigTemplate_dc4e0f3f7a94d7e58a3fd859db40cce1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"container\">
            <div id=\"successShop\" class=\"text-center\">
                <h2>Commande validée!! vous pouvez suivre le statut de la commande sur votre profil.</h2>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  52 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/success.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/default/success.html.twig");
    }
}
