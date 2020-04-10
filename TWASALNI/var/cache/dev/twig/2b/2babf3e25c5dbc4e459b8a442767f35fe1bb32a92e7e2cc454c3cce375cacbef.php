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

/* :reservation:archive.html.twig */
class __TwigTemplate_1e474fcf2d14050ef5ff00dae17d4fd04be3a312e2f0f8ae750dcc86418d8439 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":reservation:archive.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":reservation:archive.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", ":reservation:archive.html.twig", 1);
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
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 109
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

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <h1 style=\" position: relative; right: -30px\">  liste des réservations traitées </h1>
    <br>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "        <div class=\"alert-success text-center\" style=\"height: 70px\">
            <br>
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <div class=\"alert-danger text-center\" style=\"height: 70px\">
            <br>
            ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    <br>
    <br>
    ";
        // line 34
        if (twig_test_empty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        Vous n'avez pas de reservation traitée ..
        veuillez consultez l'inventaire des reservation via ce lien
        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
            echo "\"><button>Retour inventaire de ce mois</button></a>
        <br>
        <br>
        ou consulter les  reservations non traitées via ce lien
        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            echo "\"><button>Voir toutes les  reservations non traitées</button></a>

    </div>
    ";
        } else {
            // line 46
            echo "    <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
    <br>
    <div class=\"count\">
        <h4> Nombre total des réservation : ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 49, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 49), "html", null, true);
            echo "  </h4>
    </div>

    <table class=\"table table-bordered table-striped\">
        <tr>
            ";
            // line 55
            echo "            <th>";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 55, $this->source); })()), "Pointachat", "reservation.pointAchat");
            echo "</th>
            <th";
            // line 56
            if (twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 56, $this->source); })()), "isSorted", [0 => "reservation.destination"], "method", false, false, false, 56)) {
                echo " class=\"sorted\"";
            }
            echo ">
                ";
            // line 57
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 57, $this->source); })()), "Destination", "reservation.destination");
            echo "
            </th>
            <th";
            // line 59
            if (twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 59, $this->source); })()), "isSorted", [0 => [0 => "a.date", 1 => "a.time"]], "method", false, false, false, 59)) {
                echo " class=\"sorted\"";
            }
            echo ">
                ";
            // line 60
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 60, $this->source); })()), "Date", [0 => "a.date", 1 => "a.time"]);
            echo "
            </th>
            <th";
            // line 62
            if (twig_get_attribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 62, $this->source); })()), "isSorted", [0 => "reservation.etat"], "method", false, false, false, 62)) {
                echo " class=\"sorted\"";
            }
            echo ">
                ";
            // line 63
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 63, $this->source); })()), "Etat", "reservation.etat");
            echo "
            </th>
            <th >Actions</th>
        </tr>

        <tbody id=\"myTable\">

        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 71
                echo "            <tr>
                <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "pointAchat", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                <td>";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 74)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 74), "Y-m-d / h:m"), "html", null, true);
                }
                echo "</td>
                <td>  ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["reservation"], "etat", [], "any", false, false, false, 75) == "refusé")) {
                    // line 76
                    echo "<h4 style=\"color: red\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "etat", [], "any", false, false, false, 76), "html", null, true);
                    echo "</h4>
        ";
                } else {
                    // line 77
                    echo "<h4 style=\"color: green\">accepté</h4>

                    ";
                }
                // line 80
                echo "                </td>
                <td>
<div style=\" display: flex;
  align-content: space-between;\">

                    <a class=\"text-sm-left \" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_showarchive", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\" color: green\">assignment</i>   </button></a>

                <a class=\"text-sm-center \" href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"supprimer\">  <i class=\"material-icons\" style=\"color: darkred\">delete</i>   </button></a>
                    <a class=\"text-sm-right\" href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurer", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"restaurer\">  <i class=\"material-icons\">restore</i>   </button></a>
</div>
                </td>

            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        </tbody>
    </table>


            <a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
            echo "\">Create a new reservation</a>
            <br>
            <a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
            echo "\">Voir inventaire des Reservations</a>



    <div class=\"navigation\">
        ";
            // line 105
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 105, $this->source); })()));
            echo "
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 105,  312 => 100,  307 => 98,  301 => 94,  289 => 88,  285 => 87,  280 => 85,  273 => 80,  268 => 77,  262 => 76,  260 => 75,  254 => 74,  250 => 73,  246 => 72,  243 => 71,  239 => 70,  229 => 63,  223 => 62,  218 => 60,  212 => 59,  207 => 57,  201 => 56,  196 => 55,  188 => 49,  183 => 46,  176 => 42,  169 => 38,  164 => 35,  162 => 34,  158 => 32,  149 => 29,  145 => 27,  140 => 26,  131 => 23,  127 => 21,  123 => 20,  119 => 18,  109 => 17,  87 => 109,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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
    <h1 style=\" position: relative; right: -30px\">  liste des réservations traitées </h1>
    <br>
    {% for message in app.flashes('success') %}
        <div class=\"alert-success text-center\" style=\"height: 70px\">
            <br>
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert-danger text-center\" style=\"height: 70px\">
            <br>
            {{ message }}
        </div>
    {% endfor %}
    <br>
    <br>
    {% if reservations is empty %}
    <div class=\"alert alert-warning\" role=\"alert\">
        Vous n'avez pas de reservation traitée ..
        veuillez consultez l'inventaire des reservation via ce lien
        <a href=\"{{ path('inventaireR_read')}}\"><button>Retour inventaire de ce mois</button></a>
        <br>
        <br>
        ou consulter les  reservations non traitées via ce lien
        <a href=\"{{ path('reservation_index')}}\"><button>Voir toutes les  reservations non traitées</button></a>

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
            <th{% if reservations.isSorted('reservation.etat') %} class=\"sorted\"{% endif %}>
                {{ knp_pagination_sortable(reservations, 'Etat', 'reservation.etat') }}
            </th>
            <th >Actions</th>
        </tr>

        <tbody id=\"myTable\">

        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.pointAchat }}</td>
                <td>{{ reservation.destination }}</td>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d / h:m') }}{% endif %}</td>
                <td>  {% if  reservation.etat  ==\"refusé\" %}
<h4 style=\"color: red\">{{ reservation.etat }}</h4>
        {% else %}<h4 style=\"color: green\">accepté</h4>

                    {% endif %}
                </td>
                <td>
<div style=\" display: flex;
  align-content: space-between;\">

                    <a class=\"text-sm-left \" href=\"{{ path('reservation_showarchive', { 'id': reservation.id }) }}\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\" color: green\">assignment</i>   </button></a>

                <a class=\"text-sm-center \" href=\"{{ path('reservation_delete', { 'id': reservation.id }) }}\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"supprimer\">  <i class=\"material-icons\" style=\"color: darkred\">delete</i>   </button></a>
                    <a class=\"text-sm-right\" href=\"{{ path('reservation_restaurer', { 'id': reservation.id }) }}\"><button data-placement=\"top\" data-toggle=\"tooltip\" title=\"restaurer\">  <i class=\"material-icons\">restore</i>   </button></a>
</div>
                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>


            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
            <br>
            <a href=\"{{ path('inventaireR_read')}}\">Voir inventaire des Reservations</a>



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

   {% endblock %}", ":reservation:archive.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app/Resources\\views/reservation/archive.html.twig");
    }
}
