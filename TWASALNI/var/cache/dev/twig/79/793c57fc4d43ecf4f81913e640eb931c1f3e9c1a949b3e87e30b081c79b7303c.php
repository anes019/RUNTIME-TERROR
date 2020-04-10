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

/* taxi/indexFront.html.twig */
class __TwigTemplate_5c66cadf070cc24da4f86b437a566951135251fd8c1655e0ea6f8c5b8cd7f631 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slide' => [$this, 'block_slide'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxi/indexFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxi/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "taxi/indexFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        // line 5
        echo "        <section id=\"page-title-area\" class=\"section-padding overlay\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Page Title Start -->
                    <div class=\"col-lg-12\">
                        <div class=\"section-title  text-center\">
                            <h2>Nos Taxis ! </h2>
                            <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                            <p>Nous Vous proposons une multitude de Taxis </p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "        <section id=\"car-list-area\" class=\"section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Car List Content Start -->
                    <div class=\"col-lg-8\">
                        <div class=\"car-list-content\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "                                <div class=\"single-car-wrap\">
                                    <div class=\"row\">
                                        <!-- Single Car Thumbnail -->
                                        <div class=\"col-lg-5\">
                                            <div class=\"car-list-thumb car-thumb-1\"></div>
                                        </div>
                                        <!-- Single Car Thumbnail -->

                                        <!-- Single Car Info -->
                                        <div class=\"col-lg-7\">
                                            <div class=\"display-table\">
                                                <div class=\"display-table-cell\">
                                                    <div class=\"car-list-info\">
                                                        <h2><a href=\"#\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "taxi", [], "any", false, false, false, 45), "marque", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></h2>
                                                        <h5>5DT + Compteur </h5>
                                                        <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "taxi", [], "any", false, false, false, 47), "etat", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                                                        <ul class=\"car-info-list\">
                                                            <li>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "taxi", [], "any", false, false, false, 49), "image", [], "any", false, false, false, 49), "html", null, true);
            echo "</li>
                                                            <li>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nb", [], "any", false, false, false, 50), "html", null, true);
            echo "</li>
                                                            <li>Note Generale :
                                                            </li>
                                                        </ul>
                                                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_detailTaxi", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"rent-btn\">Voir plus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Car info -->
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "taxi/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  154 => 54,  147 => 50,  143 => 49,  138 => 47,  131 => 45,  116 => 32,  112 => 31,  104 => 25,  94 => 24,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
    {# Image du body #}

    {% block slide %}
        <section id=\"page-title-area\" class=\"section-padding overlay\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Page Title Start -->
                    <div class=\"col-lg-12\">
                        <div class=\"section-title  text-center\">
                            <h2>Nos Taxis ! </h2>
                            <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                            <p>Nous Vous proposons une multitude de Taxis </p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
    {% endblock %}

    {# Liste des Taxis #}

    {% block content %}
        <section id=\"car-list-area\" class=\"section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Car List Content Start -->
                    <div class=\"col-lg-8\">
                        <div class=\"car-list-content\">
                            {% for p in taxis  %}
                                <div class=\"single-car-wrap\">
                                    <div class=\"row\">
                                        <!-- Single Car Thumbnail -->
                                        <div class=\"col-lg-5\">
                                            <div class=\"car-list-thumb car-thumb-1\"></div>
                                        </div>
                                        <!-- Single Car Thumbnail -->

                                        <!-- Single Car Info -->
                                        <div class=\"col-lg-7\">
                                            <div class=\"display-table\">
                                                <div class=\"display-table-cell\">
                                                    <div class=\"car-list-info\">
                                                        <h2><a href=\"#\">{{p.nom}} : {{ p.taxi.marque }}</a></h2>
                                                        <h5>5DT + Compteur </h5>
                                                        <p>{{ p.taxi.etat }}</p>
                                                        <ul class=\"car-info-list\">
                                                            <li>{{p.taxi.image}}</li>
                                                            <li>{{p.nb}}</li>
                                                            <li>Note Generale :
                                                            </li>
                                                        </ul>
                                                        <a href=\"{{ path('taxi_detailTaxi',{'id':p.id} )}}\" class=\"rent-btn\">Voir plus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Car info -->
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {% endblock %}", "taxi/indexFront.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\taxi\\indexFront.html.twig");
    }
}
