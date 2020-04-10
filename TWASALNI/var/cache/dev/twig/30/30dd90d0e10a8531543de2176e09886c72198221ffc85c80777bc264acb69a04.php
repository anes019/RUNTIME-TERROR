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

/* @UtilisateursUtilisateurs/Default/footer.html.twig */
class __TwigTemplate_ae771a034b9aa47cb201317a06bdd05fd4505a3e65fd56cdcdac060c6010cb9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/Default/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateurs/Default/footer.html.twig"));

        // line 1
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
        // line 10
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
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/img/scroll-top.png"), "html", null, true);
        echo "\" alt=\"JSOFT\">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Popper Min Js ===-->
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Bootstrap Min Js ===-->
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Gijgo Min Js ===-->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/gijgo.js"), "html", null, true);
        echo "\"></script>
<!--=== Vegas Min Js ===-->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/vegas.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Isotope Min Js ===-->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/isotope.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Owl Caousel Min Js ===-->
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Waypoint Min Js ===-->
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<!--=== CounTotop Min Js ===-->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/counterup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== YtPlayer Min Js ===-->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
<!--=== Magnific Popup Min Js ===-->
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!--=== Slicknav Min Js ===-->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/plugins/slicknav.min.js"), "html", null, true);
        echo "\"></script>

<!--=== Mian Js ===-->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templates/frontoffice/assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateurs/Default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 106,  189 => 103,  184 => 101,  179 => 99,  174 => 97,  169 => 95,  164 => 93,  159 => 91,  154 => 89,  149 => 87,  144 => 85,  139 => 83,  134 => 81,  129 => 79,  120 => 73,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
", "@UtilisateursUtilisateurs/Default/footer.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\Default\\footer.html.twig");
    }
}
