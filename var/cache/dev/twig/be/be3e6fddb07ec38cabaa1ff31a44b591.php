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

/* admin/contact/modif_contact.html.twig */
class __TwigTemplate_7b94a927f4364563a0978cbc64afa828 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/modif_contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/modif_contact.html.twig"));

        // line 1
        echo "    <td class=\"modifContact\">
        <div>
            <p>
                <span>Date du message : </pan>
                <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 5, $this->source); })()), "date", [], "any", false, false, false, 5), "d/m/Y"), "html", null, true);
        echo "</p>
            </p>
        </div>
        <div class=\"flex\">
            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 9, $this->source); })()), "readding", [], "any", false, false, false, 9) == 0)) {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "check" => 1]), "html", null, true);
            echo "\">
                    <img class=\"case\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "check" => 0]), "html", null, true);
            echo "\">
                    <img class=\"caseCoche\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case_coche.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        }
        // line 18
        echo "            <p>Lu</p>
        </div>
        <div class=\"flex\">
            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 21, $this->source); })()), "answer", [], "any", false, false, false, 21) == 0)) {
            // line 22
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "check" => 3]), "html", null, true);
            echo "\">
                    <img class=\"case\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        } else {
            // line 26
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_modif_check", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "check" => 2]), "html", null, true);
            echo "\">
                    <img class=\"caseCoche\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/case_coche.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>
            ";
        }
        // line 30
        echo "            <p>Répondu</p>
        </div>
        <a id=\"deleteContact";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\" href=\"\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sup.png"), "html", null, true);
        echo "\" alt=\"\">
        </a> 
    </td>
</tr>
<tr class=\"col-0\">
    <td colspan=\"2\" class=\"col-0 modHide\" id=\"supContact\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modalCt";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
            <p>Voulez-vous vraiment supprimer le message concernant \"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 40, $this->source); })()), "subject", [], "any", false, false, false, 40), "html", null, true);
        echo "\" de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo " ?</p>
            <a id=\"okct";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">
                <p>Oui</p>
            </a>
            <a id=\"noct";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
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
        return "admin/contact/modif_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  136 => 41,  130 => 40,  126 => 39,  117 => 33,  113 => 32,  109 => 30,  103 => 27,  98 => 26,  92 => 23,  87 => 22,  85 => 21,  80 => 18,  74 => 15,  69 => 14,  63 => 11,  58 => 10,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <td class=\"modifContact\">
        <div>
            <p>
                <span>Date du message : </pan>
                <p>{{ contact.date|date('d/m/Y') }}</p>
            </p>
        </div>
        <div class=\"flex\">
            {% if contact.readding == 0 %}
                <a href=\"{{ path('app_admin_contact_modif_check', {id: contact.id, check: 1}) }}\">
                    <img class=\"case\" src=\"{{ asset('img/case.png') }}\" alt=\"\">
                </a>
            {% else %}
                <a href=\"{{ path('app_admin_contact_modif_check', {id: contact.id, check: 0}) }}\">
                    <img class=\"caseCoche\" src=\"{{ asset('img/case_coche.png') }}\" alt=\"\">
                </a>
            {% endif %}
            <p>Lu</p>
        </div>
        <div class=\"flex\">
            {% if contact.answer == 0 %}
                <a href=\"{{ path('app_admin_contact_modif_check', {id: contact.id, check: 3}) }}\">
                    <img class=\"case\" src=\"{{ asset('img/case.png') }}\" alt=\"\">
                </a>
            {% else %}
                <a href=\"{{ path('app_admin_contact_modif_check', {id: contact.id, check: 2}) }}\">
                    <img class=\"caseCoche\" src=\"{{ asset('img/case_coche.png') }}\" alt=\"\">
                </a>
            {% endif %}
            <p>Répondu</p>
        </div>
        <a id=\"deleteContact{{contact.id}}\" href=\"\">
            <img src=\"{{ asset('img/sup.png') }}\" alt=\"\">
        </a> 
    </td>
</tr>
<tr class=\"col-0\">
    <td colspan=\"2\" class=\"col-0 modHide\" id=\"supContact\">
        <div class=\"modal2 text-center pAbsolute zI6\" id=\"modalCt{{contact.id}}\">
            <p>Voulez-vous vraiment supprimer le message concernant \"{{ contact.subject }}\" de {{ contact.name }} ?</p>
            <a id=\"okct{{contact.id}}\" href=\"{{ path('app_admin_contact_delete', {id: contact.id}) }}\">
                <p>Oui</p>
            </a>
            <a id=\"noct{{contact.id}}\">
                <p>Non</p>
            </a>
        </div>
    </td>
</tr>", "admin/contact/modif_contact.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/modif_contact.html.twig");
    }
}
