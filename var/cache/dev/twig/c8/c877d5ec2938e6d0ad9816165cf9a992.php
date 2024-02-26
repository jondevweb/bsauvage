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

/* shop/index.html.twig */
class __TwigTemplate_7a99ff098b123ee19d123ab595c775fc extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body2"));

        echo " 
    <div class=\"container\">
        <div id=\"shopPresent\">
            <h2>Boutique</h2>
            ";
        // line 8
        if (array_key_exists("beers", $context)) {
            // line 9
            echo "            <h5>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 9, $this->source); })())), "html", null, true);
            echo " bière";
            echo (((twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 9, $this->source); })())) > 1)) ? ("s") : (""));
            echo " en vente.</h5>
            ";
        }
        // line 11
        echo "            <div>
                ";
        // line 12
        echo twig_include($this->env, $context, "message/message_alert.html.twig");
        echo "
            </div> 
            <div>
            ";
        // line 15
        if (array_key_exists("beers", $context)) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 16, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 17
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["beer"], "quantity", [], "any", false, false, false, 17) > 0)) {
                    // line 18
                    echo "                ";
                    echo twig_include($this->env, $context, "shop/info_shop_beer.html.twig");
                    echo "
                ";
                }
                // line 20
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            ";
        }
        // line 22
        echo "            </div>
        </div>
                        
        ";
        // line 25
        echo twig_include($this->env, $context, "shop/basket_shop.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 25,  138 => 22,  135 => 21,  121 => 20,  115 => 18,  112 => 17,  94 => 16,  92 => 15,  86 => 12,  83 => 11,  75 => 9,  73 => 8,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body2 %} 
    <div class=\"container\">
        <div id=\"shopPresent\">
            <h2>Boutique</h2>
            {% if beers is defined %}
            <h5>{{ beers|length }} bière{{ beers|length > 1 ? 's' : ''}} en vente.</h5>
            {% endif %}
            <div>
                {{ include('message/message_alert.html.twig') }}
            </div> 
            <div>
            {% if beers is defined %}
            {% for beer in beers %}
                {% if beer.quantity > 0 %}
                {{ include('shop/info_shop_beer.html.twig') }}
                {% endif %}
            {% endfor %}
            {% endif %}
            </div>
        </div>
                        
        {{ include('shop/basket_shop.html.twig') }}
    </div>
{% endblock %}
", "shop/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/index.html.twig");
    }
}
