<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/02.teams */
class __TwigTemplate_afc6c478fcab9d96efaf8305bc92b75b5e401458925cbf0a6d522a54ad2ce872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"card amber lighten-5\">
  <div class=\"card-content\" style=\"line-height: 18px;\">
  \t<a class=\"waves-effect waves-light btn right btn-small\" href=\"";
        // line 3
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/ajouter-une-team\"><i class=\"material-icons left\">add</i>Ajouter une Team</a>
    <p>
    Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes logos (en création).
</p>
    <br><br>
    <p>
    
    ATTENTION : Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela j'ai besoin de vérifier que le flux rss est ok ! S'il ne l'est pas, alors seule une fiche sera créée.
    
</p>
 
  </div>
</div>


<div class=\"gap\"></div>
<div class=\"center-align\">
<a class=\"waves-effect waves-light btn btn-large\" href=\"";
        // line 20
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams/\">TOUT</a> <a class=\"waves-effect waves-light btn btn-large teal lighten-1\" href=\"";
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams/type:Dramas\">Dramas</a> <a class=\"waves-effect waves-light btn btn-large red darken-4\" href=\"";
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams/type:Films\">Films</a> <a class=\"waves-effect waves-light btn btn-large  light-blue\" href=\"";
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams/type:Animes\">Animes</a> <a class=\"waves-effect waves-light btn btn-large amber lighten-1\" href=\"";
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams/type:Karaokes\">Karaokes</a> <a class=\"waves-effect waves-light btn btn-large light-green lighten-1\" href=\"";
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams/type:Mangas\">Mangas</a>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card amber lighten-5\">
  <div class=\"card-content\" style=\"line-height: 18px;\">
  \t<a class=\"waves-effect waves-light btn right btn-small\" href=\"{{ home_url }}/ajouter-une-team\"><i class=\"material-icons left\">add</i>Ajouter une Team</a>
    <p>
    Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes logos (en création).
</p>
    <br><br>
    <p>
    
    ATTENTION : Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela j'ai besoin de vérifier que le flux rss est ok ! S'il ne l'est pas, alors seule une fiche sera créée.
    
</p>
 
  </div>
</div>


<div class=\"gap\"></div>
<div class=\"center-align\">
<a class=\"waves-effect waves-light btn btn-large\" href=\"{{ home_url }}/teams/\">TOUT</a> <a class=\"waves-effect waves-light btn btn-large teal lighten-1\" href=\"{{ home_url }}/teams/type:Dramas\">Dramas</a> <a class=\"waves-effect waves-light btn btn-large red darken-4\" href=\"{{ home_url }}/teams/type:Films\">Films</a> <a class=\"waves-effect waves-light btn btn-large  light-blue\" href=\"{{ home_url }}/teams/type:Animes\">Animes</a> <a class=\"waves-effect waves-light btn btn-large amber lighten-1\" href=\"{{ home_url }}/teams/type:Karaokes\">Karaokes</a> <a class=\"waves-effect waves-light btn btn-large light-green lighten-1\" href=\"{{ home_url }}/teams/type:Mangas\">Mangas</a>
</div>", "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams", "");
    }
}
