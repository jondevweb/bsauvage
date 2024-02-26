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
class __TwigTemplate_a71edd89e5d456a8146dfea6b4ba4d1a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/beer/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCategory"] ?? null), 'form');
            echo "
            ";
            // line 10
            echo twig_include($this->env, $context, "message/message_alert.html.twig");
            echo "
            <div class=\"catTable col-0\">
                <h5>Catégorie";
            // line 12
            echo (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1)) ? ("s") : (""));
            echo " existante";
            echo (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1)) ? ("s") : (""));
            echo " : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["categories"] ?? null)), "html", null, true);
            echo "</h5>
                <div class=\"flex wrap jcCenter\">
                ";
            // line 14
            if (array_key_exists("categories", $context)) {
                // line 15
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formBeer"] ?? null), 'form');
            echo "
                <div class=\"beerTable\">
                    <h5>Bière";
            // line 28
            echo (((twig_length_filter($this->env, ($context["beers"] ?? null)) > 1)) ? ("s") : (""));
            echo " existante";
            echo (((twig_length_filter($this->env, ($context["beers"] ?? null)) > 1)) ? ("s") : (""));
            echo " : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["beers"] ?? null)), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["beers"] ?? null));
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
        return array (  208 => 48,  196 => 40,  180 => 38,  176 => 37,  172 => 36,  167 => 35,  149 => 34,  147 => 33,  142 => 31,  132 => 28,  127 => 26,  118 => 19,  115 => 18,  98 => 16,  80 => 15,  78 => 14,  69 => 12,  64 => 10,  60 => 9,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/beer/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/admin/beer/index.html.twig");
    }
}
