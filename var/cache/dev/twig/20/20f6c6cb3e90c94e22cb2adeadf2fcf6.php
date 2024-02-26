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
class __TwigTemplate_5ee34dd5e2e4b9c71b58dee6e1ea7c62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bannerBeer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bannerBeer/index.html.twig"));

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topSize"]) || array_key_exists("topSize", $context) ? $context["topSize"] : (function () { throw new RuntimeError('Variable "topSize" does not exist.', 5, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 5), "html", null, true);
            echo "px; left: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leftSize"]) || array_key_exists("leftSize", $context) ? $context["leftSize"] : (function () { throw new RuntimeError('Variable "leftSize" does not exist.', 5, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 5), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topSize"]) || array_key_exists("topSize", $context) ? $context["topSize"] : (function () { throw new RuntimeError('Variable "topSize" does not exist.', 8, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 8), "html", null, true);
            echo "px; left: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leftSize"]) || array_key_exists("leftSize", $context) ? $context["leftSize"] : (function () { throw new RuntimeError('Variable "leftSize" does not exist.', 8, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 8), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ml\">🍻 Max</p>
                    <p class=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["arrow"]) || array_key_exists("arrow", $context) ? $context["arrow"] : (function () { throw new RuntimeError('Variable "arrow" does not exist.', 32, $this->source); })()), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  157 => 49,  147 => 42,  134 => 32,  130 => 31,  122 => 26,  111 => 17,  101 => 15,  92 => 14,  88 => 13,  83 => 10,  70 => 8,  65 => 7,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <canvas id=\"canvas\" class=\"zI1 col-0 pAbsolute\"><canvas>
</div>
<div id=\"beerFoam\" class=\"zI2 pAbsolute\">
    {% for i in 1..21 %}
       <div class=\"foam{{i}} pAbsolute\" style=\"top: {{topSize[i - 1]}}px; left: {{leftSize[i - 1]}}%\"></div>
    {% endfor %}
    {% for i in 22..42 %}
       <div id=\"foam{{i}}\" style=\"top: {{topSize[i - 1]}}px; left: {{leftSize[i - 1]}}%\"></div>
    {% endfor %}
</div>

<div id=\"beerBubble\" class=\"zI1 pAbsolute col-0\">
    {% for i in 1..35 %}
        <div class=\"bubble pAbsolute\" style=\"left: {{i * 2.3}}%; animation-delay: {{random(500, 1500)}}ms; animation-duration: {{random(500, 1500)}}ms;\"></div>
        <div class=\"bubble2 pAbsolute\" style=\"left: {{i * 2.3}}%; animation-delay: 0ms; animation-duration: {{random(500, 9500)}}ms;\"></div>
    {% endfor %}
</div>
<div id=\"glass\" class=\"zI1 pRelative col-0\">

</div>

<div class=\"container\">
    <div id=\"hello\" class=\"zI2 pAbsolute\">
        <div class=\"flex text-center\">
            <div class=\"col-4\">
                <img src=\"{{ asset('img/max.jpg') }}\" alt=\"photo de Maxime\">
            </div>
            <div id=\"present\" class=\"col-2\">
                <h3>Qui se cache derrière la brasserie <span>SAUVAGE</span> ?</h3>
                <div>
                    <p class=\"{{ word }} ml\">🍻 Max</p>
                    <p class=\"{{ arrow }}\">Le brasseur expérimenté du duo</p>
                    <p>Après 3 ans comme brasseur chez Glutenberg, il a toutes les compétences pour te créer des pépites !</p>
                </div>
                <div>
                    <p class=\"ml\">🌿 Lucie</p>
                    <p>l'épicurienne du duo</p>
                    <p>Toujours en quête de nouvelles expériences et nouvelles saveurs.</p>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"{{ asset('img/lucie.jpg') }}\" alt=\"photo de Lucie\">
            </div>
        </div>
    </div>
</div>
<div id=\"fTop2\" class=\"text-center\">
    <a href=\"#actuality\">
        <img src=\"{{ asset('img/fleche_haut.png') }}\" alt=\"\">
    </a>
</div>
<div class=\"pRelative downActu\">", "bannerBeer/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/bannerBeer/index.html.twig");
    }
}
