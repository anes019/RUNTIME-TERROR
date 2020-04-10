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

/* @FeedBack/Admin/Evaluation.html.twig */
class __TwigTemplate_0a57154573b75f39dfa108ae1e609cf2495aed3d33d41c7f999173dcb80caa7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FeedBack/Admin/Evaluation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FeedBack/Admin/Evaluation.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@FeedBack/Admin/Evaluation.html.twig", 1);
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
        // line 136
        echo "       <script>
           \$(document).ready(function(){
               \$(\"#myInput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
               \$(\"#Einput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#TabE tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
           });
           \$('#trier').click(function () {
               \$.ajax({
                   type:'get',
                   url:\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_rate_star");
        echo "\",
                   data:{
                       rate: \$('#rate').val()
                   },
                   async: true,
                   success:
                       function (response) {
                           var i=0;
                           var j=0;
                           var r='';
                           console.log(response);
                           \$('#TabE').html('');
                           for(i=0;i<response['rates'].length;i++){
                               var url=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_delete_rate", ["id" => "value"]);
        echo "\";
                              url=url.replace('value',''+response['rates'][i][6]+'');
                              url='href=\"'+url+'\"';
                               console.log(url);
                               var e=\$('<tr> <td id=\"id\"></td> <td id=\"user\"></td>' +
                                   ' <td id=\"part\"></td> <td id=\"note\"></td>' +
                                   '<td id=\"actions\"></td> </tr>');
                               \$('#id',e).html(response['rates'][i][0]);
                               \$('#user',e).html(response['rates'][i][2]+' '+response['rates'][i][3]);
                               \$('#part',e).html(response['rates'][i][4]+' '+response['rates'][i][5]);
                               for(j=0;j<response['rates'][i][1];j++){
                                   var r=r+'<i class=\"fa fa-star\"></i>';
                               }
                               \$('#note',e).html(r);

                               \$('#actions',e).html('<td> <div style=\" display: flex; align-content: space-between;\">' +
                                   '<a class=\"text-sm-right\" '+url+'>'+
                                   '<p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">' +
                                   '<button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" >' +
                                   '<span class=\"glyphicon glyphicon-trash\"></span>' +
                                   '</buton></p></a></div></td>');
                               \$('#TabE').append(e);
                               var r='';
                           }
                       },
                   error:
                       function (response) {

                       }
               })
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
        echo "           <h1 style=\" position: relative; right: -30px\">  Liste des Commentaires </h1>
           <div class=\"row\">
               <div class=\"col-md-12\">
                   <div class=\"table-data__tool\">
                       <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">
                       <div class=\"table-data__tool-right\">

                       </div>
                   </div>
               </div>
           </div>
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Utilisateur</th>
                   <th class=\"th-sm\">Partenaires</th>
                   <th class=\"th-sm\">Commentaires</th>
                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listC"]) || array_key_exists("listC", $context) ? $context["listC"] : (function () { throw new RuntimeError('Variable "listC" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 43
            echo "                   <tr>

                       <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                       <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                       <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "part", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "part", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                       <td> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "commentaire", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>

                       <td>
                           <div style=\" display: flex;
                                        align-content: space-between;\">

                               <a class=\"text-sm-right\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_delete_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 54)]), "html", null, true);
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
        // line 66
        echo "               </tbody>
           </table>

           <h1 style=\" position: relative; right: -30px\">  Liste des Evaluations </h1>
           <div class=\"row\">
               <div class=\"col-md-12\">
                   <div class=\"table-data__tool\">
                       <input style=\"width: 400px\" class=\"form-control\" id=\"Einput\" type=\"text\" placeholder=\"Rechercher..\">

                       <div class=\"table-data__tool-right\">
                           <div class=\"rs-select2--dark rs-select2--sm rs-select2--dark2\" id=\"filter\" data-role=\"fieldcontain\">
                               <select class=\"js-select2 target\" name=\"type\" id=\"rate\">
                                   <option selected=\"selected\" value=\"1\" id=\"star1\">1 Etoile</option>
                                   <option selected=\"selected\" value=\"2\" id=\"star2\">2 Etoiles</option>
                                   <option selected=\"selected\" value=\"3\" id=\"star3\">3 Etoiles</option>
                                   <option selected=\"selected\" value=\"4\" id=\"star4\">4 Etoiles</option>
                                   <option selected=\"selected\" value=\"5\" id=\"star5\">5 Etoiles</option>
                                   <option selected=\"selected\" value=\"0\" id=\"star5\">Tout</option>
                               </select>
                               <div class=\"dropDownSelect2\"></div>
                           </div>
                           <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\" id=\"trier\">
                               <i class=\"zmdi zmdi-refresh\" ></i>Trier</button>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
           <br>
           <table class=\"table table-bordered table-striped\" id=\"tabRate\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Utilisateur</th>
                   <th class=\"th-sm\">Partenaires</th>
                   <th class=\"th-sm\">Note</th>
                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"TabE\">
               ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listR"]) || array_key_exists("listR", $context) ? $context["listR"] : (function () { throw new RuntimeError('Variable "listR" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 108
            echo "                   <tr>

                       <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                       <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "client", [], "any", false, false, false, 111), "username", [], "any", false, false, false, 111), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "client", [], "any", false, false, false, 111), "prenom", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                       <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "part", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "part", [], "any", false, false, false, 112), "prenom", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                       <td>
                           ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["e"], "rate", [], "any", false, false, false, 114)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 115
                echo "                               <i class=\"fa fa-star\"></i>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                       </td>

                       <td>
                           <div style=\" display: flex; align-content: space-between;\">
                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_delete_rate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\">
                                    <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                                        <button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" id=\"delete_rate\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "               </tbody>
           </table>
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FeedBack/Admin/Evaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 133,  340 => 121,  334 => 117,  327 => 115,  323 => 114,  316 => 112,  310 => 111,  306 => 110,  302 => 108,  298 => 107,  255 => 66,  237 => 54,  228 => 48,  222 => 47,  216 => 46,  212 => 45,  208 => 43,  204 => 42,  178 => 18,  168 => 17,  123 => 167,  107 => 154,  87 => 136,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
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
           <h1 style=\" position: relative; right: -30px\">  Liste des Commentaires </h1>
           <div class=\"row\">
               <div class=\"col-md-12\">
                   <div class=\"table-data__tool\">
                       <input style=\"width: 400px\" class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">
                       <div class=\"table-data__tool-right\">

                       </div>
                   </div>
               </div>
           </div>
           <br>
           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Utilisateur</th>
                   <th class=\"th-sm\">Partenaires</th>
                   <th class=\"th-sm\">Commentaires</th>
                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"myTable\">
               {% for r in listC %}
                   <tr>

                       <td>{{r.id}}</td>
                       <td>{{ r.client.username }} {{ r.client.prenom }}</td>
                       <td>{{ r.part.nom }} {{ r.part.prenom }}</td>
                       <td> {{ r.commentaire }}</td>

                       <td>
                           <div style=\" display: flex;
                                        align-content: space-between;\">

                               <a class=\"text-sm-right\" href=\"{{ path('feed_back_delete_commentaire',{'id':r.id}) }}\">
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

           <h1 style=\" position: relative; right: -30px\">  Liste des Evaluations </h1>
           <div class=\"row\">
               <div class=\"col-md-12\">
                   <div class=\"table-data__tool\">
                       <input style=\"width: 400px\" class=\"form-control\" id=\"Einput\" type=\"text\" placeholder=\"Rechercher..\">

                       <div class=\"table-data__tool-right\">
                           <div class=\"rs-select2--dark rs-select2--sm rs-select2--dark2\" id=\"filter\" data-role=\"fieldcontain\">
                               <select class=\"js-select2 target\" name=\"type\" id=\"rate\">
                                   <option selected=\"selected\" value=\"1\" id=\"star1\">1 Etoile</option>
                                   <option selected=\"selected\" value=\"2\" id=\"star2\">2 Etoiles</option>
                                   <option selected=\"selected\" value=\"3\" id=\"star3\">3 Etoiles</option>
                                   <option selected=\"selected\" value=\"4\" id=\"star4\">4 Etoiles</option>
                                   <option selected=\"selected\" value=\"5\" id=\"star5\">5 Etoiles</option>
                                   <option selected=\"selected\" value=\"0\" id=\"star5\">Tout</option>
                               </select>
                               <div class=\"dropDownSelect2\"></div>
                           </div>
                           <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\" id=\"trier\">
                               <i class=\"zmdi zmdi-refresh\" ></i>Trier</button>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
           <br>
           <table class=\"table table-bordered table-striped\" id=\"tabRate\">
               <thead>
               <tr>

                   <th class=\"th-sm\">Id</th>
                   <th class=\"th-sm\">Utilisateur</th>
                   <th class=\"th-sm\">Partenaires</th>
                   <th class=\"th-sm\">Note</th>
                   <th class=\"th-sm\">Actions</th>
               </tr>
               </thead>
               <tbody id=\"TabE\">
               {% for e in listR %}
                   <tr>

                       <td>{{e.id}}</td>
                       <td>{{ e.client.username }} {{ e.client.prenom }}</td>
                       <td>{{ e.part.nom }} {{ e.part.prenom }}</td>
                       <td>
                           {% for i in 1..e.rate %}
                               <i class=\"fa fa-star\"></i>
                           {% endfor %}
                       </td>

                       <td>
                           <div style=\" display: flex; align-content: space-between;\">
                                <a href=\"{{ path('feed_back_delete_rate',{'id':e.id}) }}\">
                                    <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                                        <button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" id=\"delete_rate\">
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
       {% endblock %}
       <script>
           \$(document).ready(function(){
               \$(\"#myInput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#myTable tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
               \$(\"#Einput\").on(\"keyup\", function() {
                   var value = \$(this).val().toLowerCase();
                   \$(\"#TabE tr\").filter(function() {
                       \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                   });
               });
           });
           \$('#trier').click(function () {
               \$.ajax({
                   type:'get',
                   url:\"{{ path('feed_back_rate_star')}}\",
                   data:{
                       rate: \$('#rate').val()
                   },
                   async: true,
                   success:
                       function (response) {
                           var i=0;
                           var j=0;
                           var r='';
                           console.log(response);
                           \$('#TabE').html('');
                           for(i=0;i<response['rates'].length;i++){
                               var url=\"{{ path('feed_back_delete_rate',{'id':'value'}) }}\";
                              url=url.replace('value',''+response['rates'][i][6]+'');
                              url='href=\"'+url+'\"';
                               console.log(url);
                               var e=\$('<tr> <td id=\"id\"></td> <td id=\"user\"></td>' +
                                   ' <td id=\"part\"></td> <td id=\"note\"></td>' +
                                   '<td id=\"actions\"></td> </tr>');
                               \$('#id',e).html(response['rates'][i][0]);
                               \$('#user',e).html(response['rates'][i][2]+' '+response['rates'][i][3]);
                               \$('#part',e).html(response['rates'][i][4]+' '+response['rates'][i][5]);
                               for(j=0;j<response['rates'][i][1];j++){
                                   var r=r+'<i class=\"fa fa-star\"></i>';
                               }
                               \$('#note',e).html(r);

                               \$('#actions',e).html('<td> <div style=\" display: flex; align-content: space-between;\">' +
                                   '<a class=\"text-sm-right\" '+url+'>'+
                                   '<p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">' +
                                   '<button class=\"btn btn-danger btn-s\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" >' +
                                   '<span class=\"glyphicon glyphicon-trash\"></span>' +
                                   '</buton></p></a></div></td>');
                               \$('#TabE').append(e);
                               var r='';
                           }
                       },
                   error:
                       function (response) {

                       }
               })
           });

       </script>

   {% endblock %}
", "@FeedBack/Admin/Evaluation.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\FeedBackBundle\\Resources\\views\\Admin\\Evaluation.html.twig");
    }
}
