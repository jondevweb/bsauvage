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

/* home/mentions.html.twig */
class __TwigTemplate_eebd2a5aaafab0945f91d4726b00c429 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/mentions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div id=\"brasseriePresent\">
            <div>
            <h2>1. PRÉSENTATION DU SITE.</h2>
                <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site www.brasseriesauvage.online l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>

                <p>Propriétaire : SAUVAGE</p>
                <p>Siège de l’entreprise : 3 Rue Jacqueline Auriol, 35136 Saint-Jacques-de-la-Lande</p>
                <p>SIRET : ??????????????</p>
                <p>Responsable publication : M Jonathan COURPRON</p>
                <p>Le responsable publication est une personne physique ou une personne morale.</p>
                <p>Réalisé par : Jonathan COURPRON</p>
                <p>Hébergeur : Hostinger UAB, Jonavos g. 60C, 44192 Kaunas, Lituanie</p>

                <p>Photos : https://www.instagram.com/brasserie_sauvage/?hl=fr</p>
            </div>
            <div>
                <h2>2. CONDITIONS GÉNÉRALES D’UTILISATION DU SITE ET DES SERVICES PROPOSÉS.</h2>
                <p>L’utilisation du site www.brasseriesauvage.online implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. </p>
                <p>Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site www.brasseriesauvage.online sont donc invités à les consulter de manière régulière.</p>

                <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par l’entreprise, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>

                <p>Le site www.brasseriesauvage.online est mis à jour régulièrement par l’entreprise. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
            </div>
            <div>
                <h2>3. DESCRIPTION DES SERVICES FOURNIS.</h2>
                <p>Le site www.brasseriesauvage.online a pour objet de fournir une information concernant l’ensemble des activités de l’entreprise.</p>

                <p>L’entreprise s’efforce de fournir sur le site www.brasseriesauvage.online des informations aussi précises que possible. Toutefois, elle ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

                <p>Tous les informations indiquées sur le site www.brasseriesauvage.online sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site www.brasseriesauvage.online ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
            </div>
            <div>
                <h2>4. LIMITATIONS CONTRACTUELLES SUR LES DONNÉES TECHNIQUES.</h2>
                <p>Le site utilise la technologie JavaScript.</p>

                <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.</p>
            </div>
            <div>
                <h2>5. PROPRIÉTÉ INTELLECTUELLE ET CONTREFAÇONS.</h2>
                <p>L’entreprise est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>

                <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’entreprise.</p>

                <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
            </div>
            <div>

            <h2>6. LIMITATIONS DE RESPONSABILITÉ.</h2>
                <P>L’entreprise ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.brasseriesauvage.online, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>

                <p>L’entreprise ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site www.brasseriesauvage.online.</p>

                <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. L’entreprise se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.</p> <p>Le cas échéant, L’entreprise se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
            </div>
            <div>
                <h2>7. GESTION DES DONNÉES PERSONNELLES.</h2>
                <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>

                <p>A l’occasion de l’utilisation du site www.brasseriesauvage.online, peuvent êtres recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site www.brasseriesauvage.online le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.</p>

                <p>En tout état de cause l’entreprise ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site www.brasseriesauvage.online.</p> <p>L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie.</p> <p>Il est alors précisé à l’utilisateur du site www.brasseriesauvage.online l’obligation ou non de fournir ces informations.</p>

                <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.<p>

                <p>Aucune information personnelle de l’utilisateur du site www.brasseriesauvage.online n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat de l’entreprise et de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site www.brasseriesauvage.online.</P>

                <p>Le site n’est pas déclaré à la CNIL car il ne recueille pas d’informations personnelles.</p>

                <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
            </div>
            <div>
                <h2>8. LIENS HYPERTEXTES ET COOKIES.</h2>
                <p>Le site www.brasseriesauvage.online contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de l’entreprise. Cependant, l’entreprise n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>

                <p>La navigation sur le site www.brasseriesauvage.online est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>

                <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>

                <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
                Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.</p>
                <p>Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies.</p>
                <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés.</p> <p>Dans la section « Confidentialité », cliquez sur Paramètres de contenu. Dans la section « Cookies », vous pouvez bloquer les cookies.</p>
                <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés.</p> <p>Dans la section « Confidentialité », cliquez sur préférences. Dans l’onglet « Confidentialité », vous pouvez bloquer les cookies.</p>
            </div>
            <div>
                <h2>9. DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION.</h2>
                <p>Tout litige en relation avec l’utilisation du site www.brasseriesauvage.online est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>            
            </div>
            <div>
                <h2>10. LES PRINCIPALES LOIS CONCERNÉES.</h2>
                <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.</p>

                <p>Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.</p>
            </div>
            <div>
                <h2>11. LEXIQUE.</h2>
                <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.

                L’entreprise : le propriétaire du présent site, cité en introduction

                Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/mentions.html.twig", "/home/u949507161/domains/brasseriesauvage.online/templates/home/mentions.html.twig");
    }
}
