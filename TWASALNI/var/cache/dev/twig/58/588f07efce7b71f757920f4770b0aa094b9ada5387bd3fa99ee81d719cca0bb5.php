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

/* UtilisateursUtilisateursBundle:Commission:read.html.twig */
class __TwigTemplate_3c8e30ca73486c4c89b3488397cdaec3b7d9e1f7c813ccf786eaed276e4d5648 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Commission:read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Commission:read.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "UtilisateursUtilisateursBundle:Commission:read.html.twig", 1);
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

       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css\">

       <br>
       <br>
       ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 63
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
        echo "           <h1 style=\" position: relative; right: -30px\">  liste des Commission pour Mr/Mme ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 18, $this->source); })()), "partenaire", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 18, $this->source); })()), "partenaire", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>

           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Depart</th>
                   <th class=\"th-sm\">Destination</th>
                   <th class=\"th-sm\">Prix de course</th>
                   <th class=\"th-sm\">Pourcentage</th>


                   ";
        // line 34
        echo "               </tr>
               </thead>
               <tbody id=\"myTable\">
               ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                   <tr>

                       <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                       <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "course", [], "any", false, false, false, 41), "depart", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                       <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "course", [], "any", false, false, false, 42), "destination", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                       <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "course", [], "any", false, false, false, 43), "prix", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                       <td>";
            // line 44
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["i"], "pourcentage", [], "any", false, false, false, 44) * 100), "html", null, true);
            echo "%</td>


                       <div style=\" display: flex;
  align-content: space-between;\">

                           ";
            // line 51
            echo "                           ";
            // line 52
            echo "                       </div>
                       </td>

                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "               </tbody>
           </table>
            <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comission_pdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", [0 => "id"], "method", false, false, false, 59)]), "html", null, true);
        echo "\">Génerer une facture pour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 59, $this->source); })()), "partenaire", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 59, $this->source); })()), "partenaire", [], "any", false, false, false, 59), "prenom", [], "any", false, false, false, 59), "html", null, true);
        echo "</a><br>
           <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventaire_read");
        echo "\"><button>Voir inventaire des courses</button></a>

       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Commission:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 60,  194 => 59,  190 => 57,  180 => 52,  178 => 51,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 38,  145 => 37,  140 => 34,  119 => 18,  109 => 17,  87 => 63,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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

       <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css\">

       <br>
       <br>
       {% block body %}
           <h1 style=\" position: relative; right: -30px\">  liste des Commission pour Mr/Mme {{ inventaire.partenaire.nom }}  {{ inventaire.partenaire.prenom }}</h1>

           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Depart</th>
                   <th class=\"th-sm\">Destination</th>
                   <th class=\"th-sm\">Prix de course</th>
                   <th class=\"th-sm\">Pourcentage</th>


                   {#<th class=\"th-sm\">Actions</th>#}
               </tr>
               </thead>
               <tbody id=\"myTable\">
               {% for i in liste %}
                   <tr>

                       <td>{{ i.id }}</td>
                       <td>{{ i.course.depart }}</td>
                       <td>{{ i.course.destination }}</td>
                       <td>{{ i.course.prix }}</td>
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
            <a href=\"{{ path('comission_pdf',{'id':app.request.get('id')}) }}\">Génerer une facture pour {{ inventaire.partenaire.nom }}  {{ inventaire.partenaire.prenom }}</a><br>
           <a href=\"{{ path('inventaire_read')}}\"><button>Voir inventaire des courses</button></a>

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

   {% endblock %}", "UtilisateursUtilisateursBundle:Commission:read.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Commission/read.html.twig");
    }
}
