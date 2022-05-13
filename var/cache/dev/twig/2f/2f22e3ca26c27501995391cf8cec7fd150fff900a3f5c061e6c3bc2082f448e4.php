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

/* stay/show.html.twig */
class __TwigTemplate_5f55f514db6507a8132662842ee5e8d2b36b5c4786363d13a318a83a93a77b61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stay/show.html.twig", 1);
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

        echo "Stay";
        
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
        echo "<div class=\"showstay-container\">

<p style=\"font-size:25px;font-family:Arial Black;color:#ffa233\">More informations about the stay</p>
</br>

<br></br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 21, $this->source); })()), "capacity", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 29, $this->source); })()), "photo", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdateav</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 33, $this->source); })()), "startdateav", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 33, $this->source); })()), "startdateav", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Enddateav</th>
                <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 37, $this->source); })()), "enddateav", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 37, $this->source); })()), "enddateav", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
        echo "\" class=\"btn btn-primary\"style=\"margin:30px;width:400px\"  >back 
     <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" /></a>

  </br>
    ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 48
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_stay", ["stay" => twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-info\" style=\"margin:5px;width:400px\">Book now
        <img src=\"/front/images/book.png\" alt=\"Image\" class=\"maskImg\" >
        </a>
    ";
        }
        // line 52
        echo " 
   ";
        // line 54
        echo "    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  162 => 52,  154 => 48,  152 => 47,  145 => 43,  136 => 37,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stay{% endblock %}

{% block body %}
<div class=\"showstay-container\">

<p style=\"font-size:25px;font-family:Arial Black;color:#ffa233\">More informations about the stay</p>
</br>

<br></br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ stay.id }}</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>{{ stay.capacity }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ stay.description }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ stay.photo }}</td>
            </tr>
            <tr>
                <th>Startdateav</th>
                <td>{{ stay.startdateav ? stay.startdateav|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Enddateav</th>
                <td>{{ stay.enddateav ? stay.enddateav|date('Y-m-d') : '' }}</td>
            
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_stay_index') }}\" class=\"btn btn-primary\"style=\"margin:30px;width:400px\"  >back 
     <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" /></a>

  </br>
    {% if is_granted('ROLE_GUEST') %}
        <a href=\"{{ path('app_booking_stay', {'stay': stay.id}) }}\" class=\"btn btn-info\" style=\"margin:5px;width:400px\">Book now
        <img src=\"/front/images/book.png\" alt=\"Image\" class=\"maskImg\" >
        </a>
    {% endif %}
 
   {# {{ include('stay/_delete_form.html.twig') }} #}
    </div>
    </div>
{% endblock %}
", "stay/show.html.twig", "/var/www/jihene/web-sprint/templates/stay/show.html.twig");
    }
}
