<?php

/* actu/actu.html.twig */
class __TwigTemplate_0a49a0719b52037047bdcfe43bd727dfd973571815ffbe983a7b3364bc472e1a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actu/actu.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actu/actu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container actu-align backColor\">

            <!-- Affichage de l'article --> 
            
            </br>
            <h3 class=\"actu-title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 9, $this->source); })()), "title", array()), "html", null, true);
        echo "</h3>
            <p>De ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 10, $this->source); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 10, $this->source); })()), "dateActuality", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            <p class=\"content-actu\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 11, $this->source); })()), "content", array()), "html", null, true);
        echo "</p>
            <hr>


            <!-- Section commentaire -->

            <button type=\"button\" class=\"btn btn-info\" onclick=\"myFunction()\">Un avis ?</button>
            <small><i>  ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 18, $this->source); })()), "numberComment", array()), "html", null, true);
        echo " commentaires..</i></small></br></br>
            <div id=\"comment-section\">
                <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display-actu", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 20, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" placeholder=\"Pseudo\" required/></br></br>
                    <textarea name=\"comment\" rows=\"5\" cols=\"70\" placeholder=\"Write your comment\" required></textarea></br>
                    <button type=\"submit\" class=\"btn btn-info\">Add comment</button></br>
                </form>
                <hr>
                <div>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new Twig_Error_Runtime('Variable "actu" does not exist.', 27, $this->source); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 28
            echo "                    <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", array()), "html", null, true);
            echo "</b>
                    <p><i>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", array()), "html", null, true);
            echo "</i></p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
            </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "actu/actu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  114 => 36,  104 => 31,  96 => 29,  91 => 28,  87 => 27,  77 => 20,  72 => 18,  62 => 11,  56 => 10,  52 => 9,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container actu-align backColor\">

            <!-- Affichage de l'article --> 
            
            </br>
            <h3 class=\"actu-title\">{{ actu.title }}</h3>
            <p>De {{actu.author}}, le {{ actu.dateActuality|date('d/m/Y') }}</p>
            <p class=\"content-actu\">{{ actu.content }}</p>
            <hr>


            <!-- Section commentaire -->

            <button type=\"button\" class=\"btn btn-info\" onclick=\"myFunction()\">Un avis ?</button>
            <small><i>  {{ actu.numberComment }} commentaires..</i></small></br></br>
            <div id=\"comment-section\">
                <form action=\"{{ path('display-actu', {'id' : actu.id}) }}\" method=\"post\">
                    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" placeholder=\"Pseudo\" required/></br></br>
                    <textarea name=\"comment\" rows=\"5\" cols=\"70\" placeholder=\"Write your comment\" required></textarea></br>
                    <button type=\"submit\" class=\"btn btn-info\">Add comment</button></br>
                </form>
                <hr>
                <div>
                    {% for comment in actu.comments %}
                    <b>{{comment.pseudo}}</b>
                    <p><i>{{comment.comment}}</i></p>
                    {% endfor %}
                </div>
            </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('public/js/script.js') }}\"></script>
{% endblock %}
", "actu/actu.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/actu/actu.html.twig");
    }
}
