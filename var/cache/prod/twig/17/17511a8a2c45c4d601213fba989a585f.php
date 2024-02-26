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

/* base.html.twig */
class __TwigTemplate_03f4575bb6d7d361bae535a33d223719 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts2' => [$this, 'block_javascripts2'],
            'javascripts' => [$this, 'block_javascripts'],
            'beforeBody' => [$this, 'block_beforeBody'],
            'endHeader' => [$this, 'block_endHeader'],
            'body' => [$this, 'block_body'],
            'body2' => [$this, 'block_body2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr_FR\">
    ";
        // line 3
        echo twig_include($this->env, $context, "head/head.html.twig");
        echo "
       ";
        // line 4
        $this->displayBlock('javascripts2', $context, $blocks);
        // line 35
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    
    <body>
        ";
        // line 41
        $this->displayBlock('beforeBody', $context, $blocks);
        // line 42
        echo "        <div class=\"container\">
            <div class=\"flex pRelative col-0\">
                ";
        // line 44
        echo twig_include($this->env, $context, "socialNetwork/index.html.twig");
        echo "
                ";
        // line 45
        echo twig_include($this->env, $context, "logo/index.html.twig");
        echo "
                ";
        // line 46
        echo twig_include($this->env, $context, "language/index.html.twig");
        echo "
            </div>
        </div>
        ";
        // line 49
        $this->displayBlock('endHeader', $context, $blocks);
        // line 50
        echo "        <div class=\"container\">
            ";
        // line 51
        echo twig_include($this->env, $context, "menu/index.html.twig");
        echo "
        </div>
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        ";
        $this->displayBlock('body2', $context, $blocks);
        // line 59
        echo "        ";
        echo twig_include($this->env, $context, "footer/index.html.twig");
        echo "  
        <div id=\"fTop\" class=\"text-center\">
            <a href=\"#logo\">
                <img class=\"arrow2\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fleche_haut.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <p class=\"hide\" >Retour haut de page</p>
        </div>
        ";
        // line 67
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_javascripts2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <script type=\"text/javascript\">
            // Create an instance of the Stripe object with your publishable API key
            if(document.getElementById(\"checkout-button\")){
                var stripe = Stripe(\"pk_test_51LzoqIAfdtI2a3VcGn5xVMURDi97X7MjrTamRdps639g0xE7Xs4Zk5QwbXbX5F362hXWerRKelXyvx47KmoY1qpt00zu8beOtE\");
                var checkoutButton = document.getElementById(\"checkout-button\");
                checkoutButton.addEventListener(\"click\", function () {
                    fetch(\"/create-checkout-session//{ssd}\", {
                        method: \"POST\",
                    })
                        .then(function (response) {
                            return response.json();
                        })
                        .then(function (session) {
                            return stripe.redirectToCheckout({ sessionId: session.id });
                        })
                        .then(function (result) {
                            // If redirectToCheckout fails due to a browser or network
                            // error, you should display the localized error message to your
                            // customer using error.message.
                            if (result.error) {
                                alert(result.error.message);
                            }
                        })
                        .catch(function (error) {
                            console.error(\"Error:\", error);
                        });
                });
            }
        </script>
    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("Other");
        echo "
    </head> 
    ";
    }

    // line 41
    public function block_beforeBody($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_endHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            <div class=\"container\">
                ";
        // line 55
        echo twig_include($this->env, $context, "button/button.html.twig");
        echo "
           </div>
        ";
    }

    // line 58
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 58,  183 => 55,  180 => 54,  176 => 53,  170 => 49,  164 => 41,  156 => 36,  152 => 35,  119 => 5,  115 => 4,  109 => 67,  102 => 62,  95 => 59,  92 => 58,  90 => 53,  85 => 51,  82 => 50,  80 => 49,  74 => 46,  70 => 45,  66 => 44,  62 => 42,  60 => 41,  56 => 39,  53 => 35,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/base.html.twig");
    }
}
