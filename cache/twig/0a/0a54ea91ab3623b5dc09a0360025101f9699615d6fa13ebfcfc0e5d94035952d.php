<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/03.ajouter-une-team */
class __TwigTemplate_598928c8dddf2ded893c75e0be2b379778fdb6abbaad99733188fe1be5ddce60 extends Twig_Template
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
    <p>Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes logos (en création).
</p>

<br>
<b> Merci de bien suivre ces règles avant de soumettre une Team.</b>
<ul>
   <li> - Vérifiez bien qu'elle n'est pas déjà présente sur ma liste !</li>
   <li> - La Team doit être encore en vie.</li>
   <li> - Elle doit avoir un flux RSS qui annonce ses sorties (et uniquement les sorties !)</li>
   <li> - La Team n'est pas obligé de faire uniquement des projets Asiatiques.</li>
</ul>
Si la Team que vous souhaitez ajouter n'a pas de RSS ou de Twitter, elle ne peut pas être ajoutée. Pourquoi ne pas essayer de leur demander de mettre en place un Flux RSS ? 




  <br><p>Merci aussi de me donner toute information susceptible de me faciliter la tâche. </p>   
<p>  <b>Exemple :</b> le mot de passe pour la partie VIP pour que je puisse voir tous les projets. Ou encore un accès temporaire à un forum privé etc.</p>




<br><p><b>ATTENTION -</b> Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela j'ai besoin de vérifier que le flux rss est ok ! S'il ne l'est pas, alors seule une fiche sera créée.
    
</p>
 <a class=\"waves-effect waves-light btn right btn-small\" href=\"";
        // line 28
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/ajouter-une-team\"><i class=\"material-icons left\">add</i>Ajouter une Team</a>
  </div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/03.ajouter-une-team";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  19 => 1,);
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
    <p>Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes logos (en création).
</p>

<br>
<b> Merci de bien suivre ces règles avant de soumettre une Team.</b>
<ul>
   <li> - Vérifiez bien qu'elle n'est pas déjà présente sur ma liste !</li>
   <li> - La Team doit être encore en vie.</li>
   <li> - Elle doit avoir un flux RSS qui annonce ses sorties (et uniquement les sorties !)</li>
   <li> - La Team n'est pas obligé de faire uniquement des projets Asiatiques.</li>
</ul>
Si la Team que vous souhaitez ajouter n'a pas de RSS ou de Twitter, elle ne peut pas être ajoutée. Pourquoi ne pas essayer de leur demander de mettre en place un Flux RSS ? 




  <br><p>Merci aussi de me donner toute information susceptible de me faciliter la tâche. </p>   
<p>  <b>Exemple :</b> le mot de passe pour la partie VIP pour que je puisse voir tous les projets. Ou encore un accès temporaire à un forum privé etc.</p>




<br><p><b>ATTENTION -</b> Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela j'ai besoin de vérifier que le flux rss est ok ! S'il ne l'est pas, alors seule une fiche sera créée.
    
</p>
 <a class=\"waves-effect waves-light btn right btn-small\" href=\"{{ home_url }}/ajouter-une-team\"><i class=\"material-icons left\">add</i>Ajouter une Team</a>
  </div>", "@Page:C:/wamp64/www/teamsreleases/user/pages/03.ajouter-une-team", "");
    }
}
