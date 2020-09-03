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

/* reservation/_form.html.twig */
class __TwigTemplate_9ba66af07b567b95b11832bab796606cf9677db6b216ba53933d978acf9b6112 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        // line 1
        echo "<div class=\"containerBoxes rounded my-5\">
    <div class=\"p-5\">
        ";
        // line 4
        echo "        
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        echo "
        ";
        // line 8
        echo "        ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8), "reservation_edit")) {
            // line 9
            echo "            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 mb-3\">
                    <button class=\"btn btn-success\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</button>
                </div>
                <div class=\"col-lg-6 col-xs-12\">
                </div>
            </div>
        ";
        } else {
            // line 17
            echo "        <button class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 17, $this->source); })()), "Réserver")) : ("Réserver")), "html", null, true);
            echo "</button>
        ";
        }
        // line 19
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\" class=\"btn btn-dark my-5\">Retour à la liste</a>        
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  80 => 19,  74 => 17,  65 => 11,  61 => 9,  58 => 8,  54 => 6,  50 => 5,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"containerBoxes rounded my-5\">
    <div class=\"p-5\">
        {# {{ form_row(form.reservation_date) }} #}
        
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {# si on est sur la route de modification #}
        {% if app.request.get('_route') == 'reservation_edit' %}
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 mb-3\">
                    <button class=\"btn btn-success\">{{ button_label }}</button>
                </div>
                <div class=\"col-lg-6 col-xs-12\">
                </div>
            </div>
        {% else %}
        <button class=\"btn btn-success\">{{ button_label|default('Réserver') }}</button>
        {% endif %}
        {{ form_end(form) }}
        <a href=\"{{ path('reservation_index') }}\" class=\"btn btn-dark my-5\">Retour à la liste</a>        
    </div>
</div>", "reservation/_form.html.twig", "/home/voualla/Documents/Symfony/apocalypark/apocalypark/templates/reservation/_form.html.twig");
    }
}
