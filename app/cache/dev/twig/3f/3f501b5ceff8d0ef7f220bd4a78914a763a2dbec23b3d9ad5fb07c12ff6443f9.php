<?php

/* security/login.html.twig */
class __TwigTemplate_34c88a9b460f591810504c97198b29c22cefcdd94a53da50afdb0ca02bb278a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container center_div backColor\">
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\"></br>
        <h3 class=\"actu-title\">Connexion</h3>
            <div class=\"form-group\">
                </br>
                <label for=\"username\">User</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter Username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter Password\" name=\"_password\">
            </div>
            <button type=\"submit\" class=\"btn btn-info\">Login</button>
        </form>
        ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "            <b>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</b>
        ";
        }
        // line 22
        echo "    </div>

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
        return array (  75 => 22,  69 => 20,  67 => 19,  56 => 11,  48 => 6,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container center_div backColor\">
        <form action=\"{{ path('login') }}\" method=\"post\"></br>
        <h3 class=\"actu-title\">Connexion</h3>
            <div class=\"form-group\">
                </br>
                <label for=\"username\">User</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter Username\" name=\"_username\" value=\"{{ last_username }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter Password\" name=\"_password\">
            </div>
            <button type=\"submit\" class=\"btn btn-info\">Login</button>
        </form>
        {% if error %}
            <b>{{ error.messageKey|trans(error.messageData, 'security') }}</b>
        {% endif %}
    </div>

{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/security/login.html.twig");
    }
}
