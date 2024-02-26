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

/* admin/contact/table_head_contact.html.twig */
class __TwigTemplate_56ee18866c2438df364cd382194db31e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/table_head_contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/table_head_contact.html.twig"));

        // line 1
        echo "<thead>
    <tr>
        <th class=\"col-80\">
            <p>Nom & Prénom</p>
            <p>E-mail</p>
            <p>Sujet & Message</p>
        </th>
        <th class=\"modifContact\">
            <p>Lu</p>
            <p>Répondu</p>
            <p>Supprimer</p>
        </th>
    </tr>
</thead>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact/table_head_contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<thead>
    <tr>
        <th class=\"col-80\">
            <p>Nom & Prénom</p>
            <p>E-mail</p>
            <p>Sujet & Message</p>
        </th>
        <th class=\"modifContact\">
            <p>Lu</p>
            <p>Répondu</p>
            <p>Supprimer</p>
        </th>
    </tr>
</thead>", "admin/contact/table_head_contact.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/table_head_contact.html.twig");
    }
}
