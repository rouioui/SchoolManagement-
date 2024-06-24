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

/* etudiant/search.html.twig */
class __TwigTemplate_b8fee5064c7599f8f30eeb9bc9f317e9 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/search.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Student Search";
        
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/course.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/course_responsive.css"), "html", null, true);
        yield "\">

    <div class=\"super_container\">
 



    ";
        // line 22
        yield "


<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-9 mt-5 mb-5 offset-md-1\">
            <div class=\"register_form_container mt-5\">
                <a href=\"#\">
                    <div class=\"logo_text\">
                        <img src=\"images/ens logo .png\" width=\"250px\" alt=\"\">
                    </div>
                </a>
                <div class=\"register_form_title\">Espace Etudiant</div>
                ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        yield "
                <div class=\"row register_row\">
                    <div class=\"col-lg-6 register_col\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cin", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "CIN", "required" => "required", "autofocus" => true]]);
        // line 45
        yield "
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "cin", [], "any", false, false, false, 46), 'errors');
        yield "
                    </div>
                      <div class=\"col-lg-6 register_col\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cne", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "CNE", "required" => "required", "autofocus" => true]]);
        // line 56
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "cne", [], "any", false, false, false, 57), 'errors');
        yield "
                    </div>
                    <div class=\"col-lg-12 register_col\">
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "dateNaissance", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Date of Birth", "required" => "required"]]);
        // line 66
        yield "
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "dateNaissance", [], "any", false, false, false, 67), 'errors');
        yield "
                    </div>
                    <div class=\"col\">
                        <button type=\"submit\" class=\"form_button trans_200\">Submit</button>
                    </div>
                </div>
                ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "

                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["error"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            yield "                    <div class=\"alert alert-danger mt-3\">
                        ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "            </div>
        </div>
    </div>
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
        return "etudiant/search.html.twig";
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
        return array (  203 => 80,  194 => 77,  191 => 76,  187 => 75,  182 => 73,  173 => 67,  170 => 66,  168 => 60,  162 => 57,  159 => 56,  157 => 49,  151 => 46,  148 => 45,  146 => 38,  140 => 35,  125 => 22,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  99 => 10,  95 => 9,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/etudiant/search.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Student Search{% endblock %}

{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/course.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/course_responsive.css') }}\">

    <div class=\"super_container\">
 



    {# templates/etudiant/search.html.twig #}



<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-9 mt-5 mb-5 offset-md-1\">
            <div class=\"register_form_container mt-5\">
                <a href=\"#\">
                    <div class=\"logo_text\">
                        <img src=\"images/ens logo .png\" width=\"250px\" alt=\"\">
                    </div>
                </a>
                <div class=\"register_form_title\">Espace Etudiant</div>
                {{ form_start(form) }}
                <div class=\"row register_row\">
                    <div class=\"col-lg-6 register_col\">
                        {{ form_widget(form.cin, {
                            'attr': {
                                'class': 'form_input',
                                'placeholder': 'CIN',
                                'required': 'required',
                                'autofocus': true
                            }
                        }) }}
                        {{ form_errors(form.cin) }}
                    </div>
                      <div class=\"col-lg-6 register_col\">
                        {{ form_widget(form.cne, {
                            'attr': {
                                'class': 'form_input',
                                'placeholder': 'CNE',
                                'required': 'required',
                                'autofocus': true
                            }
                        }) }}
                        {{ form_errors(form.cne) }}
                    </div>
                    <div class=\"col-lg-12 register_col\">
                        {{ form_widget(form.dateNaissance, {
                            'attr': {
                                'class': 'form_input',
                                'placeholder': 'Date of Birth',
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(form.dateNaissance) }}
                    </div>
                    <div class=\"col\">
                        <button type=\"submit\" class=\"form_button trans_200\">Submit</button>
                    </div>
                </div>
                {{ form_end(form) }}

                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger mt-3\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>

{% endblock %}

", "etudiant/search.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\etudiant\\search.html.twig");
    }
}
