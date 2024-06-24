<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_3cc9ee25730f8acd5b1c7acbd928767b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
      
        <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        yield "\">
    </head>
    <body>
\t<div class=\"super_container\">
    <header class=\"header\">
\t\t\t
\t\t<!-- Top Bar -->
\t\t<div class=\"top_bar\">
\t\t\t<div class=\"top_bar_container\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"top_bar_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t<div class=\"top_bar_phone\"><span class=\"top_bar_title\">phone:</span>06 16 nmrti makat3tach</div>
\t\t\t\t\t\t\t\t<div class=\"top_bar_right ml-auto\">

\t\t\t\t\t\t\t\t\t<!-- Language -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Social -->
\t\t\t\t\t\t\t\t\t<div class=\"top_bar_social\">
\t\t\t\t\t\t\t\t\t\t<span class=\"top_bar_title social_title\">follow us</span>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t</div>

\t\t<!-- Header Content -->
\t\t<div class=\"header_container\"> \t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"logo_container mr-auto\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
\t\t\t\t\t\t\t\t\t<div class=\"logo_text\"><img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ens logo .png"), "html", null, true);
        yield "\"width=\"150px\" alt=\"\"></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav class=\"main_nav_contaner\">
\t\t\t\t\t\t\t\t<ul class=\"main_nav\">
\t\t\t\t\t\t\t\t\t<li id=\"Home-display\"><a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li id=\"Instructors-display\"><a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignants");
        yield "\">Instructors</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li id=\"Blog-display\"><a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">Blog</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"Contact-display\"><a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"Contact-display\"><a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departements");
        yield "\">Département</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"Contact-display\"><a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">
\t\t\t\t\t\t\t\t\t<div class=\"top_bar_lang\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"lang_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"hassubs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Espace<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\">Admin</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_search");
        yield "\">Etudiants</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"header_content_right ml-auto text-right\">
\t\t\t\t\t\t\t\t<div class=\"header_search\">
\t\t\t\t\t\t\t\t\t<div class=\"search_form_container\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" id=\"search_form\" class=\"search_form trans_400\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"header_search_input trans_400\" placeholder=\"Type for Search\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"search_button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Hamburger -->

\t\t\t\t\t\t\t\t<div class=\"user\"><a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"hamburger menu_mm\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars menu_mm\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--Menu Content -->
        \t<div class=\"menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400\">
\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"><div></div><div></div></div></div>
\t\t<div class=\"search\">
\t\t\t<form action=\"#\" class=\"header_search_form menu_mm\">
\t\t\t\t<input type=\"search\" class=\"search_input menu_mm\" placeholder=\"Search\" required=\"required\">
\t\t\t\t<button class=\"header_search_button d-flex flex-column align-items-center justify-content-center menu_mm\">
\t\t\t\t\t<i class=\"fa fa-search menu_mm\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<nav class=\"menu_nav\">
\t\t\t<ul class=\"menu_mm\">
\t\t\t\t<li class=\"menu_mm\"><a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\">Login</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"index.html\">Home</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"courses.html\">Courses</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"instructors.html\">Instructors</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"#\">Events</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"blog.html\">Blog</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"contact.html\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<div class=\"menu_extra\">
\t\t\t<div class=\"menu_phone\"><span class=\"menu_title\">phone:</span>+44 300 303 0266</div>
\t\t\t<div class=\"menu_social\">
\t\t\t\t<span class=\"menu_title\">follow us</span>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t</header>
        ";
        // line 147
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 156
        yield "\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "attributes", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156) != "app_login")) {
            // line 157
            yield "        \t<footer class=\"footer\">
\t\t<div class=\"footer_body\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t<div class=\"col-lg-3 footer_col\">
\t\t\t\t\t\t<div class=\"newsletter_container d-flex flex-column align-items-start justify-content-end\">
\t\t\t\t\t\t\t<div class=\"footer_logo mb-auto\"><a href=\"#\">Ens Tétouan</a></div>
\t\t\t\t\t\t\t<div class=\"footer_title\">Subscribe</div>
\t\t\t\t\t\t\t<form action=\"#\" id=\"newsletter_form\" class=\"newsletter_form\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"newsletter_input\" placeholder=\"Email\" required=\"required\">
\t\t\t\t\t\t\t\t<button class=\"newsletter_button\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- About -->
\t\t\t\t\t<div class=\"col-lg-2 offset-lg-3 footer_col\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"footer_title\">About Us</div>
\t\t\t\t\t\t\t<ul class=\"footer_list\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Courses</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Brand Guidelines</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Jobs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Advertise with us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Press</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Help & Support -->
\t\t\t\t\t<div class=\"col-lg-2 footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">Help & Support</div>
\t\t\t\t\t\t<ul class=\"footer_list\">
\t\t\t\t\t\t\t<li><a href=\"#\">Discussions</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Troubleshooting</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Duolingo FAQs</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Schools FAQs</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Duolingo English Test FAQs</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Status</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Privacy -->
\t\t\t\t\t<div class=\"col-lg-2 footer_col clearfix\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"footer_title\">Privacy & Terms</div>
\t\t\t\t\t\t\t<ul class=\"footer_list\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Community Guidelines</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Brand Guidelines</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start\">
\t\t\t\t\t\t\t<div class=\"cr\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> \t
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t\t\t<div class=\"cr_right ml-md-auto\">
\t\t\t\t\t\t\t\t<div class=\"footer_phone\"><span class=\"cr_title\">phone:</span>+44 300 303 0266</div>
\t\t\t\t\t\t\t\t<div class=\"footer_social\">
\t\t\t\t\t\t\t\t\t<span class=\"cr_social_title\">follow us</span>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t       ";
        }
        // line 245
        yield "\t<div>
    </body>

        <script src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/blog.js"), "html", null, true);
        yield "\"></script>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 147
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 148
        yield "
\t


\t


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  422 => 148,  412 => 147,  392 => 5,  378 => 254,  374 => 253,  370 => 252,  366 => 251,  362 => 250,  358 => 249,  354 => 248,  349 => 245,  259 => 157,  256 => 156,  254 => 147,  229 => 125,  202 => 101,  173 => 75,  169 => 74,  160 => 68,  156 => 67,  152 => 66,  148 => 65,  143 => 63,  138 => 61,  130 => 56,  126 => 55,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
      
        <link href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
    </head>
    <body>
\t<div class=\"super_container\">
    <header class=\"header\">
\t\t\t
\t\t<!-- Top Bar -->
\t\t<div class=\"top_bar\">
\t\t\t<div class=\"top_bar_container\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"top_bar_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t<div class=\"top_bar_phone\"><span class=\"top_bar_title\">phone:</span>06 16 nmrti makat3tach</div>
\t\t\t\t\t\t\t\t<div class=\"top_bar_right ml-auto\">

\t\t\t\t\t\t\t\t\t<!-- Language -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Social -->
\t\t\t\t\t\t\t\t\t<div class=\"top_bar_social\">
\t\t\t\t\t\t\t\t\t\t<span class=\"top_bar_title social_title\">follow us</span>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t</div>

\t\t<!-- Header Content -->
\t\t<div class=\"header_container\"> \t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"logo_container mr-auto\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"logo_text\"><img src=\"{{asset('images/ens logo .png')}}\"width=\"150px\" alt=\"\"></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav class=\"main_nav_contaner\">
\t\t\t\t\t\t\t\t<ul class=\"main_nav\">
\t\t\t\t\t\t\t\t\t<li id=\"Home-display\"><a href=\"{{ path('app_home') }}\">Home</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li id=\"Instructors-display\"><a href=\"{{ path('app_enseignants') }}\">Instructors</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li id=\"Blog-display\"><a href=\"{{ path('app_blog') }}\">Blog</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"Contact-display\"><a href=\"{{ path('app_contact') }}\">Contact</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"Contact-display\"><a href=\"{{ path('app_departements') }}\">Département</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"Contact-display\"><a href=\"{{ path('app_blog') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"top_bar_lang\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"lang_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"hassubs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Espace<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('admin')}}\">Admin</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('etudiant_search')}}\">Etudiants</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"header_content_right ml-auto text-right\">
\t\t\t\t\t\t\t\t<div class=\"header_search\">
\t\t\t\t\t\t\t\t\t<div class=\"search_form_container\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" id=\"search_form\" class=\"search_form trans_400\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"header_search_input trans_400\" placeholder=\"Type for Search\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"search_button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Hamburger -->

\t\t\t\t\t\t\t\t<div class=\"user\"><a href=\"{{path('admin')}}\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"hamburger menu_mm\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars menu_mm\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--Menu Content -->
        \t<div class=\"menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400\">
\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"><div></div><div></div></div></div>
\t\t<div class=\"search\">
\t\t\t<form action=\"#\" class=\"header_search_form menu_mm\">
\t\t\t\t<input type=\"search\" class=\"search_input menu_mm\" placeholder=\"Search\" required=\"required\">
\t\t\t\t<button class=\"header_search_button d-flex flex-column align-items-center justify-content-center menu_mm\">
\t\t\t\t\t<i class=\"fa fa-search menu_mm\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<nav class=\"menu_nav\">
\t\t\t<ul class=\"menu_mm\">
\t\t\t\t<li class=\"menu_mm\"><a href=\"{{path('admin')}}\">Login</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"index.html\">Home</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"courses.html\">Courses</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"instructors.html\">Instructors</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"#\">Events</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"blog.html\">Blog</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"contact.html\">Contact</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<div class=\"menu_extra\">
\t\t\t<div class=\"menu_phone\"><span class=\"menu_title\">phone:</span>+44 300 303 0266</div>
\t\t\t<div class=\"menu_social\">
\t\t\t\t<span class=\"menu_title\">follow us</span>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t</header>
        {% block body %}

\t


\t


        {% endblock %}
\t\t{% if app.request.attributes.get('_route') != 'app_login' %}
        \t<footer class=\"footer\">
\t\t<div class=\"footer_body\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t<div class=\"col-lg-3 footer_col\">
\t\t\t\t\t\t<div class=\"newsletter_container d-flex flex-column align-items-start justify-content-end\">
\t\t\t\t\t\t\t<div class=\"footer_logo mb-auto\"><a href=\"#\">Ens Tétouan</a></div>
\t\t\t\t\t\t\t<div class=\"footer_title\">Subscribe</div>
\t\t\t\t\t\t\t<form action=\"#\" id=\"newsletter_form\" class=\"newsletter_form\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"newsletter_input\" placeholder=\"Email\" required=\"required\">
\t\t\t\t\t\t\t\t<button class=\"newsletter_button\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- About -->
\t\t\t\t\t<div class=\"col-lg-2 offset-lg-3 footer_col\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"footer_title\">About Us</div>
\t\t\t\t\t\t\t<ul class=\"footer_list\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Courses</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Brand Guidelines</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Jobs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Advertise with us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Press</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Help & Support -->
\t\t\t\t\t<div class=\"col-lg-2 footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">Help & Support</div>
\t\t\t\t\t\t<ul class=\"footer_list\">
\t\t\t\t\t\t\t<li><a href=\"#\">Discussions</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Troubleshooting</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Duolingo FAQs</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Schools FAQs</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Duolingo English Test FAQs</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Status</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Privacy -->
\t\t\t\t\t<div class=\"col-lg-2 footer_col clearfix\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"footer_title\">Privacy & Terms</div>
\t\t\t\t\t\t\t<ul class=\"footer_list\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Community Guidelines</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Brand Guidelines</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start\">
\t\t\t\t\t\t\t<div class=\"cr\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> \t
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t\t\t<div class=\"cr_right ml-md-auto\">
\t\t\t\t\t\t\t\t<div class=\"footer_phone\"><span class=\"cr_title\">phone:</span>+44 300 303 0266</div>
\t\t\t\t\t\t\t\t<div class=\"footer_social\">
\t\t\t\t\t\t\t\t\t<span class=\"cr_social_title\">follow us</span>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t       {% endif %}
\t<div>
    </body>

        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
        <script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
        <script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
        <script src=\"{{ asset('plugins/parallax-js-master/parallax.min.js') }}\"></script>
        <script src=\"{{ asset('js/blog.js') }}\"></script>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\base.html.twig");
    }
}
