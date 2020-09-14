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

/* user/show.html.twig */
class __TwigTemplate_175119c5ad3b0397c4098ad95b9b651948ed0bf0b2711e225d1835df20fa22c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo "User";
        
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
        echo "
    <div class=\"containerBoxes rounded my-5\">
        <div class=\"p-5\">
            <!--             <h3 class=\"mb-5\">";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "lastname", [], "any", false, false, false, 9)), "html", null, true);
        echo " <?php ucfirst( ?> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "firstname", [], "any", false, false, false, 9), "html", null, true);
        echo " <?php ); ?></h3>
 -->
            <h3 class=\"mb-5\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "lastname", [], "any", false, false, false, 11)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11), "html", null, true);
        echo " </h3>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Nom de famille :</th>
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "lastname", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prénom :</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "firstname", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 26
        echo "                    <tr>
                        <th>Email :</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Role :</th>
                        <td>
                            ";
        // line 33
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "roles", [], "any", false, false, false, 33), 0, [], "array", false, false, false, 33), "ROLE_USER")) {
            // line 34
            echo "                            Utilisateur
                            ";
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "roles", [], "any", false, false, false, 35), 0, [], "array", false, false, false, 35), "ROLE_EDITOR")) {
            // line 36
            echo "                            Editeur
                            ";
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "roles", [], "any", false, false, false, 37), 0, [], "array", false, false, false, 37), "ROLE_MODERATOR")) {
            // line 38
            echo "                            Modérateur
                            ";
        } else {
            // line 40
            echo "                            Administrateur
                            ";
        }
        // line 42
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>Mot de passe :</th>
                        <td>
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-warning\">Modifier</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            ";
        // line 52
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  161 => 47,  154 => 42,  150 => 40,  146 => 38,  144 => 37,  141 => 36,  139 => 35,  136 => 34,  134 => 33,  126 => 28,  122 => 26,  117 => 20,  110 => 16,  100 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}

    <div class=\"containerBoxes rounded my-5\">
        <div class=\"p-5\">
            <!--             <h3 class=\"mb-5\">{{user.lastname | upper}} <?php ucfirst( ?> {{ user.firstname }} <?php ); ?></h3>
 -->
            <h3 class=\"mb-5\">{{user.lastname | upper}} {{ user.firstname }} </h3>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Nom de famille :</th>
                        <td>{{ user.lastname }}</td>
                    </tr>
                    <tr>
                        <th>Prénom :</th>
                        <td>{{ user.firstname }}</td>
                    </tr>
                    {# <tr>
                        <th>Nom d'utilisateur :</th>
                        <td>{{ user.username }}</td>
                    </tr> #}
                    <tr>
                        <th>Email :</th>
                        <td>{{ user.email }}</td>
                    </tr>
                    <tr>
                        <th>Role :</th>
                        <td>
                            {% if user.roles[0] == \"ROLE_USER\" %}
                            Utilisateur
                            {% elseif user.roles[0] == \"ROLE_EDITOR\" %}
                            Editeur
                            {% elseif user.roles[0] == \"ROLE_MODERATOR\" %}
                            Modérateur
                            {% else %}
                            Administrateur
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Mot de passe :</th>
                        <td>
                            <a href=\"{{ path('home') }}\" class=\"btn btn-warning\">Modifier</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{ include('user/_delete_form.html.twig') }}
        </div>
    </div>

{% endblock %}
", "user/show.html.twig", "/var/www/apocalypark/templates/user/show.html.twig");
    }
}
