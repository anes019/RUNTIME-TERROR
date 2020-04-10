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

/* UtilisateursUtilisateursBundle:Courses:create.html.twig */
class __TwigTemplate_7044b77a6bbabd544f5139d6ff69ec7fe596351597c635e4781137f2e5db2e7e extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Courses:create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Courses:create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "UtilisateursUtilisateursBundle:Courses:create.html.twig", 1);
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
        echo "       <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
       <script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDqkMjY2kfjUW41cnfsrrCxCN1Wi_S1x5o\"></script>
       <br>
       <br>
       <div  style=\"width: 400px ; position: relative ; right: -30%\"  >
           ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "       </div>
       <br>
       <br>
       <script type=\"text/javascript\">
           var searchInput = 'search_input';
           var searchInput2 = 'search_input2';

           \$(document).ready(function () {
               var autocomplete;
               autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                   types: ['geocode'],
               });

               var autocomplete2;
               autocomplete2 = new google.maps.places.Autocomplete((document.getElementById(searchInput2)), {
                   types: ['geocode'],
               });


               google.maps.event.addListener(autocomplete, 'place_changed', function () {
                   var near_place = autocomplete.getPlace();
                   document.getElementById('loc_lat').value = near_place.geometry.location.lat();
                   document.getElementById('loc_long').value = near_place.geometry.location.lng();


                   document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                   document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();

               });

               google.maps.event.addListener(autocomplete2, 'place_changed', function () {
                   var near_place = autocomplete.getPlace();

                   document.getElementById('loc_lat2').value = near_place.geometry.location.lat();
                   document.getElementById('loc_long2').value = near_place.geometry.location.lng();


                   document.getElementById('latitude_view2').innerHTML = near_place.geometry.location.lat();
                   document.getElementById('longitude_view2').innerHTML = near_place.geometry.location.lng();
               });




           });
           \$(document).on('change', '#'+searchInput, function () {
               document.getElementById('latitude_input').value = '';
               document.getElementById('longitude_input').value = '';


               document.getElementById('latitude_view').innerHTML = '';
               document.getElementById('longitude_view').innerHTML = '';

           });
           \$(document).on('change', '#'+searchInput2, function () {

               document.getElementById('latitude_input2').value = '';
               document.getElementById('longitude_input2').value = '';


               document.getElementById('latitude_view2').innerHTML = '';
               document.getElementById('longitude_view2').innerHTML = '';
           });



       </script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "               <h1>Reservation de taxi </h1>

               ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
               <div><label>Partenaire</label><select class=\"form-control\" name=\"partenaire\">
                       ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "                           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</option>

                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                   </select></div>

           <br>

           <!-- Autocomplete location search input -->
           <div class=\"form-group\">
               <label>Depart:</label>
               <input type=\"text\" class=\"form-control\" id=\"search_input\" name=\"from\" placeholder=\"depart\" />
               <input type=\"hidden\" id=\"loc_lat\" />
               <input type=\"hidden\" id=\"loc_long\" />
               <label>Destination:</label>
               <input type=\"text\" class=\"form-control\" id=\"search_input2\" name=\"to\" placeholder=\"destination\" />
               <input type=\"hidden\" id=\"loc_lat2\" />
               <input type=\"hidden\" id=\"loc_long2\" />
           </div>

           <!-- Display latitude and longitude -->
           <div class=\"latlong-view\"  >
               <p><b>Latitude:</b> <input id=\"latitude_view\" name=\"latitude_view\"></p>
               <p><b>Longitude:</b> <input id=\"longitude_view\" name=\"longitude_view\"></p>
               <br>
               <br>
               <br>
               <p><b>Latitude 2:</b> <input id=\"latitude_view2\" name=\"latitude_view2\"></p>
               <p><b>Longitude 2:</b> <input id=\"longitude_view2\" name=\"longitude_view2\"></p>
               <div>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "captcha", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</div>

           </div>

       </div>

       <div hidden=\"hidden\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "destination", [], "any", false, false, false, 48), 'widget');
        echo "</div>
       <div hidden=\"hidden\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "depart", [], "any", false, false, false, 49), 'widget');
        echo "</div>
               <div hidden=\"hidden\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prix", [], "any", false, false, false, 50), 'widget');
        echo "</div>
               <div hidden=\"hidden\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "client", [], "any", false, false, false, 51), 'widget');
        echo "</div>
               <div hidden=\"hidden\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "partenaire", [], "any", false, false, false, 52), 'widget');
        echo "</div>

             
               ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'widget');
        echo "
       <div id=\"map\"></div>



               ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "





           ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Courses:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 60,  248 => 55,  242 => 52,  238 => 51,  234 => 50,  230 => 49,  226 => 48,  217 => 42,  190 => 17,  178 => 14,  174 => 13,  169 => 11,  165 => 9,  155 => 8,  78 => 67,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
   {% block content %}
       <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
       <script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDqkMjY2kfjUW41cnfsrrCxCN1Wi_S1x5o\"></script>
       <br>
       <br>
       <div  style=\"width: 400px ; position: relative ; right: -30%\"  >
           {% block body %}
               <h1>Reservation de taxi </h1>

               {{ form_start(form) }}
               <div><label>Partenaire</label><select class=\"form-control\" name=\"partenaire\">
                       {% for i in table %}
                           <option value=\"{{ i.id }}\"> {{ i.nom }}</option>

                       {% endfor %}
                   </select></div>

           <br>

           <!-- Autocomplete location search input -->
           <div class=\"form-group\">
               <label>Depart:</label>
               <input type=\"text\" class=\"form-control\" id=\"search_input\" name=\"from\" placeholder=\"depart\" />
               <input type=\"hidden\" id=\"loc_lat\" />
               <input type=\"hidden\" id=\"loc_long\" />
               <label>Destination:</label>
               <input type=\"text\" class=\"form-control\" id=\"search_input2\" name=\"to\" placeholder=\"destination\" />
               <input type=\"hidden\" id=\"loc_lat2\" />
               <input type=\"hidden\" id=\"loc_long2\" />
           </div>

           <!-- Display latitude and longitude -->
           <div class=\"latlong-view\"  >
               <p><b>Latitude:</b> <input id=\"latitude_view\" name=\"latitude_view\"></p>
               <p><b>Longitude:</b> <input id=\"longitude_view\" name=\"longitude_view\"></p>
               <br>
               <br>
               <br>
               <p><b>Latitude 2:</b> <input id=\"latitude_view2\" name=\"latitude_view2\"></p>
               <p><b>Longitude 2:</b> <input id=\"longitude_view2\" name=\"longitude_view2\"></p>
               <div>{{ form_widget(form.captcha,{'attr':{'class':'form-control'}})}}</div>

           </div>

       </div>

       <div hidden=\"hidden\">{{ form_widget(form.destination)}}</div>
       <div hidden=\"hidden\">{{ form_widget(form.depart)}}</div>
               <div hidden=\"hidden\">{{ form_widget(form.prix)}}</div>
               <div hidden=\"hidden\">{{ form_widget(form.client)}}</div>
               <div hidden=\"hidden\">{{ form_widget(form.partenaire)}}</div>

             
               {{ form_widget(form) }}
       <div id=\"map\"></div>



               {{ form_end(form) }}





           {% endblock %}
       </div>
       <br>
       <br>
       <script type=\"text/javascript\">
           var searchInput = 'search_input';
           var searchInput2 = 'search_input2';

           \$(document).ready(function () {
               var autocomplete;
               autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                   types: ['geocode'],
               });

               var autocomplete2;
               autocomplete2 = new google.maps.places.Autocomplete((document.getElementById(searchInput2)), {
                   types: ['geocode'],
               });


               google.maps.event.addListener(autocomplete, 'place_changed', function () {
                   var near_place = autocomplete.getPlace();
                   document.getElementById('loc_lat').value = near_place.geometry.location.lat();
                   document.getElementById('loc_long').value = near_place.geometry.location.lng();


                   document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                   document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();

               });

               google.maps.event.addListener(autocomplete2, 'place_changed', function () {
                   var near_place = autocomplete.getPlace();

                   document.getElementById('loc_lat2').value = near_place.geometry.location.lat();
                   document.getElementById('loc_long2').value = near_place.geometry.location.lng();


                   document.getElementById('latitude_view2').innerHTML = near_place.geometry.location.lat();
                   document.getElementById('longitude_view2').innerHTML = near_place.geometry.location.lng();
               });




           });
           \$(document).on('change', '#'+searchInput, function () {
               document.getElementById('latitude_input').value = '';
               document.getElementById('longitude_input').value = '';


               document.getElementById('latitude_view').innerHTML = '';
               document.getElementById('longitude_view').innerHTML = '';

           });
           \$(document).on('change', '#'+searchInput2, function () {

               document.getElementById('latitude_input2').value = '';
               document.getElementById('longitude_input2').value = '';


               document.getElementById('latitude_view2').innerHTML = '';
               document.getElementById('longitude_view2').innerHTML = '';
           });



       </script>
   {% endblock %}", "UtilisateursUtilisateursBundle:Courses:create.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Courses/create.html.twig");
    }
}
