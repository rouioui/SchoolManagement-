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

/* home/index.html.twig */
class __TwigTemplate_9b4c4f32a02536603d06e2dc0de33190 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        yield "\">
<div class=\"home\">
        
\t\t<div class=\"home_background\" style=\"background-image: url(images/index_background.jpg);\"></div>
\t\t<div class=\"home_content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t<h1 class=\"home_title\">Learn Languages Easily</h1>
\t\t\t\t\t\t<div class=\"home_button trans_200\"><a href=\"#\">get started</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Language -->

\t<div class=\"language\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"language_slider_container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Language Slider -->

\t\t\t\t\t\t<div class=\"owl-carousel owl-theme language_slider\">

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Ukrainian.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Ukrainian</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Japanese.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Japanese</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Lithuanian.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Lithuanian</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Swedish.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Swedish</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/English.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">English</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Italian.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Italian</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Chinese.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Chinese</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/French.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">French</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/German.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">German</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lang_nav lang_prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"lang_nav lang_next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Courses -->

\t<div class=\"courses\">
\t\t<div class=\"courses_background\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">Popular Online Courses</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row courses_row\">

\t\t\t\t<!-- Course -->
\t\t\t\t<div class=\"col-lg-4 course_col\">
\t\t\t\t\t<div class=\"course\">
\t\t\t\t\t\t<div class=\"course_image\"><img src=\"images/course_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"course_body\">
\t\t\t\t\t\t\t<div class=\"course_title\"><a href=\"course.html\">Vocabulary</a></div>
\t\t\t\t\t\t\t<div class=\"course_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"instructors.html\">Sarah Parker</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">English</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"course_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>10</span></div>
\t\t\t\t\t\t\t<div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
\t\t\t\t\t\t\t<div class=\"course_mark course_free trans_200\"><a href=\"#\">Free</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Course -->
\t\t\t\t<div class=\"col-lg-4 course_col\">
\t\t\t\t\t<div class=\"course\">
\t\t\t\t\t\t<div class=\"course_image\"><img src=\"images/course_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"course_body\">
\t\t\t\t\t\t\t<div class=\"course_title\"><a href=\"course.html\">Vocabulary</a></div>
\t\t\t\t\t\t\t<div class=\"course_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"instructors.html\">Sarah Parker</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Spanish</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"course_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>10</span></div>
\t\t\t\t\t\t\t<div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
\t\t\t\t\t\t\t<div class=\"course_mark course_free trans_200\"><a href=\"#\">Free</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Course -->
\t\t\t\t<div class=\"col-lg-4 course_col\">
\t\t\t\t\t<div class=\"course\">
\t\t\t\t\t\t<div class=\"course_image\"><img src=\"images/course_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"course_body\">
\t\t\t\t\t\t\t<div class=\"course_title\"><a href=\"course.html\">Vocabulary</a></div>
\t\t\t\t\t\t\t<div class=\"course_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"instructors.html\">Sarah Parker</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">English</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"course_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>10</span></div>
\t\t\t\t\t\t\t<div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
\t\t\t\t\t\t\t<div class=\"course_mark trans_200\"><a href=\"#\">\$45</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Instructors -->

\t<div class=\"instructors\">
\t\t<div class=\"instructors_background\" style=\"background-image:url(images/instructors_background.png)\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">The Best Tutors in Town</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row instructors_row\">

\t\t\t\t<!-- Instructor -->
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"images/instructor_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"instructors.html\">Sarah Parker</a></div>
\t\t\t\t\t\t<div class=\"instructor_title\">Teacher</div>
\t\t\t\t\t\t<div class=\"instructor_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Instructor -->
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"images/instructor_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"instructors.html\">Sarah Parker</a></div>
\t\t\t\t\t\t<div class=\"instructor_title\">Teacher</div>
\t\t\t\t\t\t<div class=\"instructor_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Instructor -->
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"images/instructor_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"instructors.html\">Sarah Parker</a></div>
\t\t\t\t\t\t<div class=\"instructor_title\">Teacher</div>
\t\t\t\t\t\t<div class=\"instructor_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Register -->

\t<div class=\"register\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Register Form -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"register_form_container\">
\t\t\t\t\t\t<div class=\"register_form_title\">Courses For Free</div>
\t\t\t\t\t\t<form action=\"#\" id=\"register_form\" class=\"register_form\">
\t\t\t\t\t\t\t<div class=\"row register_row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form_input\" placeholder=\"Name\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form_input\" placeholder=\"Email\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form_input\" placeholder=\"Phone\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form_input\" placeholder=\"Site\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"form_button trans_200\">get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Register Timer -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"register_timer_container\">
\t\t\t\t\t\t<div class=\"register_timer_title\">Register Now</div>
\t\t\t\t\t\t<div class=\"register_timer_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timer_container\">
\t\t\t\t\t\t\t<ul class=\"timer_list\">
\t\t\t\t\t\t\t\t<li><div id=\"day\" class=\"timer_num\">00</div><div class=\"timer_ss\">days</div></li>
\t\t\t\t\t\t\t\t<li><div id=\"hour\" class=\"timer_num\">00</div><div class=\"timer_ss\">hours</div></li>
\t\t\t\t\t\t\t\t<li><div id=\"minute\" class=\"timer_num\">00</div><div class=\"timer_ss\">minutes</div></li>
\t\t\t\t\t\t\t\t<li><div id=\"second\" class=\"timer_num\">00</div><div class=\"timer_ss\">seconds</div></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Events -->

\t<div class=\"events\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">Upcoming Events</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row events_row\">
\t\t\t\t
\t\t\t\t<!-- Event -->
\t\t\t\t<div class=\"col-lg-4 event_col\">
\t\t\t\t\t<div class=\"event\">
\t\t\t\t\t\t<div class=\"event_image\"><img src=\"images/event_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"event_day\">26</div>
\t\t\t\t\t\t\t<div class=\"event_month\">aug</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"event_title\"><a href=\"#\">Networking Day</a></div>
\t\t\t\t\t\t\t<div class=\"event_tag ml-auto\">Free</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Event -->
\t\t\t\t<div class=\"col-lg-4 event_col\">
\t\t\t\t\t<div class=\"event\">
\t\t\t\t\t\t<div class=\"event_image\"><img src=\"images/event_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"event_day\">26</div>
\t\t\t\t\t\t\t<div class=\"event_month\">aug</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"event_title\"><a href=\"#\">Networking Day</a></div>
\t\t\t\t\t\t\t<div class=\"event_tag ml-auto\">Free</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Event -->
\t\t\t\t<div class=\"col-lg-4 event_col\">
\t\t\t\t\t<div class=\"event\">
\t\t\t\t\t\t<div class=\"event_image\"><img src=\"images/event_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"event_day\">26</div>
\t\t\t\t\t\t\t<div class=\"event_month\">aug</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"event_title\"><a href=\"#\">Networking Day</a></div>
\t\t\t\t\t\t\t<div class=\"event_tag ml-auto\">Free</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Blog -->

\t<div class=\"blog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">
\t\t\t\t
\t\t\t\t<!-- Blog Left -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_left\">
\t\t\t\t\t\t<div class=\"blog_title\">From Our Blog</div>
\t\t\t\t\t\t<div class=\"blog_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_categories\">
\t\t\t\t\t\t\t<div class=\"row categories_row\">

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">travel</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">languages</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">cultures</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">fashion</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_5.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">cooking</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">hobbies</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Right -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_right\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_7.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_right_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_right_title\"><a href=\"blog_single.html\">Design Better Forms</a></div>
\t\t\t\t\t\t\t<div class=\"blog_right_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
     \t<script>
\t\tdocument.getElementById('Home-display').className += 'active';
\t\t</script>

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
        return "home/index.html.twig";
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
        return array (  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
<div class=\"home\">
        
\t\t<div class=\"home_background\" style=\"background-image: url(images/index_background.jpg);\"></div>
\t\t<div class=\"home_content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t<h1 class=\"home_title\">Learn Languages Easily</h1>
\t\t\t\t\t\t<div class=\"home_button trans_200\"><a href=\"#\">get started</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Language -->

\t<div class=\"language\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"language_slider_container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Language Slider -->

\t\t\t\t\t\t<div class=\"owl-carousel owl-theme language_slider\">

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Ukrainian.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Ukrainian</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Japanese.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Japanese</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Lithuanian.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Lithuanian</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Swedish.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Swedish</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/English.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">English</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Italian.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Italian</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/Chinese.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">Chinese</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/French.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">French</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Flag -->
\t\t\t\t\t\t\t<div class=\"owl-item language_item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"flag\"><img src=\"images/German.svg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"lang_name\">German</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lang_nav lang_prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"lang_nav lang_next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Courses -->

\t<div class=\"courses\">
\t\t<div class=\"courses_background\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">Popular Online Courses</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row courses_row\">

\t\t\t\t<!-- Course -->
\t\t\t\t<div class=\"col-lg-4 course_col\">
\t\t\t\t\t<div class=\"course\">
\t\t\t\t\t\t<div class=\"course_image\"><img src=\"images/course_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"course_body\">
\t\t\t\t\t\t\t<div class=\"course_title\"><a href=\"course.html\">Vocabulary</a></div>
\t\t\t\t\t\t\t<div class=\"course_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"instructors.html\">Sarah Parker</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">English</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"course_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>10</span></div>
\t\t\t\t\t\t\t<div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
\t\t\t\t\t\t\t<div class=\"course_mark course_free trans_200\"><a href=\"#\">Free</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Course -->
\t\t\t\t<div class=\"col-lg-4 course_col\">
\t\t\t\t\t<div class=\"course\">
\t\t\t\t\t\t<div class=\"course_image\"><img src=\"images/course_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"course_body\">
\t\t\t\t\t\t\t<div class=\"course_title\"><a href=\"course.html\">Vocabulary</a></div>
\t\t\t\t\t\t\t<div class=\"course_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"instructors.html\">Sarah Parker</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Spanish</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"course_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>10</span></div>
\t\t\t\t\t\t\t<div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
\t\t\t\t\t\t\t<div class=\"course_mark course_free trans_200\"><a href=\"#\">Free</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Course -->
\t\t\t\t<div class=\"col-lg-4 course_col\">
\t\t\t\t\t<div class=\"course\">
\t\t\t\t\t\t<div class=\"course_image\"><img src=\"images/course_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"course_body\">
\t\t\t\t\t\t\t<div class=\"course_title\"><a href=\"course.html\">Vocabulary</a></div>
\t\t\t\t\t\t\t<div class=\"course_info\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"instructors.html\">Sarah Parker</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">English</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"course_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>10</span></div>
\t\t\t\t\t\t\t<div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
\t\t\t\t\t\t\t<div class=\"course_mark trans_200\"><a href=\"#\">\$45</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Instructors -->

\t<div class=\"instructors\">
\t\t<div class=\"instructors_background\" style=\"background-image:url(images/instructors_background.png)\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">The Best Tutors in Town</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row instructors_row\">

\t\t\t\t<!-- Instructor -->
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"images/instructor_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"instructors.html\">Sarah Parker</a></div>
\t\t\t\t\t\t<div class=\"instructor_title\">Teacher</div>
\t\t\t\t\t\t<div class=\"instructor_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Instructor -->
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"images/instructor_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"instructors.html\">Sarah Parker</a></div>
\t\t\t\t\t\t<div class=\"instructor_title\">Teacher</div>
\t\t\t\t\t\t<div class=\"instructor_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Instructor -->
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"images/instructor_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"instructors.html\">Sarah Parker</a></div>
\t\t\t\t\t\t<div class=\"instructor_title\">Teacher</div>
\t\t\t\t\t\t<div class=\"instructor_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Register -->

\t<div class=\"register\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Register Form -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"register_form_container\">
\t\t\t\t\t\t<div class=\"register_form_title\">Courses For Free</div>
\t\t\t\t\t\t<form action=\"#\" id=\"register_form\" class=\"register_form\">
\t\t\t\t\t\t\t<div class=\"row register_row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form_input\" placeholder=\"Name\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form_input\" placeholder=\"Email\" required=\"required\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form_input\" placeholder=\"Phone\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 register_col\">
\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form_input\" placeholder=\"Site\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"form_button trans_200\">get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Register Timer -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"register_timer_container\">
\t\t\t\t\t\t<div class=\"register_timer_title\">Register Now</div>
\t\t\t\t\t\t<div class=\"register_timer_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timer_container\">
\t\t\t\t\t\t\t<ul class=\"timer_list\">
\t\t\t\t\t\t\t\t<li><div id=\"day\" class=\"timer_num\">00</div><div class=\"timer_ss\">days</div></li>
\t\t\t\t\t\t\t\t<li><div id=\"hour\" class=\"timer_num\">00</div><div class=\"timer_ss\">hours</div></li>
\t\t\t\t\t\t\t\t<li><div id=\"minute\" class=\"timer_num\">00</div><div class=\"timer_ss\">minutes</div></li>
\t\t\t\t\t\t\t\t<li><div id=\"second\" class=\"timer_num\">00</div><div class=\"timer_ss\">seconds</div></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Events -->

\t<div class=\"events\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">Upcoming Events</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row events_row\">
\t\t\t\t
\t\t\t\t<!-- Event -->
\t\t\t\t<div class=\"col-lg-4 event_col\">
\t\t\t\t\t<div class=\"event\">
\t\t\t\t\t\t<div class=\"event_image\"><img src=\"images/event_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"event_day\">26</div>
\t\t\t\t\t\t\t<div class=\"event_month\">aug</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"event_title\"><a href=\"#\">Networking Day</a></div>
\t\t\t\t\t\t\t<div class=\"event_tag ml-auto\">Free</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Event -->
\t\t\t\t<div class=\"col-lg-4 event_col\">
\t\t\t\t\t<div class=\"event\">
\t\t\t\t\t\t<div class=\"event_image\"><img src=\"images/event_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"event_day\">26</div>
\t\t\t\t\t\t\t<div class=\"event_month\">aug</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"event_title\"><a href=\"#\">Networking Day</a></div>
\t\t\t\t\t\t\t<div class=\"event_tag ml-auto\">Free</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Event -->
\t\t\t\t<div class=\"col-lg-4 event_col\">
\t\t\t\t\t<div class=\"event\">
\t\t\t\t\t\t<div class=\"event_image\"><img src=\"images/event_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"event_day\">26</div>
\t\t\t\t\t\t\t<div class=\"event_month\">aug</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"event_title\"><a href=\"#\">Networking Day</a></div>
\t\t\t\t\t\t\t<div class=\"event_tag ml-auto\">Free</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Blog -->

\t<div class=\"blog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">
\t\t\t\t
\t\t\t\t<!-- Blog Left -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_left\">
\t\t\t\t\t\t<div class=\"blog_title\">From Our Blog</div>
\t\t\t\t\t\t<div class=\"blog_text\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_categories\">
\t\t\t\t\t\t\t<div class=\"row categories_row\">

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">travel</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">languages</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">cultures</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">fashion</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_5.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">cooking</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Category -->
\t\t\t\t\t\t\t\t<div class=\"col-md-4 blog_category_col\">
\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_category_title\">hobbies</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Right -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_right\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_7.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_right_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_right_title\"><a href=\"blog_single.html\">Design Better Forms</a></div>
\t\t\t\t\t\t\t<div class=\"blog_right_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
     \t<script>
\t\tdocument.getElementById('Home-display').className += 'active';
\t\t</script>

{% endblock %}

", "home/index.html.twig", "C:\\Users\\x\\Documents\\GitHub\\SchoolManagement-\\templates\\home\\index.html.twig");
    }
}
