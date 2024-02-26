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

/* contact/index.html.twig */
class __TwigTemplate_df8a886499ad8d967b4f99981ece454a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body2' => [$this, 'block_body2'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <div class=\"container\">
        <div id=\"brasseriePresent\">
            <h2>Contact</h2>
            ";
        // line 7
        echo twig_include($this->env, $context, "message/message_alert.html.twig");
        echo "
            <div class=\"flex\" id=\"fColumn\">
                ";
        // line 9
        echo twig_include($this->env, $context, "contact/lien.html.twig");
        echo "
                <div class=\"col-2\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/local.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"text-center\">
                <h3>Formulez votre demande. Réponse dans les 72h</h3>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formContact"] ?? null), 'form');
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  65 => 11,  60 => 9,  55 => 7,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/contact/index.html.twig");
    }
}
