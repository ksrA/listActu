<?php

/* default/index.html.twig */
class __TwigTemplate_efc4c4bcc81a35ccf97c2c29d54a1f5bc0e38769d5a496e10afe72b630f13ef1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Affichage de la liste des actualités, contenu avec les 100 premiers caractères -->

    <div class=\"container backColor actu-margin\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listActu"]) || array_key_exists("listActu", $context) ? $context["listActu"] : (function () { throw new Twig_Error_Runtime('Variable "listActu" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 10
            echo "            <div class=\"row justify-content-start\">
                <div class=\"col-12\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display-actu", array("id" => twig_get_attribute($this->env, $this->source, $context["actu"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "title", array()), "html", null, true);
            echo "</h3></a>
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["actu"], "content", array())), 0, 100), "html", null, true);
            echo "[...]</p>
                </div>
            </div>
            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  76 => 18,  65 => 13,  59 => 12,  55 => 10,  51 => 9,  45 => 5,  39 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

    <!-- Affichage de la liste des actualités, contenu avec les 100 premiers caractères -->

    <div class=\"container backColor actu-margin\">
        {% for actu in listActu %}
            <div class=\"row justify-content-start\">
                <div class=\"col-12\">
                    <a href=\"{{ path('display-actu', {'id' : actu.id}) }}\"><h3>{{ actu.title }}</h3></a>
                    <p>{{ actu.content|striptags|slice(0, 100) }}[...]</p>
                </div>
            </div>
            <hr>
        {% endfor %}
    </div>
{% endblock %}

{% block stylesheets %}
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/default/index.html.twig");
    }
}
