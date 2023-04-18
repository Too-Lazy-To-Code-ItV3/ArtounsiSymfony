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

/* base.html copy.twig */
class __TwigTemplate_bccc352543a6d6f734fb0ade31061a87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html copy.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html copy.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-liberty-market.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
    <link rel=\"stylesheet\"href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
    <!--

    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
</head>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 294
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "<body>
<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"index.html\" class=\"active\">Home</a></li>
                        <li><a href=\"explore.html\">Explore</a></li>
                        <li><a href=\"details.html\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"create.html\">Create Yours</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
   
</div>
<!-- ***** Main Banner Area End ***** -->

<div class=\"categories-collections\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
               
            </div>
            <div class=\"col-lg-12\">
               
            </div>
        </div>
    </div>

<div class=\"currently-market\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2><em>Items</em> Currently In The Market.</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"filters\">
                    <ul>
                        <li data-filter=\"*\"  class=\"active\">All Items</li>
                        <li data-filter=\".msc\">Music Art</li>
                        <li data-filter=\".dig\">Digital Art</li>
                        <li data-filter=\".blc\">Blockchain</li>
                        <li data-filter=\".vtr\">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div class=\"col-lg-6 currently-market-item all msc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Music Art Super Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$8,240.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Crypto Artwork</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$7,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Item One</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>(\$6,600.00)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vtr\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Virtual Currency Art</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,800.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vrt dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Art Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>(\$8,400.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all msc blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Music Design</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"assets/js/isotope.min.js\"></script>
<script src=\"assets/js/owl-carousel.js\"></script>

<script src=\"assets/js/tabs.js\"></script>
<script src=\"assets/js/popup.js\"></script>
<script src=\"assets/js/custom.js\"></script>

</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html copy.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  89 => 32,  79 => 294,  77 => 32,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-liberty-market.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
    <link rel=\"stylesheet\"href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
    <!--

    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
</head>
{% block body %}
<body>
<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"index.html\" class=\"active\">Home</a></li>
                        <li><a href=\"explore.html\">Explore</a></li>
                        <li><a href=\"details.html\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"create.html\">Create Yours</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
   
</div>
<!-- ***** Main Banner Area End ***** -->

<div class=\"categories-collections\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
               
            </div>
            <div class=\"col-lg-12\">
               
            </div>
        </div>
    </div>

<div class=\"currently-market\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2><em>Items</em> Currently In The Market.</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"filters\">
                    <ul>
                        <li data-filter=\"*\"  class=\"active\">All Items</li>
                        <li data-filter=\".msc\">Music Art</li>
                        <li data-filter=\".dig\">Digital Art</li>
                        <li data-filter=\".blc\">Blockchain</li>
                        <li data-filter=\".vtr\">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div class=\"col-lg-6 currently-market-item all msc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Music Art Super Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$8,240.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Crypto Artwork</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$7,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Item One</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>(\$6,600.00)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vtr\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Virtual Currency Art</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,800.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vrt dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Art Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>(\$8,400.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all msc blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Music Design</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"assets/js/isotope.min.js\"></script>
<script src=\"assets/js/owl-carousel.js\"></script>

<script src=\"assets/js/tabs.js\"></script>
<script src=\"assets/js/popup.js\"></script>
<script src=\"assets/js/custom.js\"></script>

</body>
{% endblock %}
</html>", "base.html copy.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\base.html copy.twig");
    }
}
