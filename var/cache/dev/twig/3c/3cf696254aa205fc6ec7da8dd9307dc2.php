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

/* Contact/index.html.twig */
class __TwigTemplate_ec95dbba310ca83d97d32ce4bdfdf980 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Contact/index.html.twig", 1);
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

        // line 4
        yield "    Welcome!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/contact.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/contact_responsive.css"), "html", null, true);
        yield "\">

    <div class=\"super_container\">

\t<!-- Menu -->

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

\t<!-- Contact Map -->

\t<div class=\"contact_map\">

\t\t<!-- Google Map -->
\t\t
\t\t<div class=\"map\">
\t\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t\t<div class=\"map_container mb-5\"style=\"background-image: url('images/tetouanEns2.jpg');background-size: cover;\">
\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
\t
\t<!-- Contact -->

\t<div class=\"contact\">
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">

\t\t\t\t<!-- Details -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact_details\">
\t\t\t\t\t\t<div class=\"contact_details_title\">Contact Details</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z\"/>
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t    <path d=\"M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>9;00 AM - 18:00 PM</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t    <path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>+212 68795462</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/>
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>ensTetouan@gmail.com</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/>
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span><a href=\"https://maps.app.goo.gl/3FCKAFixanMrEoNH8\">localisation</a></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form -->
\t\t\t\t <div class=\"col-lg-6\">
               <div class=\"contact_form_container\">
    <div class=\"register_form_title\">Contacter nous pour avoir plus d'information :)</div>
    ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_start', ["attr" => ["id" => "register_form", "class" => "register_form"]]);
        yield "
    <div class=\"row register_row\">
        <div class=\"col-lg-6 register_col\">
        
            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Nom", "required" => "required"]]);
        yield "
        </div>
        <div class=\"col-lg-6 register_col\">
      
            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "phone", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Téléphone"]]);
        yield "
        </div>
        <div class=\"col-lg-12 register_col\">
         
            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Email", "required" => "required"]]);
        yield "
        </div>
        <div class=\"col-lg-12 register_col\">
            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "message", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Message", "style" => "height: 100px;"]]);
        yield "
        </div>
        <div class=\"col\">
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "createdAt", [], "any", false, false, false, 131), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
            <button type=\"submit\" class=\"form_button trans_200\">Envoyer le message maintenant !</button>
        </div>
    </div>
    ";
        // line 135
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        yield "

    ";
        // line 137
        $context["successMessages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "flashes", ["success"], "method", false, false, false, 137);
        // line 138
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["successMessages"]) || array_key_exists("successMessages", $context) ? $context["successMessages"] : (function () { throw new RuntimeError('Variable "successMessages" does not exist.', 138, $this->source); })()))) {
            // line 139
            yield "        <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
            ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["successMessages"]) || array_key_exists("successMessages", $context) ? $context["successMessages"] : (function () { throw new RuntimeError('Variable "successMessages" does not exist.', 140, $this->source); })()), 0, [], "array", false, false, false, 140), "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 144
        yield "</div>

            </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"https://maps.googleapis.com/maps/api/js?sensor=false&callback=myMap\" async defer></script
<script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        yield "\"></script>
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
        return "Contact/index.html.twig";
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
        return array (  274 => 152,  264 => 144,  257 => 140,  254 => 139,  251 => 138,  249 => 137,  244 => 135,  237 => 131,  231 => 128,  225 => 125,  218 => 121,  211 => 117,  204 => 113,  97 => 9,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Welcome!
{% endblock %}

{% block body %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/contact.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/contact_responsive.css') }}\">

    <div class=\"super_container\">

\t<!-- Menu -->

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

\t<!-- Contact Map -->

\t<div class=\"contact_map\">

\t\t<!-- Google Map -->
\t\t
\t\t<div class=\"map\">
\t\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t\t<div class=\"map_container mb-5\"style=\"background-image: url('images/tetouanEns2.jpg');background-size: cover;\">
\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
\t
\t<!-- Contact -->

\t<div class=\"contact\">
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">

\t\t\t\t<!-- Details -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact_details\">
\t\t\t\t\t\t<div class=\"contact_details_title\">Contact Details</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z\"/>
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t    <path d=\"M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>9;00 AM - 18:00 PM</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t    <path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>+212 68795462</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/>
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>ensTetouan@gmail.com</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<svg fill=\"rgba(0,0,0,0.4)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t    <path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/>
\t\t\t\t\t\t\t\t    <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span><a href=\"https://maps.app.goo.gl/3FCKAFixanMrEoNH8\">localisation</a></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form -->
\t\t\t\t <div class=\"col-lg-6\">
               <div class=\"contact_form_container\">
    <div class=\"register_form_title\">Contacter nous pour avoir plus d'information :)</div>
    {{ form_start(form, {'attr': {'id': 'register_form', 'class': 'register_form'}}) }}
    <div class=\"row register_row\">
        <div class=\"col-lg-6 register_col\">
        
            {{ form_widget(form.name, {'attr': {'class': 'form_input', 'placeholder': 'Nom', 'required': 'required'}}) }}
        </div>
        <div class=\"col-lg-6 register_col\">
      
            {{ form_widget(form.phone, {'attr': {'class': 'form_input', 'placeholder': 'Téléphone'}}) }}
        </div>
        <div class=\"col-lg-12 register_col\">
         
            {{ form_widget(form.email, {'attr': {'class': 'form_input', 'placeholder': 'Email', 'required': 'required'}}) }}
        </div>
        <div class=\"col-lg-12 register_col\">
            {{ form_widget(form.message, {'attr': {'class': 'form_input', 'placeholder': 'Message', 'style': 'height: 100px;'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.createdAt, {'attr': {'style': 'display:none;'}}) }}
            <button type=\"submit\" class=\"form_button trans_200\">Envoyer le message maintenant !</button>
        </div>
    </div>
    {{ form_end(form) }}

    {% set successMessages = app.flashes('success') %}
    {% if successMessages is not empty %}
        <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
            {{ successMessages[0] }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}
</div>

            </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"https://maps.googleapis.com/maps/api/js?sensor=false&callback=myMap\" async defer></script
<script src=\"{{ asset('js/contact.js') }}\"></script>
{% endblock %}
", "Contact/index.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\contact\\index.html.twig");
    }
}
