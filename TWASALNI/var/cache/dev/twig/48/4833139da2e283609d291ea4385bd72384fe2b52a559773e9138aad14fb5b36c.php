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

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_52adfdb725a4d296ff67de8468743269787d211d53e051cfc9ca647b82b4352b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/logo3_opt.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    <!-- Title Page-->
    <title>Twasalni.tn (Admin)</title>

    <!-- Fontfaces CSS-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

</head>
<body class=\"animsition\" >
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"index.html\">
                        <img style=\"height: 120px ; position: relative; top:-30px\"src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/logo3.png"), "html", null, true);
        echo "\" alt=\"Twasalni ? logo\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-user-circle\"></i>Gestion clients</a>
                    </li>
                    <li>
                        <a href=\"reservation_index\">
                            <i class=\"fas fa-taxi\"></i>Gestion des reservations</a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-address-card\"></i>Gestion des abonnements</a>
                    </li>
                    <li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>


                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">

            <a href=\"#\">
                <img  style=\"height: 125px; position: relative; top:10px\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/logo3.png"), "html", null, true);
        echo "\" alt=\"Twasalni? logo\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\" has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-user-circle\"></i>Gestion clients</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        echo "\">
                            <i class=\"fas fa-taxi\"></i>Gestion des reservations</a>
                    </li>



                    </li>
                    <li>
                        <a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_read");
        echo "\">
                            <i class=\"fas fa-taxi\"></i>Gestion des Courses</a>
                    </li>
                    <li>
                        <a href=\"test\">
                            <i class=\"fas fa-address-card\"></i>Gestion dess abonnements</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Moreno\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Diane Myers\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-01.jpg"), "html", null, true);
        echo "\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">ARBEEY</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/images/icon/avatar-01.jpg"), "html", null, true);
        echo "\" alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">flen doe</a>
                                                </h5>
                                                <span class=\"email\">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"../logout\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class=\"main-content\">

            <div class=\"section__content section__content--p30\">

                <div class=\"container-fluid\">
                    ";
        // line 444
        $this->displayBlock('content', $context, $blocks);
        // line 446
        echo "
                </div>

            </div>

        </div>



        <!-- MAIN CONTENT-->




</div>
</div>


</body>

<!-- Jquery JS-->
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap JS-->
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Vendor JS       -->
<script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/slick/slick.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\">

</script>

<!-- Main JS-->
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/backoffice/js/main.js"), "html", null, true);
        echo "\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>


<link data-require=\"sweet-alert@*\" data-semver=\"0.4.2\" rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css\"/>
</body>

</html>
<!-- end document-->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 444
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 445
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 445,  673 => 444,  650 => 489,  642 => 484,  638 => 483,  634 => 482,  630 => 481,  625 => 479,  621 => 478,  616 => 476,  612 => 475,  608 => 474,  603 => 472,  598 => 470,  594 => 469,  589 => 467,  566 => 446,  564 => 444,  517 => 400,  505 => 391,  447 => 336,  435 => 327,  423 => 318,  398 => 296,  385 => 286,  279 => 183,  268 => 175,  243 => 153,  133 => 46,  119 => 35,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  83 => 23,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">
    <link rel=\"shortcut icon\" href=\"{{ asset('templates/frontoffice/logo3_opt.png') }}\" type=\"image/x-icon\" />

    <!-- Title Page-->
    <title>Twasalni.tn (Admin)</title>

    <!-- Fontfaces CSS-->
    <link href=\"{{ asset('templates/backoffice/css/font-face.css') }}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/font-awesome-4.7/css/font-awesome.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"{{asset('templates/backoffice/vendor/bootstrap-4.1/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"{{ asset('templates/backoffice/vendor/animsition/animsition.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/wow/animate.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/css-hamburgers/hamburgers.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/slick/slick.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/select2/select2.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('templates/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"{{ asset('templates/backoffice/css/theme.css')}}\" rel=\"stylesheet\" media=\"all\">

</head>
<body class=\"animsition\" >
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"index.html\">
                        <img style=\"height: 120px ; position: relative; top:-30px\"src=\"{{ asset('templates/backoffice/images/icon/logo3.png')}}\" alt=\"Twasalni ? logo\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-user-circle\"></i>Gestion clients</a>
                    </li>
                    <li>
                        <a href=\"reservation_index\">
                            <i class=\"fas fa-taxi\"></i>Gestion des reservations</a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-address-card\"></i>Gestion des abonnements</a>
                    </li>
                    <li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>


                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">

            <a href=\"#\">
                <img  style=\"height: 125px; position: relative; top:10px\" src=\"{{ asset('templates/backoffice/images/icon/logo3.png')}}\" alt=\"Twasalni? logo\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\" has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-user-circle\"></i>Gestion clients</a>
                    </li>
                    <li>
                        <a href=\"{{ path('reservation_index')}}\">
                            <i class=\"fas fa-taxi\"></i>Gestion des reservations</a>
                    </li>



                    </li>
                    <li>
                        <a href=\"{{ path('course_read')}}\">
                            <i class=\"fas fa-taxi\"></i>Gestion des Courses</a>
                    </li>
                    <li>
                        <a href=\"test\">
                            <i class=\"fas fa-address-card\"></i>Gestion dess abonnements</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('templates/backoffice/images/icon/avatar-06.jpg')}}\" alt=\"Michelle Moreno\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('templates/backoffice/images/icon/avatar-04.jpg')}}\" alt=\"Diane Myers\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('templates/backoffice/images/icon/avatar-06.jpg')}}\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('templates/backoffice/images/icon/avatar-05.jpg')}}\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('templates/backoffice/images/icon/avatar-04.jpg')}}\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('templates/backoffice/images/icon/avatar-01.jpg')}}\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">ARBEEY</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('templates/backoffice/images/icon/avatar-01.jpg')}}\" alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">flen doe</a>
                                                </h5>
                                                <span class=\"email\">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"../logout\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class=\"main-content\">

            <div class=\"section__content section__content--p30\">

                <div class=\"container-fluid\">
                    {% block content %}
                    {% endblock %}

                </div>

            </div>

        </div>



        <!-- MAIN CONTENT-->




</div>
</div>


</body>

<!-- Jquery JS-->
<script src=\"{{asset('templates/backoffice/vendor/jquery-3.2.1.min.js')}}\"></script>
<!-- Bootstrap JS-->
<script src=\"{{asset('templates/backoffice/vendor/bootstrap-4.1/popper.min.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/bootstrap-4.1/bootstrap.min.js')}}\"></script>
<!-- Vendor JS       -->
<script src=\"{{asset('templates/backoffice/vendor/slick/slick.min.js')}}\">
</script>
<script src=\"{{asset('templates/backoffice/vendor/wow/wow.min.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/animsition/animsition.min.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\">
</script>
<script src=\"{{asset('templates/backoffice/vendor/counter-up/jquery.waypoints.min.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/counter-up/jquery.counterup.min.js')}}\">
</script>
<script src=\"{{asset('templates/backoffice/vendor/circle-progress/circle-progress.min.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/chartjs/Chart.bundle.min.js')}}\"></script>
<script src=\"{{asset('templates/backoffice/vendor/select2/select2.min.js')}}\">

</script>

<!-- Main JS-->
<script src=\"{{asset('templates/backoffice/js/main.js')}}\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>


<link data-require=\"sweet-alert@*\" data-semver=\"0.4.2\" rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css\"/>
</body>

</html>
<!-- end document-->

", "AdminBundle:Default:index.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
