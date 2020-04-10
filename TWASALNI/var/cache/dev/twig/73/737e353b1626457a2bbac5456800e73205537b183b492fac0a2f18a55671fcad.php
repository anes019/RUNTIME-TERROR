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

/* partenaire/changeMdp.html.twig */
class __TwigTemplate_2130310fe7b9370c621e02c242a5847f3e3fa7bc97e82f2c7f95c7a1a4f15845 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/changeMdp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/changeMdp.html.twig"));

        // line 1
        echo "<html>
<head>
    <style>
        body {background-color: powderblue;}
        h1   {color: blue;}
        p    {color: black;}
    </style>
</head>
<body>

<h1>Bienvenu à Twasalni!</h1>
<p>veuillez entrer votre mot de passe</p>

<form method=\"get\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_mdp", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "\">

<tr>
    Nouveau MDP<input type=\"password\" name=\"mdp\" required=\"password\"><br>
    Confirmer nouveau MDP <input type=\"password\" name=\"double\"><br>
    </tr>

    <input type=\"submit\" value=\"Confirm\">
</form>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/changeMdp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <style>
        body {background-color: powderblue;}
        h1   {color: blue;}
        p    {color: black;}
    </style>
</head>
<body>

<h1>Bienvenu à Twasalni!</h1>
<p>veuillez entrer votre mot de passe</p>

<form method=\"get\" action=\"{{ path('confirm_mdp',{'id':id }) }}\">

<tr>
    Nouveau MDP<input type=\"password\" name=\"mdp\" required=\"password\"><br>
    Confirmer nouveau MDP <input type=\"password\" name=\"double\"><br>
    </tr>

    <input type=\"submit\" value=\"Confirm\">
</form>

</body>

</html>
", "partenaire/changeMdp.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\partenaire\\changeMdp.html.twig");
    }
}
