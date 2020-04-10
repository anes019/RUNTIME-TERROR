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

/* @UtilisateursUtilisateurs/InventaireR/read.html.twig */
class __TwigTemplate_583d5d2f95a3a79114acd0058fceeb7a45e8791a65483677c19236e05322d5f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/InventaireR/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/InventaireR/read.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@UtilisateursUtilisateurs/InventaireR/read.html.twig", 1);
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
        // line 99
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
        echo "           <h1 style=\" position: relative; right: -30px\">  liste des Inventaires des Reservation </h1>
           <br>
           ";
        // line 20
        if (twig_test_empty((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "               <div class=\"alert alert-warning\" role=\"alert\">
                  Vous n'avez pas d'inventaire en cours ..
                   veuillez consultez l'archive des inventaire via ce lien
                   <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaire_readArchivereservation");
            echo "\"><button>Voir archive des inventaires</button></a>

                   <br>
                   <br>
                   ou consulter toutes les reservations via ce lien
                   <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            echo "\"><button>Voir toutes des Reservations</button></a>

               </div>
           ";
        } else {
            // line 33
            echo "           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
               <div class=\"count\">
                   <h4> Nombre total des commission : ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 36, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 36), "html", null, true);
            echo "  </h4>
               </div>
           <table class=\"table table-bordered table-striped\">
               <tr>
                   ";
            // line 41
            echo "                   <th>";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 41, $this->source); })()), "Nom", "liste.partenaire.nom");
            echo "</th>
                   <th";
            // line 42
            if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 42, $this->source); })()), "isSorted", [0 => "liste.partenaire.prenom "], "method", false, false, false, 42)) {
                echo " class=\"sorted\"";
            }
            echo ">
                       ";
            // line 43
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 43, $this->source); })()), "Prenom", "liste.partenaire.prenom ");
            echo "
                   </th>
                   <th";
            // line 45
            if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 45, $this->source); })()), "isSorted", [0 => "liste.montant"], "method", false, false, false, 45)) {
                echo " class=\"sorted\"";
            }
            echo ">
                       ";
            // line 46
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 46, $this->source); })()), "Montant", "liste.montant");
            echo "
                   </th>

                   <th class=\"th-sm\">Details</th>
                   <th class=\"th-sm\">Action</th>
               </tr>

               <tbody id=\"myTable\">


               ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                echo "                   <tr>


                       <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "partenaire", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                       <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "partenaire", [], "any", false, false, false, 61), "prenom", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                       <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "montant", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>


                           <div style=\" display: flex;
  align-content: space-between;\">

                       <td>
                         <a class=\"text-sm-left \" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commissionR_read", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\"color: green\">assignment</i>   </button></a>
                               <td><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaire_done", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"marquer non payé\">  <i class=\"material-icons\">money</i> Payé  </button></a></td>
                               ";
                // line 72
                echo "                               ";
                // line 73
                echo "
                           </div>
                       </td>

                   </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
               </tbody>
           </table>

           <a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            echo "\"><button>Voir toutes des Reservations</button></a>
          <br>
           <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaire_readArchivereservation");
            echo "\"><button>Voir archive des inventaires</button></a>
               <div class=\"navigation\">
                   ";
            // line 87
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 87, $this->source); })()));
            echo "
               </div>
           ";
        }
        // line 90
        echo "

           <div id=\"div_chart\"></div>

           <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
           <script type=\"text/javascript\">
               ";
        // line 96
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new RuntimeError('Variable "piechart" does not exist.', 96, $this->source); })()), "div_chart");
        echo "
           </script>
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/InventaireR/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 96,  262 => 90,  256 => 87,  251 => 85,  246 => 83,  240 => 79,  229 => 73,  227 => 72,  223 => 70,  219 => 69,  209 => 62,  205 => 61,  201 => 60,  196 => 57,  192 => 56,  179 => 46,  173 => 45,  168 => 43,  162 => 42,  157 => 41,  150 => 36,  145 => 33,  138 => 29,  130 => 24,  125 => 21,  123 => 20,  119 => 18,  109 => 17,  87 => 99,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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
           <h1 style=\" position: relative; right: -30px\">  liste des Inventaires des Reservation </h1>
           <br>
           {% if liste is empty %}
               <div class=\"alert alert-warning\" role=\"alert\">
                  Vous n'avez pas d'inventaire en cours ..
                   veuillez consultez l'archive des inventaire via ce lien
                   <a href=\"{{ path('inventaire_readArchivereservation')}}\"><button>Voir archive des inventaires</button></a>

                   <br>
                   <br>
                   ou consulter toutes les reservations via ce lien
                   <a href=\"{{ path('reservation_index')}}\"><button>Voir toutes des Reservations</button></a>

               </div>
           {% else %}
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
               <div class=\"count\">
                   <h4> Nombre total des commission : {{ liste.getTotalItemCount }}  </h4>
               </div>
           <table class=\"table table-bordered table-striped\">
               <tr>
                   {# sorting of properties based on query components #}
                   <th>{{ knp_pagination_sortable(liste, 'Nom', 'liste.partenaire.nom') }}</th>
                   <th{% if liste.isSorted('liste.partenaire.prenom ') %} class=\"sorted\"{% endif %}>
                       {{ knp_pagination_sortable(liste, 'Prenom', 'liste.partenaire.prenom ') }}
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


                       <td>{{ i.partenaire.nom }}</td>
                       <td>{{ i.partenaire.prenom }}</td>
                       <td>{{ i.montant }}</td>


                           <div style=\" display: flex;
  align-content: space-between;\">

                       <td>
                         <a class=\"text-sm-left \" href=\"{{ path('commissionR_read',{'id':i.id}) }}\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"details\">  <i class=\"material-icons\" style=\"color: green\">assignment</i>   </button></a>
                               <td><a href=\"{{ path('inventaire_done',{'id':i.id}) }}\"> <button data-placement=\"top\" data-toggle=\"tooltip\" title=\"marquer non payé\">  <i class=\"material-icons\">money</i> Payé  </button></a></td>
                               {#<a class=\"text-sm-center \" href=\"{{ path('course_update', { 'id': i.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"modifier\"><button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-edit\"></span></button></p></a>#}
                               {#<a class=\"text-sm-right\" href=\"{{ path('course_delete', { 'id': i.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></a>#}

                           </div>
                       </td>

                   </tr>
               {% endfor %}

               </tbody>
           </table>

           <a href=\"{{ path('reservation_index')}}\"><button>Voir toutes des Reservations</button></a>
          <br>
           <a href=\"{{ path('inventaire_readArchivereservation')}}\"><button>Voir archive des inventaires</button></a>
               <div class=\"navigation\">
                   {{ knp_pagination_render(liste) }}
               </div>
           {% endif %}


           <div id=\"div_chart\"></div>

           <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
           <script type=\"text/javascript\">
               {{ gc_draw(piechart, 'div_chart') }}
           </script>
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

   {% endblock %}", "@UtilisateursUtilisateurs/InventaireR/read.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\InventaireR\\read.html.twig");
    }
}
