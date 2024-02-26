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

/* profil/edit.html.twig */
class __TwigTemplate_8f8e1c76aa4ee2e35504244cd4ba9723 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/edit.html.twig", 1);
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
        <div id=\"profilPresent\">
            <h2>Modifier profil</h2>
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
        echo "\">
                <button class=\"sbutton3\">Retour profil</button>
            </a>
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "                <div  class=\"text-center\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 12, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'row');
            echo "
                        ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 14, $this->source); })()), "plainPassword", [], "any", false, false, false, 14), 'row', ["label" => "Mot de passe"]);
            // line 16
            echo "
                        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 17, $this->source); })()), "last_name", [], "any", false, false, false, 17), 'row');
            echo "
                        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 18, $this->source); })()), "first_name", [], "any", false, false, false, 18), 'row');
            echo "
                        ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 19, $this->source); })()), "pseudo", [], "any", false, false, false, 19), 'row');
            echo "
                        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 20, $this->source); })()), "adress", [], "any", false, false, false, 20), 'row');
            echo "
                        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 21, $this->source); })()), "city", [], "any", false, false, false, 21), 'row');
            echo "
                        ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 22, $this->source); })()), "postalCode", [], "any", false, false, false, 22), 'row');
            echo "
                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 23, $this->source); })()), "phone", [], "any", false, false, false, 23), 'row');
            echo "
                        ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 24, $this->source); })()), "birthday_date", [], "any", false, false, false, 24), 'row');
            echo "
                        <input type=\"submit\" class=\"submit\" value=\"Valider\">
                    ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 26, $this->source); })()), 'form_end');
            echo "
                </div>
            ";
        }
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  130 => 26,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  105 => 19,  101 => 18,  97 => 17,  94 => 16,  92 => 14,  88 => 13,  84 => 12,  81 => 11,  79 => 10,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body2 %}
    <div class=\"container\">
        <div id=\"profilPresent\">
            <h2>Modifier profil</h2>
            <a href=\"{{ path('app_profil') }}\">
                <button class=\"sbutton3\">Retour profil</button>
            </a>
            {% if app.user %}
                <div  class=\"text-center\">
                    {{ form_start(formuser) }}
                        {{ form_row(formuser.email) }}
                        {{ form_row(formuser.plainPassword, {
                            label: 'Mot de passe'
                        }) }}
                        {{ form_row(formuser.last_name) }}
                        {{ form_row(formuser.first_name) }}
                        {{ form_row(formuser.pseudo) }}
                        {{ form_row(formuser.adress) }}
                        {{ form_row(formuser.city) }}
                        {{ form_row(formuser.postalCode) }}
                        {{ form_row(formuser.phone) }}
                        {{ form_row(formuser.birthday_date) }}
                        <input type=\"submit\" class=\"submit\" value=\"Valider\">
                    {{ form_end(formuser) }}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "profil/edit.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/profil/edit.html.twig");
    }
}
