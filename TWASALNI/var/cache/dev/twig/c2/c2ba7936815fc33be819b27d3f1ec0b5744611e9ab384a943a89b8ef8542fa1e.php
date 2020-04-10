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

/* FeedBackBundle:Default/Default:index.html.twig */
class __TwigTemplate_08e3028b45e958ff3737fba84e80ae61bb917e4428f7d9fac960b9eb29167c6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FeedBackBundle:Default/Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FeedBackBundle:Default/Default:index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "FeedBackBundle:Default/Default:index.html.twig", 1);
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
        echo "        <section id=\"page-title-area\" class=\"section-padding overlay\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Page Title Start -->
                    <div class=\"col-lg-12\">
                        <div class=\"section-title  text-center\">
                            <h2>Contactez Nous !</h2>
                            <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                            <p>Donnez vos Avis sur le system</p>
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
        echo "    <div class=\"contact-page-wrao section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 m-auto\">
                    <div class=\"contact-form\">
                        <form id=\"form_reclammation\" method=\"post\">
                            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formR"]) || array_key_exists("formR", $context) ? $context["formR"] : (function () { throw new RuntimeError('Variable "formR" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"email-input\">
                                        <input type=\"text\" placeholder=\" Adresse Mail \" name=\"email\" id=\"email\">
                                    </div>
                                    <span id=\"error_email\"></span>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"name-input\">
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formR"]) || array_key_exists("formR", $context) ? $context["formR"] : (function () { throw new RuntimeError('Variable "formR" does not exist.', 38, $this->source); })()), "sujet", [], "any", false, false, false, 38), 'widget');
        echo "
                                    </div>
                                    <span id=\"error_sujet\"></span>
                                </div>
                            </div>

                            <div class=\"message-input\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formR"]) || array_key_exists("formR", $context) ? $context["formR"] : (function () { throw new RuntimeError('Variable "formR" does not exist.', 45, $this->source); })()), "contenu", [], "any", false, false, false, 45), 'widget');
        echo "
                                <span id=\"error_message\"></span>
                            </div>

                            <div class=\"input-submit\">
                                <button type=\"submit\" name=\"envoyer\" id=\"envoie\" value=\"envoyer\">Envoyer </button>
                            </div>
                            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formR"]) || array_key_exists("formR", $context) ? $context["formR"] : (function () { throw new RuntimeError('Variable "formR" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
                        </form>
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
        return "FeedBackBundle:Default/Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  135 => 45,  125 => 38,  112 => 28,  104 => 22,  94 => 21,  69 => 4,  59 => 3,  36 => 1,);
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
                            <h2>Contactez Nous !</h2>
                            <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                            <p>Donnez vos Avis sur le system</p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
    {% endblock %}
    {# Formulaire #}
{% block content %}
    <div class=\"contact-page-wrao section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 m-auto\">
                    <div class=\"contact-form\">
                        <form id=\"form_reclammation\" method=\"post\">
                            {{ form_start(formR) }}
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"email-input\">
                                        <input type=\"text\" placeholder=\" Adresse Mail \" name=\"email\" id=\"email\">
                                    </div>
                                    <span id=\"error_email\"></span>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"name-input\">
                                        {{ form_widget(formR.sujet) }}
                                    </div>
                                    <span id=\"error_sujet\"></span>
                                </div>
                            </div>

                            <div class=\"message-input\">
                                {{ form_widget(formR.contenu) }}
                                <span id=\"error_message\"></span>
                            </div>

                            <div class=\"input-submit\">
                                <button type=\"submit\" name=\"envoyer\" id=\"envoie\" value=\"envoyer\">Envoyer </button>
                            </div>
                            {{ form_end(formR) }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock%}", "FeedBackBundle:Default/Default:index.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\FeedBackBundle/Resources/views/Default/Default/index.html.twig");
    }
}
