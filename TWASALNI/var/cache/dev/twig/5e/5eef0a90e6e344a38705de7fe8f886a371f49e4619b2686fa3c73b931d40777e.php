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

/* @UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig */
class __TwigTemplate_60ea69f2500e69441bf02f44a314864e4f571693aea6fea580d6acb0e4571ca5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig", 1);
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

       <script language=\"JavaScript\" src=\"https://code.jquery.com/jquery-1.11.1.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js\" type=\"text/javascript\"></script>
       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
       <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css\">

       <br>
       <br>
       ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 79
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
        echo "           <h1 style=\" position: relative; right: -30px\">  Archive des Inventaires des Reservations </h1>
           <br>
           ";
        // line 20
        if (twig_test_empty((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "           <div class=\"alert alert-warning\" role=\"alert\">
               Vous n'avez pas d'inventaire  en archive  ..
               veuillez consultez l'inventaire via ce lien
               <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
            echo "\"><button>Retour inventaire de ce mois</button></a>
               <br>
               <br>
               ou consulter toutes les reservations via ce lien
               <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            echo "\"><button>Voir toutes des Reservations</button></a>

           </div>
           ";
        } else {
            // line 32
            echo "           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <tr>
                   ";
            // line 37
            echo "                   <th>";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 37, $this->source); })()), "Nom", "liste.partenaire.nom");
            echo "</th>
                   <th";
            // line 38
            if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 38, $this->source); })()), "isSorted", [0 => "liste.partenaire.date "], "method", false, false, false, 38)) {
                echo " class=\"sorted\"";
            }
            echo ">
                       ";
            // line 39
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 39, $this->source); })()), "Date", "liste.partenaire.date");
            echo "
                   </th>
                   <th";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 41, $this->source); })()), "isSorted", [0 => "liste.montant"], "method", false, false, false, 41)) {
                echo " class=\"sorted\"";
            }
            echo ">
                       ";
            // line 42
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 42, $this->source); })()), "Montant", "liste.montant");
            echo "
                   </th>
                   <th class=\"th-sm\">Details</th>
                   <th class=\"th-sm\">Action</th>

               </tr>
               <tbody id=\"myTable\">
               ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                   <tr>


                       <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "partenaire", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "partenaire", [], "any", false, false, false, 53), "prenom", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                       <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dateI", [], "any", false, false, false, 54), "Y-m-d"), "html", null, true);
                echo "</td>
                       <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "montant", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>


                       <div style=\" display: flex;
  align-content: space-between;\">
                           <td><a class=\"text-sm-left \" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commissionR_read", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\"color: green\">assignment</i>   </button></a></td>

                           <td><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaire_notdone", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 62), "partenaire_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "partenaire", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"marquer non payé\">  <i class=\"material-icons\">money_off</i> Non Payé  </button></a></td>

                       </div>
                       </td>

                   </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "               </tbody>
           </table>

           <a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            echo "\"><button>Voir toutes les Reservation</button></a><br/>
           <a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
            echo "\"><button>Retour inventaire de ce mois</button></a>
               <div class=\"navigation\">
                   ";
            // line 75
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 75, $this->source); })()));
            echo "
               </div>
           ";
        }
        // line 78
        echo "       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 78,  241 => 75,  236 => 73,  232 => 72,  227 => 69,  214 => 62,  209 => 60,  201 => 55,  197 => 54,  191 => 53,  186 => 50,  182 => 49,  172 => 42,  166 => 41,  161 => 39,  155 => 38,  150 => 37,  144 => 32,  137 => 28,  130 => 24,  125 => 21,  123 => 20,  119 => 18,  109 => 17,  87 => 79,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
   {% block content %}
       <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
       <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
       <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
       <!------ Include the above in your HEAD tag ---------->

       <script language=\"JavaScript\" src=\"https://code.jquery.com/jquery-1.11.1.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
       <script language=\"JavaScript\" src=\"https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js\" type=\"text/javascript\"></script>
       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
       <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css\">

       <br>
       <br>
       {% block body %}
           <h1 style=\" position: relative; right: -30px\">  Archive des Inventaires des Reservations </h1>
           <br>
           {% if liste is empty %}
           <div class=\"alert alert-warning\" role=\"alert\">
               Vous n'avez pas d'inventaire  en archive  ..
               veuillez consultez l'inventaire via ce lien
               <a href=\"{{ path('inventaireR_read')}}\"><button>Retour inventaire de ce mois</button></a>
               <br>
               <br>
               ou consulter toutes les reservations via ce lien
               <a href=\"{{ path('reservation_index')}}\"><button>Voir toutes des Reservations</button></a>

           </div>
           {% else %}
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <tr>
                   {# sorting of properties based on query components #}
                   <th>{{ knp_pagination_sortable(liste, 'Nom', 'liste.partenaire.nom') }}</th>
                   <th{% if liste.isSorted('liste.partenaire.date ') %} class=\"sorted\"{% endif %}>
                       {{ knp_pagination_sortable(liste, 'Date', 'liste.partenaire.date') }}
                   </th>
                   <th{% if liste.isSorted('liste.montant') %} class=\"sorted\"{% endif %}>
                       {{ knp_pagination_sortable(liste, 'Montant', 'liste.montant') }}
                   </th>
                   <th class=\"th-sm\">Details</th>
                   <th class=\"th-sm\">Action</th>

               </tr>
               <tbody id=\"myTable\">
               {% for i in liste %}
                   <tr>


                       <td>{{ i.partenaire.nom }} {{ i.partenaire.prenom }}</td>
                       <td>{{ i.dateI|date('Y-m-d') }}</td>
                       <td>{{ i.montant }}</td>


                       <div style=\" display: flex;
  align-content: space-between;\">
                           <td><a class=\"text-sm-left \" href=\"{{ path('commissionR_read',{'id':i.id}) }}\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\"color: green\">assignment</i>   </button></a></td>

                           <td><a href=\"{{ path('inventaire_notdone',{'id':i.id,'partenaire_id':i.partenaire.id}) }}\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"marquer non payé\">  <i class=\"material-icons\">money_off</i> Non Payé  </button></a></td>

                       </div>
                       </td>

                   </tr>
               {% endfor %}
               </tbody>
           </table>

           <a href=\"{{ path('reservation_index')}}\"><button>Voir toutes les Reservation</button></a><br/>
           <a href=\"{{ path('inventaireR_read')}}\"><button>Retour inventaire de ce mois</button></a>
               <div class=\"navigation\">
                   {{ knp_pagination_render(liste) }}
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

   {% endblock %}", "@UtilisateursUtilisateurs/InventaireR/readArchiveReservation.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\InventaireR\\readArchiveReservation.html.twig");
    }
}
