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

/* taxi/index.html.twig */
class __TwigTemplate_55f00fe91472417e45d912a4d80566689cbf40b180d234fe9a4d2335bb27e478 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxi/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxi/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "taxi/index.html.twig", 1);
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
        // line 61
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
        echo "           <h1 style=\" position: relative; right: -30px\">  liste des taxis </h1>
           <a class=\"text-sm-right\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_new");
        echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Ajouter un taxi\"><button class=\"btn btn-secondary btn-s\" data-title=\"New\" data-toggle=\"modal\" data-target=\"#new\" ><span class=\"glyphicon glyphicon-plus\"></span></button></p></a>
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Matricule</th>
                   <th class=\"th-sm\">Etat</th>
                   <th class=\"th-sm\">Marque</th>
                   <th class=\"th-sm\">Image</th>

                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxi"]) {
            // line 36
            echo "                   <tr>

                       <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "matricul", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                       <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "etat", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                       <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "marque", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                       <td><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/") . twig_get_attribute($this->env, $this->source, $context["taxi"], "image", [], "any", false, false, false, 41)), "html", null, true);
            echo "\" width=\"50\"></td>

                       <td>
                           <div style=\" display: flex;
  align-content: space-between;\">


                               <a class=\"text-sm-center \" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_show", ["id" => twig_get_attribute($this->env, $this->source, $context["taxi"], "matricul", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Afficher\"><button class=\"btn btn-success btn-s\" data-title=\"Show\" data-toggle=\"modal\" data-target=\"#show\" ><span class=\"glyphicon glyphicon-edit\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["taxi"], "matricul", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Supprimer\"><button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["taxi"], "matricul", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Modifier\"><button class=\"btn btn-primary btn-s\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></a>
                           </div>
                       </td>

                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "               </tbody>
           </table>


       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "taxi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 56,  179 => 50,  175 => 49,  171 => 48,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 36,  141 => 35,  122 => 19,  119 => 18,  109 => 17,  87 => 61,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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
           <h1 style=\" position: relative; right: -30px\">  liste des taxis </h1>
           <a class=\"text-sm-right\" href=\"{{ path('taxi_new') }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Ajouter un taxi\"><button class=\"btn btn-secondary btn-s\" data-title=\"New\" data-toggle=\"modal\" data-target=\"#new\" ><span class=\"glyphicon glyphicon-plus\"></span></button></p></a>
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Matricule</th>
                   <th class=\"th-sm\">Etat</th>
                   <th class=\"th-sm\">Marque</th>
                   <th class=\"th-sm\">Image</th>

                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               {% for taxi in taxis %}
                   <tr>

                       <td>{{ taxi.matricul }}</td>
                       <td>{{ taxi.etat }}</td>
                       <td>{{ taxi.marque }}</td>
                       <td><img src=\"{{ asset('templates/backoffice/images/')~taxi.image }}\" width=\"50\"></td>

                       <td>
                           <div style=\" display: flex;
  align-content: space-between;\">


                               <a class=\"text-sm-center \" href=\"{{ path('taxi_show', { 'id': taxi.matricul }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Afficher\"><button class=\"btn btn-success btn-s\" data-title=\"Show\" data-toggle=\"modal\" data-target=\"#show\" ><span class=\"glyphicon glyphicon-edit\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"{{ path('taxi_delete', { 'id': taxi.matricul }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Supprimer\"><button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"{{ path('taxi_edit', { 'id': taxi.matricul }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Modifier\"><button class=\"btn btn-primary btn-s\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></a>
                           </div>
                       </td>

                   </tr>
               {% endfor %}
               </tbody>
           </table>


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

   {% endblock %}", "taxi/index.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\taxi\\index.html.twig");
    }
}
