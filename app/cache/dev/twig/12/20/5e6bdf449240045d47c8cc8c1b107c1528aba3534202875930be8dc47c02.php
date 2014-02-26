<?php

/* sil14VitrineBundle::layout.html.twig */
class __TwigTemplate_12205e6bdf449240045d47c8cc8c1b107c1528aba3534202875930be8dc47c02 extends Twig_Template
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
        <title>e-Vend</title>
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
        <header class=\"navbar navbar-static-top bs-docs-nav\" role=\"banner\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_homepage");
        echo "\" class=\"navbar-brand\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil14vitrine/images/naincouleur.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"25\"> e-Vend</a>
            </div>
            <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
              <ul class=\"nav navbar-nav\">
                <li>
                  <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_catalogue");
        echo "\">Catalogue</a>
                </li>
                <li class=\"active\">
                  <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_mentions");
        echo "\">Mentions</a>
                </li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sil14_vitrine_contenuPanier");
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Panier</a></li>
                
                ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 35
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sil14_vitrine_mesCommandes");
            echo "\"><span class=\"glyphicon glyphicon-check\"></span> Commandes</a></li>
                ";
        }
        // line 37
        echo "                
                ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sil14_vitrine_backOffice");
            echo "\"><span class=\"glyphicon glyphicon-cog\"></span> Admin</a></li>
                ";
        }
        // line 41
        echo "                    
                ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 43
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a></li>
                ";
        } else {
            // line 45
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sil14_vitrine_auth");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a></li>
                ";
        }
        // line 47
        echo "              </ul>
            </nav>
          </div>
        </header>
        <div class=\"content\">

            <div class=\"symfony-content\">
                ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "            </div>
        </div>        
        ";
        // line 58
        $this->env->loadTemplate("sil14VitrineBundle::footer.html.twig")->display($context);
        // line 59
        echo "        <script src=\"https://code.jquery.com/jquery.js\"></script>
        <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil14vitrine/js/bootstrap.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </body>
</html>

";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "                ";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  139 => 54,  130 => 60,  127 => 59,  125 => 58,  121 => 56,  119 => 54,  110 => 47,  104 => 45,  98 => 43,  96 => 42,  93 => 41,  87 => 39,  85 => 38,  82 => 37,  76 => 35,  74 => 34,  69 => 32,  62 => 28,  56 => 25,  46 => 20,  31 => 8,  27 => 7,  20 => 2,);
    }
}
