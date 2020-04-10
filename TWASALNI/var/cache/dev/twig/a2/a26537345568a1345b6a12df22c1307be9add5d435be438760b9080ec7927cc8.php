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

/* reservation/index.html.twig */
class __TwigTemplate_10654563c0d9d4b4dea9c06b2a3ab2e4e81985ce74018e3bf3b616bd7852b3ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reservation/index.html.twig", 1);
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
        echo "       <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <!------ Include the above in your HEAD tag ---------->

       <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       <script language=\"JavaScript\" src=\"https://code.jquery.com/jquery-1.11.1.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js\" type=\"text/javascript\"></script>
       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css\">

       <br>
<br>
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
       <script>
           \$(document).ready(function(){
               \$(\"#myInput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
           });
       </script>

   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <h1 style=\" position: relative; right: -30px\">  liste des réservations non traitées </h1>
    <br>
       ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "       <div class=\"alert-success text-center\" style=\"height: 70px\">
           <br>
           ";
            // line 24
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
       </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "           <br>
           <br>

    ";
        // line 30
        if (twig_test_empty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        Vous n'avez pas de reservation non traitée ..
        veuillez consultez l'inventaire des reservation via ce lien
        <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
            echo "\"><button>Retour inventaire de ce mois</button></a>
        <br>
        <br>
        ou consulter l'archive des reservation via ce lien
        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_archive");
            echo "\"><button>Voir toutes les reservations traitées</button></a>

    </div>
    ";
        } else {
            // line 42
            echo "    <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
    <br>
    <div class=\"count\">
        <h4> Nombre total des réservation : ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 45, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 45), "html", null, true);
            echo "  </h4>
    </div>

    <table class=\"table table-bordered table-striped\">
        <tr>
            ";
            // line 51
            echo "            <th>";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 51, $this->source); })()), "Pointachat", "reservation.pointAchat");
            echo "</th>
            <th";
            // line 52
            if (twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 52, $this->source); })()), "isSorted", [0 => "reservation.destination"], "method", false, false, false, 52)) {
                echo " class=\"sorted\"";
            }
            echo ">
                ";
            // line 53
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 53, $this->source); })()), "Destination", "reservation.destination");
            echo "
            </th>
            <th";
            // line 55
            if (twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 55, $this->source); })()), "isSorted", [0 => [0 => "a.date", 1 => "a.time"]], "method", false, false, false, 55)) {
                echo " class=\"sorted\"";
            }
            echo ">
                ";
            // line 56
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 56, $this->source); })()), "Date", [0 => "a.date", 1 => "a.time"]);
            echo "
            </th>
            <th >Actions</th>
        </tr>

        <tbody id=\"myTable\">

        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 64
                echo "            <tr>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "pointAchat", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                <td>";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 67)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 67), "Y-m-d / h:m"), "html", null, true);
                }
                echo "</td>
                <td>
<div style=\" display: flex;
  align-content: space-between;\">

                    <a class=\"text-sm-left \" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\"color: green\">assignment</i>   </button></a>

";
                // line 75
                echo "                    <a class=\"text-sm-right\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_archiver", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"accepter\">  <i class=\"material-icons\" style=\"color:darkblue\">done</i>   </button></a>
    <a class=\"text-sm-right\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_rejet", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"refuser\">  <i class=\"material-icons\" style=\"color:darkred\">close</i>   </button></a>
</div>
                </td>

            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "        </tbody>
    </table>


            <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
            echo "\">Create a new reservation</a>
            <br>
            <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
            echo "\">Voir inventaire des Reservations</a>
             <br>
        <a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_archive");
            echo "\">Voir les  Reservations traitées</a>


    <div class=\"navigation\">
        ";
            // line 94
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 94, $this->source); })()));
            echo "
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 94,  275 => 90,  270 => 88,  265 => 86,  259 => 82,  247 => 76,  242 => 75,  237 => 72,  227 => 67,  223 => 66,  219 => 65,  216 => 64,  212 => 63,  202 => 56,  196 => 55,  191 => 53,  185 => 52,  180 => 51,  172 => 45,  167 => 42,  160 => 38,  153 => 34,  148 => 31,  146 => 30,  141 => 27,  132 => 24,  128 => 22,  124 => 21,  120 => 19,  110 => 18,  88 => 98,  86 => 18,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
   {% block content %}
       <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <!------ Include the above in your HEAD tag ---------->

       <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       <script language=\"JavaScript\" src=\"https://code.jquery.com/jquery-1.11.1.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js\" type=\"text/javascript\"></script>
       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css\">

       <br>
<br>
{% block body %}
    <h1 style=\" position: relative; right: -30px\">  liste des réservations non traitées </h1>
    <br>
       {% for message in app.flashes('success') %}
       <div class=\"alert-success text-center\" style=\"height: 70px\">
           <br>
           {{ message }}
       </div>
           {% endfor %}
           <br>
           <br>

    {% if reservations is empty %}
    <div class=\"alert alert-warning\" role=\"alert\">
        Vous n'avez pas de reservation non traitée ..
        veuillez consultez l'inventaire des reservation via ce lien
        <a href=\"{{ path('inventaireR_read')}}\"><button>Retour inventaire de ce mois</button></a>
        <br>
        <br>
        ou consulter l'archive des reservation via ce lien
        <a href=\"{{ path('reservation_archive')}}\"><button>Voir toutes les reservations traitées</button></a>

    </div>
    {% else %}
    <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
    <br>
    <div class=\"count\">
        <h4> Nombre total des réservation : {{ reservations.getTotalItemCount }}  </h4>
    </div>

    <table class=\"table table-bordered table-striped\">
        <tr>
            {# sorting of properties based on query components #}
            <th>{{ knp_pagination_sortable(reservations, 'Pointachat', 'reservation.pointAchat') }}</th>
            <th{% if reservations.isSorted('reservation.destination') %} class=\"sorted\"{% endif %}>
                {{ knp_pagination_sortable(reservations, 'Destination', 'reservation.destination') }}
            </th>
            <th{% if reservations.isSorted(['a.date', 'a.time']) %} class=\"sorted\"{% endif %}>
                {{ knp_pagination_sortable(reservations, 'Date', ['a.date', 'a.time']) }}
            </th>
            <th >Actions</th>
        </tr>

        <tbody id=\"myTable\">

        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.pointAchat }}</td>
                <td>{{ reservation.destination }}</td>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d / h:m') }}{% endif %}</td>
                <td>
<div style=\" display: flex;
  align-content: space-between;\">

                    <a class=\"text-sm-left \" href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\"color: green\">assignment</i>   </button></a>

{#                <a class=\"text-sm-center \" href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"edit\">  <i class=\"material-icons\">edit</i>   </button></a>#}
                    <a class=\"text-sm-right\" href=\"{{ path('reservation_archiver', { 'id': reservation.id }) }}\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"accepter\">  <i class=\"material-icons\" style=\"color:darkblue\">done</i>   </button></a>
    <a class=\"text-sm-right\" href=\"{{ path('reservation_rejet', { 'id': reservation.id }) }}\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"refuser\">  <i class=\"material-icons\" style=\"color:darkred\">close</i>   </button></a>
</div>
                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>


            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
            <br>
            <a href=\"{{ path('inventaireR_read')}}\">Voir inventaire des Reservations</a>
             <br>
        <a href=\"{{ path('reservation_archive')}}\">Voir les  Reservations traitées</a>


    <div class=\"navigation\">
        {{ knp_pagination_render(reservations) }}
    </div>
    {% endif %}
{% endblock %}

       <script>
           \$(document).ready(function(){
               \$(\"#myInput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
           });
       </script>

   {% endblock %}", "reservation/index.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\reservation\\index.html.twig");
    }
}
