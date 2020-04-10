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

/* taxi/detailTaxi.html.twig */
class __TwigTemplate_733879a7a40479243dc32c7f8319277e1f08d92459c55a1fb3d59b9849e8c71c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'slide' => [$this, 'block_slide'],
            'content' => [$this, 'block_content'],
            'jquery' => [$this, 'block_jquery'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxi/detailTaxi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxi/detailTaxi.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "taxi/detailTaxi.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <style>
        :root {
            --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --msger-bg: #fff;
            --border: 2px solid #ddd;
            --left-msg-bg: #ececec;
            --right-msg-bg: darkorange;
        }

        .msg {
            display: flex;
            align-items: flex-end;
            margin-bottom: 10px;
        }
        .msg:last-of-type {
            margin: 0;
        }
        .msg-img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            background: #ddd;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 50%;
        }
        .msg-bubble {
            max-width: 450px;
            padding: 5px;
            border-radius: 15px;
            background: var(--left-msg-bg);
        }
        .msg-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2px;
        }
        .msg-info-name {
            margin-right: 10px;
            font-weight: bold;
        }
        .msg-info-time {
            font-size: 0.85em;
        }

        .left-msg .msg-bubble {
            border-bottom-left-radius: 0;
        }

        .right-msg {
            flex-direction: row-reverse;
        }
        .right-msg .msg-bubble {
            background: var(--right-msg-bg);
            color: #000;
            border-bottom-right-radius: 0;
        }
        .right-msg .msg-img {
            margin: 0 0 0 10px;
        }
        .msger-inputarea * {
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 1em;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        // line 76
        echo "    <section id=\"page-title-area\" class=\"section-padding overlay\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Page Title Start -->
                    <div class=\"col-lg-12\">
                        <div class=\"section-title  text-center\">
                            <h2>Detail du taxi</h2>
                            <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                            <p>Taxi Numero : ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 84, $this->source); })()), "taxi", [], "any", false, false, false, 84), "matricul", [], "any", false, false, false, 84), "html", null, true);
        echo " </p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "    <section id=\"car-list-area\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Car List Content Start -->
                <div class=\"col-lg-8\">
                    <div class=\"car-details-content\">
                        <h2>Aston Martin One-77 <span class=\"price\">Rent: <b>\$150</b></span></h2>
                        <div class=\"car-preview-crousel\">
                            <div class=\"single-car-preview\">
                                <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/car/car-5.jpg"), "html", null, true);
        echo "\" alt=\"JSOFT\">
                            </div>
                        </div>
                        <div class=\"car-details-info\">
                            <h4>DESCRIPTON</h4>
                            <p>The Aventador LPER 720-4 50° </p>

                            <div class=\"technical-info\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"tech-info-table\">
                                            <table class=\"table table-bordered\">
                                                <tr>
                                                    <th>Marque : </th>
                                                    <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 118, $this->source); })()), "taxi", [], "any", false, false, false, 118), "marque", [], "any", false, false, false, 118), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <th>Etat : </th>
                                                    <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 122, $this->source); })()), "taxi", [], "any", false, false, false, 122), "etat", [], "any", false, false, false, 122), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <th>Matricule : </th>
                                                    <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 126, $this->source); })()), "taxi", [], "any", false, false, false, 126), "matricul", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"review-area\">
                                <h3>Que pensez-vous de  “";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 135, $this->source); })()), "nom", [], "any", false, false, false, 135), "html", null, true);
        echo "” ?</h3>
                                <div class=\"review-star\">
                                    <p class=\"rating\" id=\"allstar\">
                                        ";
        // line 138
        if (((isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 138, $this->source); })()) == null)) {
            // line 139
            echo "                                            <i class=\"fa fa-star unmark\" id=\"star1\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star2\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star3\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star4\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star5\"></i>
                                        ";
        } else {
            // line 145
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 145, $this->source); })()), 0, [], "array", false, false, false, 145), "rate", [], "any", false, false, false, 145)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 146
                echo "                                                <i class=\"fa fa-star\" id=\"star";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></i>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 148, $this->source); })()), 0, [], "array", false, false, false, 148), "rate", [], "any", false, false, false, 148) < 5)) {
                // line 149
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 149, $this->source); })()), 0, [], "array", false, false, false, 149), "rate", [], "any", false, false, false, 149) + 1), 5));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 150
                    echo "                                                    <i class=\"fa fa-star unmark\" id=\"star";
                    echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                    echo "\"></i>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                                            ";
            }
            // line 153
            echo "                                        ";
        }
        // line 154
        echo "                                    </p>
                                </div>

                                <div class=\"review-form\">
                                    <form>
                                        <div class=\"message-input\">
                                            <textarea name=\"review\" cols=\"5\" rows=\"5\" placeholder=\"Redigez votre Commentaire\" id=\"comment\"></textarea>
                                        </div>

                                        <div class=\"input-submit\">
                                            <button type=\"button\" id=\"envoie\">Envoyer </button>
                                            <button type=\"reset\">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"review-area\" id=\"ListeC\">
                                    <div class=\"msg left-msg\">
                                        <div class=\"msg-img\"
                                             style=\"background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)\">
                                        </div>

                                        <div class=\"msg-bubble\">
                                            <div class=\"msg-info\">
                                                <div class=\"msg-info-name\" id=\"name_other\"></div>
                                                <div class=\"msg-info-time\" id=\"time_other\"></div>
                                            </div>

                                            <div class=\"msg-text\" id=\"info_other\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"msg right-msg\">
                                        <div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>

                                        <div class=\"msg-bubble\">
                                            <div class=\"msg-info\">
                                                <div class=\"msg-info-name\" id=\"name\">

                                                </div>
                                                <div class=\"msg-info-time\" id=\"time\">

                                                </div>
                                            </div>

                                            <div class=\"msg-text\" id=\"info\">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class=\"col-lg-4\">
                    <div class=\"sidebar-content-wrap m-t-50\">
                        <!-- Single Sidebar Start -->
                        <div class=\"single-sidebar\">
                            <h3>For More Informations</h3>

                            <div class=\"sidebar-body\">
                                <p><i class=\"fa fa-mobile\"></i> +216 -- -- -- --</p>
                                <p><i class=\"fa fa-clock-o\"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 232
        echo "    ";
        $this->displayParentBlock("jquery", $context, $blocks);
        echo "
    <script>
        \$('.left-msg').hide();
        \$('.right-msg').hide();
        \$(\"#star1\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_evaluer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 240, $this->source); })()), "id", [], "any", false, false, false, 240)]), "html", null, true);
        echo "\",
                data:{
                    rate: 1
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star2\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_evaluer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 268, $this->source); })()), "id", [], "any", false, false, false, 268)]), "html", null, true);
        echo "\",
                data:{
                    rate: 2
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star3\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_evaluer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 296, $this->source); })()), "id", [], "any", false, false, false, 296)]), "html", null, true);
        echo "\",
                data:{
                    rate: 3
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star4\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_evaluer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 324, $this->source); })()), "id", [], "any", false, false, false, 324)]), "html", null, true);
        echo "\",
                data:{
                    rate: 4
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star5\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_evaluer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 352, $this->source); })()), "id", [], "any", false, false, false, 352)]), "html", null, true);
        echo "\",
                data:{
                    rate: 5
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$('#envoie').click(function () {
            \$.ajax({
                type: 'get',
                url: \"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_commenter_part", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 379, $this->source); })()), "id", [], "any", false, false, false, 379)]), "html", null, true);
        echo "\",
                data: {
                    commentaire: \$('#comment').val()
                },
                async: true,
                success:
                    function (response) {
                        \$('#ListeC').html('');
                        var e='<div class=\"msg right-msg\">' +
                                '<div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>' +
                                    '<div class=\"msg-bubble\">\\n' +
                                        '<div class=\"msg-info\">\\n' +
                                            '<div class=\"msg-info-name nameC\">' +response['commentaire'][2]+'  '+response['commentaire'][3]+
                                            '</div>' +
                                            '<div class=\"msg-info-time timeC\">' +response['commentaire'][1]['date']+
                                            '</div>' +
                                        '</div>' +
                                        '<div class=\"msg-text infoC\">' +response['commentaire'][0]+
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        \$('#ListeC').append(e);
                        for(i=0;i<response['tabC'].length;i++){
                            if(response['tabC'][i][4]=='oui'){
                                var e='<div class=\"msg right-msg\">' +
                                        '<div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>' +
                                            '<div class=\"msg-bubble\">' +
                                                '<div class=\"msg-info\">' +
                                                    '<div class=\"msg-info-name nameC\">' +response['tabC'][i][2]+'  '+response['tabC'][i][3]+
                                                    '</div>' +
                                                    '<div class=\"msg-info-time timeC\">' +response['tabC'][i][1]['date']+
                                                    '</div>' +
                                                '</div>' +
                                                '<div class=\"msg-text infoC\">' +response['tabC'][i][0]+
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';
                                \$('#ListeC').append(e);
                            }
                            else {
                                var e='<div class=\"msg left-msg\">' +
                                        '<div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>' +
                                            '<div class=\"msg-bubble\">' +
                                                '<div class=\"msg-info\">' +
                                                    '<div class=\"msg-info-name nameC\">' +response['tabC'][i][2]+'  '+response['tabC'][i][3]+
                                                    '</div>' +
                                                    '<div class=\"msg-info-time timeC\">' +response['tabC'][i][1]['date']+
                                                    '</div>' +
                                                '</div>' +
                                                '<div class=\"msg-text infoC\">' +response['tabC'][i][0]+
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';
                                \$('#ListeC').append(e);
                            }
                        }
                        console.log(response);
                    }
            })
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "taxi/detailTaxi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 379,  537 => 352,  506 => 324,  475 => 296,  444 => 268,  413 => 240,  401 => 232,  391 => 231,  306 => 154,  303 => 153,  300 => 152,  291 => 150,  286 => 149,  283 => 148,  274 => 146,  269 => 145,  261 => 139,  259 => 138,  253 => 135,  241 => 126,  234 => 122,  227 => 118,  210 => 104,  199 => 95,  189 => 94,  171 => 84,  161 => 76,  151 => 75,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
    {# Image du body #}
{% block style %}
    <style>
        :root {
            --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --msger-bg: #fff;
            --border: 2px solid #ddd;
            --left-msg-bg: #ececec;
            --right-msg-bg: darkorange;
        }

        .msg {
            display: flex;
            align-items: flex-end;
            margin-bottom: 10px;
        }
        .msg:last-of-type {
            margin: 0;
        }
        .msg-img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            background: #ddd;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 50%;
        }
        .msg-bubble {
            max-width: 450px;
            padding: 5px;
            border-radius: 15px;
            background: var(--left-msg-bg);
        }
        .msg-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2px;
        }
        .msg-info-name {
            margin-right: 10px;
            font-weight: bold;
        }
        .msg-info-time {
            font-size: 0.85em;
        }

        .left-msg .msg-bubble {
            border-bottom-left-radius: 0;
        }

        .right-msg {
            flex-direction: row-reverse;
        }
        .right-msg .msg-bubble {
            background: var(--right-msg-bg);
            color: #000;
            border-bottom-right-radius: 0;
        }
        .right-msg .msg-img {
            margin: 0 0 0 10px;
        }
        .msger-inputarea * {
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 1em;
        }

    </style>
{% endblock %}
{% block slide %}
    <section id=\"page-title-area\" class=\"section-padding overlay\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Page Title Start -->
                    <div class=\"col-lg-12\">
                        <div class=\"section-title  text-center\">
                            <h2>Detail du taxi</h2>
                            <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                            <p>Taxi Numero : {{ part.taxi.matricul }} </p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
{% endblock %}

    {# Detail dU Taxi #}
{% block content %}
    <section id=\"car-list-area\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Car List Content Start -->
                <div class=\"col-lg-8\">
                    <div class=\"car-details-content\">
                        <h2>Aston Martin One-77 <span class=\"price\">Rent: <b>\$150</b></span></h2>
                        <div class=\"car-preview-crousel\">
                            <div class=\"single-car-preview\">
                                <img src=\"{{ asset('templates/frontoffice/assets/img/car/car-5.jpg') }}\" alt=\"JSOFT\">
                            </div>
                        </div>
                        <div class=\"car-details-info\">
                            <h4>DESCRIPTON</h4>
                            <p>The Aventador LPER 720-4 50° </p>

                            <div class=\"technical-info\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"tech-info-table\">
                                            <table class=\"table table-bordered\">
                                                <tr>
                                                    <th>Marque : </th>
                                                    <td>{{ part.taxi.marque }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Etat : </th>
                                                    <td>{{ part.taxi.etat }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Matricule : </th>
                                                    <td>{{ part.taxi.matricul }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"review-area\">
                                <h3>Que pensez-vous de  “{{ part.nom }}” ?</h3>
                                <div class=\"review-star\">
                                    <p class=\"rating\" id=\"allstar\">
                                        {% if rate ==null %}
                                            <i class=\"fa fa-star unmark\" id=\"star1\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star2\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star3\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star4\"></i>
                                            <i class=\"fa fa-star unmark\" id=\"star5\"></i>
                                        {% else %}
                                            {% for i in 1..rate[0].rate %}
                                                <i class=\"fa fa-star\" id=\"star{{i}}\"></i>
                                            {% endfor %}
                                            {% if rate[0].rate < 5 %}
                                                {% for j in rate[0].rate+1..5 %}
                                                    <i class=\"fa fa-star unmark\" id=\"star{{j}}\"></i>
                                                {% endfor %}
                                            {% endif %}
                                        {% endif %}
                                    </p>
                                </div>

                                <div class=\"review-form\">
                                    <form>
                                        <div class=\"message-input\">
                                            <textarea name=\"review\" cols=\"5\" rows=\"5\" placeholder=\"Redigez votre Commentaire\" id=\"comment\"></textarea>
                                        </div>

                                        <div class=\"input-submit\">
                                            <button type=\"button\" id=\"envoie\">Envoyer </button>
                                            <button type=\"reset\">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"review-area\" id=\"ListeC\">
                                    <div class=\"msg left-msg\">
                                        <div class=\"msg-img\"
                                             style=\"background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)\">
                                        </div>

                                        <div class=\"msg-bubble\">
                                            <div class=\"msg-info\">
                                                <div class=\"msg-info-name\" id=\"name_other\"></div>
                                                <div class=\"msg-info-time\" id=\"time_other\"></div>
                                            </div>

                                            <div class=\"msg-text\" id=\"info_other\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"msg right-msg\">
                                        <div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>

                                        <div class=\"msg-bubble\">
                                            <div class=\"msg-info\">
                                                <div class=\"msg-info-name\" id=\"name\">

                                                </div>
                                                <div class=\"msg-info-time\" id=\"time\">

                                                </div>
                                            </div>

                                            <div class=\"msg-text\" id=\"info\">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class=\"col-lg-4\">
                    <div class=\"sidebar-content-wrap m-t-50\">
                        <!-- Single Sidebar Start -->
                        <div class=\"single-sidebar\">
                            <h3>For More Informations</h3>

                            <div class=\"sidebar-body\">
                                <p><i class=\"fa fa-mobile\"></i> +216 -- -- -- --</p>
                                <p><i class=\"fa fa-clock-o\"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
{% endblock %}

{% block jquery %}
    {{ parent() }}
    <script>
        \$('.left-msg').hide();
        \$('.right-msg').hide();
        \$(\"#star1\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"{{ path('feed_back_evaluer',{'id':part.id } )}}\",
                data:{
                    rate: 1
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star2\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"{{ path('feed_back_evaluer',{'id':part.id } )}}\",
                data:{
                    rate: 2
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star3\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"{{ path('feed_back_evaluer',{'id':part.id } )}}\",
                data:{
                    rate: 3
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star4\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"{{ path('feed_back_evaluer',{'id':part.id } )}}\",
                data:{
                    rate: 4
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$(\"#star5\").click(function () {
            var i=0;
            \$.ajax({
                type:'get',
                url:\"{{ path('feed_back_evaluer',{'id':part.id } )}}\",
                data:{
                    rate: 5
                },
                async: true,
                success:
                    function (response) {
                        \$('#allstar').html('');
                        for(i=1;i<6;i++){
                            if(i<=response['rate']){
                                var e=\$(' <i class=\"fa fa-star\" id=\"star'+i+'\"> </i> ');
                            }
                            else{
                                var e=\$(' <i class=\"fa fa-star unmark\" id=\"star'+i+'\"> </i> ');
                            }
                            \$('#allstar').append(e);
                        }
                    },
                error:
                    function (response) {
                        alert('Une Erreur Technique ');
                    }
            })
        });
        \$('#envoie').click(function () {
            \$.ajax({
                type: 'get',
                url: \"{{ path('feed_back_commenter_part',{'id': part.id })}}\",
                data: {
                    commentaire: \$('#comment').val()
                },
                async: true,
                success:
                    function (response) {
                        \$('#ListeC').html('');
                        var e='<div class=\"msg right-msg\">' +
                                '<div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>' +
                                    '<div class=\"msg-bubble\">\\n' +
                                        '<div class=\"msg-info\">\\n' +
                                            '<div class=\"msg-info-name nameC\">' +response['commentaire'][2]+'  '+response['commentaire'][3]+
                                            '</div>' +
                                            '<div class=\"msg-info-time timeC\">' +response['commentaire'][1]['date']+
                                            '</div>' +
                                        '</div>' +
                                        '<div class=\"msg-text infoC\">' +response['commentaire'][0]+
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        \$('#ListeC').append(e);
                        for(i=0;i<response['tabC'].length;i++){
                            if(response['tabC'][i][4]=='oui'){
                                var e='<div class=\"msg right-msg\">' +
                                        '<div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>' +
                                            '<div class=\"msg-bubble\">' +
                                                '<div class=\"msg-info\">' +
                                                    '<div class=\"msg-info-name nameC\">' +response['tabC'][i][2]+'  '+response['tabC'][i][3]+
                                                    '</div>' +
                                                    '<div class=\"msg-info-time timeC\">' +response['tabC'][i][1]['date']+
                                                    '</div>' +
                                                '</div>' +
                                                '<div class=\"msg-text infoC\">' +response['tabC'][i][0]+
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';
                                \$('#ListeC').append(e);
                            }
                            else {
                                var e='<div class=\"msg left-msg\">' +
                                        '<div class=\"msg-img\" style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>' +
                                            '<div class=\"msg-bubble\">' +
                                                '<div class=\"msg-info\">' +
                                                    '<div class=\"msg-info-name nameC\">' +response['tabC'][i][2]+'  '+response['tabC'][i][3]+
                                                    '</div>' +
                                                    '<div class=\"msg-info-time timeC\">' +response['tabC'][i][1]['date']+
                                                    '</div>' +
                                                '</div>' +
                                                '<div class=\"msg-text infoC\">' +response['tabC'][i][0]+
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';
                                \$('#ListeC').append(e);
                            }
                        }
                        console.log(response);
                    }
            })
        });
    </script>
{% endblock %}

", "taxi/detailTaxi.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\taxi\\detailTaxi.html.twig");
    }
}
