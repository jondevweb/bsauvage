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
class __TwigTemplate_379bfcd0bf0f6273b8f5ccf69e559b9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "titleAnimation/tAnim.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "titleAnimation/tAnim.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "titleAnimation/tAnim.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"banner\">
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
    </div>", "titleAnimation/tAnim.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/titleAnimation/tAnim.html.twig");
    }
}
