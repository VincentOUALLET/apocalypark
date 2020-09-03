<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* attraction/index.html.twig */
class __TwigTemplate_e43a1c76061a2cf2b3f17b221f7ef88f46aa8c4284bddf5797768ae374e58889 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "attraction/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "attraction/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "attraction/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Attraction index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"containerBoxes rounded mt-5 row justify-content-center\">
        <div class=\"p-5\">

        <h2>Nos attractions</h2>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attraction_new");
        echo "\" class=\"btn btn-warning mt-5\">Créer une nouvelle attraction</a>
        </div>
    </div>
    <div class=\"row justify-content-around\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attractions"]) || array_key_exists("attractions", $context) ? $context["attractions"] : (function () { throw new RuntimeError('Variable "attractions" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["attraction"]) {
            // line 15
            echo "            <div class=\"containerBoxes rounded my-5 col-lg-5 col-xs-12 \">
                <div class=\"p-4 row flex-column align-items-center\">
                    <h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attraction"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h3>
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attraction/" . twig_get_attribute($this->env, $this->source, $context["attraction"], "getFeaturedImage", [], "method", false, false, false, 18))), "html", null, true);
            echo "\"
                        alt=\"image du film ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attraction"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"my-5\"
                        style=\"max-height: 300px; max-width: 300px\">
                    <p>Créée le : ";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["attraction"], "updatedAt", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attraction"], "updatedAt", [], "any", false, false, false, 21), "d-m-y"), "html", null, true))) : (print ("")));
            echo "</p>
                    <p>Par : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attraction"], "createdBy", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                    <div class=\"text-justify mb-3\">Description : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attraction"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
                    <div>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attraction_show", ["id" => twig_get_attribute($this->env, $this->source, $context["attraction"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">Voir</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attraction_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["attraction"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                    </div>
                </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attraction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "attraction/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 31,  139 => 26,  135 => 25,  130 => 23,  126 => 22,  122 => 21,  117 => 19,  113 => 18,  109 => 17,  105 => 15,  101 => 14,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Attraction index{% endblock %}

{% block body %}
    <div class=\"containerBoxes rounded mt-5 row justify-content-center\">
        <div class=\"p-5\">

        <h2>Nos attractions</h2>
        <a href=\"{{ path('attraction_new') }}\" class=\"btn btn-warning mt-5\">Créer une nouvelle attraction</a>
        </div>
    </div>
    <div class=\"row justify-content-around\">
    {% for attraction in attractions %}
            <div class=\"containerBoxes rounded my-5 col-lg-5 col-xs-12 \">
                <div class=\"p-4 row flex-column align-items-center\">
                    <h3>{{ attraction.title }}</h3>
                    <img src=\"{{asset('uploads/attraction/' ~ attraction.getFeaturedImage() )}}\"
                        alt=\"image du film {{attraction.title}}\" class=\"my-5\"
                        style=\"max-height: 300px; max-width: 300px\">
                    <p>Créée le : {{ attraction.updatedAt ? attraction.updatedAt|date('d-m-y') : '' }}</p>
                    <p>Par : {{ attraction.createdBy }}</p>
                    <div class=\"text-justify mb-3\">Description : {{ attraction.description }}</div>
                    <div>
                        <a href=\"{{ path('attraction_show', {'id': attraction.id}) }}\" class=\"btn btn-dark\">Voir</a>
                        <a href=\"{{ path('attraction_edit', {'id': attraction.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                    </div>
                </div>
            </div>
    {% endfor %}
    </div>
{% endblock %}
", "attraction/index.html.twig", "/home/voualla/Documents/Symfony/apocalypark/apocalypark/templates/attraction/index.html.twig");
    }
}
