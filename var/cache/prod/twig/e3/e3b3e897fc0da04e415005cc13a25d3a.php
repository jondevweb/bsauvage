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

/* admin/contact/info_contact.html.twig */
class __TwigTemplate_470e3bc77ba92f4309966eb1207e846d extends Template
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
        ((($context["contacts"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true))) : (print ("")));
        echo "
            </p>
            <p>
                <span>Prénom :</span> 
                    ";
        // line 10
        ((($context["contacts"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstName", [], "any", false, false, false, 10), "html", null, true))) : (print ("")));
        echo "
            </p>  
            <p>
                <span>E-mail :</span> 
                    <a target=\"blank\" href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "\">";
        ((($context["contacts"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo "</a>
            </p>
        </div>
        <p>
            <span>Sujet :</span>
                ";
        // line 19
        ((($context["contacts"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "
        </p>
        <p>
            <span>Message :</span>
            <p>";
        // line 23
        ((($context["contacts"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 23), "html", null, true))) : (print ("")));
        echo "</p>
        </p>
    </td>";
    }

    public function getTemplateName()
    {
        return "admin/contact/info_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  68 => 19,  58 => 14,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/contact/info_contact.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/info_contact.html.twig");
    }
}
