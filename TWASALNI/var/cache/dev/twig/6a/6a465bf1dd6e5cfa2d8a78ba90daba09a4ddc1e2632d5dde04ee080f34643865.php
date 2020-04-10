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

/* @UtilisateursUtilisateurs/Default/index.html.twig */
class __TwigTemplate_3add4ea3a5114fdd5a98c2a95b36ec928ab9c01512a0eefec78cfd5502d67357 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/Default/index.html.twig"));

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



    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
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
                    <a href=\"index2.html\" class=\"logo\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/logo3.png"), "html", null, true);
        echo "\" alt=\"JSOFT\" width=\"200\" height=\"70\">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class=\"col-lg-8 d-none d-xl-block\">
                    <nav class=\"mainmenu alignright\">
                        <ul>
                            <li><a href=\"index2.html\">Acceuil</a></li>
                            <li><a href=\"car-right-sidebar.html\">Taxi</a></li>
                            <li><a href=\"driver.html\">Taxiste</a></li>
                            <li> <a href=\"#\"> A propos</a>
                                <ul>
                                    <li><a href=\"services.html\">services</a></li>
                                    <li><a href=\"package.html\">Pricing</a></li>
                                    <li><a href=\"faq.html\">Mannuel </a></li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"#\">Profile</a>
                                <ul>
                                    <li><a href=\"login.html\">Admins</a></li>
                                    <li><a href=\"register.html\">Partenaires</a></li>
                                    <li><a href=\"register.html\">Clients</a></li>
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

<section id=\"slideslow-bg\">

</section>



";
        // line 130
        $this->displayBlock('content', $context, $blocks);
        // line 132
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
        // line 142
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
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/scroll-top.png"), "html", null, true);
        echo "\" alt=\"JSOFT\">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Popper Min Js ===-->
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Bootstrap Min Js ===-->
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Gijgo Min Js ===-->
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/gijgo.js"), "html", null, true);
        echo "\"></script>
<!--=== Vegas Min Js ===-->
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/vegas.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Isotope Min Js ===-->
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/isotope.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Owl Caousel Min Js ===-->
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Waypoint Min Js ===-->
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<!--=== CounTotop Min Js ===-->
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/counterup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== YtPlayer Min Js ===-->
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
<!--=== Magnific Popup Min Js ===-->
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Slicknav Min Js ===-->
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/slicknav.min.js"), "html", null, true);
        echo "\"></script>

<!--=== Mian Js ===-->
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/main.js"), "html", null, true);
        echo "\"></script>
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
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-1.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-2.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-3.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/slider-img/slider-img-4.jpg"), "html", null, true);
        echo "\"
            },
            {
                src: \"";
        // line 262
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

    // line 130
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

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 130,  411 => 262,  405 => 259,  399 => 256,  393 => 253,  387 => 250,  372 => 238,  366 => 235,  361 => 233,  356 => 231,  351 => 229,  346 => 227,  341 => 225,  336 => 223,  331 => 221,  326 => 219,  321 => 217,  316 => 215,  311 => 213,  306 => 211,  297 => 205,  231 => 142,  219 => 132,  217 => 130,  169 => 85,  117 => 36,  113 => 35,  106 => 31,  101 => 29,  96 => 27,  91 => 25,  86 => 23,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  53 => 8,  44 => 1,);
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
                    <a href=\"index2.html\" class=\"logo\">
                        <img src=\"{{ asset('templates/frontoffice/assets/img/logo3.png') }}\" alt=\"JSOFT\" width=\"200\" height=\"70\">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class=\"col-lg-8 d-none d-xl-block\">
                    <nav class=\"mainmenu alignright\">
                        <ul>
                            <li><a href=\"index2.html\">Acceuil</a></li>
                            <li><a href=\"car-right-sidebar.html\">Taxi</a></li>
                            <li><a href=\"driver.html\">Taxiste</a></li>
                            <li> <a href=\"#\"> A propos</a>
                                <ul>
                                    <li><a href=\"services.html\">services</a></li>
                                    <li><a href=\"package.html\">Pricing</a></li>
                                    <li><a href=\"faq.html\">Mannuel </a></li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"#\">Profile</a>
                                <ul>
                                    <li><a href=\"login.html\">Admins</a></li>
                                    <li><a href=\"register.html\">Partenaires</a></li>
                                    <li><a href=\"register.html\">Clients</a></li>
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

<section id=\"slideslow-bg\">

</section>



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
", "@UtilisateursUtilisateurs/Default/index.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
