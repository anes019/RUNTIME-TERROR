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

/* @FOSMessage/Message/threads_list.html.twig */
class __TwigTemplate_e8b57cbe5551be67bcddb831ef4351550d70169e4a68c4fbdbca8f77b3aa4194 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSMessage/Message/threads_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSMessage/Message/threads_list.html.twig"));

        // line 1
        echo "           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("subject", [], "FOSMessageBundle");
        echo "</th>
                   <th class=\"th-sm\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("starter", [], "FOSMessageBundle");
        echo "</th>
                   <th class=\"th-sm\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("startdate", [], "FOSMessageBundle");
        echo "</th>
                   <th class=\"th-sm\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messages", [], "FOSMessageBundle");
        echo "</th>
                   <th class=\"th-sm\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("last_message", [], "FOSMessageBundle");
        echo "</th>
                   <th class=\"th-sm\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("actions", [], "FOSMessageBundle");
        echo "</th>

               </tr>
               </thead>
               <tbody>
               ";
        // line 15
        if ((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 17
                echo "                   <tr>
                       <td>
                           <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", ["threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">
                               ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "subject", [], "any", false, false, false, 20), "html", null, true);
                echo "
                           </a>

                           ";
                // line 23
                if ( !$this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->isRead($context["thread"])) {
                    // line 24
                    echo "                               (";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("new", [], "FOSMessageBundle");
                    echo ")
                           ";
                }
                // line 26
                echo "                       </td>
                       <td>
                           ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "createdBy", [], "any", false, false, false, 28), "html", null, true);
                echo "
                       </td>
                       <td>
                           ";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "createdAt", [], "any", false, false, false, 31)), "html", null, true);
                echo "
                       </td>
                       <td>
                           ";
                // line 34
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "messages", [], "any", false, false, false, 34)), "html", null, true);
                echo "
                       </td>
                       <td>
                           ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["thread"], "lastMessage", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                               <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", ["threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thread"], "lastMessage", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", [], "FOSMessageBundle");
                    echo "\">
                                   →
                               </a>
                               ";
                    // line 41
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("on", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thread"], "lastMessage", [], "any", false, false, false, 41), "createdAt", [], "any", false, false, false, 41))], "FOSMessageBundle");
                    // line 42
                    echo "                               <br />
                               ";
                    // line 43
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("by", ["%sender%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thread"], "lastMessage", [], "any", false, false, false, 43), "sender", [], "any", false, false, false, 43))], "FOSMessageBundle");
                    // line 44
                    echo "                           ";
                } else {
                    // line 45
                    echo "                               ----
                           ";
                }
                // line 47
                echo "                       </td>
                       <td>
                           ";
                // line 49
                if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->canDeleteThread($context["thread"])) {
                    // line 50
                    echo "                               ";
                    if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->isThreadDeletedByParticipant($context["thread"])) {
                        // line 51
                        echo "                                   ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_undelete", ["threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 52
                        echo "                                   ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", [], "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                               ";
                    } else {
                        // line 54
                        echo "                                   ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_delete", ["threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 55
                        echo "                                   ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", [], "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 56
                        echo "                               ";
                    }
                    // line 57
                    echo "                               <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 57, $this->source); })()), "html", null, true);
                    echo "\" method=\"post\">
                                   <input type=\"submit\" value=\"";
                    // line 58
                    echo twig_escape_filter($this->env, (isset($context["submitValue"]) || array_key_exists("submitValue", $context) ? $context["submitValue"] : (function () { throw new RuntimeError('Variable "submitValue" does not exist.', 58, $this->source); })()), "html", null, true);
                    echo "\" />
                               </form>
                           ";
                }
                // line 61
                echo "                       </td>
                   </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "               ";
        } else {
            // line 65
            echo "                   <tr>
                       <td colspan=\"6\">
                           ";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", [], "FOSMessageBundle");
            echo ".
                       </td>
                   </tr>
               ";
        }
        // line 71
        echo "
               </tbody>
           </table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSMessage/Message/threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 71,  216 => 67,  212 => 65,  209 => 64,  201 => 61,  195 => 58,  190 => 57,  187 => 56,  182 => 55,  177 => 54,  174 => 53,  169 => 52,  164 => 51,  161 => 50,  159 => 49,  155 => 47,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  141 => 41,  130 => 38,  128 => 37,  122 => 34,  116 => 31,  110 => 28,  106 => 26,  100 => 24,  98 => 23,  92 => 20,  88 => 19,  84 => 17,  79 => 16,  77 => 15,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("           <table class=\"table table-bordered table-striped\">
               <thead>
               <tr>

                   <th class=\"th-sm\">{% trans from 'FOSMessageBundle' %}subject{% endtrans %}</th>
                   <th class=\"th-sm\">{% trans from 'FOSMessageBundle' %}starter{% endtrans %}</th>
                   <th class=\"th-sm\">{% trans from 'FOSMessageBundle' %}startdate{% endtrans %}</th>
                   <th class=\"th-sm\">{% trans from 'FOSMessageBundle' %}messages{% endtrans %}</th>
                   <th class=\"th-sm\">{% trans from 'FOSMessageBundle' %}last_message{% endtrans %}</th>
                   <th class=\"th-sm\">{% trans from 'FOSMessageBundle' %}actions{% endtrans %}</th>

               </tr>
               </thead>
               <tbody>
               {% if threads %}
               {% for thread in threads %}
                   <tr>
                       <td>
                           <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\">
                               {{ thread.subject }}
                           </a>

                           {% if not fos_message_is_read(thread) %}
                               ({% trans from 'FOSMessageBundle' %}new{% endtrans %})
                           {% endif %}
                       </td>
                       <td>
                           {{ thread.createdBy }}
                       </td>
                       <td>
                           {{ thread.createdAt|date }}
                       </td>
                       <td>
                           {{ thread.messages|length }}
                       </td>
                       <td>
                           {% if thread.lastMessage %}
                               <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\" title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                                   →
                               </a>
                               {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}
                               <br />
                               {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}
                           {% else %}
                               ----
                           {% endif %}
                       </td>
                       <td>
                           {% if fos_message_can_delete_thread(thread) %}
                               {% if fos_message_deleted_by_participant(thread) %}
                                   {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                                   {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                               {% else %}
                                   {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                                   {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                               {% endif %}
                               <form action=\"{{ formAction }}\" method=\"post\">
                                   <input type=\"submit\" value=\"{{ submitValue }}\" />
                               </form>
                           {% endif %}
                       </td>
                   </tr>
               {% endfor %}
               {% else %}
                   <tr>
                       <td colspan=\"6\">
                           {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.
                       </td>
                   </tr>
               {% endif %}

               </tbody>
           </table>", "@FOSMessage/Message/threads_list.html.twig", "C:\\wamp64\\www\\RUNTIME-TERROR\\TWASALNI\\app\\Resources\\FOSMessageBundle\\views\\Message\\threads_list.html.twig");
    }
}
