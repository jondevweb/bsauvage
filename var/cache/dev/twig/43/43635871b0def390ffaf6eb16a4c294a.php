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

/* contact/lien.html.twig */
class __TwigTemplate_dcfd8d48ddbd7e1853a2214cb86a34ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/lien.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/lien.html.twig"));

        // line 1
        echo "<div class=\"col-2\">  
    <div>
        <p>3 Rue Jacqueline Auriol</p>
        <p>35136 Saint-Jacques-de-la-Lande</p>
        <p>FRANCE</p>
    </div>
    <div>
        <p>Facebook</p>
        <a href=\"https://www.facebook.com/sauvagebrasserie\" target=\"blank\"><p>https://www.facebook.com/sauvagebrasserie</p></a>
    </div>
    <div>
        <p>Instagram</p>
        <a href=\"https://www.instagram.com/brasserie_sauvage/?hl=fr\" target=\"blank\"><p>https://www.instagram.com/brasserie_sauvage/?hl=fr</p></a>
    </div>
    <div>
        <p>Adresse e-mail :</p>
        <a href=\"mailto:allo@brasseriesauvage.co\" target=\"blank\"><p>allo@brasseriesauvage.co</p></a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/lien.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-2\">  
    <div>
        <p>3 Rue Jacqueline Auriol</p>
        <p>35136 Saint-Jacques-de-la-Lande</p>
        <p>FRANCE</p>
    </div>
    <div>
        <p>Facebook</p>
        <a href=\"https://www.facebook.com/sauvagebrasserie\" target=\"blank\"><p>https://www.facebook.com/sauvagebrasserie</p></a>
    </div>
    <div>
        <p>Instagram</p>
        <a href=\"https://www.instagram.com/brasserie_sauvage/?hl=fr\" target=\"blank\"><p>https://www.instagram.com/brasserie_sauvage/?hl=fr</p></a>
    </div>
    <div>
        <p>Adresse e-mail :</p>
        <a href=\"mailto:allo@brasseriesauvage.co\" target=\"blank\"><p>allo@brasseriesauvage.co</p></a>
    </div>
</div>", "contact/lien.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/contact/lien.html.twig");
    }
}
