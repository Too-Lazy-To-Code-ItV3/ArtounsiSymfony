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

/* produits_back/edit.html.twig */
class __TwigTemplate_23c6bfd39d77a5477c4aa635af0866e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


    <style>
        .error-message {
            color: red;

        }

    </style>

</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"assets/img/logo.png\" alt=\"\">
            <span class=\"d-none d-lg-block\">NiceAdmin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>mes offres</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>gros mots</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Mes demandes</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 338
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 345
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 351
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 363, $this->source); })()), "id_user", [], "any", false, false, false, 363)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>

    </ul>
</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Form Layouts</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Forms</li>
                <li class=\"breadcrumb-item active\">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Horizontal Form</h5>
                        ";
        // line 391
        $context["nomField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "nom", [], "any", false, false, false, 391);
        // line 392
        echo "                        ";
        $context["descriptionField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "description", [], "any", false, false, false, 392);
        // line 393
        echo "                        ";
        $context["prixField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "prix", [], "any", false, false, false, 393);
        // line 394
        echo "                        ";
        $context["idcategorieField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "idcategorie", [], "any", false, false, false, 394);
        // line 395
        echo "                        ";
        $context["imageField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "image", [], "any", false, false, false, 395);
        // line 396
        echo "                        <!-- Horizontal Form -->
                        ";
        // line 397
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 401, $this->source); })()), 'label', ["label" => "Nom du produit"]);
        echo "
                                ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 402, $this->source); })()), 'widget', ["attr" => ["placeholder" => "Entrer le nom du produit ici", "autocomplete" => "on"]]);
        echo "

                                <div class=\"error-message\">   ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 404, $this->source); })()), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 410, $this->source); })()), 'label', ["label" => "Description du produit"]);
        echo "
                                ";
        // line 411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 411, $this->source); })()), 'widget', ["attr" => ["placeholder" => "décrir le produit ici", "autocomplete" => "on"]]);
        echo "

                                <div class=\"error-message\">";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 413, $this->source); })()), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 419, $this->source); })()), 'label', ["label" => "Prix du produit"]);
        echo "
                                ";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 420, $this->source); })()), 'widget', ["attr" => ["placeholder" => "Entrer le prix du produit ici", "autocomplete" => "on"]]);
        echo "

                                <div class=\"error-message\"> ";
        // line 422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 422, $this->source); })()), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Image</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 428
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 428, $this->source); })()), "image", [], "any", false, false, false, 428))) {
            // line 429
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 429, $this->source); })()), "image", [], "any", false, false, false, 429))), "html", null, true);
            echo "\"
                                         alt=\"";
            // line 430
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 430, $this->source); })()), "nom", [], "any", false, false, false, 430), "html", null, true);
            echo "\" style=\"border-radius: 20px; min-width: 195px;\">
                                    <br><br>
                                    <input type=\"hidden\" id=\"imageField\" name=\"imageField\" value=\"";
            // line 432
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 432, $this->source); })()), "image", [], "any", false, false, false, 432), "html", null, true);
            echo "\">
                                ";
        }
        // line 434
        echo "
                                ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageField"]) || array_key_exists("imageField", $context) ? $context["imageField"] : (function () { throw new RuntimeError('Variable "imageField" does not exist.', 435, $this->source); })()), 'widget', ["attr" => ["type" => "file"]]);
        echo "
                                ";
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageField"]) || array_key_exists("imageField", $context) ? $context["imageField"] : (function () { throw new RuntimeError('Variable "imageField" does not exist.', 436, $this->source); })()), 'errors');
        echo "
                            </div>
                        </div>
                        <fieldset class=\"row mb-3\">
                            <div class=\"col-md-4\">
                                ";
        // line 441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 441, $this->source); })()), 'label', ["label" => "Catégorie du produit"]);
        echo "
                                ";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 442, $this->source); })()), 'widget', ["attr" => ["class" => "main-button", "autocomplete" => "on"]]);
        echo "
                                ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 443, $this->source); })()), 'errors');
        echo "
                            </div>
                        </fieldset>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                            <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                        </div>
                        ";
        // line 451
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), 'form_end');
        echo "


                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>


<!-- Template Main JS File -->
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main2.js"), "html", null, true);
        echo "\"></script>


<svg id=\"SvgjsSvg1001\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
     style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\">
    <defs id=\"SvgjsDefs1002\"></defs>
    <polyline id=\"SvgjsPolyline1003\" points=\"0,0\"></polyline>
    <path id=\"SvgjsPath1004\" d=\"M0 0 \"></path>
</svg>
</body>


</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produits_back/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 491,  696 => 487,  692 => 486,  688 => 485,  684 => 484,  680 => 483,  676 => 482,  672 => 481,  668 => 480,  636 => 451,  625 => 443,  621 => 442,  617 => 441,  609 => 436,  605 => 435,  602 => 434,  597 => 432,  592 => 430,  587 => 429,  585 => 428,  576 => 422,  571 => 420,  567 => 419,  558 => 413,  553 => 411,  549 => 410,  540 => 404,  535 => 402,  531 => 401,  524 => 397,  521 => 396,  518 => 395,  515 => 394,  512 => 393,  509 => 392,  507 => 391,  476 => 363,  467 => 357,  458 => 351,  449 => 345,  439 => 338,  430 => 332,  421 => 326,  412 => 320,  403 => 314,  393 => 307,  382 => 299,  371 => 291,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets2/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets2/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"{{ asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"{{ asset('assets2/css/style.css') }}\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


    <style>
        .error-message {
            color: red;

        }

    </style>

</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"assets/img/logo.png\" alt=\"\">
            <span class=\"d-none d-lg-block\">NiceAdmin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>mes offres</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>gros mots</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Mes demandes</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back_new') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_dashboard_home_page') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_ban_index') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_edit',{'id_user': user.id_user}) }}\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>

    </ul>
</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Form Layouts</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Forms</li>
                <li class=\"breadcrumb-item active\">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Horizontal Form</h5>
                        {% set nomField = form.nom %}
                        {% set descriptionField = form.description %}
                        {% set prixField =form.prix %}
                        {% set idcategorieField = form.idcategorie %}
                        {% set imageField = form.image %}
                        <!-- Horizontal Form -->
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                {{ form_label(nomField, 'Nom du produit') }}
                                {{ form_widget(nomField, {'attr': {'placeholder': 'Entrer le nom du produit ici', 'autocomplete': 'on'}}) }}

                                <div class=\"error-message\">   {{ form_errors(nomField) }}</div>
                            </div>
                        </div>
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                {{ form_label(descriptionField, 'Description du produit') }}
                                {{ form_widget(descriptionField, {'attr': {'placeholder': 'décrir le produit ici', 'autocomplete': 'on'}}) }}

                                <div class=\"error-message\">{{ form_errors(descriptionField) }}</div>
                            </div>
                        </div>
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                {{ form_label(prixField, 'Prix du produit') }}
                                {{ form_widget(prixField, {'attr': {'placeholder': 'Entrer le prix du produit ici', 'autocomplete': 'on'}}) }}

                                <div class=\"error-message\"> {{ form_errors(prixField) }}</div>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Image</label>
                            <div class=\"col-sm-10\">
                                {% if produit.image is not null %}
                                    <img src=\"{{ asset('uploads/images/'  ~ produit.image) }}\"
                                         alt=\"{{ produit.nom }}\" style=\"border-radius: 20px; min-width: 195px;\">
                                    <br><br>
                                    <input type=\"hidden\" id=\"imageField\" name=\"imageField\" value=\"{{ produit.image }}\">
                                {% endif %}

                                {{ form_widget(imageField, {'attr': {'type': 'file'}}) }}
                                {{ form_errors(imageField) }}
                            </div>
                        </div>
                        <fieldset class=\"row mb-3\">
                            <div class=\"col-md-4\">
                                {{ form_label(idcategorieField, 'Catégorie du produit') }}
                                {{ form_widget(idcategorieField, {'attr': {'class': 'main-button', 'autocomplete': 'on'}}) }}
                                {{ form_errors(idcategorieField) }}
                            </div>
                        </fieldset>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                            <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                        </div>
                        {{ form_end(form) }}


                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{ asset('vendor2/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{ asset('vendor2/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/quill/quill.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{ asset('vendor2/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/php-email-form/validate.js') }}\"></script>


<!-- Template Main JS File -->
<script src=\"{{ asset('assets2/js/main2.js') }}\"></script>


<svg id=\"SvgjsSvg1001\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
     style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\">
    <defs id=\"SvgjsDefs1002\"></defs>
    <polyline id=\"SvgjsPolyline1003\" points=\"0,0\"></polyline>
    <path id=\"SvgjsPath1004\" d=\"M0 0 \"></path>
</svg>
</body>


</html>", "produits_back/edit.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits_back\\edit.html.twig");
    }
}
