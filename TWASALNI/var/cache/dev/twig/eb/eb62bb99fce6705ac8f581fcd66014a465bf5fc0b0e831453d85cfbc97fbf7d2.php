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

/* partenaire/index.html.twig */
class __TwigTemplate_2c313a68c80db6e506059efdd920e103dbcb756e849e61d5ea5392741e1605f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "partenaire/index.html.twig", 1);
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
        // line 75
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
        echo "           <h1 style=\" position: relative; right: -30px\">  liste des partenaires </h1>
           <a class=\"text-sm-right\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_new");
        echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Ajouter un partenaire\"><button class=\"btn btn-secondary btn-s\" data-title=\"New\" data-toggle=\"modal\" data-target=\"#new\" ><span class=\"glyphicon glyphicon-plus\"></span></button></p></a>
           <a class=\"text-sm-right\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_new");
        echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Ajouter un partenaire\"><button class=\"btn btn-secondary btn-s\" data-title=\"New\" data-toggle=\"modal\" data-target=\"#new\" ><span class=\"glyphicon glyphicon-plus\"></span></button></p></a>
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Nom</th>
                   <th class=\"th-sm\">Prenom</th>
                   <th class=\"th-sm\">Mail</th>
                   <th class=\"th-sm\">Mot de passe</th>
                   <th class=\"th-sm\">Telephone</th>

                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 39
            echo "                   <tr>

                       <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                       <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                       <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                       <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "mail", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                       <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "mdp", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                       <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "tel", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>

                       <td>
                           <div style=\" display: flex;
  align-content: space-between;\">


                               <a class=\"text-sm-center \" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Afficher\"><button class=\"btn btn-success btn-s\" data-title=\"Show\" data-toggle=\"modal\" data-target=\"#show\" ><span class=\"glyphicon glyphicon-edit\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Supprimer\"><button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Modifier\"><button class=\"btn btn-primary btn-s\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></a>
                           </div>
                       </td>

                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "               </tbody>
           </table>
    <dir>
        ";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()));
        echo "
    </dir>


           <div id=\"div_chart\"></div>
           <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
           <script type=\"text/javascript\">
               ";
        // line 71
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new RuntimeError('Variable "piechart" does not exist.', 71, $this->source); })()), "div_chart");
        echo "
           </script>

       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 71,  210 => 64,  205 => 61,  193 => 55,  189 => 54,  185 => 53,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 39,  147 => 38,  126 => 20,  122 => 19,  119 => 18,  109 => 17,  87 => 75,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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
           <h1 style=\" position: relative; right: -30px\">  liste des partenaires </h1>
           <a class=\"text-sm-right\" href=\"{{ path('taxi_new') }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Ajouter un partenaire\"><button class=\"btn btn-secondary btn-s\" data-title=\"New\" data-toggle=\"modal\" data-target=\"#new\" ><span class=\"glyphicon glyphicon-plus\"></span></button></p></a>
           <a class=\"text-sm-right\" href=\"{{ path('partenaire_new') }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Ajouter un partenaire\"><button class=\"btn btn-secondary btn-s\" data-title=\"New\" data-toggle=\"modal\" data-target=\"#new\" ><span class=\"glyphicon glyphicon-plus\"></span></button></p></a>
           <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Nom</th>
                   <th class=\"th-sm\">Prenom</th>
                   <th class=\"th-sm\">Mail</th>
                   <th class=\"th-sm\">Mot de passe</th>
                   <th class=\"th-sm\">Telephone</th>

                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               {% for partenaire in pagination %}
                   <tr>

                       <td>{{ partenaire.id }}</td>
                       <td>{{ partenaire.nom }}</td>
                       <td>{{ partenaire.prenom }}</td>
                       <td>{{ partenaire.mail }}</td>
                       <td>{{ partenaire.mdp }}</td>
                       <td>{{ partenaire.tel }}</td>

                       <td>
                           <div style=\" display: flex;
  align-content: space-between;\">


                               <a class=\"text-sm-center \" href=\"{{ path('partenaire_show', { 'id': partenaire.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Afficher\"><button class=\"btn btn-success btn-s\" data-title=\"Show\" data-toggle=\"modal\" data-target=\"#show\" ><span class=\"glyphicon glyphicon-edit\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"{{ path('partenaire_delete', { 'id': partenaire.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Supprimer\"><button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button></p></a>
                               <a class=\"text-sm-right\" href=\"{{ path('partenaire_edit', { 'id': partenaire.id }) }}\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Modifier\"><button class=\"btn btn-primary btn-s\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></p></a>
                           </div>
                       </td>

                   </tr>
               {% endfor %}
               </tbody>
           </table>
    <dir>
        {{ knp_pagination_render(pagination) }}
    </dir>


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

   {% endblock %}", "partenaire/index.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\partenaire\\index.html.twig");
    }
}
