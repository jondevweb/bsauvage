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

/* admin/beer/edit_delete_beer_800.html.twig */
class __TwigTemplate_b955eaad685c2b87f6ae2dae2cc3b626 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/edit_delete_beer_800.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/edit_delete_beer_800.html.twig"));

        // line 1
        echo "</tr>
    <tr class=\"col-0\">
        <td colspan=\"7\" class=\"col-0 modHide\">
            <div class=\"modal2 text-center pAbsolute zI6\" id=\"modal";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
                <p>Voulez-vous vraiment supprimer ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " ?</p>
                <a id=\"okB";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_beer_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\">
                    <p>Oui</p>
                </a>
                <a id=\"noB";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["beer"]) || array_key_exists("beer", $context) ? $context["beer"] : (function () { throw new RuntimeError('Variable "beer" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
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
        return "admin/beer/edit_delete_beer_800.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</tr>
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
    </tr>", "admin/beer/edit_delete_beer_800.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/edit_delete_beer_800.html.twig");
    }
}
