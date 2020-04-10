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

/* @UtilisateursUtilisateurs/Courses/pdf.html.twig */
class __TwigTemplate_72bc8835d454c14373a7f1e9d7f2d8e10a16209d9e5f06c6231b5ae2861d933d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/Courses/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/Courses/pdf.html.twig"));

        // line 1
        echo "
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

           <h1 style=\" position: relative; right: -30px\">  liste des courses pour ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "partenaire", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo " à partir de la date ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 17, $this->source); })()), "dateI", [], "any", false, false, false, 17)), "html", null, true);
        echo " </h1> <br/>
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   ";
        // line 25
        echo "                   ";
        // line 26
        echo "                   <th class=\"th-sm\">Depart</th>
                   <th class=\"th-sm\">Destination</th>
                   <th class=\"th-sm\">Pourcentage</th>
                   <th class=\"th-sm\">Prix</th>


               </tr>
               </thead>
               <tbody id=\"myTable\">
               ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "                   <tr>

                       <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                       ";
            // line 40
            echo "                       ";
            // line 41
            echo "                       <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "course", [], "any", false, false, false, 41), "depart", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                       <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "course", [], "any", false, false, false, 42), "destination", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                       <td>";
            // line 43
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["i"], "pourcentage", [], "any", false, false, false, 43) * 100), "html", null, true);
            echo "</td>
                       <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "course", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>



                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "               </tbody>
           </table>

       <h1>Montant total : ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 53, $this->source); })()), "montant", [], "any", false, false, false, 53), "html", null, true);
        echo "</h1>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/Courses/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 50,  113 => 44,  109 => 43,  105 => 42,  100 => 41,  98 => 40,  94 => 38,  90 => 36,  86 => 35,  75 => 26,  73 => 25,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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

           <h1 style=\" position: relative; right: -30px\">  liste des courses pour {{ liste[0].partenaire.nom }} à partir de la date {{ inventaire.dateI|date }} </h1> <br/>
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   {#<th class=\"th-sm\">Client</th>#}
                   {#<th class=\"th-sm\">Partenaire</th>#}
                   <th class=\"th-sm\">Depart</th>
                   <th class=\"th-sm\">Destination</th>
                   <th class=\"th-sm\">Pourcentage</th>
                   <th class=\"th-sm\">Prix</th>


               </tr>
               </thead>
               <tbody id=\"myTable\">
               {% for i in liste %}
                   <tr>

                       <td>{{i.id}}</td>
                       {#<td>{{ i.client.nom }}</td>#}
                       {#<td>{{ i.partenaire.nom }}</td>#}
                       <td>{{ i.course.depart }}</td>
                       <td>{{ i.course.destination }}</td>
                       <td>{{ i.pourcentage*100 }}</td>
                       <td>{{ i.course.prix }}</td>



                   </tr>
               {% endfor %}
               </tbody>
           </table>

       <h1>Montant total : {{ inventaire.montant }}</h1>



", "@UtilisateursUtilisateurs/Courses/pdf.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\Courses\\pdf.html.twig");
    }
}
