<?php

/* sil14VitrineBundle:Default:validationPanier.html.twig */
class __TwigTemplate_dc693887d08cf84fea5d38db3db66e06b9e75bd67f9573247a772f3835405069 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Récapitulatif de votre commande</h1>
    <table class=\"clPanier\">
        <tr>
            <th></th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product"), "price"), "html", null, true);
            echo " €</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "qte"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </table>
    <p>Montant total de votre commande du <b>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date"), "d-m-Y"), "html", null, true);
        echo "</b> n° <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"), "html", null, true);
        echo "</b> : <b>";
        echo twig_escape_filter($this->env, (isset($context["prixtotal"]) ? $context["prixtotal"] : $this->getContext($context, "prixtotal")), "html", null, true);
        echo "€</b></p>
";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle:Default:validationPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  64 => 18,  55 => 15,  51 => 14,  47 => 13,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
