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

/* profile/myprof.html.twig */
class __TwigTemplate_045911c88065c4709bbd2646374c9ca19a8024c2783592d465cb9b88c1f80133 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprof.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprof.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myprof.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
     <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row\" >
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, false, 13)), "html", null, true);
        echo "</span>
                    <span class=\"text-black-50\"> Email : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
                    <span> Username : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
        echo " </span>
                    <span> Mobile phone : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    <span class=\"labels\"> <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "introduction", [], "any", false, false, false, 17), "html", null, true);
        echo " </p> </span>
                    <span><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_profile");
        echo "\" class=\"btn btn-primary mr-2 mb-2\">Edit</a></span>
                </div>
            </div>
            <div class=\"col-md-9 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 25
            echo "                        <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "stays", [], "any", false, false, false, 25)), "html", null, true);
            echo " annonces</span>
                        ";
        }
        // line 27
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 28
            echo "                        <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "bookings", [], "any", false, false, false, 28)), "html", null, true);
            echo " réservations</span>
                        ";
        }
        // line 30
        echo "                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 34
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "stays", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            echo "                                <div class=\"row\" style=\"display: flex;align-items: center;\">
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "stays", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
                // line 37
                echo "                                     <div class=\"col-lg-4 col-md-6 mb-4 aos-init aos-animate\" data-aos=\"fade-up\">
                                        <div class=\"listing-item\">
                                            <div class=\"listing-image\">
                                                <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["stay"], "photo", [], "any", false, false, false, 40))), "html", null, true);
                echo "\" alt=\"Image\" class=\"img-fluid\"></div>
                                                <div class=\"listing-item-content\">
                                                    <a class=\"px-3 mb-3 category bg-primary\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">Consult</a>
                                                    <h2 class=\"mb-1\">
                                                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "description", [], "any", false, false, false, 44), "html", null, true);
                echo "</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                </div>
                            ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "bookings", [], "any", false, false, false, 52)) > 0)) {
            echo "    
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;padding:100px; border: 60px solid orange\">
                                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "bookings", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                // line 55
                echo "                                     <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                                        <span> Start At : ";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "firstDate", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true);
                echo " </span>
                                        <span> End At : ";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true);
                echo " </span>
                                        <span> Stay : ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "stay", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58), "html", null, true);
                echo " </span>
                                     </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                </div>
                            ";
        } else {
            // line 63
            echo "                                <div class=\"alert alert-warning\">
                                    <p>
                                        ";
            // line 65
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
                // line 66
                echo "                                        <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "firstname", [], "any", false, false, false, 66), "html", null, true);
                echo "</strong> n'a pas encore d'annonce sur le site !
                                        ";
            }
            // line 68
            echo "                                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
                // line 69
                echo "                                        <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "firstname", [], "any", false, false, false, 69), "html", null, true);
                echo "</strong> n'a pas encore de réservations sur le site !
                                        ";
            }
            // line 71
            echo "                                    </p>
                                </div>
                            ";
        }
        // line 74
        echo "                        </div>  
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    
                    
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/myprof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 74,  246 => 71,  240 => 69,  237 => 68,  231 => 66,  229 => 65,  225 => 63,  221 => 61,  212 => 58,  208 => 57,  204 => 56,  201 => 55,  197 => 54,  192 => 52,  189 => 51,  174 => 44,  169 => 42,  164 => 40,  159 => 37,  155 => 36,  152 => 35,  150 => 34,  144 => 30,  138 => 28,  135 => 27,  129 => 25,  127 => 24,  118 => 18,  114 => 17,  110 => 16,  106 => 15,  102 => 14,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de {{user.firstname}}{% endblock %}

{% block body %}

     <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row\" >
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">{{ user.firstname ~ ' ' ~ user.lastname }}</span>
                    <span class=\"text-black-50\"> Email : {{ user.email }}</span>
                    <span> Username : {{ user.username }} </span>
                    <span> Mobile phone : {{ user.phone }}</span>
                    <span class=\"labels\"> <p> {{ user.introduction }} </p> </span>
                    <span><a href=\"{{ path('update_profile') }}\" class=\"btn btn-primary mr-2 mb-2\">Edit</a></span>
                </div>
            </div>
            <div class=\"col-md-9 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        {% if is_granted('ROLE_HOST') %}
                        <span class=\"badge badge-primary\">{{user.stays | length}} annonces</span>
                        {% endif %}
                        {% if is_granted('ROLE_GUEST') %}
                        <span class=\"badge badge-primary\">{{user.bookings | length}} réservations</span>
                        {% endif %}
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            {% if user.stays | length > 0 %}
                                <div class=\"row\" style=\"display: flex;align-items: center;\">
                                    {% for stay in user.stays %}
                                     <div class=\"col-lg-4 col-md-6 mb-4 aos-init aos-animate\" data-aos=\"fade-up\">
                                        <div class=\"listing-item\">
                                            <div class=\"listing-image\">
                                                <img src=\"{{ asset('uploads/' ~ stay.photo) }}\" alt=\"Image\" class=\"img-fluid\"></div>
                                                <div class=\"listing-item-content\">
                                                    <a class=\"px-3 mb-3 category bg-primary\" href=\"{{ path('app_stay_show', {'id': stay.id}) }}\">Consult</a>
                                                    <h2 class=\"mb-1\">
                                                        <a href=\"{{ path('app_stay_show', {'id': stay.id}) }}\">{{ stay.description}}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}
                                </div>
                            {% elseif user.bookings | length > 0 %}    
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;padding:100px; border: 60px solid orange\">
                                    {% for booking in user.bookings %}
                                     <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                                        <span> Start At : {{ booking.firstDate |date('Y-m-d') }} </span>
                                        <span> End At : {{ booking.endDate |date('Y-m-d') }} </span>
                                        <span> Stay : {{ booking.stay.description }} </span>
                                     </div>
                                    {% endfor %}
                                </div>
                            {% else %}
                                <div class=\"alert alert-warning\">
                                    <p>
                                        {% if is_granted('ROLE_HOST') %}
                                        <strong>{{user.firstname}}</strong> n'a pas encore d'annonce sur le site !
                                        {% endif %}
                                        {% if is_granted('ROLE_GUEST') %}
                                        <strong>{{user.firstname}}</strong> n'a pas encore de réservations sur le site !
                                        {% endif %}
                                    </p>
                                </div>
                            {% endif %}
                        </div>  
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    
                    
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "profile/myprof.html.twig", "/var/www/jihene/web-sprint/templates/profile/myprof.html.twig");
    }
}
