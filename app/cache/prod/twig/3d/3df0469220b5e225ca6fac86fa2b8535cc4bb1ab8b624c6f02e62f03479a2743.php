<?php

/* :actu:new-actu.html.twig */
class __TwigTemplate_d2ac9986ee732c1f304f061bfd0fd4be94f84d69f84b115cc690c31c2964cbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":actu:new-actu.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <a id=\"logout\" class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Deconnexion</a>
        <a id=\"homepage\" class=\"nav-link\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
        ";
        // line 6
        if ((isset($context["saved"]) || array_key_exists("saved", $context))) {
            // line 7
            echo "                <p>Actualité enregistrée en BDD!</p>
        ";
        } else {
            // line 9
            echo "                <b>Formulaire creation d'actualité</b>
                ";
            // line 10
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                ";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                ";
            // line 12
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
        ";
        }
    }

    public function getTemplateName()
    {
        return ":actu:new-actu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  53 => 11,  49 => 10,  46 => 9,  42 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":actu:new-actu.html.twig", "/Applications/MAMP/htdocs/entretien_project/app/Resources/views/actu/new-actu.html.twig");
    }
}
