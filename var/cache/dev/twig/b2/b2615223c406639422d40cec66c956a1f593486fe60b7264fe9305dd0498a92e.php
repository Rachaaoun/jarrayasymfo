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

/* baseAdmin.html.twig */
class __TwigTemplate_3b5e8af6637774cbb878cd82251a6fff92fca35c65e1711e3a0a629b83aaa99f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"/back/vendors/feather/feather.css\">
  <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"/back/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
  <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/back/js/select.dataTables.min.css\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"/back/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/back/images/favicon.png\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">

  ";
        // line 25
        $this->displayBlock('styles', $context, $blocks);
        // line 28
        echo "</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\"><img src=\"/back/images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"/back/images/logo-mini.svg\" alt=\"logo\"/></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
          <span class=\"icon-menu\"></span>
        </button>
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-search d-none d-lg-block\">
            <div class=\"input-group\">
              <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
              </div>
              <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"ti-info-alt mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"ti-settings mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"ti-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile");
        echo "\">
                <i class=\"ti-settings text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"ti-power-off text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-settings d-none d-lg-flex\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon-ellipsis\"></i>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "    <!-- plugins:js -->
  <script src=\"/back/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"/back/vendors/chart.js/Chart.min.js\"></script>
  <script src=\"/back/vendors/datatables.net/jquery.dataTables.js\"></script>
  <script src=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
  <script src=\"/back/js/dataTables.select.min.js\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"/back/js/off-canvas.js\"></script>
  <script src=\"/back/js/hoverable-collapse.js\"></script>
  <script src=\"/back/js/template.js\"></script>
  <script src=\"/back/js/settings.js\"></script>
  <script src=\"/back/js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"/back/js/dashboard.js\"></script>
  <script src=\"/back/js/Chart.roundedBarCharts.js\"></script>
  <!-- End custom js for this page-->
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js\"> </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  ";
        // line 155
        $this->displayBlock('js', $context, $blocks);
        // line 157
        echo "  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 26
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 130
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 156
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 156,  267 => 155,  257 => 130,  247 => 129,  236 => 26,  226 => 25,  213 => 157,  211 => 155,  185 => 131,  183 => 129,  162 => 111,  155 => 107,  74 => 28,  72 => 25,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"/back/vendors/feather/feather.css\">
  <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"/back/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
  <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/back/js/select.dataTables.min.css\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"/back/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/back/images/favicon.png\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">

  {% block styles %}

  {% endblock %}
</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\"><img src=\"/back/images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"/back/images/logo-mini.svg\" alt=\"logo\"/></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
          <span class=\"icon-menu\"></span>
        </button>
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-search d-none d-lg-block\">
            <div class=\"input-group\">
              <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
              </div>
              <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"ti-info-alt mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"ti-settings mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"ti-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\" href=\"{{ path('admin_profile') }}\">
                <i class=\"ti-settings text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                <i class=\"ti-power-off text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-settings d-none d-lg-flex\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon-ellipsis\"></i>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    {% block body %}
    {% endblock %}
    <!-- plugins:js -->
  <script src=\"/back/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"/back/vendors/chart.js/Chart.min.js\"></script>
  <script src=\"/back/vendors/datatables.net/jquery.dataTables.js\"></script>
  <script src=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
  <script src=\"/back/js/dataTables.select.min.js\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"/back/js/off-canvas.js\"></script>
  <script src=\"/back/js/hoverable-collapse.js\"></script>
  <script src=\"/back/js/template.js\"></script>
  <script src=\"/back/js/settings.js\"></script>
  <script src=\"/back/js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"/back/js/dashboard.js\"></script>
  <script src=\"/back/js/Chart.roundedBarCharts.js\"></script>
  <!-- End custom js for this page-->
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js\"> </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  {% block js %}

  {% endblock %}  
</body>

</html>", "baseAdmin.html.twig", "/var/www/jihene/web-sprint/templates/baseAdmin.html.twig");
    }
}
