<?php

/* sil14VitrineBundle:Default:authentification.html.twig */
class __TwigTemplate_bf5cb2f01f3cfa29c2a577276c88f08441cff9345a29df3231ad8396074d452f extends Twig_Template
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
        echo "
        ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 8
        echo "        <form class=\"form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("auth_check");
        echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label class=\"sr-only\" for=\"username\">Login :</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group col-md-6\">
                    <label class=\"sr-only\" for=\"password\">Mot de passe :</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />
                </div>
            </div>
            <div class=\"form-group\">
                <input type=\"hidden\" name=\"_target_path\" value=\"/accueil\" />
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t</form>
    



";
        // line 29
        echo "  
 </div>

";
    }

    public function getTemplateName()
    {
        return "sil14VitrineBundle:Default:authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 29,  50 => 12,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
