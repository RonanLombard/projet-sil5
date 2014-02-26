<?php

/* sil14VitrineBundle:Default:produit.html.twig */
class __TwigTemplate_7f0504743601ed77441a2fd2d831d9645a1c17bd1e15c2bc4be7746c36afa2d3 extends Twig_Template
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
        echo "    <div>
       <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil14_vitrine_produitCat", array("idcat" => $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "category"), "id"))), "html", null, true);
        echo "\"><- Retour</a>
    </div>
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "name"), "html", null, true);
        echo "</h1>
    
    <div class=\"prodrender\">
        <div class=\"prod prod_left\" >
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sil14vitrine/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . ".png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"prod_right\">
            <table>
                <tr>
                    <th>Prix : </th>
                    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "price"), "html", null, true);
        echo " €</td>
                </tr>
                <tr>
                    <th>Description : </th>
                    <td><div class=\"prod_desc\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
        echo "</div></td>
                </tr>
                <tr>
                    <td><div>Il reste ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock"), "html", null, true);
        echo " articles</div></td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil14_vitrine_addPanier", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), "nb" => 1)), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\"> Ajouter au panier </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle:Default:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  70 => 25,  64 => 22,  57 => 18,  46 => 12,  39 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
