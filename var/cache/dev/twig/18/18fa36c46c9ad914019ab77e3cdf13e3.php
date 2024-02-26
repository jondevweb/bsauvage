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
class __TwigTemplate_105156cf0fe2e91d56bb39b4edcb39dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/info_contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/info_contact.html.twig"));

        // line 1
        echo "<tr>
    <td class=\"col-80\">
        <div class=\"text-center\">
            <p>
                <span>Nom :</span> 
                    ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
            </p>
            <p>
                <span>Prénom :</span> 
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 10, $this->source); })()), "firstName", [], "any", false, false, false, 10), "html", null, true);
        echo "
            </p>  
            <p>
                <span>E-mail :</span> 
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "
            </p> 
        </div>
        <p>
            <span>Sujet :</span>
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 19, $this->source); })()), "subject", [], "any", false, false, false, 19), "html", null, true);
        echo "
        </p>
        <p>
            <span>Message :</span>
            <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 23, $this->source); })()), "message", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
        </p>
    </td>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  79 => 23,  72 => 19,  64 => 14,  57 => 10,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td class=\"col-80\">
        <div class=\"text-center\">
            <p>
                <span>Nom :</span> 
                    {{ contact.name }}
            </p>
            <p>
                <span>Prénom :</span> 
                    {{ contact.firstName }}
            </p>  
            <p>
                <span>E-mail :</span> 
                    {{ contact.email }}
            </p> 
        </div>
        <p>
            <span>Sujet :</span>
                {{ contact.subject }}
        </p>
        <p>
            <span>Message :</span>
            <p>{{ contact.message }}</p>
        </p>
    </td>", "admin/contact/info_contact.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/info_contact.html.twig");
    }
}
