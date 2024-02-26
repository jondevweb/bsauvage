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
class __TwigTemplate_bf56e38e655ed93d88488a2aa4ce795a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <div class=\"container\">
        <div id=\"carrePlus\">0</div>
        <div id=\"shopPresent\">
            <h2>Boutique</h2>
            ";
        // line 9
        if (array_key_exists("beers", $context)) {
            // line 10
            echo "            <h5>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["beers"] ?? null)), "html", null, true);
            echo " bière";
            echo (((twig_length_filter($this->env, ($context["beers"] ?? null)) > 1)) ? ("s") : (""));
            echo " en vente.</h5>
            ";
        }
        // line 12
        echo "            <div>
                ";
        // line 13
        echo twig_include($this->env, $context, "message/message_alert.html.twig");
        echo "
            </div> 
            <div>
            ";
        // line 16
        if (array_key_exists("beers", $context)) {
            // line 17
            echo "            ";
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
                // line 18
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["beer"], "quantity", [], "any", false, false, false, 18) > 0)) {
                    // line 19
                    echo "                ";
                    echo twig_include($this->env, $context, "shop/info_shop_beer.html.twig");
                    echo "
                ";
                }
                // line 21
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
            // line 22
            echo "            ";
        }
        // line 23
        echo "            </div>
        </div>
                        
        ";
        // line 26
        echo twig_include($this->env, $context, "shop/basket_shop.html.twig");
        echo "
    </div>
";
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
        return array (  126 => 26,  121 => 23,  118 => 22,  104 => 21,  98 => 19,  95 => 18,  77 => 17,  75 => 16,  69 => 13,  66 => 12,  58 => 10,  56 => 9,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/shop/index.html.twig");
    }
}
