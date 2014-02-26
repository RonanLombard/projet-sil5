<?php

/* sil14VitrineBundle:Default:contenuPanier.html.twig */
class __TwigTemplate_89376ea9b87499e389ae86a0b5f9d663c863a4f2d1797c60a2ec76cab46ad125 extends Twig_Template
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
        echo "<h1>Panier</h1>
<table class=\"clPanier\">
    <tr>
        <th></th>
        <th>Prix</th>
        <th>Quantité</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "price"), "html", null, true);
            echo " €</td>
            <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil14_vitrine_delPanier", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "id"), "nb" => 1)), "html", null, true);
            echo "\" class=\"btn\">-</a>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "qte"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil14_vitrine_addPanier", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "id"), "nb" => 1)), "html", null, true);
            echo "\" class=\"btn\">+</a></td>
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil14_vitrine_remPanier", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "id"), "nb" => 1)), "html", null, true);
            echo "\" class=\"btn\"><span class=\"glyphicon glyphicon-trash\"></span></a>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_validationPanier");
        echo "\" class=\"btn btn-primary\">Passer la commande</a>
";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle:Default:contenuPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  72 => 20,  63 => 17,  55 => 16,  51 => 15,  47 => 14,  44 => 13,  40 => 12,  31 => 5,  28 => 4,);
    }
}
