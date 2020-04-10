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

/* UtilisateursUtilisateursBundle:Default:header.html.twig */
class __TwigTemplate_d4121f40a7417b520fff61c1f6c9cc6e58779aa105f647800637c78356391b3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:header.html.twig"));

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
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 85,  105 => 31,  100 => 29,  95 => 27,  90 => 25,  85 => 23,  80 => 21,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  52 => 8,  43 => 1,);
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
", "UtilisateursUtilisateursBundle:Default:header.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/header.html.twig");
    }
}
