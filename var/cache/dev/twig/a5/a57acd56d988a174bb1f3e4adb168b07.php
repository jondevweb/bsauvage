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
class __TwigTemplate_f60fe1f37cf19e63582343f7c7f6f364 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_javascripts2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts2"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("Other");
        echo "
    </head> 
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_beforeBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeBody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeBody"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_endHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "endHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "endHeader"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "            <div class=\"container\">
                ";
        // line 55
        echo twig_include($this->env, $context, "button/button.html.twig");
        echo "
           </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  262 => 58,  249 => 55,  246 => 54,  236 => 53,  218 => 49,  200 => 41,  186 => 36,  176 => 35,  137 => 5,  127 => 4,  115 => 67,  108 => 62,  101 => 59,  98 => 58,  96 => 53,  91 => 51,  88 => 50,  86 => 49,  80 => 46,  76 => 45,  72 => 44,  68 => 42,  66 => 41,  62 => 39,  59 => 35,  57 => 4,  53 => 3,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr_FR\">
    {{ include(\"head/head.html.twig\") }}
       {% block javascripts2 %}
        <script type=\"text/javascript\">
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
    {% endblock %}
    {% block javascripts %}
        {{ encore_entry_script_tags('Other') }}
    </head> 
    {% endblock %}
    
    <body>
        {% block beforeBody %}{% endblock %}
        <div class=\"container\">
            <div class=\"flex pRelative col-0\">
                {{ include(\"socialNetwork/index.html.twig\") }}
                {{ include(\"logo/index.html.twig\") }}
                {{ include(\"language/index.html.twig\") }}
            </div>
        </div>
        {% block endHeader %}{% endblock %}
        <div class=\"container\">
            {{ include(\"menu/index.html.twig\") }}
        </div>
        {% block body %}
            <div class=\"container\">
                {{ include(\"button/button.html.twig\") }}
           </div>
        {% endblock %}
        {% block body2 %}{% endblock %}
        {{ include(\"footer/index.html.twig\") }}  
        <div id=\"fTop\" class=\"text-center\">
            <a href=\"#logo\">
                <img class=\"arrow2\" src=\"{{ asset('img/fleche_haut.png') }}\" alt=\"\">
            </a>
            <p class=\"hide\" >Retour haut de page</p>
        </div>
        {# Afficher les message d'erreurs des formulaires. #}
    </body>
</html>
", "base.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/base.html.twig");
    }
}
