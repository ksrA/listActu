<?php

/* security/login.html.twig */
class __TwigTemplate_8a10f80ffdaaf8ff9363516177a34cf9d7f5393afb8c49f4d69997cc206117e2 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 40
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 55
        echo "
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  108 => 55,  100 => 45,  95 => 43,  92 => 42,  86 => 40,  84 => 39,  81 => 38,  72 => 30,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <!-- formulaire de connection admin -->
   <!--  <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div id=\"containerBack\" class=\"row align-items-center\">
                <form action=\"{{ path('login') }}\" method=\"post\">
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
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                </form>
            </div>
        </div>
    </div> -->

    {# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>
{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/security/login.html.twig");
    }
}
