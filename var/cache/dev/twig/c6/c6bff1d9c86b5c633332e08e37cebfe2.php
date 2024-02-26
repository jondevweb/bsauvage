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

/* brasserie/index.html.twig */
class __TwigTemplate_641a222841f83e31537373104bb20fe6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brasserie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brasserie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brasserie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        echo " 
    <div class=\"container\">
        <div id=\"brasseriePresent\">
            <h2>La Brasserie</h2>
            <div class=\"flex\">
                <div class=\"col-40\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/houblon.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cuve2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cuve.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/enpattement.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/degustation.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/canettes.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"col-60\">
                    <h4>Prémices</h4>
                    <div>
                        <p>Lucie et Maxime se sont tout deux formés au Canada, grand pays de la bière artisanale !</p>
                        <p>Max était géologue « chercheur d’or » et Lucie travaillait à Montréal dans l’évènementiel.</p>
                        <p>A compter de 2017, en recherche de nouvelles valeurs leur correspondant, Maxime commence une formation de brasseur et travaille quelques années dans des brasseries canadiennes où peu à peu est née l’envie de créer leur propre bière. </p>
                        <p>Ils ramènent donc dans leurs bagages toute l'inspiration de ce pays, de la craft, mais aussi une motivation et une envie de créer.</p>
                    </div>
                    <h4>Projet</h4>
                    <div>
                        <p>Nous le savons tous : « Les Rennais savent faire de la bonne bière! »</p>
                        <p>Les deux Bretons, grands amateurs de bières, sont alors revenus en France pour s’installer à Rennes en mars 2020 et leur projet a mûri.</p>                
                        <p>Le couple voulaient ouvrir une jeune brasserie pour occuper une partie de la scène brassicole craft bretonne grâce à une qualité de bières et surtout, leur envie de sortir des sentiers battus !</p>
                        <p>Pour porter à bien leur projet, Lucie et Maxime ont lancé une campagne de financement participatif via <a href=\"https://www.kisskissbankbank.com/fr/projects/brasserie-sauvage/tabs/description\">KissKissBankBank</a>, qui leur a permis de récolter plus de 14 000 euros (sur un objectif de 6000 euros).</p>      
                    </div>
                    <h4>Installation</h4>
                    <div>
                        <p>Voulant s'affranchir de toute contrainte et ayant une envie folle de brasser, ils installent leur local à Saint-Jacques-de-la-Lande près de Rennes en juin 2021.</p>
                        <p>Dans leur entrepôt de 230 mètres carrés, deux cuves de brassage, achetées à Skummen en mai 2021, attendent patiemment l’arrivée des premiers pellets de houblon.</p>
                        <p>La première production débute 1 mois plus tard</p>
                        <p>Quatre fermenteurs viennent compléter l’outil de production.</p>
                        <p>L'objectif est de pouvoir proposer quatre bières différentes, permanentes, en même temps, et d’en sortir une nouvelle tous les mois.</p>    
                    </div>
                    <h4>Bières aux saveurs étonnantes locale et bio</h4>
                    <div>
                        <p>Les deux brasseurs, inspirés des micro-brasseries nord-américaines laissent parler leur imagination dans la création des saveurs, d’où le nom de leur brasserie, « totalement libre ».</p>
                        <p>Le jeune couple de 31 ans, propose des bières très houblonnées, acides et fruitées, produites à partir d’ingrédients locaux et bio.</p>
                        <p>Si la plupart des houblons viennent de Bretagne, il y aura également des ingrédients venant des Etats-Unis que l'on ne trouve pas en France.</p>  
                        <p>Fruits, aromates, piment, et assemblages vieillis en barrique, complétent des recettes de fermentation qui donne une saveur extraordinaire à la première degustation.</p>
                        <p>Une acquisition de fûts en chêne (ayant servi au rhum, gin ou vin) pourra faire vieillir les bières et offrir un goût unique. </p>
                    </div>
                    <h4>La canette</h4>
                    <div>
                        <p>L'originalité de la Sauvage, et un contenant uniquement en canettes, de 44 et 33 cl.</p>
                        <p>Ce conditionnement permet une meilleure conservation des saveurs houblonnées, acides et fruitées, en évitant l’oxydation. </p>
                        <p>C’est un concept qui commence à se faire une place en France. </p>
                        <p>En Amérique du Nord, format craft par excellence, la majeure partie des bières de micro-brasseries est vendue sous cette forme.</p>
                        <p>D'abord en vente à l’entrepôt de Saint-Jacques, dans des caves, mais également en fûts dans les bars à Rennes elles sont maintenant disponible dans toute la France </p>    
                    </div>
                    <h5>N'hésitez pas à sauter le pas et permettez vous, vous aussi, de devenir <span>Sauvage</span> !</h5>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "brasserie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  91 => 13,  87 => 12,  83 => 11,  79 => 10,  75 => 9,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %} 
    <div class=\"container\">
        <div id=\"brasseriePresent\">
            <h2>La Brasserie</h2>
            <div class=\"flex\">
                <div class=\"col-40\">
                    <img src=\"{{ asset('img/houblon.jpg') }}\" alt=\"\">
                    <img src=\"{{ asset('img/cuve2.jpg') }}\" alt=\"\">
                    <img src=\"{{ asset('img/cuve.jpg') }}\" alt=\"\">
                    <img src=\"{{ asset('img/enpattement.jpg') }}\" alt=\"\">
                    <img src=\"{{ asset('img/degustation.jpg') }}\" alt=\"\">
                    <img src=\"{{ asset('img/canettes.png') }}\" alt=\"\">
                </div>
                <div class=\"col-60\">
                    <h4>Prémices</h4>
                    <div>
                        <p>Lucie et Maxime se sont tout deux formés au Canada, grand pays de la bière artisanale !</p>
                        <p>Max était géologue « chercheur d’or » et Lucie travaillait à Montréal dans l’évènementiel.</p>
                        <p>A compter de 2017, en recherche de nouvelles valeurs leur correspondant, Maxime commence une formation de brasseur et travaille quelques années dans des brasseries canadiennes où peu à peu est née l’envie de créer leur propre bière. </p>
                        <p>Ils ramènent donc dans leurs bagages toute l'inspiration de ce pays, de la craft, mais aussi une motivation et une envie de créer.</p>
                    </div>
                    <h4>Projet</h4>
                    <div>
                        <p>Nous le savons tous : « Les Rennais savent faire de la bonne bière! »</p>
                        <p>Les deux Bretons, grands amateurs de bières, sont alors revenus en France pour s’installer à Rennes en mars 2020 et leur projet a mûri.</p>                
                        <p>Le couple voulaient ouvrir une jeune brasserie pour occuper une partie de la scène brassicole craft bretonne grâce à une qualité de bières et surtout, leur envie de sortir des sentiers battus !</p>
                        <p>Pour porter à bien leur projet, Lucie et Maxime ont lancé une campagne de financement participatif via <a href=\"https://www.kisskissbankbank.com/fr/projects/brasserie-sauvage/tabs/description\">KissKissBankBank</a>, qui leur a permis de récolter plus de 14 000 euros (sur un objectif de 6000 euros).</p>      
                    </div>
                    <h4>Installation</h4>
                    <div>
                        <p>Voulant s'affranchir de toute contrainte et ayant une envie folle de brasser, ils installent leur local à Saint-Jacques-de-la-Lande près de Rennes en juin 2021.</p>
                        <p>Dans leur entrepôt de 230 mètres carrés, deux cuves de brassage, achetées à Skummen en mai 2021, attendent patiemment l’arrivée des premiers pellets de houblon.</p>
                        <p>La première production débute 1 mois plus tard</p>
                        <p>Quatre fermenteurs viennent compléter l’outil de production.</p>
                        <p>L'objectif est de pouvoir proposer quatre bières différentes, permanentes, en même temps, et d’en sortir une nouvelle tous les mois.</p>    
                    </div>
                    <h4>Bières aux saveurs étonnantes locale et bio</h4>
                    <div>
                        <p>Les deux brasseurs, inspirés des micro-brasseries nord-américaines laissent parler leur imagination dans la création des saveurs, d’où le nom de leur brasserie, « totalement libre ».</p>
                        <p>Le jeune couple de 31 ans, propose des bières très houblonnées, acides et fruitées, produites à partir d’ingrédients locaux et bio.</p>
                        <p>Si la plupart des houblons viennent de Bretagne, il y aura également des ingrédients venant des Etats-Unis que l'on ne trouve pas en France.</p>  
                        <p>Fruits, aromates, piment, et assemblages vieillis en barrique, complétent des recettes de fermentation qui donne une saveur extraordinaire à la première degustation.</p>
                        <p>Une acquisition de fûts en chêne (ayant servi au rhum, gin ou vin) pourra faire vieillir les bières et offrir un goût unique. </p>
                    </div>
                    <h4>La canette</h4>
                    <div>
                        <p>L'originalité de la Sauvage, et un contenant uniquement en canettes, de 44 et 33 cl.</p>
                        <p>Ce conditionnement permet une meilleure conservation des saveurs houblonnées, acides et fruitées, en évitant l’oxydation. </p>
                        <p>C’est un concept qui commence à se faire une place en France. </p>
                        <p>En Amérique du Nord, format craft par excellence, la majeure partie des bières de micro-brasseries est vendue sous cette forme.</p>
                        <p>D'abord en vente à l’entrepôt de Saint-Jacques, dans des caves, mais également en fûts dans les bars à Rennes elles sont maintenant disponible dans toute la France </p>    
                    </div>
                    <h5>N'hésitez pas à sauter le pas et permettez vous, vous aussi, de devenir <span>Sauvage</span> !</h5>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "brasserie/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/brasserie/index.html.twig");
    }
}
