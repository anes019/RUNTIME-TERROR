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

/* @UtilisateursUtilisateurs/CommissionR/read.html.twig */
class __TwigTemplate_236e42f4b7f750168c26342a23eb92f605b416f1657de8a9226091b5528d05fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/CommissionR/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/CommissionR/read.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@UtilisateursUtilisateurs/CommissionR/read.html.twig", 1);
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
        // line 73
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
        echo "           <h1 style=\" position: relative; right: -30px\">  Details des commisions  pour Mr/Mme ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 18, $this->source); })()), "partenaire", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 18, $this->source); })()), "partenaire", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <div class=\"count\">
               <h4> Nombre total des livraisons effectués : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 22, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
        echo "  </h4>


           </div>


           <table class=\"table table-bordered table-striped\">
               <tr>
                   ";
        // line 31
        echo "                   <th>";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 31, $this->source); })()), "Depart", "liste.reservation.pointAchat");
        echo "</th>
                   <th";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 32, $this->source); })()), "isSorted", [0 => "liste.reservation.destination"], "method", false, false, false, 32)) {
            echo " class=\"sorted\"";
        }
        echo ">
                       ";
        // line 33
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 33, $this->source); })()), "Destination", "liste.reservation.destination");
        echo "
                   </th>
                   <th";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 35, $this->source); })()), "isSorted", [0 => "liste.reservation.prix"], "method", false, false, false, 35)) {
            echo " class=\"sorted\"";
        }
        echo ">
                       ";
        // line 36
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 36, $this->source); })()), "Prix", "liste.reservation.prix");
        echo "
                   </th>
                   <th >Pourcentage</th>
               </tr>

               <tbody id=\"myTable\">
               ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "                   <tr>

                       <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "reservation", [], "any", false, false, false, 45), "pointAchat", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                       <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "reservation", [], "any", false, false, false, 46), "destination", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                       <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "reservation", [], "any", false, false, false, 47), "prix", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                       <td>";
            // line 48
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["i"], "pourcentage", [], "any", false, false, false, 48) * 100), "html", null, true);
            echo "%</td>


                       <div style=\" display: flex;
  align-content: space-between;\">

                           ";
            // line 55
            echo "                           ";
            // line 56
            echo "                       </div>
                       </td>

                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "               </tbody>
           </table>
           <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commissionR_pdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", [0 => "id"], "method", false, false, false, 63)]), "html", null, true);
        echo "\"><button><h4 >gener une facture pour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 63, $this->source); })()), "partenaire", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 63, $this->source); })()), "partenaire", [], "any", false, false, false, 63), "prenom", [], "any", false, false, false, 63), "html", null, true);
        echo " <i class=\"material-icons\">file_download</i> </h4> </button></a>
          <br>
           <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaireR_read");
        echo "\"><button>Voir inventaire des Reservations</button></a>
           <br>

           <div class=\"navigation\">
               ";
        // line 69
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 69, $this->source); })()));
        echo "
           </div>

       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/CommissionR/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 69,  225 => 65,  216 => 63,  212 => 61,  202 => 56,  200 => 55,  191 => 48,  187 => 47,  183 => 46,  179 => 45,  175 => 43,  171 => 42,  162 => 36,  156 => 35,  151 => 33,  145 => 32,  140 => 31,  129 => 22,  119 => 18,  109 => 17,  87 => 73,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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
           <h1 style=\" position: relative; right: -30px\">  Details des commisions  pour Mr/Mme {{ inventaire.partenaire.nom }}  {{ inventaire.partenaire.prenom }}</h1>
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <div class=\"count\">
               <h4> Nombre total des livraisons effectués : {{ liste.getTotalItemCount }}  </h4>


           </div>


           <table class=\"table table-bordered table-striped\">
               <tr>
                   {# sorting of properties based on query components #}
                   <th>{{ knp_pagination_sortable(liste, 'Depart', 'liste.reservation.pointAchat') }}</th>
                   <th{% if liste.isSorted('liste.reservation.destination') %} class=\"sorted\"{% endif %}>
                       {{ knp_pagination_sortable(liste, 'Destination', 'liste.reservation.destination') }}
                   </th>
                   <th{% if liste.isSorted('liste.reservation.prix') %} class=\"sorted\"{% endif %}>
                       {{ knp_pagination_sortable(liste, 'Prix', 'liste.reservation.prix') }}
                   </th>
                   <th >Pourcentage</th>
               </tr>

               <tbody id=\"myTable\">
               {% for i in liste %}
                   <tr>

                       <td>{{ i.reservation.pointAchat }}</td>
                       <td>{{ i.reservation.destination }}</td>
                       <td>{{ i.reservation.prix }}</td>
                       <td>{{ i.pourcentage*100 }}%</td>


                       <div style=\" display: flex;
  align-content: space-between;\">

                           {#<a class=\"text-sm-center \" href=\"{{ path('course_update', { 'id': i.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"modifier\"><button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-edit\"></span></button></p></a>#}
                           {#<a class=\"text-sm-right\" href=\"{{ path('course_delete', { 'id': i.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></a>#}
                       </div>
                       </td>

                   </tr>
               {% endfor %}
               </tbody>
           </table>
           <a href=\"{{ path('commissionR_pdf', { 'id': app.request.get('id') })}}\"><button><h4 >gener une facture pour {{ inventaire.partenaire.nom }}  {{ inventaire.partenaire.prenom }} <i class=\"material-icons\">file_download</i> </h4> </button></a>
          <br>
           <a href=\"{{ path('inventaireR_read')}}\"><button>Voir inventaire des Reservations</button></a>
           <br>

           <div class=\"navigation\">
               {{ knp_pagination_render(liste) }}
           </div>

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

   {% endblock %}", "@UtilisateursUtilisateurs/CommissionR/read.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\CommissionR\\read.html.twig");
    }
}
