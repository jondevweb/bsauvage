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

/* head/head.html.twig */
class __TwigTemplate_a49fc53d3e17ca75b9ae4721eec7bcb1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logobs.jpg"), "html", null, true);
        echo "\">

    <!--OPENGRAPH-->
    <meta property=\"og:title\" content=\"Brasserie Sauvage | Le site e-commerce d'un brasseur Rennais\">
    <meta property=\"og:site_name\" content=\"Brasserie Sauvage\">
    <meta property=\"og:url\" content=\"brasseriesauvage.online\">
    <meta property=\"og:description\" content=\"Vente de bière bretonnes\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"<?= \$website_url; ?>/img/fb-opengraph.jpg\">

    <!--fonts-->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Allan&family=Alumni+Sans:ital,wght@1,300&family=Amatic+SC:wght@700&family=Antonio:wght@100&family=Big+Shoulders+Display:wght@200&family=Big+Shoulders+Inline+Display:wght@200&family=Big+Shoulders+Stencil+Display:wght@300&family=Big+Shoulders+Text:wght@100&family=Caveat&family=Chathura&family=Dorsa&family=Just+Another+Hand&family=Roboto:wght@300;400&family=Smooch+Sans:wght@300&family=Teko:wght@300&display=swap\" rel=\"stylesheet\">

    <!--CSS-->
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <!--JS-->
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sauvage";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("Home");
        echo "
        ";
        // line 23
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("Other");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "head/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  86 => 22,  82 => 21,  75 => 4,  69 => 25,  67 => 21,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "head/head.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/head/head.html.twig");
    }
}
