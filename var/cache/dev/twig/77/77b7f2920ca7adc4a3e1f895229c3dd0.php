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
class __TwigTemplate_b706cbb76a0cd4f2b917374acbef3a50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "canette/canette.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "canette/canette.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  67 => 6,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-0 text-center\">
    <img id=\"eclat\" src=\"{{ asset('img/eclat.png') }}\" class=\"zI5 pAbsolute\" alt=\"éclat explosion canette\">
        {% for i in 1..4 %}
            <img id=\"canette{{ i }}\" src=\"{{ asset('img/canette' ~ i ~ '.png') }}\" class=\"zI4 pAbsolute\" alt=\"canette de présentation du produit{{ i }}\">           
        {% endfor %}
</div>", "canette/canette.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/canette/canette.html.twig");
    }
}
