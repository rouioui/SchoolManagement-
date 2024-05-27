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

/* blog/index.html.twig */
class __TwigTemplate_956cb310e2083be93b0fda5baf0a8839 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        yield "Hello BlogController!";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/video-js/video-js.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/blog.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/blog_responsive.css"), "html", null, true);
        yield "\">
\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t</div>

\t<!-- Blog -->

\t<div class=\"blog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"welcome_title\">Welcome to our blog!</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row categories_row\">

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">travel</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">languages</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">cultures</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">fashion</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_5.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">cooking</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">hobbies</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Blog Posts -->
\t\t\t
\t\t\t<div class=\"row blog_row\">

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_7.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Design Better Forms</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_8.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_9.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_10.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_11.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_12.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Load More -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"load_more_button\"><a href=\"#\">load more</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t    <script>
\t\tdocument.getElementById('Blog-display').className += 'active';
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
        return "blog/index.html.twig";
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
        return array (  99 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlogController!{% endblock %}

{% block body %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/video-js/video-js.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/blog.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/blog_responsive.css') }}\">
\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t</div>

\t<!-- Blog -->

\t<div class=\"blog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"welcome_title\">Welcome to our blog!</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row categories_row\">

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">travel</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">languages</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">cultures</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">fashion</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_5.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">cooking</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Category -->
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"images/blog_6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">hobbies</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Blog Posts -->
\t\t\t
\t\t\t<div class=\"row blog_row\">

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_7.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Design Better Forms</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_8.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_9.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_10.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_11.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blog Post -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(images/blog_12.jpg)\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">travel</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">Art Helps Healing</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Load More -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"load_more_button\"><a href=\"#\">load more</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t    <script>
\t\tdocument.getElementById('Blog-display').className += 'active';
\t\t</script>
{% endblock %}
", "blog/index.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\blog\\index.html.twig");
    }
}
