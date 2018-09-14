<?php

/* :default:index.html.twig */
class __TwigTemplate_7c8b72ded2e74a743fd3c607ef9d6aff170121bf31e21433902217c29558c4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <header>
    <nav id=\"nav\" class=\"navbar navbar-expand navbar-dark\">
            <div id=\"menu\" class=\"navbar-collapse\" id=\"navbarsExample03\">
                <ul class=\"navbar-nav\">
                    <li id=\"menubtn\" class=\"nav-item menubtn-home\">
                        <a id=\"lien\" class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"fa fa-home fa-2x\" aria-hidden=\"true\"></i>
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                    <li id=\"menubtn\" class=\"nav-item menubtn-actu\">
                        <a id=\"lien\" class=\"nav-link\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-actu");
        echo "\">Créer une actualité</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <article>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listActu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 24
            echo "            <div>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display-actu", array("id" => $this->getAttribute($context["actu"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "title", array()), "html", null, true);
            echo "</h3></a>
                <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "content", array()), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </article>
";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  80 => 29,  71 => 26,  65 => 25,  62 => 24,  58 => 23,  47 => 15,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/default/index.html.twig");
    }
}
