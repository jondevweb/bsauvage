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

/* titleAnimation/tAnim.html.twig */
class __TwigTemplate_eeb8700ec9b354432234a3eae97b6a06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"banner\">
    <div class=\"container\">
        <div id=\"onTitle\" class=\"flex wrap col-0\">
            <div class=\"col-40\">
                <div id=\"brasserie\" class=\"brasserie zI3 pAbsolute flex jcCenter\">
                    <div><p class=\"title2\">B</p></div>
                    <div><p class=\"title1\">r</p></div>
                    <div><p class=\"title2\">a</p></div>
                    <div><p class=\"title1\">s</p></div>
                    <div><p class=\"title2\">s</p></div>
                    <div><p class=\"title1\">e</p></div>
                    <div><p class=\"title2\">r</p></div>
                    <div><p class=\"title1\">i</p></div>
                    <div><p class=\"title2\">e</p></div>
                </div>
                <div id=\"brasseriePlus\" class=\"brasserie zI3 pAbsolute flex jcCenter\">
                    <div><p class=\"title1\">B</p></div>
                    <div><p class=\"title3\">r</p></div>
                    <div><p class=\"title1\">a</p></div>
                    <div><p class=\"title3\">s</p></div>
                    <div><p class=\"title1\">s</p></div>
                    <div><p class=\"title3\">e</p></div>
                    <div><p class=\"title1\">r</p></div>
                    <div><p class=\"title3\">i</p></div>
                    <div><p class=\"title1\">e</p></div>
                </div>
            </div>
            <div class=\"col-2\">
                <div id=\"sauvage\" class=\"sauvage zI3 pAbsolute flex jcCenter\">
                    <div class=\"marg\"><p class=\"title1\">S</p></div>
                    <div class=\"marg\"><p class=\"title4\">A</p></div>
                    <div class=\"marg\"><p class=\"title1\">U</p></div>
                    <div class=\"marg\"><p class=\"title4\">V</p></div>
                    <div class=\"marg\"><p class=\"title1\">A</p></div>
                    <div class=\"marg\"><p class=\"title4\">G</p></div>
                    <div class=\"marg\"><p class=\"title1\">E</p></div>
                </div>
                <div id=\"sauvagePlus\" class=\"sauvage zI3 pAbsolute flex jcCenter\">
                    <div class=\"marg\"><p class=\"title5\">S</p></div>
                    <div class=\"marg\"><p class=\"title1\">A</p></div>
                    <div class=\"marg\"><p class=\"title5\">U</p></div>
                    <div class=\"marg\"><p class=\"title1\">V</p></div>
                    <div class=\"marg\"><p class=\"title5\">A</p></div>
                    <div class=\"marg\"><p class=\"title1\">G</p></div>
                    <div class=\"marg\"><p class=\"title5\">E</p></div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "titleAnimation/tAnim.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "titleAnimation/tAnim.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/titleAnimation/tAnim.html.twig");
    }
}
