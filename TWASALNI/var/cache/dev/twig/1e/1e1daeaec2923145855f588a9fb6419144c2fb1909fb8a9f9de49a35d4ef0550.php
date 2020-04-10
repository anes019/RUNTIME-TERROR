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

/* @UtilisateursUtilisateurs/CommissionR/pdf.html.twig */
class __TwigTemplate_0297f10b5e60dce1b1e8b3b449dff080339b98b1427621da9ce1442adec649c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/CommissionR/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/CommissionR/pdf.html.twig"));

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

       ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now"), "html", null, true);
        echo "
           <h1 style=\" position: relative; right: -30px\"> Details des commisions  pour Mr/Mme ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 15, $this->source); })()), "partenaire", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventaire"]) || array_key_exists("inventaire", $context) ? $context["inventaire"] : (function () { throw new RuntimeError('Variable "inventaire" does not exist.', 15, $this->source); })()), "partenaire", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>

           <br>
           <div class=\"count\">
               <h4> Nombre total des livraisons effectués : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 19, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 19), "html", null, true);
        echo "  </h4>

           </div>

           <table class=\"table table-bordered table-striped\">
               <tr>
                   ";
        // line 26
        echo "                   <th>";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 26, $this->source); })()), "Depart", "liste.reservation.pointAchat");
        echo "</th>
                   <th";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 27, $this->source); })()), "isSorted", [0 => "liste.reservation.destination"], "method", false, false, false, 27)) {
            echo " class=\"sorted\"";
        }
        echo ">
                       ";
        // line 28
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 28, $this->source); })()), "Destination", "liste.reservation.destination");
        echo "
                   </th>
                   <th";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 30, $this->source); })()), "isSorted", [0 => "liste.reservation.prix"], "method", false, false, false, 30)) {
            echo " class=\"sorted\"";
        }
        echo ">
                       ";
        // line 31
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 31, $this->source); })()), "Prix", "liste.reservation.prix");
        echo "
                   </th>
                   <th >Pourcentage</th>
               </tr>

               <tbody id=\"myTable\">
               ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                   <tr>
                       <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "reservation", [], "any", false, false, false, 39), "pointAchat", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                       <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "reservation", [], "any", false, false, false, 40), "destination", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                       <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "reservation", [], "any", false, false, false, 41), "prix", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                       <td>";
            // line 42
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["i"], "pourcentage", [], "any", false, false, false, 42) * 100), "html", null, true);
            echo "%</td>
                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "               </tbody>
           </table>
<br>
       <h4> Montant total à payer : ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 48, $this->source); })()), 0, [], "array", false, false, false, 48), "montant", [], "any", false, false, false, 48), "html", null, true);
        echo " DT </h4>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/CommissionR/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  139 => 45,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  115 => 38,  111 => 37,  102 => 31,  96 => 30,  91 => 28,  85 => 27,  80 => 26,  71 => 19,  62 => 15,  58 => 14,  43 => 1,);
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

       {{ 'now'|date() }}
           <h1 style=\" position: relative; right: -30px\"> Details des commisions  pour Mr/Mme {{ inventaire.partenaire.nom }}  {{ inventaire.partenaire.prenom }}</h1>

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
                   </tr>
               {% endfor %}
               </tbody>
           </table>
<br>
       <h4> Montant total à payer : {{ sum[0].montant }} DT </h4>


", "@UtilisateursUtilisateurs/CommissionR/pdf.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\CommissionR\\pdf.html.twig");
    }
}
