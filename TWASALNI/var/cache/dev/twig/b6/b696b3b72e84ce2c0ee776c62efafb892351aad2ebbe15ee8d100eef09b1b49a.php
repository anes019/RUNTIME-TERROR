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

/* base.html.twig */
class __TwigTemplate_c4f0ac360dd56637a2c069c5f04396b25dc088576ad117fbe28c1e395b4f816e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'slide' => [$this, 'block_slide'],
            'content' => [$this, 'block_content'],
            'jquery' => [$this, 'block_jquery'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--=== Favicon ===-->
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/logo3_opt.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    <title>Twasalni.tn</title>
    ";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 14
        echo "    <!--=== Bootstrap CSS ===-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Vegas Min CSS ===-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/vegas.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Slicknav CSS ===-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/slicknav.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Magnific Popup CSS ===-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Owl Carousel CSS ===-->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Gijgo CSS ===-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/gijgo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== FontAwesome CSS ===-->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Theme Reset CSS ===-->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Main Style CSS ===-->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Responsive CSS ===-->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>

</head>

<!--== Header Area Start ==-->
<header id=\"header-area\" class=\"fixed-top\">
    <!--== Header Top Start ==-->
    <div id=\"header-top\" class=\"d-none d-xl-block\">
        <div class=\"container\">
            <div class=\"row\">
                <!--== Single HeaderTop Start ==-->
                <div class=\"col-lg-3 text-left\">
                    <i class=\"fa fa-map-marker\"></i> Esprit Ghazela
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class=\"col-lg-3 text-center\">
                    <i class=\"fa fa-mobile\"></i> +216 22 842 875
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class=\"col-lg-3 text-center\">
                    <i class=\"fa fa-clock-o\"></i> Mon-Sun 24h/7
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Social Icons Start ==-->
                <div class=\"col-lg-3 text-right\">
                    <div class=\"header-social-icons\">
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </div>
                </div>
                <!--== Social Icons End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->

    <!--== Header Bottom Start ==-->
    <div id=\"header-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <!--== Logo Start ==-->
                <div class=\"col-lg-4\">
                    <a href=\"\" class=\"logo\">
                        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/logo3.png"), "html", null, true);
        echo "\" alt=\"JSOFT\" width=\"200\" height=\"70\">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class=\"col-lg-8 d-none d-xl-block\">
                    <nav class=\"mainmenu alignright\">
                        <ul>
                            <li><a href=\"/\">Acceuil</a></li>
                            <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        echo "\">Reservation livraison</a></li>
                            <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_create");
        echo "\">Reservation taxi</a></li>
                            <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_message_inbox");
        echo "\">Messagerie</a></li>
                            <li> <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_create_abonnement");
        echo "\"> S'abonner </a></li>
                            <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_homepage");
        echo "\">Contact</a></li>
                            ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "username", [], "any", false, false, false, 102) == null)) {
            // line 103
            echo "                                <li><a href=\"#\">Profile</a>
                                    <ul>
                                        <li><a href=\"admin/index\">Admins</a></li>
                                        <li><a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Partenaires</a></li>
                                        <li><a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Clients</a></li>
                                    </ul>
                                </li>
                                ";
        } else {
            // line 111
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                            ";
        }
        // line 113
        echo "                            <li></li>
                        </ul>
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->

";
        // line 125
        $this->displayBlock('slide', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 132
            echo "<div class=\"alert-success text-center\" style=\"height: 70px\">
    <br>
";
            // line 134
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    <br>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "

<section id=\"footer-area\">
    <!-- Footer Widget Start -->
    <div class=\"footer-widget-area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Twasalni <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/logo3.png"), "html", null, true);
        echo "\" alt=\"JSOFT\" width=\"190\" height=\"50\"></h2>
                        <div class=\"widget-body\">
                            <p>Twasalni est le resultat du travail de l'équipe RTE dans le but de resoudre e faciliter les transport en Tunisie</p>

                            <div class=\"newsletter-area\">
                                <form action=\"index.html\">
                                    <input type=\"email\" placeholder=\"Envoyer nous un mot\">
                                    <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fa fa-send\"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Publications Recentes</h2>
                        <div class=\"widget-body\">
                            <ul class=\"recent-post\">
                                <li>
                                    <a href=\"#\">
                                        Hello Tunis!
                                        <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        Prix imbattables !
                                        <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Localisation</h2>
                        <div class=\"widget-body\">
                            <p>Nous sommes situer a Esprit a la petite Ariana</p>

                            <ul class=\"get-touch\">
                                <li><i class=\"fa fa-map-marker\"></i>Zone Industrielle Chotrana II, B.P. 160 Pôle Technologique El Ghazela 2083 Ariana Tunis، 2083</li>
                                <li><i class=\"fa fa-mobile\"></i> +216 -- -- -- --</li>
                                <li><i class=\"fa fa-envelope\"></i> twasalni@gmail.com</li>
                            </ul>
                            <a href=\"https://goo.gl/maps/b5mt45MCaPB2\" class=\"map-show\" target=\"_blank\">Visualiser</a>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->
</section>
<div class=\"scroll-top\">
    <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/scroll-top.png"), "html", null, true);
        echo "\" alt=\"JSOFT\">
</div>
<!--== Scroll Top Area End ==-->
";
        // line 216
        $this->displayBlock('jquery', $context, $blocks);
        // line 245
        echo "<!--=== Mian Js ===-->
<script src=\"\"></script>
<script>
    \$(\"#slideslow-bg\").vegas({
        overlay: true,
        transition: 'fade',
        transitionDuration: 2000,
        delay: 4000,
        color: '#000',
        animation: 'random',
        animationDuration: 20000,
        slides: [
            {
                src: \"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-1.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-2.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-3.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-4.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-5.jpg"), "html", null, true);
        echo "\"
            },

        ]
    });

    //Home Page Two Slideshow
</script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 12
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        // line 126
        echo "    <section id=\"slideslow-bg\">

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 216
    public function block_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 217
        echo "<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Popper Min Js ===-->
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Bootstrap Min Js ===-->
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Gijgo Min Js ===-->
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/gijgo.js"), "html", null, true);
        echo "\"></script>
<!--=== Vegas Min Js ===-->
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/vegas.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Isotope Min Js ===-->
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/isotope.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Owl Caousel Min Js ===-->
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Waypoint Min Js ===-->
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<!--=== CounTotop Min Js ===-->
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/counterup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== YtPlayer Min Js ===-->
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
<!--=== Magnific Popup Min Js ===-->
<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Slicknav Min Js ===-->
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/slicknav.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 243,  550 => 241,  545 => 239,  540 => 237,  535 => 235,  530 => 233,  525 => 231,  520 => 229,  515 => 227,  510 => 225,  505 => 223,  500 => 221,  495 => 219,  491 => 217,  481 => 216,  463 => 138,  450 => 126,  440 => 125,  429 => 12,  419 => 11,  396 => 270,  390 => 267,  384 => 264,  378 => 261,  372 => 258,  357 => 245,  355 => 216,  349 => 213,  283 => 150,  271 => 140,  269 => 138,  259 => 134,  255 => 132,  251 => 131,  248 => 130,  246 => 125,  232 => 113,  226 => 111,  219 => 107,  215 => 106,  210 => 103,  208 => 102,  204 => 101,  200 => 100,  196 => 99,  192 => 98,  188 => 97,  175 => 87,  123 => 38,  119 => 37,  112 => 33,  107 => 31,  102 => 29,  97 => 27,  92 => 25,  87 => 23,  82 => 21,  77 => 19,  72 => 17,  67 => 15,  64 => 14,  62 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--=== Favicon ===-->
    <link rel=\"shortcut icon\" href=\"{{ asset('templates/frontoffice/logo3_opt.png') }}\" type=\"image/x-icon\" />

    <title>Twasalni.tn</title>
    {% block style %}

    {% endblock %}
    <!--=== Bootstrap CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!--=== Vegas Min CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/plugins/vegas.min.css') }}\" rel=\"stylesheet\">
    <!--=== Slicknav CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/plugins/slicknav.min.css') }}\" rel=\"stylesheet\">
    <!--=== Magnific Popup CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/plugins/magnific-popup.css') }}\" rel=\"stylesheet\">
    <!--=== Owl Carousel CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/plugins/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <!--=== Gijgo CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/plugins/gijgo.css') }}\" rel=\"stylesheet\">
    <!--=== FontAwesome CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/font-awesome.css') }}\" rel=\"stylesheet\">
    <!--=== Theme Reset CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/reset.css') }}\" rel=\"stylesheet\">
    <!--=== Main Style CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/style.css') }}\" rel=\"stylesheet\">
    <!--=== Responsive CSS ===-->
    <link href=\"{{ asset('templates/frontoffice/assets/css/responsive.css') }}\" rel=\"stylesheet\">



    <script src=\"{{ asset('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}\"></script>

</head>

<!--== Header Area Start ==-->
<header id=\"header-area\" class=\"fixed-top\">
    <!--== Header Top Start ==-->
    <div id=\"header-top\" class=\"d-none d-xl-block\">
        <div class=\"container\">
            <div class=\"row\">
                <!--== Single HeaderTop Start ==-->
                <div class=\"col-lg-3 text-left\">
                    <i class=\"fa fa-map-marker\"></i> Esprit Ghazela
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class=\"col-lg-3 text-center\">
                    <i class=\"fa fa-mobile\"></i> +216 22 842 875
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class=\"col-lg-3 text-center\">
                    <i class=\"fa fa-clock-o\"></i> Mon-Sun 24h/7
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Social Icons Start ==-->
                <div class=\"col-lg-3 text-right\">
                    <div class=\"header-social-icons\">
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </div>
                </div>
                <!--== Social Icons End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->

    <!--== Header Bottom Start ==-->
    <div id=\"header-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <!--== Logo Start ==-->
                <div class=\"col-lg-4\">
                    <a href=\"\" class=\"logo\">
                        <img src=\"{{ asset('templates/frontoffice/assets/img/logo3.png') }}\" alt=\"JSOFT\" width=\"200\" height=\"70\">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class=\"col-lg-8 d-none d-xl-block\">
                    <nav class=\"mainmenu alignright\">
                        <ul>
                            <li><a href=\"/\">Acceuil</a></li>
                            <li><a href=\"{{ path('reservation_new') }}\">Reservation livraison</a></li>
                            <li><a href=\"{{ path('course_create') }}\">Reservation taxi</a></li>
                            <li><a href=\"{{ path('fos_message_inbox') }}\">Messagerie</a></li>
                            <li> <a href=\"{{ path('_create_abonnement') }}\"> S'abonner </a></li>
                            <li><a href=\"{{ path('feed_back_homepage') }}\">Contact</a></li>
                            {% if app.user.username == null %}
                                <li><a href=\"#\">Profile</a>
                                    <ul>
                                        <li><a href=\"admin/index\">Admins</a></li>
                                        <li><a href=\"{{ path('fos_user_security_login')}}\">Partenaires</a></li>
                                        <li><a href=\"{{ path('fos_user_security_login')}}\">Clients</a></li>
                                    </ul>
                                </li>
                                {% else %}
                                    <li><a href=\"{{ path('fos_user_profile_show') }}\">Profile</a></li>
                            {% endif %}
                            <li></li>
                        </ul>
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->

{% block slide %}
    <section id=\"slideslow-bg\">

    </section>
{% endblock %}

{% for message in app.flashes('success') %}
<div class=\"alert-success text-center\" style=\"height: 70px\">
    <br>
{{ message }}
    <br>
</div>
{% endfor %}
{% block content %}
{% endblock %}


<section id=\"footer-area\">
    <!-- Footer Widget Start -->
    <div class=\"footer-widget-area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Twasalni <img src=\"{{ asset('templates/frontoffice/assets/img/logo3.png') }}\" alt=\"JSOFT\" width=\"190\" height=\"50\"></h2>
                        <div class=\"widget-body\">
                            <p>Twasalni est le resultat du travail de l'équipe RTE dans le but de resoudre e faciliter les transport en Tunisie</p>

                            <div class=\"newsletter-area\">
                                <form action=\"index.html\">
                                    <input type=\"email\" placeholder=\"Envoyer nous un mot\">
                                    <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fa fa-send\"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Publications Recentes</h2>
                        <div class=\"widget-body\">
                            <ul class=\"recent-post\">
                                <li>
                                    <a href=\"#\">
                                        Hello Tunis!
                                        <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        Prix imbattables !
                                        <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Localisation</h2>
                        <div class=\"widget-body\">
                            <p>Nous sommes situer a Esprit a la petite Ariana</p>

                            <ul class=\"get-touch\">
                                <li><i class=\"fa fa-map-marker\"></i>Zone Industrielle Chotrana II, B.P. 160 Pôle Technologique El Ghazela 2083 Ariana Tunis، 2083</li>
                                <li><i class=\"fa fa-mobile\"></i> +216 -- -- -- --</li>
                                <li><i class=\"fa fa-envelope\"></i> twasalni@gmail.com</li>
                            </ul>
                            <a href=\"https://goo.gl/maps/b5mt45MCaPB2\" class=\"map-show\" target=\"_blank\">Visualiser</a>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->
</section>
<div class=\"scroll-top\">
    <img src=\"{{ asset('templates/frontoffice/assets/img/scroll-top.png') }}\" alt=\"JSOFT\">
</div>
<!--== Scroll Top Area End ==-->
{% block jquery %}
<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/jquery-3.2.1.min.js') }}\"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/jquery-migrate.min.js') }}\"></script>
<!--=== Popper Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/popper.min.js') }}\"></script>
<!--=== Bootstrap Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/bootstrap.min.js') }}\"></script>
<!--=== Gijgo Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/gijgo.js') }}\"></script>
<!--=== Vegas Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/vegas.min.js') }}\"></script>
<!--=== Isotope Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/isotope.min.js') }}\"></script>
<!--=== Owl Caousel Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/owl.carousel.min.js') }}\"></script>
<!--=== Waypoint Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/waypoints.min.js') }}\"></script>
<!--=== CounTotop Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/counterup.min.js') }}\"></script>
<!--=== YtPlayer Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/mb.YTPlayer.js') }}\"></script>
<!--=== Magnific Popup Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/magnific-popup.min.js') }}\"></script>
<!--=== Slicknav Min Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/plugins/slicknav.min.js') }}\"></script>
{% endblock %}
<!--=== Mian Js ===-->
<script src=\"\"></script>
<script>
    \$(\"#slideslow-bg\").vegas({
        overlay: true,
        transition: 'fade',
        transitionDuration: 2000,
        delay: 4000,
        color: '#000',
        animation: 'random',
        animationDuration: 20000,
        slides: [
            {
                src: \"{{ asset('templates/frontoffice/assets/img/slider-img/slider-img-1.jpg')}}\"
            },
            {
                src: \"{{ asset('templates/frontoffice/assets/img/slider-img/slider-img-2.jpg')}}\"
            },
            {
                src: \"{{ asset('templates/frontoffice/assets/img/slider-img/slider-img-3.jpg')}}\"
            },
            {
                src: \"{{ asset('templates/frontoffice/assets/img/slider-img/slider-img-4.jpg')}}\"
            },
            {
                src: \"{{ asset('templates/frontoffice/assets/img/slider-img/slider-img-5.jpg')}}\"
            },

        ]
    });

    //Home Page Two Slideshow
</script>

</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\base.html.twig");
    }
}
