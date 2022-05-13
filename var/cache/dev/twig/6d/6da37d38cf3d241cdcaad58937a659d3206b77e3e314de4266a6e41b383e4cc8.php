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
class __TwigTemplate_c67e476699d7aae09721099c3b82e9a590b2170553ffc51c322b1b6cabd7601e extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
</br>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'widget');
        echo "
    </br>
    
             <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_new");
        echo "\" style=\"width: 200x\" class=\"btn btn-primary\">ADD A STAY
            <img src=\"/front/images/plus.png\" alt=\"Image\"
  class=\"maskImg\"
  />
            </a>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
        echo "\" style=\"width: 200x\" class=\"btn btn-primary\">Back to list
            <img src=\"/front/images/return.png\" alt=\"Image\"
  class=\"maskImg\"
  />
            </a>
</br>
</br>            
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
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
        return array (  72 => 18,  62 => 11,  54 => 6,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
</br>
    {{ form_widget(form) }}
    </br>
    
             <a href=\"{{ path('app_stay_new') }}\" style=\"width: 200x\" class=\"btn btn-primary\">ADD A STAY
            <img src=\"/front/images/plus.png\" alt=\"Image\"
  class=\"maskImg\"
  />
            </a>
            <a href=\"{{ path('app_stay_index') }}\" style=\"width: 200x\" class=\"btn btn-primary\">Back to list
            <img src=\"/front/images/return.png\" alt=\"Image\"
  class=\"maskImg\"
  />
            </a>
</br>
</br>            
{{ form_end(form) }}
", "stay/_form.html.twig", "/var/www/jihene/web-sprint/templates/stay/_form.html.twig");
    }
}
