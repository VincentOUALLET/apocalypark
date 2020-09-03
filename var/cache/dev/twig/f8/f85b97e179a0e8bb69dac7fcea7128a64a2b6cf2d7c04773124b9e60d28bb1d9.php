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

/* reservation/show.html.twig */
class __TwigTemplate_a864fd80f344f24c6a7fb8df234d0d505ed50c3ea2cf0ad78c84a95b4ea604ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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

        echo "Reservation";
        
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
        echo "    <div class=\"containerBoxes mt-5 rounded\">
        <div class=\"m-5 pt-2\">
            <h3 class=\"my-5\">Votre réservation du ";
        // line 8
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 8, $this->source); })()), "reservationDate", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 8, $this->source); })()), "reservationDate", [], "any", false, false, false, 8), "d/m/y"), "html", null, true))) : (print ("")));
        echo "</h3>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Prix total</th>
                        <th>(Prix unitaire)</th>
                    </tr>
                    <tr>
                        <th>Billets adulte</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "adultTickets", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "adultTickets", [], "any", false, false, false, 21) * 15), "html", null, true);
        echo "</td>
                        <td>15€</td>
                    </tr>
                    <tr>
                        <th>Billets enfant</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "childTickets", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "childTickets", [], "any", false, false, false, 27) * 7), "html", null, true);
        echo "</td>
                        <td>7€</td>
                    </tr>
                    <tr>
                        
                        <th>Total</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "adultTickets", [], "any", false, false, false, 33) + twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "childTickets", [], "any", false, false, false, 33)), "html", null, true);
        echo "</td>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "adultTickets", [], "any", false, false, false, 34) * 15) + (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "childTickets", [], "any", false, false, false, 34) * 7)), "html", null, true);
        echo " €</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 mb-3\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a>
                </div>
                <div class=\"col-lg-6 col-xs-12\">
                    ";
        // line 44
        echo twig_include($this->env, $context, "reservation/_delete_form.html.twig");
        echo "
                </div>
            </div>
            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\" class=\"btn btn-dark mr-5 my-5\">Retour à la liste</a>
        </div>
        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  152 => 44,  146 => 41,  136 => 34,  132 => 33,  123 => 27,  119 => 26,  111 => 21,  107 => 20,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block body %}
    <div class=\"containerBoxes mt-5 rounded\">
        <div class=\"m-5 pt-2\">
            <h3 class=\"my-5\">Votre réservation du {{ reservation.reservationDate ? reservation.reservationDate|date('d/m/y') : '' }}</h3>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Prix total</th>
                        <th>(Prix unitaire)</th>
                    </tr>
                    <tr>
                        <th>Billets adulte</th>
                        <td>{{ reservation.adultTickets }}</td>
                        <td>{{ reservation.adultTickets * 15 }}</td>
                        <td>15€</td>
                    </tr>
                    <tr>
                        <th>Billets enfant</th>
                        <td>{{ reservation.childTickets }}</td>
                        <td>{{ reservation.childTickets * 7 }}</td>
                        <td>7€</td>
                    </tr>
                    <tr>
                        
                        <th>Total</th>
                        <td>{{ reservation.adultTickets + reservation.childTickets}}</td>
                        <td>{{ reservation.adultTickets * 15 + reservation.childTickets * 7 }} €</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 mb-3\">
                    <a href=\"{{ path('reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                </div>
                <div class=\"col-lg-6 col-xs-12\">
                    {{ include('reservation/_delete_form.html.twig') }}
                </div>
            </div>
            <a href=\"{{ path('reservation_index') }}\" class=\"btn btn-dark mr-5 my-5\">Retour à la liste</a>
        </div>
        
    </div>
{% endblock %}
", "reservation/show.html.twig", "/home/voualla/Documents/Symfony/apocalypark/apocalypark/templates/reservation/show.html.twig");
    }
}
