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

/* bannerBeer/index.html.twig */
class __TwigTemplate_01cc3da0b39585fe9407b1aa85a1cd9e extends Template
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
        echo "    <canvas id=\"canvas\" class=\"zI1 col-0 pAbsolute\"><canvas>
</div>
<div id=\"beerFoam\" class=\"zI2 pAbsolute\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "       <div class=\"foam";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " pAbsolute\" style=\"top: ";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["topSize"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["i"] - 1)] ?? null) : null), "html", null, true);
            echo "px; left: ";
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["leftSize"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["i"] - 1)] ?? null) : null), "html", null, true);
            echo "%\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(22, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "       <div id=\"foam";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" style=\"top: ";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["topSize"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["i"] - 1)] ?? null) : null), "html", null, true);
            echo "px; left: ";
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["leftSize"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["i"] - 1)] ?? null) : null), "html", null, true);
            echo "%\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

<div id=\"beerBubble\" class=\"zI1 pAbsolute col-0\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "        <div class=\"bubble pAbsolute\" style=\"left: ";
            echo twig_escape_filter($this->env, ($context["i"] * 2.3), "html", null, true);
            echo "%; animation-delay: ";
            echo twig_escape_filter($this->env, twig_random($this->env, 500, 1500), "html", null, true);
            echo "ms; animation-duration: ";
            echo twig_escape_filter($this->env, twig_random($this->env, 500, 1500), "html", null, true);
            echo "ms;\"></div>
        <div class=\"bubble2 pAbsolute\" style=\"left: ";
            // line 15
            echo twig_escape_filter($this->env, ($context["i"] * 2.3), "html", null, true);
            echo "%; animation-delay: 0ms; animation-duration: ";
            echo twig_escape_filter($this->env, twig_random($this->env, 500, 9500), "html", null, true);
            echo "ms;\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
<div id=\"glass\" class=\"zI1 pRelative col-0\">

</div>

<div class=\"container\">
    <div id=\"hello\" class=\"zI2 pAbsolute\">
        <div class=\"flex text-center\">
            <div class=\"col-4\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/max.jpg"), "html", null, true);
        echo "\" alt=\"photo de Maxime\">
            </div>
            <div id=\"present\" class=\"col-2\">
                <h3>Qui se cache derrière la brasserie <span>SAUVAGE</span> ?</h3>
                <div>
                    <p class=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["word"] ?? null), "html", null, true);
        echo " ml\">🍻 Max</p>
                    <p class=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["arrow"] ?? null), "html", null, true);
        echo "\">Le brasseur expérimenté du duo</p>
                    <p>Après 3 ans comme brasseur chez Glutenberg, il a toutes les compétences pour te créer des pépites !</p>
                </div>
                <div>
                    <p class=\"ml\">🌿 Lucie</p>
                    <p>l'épicurienne du duo</p>
                    <p>Toujours en quête de nouvelles expériences et nouvelles saveurs.</p>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lucie.jpg"), "html", null, true);
        echo "\" alt=\"photo de Lucie\">
            </div>
        </div>
    </div>
</div>
<div id=\"fTop2\" class=\"text-center\">
    <a href=\"#actuality\">
        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fleche_haut.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
</div>
<div class=\"pRelative downActu\">";
    }

    public function getTemplateName()
    {
        return "bannerBeer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  141 => 42,  128 => 32,  124 => 31,  116 => 26,  105 => 17,  95 => 15,  86 => 14,  82 => 13,  77 => 10,  64 => 8,  59 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bannerBeer/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/bannerBeer/index.html.twig");
    }
}
