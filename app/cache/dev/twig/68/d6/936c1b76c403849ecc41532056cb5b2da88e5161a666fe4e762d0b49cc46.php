<?php

/* sil14VitrineBundle:Default:produitCat.html.twig */
class __TwigTemplate_68d6936c1b76c403849ecc41532056cb5b2da88e5161a666fe4e762d0b49cc46 extends Twig_Template
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
        echo "  
    <div>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_catalogue");
        echo "\"><- Retour</a>
    </div>
    <div class=\"container\">
        <h1>Catalogue</h1>

        <div class=\"row\">
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produitCat"]) ? $context["produitCat"] : $this->getContext($context, "produitCat")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil14_vitrine_produit", array("idprod" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\">
                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sil14vitrine/images/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id")) . ".png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\">
                        <div class=\"caption\">
                            <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</h3>
                            <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo " €</p>
                        </div>
                    </div>  
                </div>
            </a>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle:Default:produitCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  65 => 19,  61 => 18,  54 => 16,  47 => 13,  43 => 12,  34 => 6,  28 => 4,);
    }
}
