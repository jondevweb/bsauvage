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

/* admin/beer/edit_delete_beer.html.twig */
class __TwigTemplate_f682b56653b9651a2970d54e108e33de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/edit_delete_beer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/edit_delete_beer.html.twig"));

        // line 1
        echo "    <td class=\"pour5 text-center\">
        <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_modif", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">
            <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/modif.png"), "html", null, true);
        echo "\" alt=\"\">
            <p>modifier</p>
        </a>
        <a id=\"deleteBeer";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" href=\"\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
            <p>supprimer</p>
        </a> 
    </td>
</tr>
<tr class=\"col-0\">
    <td colspan=\"7\" class=\"col-0 modHide\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modal";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
            <p>Voulez-vous vraiment supprimer ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo " ?</p>
            <a id=\"okB";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
                <p>Oui</p>
            </a>
            <a id=\"noB";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                <p>Non</p>
            </a>
        </div>
    </td>
</tr>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/beer/edit_delete_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  78 => 16,  74 => 15,  70 => 14,  60 => 7,  56 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <td class=\"pour5 text-center\">
        <a href=\"{{ path('app_admin_beer_modif', {id: beer.id}) }}\">
            <img src=\"{{ asset('img/modif.png') }}\" alt=\"\">
            <p>modifier</p>
        </a>
        <a id=\"deleteBeer{{beer.id}}\" href=\"\">
            <img src=\"{{ asset('img/sup.png') }}\" alt=\"\">
            <p>supprimer</p>
        </a> 
    </td>
</tr>
<tr class=\"col-0\">
    <td colspan=\"7\" class=\"col-0 modHide\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modal{{beer.id}}\">
            <p>Voulez-vous vraiment supprimer {{ beer.name }} ?</p>
            <a id=\"okB{{beer.id}}\" href=\"{{ path('app_admin_beer_delete', {id: beer.id}) }}\">
                <p>Oui</p>
            </a>
            <a id=\"noB{{beer.id}}\">
                <p>Non</p>
            </a>
        </div>
    </td>
</tr>", "admin/beer/edit_delete_beer.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/edit_delete_beer.html.twig");
    }
}
