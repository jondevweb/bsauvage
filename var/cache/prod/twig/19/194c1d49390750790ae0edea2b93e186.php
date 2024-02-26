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
class __TwigTemplate_ecf5f6d8f4982bc29cab41f5c57e69fa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profil/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "                <div  class=\"text-center\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formuser"] ?? null), 'form_start');
            echo "
                        ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "email", [], "any", false, false, false, 13), 'row');
            echo "
                        ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "plainPassword", [], "any", false, false, false, 14), 'row', ["label" => "Mot de passe"]);
            // line 16
            echo "
                        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "last_name", [], "any", false, false, false, 17), 'row');
            echo "
                        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "first_name", [], "any", false, false, false, 18), 'row');
            echo "
                        ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "pseudo", [], "any", false, false, false, 19), 'row');
            echo "
                        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "adress", [], "any", false, false, false, 20), 'row');
            echo "
                        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "city", [], "any", false, false, false, 21), 'row');
            echo "
                        ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "postalCode", [], "any", false, false, false, 22), 'row');
            echo "
                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "phone", [], "any", false, false, false, 23), 'row');
            echo "
                        ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formuser"] ?? null), "birthday_date", [], "any", false, false, false, 24), 'row');
            echo "
                        <input type=\"submit\" class=\"submit\" value=\"Valider\">
                    ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formuser"] ?? null), 'form_end');
            echo "
                </div>
            ";
        }
        // line 29
        echo "        </div>
    </div>
";
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
        return array (  118 => 29,  112 => 26,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  76 => 16,  74 => 14,  70 => 13,  66 => 12,  63 => 11,  61 => 10,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/edit.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/profil/edit.html.twig");
    }
}
