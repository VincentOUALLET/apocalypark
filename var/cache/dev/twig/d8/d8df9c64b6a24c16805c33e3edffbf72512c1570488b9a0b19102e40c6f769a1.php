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

/* nav.html.twig */
class __TwigTemplate_fdb1141a847de9334afe36e8633208ed269154a3154279f88a1da1e8513153ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark  text-dark navbarImprove py-4\" id=\"mainNav\">
    
        <a class=\"navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none\" href=\"#\">
        <p class=\"ml-5 text-white\">Réservez! Tant que vous le pouvez encore...</p>
        <h1>APOCALYPARK</h1>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"
            aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse fontResponsivity\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav mx-auto \">
                <li
                ";
        // line 14
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14), "home")) {
            echo " class=\"active nav-item px-lg-4\"";
        }
        // line 15
        echo "                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                </li>
                <li
                ";
        // line 19
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19), "attraction_index")) {
            echo " class=\"active nav-item px-lg-4\"";
        }
        // line 20
        echo "                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attraction_index");
        echo "\">Attractions</a>
                </li>
                ";
        // line 28
        echo "                <li
                ";
        // line 29
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), "reservation_index")) {
            echo " class=\"active nav-item px-lg-4\"";
        }
        // line 30
        echo "                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\">Mes réservations</a>
                </li>
                <a class=\"nav-link\"
                    ";
        // line 34
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "")) {
            // line 35
            echo "                    href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\"
                    ";
        } else {
            // line 37
            echo "                    ";
            // line 38
            echo "                    href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"
                    ";
        }
        // line 39
        echo ">
                    <li
                    ";
        // line 41
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41), "user_show")) {
            // line 42
            echo "                    class=\"active nav-item px-lg-4 text-uppercase text-expanded\"
                    ";
        }
        // line 44
        echo "                    class=\"nav-item px-lg-4 text-uppercase text-expanded\">
                        Mon profil
                    </li>
                </a>
                ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">
                    <li
                    class=\"nav-item px-lg-4 text-uppercase text-expanded\">
                        Admin
                    </li>
                </a>
                ";
        }
        // line 56
        echo "                ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "")) {
            // line 57
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                        <li
                        class=\"nav-item px-lg-4 btn btn-dark text-uppercase text-expanded rounded\">
                            Se connecter
                        </li>
                    </a>
                    ";
        } else {
            // line 64
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            <li
                            class=\"nav-item px-lg-4 btn btn-dark text-uppercase text-expanded rounded\">
                                Se déconnecter
                            </li>
                        </a>
                ";
        }
        // line 71
        echo "            </ul>
        </div>
    </nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  158 => 64,  147 => 57,  144 => 56,  133 => 49,  131 => 48,  125 => 44,  121 => 42,  119 => 41,  115 => 39,  109 => 38,  107 => 37,  101 => 35,  99 => 34,  93 => 31,  90 => 30,  86 => 29,  83 => 28,  78 => 21,  75 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark  text-dark navbarImprove py-4\" id=\"mainNav\">
    
        <a class=\"navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none\" href=\"#\">
        <p class=\"ml-5 text-white\">Réservez! Tant que vous le pouvez encore...</p>
        <h1>APOCALYPARK</h1>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"
            aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse fontResponsivity\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav mx-auto \">
                <li
                {% if app.request.get('_route') == 'home' %} class=\"active nav-item px-lg-4\"{% endif %}
                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"{{ path(\"home\") }}\">Accueil</a>
                </li>
                <li
                {% if app.request.get('_route') == 'attraction_index' %} class=\"active nav-item px-lg-4\"{% endif %}
                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"{{ path(\"attraction_index\") }}\">Attractions</a>
                </li>
                {# <li
                {% if app.request.get('_route') == 'shows' %} class=\"active nav-item px-lg-4\"{% endif %}
                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"{{ path(\"shows\") }}\">Spectacles</a>
                </li> #}
                <li
                {% if app.request.get('_route') == 'reservation_index' %} class=\"active nav-item px-lg-4\"{% endif %}
                class=\"nav-item px-lg-4\">
                    <a class=\"nav-link text-uppercase text-expanded\" href=\"{{ path(\"reservation_index\") }}\">Mes réservations</a>
                </li>
                <a class=\"nav-link\"
                    {% if app.user != '' %}
                    href=\"{{ path(\"user_show\") }}\"
                    {% else %}
                    {# onclick=\"alert('Vous n\\'êtes pas connecté');\" #}
                    href=\"{{ path('app_login') }}\"
                    {% endif %}>
                    <li
                    {% if app.request.get('_route') == 'user_show' %}
                    class=\"active nav-item px-lg-4 text-uppercase text-expanded\"
                    {% endif %}
                    class=\"nav-item px-lg-4 text-uppercase text-expanded\">
                        Mon profil
                    </li>
                </a>
                {% if is_granted('ROLE_ADMIN') %}
                <a class=\"nav-link\" href=\"{{ path(\"admin\") }}\">
                    <li
                    class=\"nav-item px-lg-4 text-uppercase text-expanded\">
                        Admin
                    </li>
                </a>
                {% endif %}
                {% if app.user == \"\" %}
                    <a class=\"nav-link\" href=\"{{ path(\"app_login\") }}\">
                        <li
                        class=\"nav-item px-lg-4 btn btn-dark text-uppercase text-expanded rounded\">
                            Se connecter
                        </li>
                    </a>
                    {% else %}
                        <a class=\"nav-link\" href=\"{{ path(\"app_logout\") }}\">
                            <li
                            class=\"nav-item px-lg-4 btn btn-dark text-uppercase text-expanded rounded\">
                                Se déconnecter
                            </li>
                        </a>
                {% endif %}
            </ul>
        </div>
    </nav>
", "nav.html.twig", "/home/voualla/Documents/Symfony/apocalypark/apocalypark/templates/nav.html.twig");
    }
}
