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

/* FeedBackBundle:Admin:reponse_reclammation.html.twig */
class __TwigTemplate_d27aaf1715c57a2520d58a412b13c96ab6a40d5abeac7f642736ddb0fe2ffd90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FeedBackBundle:Admin:reponse_reclammation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FeedBackBundle:Admin:reponse_reclammation.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "FeedBackBundle:Admin:reponse_reclammation.html.twig", 1);
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
        echo "    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- Premier Formulaire -->
                    <div class=\"col-lg-5\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Formulaire de reponse</strong> Reclammation
                            </div>
                            <div class=\"card-body card-block\">
                                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FReponse"]) || array_key_exists("FReponse", $context) ? $context["FReponse"] : (function () { throw new RuntimeError('Variable "FReponse" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"disabled-input\" class=\" form-control-label\">Sujet </label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FReponse"]) || array_key_exists("FReponse", $context) ? $context["FReponse"] : (function () { throw new RuntimeError('Variable "FReponse" does not exist.', 21, $this->source); })()), "sujet", [], "any", false, false, false, 21), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"textarea-input\" class=\" form-control-label\">Contenu</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FReponse"]) || array_key_exists("FReponse", $context) ? $context["FReponse"] : (function () { throw new RuntimeError('Variable "FReponse" does not exist.', 29, $this->source); })()), "contenu", [], "any", false, false, false, 29), 'widget');
        echo "
                                        </div>
                                    </div>

                                    <div class=\"card-footer\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fa fa-dot-circle-o\"></i> Envoyer
                                        </button>
                                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"fa fa-ban\"></i> Annuler
                                        </button>
                                    </div>
                                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FReponse"]) || array_key_exists("FReponse", $context) ? $context["FReponse"] : (function () { throw new RuntimeError('Variable "FReponse" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Deuxiemme forulaire -->
                    <div class=\"col-lg-7\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Reclammation </strong>  ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 50, $this->source); })()), "date", [], "any", false, false, false, 50), "d-m-y"), "html", null, true);
        echo "
                            </div>
                            <div class=\"card-body card-block\">
                                <form action=\"\" method=\"post\" class=\"form-horizontal\">
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"disabled-input\" class=\" form-control-label\">Nom</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <input type=\"text\" id=\"disabled-input\" name=\"disabled-input\" placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 59, $this->source); })()), "client", [], "any", false, false, false, 59), "username", [], "any", false, false, false, 59), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 59, $this->source); })()), "client", [], "any", false, false, false, 59), "prenom", [], "any", false, false, false, 59), "html", null, true);
        echo "\" disabled=\"\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"disabled-input\" class=\" form-control-label\">Email</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <input type=\"text\" id=\"disabled-input\" name=\"disabled-input\" placeholder=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 67, $this->source); })()), "client", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67), "html", null, true);
        echo "\" disabled=\"\" class=\"form-control\">
                                        </div>
                                    </div>

                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"textarea-input\" class=\" form-control-label\">Sujet</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <textarea name=\"textarea-input\" id=\"textarea-input\" rows=\"2\" placeholder=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 76, $this->source); })()), "sujet", [], "any", false, false, false, 76), "html", null, true);
        echo "\" class=\"form-control\"></textarea>
                                        </div>
                                    </div>

                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"textarea-input\" class=\" form-control-label\">Contenu </label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <textarea name=\"textarea-input\" id=\"textarea-input\" rows=\"9\" placeholder=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 85, $this->source); })()), "contenu", [], "any", false, false, false, 85), "html", null, true);
        echo "\" class=\"form-control\"></textarea>
                                        </div>
                                    </div>
                                </form>
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
        return "FeedBackBundle:Admin:reponse_reclammation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 85,  166 => 76,  154 => 67,  141 => 59,  129 => 50,  117 => 41,  102 => 29,  91 => 21,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block content %}
    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- Premier Formulaire -->
                    <div class=\"col-lg-5\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Formulaire de reponse</strong> Reclammation
                            </div>
                            <div class=\"card-body card-block\">
                                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                    {{ form_start(FReponse) }}
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"disabled-input\" class=\" form-control-label\">Sujet </label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            {{ form_widget(FReponse.sujet)}}
                                        </div>
                                    </div>
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"textarea-input\" class=\" form-control-label\">Contenu</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            {{ form_widget(FReponse.contenu) }}
                                        </div>
                                    </div>

                                    <div class=\"card-footer\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fa fa-dot-circle-o\"></i> Envoyer
                                        </button>
                                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"fa fa-ban\"></i> Annuler
                                        </button>
                                    </div>
                                    {{ form_end(FReponse) }}
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Deuxiemme forulaire -->
                    <div class=\"col-lg-7\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Reclammation </strong>  {{ recl.date|date('d-m-y') }}
                            </div>
                            <div class=\"card-body card-block\">
                                <form action=\"\" method=\"post\" class=\"form-horizontal\">
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"disabled-input\" class=\" form-control-label\">Nom</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <input type=\"text\" id=\"disabled-input\" name=\"disabled-input\" placeholder=\"{{recl.client.username}} {{recl.client.prenom}}\" disabled=\"\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"disabled-input\" class=\" form-control-label\">Email</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <input type=\"text\" id=\"disabled-input\" name=\"disabled-input\" placeholder=\"{{recl.client.email}}\" disabled=\"\" class=\"form-control\">
                                        </div>
                                    </div>

                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"textarea-input\" class=\" form-control-label\">Sujet</label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <textarea name=\"textarea-input\" id=\"textarea-input\" rows=\"2\" placeholder=\"{{ recl.sujet}}\" class=\"form-control\"></textarea>
                                        </div>
                                    </div>

                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\">
                                            <label for=\"textarea-input\" class=\" form-control-label\">Contenu </label>
                                        </div>
                                        <div class=\"col-12 col-md-9\">
                                            <textarea name=\"textarea-input\" id=\"textarea-input\" rows=\"9\" placeholder=\"{{ recl.contenu }}\" class=\"form-control\"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "FeedBackBundle:Admin:reponse_reclammation.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\FeedBackBundle/Resources/views/Admin/reponse_reclammation.html.twig");
    }
}
