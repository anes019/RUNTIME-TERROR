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

/* @FeedBack/Admin/reclammation.html.twig */
class __TwigTemplate_7e6d54a5edcbd2b7b053129aa6b3adaad16f235992900671e1595aa04873e6f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FeedBack/Admin/reclammation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FeedBack/Admin/reclammation.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@FeedBack/Admin/reclammation.html.twig", 1);
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
           <h1 style=\" position: relative; right: -30px\">  Liste des Reclammations </h1>

           <div class=\"row\">
               <div class=\"col-md-12\">
                   <div class=\"table-data__tool\">
                       <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
                       <div class=\"table-data__tool-right\">
                           <div class=\"rs-select2--dark rs-select2--sm rs-select2--dark2\">
                               <select class=\"js-select2\" name=\"type\" >
                                   <option selected=\"selected\">Tout</option>
                                   <option selected=\"selected\">Envoye</option>
                                   <option selected=\"selected\">En Attente</option>
                                   <option selected=\"selected\">Repondu</option>
                               </select>
                               <div class=\"dropDownSelect2\"></div>
                           </div>
                               <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                   <i class=\"zmdi zmdi-refresh\"></i>Trier
                               </button>
                       </div>
                   </div>
               </div>
           </div>
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Nom</th>
                   <th class=\"th-sm\">Prenom</th>
                   <th class=\"th-sm\">Email
                   </th>
                   <th class=\"th-sm\">Sujet</th>
                   <th class=\"th-sm\">Contenu</th>
                   <th class=\"th-sm\">Etat</th>
                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclammation"]) || array_key_exists("reclammation", $context) ? $context["reclammation"] : (function () { throw new RuntimeError('Variable "reclammation" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 58
            echo "                   <tr>

                       <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                       <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                       <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                       <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true);
            echo "
                       </td>
                       <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sujet", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                       <td>
                           ";
            // line 67
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 67)) < 15)) {
                // line 68
                echo "                               ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 68), "html", null, true);
                echo "
                           ";
            } else {
                // line 70
                echo "                               ";
                $context["contenu"] = twig_get_attribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 70);
                // line 71
                echo "                               ";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 71, $this->source); })()), 0, 5), "html", null, true);
                echo "....";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 71, $this->source); })()), (twig_length_filter($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 71, $this->source); })())) - 3), twig_length_filter($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 71, $this->source); })()))), "html", null, true);
                echo "
                           ";
            }
            // line 73
            echo "                       </td>
                       <td>

                           ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 76) == "En Attente")) {
                // line 77
                echo "                               <span class=\"status--denied\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 77), "html", null, true);
                echo "</span>
                           ";
            }
            // line 79
            echo "                           ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 79) == "Repondu")) {
                // line 80
                echo "                               <span class=\"status--warning\" style=\"color: #FF8C00\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 80), "html", null, true);
                echo "</span>
                           ";
            }
            // line 82
            echo "                           ";
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 82) == "Envoye")) {
                // line 83
                echo "                               <span class=\"status--success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 83), "html", null, true);
                echo "</span>
                           ";
            }
            // line 85
            echo "                       </td>

                       <td>
                           <div style=\" display: flex;
                                        align-content: space-between;\">
                               <a class=\"text-sm-center \" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_reponse_reclammation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">
                                   <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Repondre\">
                                       <button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#edit\" >
                                           <span class=\"glyphicon glyphicon-edit\"></span>
                                       </button>
                                   </p>
                               </a>
                               <a class=\"text-sm-right\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_delete_reclammation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">
                                   <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                                       <button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" >
                                           <span class=\"glyphicon glyphicon-trash\"></span>
                                       </button>
                                   </p>
                               </a>
                           </div>
                       </td>

                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "               </tbody>
           </table>

       <h1 style=\" position: relative; right: -30px\">  Reponse Des Reclammations </h1>
       <input style=\"width: 400px\" class=\"form-control\" id=\"myInput2\" type=\"text\" placeholder=\"Search..\">
       <br>
       <table class=\"table table-bordered table-striped\">
           <thead>
           <tr>

               <th class=\"th-sm\">Id</th>
               <th class=\"th-sm\">Utilisateur</th>
               <th class=\"th-sm\">Email</th>
               <th class=\"th-sm\">Date</th>
               <th class=\"th-sm\">Sujet</th>
               <th class=\"th-sm\">Contenu</th>
               <th class=\"th-sm\">Actions</th>
           </tr>
           </thead>
           <tbody id=\"myTable2\">
           ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 130
            echo "               <tr>

                   <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                   <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 133), "username", [], "any", false, false, false, 133), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 133), "prenom", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                   <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 134), "email", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                   <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateReponse", [], "any", false, false, false, 135), "d-m-Y"), "html", null, true);
            echo "</td>
                   <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sujet", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
                   <td>
                       ";
            // line 138
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 138)) < 15)) {
                // line 139
                echo "                           ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 139), "html", null, true);
                echo "
                       ";
            } else {
                // line 141
                echo "                           ";
                $context["contenu"] = twig_get_attribute($this->env, $this->source, $context["r"], "contenu", [], "any", false, false, false, 141);
                // line 142
                echo "                           ";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 142, $this->source); })()), 0, 5), "html", null, true);
                echo "....";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 142, $this->source); })()), (twig_length_filter($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 142, $this->source); })())) - 3), twig_length_filter($this->env, (isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 142, $this->source); })()))), "html", null, true);
                echo "
                       ";
            }
            // line 144
            echo "                   </td>
                   <td>
                       <div style=\" display: flex;
                                        align-content: space-between;\">
                           <a class=\"text-sm-center \" href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_reponse_reclammation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\">
                               <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Modifier\">
                                   <button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#Modifier\" >
                                       <span class=\"glyphicon glyphicon-edit\"></span>
                                   </button>
                               </p>
                           </a>
                       </div>
                   </td>
                   <td>
                       <div style=\" display: flex;
                                        align-content: space-between;\">
                           <a class=\"text-sm-center \" href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_envoyer_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\">
                               <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Envoyer\">
                                   <button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#edit\" >
                                       <span class=\"glyphicon glyphicon-send\"></span>
                                   </button>
                               </p>
                           </a>
                       </div>
                   </td>
                   <td>
                       <div style=\" display: flex;
                                        align-content: space-between;\">
                           <a class=\"text-sm-right\" href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_delete_reclammation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\">
                               <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                                   <button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" >
                                       <span class=\"glyphicon glyphicon-trash\"></span>
                                   </button>
                               </p>
                           </a>
                       </div>
                   </td>

               </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "           </tbody>
       </table>

       <script>
           \$(document).ready(function(){
               \$(\"#myInput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
               \$(\"#myInput2\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable2 tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
           });
       </script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FeedBack/Admin/reclammation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 184,  347 => 172,  332 => 160,  317 => 148,  311 => 144,  303 => 142,  300 => 141,  294 => 139,  292 => 138,  287 => 136,  283 => 135,  279 => 134,  273 => 133,  269 => 132,  265 => 130,  261 => 129,  239 => 109,  221 => 97,  211 => 90,  204 => 85,  198 => 83,  195 => 82,  189 => 80,  186 => 79,  180 => 77,  178 => 76,  173 => 73,  165 => 71,  162 => 70,  156 => 68,  154 => 67,  149 => 65,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  128 => 58,  124 => 57,  68 => 3,  58 => 2,  35 => 1,);
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
           <h1 style=\" position: relative; right: -30px\">  Liste des Reclammations </h1>

           <div class=\"row\">
               <div class=\"col-md-12\">
                   <div class=\"table-data__tool\">
                       <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">
                       <div class=\"table-data__tool-right\">
                           <div class=\"rs-select2--dark rs-select2--sm rs-select2--dark2\">
                               <select class=\"js-select2\" name=\"type\" >
                                   <option selected=\"selected\">Tout</option>
                                   <option selected=\"selected\">Envoye</option>
                                   <option selected=\"selected\">En Attente</option>
                                   <option selected=\"selected\">Repondu</option>
                               </select>
                               <div class=\"dropDownSelect2\"></div>
                           </div>
                               <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                   <i class=\"zmdi zmdi-refresh\"></i>Trier
                               </button>
                       </div>
                   </div>
               </div>
           </div>
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Nom</th>
                   <th class=\"th-sm\">Prenom</th>
                   <th class=\"th-sm\">Email
                   </th>
                   <th class=\"th-sm\">Sujet</th>
                   <th class=\"th-sm\">Contenu</th>
                   <th class=\"th-sm\">Etat</th>
                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               {% for r in reclammation %}
                   <tr>

                       <td>{{r.id}}</td>
                       <td>{{ r.client.username }}</td>
                       <td>{{ r.client.prenom }}</td>
                       <td> {{ r.client.email }}
                       </td>
                       <td>{{ r.sujet }}</td>
                       <td>
                           {% if r.contenu|length < 15 %}
                               {{ r.contenu }}
                           {% else %}
                               {%  set contenu=r.contenu %}
                               {{ contenu|slice(0,5)}}....{{ contenu|slice(contenu|length-3,contenu|length)}}
                           {% endif %}
                       </td>
                       <td>

                           {% if r.etat == 'En Attente' %}
                               <span class=\"status--denied\">{{ r.etat }}</span>
                           {% endif %}
                           {% if r.etat =='Repondu' %}
                               <span class=\"status--warning\" style=\"color: #FF8C00\">{{ r.etat }}</span>
                           {% endif %}
                           {% if r.etat =='Envoye' %}
                               <span class=\"status--success\">{{ r.etat }}</span>
                           {% endif %}
                       </td>

                       <td>
                           <div style=\" display: flex;
                                        align-content: space-between;\">
                               <a class=\"text-sm-center \" href=\"{{ path('feed_back_reponse_reclammation',{'id':r.id}) }}\">
                                   <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Repondre\">
                                       <button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#edit\" >
                                           <span class=\"glyphicon glyphicon-edit\"></span>
                                       </button>
                                   </p>
                               </a>
                               <a class=\"text-sm-right\" href=\"{{ path('feed_back_delete_reclammation',{'id':r.id}) }}\">
                                   <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                                       <button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" >
                                           <span class=\"glyphicon glyphicon-trash\"></span>
                                       </button>
                                   </p>
                               </a>
                           </div>
                       </td>

                   </tr>
               {% endfor %}
               </tbody>
           </table>

       <h1 style=\" position: relative; right: -30px\">  Reponse Des Reclammations </h1>
       <input style=\"width: 400px\" class=\"form-control\" id=\"myInput2\" type=\"text\" placeholder=\"Search..\">
       <br>
       <table class=\"table table-bordered table-striped\">
           <thead>
           <tr>

               <th class=\"th-sm\">Id</th>
               <th class=\"th-sm\">Utilisateur</th>
               <th class=\"th-sm\">Email</th>
               <th class=\"th-sm\">Date</th>
               <th class=\"th-sm\">Sujet</th>
               <th class=\"th-sm\">Contenu</th>
               <th class=\"th-sm\">Actions</th>
           </tr>
           </thead>
           <tbody id=\"myTable2\">
           {% for r in reponse %}
               <tr>

                   <td>{{r.id}}</td>
                   <td>{{ r.client.username }} {{ r.client.prenom }}</td>
                   <td>{{ r.client.email }}</td>
                   <td>{{ r.dateReponse|date('d-m-Y') }}</td>
                   <td>{{ r.sujet }}</td>
                   <td>
                       {% if r.contenu|length < 15 %}
                           {{ r.contenu }}
                       {% else %}
                           {%  set contenu=r.contenu %}
                           {{ contenu|slice(0,5)}}....{{ contenu|slice(contenu|length-3,contenu|length)}}
                       {% endif %}
                   </td>
                   <td>
                       <div style=\" display: flex;
                                        align-content: space-between;\">
                           <a class=\"text-sm-center \" href=\"{{ path('feed_back_reponse_reclammation',{'id':r.id}) }}\">
                               <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Modifier\">
                                   <button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#Modifier\" >
                                       <span class=\"glyphicon glyphicon-edit\"></span>
                                   </button>
                               </p>
                           </a>
                       </div>
                   </td>
                   <td>
                       <div style=\" display: flex;
                                        align-content: space-between;\">
                           <a class=\"text-sm-center \" href=\"{{ path('feed_back_envoyer_reponse',{'id':r.id}) }}\">
                               <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Envoyer\">
                                   <button class=\"btn btn-success btn-s\" data-title=\"edit\" data-toggle=\"modal\" data-target=\"#edit\" >
                                       <span class=\"glyphicon glyphicon-send\"></span>
                                   </button>
                               </p>
                           </a>
                       </div>
                   </td>
                   <td>
                       <div style=\" display: flex;
                                        align-content: space-between;\">
                           <a class=\"text-sm-right\" href=\"{{ path('feed_back_delete_reclammation',{'id':r.id}) }}\">
                               <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                                   <button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" >
                                       <span class=\"glyphicon glyphicon-trash\"></span>
                                   </button>
                               </p>
                           </a>
                       </div>
                   </td>

               </tr>
           {% endfor %}
           </tbody>
       </table>

       <script>
           \$(document).ready(function(){
               \$(\"#myInput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
               \$(\"#myInput2\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable2 tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
           });
       </script>
   {% endblock %}", "@FeedBack/Admin/reclammation.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\FeedBackBundle\\Resources\\views\\Admin\\reclammation.html.twig");
    }
}
