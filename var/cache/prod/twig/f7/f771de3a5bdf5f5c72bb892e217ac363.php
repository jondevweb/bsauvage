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

/* admin/contact/info_projet.html.twig */
class __TwigTemplate_5f870b3087cc24e674a37eccac9fd7c9 extends Template
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
        echo "<tr>
    <td class=\"col-80\">
        <div class=\"text-center\">
            <p>
                <span>Nom :</span> 
                    ";
        // line 6
        ((($context["prs"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true))) : (print ("")));
        echo "
            </p>
        </div>
        <p>
            <span>Contacter le bar ";
        // line 10
        ((($context["prs"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true))) : (print ("")));
        echo " à </span>
                ";
        // line 11
        ((($context["prs"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "city", [], "any", false, false, false, 11), "html", null, true))) : (print ("")));
        echo " pour demande de fut!
        </p>
        <p>
            <span>Message :</span>
            <p>
                <a target=\"blank\" href=\"mailto:";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "\">";
        ((($context["prs"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pr"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "</a>
            </p>
        </p>
    </td>";
    }

    public function getTemplateName()
    {
        return "admin/contact/info_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  55 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/contact/info_projet.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/info_projet.html.twig");
    }
}
