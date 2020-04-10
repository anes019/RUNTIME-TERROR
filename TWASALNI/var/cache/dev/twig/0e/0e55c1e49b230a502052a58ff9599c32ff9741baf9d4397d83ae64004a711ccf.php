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

/* UtilisateursUtilisateursBundle:Default:login.html.twig */
class __TwigTemplate_0d32e48002b2bba3d4f42598cf5582f92014dd77b5edb8d53d925c9d64ac7d2f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:login.html.twig"));

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

    <!--=== Bootstrap CSS ===-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Vegas Min CSS ===-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/vegas.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Slicknav CSS ===-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/slicknav.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Magnific Popup CSS ===-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Owl Carousel CSS ===-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Gijgo CSS ===-->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/plugins/gijgo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== FontAwesome CSS ===-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Theme Reset CSS ===-->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Main Style CSS ===-->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--=== Responsive CSS ===-->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
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

                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/logo3.png"), "html", null, true);
        echo "\" alt=\"JSOFT\" width=\"200\" height=\"20\">

                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class=\"col-lg-8 d-none d-xl-block\">
                    <nav class=\"mainmenu alignright\">
                        <ul>
                            <li><a href=\"/\">Acceuil</a></li>
                            <li><a href=\"reservation/new\">Reservation livraison</a></li>
                            <li><a href=\"createCourse\">Reservation taxi</a></li>
                            <li><a href=\"message/\">Messagerie</a></li>
                            <li> <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_create_abonnement");
        echo "\"> S'abonner </a></li>
                            <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feed_back_homepage");
        echo "\">Contact</a></li>
                            <li><a href=\"#\">Profile</a>
                                <ul>
                                    <li><a href=\"admin/index\">Admins</a></li>
                                    <li><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Partenaires</a></li>
                                    <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Clients</a></li>
                                </ul>
                            </li>
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


<section id=\"page-title-area\" class=\"section-padding overlay\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Page Title Start -->
            <div class=\"col-lg-12\">
                <div class=\"section-title  text-center\">
                    <h2>Login</h2>
                    <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id=\"lgoin-page-wrap\" class=\"section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-8 m-auto\">
                <div class=\"login-page-content\">
                    <div class=\"login-form\">
                        <h3>Welcome Back!</h3>
                        ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 146
        echo "                    </div>

                    <div class=\"login-other\">
                        <span class=\"or\">or</span>
                        <a href=\"#\" class=\"login-with-btn facebook\"><i class=\"fa fa-facebook\"></i> Login With Facebook</a>
                        <a href=\"#\" class=\"login-with-btn google\"><i class=\"fa fa-google\"></i> Login With Google</a>
                    </div>
                    <div class=\"create-ac\">
                        <p>Don't have an account? <a href=\"register.html\">Sign Up</a></p>
                    </div>
                    <div class=\"login-menu\">
                        <a href=\"about.html\">About</a>
                        <span>|</span>
                        <a href=\"contact.html\">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Login Page Content End ==-->

<section id=\"footer-area\">
    <!-- Footer Widget Start -->
    <div class=\"footer-widget-area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Widget Start -->
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-footer-widget\">
                        <h2>Twasalni <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/logo3.png"), "html", null, true);
        echo "\" alt=\"JSOFT\" width=\"190\" height=\"50\"></h2>
                        <div class=\"widget-body\">
                            <p>Twasalni est le resultat du travail de l'équipe RTE dans le but de resoudre et faciliter le transport en Tunisie</p>

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
                                        Hello Bangladesh!
                                        <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        Lorem ipsum dolor sit amet
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
                                <li><i class=\"fa fa-mobile\"></i> +216 22 842 875</li>
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
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/scroll-top.png"), "html", null, true);
        echo "\" alt=\"JSOFT\">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Popper Min Js ===-->
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Bootstrap Min Js ===-->
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Gijgo Min Js ===-->
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/gijgo.js"), "html", null, true);
        echo "\"></script>
<!--=== Vegas Min Js ===-->
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/vegas.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Isotope Min Js ===-->
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/isotope.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Owl Caousel Min Js ===-->
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Waypoint Min Js ===-->
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<!--=== CounTotop Min Js ===-->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/counterup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== YtPlayer Min Js ===-->
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
<!--=== Magnific Popup Min Js ===-->
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Slicknav Min Js ===-->
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/slicknav.min.js"), "html", null, true);
        echo "\"></script>

<!--=== Mian Js ===-->
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 145
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 145,  432 => 144,  412 => 272,  406 => 269,  401 => 267,  396 => 265,  391 => 263,  386 => 261,  381 => 259,  376 => 257,  371 => 255,  366 => 253,  361 => 251,  356 => 249,  351 => 247,  346 => 245,  337 => 239,  271 => 176,  239 => 146,  237 => 144,  194 => 104,  190 => 103,  183 => 99,  179 => 98,  163 => 85,  106 => 31,  101 => 29,  96 => 27,  91 => 25,  86 => 23,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  53 => 8,  44 => 1,);
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


    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
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

                        <img src=\"{{ asset('templates/frontoffice/assets/img/logo3.png') }}\" alt=\"JSOFT\" width=\"200\" height=\"20\">

                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class=\"col-lg-8 d-none d-xl-block\">
                    <nav class=\"mainmenu alignright\">
                        <ul>
                            <li><a href=\"/\">Acceuil</a></li>
                            <li><a href=\"reservation/new\">Reservation livraison</a></li>
                            <li><a href=\"createCourse\">Reservation taxi</a></li>
                            <li><a href=\"message/\">Messagerie</a></li>
                            <li> <a href=\"{{ path('_create_abonnement') }}\"> S'abonner </a></li>
                            <li><a href=\"{{ path('feed_back_homepage') }}\">Contact</a></li>
                            <li><a href=\"#\">Profile</a>
                                <ul>
                                    <li><a href=\"admin/index\">Admins</a></li>
                                    <li><a href=\"{{ path('fos_user_security_login')}}\">Partenaires</a></li>
                                    <li><a href=\"{{ path('fos_user_security_login')}}\">Clients</a></li>
                                </ul>
                            </li>
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


<section id=\"page-title-area\" class=\"section-padding overlay\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Page Title Start -->
            <div class=\"col-lg-12\">
                <div class=\"section-title  text-center\">
                    <h2>Login</h2>
                    <span class=\"title-line\"><i class=\"fa fa-car\"></i></span>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id=\"lgoin-page-wrap\" class=\"section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-8 m-auto\">
                <div class=\"login-page-content\">
                    <div class=\"login-form\">
                        <h3>Welcome Back!</h3>
                        {% block content %}
                        {% endblock %}
                    </div>

                    <div class=\"login-other\">
                        <span class=\"or\">or</span>
                        <a href=\"#\" class=\"login-with-btn facebook\"><i class=\"fa fa-facebook\"></i> Login With Facebook</a>
                        <a href=\"#\" class=\"login-with-btn google\"><i class=\"fa fa-google\"></i> Login With Google</a>
                    </div>
                    <div class=\"create-ac\">
                        <p>Don't have an account? <a href=\"register.html\">Sign Up</a></p>
                    </div>
                    <div class=\"login-menu\">
                        <a href=\"about.html\">About</a>
                        <span>|</span>
                        <a href=\"contact.html\">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Login Page Content End ==-->

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
                            <p>Twasalni est le resultat du travail de l'équipe RTE dans le but de resoudre et faciliter le transport en Tunisie</p>

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
                                        Hello Bangladesh!
                                        <i class=\"fa fa-long-arrow-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        Lorem ipsum dolor sit amet
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
                                <li><i class=\"fa fa-mobile\"></i> +216 22 842 875</li>
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

<!--=== Mian Js ===-->
<script src=\"{{ asset('templates/frontoffice/assets/js/main.js') }}\"></script>

</body>

</html>


</body>

</html>", "UtilisateursUtilisateursBundle:Default:login.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
