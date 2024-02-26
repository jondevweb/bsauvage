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
class __TwigTemplate_9b13242bfa3637aeee3f53c48fd54409 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "head/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "head/head.html.twig"));

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
    <meta property=\"og:site_name\" content=\"Brassrie Sauvage\">
    <meta property=\"og:url\" content=\"<?= \$website_url; ?>\">
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sauvage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("Home");
        echo "
        ";
        // line 23
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("Other");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  121 => 23,  116 => 22,  106 => 21,  87 => 4,  75 => 25,  73 => 21,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Sauvage{% endblock %}</title>
    <link rel=\"icon\" href=\"{{ asset('img/logobs.jpg') }}\">

    <!--OPENGRAPH-->
    <meta property=\"og:title\" content=\"Brasserie Sauvage | Le site e-commerce d'un brasseur Rennais\">
    <meta property=\"og:site_name\" content=\"Brassrie Sauvage\">
    <meta property=\"og:url\" content=\"<?= \$website_url; ?>\">
    <meta property=\"og:description\" content=\"Vente de bière bretonnes\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"<?= \$website_url; ?>/img/fb-opengraph.jpg\">

    <!--fonts-->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Allan&family=Alumni+Sans:ital,wght@1,300&family=Amatic+SC:wght@700&family=Antonio:wght@100&family=Big+Shoulders+Display:wght@200&family=Big+Shoulders+Inline+Display:wght@200&family=Big+Shoulders+Stencil+Display:wght@300&family=Big+Shoulders+Text:wght@100&family=Caveat&family=Chathura&family=Dorsa&family=Just+Another+Hand&family=Roboto:wght@300;400&family=Smooch+Sans:wght@300&family=Teko:wght@300&display=swap\" rel=\"stylesheet\">

    <!--CSS-->
    {% block stylesheets %}
        {{ encore_entry_link_tags('Home') }}
        {{ encore_entry_link_tags('Other') }}
    {% endblock %}

    <!--JS-->
", "head/head.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/head/head.html.twig");
    }
}
