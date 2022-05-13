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

/* user/index.html.twig */
class __TwigTemplate_ec871230c6f26884348ac998cb0d549a293aab1b1ea392c892599f20c94cabae extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container py-5\">
        <div class=\"row py-5\">
            <h1>User index</h1>
            <div class=\"col-md-10\">
            ";
        // line 16
        $this->loadTemplate("user/_filtre.html.twig", "user/index.html.twig", 16)->display($context);
        // line 17
        echo "            </div>
            <div class=\"col-md-2\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Create new</a>
            </div>
            <div class=\"col-md-12\">
                <table class=\"table\" style=\"width: 100%\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Avatar</th>
                            <th>Role</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"user-list\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "                        <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41), 0, [], "array", false, false, false, 41), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            
                            <td>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "                        <tr>
                            <td colspan=\"9\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 66
        echo "    <script>
        const table = \$('#user-list');
        const fetchUsersFromApi = () => {
            const text = \$('#user-description').val();
            
            \$.post(\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        echo "\", {text}, function(response){ 
                drawTable(response);
            });
        }
        const drawTable = (data) => {
            table.empty();
            if(data.length > 0){
                
                data.forEach( row => {
                    // table row creation
                    const showPath = \"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => "__code"]);
        echo "\".replaceAll('__code', row.id);
                    const editPath = \"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "__code"]);
        echo "\".replaceAll('__code', row.id);
                    
                    let tr = \$(`<tr></tr>`);
                    tr.append(`<td> \${row.id} </td>`);
                    tr.append(`<td> \${row.username} </td>`);
                    tr.append(`<td> \${row.avatar} </td>`);
                    tr.append(`<td> \${row.roles[0] ? row.roles[0] : (row.roles ?? '')} </td>`);
                    tr.append(`<td> \${row.firstname} </td>`);
                    tr.append(`<td> \${row.lastname} </td>`);
                    tr.append(`<td> \${row.email} </td>`);
                    tr.append(`<td> \${row.phone} </td>`);
                   
                    tr.append(`<td>
                        <a href=\"\${showPath}\">show</a>
                        <a href=\"\${editPath}\">edit</a>
                    </td>`);
                    table.append(tr);
                    
                });
            }
        }
        
        fetchUsersFromApi();
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 82,  255 => 81,  242 => 71,  235 => 66,  225 => 65,  209 => 57,  200 => 53,  191 => 49,  187 => 48,  181 => 45,  177 => 44,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  157 => 39,  154 => 38,  149 => 37,  128 => 19,  124 => 17,  122 => 16,  116 => 12,  106 => 11,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}User index{% endblock %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row py-5\">
            <h1>User index</h1>
            <div class=\"col-md-10\">
            {% include 'user/_filtre.html.twig' %}
            </div>
            <div class=\"col-md-2\">
                <a href=\"{{ path('app_user_new') }}\">Create new</a>
            </div>
            <div class=\"col-md-12\">
                <table class=\"table\" style=\"width: 100%\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Avatar</th>
                            <th>Role</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"user-list\">
                    {% for user in users %}
                        <tr>
                            <td>{{ user.id }}</td>
                            <td>{{ user.username }}</td>
                            <td>{{ user.roles ? user.roles[0] : '' }}</td>
                            <td>{{ user.firstname }}</td>
                            <td>{{ user.lastname }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.phone }}</td>
                            
                            <td>
                                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"9\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
{% endblock %}

{% block js %}
    <script>
        const table = \$('#user-list');
        const fetchUsersFromApi = () => {
            const text = \$('#user-description').val();
            
            \$.post(\"{{ path('app_user_search') }}\", {text}, function(response){ 
                drawTable(response);
            });
        }
        const drawTable = (data) => {
            table.empty();
            if(data.length > 0){
                
                data.forEach( row => {
                    // table row creation
                    const showPath = \"{{ path('app_user_show', {'id': '__code'}) }}\".replaceAll('__code', row.id);
                    const editPath = \"{{ path('app_user_edit', {'id': '__code'}) }}\".replaceAll('__code', row.id);
                    
                    let tr = \$(`<tr></tr>`);
                    tr.append(`<td> \${row.id} </td>`);
                    tr.append(`<td> \${row.username} </td>`);
                    tr.append(`<td> \${row.avatar} </td>`);
                    tr.append(`<td> \${row.roles[0] ? row.roles[0] : (row.roles ?? '')} </td>`);
                    tr.append(`<td> \${row.firstname} </td>`);
                    tr.append(`<td> \${row.lastname} </td>`);
                    tr.append(`<td> \${row.email} </td>`);
                    tr.append(`<td> \${row.phone} </td>`);
                   
                    tr.append(`<td>
                        <a href=\"\${showPath}\">show</a>
                        <a href=\"\${editPath}\">edit</a>
                    </td>`);
                    table.append(tr);
                    
                });
            }
        }
        
        fetchUsersFromApi();
    </script>
  {% endblock %}  
", "user/index.html.twig", "/var/www/jihene/web-sprint/templates/user/index.html.twig");
    }
}
