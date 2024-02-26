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

/* actuality/actuality.html.twig */
class __TwigTemplate_0f60921a0fda9521ae290fb4909cbfbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actuality/actuality.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actuality/actuality.html.twig"));

        // line 1
        echo "    <div class=\"container text-center\">
        <div id=\"actuality\">
            <h4>🍻 Microbrasserie rennaise depuis 2021</h4>
            <div>
                <p>🛒 Vente directe à la brasserie les mercredis (16-19h), jeudis (16-19h) et vendredis (12-18h).</p>
                <p>3 Rue Jacqueline Auriol, 35136 Saint-Jacques-de-la-Lande.</p>
                <p>💌 Écris nous pour connaître les points de vente près de chez toi! 
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fleche.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </p>
            </div>
        </div>
        <div id=\"tendances\">
            <h3>Tendances / Evenements</h3>
            <div>
                <h4>22 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-2 text-center\">
                        <h5>QUI EST DE RETOUR?</h5>
                        <p class=\"text-left\">Pour prolonger l’été — C’est La Garrigue, American Pale Ale au romarin ☀️</p>
                        <p class=\"text-left\">4 houblons (Amarillo, Simcoe, Cascade, Citra) pour une belle amertume et des notes de pin + une touche de romarin qui régale les papilles 🌿</p>
                    </div>
                    <div class=\"col-2\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/garrigue_carton.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>15 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-2 text-center\">
                        <h5>Rennaises & Rennais</h5>
                        <p class=\"text-left\">Courez samedi au Biergarten organisé par  le festival I'M FROM RENNES 2022 : de la bière locale & des bretzels en plein parc du Thabor 🍻🥨🎶🌿</p>
                        <p class=\"text-left\">On oublie pas non plus à la sortie du marché LA BEERFORE chez Le Marchand de Bière • IMFR 2022.
                        Bisous.
                        I'M FROM RENNES BIO ZH Marchand de Bière</p>
                    </div>
                    <div class=\"col-2\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imfromrennes.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>12 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-2 text-center\">
                        <h5>T’as besoin de force pour démarrer la semaine, voici 2 bonnes nouvelles :</h5>
                        <p class=\"text-left\">Nantes Sous Pression démarre aujoudhui avec PLEIN d’événements toute la semaine et le Final au Le Solilab ce week-end 🔥</p>
                        <p class=\"text-left\">On sera Au Père Peinard - Orvault vendredi soir pour un double TTO avec Les Papas Brasseurs. BELLE SOIRÉE en perspective, on t’attend! 🍻❤️‍🔥</p>
                    </div>
                    <div class=\"col-2\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/doubletto.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
            </div>
        </div>
         <div id=\"creations\">
            <h3>Créations</h3>
            <div>
                <h4>6 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-60 p30\">
                        <h5>COOL KIDS - New England IPA - 6,5% 🍍🍑</h5>
                        <p>On avait pas encore brassé de NEIPA, c'est maintenant chose faite ! 🍻</p>
                        <p>Aux houblons Citra, Citra Cryo, Azacca, Azacca Cryo, El Dorado — une bière juteuse et soyeuse avec une explosion d'arômes de fruits exotiques, ananas et fruits à noyau en bouche</p>
                    </div>  
                    <div class=\"col-4\">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cool_kids.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>18 mai 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-60 p30\">
                        <h5>AMOUR ACIDE - Sour abricot cassis - 6,4% 🍑🫐</h5>
                        <p>Ok ça c'est la petite nouvelle qui va t'accompagner cet été ☀️</p>
                        <p>une bière sure avec du fruit en masse = un petit jus acidulé parfait pour les grosses chaleurs.</p>
                    </div>  
                    <div class=\"col-4\">
                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/amour_acide.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>17 février 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-60 p30\">
                        <h5>LA GARRIGUE - American Pale Ale au romarin - 5,5% 🌿</h5>
                        <p>🔥 Nouveauté 🔥</p>
                        <p>4 houblons (Amarillo, Simcoe, Cascade, Citra) et une touche de romarin : ton corps te dit merci !</p>
                    </div>  
                    <div class=\"col-4\">
                        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/la_garrigue.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
            </div>
        </div>
         <div id=\"projets\">
            <h3>Projets</h3>
            <div>
                <h4>Demain près de chez toi!</h4>
                <h5>De la SAUVAGE à la pression? 🤘🍻</h5>
                <p>Tu peux déjà en trouver sur Rennes & on a fait le plein de fûts chez Soofût aujourd’hui pour les nouveautés de la semaine prochaine!</p>
                <p>Dis nous dans quel bar caché dans ton territoire français, tu veux en boire?</p>      
                <div class=\"flex\" id=\"formProjet\">
                    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 106, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 107, $this->source); })()), "name", [], "any", false, false, false, 107), 'row');
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 108, $this->source); })()), "city", [], "any", false, false, false, 108), 'row');
        echo "
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'row');
        echo "
                        
                         <input href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        echo "\" 
                         type=\"submit\" class=\"submit\" value=\"GO\">
                    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
                    <div>
                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/futs.jpg"), "html", null, true);
        echo "\" alt=''>
                    </div>
                </div>
                <p>On les contacte et on te tiens au courant! &#128540</p>
            </div>
        </div>
         <div id=\"pressRessource\">
            <h3>Articles de presse</h3>
            <div class=\"flex wrap text-center\">
                <div>
                    <h5>Ouest France</h5>
                    <p>Publié le 22/04/2022</p>
                    <a href=\"https://www.ouest-france.fr/sante/addictions/alcool/dans-cette-nouvelle-brasserie-pres-de-rennes-ils-mettent-leur-biere-artisanale-en-canette-f520bc6e-bccd-11ec-a567-e86cf18d060a\" target=\"blank\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ouest_france_22_04_22.jpg"), "html", null, true);
        echo "\" alt=''></a>   
                </div>
                <div>
                    <h5>Actu Rennes</h5>
                    <p>Publié le 05/08/2022</p>
                    <a href=\"https://actu.fr/bretagne/rennes_35238/rennes-trois-microbrasseries-locales-a-re-decouvrir-dans-la-capitale-bretonne_52919078.html\" target=\"blank\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/actu_rennes_05_08_22.jpg"), "html", null, true);
        echo "\" alt=''></a>   
                </div>
                <div>
                    <h5>Actu Rennes</h5>
                    <p>Publié le 12/05/2021</p>
                    <a href=\"https://actu.fr/bretagne/saint-jacques-de-la-lande_35281/brasserie-sauvage-la-nouvelle-biere-rennaise-locale-bio-et-en-canette_41790353.html\" target=\"blank\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/actu_rennes_12_05_21.jpg"), "html", null, true);
        echo "\" alt=''></a>   
                </div>
            </div>
        </div>
         <div id=\"gallerie\">
            <h3>Gallerie</h3>
            <div class=\"flex wrap\">
                <img class=\"imgHover\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2410.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2401.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2393.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2391.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2373.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2310.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2208.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2187.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/2178.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1916.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1793.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1745.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1559.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1535.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1494.jpg"), "html", null, true);
        echo "\" alt=''>
                <img class=\"imgHover\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imgGallerie/1465.jpg"), "html", null, true);
        echo "\" alt=''>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "actuality/actuality.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 159,  297 => 158,  293 => 157,  289 => 156,  285 => 155,  281 => 154,  277 => 153,  273 => 152,  269 => 151,  265 => 150,  261 => 149,  257 => 148,  253 => 147,  249 => 146,  245 => 145,  241 => 144,  231 => 137,  223 => 132,  215 => 127,  200 => 115,  195 => 113,  190 => 111,  185 => 109,  181 => 108,  177 => 107,  173 => 106,  157 => 93,  141 => 80,  125 => 67,  106 => 51,  90 => 38,  72 => 23,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"container text-center\">
        <div id=\"actuality\">
            <h4>🍻 Microbrasserie rennaise depuis 2021</h4>
            <div>
                <p>🛒 Vente directe à la brasserie les mercredis (16-19h), jeudis (16-19h) et vendredis (12-18h).</p>
                <p>3 Rue Jacqueline Auriol, 35136 Saint-Jacques-de-la-Lande.</p>
                <p>💌 Écris nous pour connaître les points de vente près de chez toi! 
                    <a href=\"{{ path('app_contact') }}\"><img src=\"{{ asset('img/fleche.png') }}\" alt=\"\"></a>
                </p>
            </div>
        </div>
        <div id=\"tendances\">
            <h3>Tendances / Evenements</h3>
            <div>
                <h4>22 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-2 text-center\">
                        <h5>QUI EST DE RETOUR?</h5>
                        <p class=\"text-left\">Pour prolonger l’été — C’est La Garrigue, American Pale Ale au romarin ☀️</p>
                        <p class=\"text-left\">4 houblons (Amarillo, Simcoe, Cascade, Citra) pour une belle amertume et des notes de pin + une touche de romarin qui régale les papilles 🌿</p>
                    </div>
                    <div class=\"col-2\">
                        <img src=\"{{ asset('img/garrigue_carton.jpg') }}\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>15 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-2 text-center\">
                        <h5>Rennaises & Rennais</h5>
                        <p class=\"text-left\">Courez samedi au Biergarten organisé par  le festival I'M FROM RENNES 2022 : de la bière locale & des bretzels en plein parc du Thabor 🍻🥨🎶🌿</p>
                        <p class=\"text-left\">On oublie pas non plus à la sortie du marché LA BEERFORE chez Le Marchand de Bière • IMFR 2022.
                        Bisous.
                        I'M FROM RENNES BIO ZH Marchand de Bière</p>
                    </div>
                    <div class=\"col-2\">
                        <img src=\"{{ asset('img/imfromrennes.jpg') }}\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>12 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-2 text-center\">
                        <h5>T’as besoin de force pour démarrer la semaine, voici 2 bonnes nouvelles :</h5>
                        <p class=\"text-left\">Nantes Sous Pression démarre aujoudhui avec PLEIN d’événements toute la semaine et le Final au Le Solilab ce week-end 🔥</p>
                        <p class=\"text-left\">On sera Au Père Peinard - Orvault vendredi soir pour un double TTO avec Les Papas Brasseurs. BELLE SOIRÉE en perspective, on t’attend! 🍻❤️‍🔥</p>
                    </div>
                    <div class=\"col-2\">
                        <img src=\"{{ asset('img/doubletto.jpg') }}\" alt=''>
                    </div>
                </div>
            </div>
        </div>
         <div id=\"creations\">
            <h3>Créations</h3>
            <div>
                <h4>6 septembre 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-60 p30\">
                        <h5>COOL KIDS - New England IPA - 6,5% 🍍🍑</h5>
                        <p>On avait pas encore brassé de NEIPA, c'est maintenant chose faite ! 🍻</p>
                        <p>Aux houblons Citra, Citra Cryo, Azacca, Azacca Cryo, El Dorado — une bière juteuse et soyeuse avec une explosion d'arômes de fruits exotiques, ananas et fruits à noyau en bouche</p>
                    </div>  
                    <div class=\"col-4\">
                        <img src=\"{{ asset('img/cool_kids.jpg') }}\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>18 mai 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-60 p30\">
                        <h5>AMOUR ACIDE - Sour abricot cassis - 6,4% 🍑🫐</h5>
                        <p>Ok ça c'est la petite nouvelle qui va t'accompagner cet été ☀️</p>
                        <p>une bière sure avec du fruit en masse = un petit jus acidulé parfait pour les grosses chaleurs.</p>
                    </div>  
                    <div class=\"col-4\">
                        <img src=\"{{ asset('img/amour_acide.jpg') }}\" alt=''>
                    </div>
                </div>
            </div>
            <div>
                <h4>17 février 2022</h4>
                <div class=\"flex\">
                    <div class=\"col-60 p30\">
                        <h5>LA GARRIGUE - American Pale Ale au romarin - 5,5% 🌿</h5>
                        <p>🔥 Nouveauté 🔥</p>
                        <p>4 houblons (Amarillo, Simcoe, Cascade, Citra) et une touche de romarin : ton corps te dit merci !</p>
                    </div>  
                    <div class=\"col-4\">
                        <img src=\"{{ asset('img/la_garrigue.jpg') }}\" alt=''>
                    </div>
                </div>
            </div>
        </div>
         <div id=\"projets\">
            <h3>Projets</h3>
            <div>
                <h4>Demain près de chez toi!</h4>
                <h5>De la SAUVAGE à la pression? 🤘🍻</h5>
                <p>Tu peux déjà en trouver sur Rennes & on a fait le plein de fûts chez Soofût aujourd’hui pour les nouveautés de la semaine prochaine!</p>
                <p>Dis nous dans quel bar caché dans ton territoire français, tu veux en boire?</p>      
                <div class=\"flex\" id=\"formProjet\">
                    {{ form_start(formProjet) }}
                        {{ form_row(formProjet.name) }}
                        {{ form_row(formProjet.city) }}
                        {{ form_row(formProjet.email) }}
                        
                         <input href=\"{{ path('app_shop') }}\" 
                         type=\"submit\" class=\"submit\" value=\"GO\">
                    {{ form_end(formProjet) }}
                    <div>
                        <img src=\"{{ asset('img/futs.jpg') }}\" alt=''>
                    </div>
                </div>
                <p>On les contacte et on te tiens au courant! &#128540</p>
            </div>
        </div>
         <div id=\"pressRessource\">
            <h3>Articles de presse</h3>
            <div class=\"flex wrap text-center\">
                <div>
                    <h5>Ouest France</h5>
                    <p>Publié le 22/04/2022</p>
                    <a href=\"https://www.ouest-france.fr/sante/addictions/alcool/dans-cette-nouvelle-brasserie-pres-de-rennes-ils-mettent-leur-biere-artisanale-en-canette-f520bc6e-bccd-11ec-a567-e86cf18d060a\" target=\"blank\"><img src=\"{{ asset('img/ouest_france_22_04_22.jpg') }}\" alt=''></a>   
                </div>
                <div>
                    <h5>Actu Rennes</h5>
                    <p>Publié le 05/08/2022</p>
                    <a href=\"https://actu.fr/bretagne/rennes_35238/rennes-trois-microbrasseries-locales-a-re-decouvrir-dans-la-capitale-bretonne_52919078.html\" target=\"blank\"><img src=\"{{ asset('img/actu_rennes_05_08_22.jpg') }}\" alt=''></a>   
                </div>
                <div>
                    <h5>Actu Rennes</h5>
                    <p>Publié le 12/05/2021</p>
                    <a href=\"https://actu.fr/bretagne/saint-jacques-de-la-lande_35281/brasserie-sauvage-la-nouvelle-biere-rennaise-locale-bio-et-en-canette_41790353.html\" target=\"blank\"><img src=\"{{ asset('img/actu_rennes_12_05_21.jpg') }}\" alt=''></a>   
                </div>
            </div>
        </div>
         <div id=\"gallerie\">
            <h3>Gallerie</h3>
            <div class=\"flex wrap\">
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2410.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2401.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2393.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2391.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2373.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2310.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2208.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2187.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/2178.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1916.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1793.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1745.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1559.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1535.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1494.jpg') }}\" alt=''>
                <img class=\"imgHover\" src=\"{{ asset('img/imgGallerie/1465.jpg') }}\" alt=''>
            </div>
        </div>
    </div>
</div>", "actuality/actuality.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/actuality/actuality.html.twig");
    }
}
