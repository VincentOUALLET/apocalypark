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

/* sitemap/index.html.twig */
class __TwigTemplate_8939bd6440bc91c09974dc22b1f6aa0e66aa0e4fc0a5ddc084e98727875730a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

";
        // line 4
        echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\"
    xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">

    ";
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 10
            echo "        <url>
            ";
            // line 12
            echo "            ";
            // line 13
            echo "            <loc>
                ";
            // line 15
            echo "                ";
            if (0 === twig_compare(twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 15), ["hostname" => ""]), twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 15))) {
                // line 16
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 16, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 16), "html", null, true);
                echo "
                ";
            } else {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 18), "html", null, true);
                echo "
                ";
            }
            // line 20
            echo "            </loc>

            ";
            // line 23
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "lastmod", [], "any", true, true, false, 23)) {
                // line 24
                echo "                <lastmod>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 24), "html", null, true);
                echo "</lastmod>
            ";
            }
            // line 26
            echo "
            ";
            // line 28
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "changefreq", [], "any", true, true, false, 28)) {
                echo "*
                <changefreq>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "changefreq", [], "any", false, false, false, 29), "html", null, true);
                echo "</changefreq>
            ";
            }
            // line 31
            echo "
            ";
            // line 33
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", true, true, false, 33) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 33)))) {
                // line 34
                echo "                <image:image>
                    <image:loc>
                        ";
                // line 36
                if (0 === twig_compare(twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 36), ["hostname" => ""]), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 36), "loc", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "                           ";
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 37, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 37), "loc", [], "any", false, false, false, 37), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 39
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 39), "loc", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                        ";
                }
                // line 41
                echo "                    </image:loc>
                    <image:title>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
                echo "</image:title>
                </image:image>
            ";
            }
            // line 45
            echo "        </url>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
</urlset>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  142 => 45,  136 => 42,  133 => 41,  127 => 39,  120 => 37,  118 => 36,  114 => 34,  111 => 33,  108 => 31,  103 => 29,  98 => 28,  95 => 26,  89 => 24,  86 => 23,  82 => 20,  76 => 18,  69 => 16,  66 => 15,  63 => 13,  61 => 12,  58 => 10,  53 => 9,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

{# contains schemes to associate tags and contents #}
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\"
    xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">

    {# loop on URLs #}
    {% for url in urls %}
        <url>
            {# check if the hostname exists in url  #}
            {# if not, we add it #}
            <loc>
                {# we could have a CDN for pics, so we need to check and put the hostname  #}
                {% if url.loc|replace({hostname: ''}) == url.loc %}
                    {{ hostname }}{{ url.loc }}
                {% else %}
                    {{ url.loc }}
                {% endif %}
            </loc>

            {# if update on date #}
            {% if url.lastmod is defined %}
                <lastmod>{{ url.lastmod }}</lastmod>
            {% endif %}

            {# if there's a frequency on updates #}
            {% if url.changefreq is defined %}*
                <changefreq>{{ url.changefreq }}</changefreq>
            {% endif %}

            {# if there's image #}
            {% if url.image is defined and url.image is not empty %}
                <image:image>
                    <image:loc>
                        {% if url.loc|replace({hostname: ''}) == url.image.loc %}
                           {{ hostname }}{{ url.image.loc }}
                        {% else %}
                            {{ url.image.loc }}
                        {% endif %}
                    </image:loc>
                    <image:title>{{ url.image.title }}</image:title>
                </image:image>
            {% endif %}
        </url>

    {% endfor %}

</urlset>", "sitemap/index.html.twig", "/home/voualla/Documents/Symfony/apocalypark/apocalypark/templates/sitemap/index.html.twig");
    }
}
