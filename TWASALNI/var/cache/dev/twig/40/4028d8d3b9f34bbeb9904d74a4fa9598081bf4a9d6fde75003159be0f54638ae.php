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

/* :reservation:showarchive.html.twig */
class __TwigTemplate_19e4f0d71714557cc8b79182ab6be5519d61552cf3dfa8cd15bed8bf42d5dfa1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":reservation:showarchive.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":reservation:showarchive.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", ":reservation:showarchive.html.twig", 1);
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
        echo "       <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       <!------ Include the above in your HEAD tag ---------->
<br>
<br>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "       <br>
       <br>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1 style=\"text-align: center\">Reservation</h1>
    <!-- Card -->
   <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <!------ Include the above in your HEAD tag ---------->

       <div class=\"container\">
           <div class=\"row\">
               <div class=\"well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3\">
                   <div class=\"row\">
                       <div class=\"col-xs-6 col-sm-6 col-md-6\">
                           <address>
                               <strong>Client details </strong>
                               <br>
                               Nom :";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "client", [], "any", false, false, false, 26), "html", null, true);
        echo "
                               <br>
                               Prenom :";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "
                               <br>
                               Adresse : ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "
                               <br>
                               <abbr title=\"Phone\">Mobile:</abbr>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "
                           </address>
                       </div>
                       <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\">
                           <p>
                               <em>Date: ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "date", [], "any", false, false, false, 37)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "date", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
        }
        echo "</em>
                           </p>

                       </div>
                   </div>
                   <div class=\"row\">

                       </span>
                       <table class=\"table table-hover\">
                           <thead>
                           <tr>
                               <th>Product</th>
                               <th>Point d'achat</th>
                               <th class=\"text-center\">Destination</th>
                               <th class=\"text-center\">Remarques</th>
                           </tr>
                           </thead>
                           <tbody>
                           <tr>
                               <td class=\"col-md-9\"><em>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "listAchats", [], "any", false, false, false, 56), "html", null, true);
        echo "</em></h4></td>
                               <td class=\"col-md-1\" style=\"text-align: center\"> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "pointAchat", [], "any", false, false, false, 57), "html", null, true);
        echo " </td>
                               <td class=\"col-md-1 text-center\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "destination", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                               <td class=\"col-md-1 text-center\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "remarques", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                           </tr>

                           <tr>
                               <td>   </td>
                               <td>   </td>
                               <td class=\"text-right\">
                                   <p>
                                       <strong> frais de livraison: </strong>
                                   </p>
                              </td>
                               <td class=\"text-center\">
                                   <p>
                                       <strong>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 72, $this->source); })()), "prix", [], "any", false, false, false, 72), "html", null, true);
        echo " DT</strong>
                                   </p>
                              </td>
                           </tr>
                           <tr>
                               <td>   </td>
                               <td>   </td>
                               <td class=\"text-right\"><h4><strong>Total: </strong></h4></td>
                               <td class=\"text-center text-danger\"><h4><strong>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 80, $this->source); })()), "prix", [], "any", false, false, false, 80), "html", null, true);
        echo " DT  <h4 style=\"color: red\"> +prix de commande</h4></strong></h4></td>
                           </tr>
                           </tbody>
                       </table>

                       </td>

                   </div>
                   <br>

                   <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\">Retourner au liste des reservations</a>

               </div>
           </div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:showarchive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 90,  205 => 80,  194 => 72,  178 => 59,  174 => 58,  170 => 57,  166 => 56,  142 => 37,  134 => 32,  129 => 30,  124 => 28,  119 => 26,  102 => 11,  92 => 10,  80 => 98,  78 => 10,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
   {% block content %}
       <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       <!------ Include the above in your HEAD tag ---------->
<br>
<br>
{% block body %}
    <h1 style=\"text-align: center\">Reservation</h1>
    <!-- Card -->
   <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <!------ Include the above in your HEAD tag ---------->

       <div class=\"container\">
           <div class=\"row\">
               <div class=\"well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3\">
                   <div class=\"row\">
                       <div class=\"col-xs-6 col-sm-6 col-md-6\">
                           <address>
                               <strong>Client details </strong>
                               <br>
                               Nom :{{ reservation.client }}
                               <br>
                               Prenom :{{ reservation.id }}
                               <br>
                               Adresse : {{ reservation.id }}
                               <br>
                               <abbr title=\"Phone\">Mobile:</abbr>{{ reservation.id }}
                           </address>
                       </div>
                       <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\">
                           <p>
                               <em>Date: {% if reservation.date %}{{ reservation.date|date('Y-m-d') }}{% endif %}</em>
                           </p>

                       </div>
                   </div>
                   <div class=\"row\">

                       </span>
                       <table class=\"table table-hover\">
                           <thead>
                           <tr>
                               <th>Product</th>
                               <th>Point d'achat</th>
                               <th class=\"text-center\">Destination</th>
                               <th class=\"text-center\">Remarques</th>
                           </tr>
                           </thead>
                           <tbody>
                           <tr>
                               <td class=\"col-md-9\"><em>{{ reservation.listAchats }}</em></h4></td>
                               <td class=\"col-md-1\" style=\"text-align: center\"> {{ reservation.pointAchat }} </td>
                               <td class=\"col-md-1 text-center\">{{ reservation.destination }}</td>
                               <td class=\"col-md-1 text-center\">{{ reservation.remarques }}</td>
                           </tr>

                           <tr>
                               <td>   </td>
                               <td>   </td>
                               <td class=\"text-right\">
                                   <p>
                                       <strong> frais de livraison: </strong>
                                   </p>
                              </td>
                               <td class=\"text-center\">
                                   <p>
                                       <strong>{{ reservation.prix }} DT</strong>
                                   </p>
                              </td>
                           </tr>
                           <tr>
                               <td>   </td>
                               <td>   </td>
                               <td class=\"text-right\"><h4><strong>Total: </strong></h4></td>
                               <td class=\"text-center text-danger\"><h4><strong>{{ reservation.prix }} DT  <h4 style=\"color: red\"> +prix de commande</h4></strong></h4></td>
                           </tr>
                           </tbody>
                       </table>

                       </td>

                   </div>
                   <br>

                   <a href=\"{{ path('reservation_index') }}\">Retourner au liste des reservations</a>

               </div>
           </div>


</div>
{% endblock %}
       <br>
       <br>
   {% endblock %}", ":reservation:showarchive.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app/Resources\\views/reservation/showarchive.html.twig");
    }
}
