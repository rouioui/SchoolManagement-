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

/* departements/index.html.twig */
class __TwigTemplate_1af79b92a5ce9129f5e8859a1db8531f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departements/index.html.twig", 1);
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

        yield "Hello DepartementsController!";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/courses.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/courses_responsive.css"), "html", null, true);
        yield "\">

<div class=\"super_container\">


\t<div class=\"language\">
\t</div>





\t<div class=\"courses mt-5\">
\t\t<div class=\"container \">
\t\t\t<div class=\"row courses_row\">

\t\t\t

\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Departements"]) || array_key_exists("Departements", $context) ? $context["Departements"] : (function () { throw new RuntimeError('Variable "Departements" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Departement"]) {
            // line 26
            yield "            <!-- Cours -->
            <div class=\"col-lg-4 course_col\">
                <div class=\"course\">
                    <div class=\"course_image\"><img src=\"upload/images/Depatements/";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "images", [], "any", false, false, false, 29), "html", null, true);
            yield "\" alt=\"\"></div>
                    <div class=\"course_body\">
                        <div class=\"course_title\"><a href=\"course.html\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</a></div>
                        <div class=\"course_info\">
                            <ul>
 <li><a href=\"instructors.html\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "getChefDepartement", [], "method", false, false, false, 34), "html", null, true);
            yield "</a></li><li><a href=\"#\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "ChefDepartement", [], "any", false, false, false, 34), "getCours", [], "method", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 35
                yield "            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "NomCour", [], "any", false, false, false, 35), "html", null, true);
                yield "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "</a></li>
                            </ul>
                        </div>
                        <div class=\"course_text\">
                            <p>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "description", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "enseignants", [], "any", false, false, false, 44), "count", [], "any", false, false, false, 44), "html", null, true);
            yield "</span></div>
                        <div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
                        <div class=\"course_mark trans_200\"><a href=\"#\">Voir</a></div>
                    </div>
                </div>
            </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"load_more_button\"><a href=\"#\">load more</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t
</div>
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
        return "departements/index.html.twig";
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
        return array (  177 => 51,  164 => 44,  157 => 40,  151 => 36,  142 => 35,  136 => 34,  130 => 31,  125 => 29,  120 => 26,  116 => 25,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DepartementsController!{% endblock %}

{% block body %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/courses.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/courses_responsive.css') }}\">

<div class=\"super_container\">


\t<div class=\"language\">
\t</div>





\t<div class=\"courses mt-5\">
\t\t<div class=\"container \">
\t\t\t<div class=\"row courses_row\">

\t\t\t

\t\t\t\t{% for Departement in Departements %}
            <!-- Cours -->
            <div class=\"col-lg-4 course_col\">
                <div class=\"course\">
                    <div class=\"course_image\"><img src=\"upload/images/Depatements/{{ Departement.images}}\" alt=\"\"></div>
                    <div class=\"course_body\">
                        <div class=\"course_title\"><a href=\"course.html\">{{ Departement.name}}</a></div>
                        <div class=\"course_info\">
                            <ul>
 <li><a href=\"instructors.html\">{{ Departement.getChefDepartement()}}</a></li><li><a href=\"#\"> {% for course in Departement.ChefDepartement.getCours() %}
            <li>{{course.NomCour}}</li>
        {% endfor %}</a></li>
                            </ul>
                        </div>
                        <div class=\"course_text\">
                            <p>{{ Departement.description}}</p>
                        </div>
                    </div>
                    <div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>{{ Departement.enseignants.count }}</span></div>
                        <div class=\"course_rating ml-auto\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span>4,5</span></div>
                        <div class=\"course_mark trans_200\"><a href=\"#\">Voir</a></div>
                    </div>
                </div>
            </div>
             {% endfor %}

\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"load_more_button\"><a href=\"#\">load more</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t
</div>
{% endblock %}
", "departements/index.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\departements\\index.html.twig");
    }
}
