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

/* stay/_form.html.twig */
class __TwigTemplate_4c1511fe7cb7258b4d4f81f5f6e78396451700286d8f96971b9be30579bf227b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
</br>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "capacity", [], "any", false, false, false, 6), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "capacity", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            Start At
        </div>
        <div class=\"col\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "startdateav", [], "any", false, false, false, 26), "date", [], "any", false, false, false, 26), "day", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "startdateav", [], "any", false, false, false, 29), "date", [], "any", false, false, false, 29), "month", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "startdateav", [], "any", false, false, false, 32), "date", [], "any", false, false, false, 32), "year", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            End At
        </div>
        <div class=\"col\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "enddateav", [], "any", false, false, false, 40), "date", [], "any", false, false, false, 40), "day", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "enddateav", [], "any", false, false, false, 43), "date", [], "any", false, false, false, 43), "month", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "enddateav", [], "any", false, false, false, 46), "date", [], "any", false, false, false, 46), "year", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    
    <div class=\"form-group\" style=\"margin: 2%; text-align: left\">
        <label >";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "photo", [], "any", false, false, false, 51), 'label');
        echo "</label>
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "photo", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div style=\"display: none\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'rest');
        echo "
    </div>
    </br>
    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 195px;background:!important; color: white !important\">
        Add a stay
        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/images/plus.png"), "html", null, true);
        echo "\" alt=\"Image\" class=\"maskImg\" />
    </button>

    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
        echo "\" style=\"width: 200x\" class=\"btn btn-primary\">
        Back to list
        <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" />
    </a>
           
";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stay/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 68,  152 => 63,  146 => 60,  138 => 55,  132 => 52,  128 => 51,  120 => 46,  114 => 43,  108 => 40,  97 => 32,  91 => 29,  85 => 26,  73 => 17,  67 => 14,  59 => 9,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form) }}
</br>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            {{ form_label(form.capacity) }}
        </div>
        <div class=\"col\">
             {{ form_widget(form.capacity, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            {{ form_label(form.description) }}
        </div>
        <div class=\"col\">
             {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            Start At
        </div>
        <div class=\"col\">
            {{ form_widget(form.startdateav.date.day, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.startdateav.date.month, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.startdateav.date.year, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            End At
        </div>
        <div class=\"col\">
            {{ form_widget(form.enddateav.date.day, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.enddateav.date.month, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.enddateav.date.year, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    
    <div class=\"form-group\" style=\"margin: 2%; text-align: left\">
        <label >{{ form_label(form.photo) }}</label>
        {{ form_widget(form.photo, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div style=\"display: none\">
        {{ form_rest(form) }}
    </div>
    </br>
    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 195px;background:!important; color: white !important\">
        Add a stay
        <img src=\"{{ asset('/front/images/plus.png') }}\" alt=\"Image\" class=\"maskImg\" />
    </button>

    <a href=\"{{ path('app_stay_index') }}\" style=\"width: 200x\" class=\"btn btn-primary\">
        Back to list
        <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" />
    </a>
           
{{ form_end(form) }}", "stay/_form.html.twig", "/var/www/jihene/web-sprint/templates/stay/_form.html.twig");
    }
}
