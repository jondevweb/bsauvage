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
class __TwigTemplate_9dbbe088be2efeb53d8555f9f231ab72 extends Template
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
    }

    public function getTemplateName()
    {
        return "contact/lien.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/lien.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/contact/lien.html.twig");
    }
}
