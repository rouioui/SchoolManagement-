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
\t\t ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["BlogsCategorie"]) || array_key_exists("BlogsCategorie", $context) ? $context["BlogsCategorie"] : (function () { throw new RuntimeError('Variable "BlogsCategorie" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["BlogCategorie"]) {
            // line 26
            yield "\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"upload/images/BlogsCategorie/";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["BlogCategorie"], "img", [], "any", false, false, false, 29), "html", null, true);
            yield "\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["BlogCategorie"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlogCategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "\t\t\t</div>

\t\t\t<!-- Blog Posts -->
\t\t\t
\t\t\t<div class=\"row blog_row\">

\t\t\t

\t\t\t\t ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Blogs"]) || array_key_exists("Blogs", $context) ? $context["Blogs"] : (function () { throw new RuntimeError('Variable "Blogs" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Blog"]) {
            // line 44
            yield "\t\t\t\t<!-- Blog Post -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(upload/images/Blogs/";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Blog"], "image", [], "any", false, false, false, 48), "html", null, true);
            yield ")\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["Blog"], "CategorieBlog", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            yield "</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Blog"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["Blog"], "introduction", [], "any", false, false, false, 53);
            yield "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "\t\t\t

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
        return array (  191 => 61,  177 => 53,  172 => 51,  168 => 50,  163 => 48,  157 => 44,  153 => 43,  143 => 35,  132 => 30,  128 => 29,  123 => 26,  119 => 25,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
\t\t {% for BlogCategorie in BlogsCategorie %}
\t\t\t\t<div class=\"col-xl-2 col-lg-4 col-md-6 blog_category_col\">
\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t<div class=\"blog_category\">
\t\t\t\t\t\t\t<div class=\"blog_category_image\"><img src=\"upload/images/BlogsCategorie/{{BlogCategorie.img}}\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"blog_category_title\">{{ BlogCategorie.name }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
 {% endfor %}
\t\t\t</div>

\t\t\t<!-- Blog Posts -->
\t\t\t
\t\t\t<div class=\"row blog_row\">

\t\t\t

\t\t\t\t {% for Blog in Blogs %}
\t\t\t\t<!-- Blog Post -->

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t<div class=\"blog_image\" style=\"background-image:url(upload/images/Blogs/{{Blog.image}})\"></div>
\t\t\t\t\t\t<div class=\"blog_title_container\">
\t\t\t\t\t\t\t<div class=\"blog_post_category\"><a href=\"#\">{{ Blog.CategorieBlog.name }}</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_title\"><a href=\"blog_single.html\">{{Blog.name}}</a></div>
\t\t\t\t\t\t\t<div class=\"blog_post_text\">
\t\t\t\t\t\t\t\t<p>{{Blog.introduction|raw}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"read_more\"><a href=\"blog_single.html\">Read More <img src=\"images/right.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t {% endfor %}
\t\t\t

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
