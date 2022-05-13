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

/* base.html.twig */
class __TwigTemplate_76c67ca0c486dc665f5402970f337d62eeb3fb10298c6175cd113296ab169146 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset=\"utf-8\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"/front/fonts/icomoon/style.css\">

    <link rel=\"stylesheet\" href=\"/front/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"/front/css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"/front/fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/front/css/aos.css\">

    <!-- MAIN CSS -->
    <link rel=\"stylesheet\" href=\"/front/css/style.css\">
    <style>
      .fullWidthForm form {
        width: 100%;
      }
      .fullWidthForm {
        padding: 5%;
      }
    </style>
    ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "  </head>

  <body data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">

    <div class=\"site-wrap\" id=\"home-section\">

      <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
          <div class=\"site-mobile-menu-close mt-3\">
            <span class=\"icon-close2 js-menu-toggle\"></span>
          </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
      </div>

      <header class=\"site-navbar site-navbar-target\" role=\"banner\">

        <div class=\"container\">
          <div class=\"row align-items-center position-relative\">

            <div class=\"col-3 \">
              <div class=\"site-logo\">
                <a href=\"index.html\" class=\"font-weight-bold\">
                  <img src=\"/front/images/logo.png\" alt=\"Image\" class=\"img-fluid\">
                </a>
              </div>
            </div>

            <div class=\"col-9  text-right\">
             

              <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\"text-white site-menu-toggle js-menu-toggle py-5 text-white\"><span class=\"icon-menu h3 text-white\"></span></a></span>

             

              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">
                <ul class=\"site-menu main-menu js-clone-nav ml-auto \">
                  <!-- home page path  -->
                  ";
        // line 75
        if (twig_in_filter("home", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "get", [0 => "_route"], "method", false, false, false, 75))) {
            // line 76
            echo "                    <li class=\"active\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
            echo "\" class=\"nav-link\">Home</a></li> 
                  ";
        } else {
            // line 78
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
            echo "\" class=\"nav-link\">Home</a></li> 
                  ";
        }
        // line 79
        echo "  
                  
                  ";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 82
            echo "                    <!-- new stay path  -->
                    ";
            // line 83
            if (twig_in_filter("app_stay", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83))) {
                // line 84
                echo "                      <li class=\"active\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
                echo "\" class=\"nav-link\">My Stay</a></li>
                    ";
            } else {
                // line 86
                echo "                      <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_new");
                echo "\" class=\"nav-link\">My Stay</a></li>
                    ";
            }
            // line 88
            echo "                  ";
        }
        // line 89
        echo "
                  ";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 91
            echo "                    <!-- booking path -->
                    ";
            // line 92
            if (twig_in_filter("Booking", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "get", [0 => "_route"], "method", false, false, false, 92))) {
                // line 93
                echo "                      <li class=\"active\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyBookings");
                echo "\" class=\"nav-link\">My Bookings</a></li>
                    ";
            } else {
                // line 95
                echo "                      <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyBookings");
                echo "\" class=\"nav-link\">My Bookings</a></li>
                    ";
            }
            // line 97
            echo "                  ";
        }
        // line 98
        echo "                  
                  <li ><a href=\"index.html\" class=\"nav-link\">Rankings</a></li>
                  <li ><a href=\"index.html\" class=\"nav-link\">Feedbacks</a></li>

                  <li><a href=\"about.html\" class=\"nav-link\">About</a></li>
                  <li><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
        echo "\" class=\"nav-link\">My Profile</a></li>
                  <li><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                  <li><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>

                  ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) {
            // line 108
            echo "                    <li title=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                     <img src=\"/icons/logout.svg\"> </a> 
                    </li>
                  ";
        }
        // line 112
        echo "                </ul>
              </nav>
            </div>

           
          </div>
        </div>

      </header>

<div class=\"ftco-blocks-cover-1\">
      <div class=\"site-section-cover overlay\" style=\"background-image: url('/front/images/hero_1.jpg')\">
       
       
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-5\" data-aos=\"fade-right\">
              <h1 class=\"mb-3 text-white\">Let's Enjoy The Wonders of Nature</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p class=\"d-flex align-items-center\">
                <a href=\"https://vimeo.com/191947042\" data-fancybox class=\"play-btn-39282 mr-3\"><span class=\"icon-play\"></span></a>
                <span class=\"small\">Watch the video</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"site-section\" style=\"max-height:10px;\">

      <div class=\"container\">
        <div class=\"row justify-content-center text-center\">
          <div class=\"col-md-7\" >
            <div class=\"heading-39101 mb-5\">
              <span class=\"backdrop text-center\">Journey</span>
              <span class=\"subtitle-39191\">Journey</span>
              <h3>Your Journey Starts Here</h3>
            </div>
          </div>
        </div>
       

      </div>
    </div>
    </div>
    ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 160
        echo "
    <script src=\"/front/js/jquery-3.3.1.min.js\"></script>
    <script src=\"/front/js/jquery-migrate-3.0.0.js\"></script>
    <script src=\"/front/js/popper.min.js\"></script>
    <script src=\"/front/js/bootstrap.min.js\"></script>
    <script src=\"/front/js/owl.carousel.min.js\"></script>
    <script src=\"/front/js/jquery.sticky.js\"></script>
    <script src=\"/front/js/jquery.waypoints.min.js\"></script>
    <script src=\"/front/js/jquery.animateNumber.min.js\"></script>
    <script src=\"/front/js/jquery.fancybox.min.js\"></script>
    <script src=\"/front/js/jquery.stellar.min.js\"></script>
    <script src=\"/front/js/jquery.easing.1.3.js\"></script>
    <script src=\"/front/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"/front/js/isotope.pkgd.min.js\"></script>
    <script src=\"/front/js/aos.js\"></script>

    <script src=\"/front/js/main.js\"></script>

    ";
        // line 178
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "  </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 179,  341 => 178,  331 => 159,  321 => 158,  310 => 35,  300 => 34,  287 => 181,  285 => 178,  265 => 160,  263 => 158,  215 => 112,  207 => 108,  205 => 107,  198 => 103,  191 => 98,  188 => 97,  182 => 95,  176 => 93,  174 => 92,  171 => 91,  169 => 90,  166 => 89,  163 => 88,  157 => 86,  151 => 84,  149 => 83,  146 => 82,  144 => 81,  140 => 79,  134 => 78,  128 => 76,  126 => 75,  86 => 37,  84 => 34,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset=\"utf-8\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"/front/fonts/icomoon/style.css\">

    <link rel=\"stylesheet\" href=\"/front/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"/front/css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"/front/fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/front/css/aos.css\">

    <!-- MAIN CSS -->
    <link rel=\"stylesheet\" href=\"/front/css/style.css\">
    <style>
      .fullWidthForm form {
        width: 100%;
      }
      .fullWidthForm {
        padding: 5%;
      }
    </style>
    {% block stylesheets %}

    {% endblock %}
  </head>

  <body data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">

    <div class=\"site-wrap\" id=\"home-section\">

      <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
          <div class=\"site-mobile-menu-close mt-3\">
            <span class=\"icon-close2 js-menu-toggle\"></span>
          </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
      </div>

      <header class=\"site-navbar site-navbar-target\" role=\"banner\">

        <div class=\"container\">
          <div class=\"row align-items-center position-relative\">

            <div class=\"col-3 \">
              <div class=\"site-logo\">
                <a href=\"index.html\" class=\"font-weight-bold\">
                  <img src=\"/front/images/logo.png\" alt=\"Image\" class=\"img-fluid\">
                </a>
              </div>
            </div>

            <div class=\"col-9  text-right\">
             

              <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\"text-white site-menu-toggle js-menu-toggle py-5 text-white\"><span class=\"icon-menu h3 text-white\"></span></a></span>

             

              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">
                <ul class=\"site-menu main-menu js-clone-nav ml-auto \">
                  <!-- home page path  -->
                  {% if \"home\" in app.request.get('_route') %}
                    <li class=\"active\"><a href=\"{{ path('app_stay_index') }}\" class=\"nav-link\">Home</a></li> 
                  {% else %}
                    <li><a href=\"{{ path('app_stay_index') }}\" class=\"nav-link\">Home</a></li> 
                  {% endif %}  
                  
                  {% if is_granted('ROLE_HOST') %}
                    <!-- new stay path  -->
                    {% if \"app_stay\" in app.request.get('_route') %}
                      <li class=\"active\"><a href=\"{{ path('app_stay_index') }}\" class=\"nav-link\">My Stay</a></li>
                    {% else %}
                      <li><a href=\"{{ path('app_stay_new') }}\" class=\"nav-link\">My Stay</a></li>
                    {% endif %}
                  {% endif %}

                  {% if is_granted('ROLE_GUEST') %}
                    <!-- booking path -->
                    {% if \"Booking\" in app.request.get('_route') %}
                      <li class=\"active\"><a href=\"{{ path('MyBookings') }}\" class=\"nav-link\">My Bookings</a></li>
                    {% else %}
                      <li><a href=\"{{ path('MyBookings') }}\" class=\"nav-link\">My Bookings</a></li>
                    {% endif %}
                  {% endif %}
                  
                  <li ><a href=\"index.html\" class=\"nav-link\">Rankings</a></li>
                  <li ><a href=\"index.html\" class=\"nav-link\">Feedbacks</a></li>

                  <li><a href=\"about.html\" class=\"nav-link\">About</a></li>
                  <li><a href=\"{{ path('account_index') }}\" class=\"nav-link\">My Profile</a></li>
                  <li><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                  <li><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>

                  {% if app.user %}
                    <li title=\"logout\"><a href=\"{{ path('app_logout') }}\">
                     <img src=\"/icons/logout.svg\"> </a> 
                    </li>
                  {% endif %}
                </ul>
              </nav>
            </div>

           
          </div>
        </div>

      </header>

<div class=\"ftco-blocks-cover-1\">
      <div class=\"site-section-cover overlay\" style=\"background-image: url('/front/images/hero_1.jpg')\">
       
       
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-5\" data-aos=\"fade-right\">
              <h1 class=\"mb-3 text-white\">Let's Enjoy The Wonders of Nature</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p class=\"d-flex align-items-center\">
                <a href=\"https://vimeo.com/191947042\" data-fancybox class=\"play-btn-39282 mr-3\"><span class=\"icon-play\"></span></a>
                <span class=\"small\">Watch the video</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"site-section\" style=\"max-height:10px;\">

      <div class=\"container\">
        <div class=\"row justify-content-center text-center\">
          <div class=\"col-md-7\" >
            <div class=\"heading-39101 mb-5\">
              <span class=\"backdrop text-center\">Journey</span>
              <span class=\"subtitle-39191\">Journey</span>
              <h3>Your Journey Starts Here</h3>
            </div>
          </div>
        </div>
       

      </div>
    </div>
    </div>
    {% block body %}
    {% endblock %}

    <script src=\"/front/js/jquery-3.3.1.min.js\"></script>
    <script src=\"/front/js/jquery-migrate-3.0.0.js\"></script>
    <script src=\"/front/js/popper.min.js\"></script>
    <script src=\"/front/js/bootstrap.min.js\"></script>
    <script src=\"/front/js/owl.carousel.min.js\"></script>
    <script src=\"/front/js/jquery.sticky.js\"></script>
    <script src=\"/front/js/jquery.waypoints.min.js\"></script>
    <script src=\"/front/js/jquery.animateNumber.min.js\"></script>
    <script src=\"/front/js/jquery.fancybox.min.js\"></script>
    <script src=\"/front/js/jquery.stellar.min.js\"></script>
    <script src=\"/front/js/jquery.easing.1.3.js\"></script>
    <script src=\"/front/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"/front/js/isotope.pkgd.min.js\"></script>
    <script src=\"/front/js/aos.js\"></script>

    <script src=\"/front/js/main.js\"></script>

    {% block javascripts %}

    {% endblock %}
  </body>

</html>
", "base.html.twig", "/var/www/jihene/web-sprint/templates/base.html.twig");
    }
}
