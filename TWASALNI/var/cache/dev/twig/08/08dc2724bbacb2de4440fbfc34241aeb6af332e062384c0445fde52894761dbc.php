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

/* partenaire/listeFront.html.twig */
class __TwigTemplate_92a3c5690e077f1bcad1983987a74ecf1622a56b3d454bd89011e85691320829 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/listeFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/listeFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/listeFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        // line 4
        echo "    <section id=\"page-title-area\" class=\"section-padding overlay\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Page Title Start -->
                <div class=\"col-lg-12\">
                    <div class=\"section-title  text-center\">
                        <h2>Nos Partenaires ! </h2>
                        <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                        <p>Nous Vous proposons une multitude de Partenaires </p>
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

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <section id=\"driver-page-wrap\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Driver Start-->
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-driver-member\">
                        ";
            // line 29
            $context["image"] = twig_random($this->env, 1, 6);
            // line 30
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("templates/frontoffice/assets/img/driver/driver-" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 30, $this->source); })())) . ".jpg")), "html", null, true);
            echo "\" alt=\"Raju Ahammad\">
                        <div class=\"driver-mem-info\">
                            <div class=\"driver-mem-sicons\">
                                <a href=\"#\"><i class=\"fa fa-facebook\" title=\"Facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\" title=\"Twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\" title=\"Instagram\"></i></a>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"><i class=\"fa fa-plus\" title=\"Voir Plus\"></i></a>
                            </div>
                            <h4>";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 38) . " ") . twig_get_attribute($this->env, $this->source, $context["p"], "prenom", [], "any", false, false, false, 38)), "html", null, true);
            echo " <span>Taxi : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "taxi", [], "any", false, false, false, 38), "matricul", [], "any", false, false, false, 38), "html", null, true);
            echo "</span></h4>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/listeFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  135 => 38,  130 => 36,  120 => 30,  118 => 29,  114 => 27,  110 => 26,  104 => 22,  94 => 21,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block slide %}
    <section id=\"page-title-area\" class=\"section-padding overlay\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Page Title Start -->
                <div class=\"col-lg-12\">
                    <div class=\"section-title  text-center\">
                        <h2>Nos Partenaires ! </h2>
                        <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                        <p>Nous Vous proposons une multitude de Partenaires </p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
{% endblock %}

{% block content %}
    <section id=\"driver-page-wrap\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Driver Start-->
                {% for p in partenaire %}
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-driver-member\">
                        {% set image=random(1, 6) %}
                        <img src=\"{{ asset('templates/frontoffice/assets/img/driver/driver-'~image~'.jpg') }}\" alt=\"Raju Ahammad\">
                        <div class=\"driver-mem-info\">
                            <div class=\"driver-mem-sicons\">
                                <a href=\"#\"><i class=\"fa fa-facebook\" title=\"Facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\" title=\"Twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\" title=\"Instagram\"></i></a>
                                <a href=\"{{ path('partenaire_detail',{'id':p.id}) }}\"><i class=\"fa fa-plus\" title=\"Voir Plus\"></i></a>
                            </div>
                            <h4>{{ p.nom~' '~p.prenom }} <span>Taxi : {{p.taxi.matricul}}</span></h4>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}", "partenaire/listeFront.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\partenaire\\listeFront.html.twig");
    }
}
