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

/* enseignants/index.html.twig */
class __TwigTemplate_6fa0530bc14017b9fd7975ee64eac6aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignants/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignants/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enseignants/index.html.twig", 1);
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

        yield "Hello EnseignantsController!";
        
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
        yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\">
        <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/video-js/video-js.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/instructors.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/instructors_responsive.css"), "html", null, true);
        yield "\">


        <div class=\"super_container\">


\t

\t
\t

\t<div class=\"home\"></div>

\t<!-- Video -->

\t<div class=\"video\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 offset-lg-2\">
\t\t\t\t\t<div class=\"video_content\">
\t\t\t\t\t\t<div class=\"video_container_outer\">
\t\t\t\t\t\t\t<div class=\"video_overlay d-flex flex-column align-items-start justify-content-center \" style=\"opacity: 0.7;\">
\t\t\t\t\t\t\t\t<div>we have</div><div>The Best</div><div>Teacher</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video_container\">
\t\t\t\t\t\t\t\t<video id=\"vid1\" class=\"video-js vjs-default-skin\" controls width=\"100%\" height=\"100%\" data-setup='{ \"poster\": \"images/video.jpg\", \"techOrder\": [\"youtube\"], \"sources\": [{ \"type\": \"video/youtube\", \"src\": \"https://www.youtube.com/watch?v=j4dcUV8FTtE&ab_channel=LamalifGroup\"}], \"youtube\": { \"iv_load_policy\": 1 } }'>
\t\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"register_button\"><a href=\"#\">register</a></div>
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
\t\t\t\t ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new RuntimeError('Variable "teachers" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 63
            yield "          
     
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"upload/images/Enseignants/";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "Image", [], "any", false, false, false, 68), "html", null, true);
            yield "\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "nom", [], "any", false, false, false, 70), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "prenom", [], "any", false, false, false, 70), "html", null, true);
            yield "</a></div>
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
\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "
\t\t\t\t

\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Top Teachers -->

\t<div class=\"teachers\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">Top Teachers in Every Field</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row teachers_row\">

\t\t\t\t<!-- Instructor -->
                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allTeachers"]) || array_key_exists("allTeachers", $context) ? $context["allTeachers"] : (function () { throw new RuntimeError('Variable "allTeachers" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 106
            yield "\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"teacher d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"teacher_image\"><div><img src=\"upload/images/Enseignants/";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "Image", [], "any", false, false, false, 108), "html", null, true);
            yield "\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"teacher_content\">
\t\t\t\t\t\t\t<div class=\"teacher_name\"><a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "nom", [], "any", false, false, false, 110), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "prenom", [], "any", false, false, false, 110), "html", null, true);
            yield "</a></div>
\t\t\t\t\t\t\t  ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "cours", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                // line 112
                yield "            <div class=\"teacher_title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "nomCour", [], "any", false, false, false, 112), "html", null, true);
                yield "</div>    
\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "

\t\t\t
\t\t\t

\t\t\t
\t\t
\t\t\t\t
\t\t\t\t\t
\t\t


\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t
</div>

<script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/progressbar/progressbar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/video-js/video.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/video-js/Youtube.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/instructors.js"), "html", null, true);
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
        return "enseignants/index.html.twig";
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
        return array (  317 => 144,  313 => 143,  309 => 142,  305 => 141,  301 => 140,  278 => 119,  268 => 114,  259 => 112,  255 => 111,  247 => 110,  242 => 108,  238 => 106,  234 => 105,  212 => 85,  187 => 70,  182 => 68,  175 => 63,  171 => 62,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EnseignantsController!{% endblock %}

{% block body %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
        <link href=\"{{ asset('plugins/video-js/video-js.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/instructors.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/instructors_responsive.css') }}\">


        <div class=\"super_container\">


\t

\t
\t

\t<div class=\"home\"></div>

\t<!-- Video -->

\t<div class=\"video\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 offset-lg-2\">
\t\t\t\t\t<div class=\"video_content\">
\t\t\t\t\t\t<div class=\"video_container_outer\">
\t\t\t\t\t\t\t<div class=\"video_overlay d-flex flex-column align-items-start justify-content-center \" style=\"opacity: 0.7;\">
\t\t\t\t\t\t\t\t<div>we have</div><div>The Best</div><div>Teacher</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video_container\">
\t\t\t\t\t\t\t\t<video id=\"vid1\" class=\"video-js vjs-default-skin\" controls width=\"100%\" height=\"100%\" data-setup='{ \"poster\": \"images/video.jpg\", \"techOrder\": [\"youtube\"], \"sources\": [{ \"type\": \"video/youtube\", \"src\": \"https://www.youtube.com/watch?v=j4dcUV8FTtE&ab_channel=LamalifGroup\"}], \"youtube\": { \"iv_load_policy\": 1 } }'>
\t\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"register_button\"><a href=\"#\">register</a></div>
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
\t\t\t\t {% for teacher in teachers %}
          
     
\t\t\t\t<div class=\"col-lg-4 instructor_col\">
\t\t\t\t\t<div class=\"instructor text-center\">
\t\t\t\t\t\t<div class=\"instructor_image_container\">
\t\t\t\t\t\t\t<div class=\"instructor_image\"><img src=\"upload/images/Enseignants/{{teacher.Image}}\" alt=\"\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"instructor_name\"><a href=\"{{ path('app_enseignant', {'id': teacher.id}) }}\">{{ teacher.nom }} {{ teacher.prenom }}</a></div>
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
\t\t\t\t   {% endfor %}

\t\t\t\t

\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Top Teachers -->

\t<div class=\"teachers\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"section_title text-center\">Top Teachers in Every Field</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row teachers_row\">

\t\t\t\t<!-- Instructor -->
                {% for teacher in allTeachers %}
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"teacher d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"teacher_image\"><div><img src=\"upload/images/Enseignants/{{teacher.Image}}\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"teacher_content\">
\t\t\t\t\t\t\t<div class=\"teacher_name\"><a href=\"{{ path('app_enseignant', {'id': teacher.id}) }}\">{{ teacher.nom }} {{ teacher.prenom }}</a></div>
\t\t\t\t\t\t\t  {% for cour in teacher.cours %}
            <div class=\"teacher_title\">{{ cour.nomCour}}</div>    
\t\t\t  {% endfor %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endfor %}


\t\t\t
\t\t\t

\t\t\t
\t\t
\t\t\t\t
\t\t\t\t\t
\t\t


\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t
</div>

<script src=\"{{ asset('plugins/parallax-js-master/parallax.min.js')}}\"></script>
<script src=\"{{ asset('plugins/progressbar/progressbar.min.js')}}\"></script>
<script src=\"{{ asset('plugins/video-js/video.min.js')}}\"></script>
<script src=\"{{ asset('plugins/video-js/Youtube.min.js')}}\"></script>
<script src=\"{{ asset('js/instructors.js')}}\"></script>
{% endblock %}
", "enseignants/index.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\enseignants\\index.html.twig");
    }
}
