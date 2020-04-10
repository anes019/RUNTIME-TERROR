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

/* @FeedBack/Admin/statistiques.html.twig */
class __TwigTemplate_751c4f57154a3d9f85241a8b92bad54f9375862aaac34e1e6e692a8f2dd1bf84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FeedBack/Admin/statistiques.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FeedBack/Admin/statistiques.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@FeedBack/Admin/statistiques.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context["envoye"] = 0;
        // line 4
        echo "    ";
        $context["repondu"] = 0;
        // line 5
        echo "    ";
        $context["attente"] = 0;
        // line 6
        echo "    ";
        $context["total"] = 0;
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclammation"]) || array_key_exists("reclammation", $context) ? $context["reclammation"] : (function () { throw new RuntimeError('Variable "reclammation" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 8
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 8) == "Envoye")) {
                // line 9
                echo "            ";
                $context["envoye"] = ((isset($context["envoye"]) || array_key_exists("envoye", $context) ? $context["envoye"] : (function () { throw new RuntimeError('Variable "envoye" does not exist.', 9, $this->source); })()) + 1);
                // line 10
                echo "        ";
            }
            // line 11
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 11) == "Repondu")) {
                // line 12
                echo "            ";
                $context["repondu"] = ((isset($context["repondu"]) || array_key_exists("repondu", $context) ? $context["repondu"] : (function () { throw new RuntimeError('Variable "repondu" does not exist.', 12, $this->source); })()) + 1);
                // line 13
                echo "        ";
            }
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 14) == "En Attente")) {
                // line 15
                echo "            ";
                $context["attente"] = ((isset($context["attente"]) || array_key_exists("attente", $context) ? $context["attente"] : (function () { throw new RuntimeError('Variable "attente" does not exist.', 15, $this->source); })()) + 1);
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        ";
            // line 18
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 18, $this->source); })()) + 1);
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $context["repondu"] = twig_round((((isset($context["repondu"]) || array_key_exists("repondu", $context) ? $context["repondu"] : (function () { throw new RuntimeError('Variable "repondu" does not exist.', 21, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 21, $this->source); })())) * 100), 1, "floor");
        // line 22
        echo "    ";
        $context["attente"] = twig_round((((isset($context["attente"]) || array_key_exists("attente", $context) ? $context["attente"] : (function () { throw new RuntimeError('Variable "attente" does not exist.', 22, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 22, $this->source); })())) * 100), 1, "floor");
        // line 23
        echo "    ";
        $context["envoye"] = (((isset($context["envoye"]) || array_key_exists("envoye", $context) ? $context["envoye"] : (function () { throw new RuntimeError('Variable "envoye" does not exist.', 23, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 23, $this->source); })())) * twig_round(100, 1, "floor"));
        // line 24
        echo "    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <div class=\"au-card m-b-30\">
                            <div class=\"au-card-inner\">
                                <input id=\"nbr\" hidden value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["repondu"]) || array_key_exists("repondu", $context) ? $context["repondu"] : (function () { throw new RuntimeError('Variable "repondu" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">
                                <input id=\"nbe\" hidden value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["envoye"]) || array_key_exists("envoye", $context) ? $context["envoye"] : (function () { throw new RuntimeError('Variable "envoye" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
                                <input id=\"nba\" hidden value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["attente"]) || array_key_exists("attente", $context) ? $context["attente"] : (function () { throw new RuntimeError('Variable "attente" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
                                <h3 class=\"title-2 m-b-40\">Statistiques Reclammation ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["repondu"]) || array_key_exists("repondu", $context) ? $context["repondu"] : (function () { throw new RuntimeError('Variable "repondu" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</h3>
                                <canvas id=\"pieChart\" content=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["repondu"]) || array_key_exists("repondu", $context) ? $context["repondu"] : (function () { throw new RuntimeError('Variable "repondu" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FeedBack/Admin/statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  134 => 24,  131 => 23,  128 => 22,  126 => 21,  123 => 20,  117 => 19,  115 => 18,  112 => 17,  109 => 16,  106 => 15,  103 => 14,  100 => 13,  97 => 12,  94 => 11,  91 => 10,  88 => 9,  85 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block content %}
    {% set envoye=0 %}
    {% set repondu=0 %}
    {% set attente=0 %}
    {% set total=0 %}
    {% for r in reclammation %}
        {% if r.etat == 'Envoye' %}
            {% set envoye=envoye+1 %}
        {% endif %}
        {% if r.etat == 'Repondu' %}
            {% set repondu=repondu+1 %}
        {% endif %}
        {% if r.etat == 'En Attente' %}
            {% set attente=attente+1 %}
        {% endif %}

        {% set total=total+1 %}
    {% endfor %}

    {% set repondu=((repondu/total)*100)|round(1,'floor') %}
    {% set attente=((attente/total)*100)|round(1,'floor') %}
    {% set envoye=(envoye/total)*100|round(1,'floor') %}
    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <div class=\"au-card m-b-30\">
                            <div class=\"au-card-inner\">
                                <input id=\"nbr\" hidden value=\"{{ repondu }}\">
                                <input id=\"nbe\" hidden value=\"{{ envoye }}\">
                                <input id=\"nba\" hidden value=\"{{ attente }}\">
                                <h3 class=\"title-2 m-b-40\">Statistiques Reclammation {{ repondu }}</h3>
                                <canvas id=\"pieChart\" content=\"{{ repondu }}\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "@FeedBack/Admin/statistiques.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\FeedBackBundle\\Resources\\views\\Admin\\statistiques.html.twig");
    }
}
