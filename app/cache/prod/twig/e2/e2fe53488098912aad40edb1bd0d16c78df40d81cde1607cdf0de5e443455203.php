<?php

/* actu/actu.html.twig */
class __TwigTemplate_24781168bac189619da79f34bc2259ccb436a40d792ad887ecf30d1f1a97310b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actu/actu.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actu/actu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <header>
        <nav id=\"nav\" class=\"navbar navbar-expand navbar-dark\">
            <div id=\"menu\" class=\"navbar-collapse\" id=\"navbarsExample03\">
                <ul class=\"navbar-nav\">
                    <li id=\"menubtn\" class=\"nav-item menubtn-home\">
                        <a id=\"lien\" class=\"nav-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                            Accueil
                        </a>
                    </li>
                    <li id=\"menubtn\" class=\"nav-item menubtn-actu\">
                        <a id=\"lien\" class=\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-actu");
        echo "\">Créer une actualité</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <article>
        <div>
            <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "title", array()), "html", null, true);
        echo "</h3>
            <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "dateActuality", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "content", array()), "html", null, true);
        echo "</p>
            <h4>Section commentaire</h4></br>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 27
            echo "                    <ul>
                        <li>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "pseudo", array()), "html", null, true);
            echo "</li>
                        <li>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</li>
                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
        <div>
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display-actu", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <label for=\"pseudo\">Pseudo :</label>
                <input type=\"text\" id=\"pseudo\" name=\"pseudo\" />

                <textarea name=\"comment\" rows=\"10\" cols=\"50\">Votre Commentaire..</textarea>
                <button type=\"submit\">Envoyer commentaire</button>
            </form>
        </div>
    </article>
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
        return array (  103 => 34,  99 => 32,  90 => 29,  86 => 28,  83 => 27,  79 => 26,  74 => 24,  70 => 23,  66 => 22,  55 => 14,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
    <header>
        <nav id=\"nav\" class=\"navbar navbar-expand navbar-dark\">
            <div id=\"menu\" class=\"navbar-collapse\" id=\"navbarsExample03\">
                <ul class=\"navbar-nav\">
                    <li id=\"menubtn\" class=\"nav-item menubtn-home\">
                        <a id=\"lien\" class=\"nav-link\" href=\"{{ path('homepage') }}\">
                            Accueil
                        </a>
                    </li>
                    <li id=\"menubtn\" class=\"nav-item menubtn-actu\">
                        <a id=\"lien\" class=\"nav-link\" href=\"{{ path('new-actu') }}\">Créer une actualité</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <article>
        <div>
            <h3>{{ actu.title }}</h3>
            <p>{{ actu.dateActuality|date('d/m/Y') }}</p>
            <p>{{ actu.content }}</p>
            <h4>Section commentaire</h4></br>
                {% for comment in actu.comments %}
                    <ul>
                        <li>{{comment.pseudo}}</li>
                        <li>{{comment.comment}}</li>
                    </ul>
                {% endfor %}
        </div>
        <div>
            <form action=\"{{ path('display-actu', {'id' : actu.id}) }}\" method=\"post\">
                <label for=\"pseudo\">Pseudo :</label>
                <input type=\"text\" id=\"pseudo\" name=\"pseudo\" />

                <textarea name=\"comment\" rows=\"10\" cols=\"50\">Votre Commentaire..</textarea>
                <button type=\"submit\">Envoyer commentaire</button>
            </form>
        </div>
    </article>
{% endblock %}", "actu/actu.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/actu/actu.html.twig");
    }
}
