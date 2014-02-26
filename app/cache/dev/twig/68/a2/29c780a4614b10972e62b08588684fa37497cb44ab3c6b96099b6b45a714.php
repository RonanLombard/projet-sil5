<?php

/* sil14VitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_68a229c780a4614b10972e62b08588684fa37497cb44ab3c6b96099b6b45a714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil14VitrineBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sil14VitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Mention Légales</h1>
    <div>
    Ce site est l’entière propriété de Ronan Lombard.
    
    <p>Ronan Lomabrd
    20 rue Edouard Vaillant
    38100 Grenoble
    Tél. : 06 59 27 17 09</p>

    <p>TRAITEMENT DES DONNEES PERSONNELLES
    Les informations vous concernant, récoltées dans les formulaires disponibles sur ce site, sont destinées à notre établissement.
    En conformité avec la loi n°787-17 du 16 juin 1978 (CNIL), vous pouvez par simple courrier ou e-mail, nous signaler toute erreur ou tout changement concernant les éléments que vous nous fournissez, ou vous pouvez demander à ne plus figurer sur notre fichier informatique.
    DROIT DE REPONSE PAR COURRIER A :
    Ronan Lomabrd
    20 rue Edouard Vaillant
    38100 Grenoble</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle:Default:mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
