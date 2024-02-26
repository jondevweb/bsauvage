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
class __TwigTemplate_a033f646529a79a591e49bfc7a499388 extends Template
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
    }

    public function getTemplateName()
    {
        return "admin/contact/table_head_contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/contact/table_head_contact.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/table_head_contact.html.twig");
    }
}
