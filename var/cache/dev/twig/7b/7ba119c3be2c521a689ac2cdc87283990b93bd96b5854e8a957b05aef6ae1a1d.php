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

/* stay/Adminedit.html.twig */
class __TwigTemplate_8ebeb14d0ec01139f0f76f862353c781a9173620bbe097a1ff4907e21f4f2702 extends \Twig\Template
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
            '_ad_images_widget' => [$this, 'block__ad_images_widget'],
            '_ad_images_entry_row' => [$this, 'block__ad_images_entry_row'],
            '_ad_images_entry_widget' => [$this, 'block__ad_images_entry_widget'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/Adminedit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/Adminedit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "stay/Adminedit.html.twig", 1);
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

        echo "Modification de l'annonce numéro ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container\">
</br>


    <h1 class=\"my-5\">Modification du stay numéro ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
      ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"col-md-12 p-3 py-5\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                echo "                    <div class=\"alert alert-success\">
                        ";
                // line 18
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </div>
            ";
        }
        // line 23
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
     

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                </div>
                <div class=\"card-body\">
                   ";
        // line 34
        echo twig_include($this->env, $context, "stay/_form.html.twig");
        echo "

                    <button type=\"submit\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stay");
        echo "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check\"></i>
                        Enregistrer les modifications
                    </button>
                    <div class=\"mt-5 text-center\">
                        
                        <a class=\"btn btn-primary\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stay");
        echo "\">back to list</a>
                        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)) {
            // line 44
            echo "                        <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" onclick=\"beforeRemove()\"><i class=\"fas fa-trash\"></i> delete</a>
                        ";
        }
        // line 46
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les réservations</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date de réservation</th>
                               
                                <th> Premier jour de séjour</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 67, $this->source); })()), "bookings", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 68
            echo "                            <tr>
                                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                
                                
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 72), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "firstDate", [], "any", false, false, false, 73)), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                                 <td>
                                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card bg-light mt-5\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Feedbacks</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Note</th>
                                <th>Commentaire</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["stay"], "bookings", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 107
            echo "                            <tr>
                                <td>id comment</td>
                                <td>author</td>
                                <td>note</td>
                                <td>content</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block__ad_images_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_widget"));

        // line 132
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block__ad_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_row"));

        // line 136
        echo "    <div id=\"block_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block__ad_images_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_widget"));

        // line 142
        echo "    <div class=\"row align-items-center mb-3\">
        <div class=\"col-4\">
            ";
        // line 144
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 144, $this->source); })())) {
            // line 145
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 145, $this->source); })()), "url", [], "any", false, false, false, 145), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
            ";
        }
        // line 147
        echo "        </div>
        <div class=\"col-6\">
            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "caption", [], "any", false, false, false, 149), 'row');
        echo "
        </div>
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-danger\" data-action=\"delete\" data-target=\"#block_";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 152, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        echo "
    <script>
        \$(document).ready(function() {
            \$('[data-action=\"delete\"]').on('click', function(){
                const target = this.dataset.target;
                \$(target).remove();
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/Adminedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 160,  404 => 159,  388 => 152,  382 => 149,  378 => 147,  372 => 145,  370 => 144,  366 => 142,  356 => 141,  343 => 137,  338 => 136,  328 => 135,  315 => 132,  305 => 131,  291 => 126,  282 => 119,  265 => 107,  261 => 106,  239 => 86,  227 => 80,  219 => 75,  214 => 73,  210 => 72,  204 => 69,  201 => 68,  197 => 67,  174 => 46,  168 => 44,  166 => 43,  162 => 42,  153 => 36,  148 => 34,  135 => 24,  132 => 23,  128 => 21,  119 => 18,  116 => 17,  112 => 16,  109 => 15,  107 => 14,  103 => 13,  96 => 8,  86 => 7,  66 => 3,  55 => 1,  53 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Modification de l'annonce numéro {{stay.id}}{% endblock %}

{% form_theme form _self %}

{% block body %}

<div class=\"container\">
</br>


    <h1 class=\"my-5\">Modification du stay numéro {{stay.id}}</h1>
      {%  if app.flashes('success') %}
            <div class=\"col-md-12 p-3 py-5\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
            {% endif %}

    {{ form_start(form) }}
     

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                </div>
                <div class=\"card-body\">
                   {{ include('stay/_form.html.twig')}}

                    <button type=\"submit\" href=\"{{ path('app_admin_stay') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check\"></i>
                        Enregistrer les modifications
                    </button>
                    <div class=\"mt-5 text-center\">
                        
                        <a class=\"btn btn-primary\" href=\"{{ path('app_admin_stay') }}\">back to list</a>
                        {% if stay.id %}
                        <a class=\"btn btn-danger\" href=\"{{path('admin_ads_delete',{'id': stay.id})}}\" onclick=\"beforeRemove()\"><i class=\"fas fa-trash\"></i> delete</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les réservations</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date de réservation</th>
                               
                                <th> Premier jour de séjour</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for booking in stay.bookings %}
                            <tr>
                                <td>{{booking.id}}</td>
                                
                                
                                <td>{{booking.bookingDate | date('d/m/Y H:i')}}</td>
                                <td>{{booking.firstDate | date}}</td>
                                <td>
                                    <a href=\"{{ path('app_admin_booking_edit', {'id': booking.id}) }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                                 <td>
                                    <a href=\"{{ path('app_admin_booking_delete', {'id': booking.id}) }}\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card bg-light mt-5\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Feedbacks</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Note</th>
                                <th>Commentaire</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for stay in stay.bookings %}
                            <tr>
                                <td>id comment</td>
                                <td>author</td>
                                <td>note</td>
                                <td>content</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

{% endblock %}

{% block _ad_images_widget %}
    {{ form_widget(form) }}
{% endblock %}

{% block _ad_images_entry_row %}
    <div id=\"block_{{id}}\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block _ad_images_entry_widget %}
    <div class=\"row align-items-center mb-3\">
        <div class=\"col-4\">
            {% if value %}
                <img src=\"{{value.url}}\" class=\"img-fluid\" alt=\"\">
            {% endif %}
        </div>
        <div class=\"col-6\">
            {{ form_row(form.caption) }}
        </div>
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-danger\" data-action=\"delete\" data-target=\"#block_{{id}}\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
{% endblock %}

{% block javascripts %}

    <script>
        \$(document).ready(function() {
            \$('[data-action=\"delete\"]').on('click', function(){
                const target = this.dataset.target;
                \$(target).remove();
            });
        });
    </script>

{% endblock %}", "stay/Adminedit.html.twig", "/var/www/jihene/web-sprint/templates/stay/Adminedit.html.twig");
    }
}
