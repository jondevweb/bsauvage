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

/* canette/canette.html.twig */
class __TwigTemplate_969fc54fa3dc14dec1a935fac0e8d839 extends Template
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
        echo "<div class=\"col-0 text-center\">
    <img id=\"eclat\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/eclat.png"), "html", null, true);
        echo "\" class=\"zI5 pAbsolute\" alt=\"éclat explosion canette\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "            <img id=\"canette";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/canette" . $context["i"]) . ".png")), "html", null, true);
            echo "\" class=\"zI4 pAbsolute\" alt=\"canette de présentation du produit";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "canette/canette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "canette/canette.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/canette/canette.html.twig");
    }
}
