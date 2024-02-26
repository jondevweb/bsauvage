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

/* admin/beer/index.html.twig */
class __TwigTemplate_de9f215ae3a0604ec0a824470c71d3cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/beer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/beer/index.html.twig", 1);
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

        // line 4
        echo "    <div class=\"container\">
        <h4>Les catégories</h4>
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "        <div class=\"col-0 text-center\">
            <h5>Ajout de catégories</h5>
            ";
            // line 9
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 9, $this->source); })()), 'form');
            echo "
            ";
            // line 10
            echo twig_include($this->env, $context, "message/message_alert.html.twig");
            echo "
            <div class=\"catTable col-0\">
                <h5>Catégories existantes : ";
            // line 12
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })())), "html", null, true);
            echo "</h5>
                <div class=\"flex wrap jcCenter\">
                ";
            // line 14
            if (array_key_exists("categories", $context)) {
                // line 15
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 15, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 16
                    echo "                        ";
                    echo twig_include($this->env, $context, "admin/beer/info_category.html.twig");
                    echo "
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                ";
            }
            // line 19
            echo "                </div>
            </div>
        </div>
        <div class=\"blocBP\">
        <h4>Les bières</h4>
            <div class=\"col-0 text-center\">
                <h5>Ajout des bières</h5>
                ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBeer"]) || array_key_exists("formBeer", $context) ? $context["formBeer"] : (function () { throw new RuntimeError('Variable "formBeer" does not exist.', 26, $this->source); })()), 'form');
            echo "
                <div class=\"beerTable\">
                    <h5>Bières existantes : ";
            // line 28
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 28, $this->source); })())), "html", null, true);
            echo "</h5>
                    <div>
                        <table class=\"pRelative\">
                            ";
            // line 31
            echo twig_include($this->env, $context, "admin/beer/table_head_beer.html.twig");
            echo "
                            <tbody>
                            ";
            // line 33
            if (array_key_exists("beers", $context)) {
                // line 34
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new RuntimeError('Variable "beers" does not exist.', 34, $this->source); })()));
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
                    // line 35
                    echo "                                    ";
                    echo twig_include($this->env, $context, "admin/beer/info_beer.html.twig");
                    echo "
                                    ";
                    // line 36
                    echo twig_include($this->env, $context, "admin/beer/edit_delete_beer.html.twig");
                    echo "
                                    ";
                    // line 37
                    echo twig_include($this->env, $context, "admin/beer/info_beer_800.html.twig");
                    echo "
                                    ";
                    // line 38
                    echo twig_include($this->env, $context, "admin/beer/edit_delete_beer_800.html.twig");
                    echo "
                                ";
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
                // line 40
                echo "                            ";
            }
            echo "                                
                            </tbody>                                    
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 48
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/beer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 48,  206 => 40,  190 => 38,  186 => 37,  182 => 36,  177 => 35,  159 => 34,  157 => 33,  152 => 31,  146 => 28,  141 => 26,  132 => 19,  129 => 18,  112 => 16,  94 => 15,  92 => 14,  87 => 12,  82 => 10,  78 => 9,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %}
    <div class=\"container\">
        <h4>Les catégories</h4>
        {% if is_granted(\"ROLE_ADMIN\") %}
        <div class=\"col-0 text-center\">
            <h5>Ajout de catégories</h5>
            {{ form(formCategory)}}
            {{ include('message/message_alert.html.twig') }}
            <div class=\"catTable col-0\">
                <h5>Catégories existantes : {{ categories|length }}</h5>
                <div class=\"flex wrap jcCenter\">
                {% if categories is defined %}
                    {% for category in categories %}
                        {{ include('admin/beer/info_category.html.twig') }}
                    {% endfor %}
                {% endif %}
                </div>
            </div>
        </div>
        <div class=\"blocBP\">
        <h4>Les bières</h4>
            <div class=\"col-0 text-center\">
                <h5>Ajout des bières</h5>
                {{ form(formBeer)}}
                <div class=\"beerTable\">
                    <h5>Bières existantes : {{ beers|length }}</h5>
                    <div>
                        <table class=\"pRelative\">
                            {{ include('admin/beer/table_head_beer.html.twig') }}
                            <tbody>
                            {% if beers is defined %}
                                {% for beer in beers %}
                                    {{ include('admin/beer/info_beer.html.twig') }}
                                    {{ include('admin/beer/edit_delete_beer.html.twig') }}
                                    {{ include('admin/beer/info_beer_800.html.twig') }}
                                    {{ include('admin/beer/edit_delete_beer_800.html.twig') }}
                                {% endfor %}
                            {% endif %}                                
                            </tbody>                                    
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}
", "admin/beer/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/index.html.twig");
    }
}
