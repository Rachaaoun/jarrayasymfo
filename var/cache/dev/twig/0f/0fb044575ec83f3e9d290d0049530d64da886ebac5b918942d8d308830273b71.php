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

/* stay/index.html.twig */
class __TwigTemplate_f3b90d30a988d77349b75ef5898fd46ef0745bf113f273f757a8eeeb08a2997f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stay/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Stay index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo " 
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    

";
        // line 17
        $this->loadTemplate("stay/_filtre.html.twig", "stay/index.html.twig", 17)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })())]));
        // line 18
        echo "    
<div class=\"row\" style=\"display: flex;align-items: center;background-color:white;padding:100px; border: 60px solid orange\">
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 21
            echo "        
          <div class=\"col-lg-4 col-md-6 mb-4 aos-init aos-animate\"  data-aos=\"fade-up\">
            <div class=\"listing-item\" >
              <div class=\"listing-image\" >
                <img  src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["stay"], "photo", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-fluid\">
              </div>
              <div class=\"listing-item-content\">
                <a class=\"px-3 mb-3 category bg-primary\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Consult</a>
                <h2 class=\"mb-1\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></h2>
              </div>
            </div>
          </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "       
        </div>














































































    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Capacity</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Startdateav</th>
                <th>Enddateav</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 126, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 127
            echo "            <tr>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "capacity", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "description", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "photo", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            ((twig_get_attribute($this->env, $this->source, $context["stay"], "startdateav", [], "any", false, false, false, 132)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "startdateav", [], "any", false, false, false, 132), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 133
            ((twig_get_attribute($this->env, $this->source, $context["stay"], "enddateav", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "enddateav", [], "any", false, false, false, 133), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 140
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 147,  303 => 144,  294 => 140,  285 => 136,  281 => 135,  276 => 133,  272 => 132,  268 => 131,  264 => 130,  260 => 129,  256 => 128,  253 => 127,  248 => 126,  153 => 33,  140 => 29,  136 => 28,  130 => 25,  124 => 21,  120 => 20,  116 => 18,  114 => 17,  110 => 15,  100 => 14,  89 => 11,  79 => 10,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block title %}Stay index{% endblock %}


   

 {% block stylesheets %}
 
 {% endblock %}

{% block body %}
    

{% include 'stay/_filtre.html.twig' with {form : form} only %}
    
<div class=\"row\" style=\"display: flex;align-items: center;background-color:white;padding:100px; border: 60px solid orange\">
{% for stay in stays %}
        
          <div class=\"col-lg-4 col-md-6 mb-4 aos-init aos-animate\"  data-aos=\"fade-up\">
            <div class=\"listing-item\" >
              <div class=\"listing-image\" >
                <img  src=\"{{ asset('uploads/'~stay.photo) }}\" alt=\"Image\" class=\"img-fluid\">
              </div>
              <div class=\"listing-item-content\">
                <a class=\"px-3 mb-3 category bg-primary\" href=\"{{ path('app_stay_show', {'id':stay.id}) }}\">Consult</a>
                <h2 class=\"mb-1\"><a href=\"{{ path('app_stay_show', {'id':stay.id}) }}\">{{stay.description}}</a></h2>
              </div>
            </div>
          </div>
{% endfor %}       
        </div>














































































    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Capacity</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Startdateav</th>
                <th>Enddateav</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for stay in stays %}
            <tr>
                <td>{{ stay.id }}</td>
                <td>{{ stay.capacity }}</td>
                <td>{{ stay.description }}</td>
                <td>{{ stay.photo }}</td>
                <td>{{ stay.startdateav ? stay.startdateav|date('Y-m-d') : '' }}</td>
                <td>{{ stay.enddateav ? stay.enddateav|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_stay_show', {'id': stay.id}) }}\">show</a>
                    <a href=\"{{ path('app_stay_edit', {'id': stay.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_stay_new') }}\">Create new</a>
{% endblock %}
", "stay/index.html.twig", "/var/www/jihene/web-sprint/templates/stay/index.html.twig");
    }
}
