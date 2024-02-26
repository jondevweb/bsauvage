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

/* admin/contact/index.html.twig */
class __TwigTemplate_7453a3463ec5270287e015c2371088a2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <h4>Messages reçus</h4>
        <h5 class=\"text-center\"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["contacts"] ?? null)), "html", null, true);
        echo " message";
        echo (((twig_length_filter($this->env, ($context["contacts"] ?? null)) > 1)) ? ("s") : (""));
        echo " contact + ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["prs"] ?? null)), "html", null, true);
        echo " demande";
        echo (((twig_length_filter($this->env, ($context["prs"] ?? null)) > 1)) ? ("s") : (""));
        echo " de futs</h5>
        ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "        ";
            echo twig_include($this->env, $context, "message/message_alert.html.twig");
            echo "
        <div class=\"contactTable\">
            <table class=\"col-0\">
                ";
            // line 11
            echo twig_include($this->env, $context, "admin/contact/table_head_contact.html.twig");
            echo "
                <tbody>
                ";
            // line 13
            if (($context["contacts"] ?? null)) {
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 15
                    echo "                        ";
                    echo twig_include($this->env, $context, "admin/contact/info_contact.html.twig");
                    echo "
                        ";
                    // line 16
                    echo twig_include($this->env, $context, "admin/contact/modif_contact.html.twig");
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                ";
            }
            // line 19
            echo "                ";
            if (($context["prs"] ?? null)) {
                // line 20
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["prs"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                    // line 21
                    echo "                        ";
                    echo twig_include($this->env, $context, "admin/contact/info_projet.html.twig");
                    echo "
                        ";
                    // line 22
                    echo twig_include($this->env, $context, "admin/contact/modif_projet.html.twig");
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                ";
            }
            // line 25
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 29,  167 => 25,  164 => 24,  148 => 22,  143 => 21,  125 => 20,  122 => 19,  119 => 18,  103 => 16,  98 => 15,  80 => 14,  78 => 13,  73 => 11,  66 => 8,  64 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/contact/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/contact/index.html.twig");
    }
}
