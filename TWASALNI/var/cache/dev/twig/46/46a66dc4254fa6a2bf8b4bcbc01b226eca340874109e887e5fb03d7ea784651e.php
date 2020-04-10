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
class __TwigTemplate_2c7657abd09fe760c6987e907371ad231297a84761e6bc045544f4b36c60f2f2 extends \Twig\Template
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
        body {background-color: gray;}
        h1   {color: #7ea2ff;}
        p    {color: black;}
        .mel{
            padding: 70px 0;
            border: 3px #0056b3;
        }
    </style>
</head>
<body>
<div align=\"center\" class=\"mel\">
<h1>Bienvenu à Twasalni!</h1>
    <img class=\"img1\" src=\"/RUNTIME-TERROR/TWASALNI/web/templates/backoffice/images/icon/logo3.png\" alt=\"Twasalni\" width=\"120\">
    <p>Vuillez entrer un mot de passe!</p>
    <p>Entrer un mot de passe facile dont vou vous souviendrez toujours!</p>

<form method=\"get\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_mdp", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })())]), "html", null, true);
        echo "\">
<table>
    <tr>
    <td>Nouveau MDP</td>
        <td><input type=\"password\" name=\"mdp\" required=\"password\"></td>
    </tr><tr>
        <td>Confirmer nouveau MDP</td>
        <td><input type=\"password\" name=\"double\"></td>

    </tr>
</table>
    <br>
    <input type=\"submit\" value=\"Confirm\">
</form>
</div>
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
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <style>
        body {background-color: gray;}
        h1   {color: #7ea2ff;}
        p    {color: black;}
        .mel{
            padding: 70px 0;
            border: 3px #0056b3;
        }
    </style>
</head>
<body>
<div align=\"center\" class=\"mel\">
<h1>Bienvenu à Twasalni!</h1>
    <img class=\"img1\" src=\"/RUNTIME-TERROR/TWASALNI/web/templates/backoffice/images/icon/logo3.png\" alt=\"Twasalni\" width=\"120\">
    <p>Vuillez entrer un mot de passe!</p>
    <p>Entrer un mot de passe facile dont vou vous souviendrez toujours!</p>

<form method=\"get\" action=\"{{ path('confirm_mdp',{'id':id }) }}\">
<table>
    <tr>
    <td>Nouveau MDP</td>
        <td><input type=\"password\" name=\"mdp\" required=\"password\"></td>
    </tr><tr>
        <td>Confirmer nouveau MDP</td>
        <td><input type=\"password\" name=\"double\"></td>

    </tr>
</table>
    <br>
    <input type=\"submit\" value=\"Confirm\">
</form>
</div>
</body>

</html>
", "partenaire/changeMdp.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\views\\partenaire\\changeMdp.html.twig");
    }
}
