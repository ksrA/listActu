<?php

/* security/login.html.twig */
class __TwigTemplate_e28e3b0a0d6819fb31867d7a8f81d55ed24ad3751e9005b355a2eb7f4d1aa613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- formulaire de connection admin -->
   <!--  <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div id=\"containerBack\" class=\"row align-items-center\">
                <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <div id=\"title\">
                            <div class='console-container'>
                            <span class=\"display-3\" id='text'></span>
                            </div>   
                    </div>
                    <div class=\"container\" id=\"formContainer\">
                         idnetifiant input 
                        <div>
                            <label for=\"_username\">Nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\"/>
                        </div>
                         password input 
                        <div>
                            <label for=\"_password\">Mot de passe</label>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"password\" />
                        </div>
                        button connection 
                        <div>
                            <button id=\"btnlogin\" type=\"submit\" class=\"btn btn-block\">Connexion</button>
                        </div>
                    </div>
                     security protocol 
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                </form>
            </div>
        </div>
    </div> -->

    ";
        // line 38
        echo "
";
        // line 39
        if (($context["error"] ?? null)) {
            // line 40
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 42
        echo "
<form action=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 55
        echo "
    <button type=\"submit\">login</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 55,  91 => 45,  86 => 43,  83 => 42,  77 => 40,  75 => 39,  72 => 38,  63 => 30,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/security/login.html.twig");
    }
}
