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

/* reservation/new.html.twig */
class __TwigTemplate_9e935d6002e23bb89ab538733b5d0ce9e5fb64de12065f28e9d7e42207cb43ff extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
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
        echo "       <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
       <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js\" defer></script>

<div  style=\"width: 400px ; position: relative ; right: -30%\"  >
        <h1>Reservation creation</h1>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        <div><label>Partenaire</label><select class=\"form-control\" name=\"partenaire\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</option>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
            <!-- Autocomplete location search input -->
            <div class=\"form-group\">
                <label id=\"rg\">Region:</label>
                <select name=\"region\" id=\"region\" class=\"js-example-basic-single form-control input-lg\">
                    <option value=\"\">Choisir votre region</option>
                </select>
                <label id=\"pt\">point d'Achat:</label>
                <select name=\"point_vente\" id=\"point_vente\" class=\"js-example-basic-single  form-control input-lg\">
                    <option value=\"\">Choisir un point d'achat</option>
                </select>
                <label>destination *:</label>
                <input type=\"text\" class=\"form-control\" id=\"search_input2\" name=\"to\" placeholder=\"destination\" />
                <label id=\"li\">List d'achats:</label>
                <select name=\"produit\" id=\"produit\" class=\" js-example-basic-single  form-control input-lg\">
                    <option value=\"\">Choisir votre produit</option>
                </select>
            </div>
            <!-- Display latitude and longitude -->
            <div class=\"latlong-view\"   >
                <p><b>Latitude:</b> <input class=\"form-control\" id=\"latitude_view\" name=\"latitude_view\"></p>
                <p><b>Longitude:</b> <input class=\"form-control\" id=\"longitude_view\" name=\"longitude_view\"></p>
                <p><b>Latitude 2:</b> <input class=\"form-control\" id=\"latitude_view2\" name=\"latitude_view2\"></p>
                <p><b>Longitude 2:</b> <input class=\"form-control\" id=\"longitude_view2\" name=\"longitude_view2\"></p>
            </div>
        </div>



        <div hidden=\"hidden\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44), 'widget');
        echo "</div>
        <div hidden=\"hidden\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "client", [], "any", false, false, false, 45), 'widget');
        echo "</div>
        <div hidden=\"hidden\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "partenaire", [], "any", false, false, false, 46), 'widget');
        echo "</div>

        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'widget');
        echo "
        <input  class=\"btn btn-info\"  id=\"submit\" type=\"submit\" value=\"Confirmer\" />
        <div id=\"map\"></div>
        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "



    </div>
    <br>
    <br>

    </body>
    </html>

       <script src=\"http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDqkMjY2kfjUW41cnfsrrCxCN1Wi_S1x5o\" type=\"text/javascript\"></script>
       <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>
       <script>
           \$(document).ready(function () {

               \$('#submit').click(function () {
                   var date = \$('#utilisateurs_utilisateursbundle_reservation_date').val();
                   var d1 = new Date();
                   var d2 = new Date(date);

                   document.getElementById(\"latitude_view\").style.borderColor = \"\";
                   document.getElementById(\"longitude_view\").style.borderColor = \"\";
                   document.getElementById(\"latitude_view2\").style.borderColor = \"\";
                   document.getElementById(\"longitude_view2\").style.borderColor = \"\";
                   document.getElementById(\"search_input2\").style.borderColor = \"\";
                   document.getElementById(\"rg\").style.borderColor = \"\";
                   document.getElementById(\"pt\").style.borderColor = \"\";
                   document.getElementById(\"li\").style.borderColor = \"\";
                   var latitude = \$('#latitude_view').val();
                   var longitude = \$('#longitude_view').val();
                   var region = \$('#region').val();
                   var point_vente = \$('#point_vente').val();
                   var produit = \$('#produit').val();
                   var destination = \$('#search_input2').val();
                   var latitude2 = \$('#latitude_view2').val();
                   var longitude2 = \$('#longitude_view2').val();
                   if (region == '' || point_vente == '' || produit == '' ) {
                       if(region == '' )
                       {    document.getElementById(\"rg\").style.color = \"#dc3545\";}
                       if(point_vente == '' )
                       {             document.getElementById(\"pt\").style.color = \"#dc3545\";}
                       if(produit == '' )
                       {       document.getElementById(\"li\").style.color = \"#dc3545\";
                       }


                       Swal.fire({
                           type: 'error',
                           title: 'veuillez choisir une region , une point de vente et des produits',
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }
                  else if (destination == '' ) {
                           document.getElementById(\"search_input2\").style.borderColor = \"#dc3545\";
                       Swal.fire({
                           type: 'error',
                           title: 'veuillez saisir une destination',
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }


                   else if (latitude == '' || longitude == '' || latitude2 == '' || longitude2 == '') {
                       if (latitude == '') {
                           document.getElementById(\"latitude_view\").style.borderColor = \"#dc3545\";
                       }
                       if (longitude== '') {
                           document.getElementById(\"longitude_view\").style.borderColor = \"#dc3545\";
                       }
                       if (latitude == '') {
                           document.getElementById(\"latitude_view2\").style.borderColor = \"#dc3545\";
                       }
                       if (longitude2 == '') {
                           document.getElementById(\"longitude_view2\").style.borderColor = \"#dc3545\";
                       }

                       Swal.fire({

                           type: 'error',
                           title: 'veuillez saisir les valeurs de laltitude et longitude',
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }
                   else if (d1>d2 ) {

                       Swal.fire({
                           type: 'error',
                           title: 'Vous devez choisir une date et heure supérieur au date actuel : '+d1,
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }
                   else{
                       return true;
                   }
               });
           });
       </script>


       <script>
    \$(document).ready(function() {
        \$('.js-example-basic-single').select2();
    });
</script>
       <script type=\"text/javascript\">
           function initialize() {
               var input2 = document.getElementById('search_input2');
               var autocomplete2 = new google.maps.places.Autocomplete(input2);
               google.maps.event.addListener(autocomplete2, 'place_changed', function () {
                   var place2 = autocomplete2.getPlace();
                   var latitude2 = place2.geometry.location.lat();
                   var longitude2 = place2.geometry.location.lng();

                   document.getElementById('latitude_view2').value = latitude2;
                   document.getElementById('longitude_view2').value = longitude2;
                   console.log(place.geometry.location.lng());
                   console.log(place.geometry.location.lat());
               });
           }
           google.maps.event.addDomListener(window, 'load', initialize);
       </script>
<script>

    \$(document).ready(function(){

        load_json_data('region');

        function load_json_data(id, parent_id)
        {
            var html_code = '';
            \$.getJSON(\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/info.json"), "html", null, true);
        echo "\", function(data){

                html_code += '<option value=\"\">Choisir '+id+'</option>';
                \$.each(data, function(key, value){
                    if(id == 'region')
                    {
                        if(value.parent_id == '0')
                        {
                            html_code += '<option value=\"'+value.id+'\">'+value.name+'</option>';

                        }
                    }
                    else
                    {
                        if(value.parent_id == parent_id)
                        {
                            html_code += '<option value=\"'+value.id+'\">'+value.name+'</option>';

                        }
                    }
                });
                \$('#'+id).html(html_code);
            });

        }

        \$(document).on('change', '#region', function(){
            var region_id = \$(this).val();
            if(region_id != '')
            {
                load_json_data('point_vente', region_id);

            }
            else
            {
                \$('#point_vente').html('<option value=\"\">Choisir un point de vente</option>');
                \$('#produit').html('<option value=\"\">Choisir un produit</option>');
            }
        });
        \$(document).on('change', '#point_vente', function(){
            var ptVente_id = \$(this).val();
            if(ptVente_id != '')
            {
                load_json_data('produit', ptVente_id);
            }
            else
            {
                \$('#produit').html('<option value=\"\">Choisir un produit</option>');
            }
        });
    });


</script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 190,  147 => 51,  141 => 48,  136 => 46,  132 => 45,  128 => 44,  97 => 15,  85 => 12,  81 => 11,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
   {% block content %}
       <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
       <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js\" defer></script>

<div  style=\"width: 400px ; position: relative ; right: -30%\"  >
        <h1>Reservation creation</h1>
        {{ form_start(form) }}
        <div><label>Partenaire</label><select class=\"form-control\" name=\"partenaire\">
                {% for i in table %}
                    <option value=\"{{ i.id }}\"> {{ i.nom }}</option>

                {% endfor %}
            </select>
            <!-- Autocomplete location search input -->
            <div class=\"form-group\">
                <label id=\"rg\">Region:</label>
                <select name=\"region\" id=\"region\" class=\"js-example-basic-single form-control input-lg\">
                    <option value=\"\">Choisir votre region</option>
                </select>
                <label id=\"pt\">point d'Achat:</label>
                <select name=\"point_vente\" id=\"point_vente\" class=\"js-example-basic-single  form-control input-lg\">
                    <option value=\"\">Choisir un point d'achat</option>
                </select>
                <label>destination *:</label>
                <input type=\"text\" class=\"form-control\" id=\"search_input2\" name=\"to\" placeholder=\"destination\" />
                <label id=\"li\">List d'achats:</label>
                <select name=\"produit\" id=\"produit\" class=\" js-example-basic-single  form-control input-lg\">
                    <option value=\"\">Choisir votre produit</option>
                </select>
            </div>
            <!-- Display latitude and longitude -->
            <div class=\"latlong-view\"   >
                <p><b>Latitude:</b> <input class=\"form-control\" id=\"latitude_view\" name=\"latitude_view\"></p>
                <p><b>Longitude:</b> <input class=\"form-control\" id=\"longitude_view\" name=\"longitude_view\"></p>
                <p><b>Latitude 2:</b> <input class=\"form-control\" id=\"latitude_view2\" name=\"latitude_view2\"></p>
                <p><b>Longitude 2:</b> <input class=\"form-control\" id=\"longitude_view2\" name=\"longitude_view2\"></p>
            </div>
        </div>



        <div hidden=\"hidden\">{{ form_widget(form.prix)}}</div>
        <div hidden=\"hidden\">{{ form_widget(form.client)}}</div>
        <div hidden=\"hidden\">{{ form_widget(form.partenaire)}}</div>

        {{ form_widget(form) }}
        <input  class=\"btn btn-info\"  id=\"submit\" type=\"submit\" value=\"Confirmer\" />
        <div id=\"map\"></div>
        {{ form_end(form) }}



    </div>
    <br>
    <br>

    </body>
    </html>

       <script src=\"http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDqkMjY2kfjUW41cnfsrrCxCN1Wi_S1x5o\" type=\"text/javascript\"></script>
       <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>
       <script>
           \$(document).ready(function () {

               \$('#submit').click(function () {
                   var date = \$('#utilisateurs_utilisateursbundle_reservation_date').val();
                   var d1 = new Date();
                   var d2 = new Date(date);

                   document.getElementById(\"latitude_view\").style.borderColor = \"\";
                   document.getElementById(\"longitude_view\").style.borderColor = \"\";
                   document.getElementById(\"latitude_view2\").style.borderColor = \"\";
                   document.getElementById(\"longitude_view2\").style.borderColor = \"\";
                   document.getElementById(\"search_input2\").style.borderColor = \"\";
                   document.getElementById(\"rg\").style.borderColor = \"\";
                   document.getElementById(\"pt\").style.borderColor = \"\";
                   document.getElementById(\"li\").style.borderColor = \"\";
                   var latitude = \$('#latitude_view').val();
                   var longitude = \$('#longitude_view').val();
                   var region = \$('#region').val();
                   var point_vente = \$('#point_vente').val();
                   var produit = \$('#produit').val();
                   var destination = \$('#search_input2').val();
                   var latitude2 = \$('#latitude_view2').val();
                   var longitude2 = \$('#longitude_view2').val();
                   if (region == '' || point_vente == '' || produit == '' ) {
                       if(region == '' )
                       {    document.getElementById(\"rg\").style.color = \"#dc3545\";}
                       if(point_vente == '' )
                       {             document.getElementById(\"pt\").style.color = \"#dc3545\";}
                       if(produit == '' )
                       {       document.getElementById(\"li\").style.color = \"#dc3545\";
                       }


                       Swal.fire({
                           type: 'error',
                           title: 'veuillez choisir une region , une point de vente et des produits',
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }
                  else if (destination == '' ) {
                           document.getElementById(\"search_input2\").style.borderColor = \"#dc3545\";
                       Swal.fire({
                           type: 'error',
                           title: 'veuillez saisir une destination',
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }


                   else if (latitude == '' || longitude == '' || latitude2 == '' || longitude2 == '') {
                       if (latitude == '') {
                           document.getElementById(\"latitude_view\").style.borderColor = \"#dc3545\";
                       }
                       if (longitude== '') {
                           document.getElementById(\"longitude_view\").style.borderColor = \"#dc3545\";
                       }
                       if (latitude == '') {
                           document.getElementById(\"latitude_view2\").style.borderColor = \"#dc3545\";
                       }
                       if (longitude2 == '') {
                           document.getElementById(\"longitude_view2\").style.borderColor = \"#dc3545\";
                       }

                       Swal.fire({

                           type: 'error',
                           title: 'veuillez saisir les valeurs de laltitude et longitude',
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }
                   else if (d1>d2 ) {

                       Swal.fire({
                           type: 'error',
                           title: 'Vous devez choisir une date et heure supérieur au date actuel : '+d1,
                           showConfirmButton: false,
                           timer: 4000
                       })
                       return false;
                   }
                   else{
                       return true;
                   }
               });
           });
       </script>


       <script>
    \$(document).ready(function() {
        \$('.js-example-basic-single').select2();
    });
</script>
       <script type=\"text/javascript\">
           function initialize() {
               var input2 = document.getElementById('search_input2');
               var autocomplete2 = new google.maps.places.Autocomplete(input2);
               google.maps.event.addListener(autocomplete2, 'place_changed', function () {
                   var place2 = autocomplete2.getPlace();
                   var latitude2 = place2.geometry.location.lat();
                   var longitude2 = place2.geometry.location.lng();

                   document.getElementById('latitude_view2').value = latitude2;
                   document.getElementById('longitude_view2').value = longitude2;
                   console.log(place.geometry.location.lng());
                   console.log(place.geometry.location.lat());
               });
           }
           google.maps.event.addDomListener(window, 'load', initialize);
       </script>
<script>

    \$(document).ready(function(){

        load_json_data('region');

        function load_json_data(id, parent_id)
        {
            var html_code = '';
            \$.getJSON(\"{{ asset('templates/frontoffice/assets/js/info.json') }}\", function(data){

                html_code += '<option value=\"\">Choisir '+id+'</option>';
                \$.each(data, function(key, value){
                    if(id == 'region')
                    {
                        if(value.parent_id == '0')
                        {
                            html_code += '<option value=\"'+value.id+'\">'+value.name+'</option>';

                        }
                    }
                    else
                    {
                        if(value.parent_id == parent_id)
                        {
                            html_code += '<option value=\"'+value.id+'\">'+value.name+'</option>';

                        }
                    }
                });
                \$('#'+id).html(html_code);
            });

        }

        \$(document).on('change', '#region', function(){
            var region_id = \$(this).val();
            if(region_id != '')
            {
                load_json_data('point_vente', region_id);

            }
            else
            {
                \$('#point_vente').html('<option value=\"\">Choisir un point de vente</option>');
                \$('#produit').html('<option value=\"\">Choisir un produit</option>');
            }
        });
        \$(document).on('change', '#point_vente', function(){
            var ptVente_id = \$(this).val();
            if(ptVente_id != '')
            {
                load_json_data('produit', ptVente_id);
            }
            else
            {
                \$('#produit').html('<option value=\"\">Choisir un produit</option>');
            }
        });
    });


</script>
   {% endblock %}








", "reservation/new.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\reservation\\new.html.twig");
    }
}
