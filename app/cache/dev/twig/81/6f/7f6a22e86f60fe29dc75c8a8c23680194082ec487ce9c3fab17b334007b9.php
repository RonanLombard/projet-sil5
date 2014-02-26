<?php

/* sil14VitrineBundle::layoutAdmin.html.twig */
class __TwigTemplate_816f7f6a22e86f60fe29dc75c8a8c23680194082ec487ce9c3fab17b334007b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Administration</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil14vitrine/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil14vitrine/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <header>
            <ul class=\"nav nav-tabs nav-justified\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_backOffice");
        echo "\">Index</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_client");
        echo "\">Utilisateurs</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_product");
        echo "\">Produits</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_category");
        echo "\">Categories</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_commande");
        echo "\">Commande</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span></a></li>
            </ul>
        </header>
        
        <div class=\"content\">
            <div class=\"symfony-content\">
                ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>
        </div>        
        ";
        // line 28
        $this->env->loadTemplate("sil14VitrineBundle::footer.html.twig")->display($context);
        // line 29
        echo "        <script src=\"https://code.jquery.com/jquery.js\"></script>
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil14vitrine/js/bootstrap.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </body>
</html>

";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "                ";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  88 => 24,  79 => 30,  76 => 29,  74 => 28,  70 => 26,  68 => 24,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  27 => 7,  20 => 2,  31 => 8,  28 => 4,);
    }
}
