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

/* home/index.html.twig */
class __TwigTemplate_83c8804258f6c90b995f2b994b42dc27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'beforeBody' => [$this, 'block_beforeBody'],
            'endHeader' => [$this, 'block_endHeader'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("Home");
        echo "
</head> 
";
    }

    // line 7
    public function block_beforeBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "modal/alcoholWarning.html.twig");
        echo "     
    ";
        // line 9
        echo twig_include($this->env, $context, "canette/canette.html.twig");
        echo "   
    <div id=\"white\" class=\"zI4\">
";
    }

    // line 12
    public function block_endHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
    </div>
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        echo twig_include($this->env, $context, "titleAnimation/tAnim.html.twig");
        echo "
    ";
        // line 17
        echo twig_include($this->env, $context, "button/button.html.twig");
        echo "
";
    }

    // line 19
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "bannerBeer/index.html.twig");
        echo "
    ";
        // line 21
        echo twig_include($this->env, $context, "actuality/actuality.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  106 => 20,  102 => 19,  96 => 17,  91 => 16,  87 => 15,  78 => 12,  71 => 9,  66 => 8,  62 => 7,  54 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/home/index.html.twig");
    }
}
