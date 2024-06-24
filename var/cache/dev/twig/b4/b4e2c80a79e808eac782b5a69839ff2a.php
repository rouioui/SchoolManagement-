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

/* etudiant/index.html.twig */
class __TwigTemplate_259b5f20f302be6b214f9bcf75661db9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
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
        yield "        
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/course.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/course_responsive.css"), "html", null, true);
        yield "\">

    <div class=\"super_container\">
 


\t



\t

\t<div class=\"home\">
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<ul class=\"breadcrumbs_list d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t<li><a href=\"courses.html\">courses</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



\t<!-- Course -->

\t<div class=\"course\">
\t\t<div class=\"course_top\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">

\t\t\t\t<!-- Panels -->
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<div class=\"tab_panels\">

\t\t\t\t\t\t<!-- Tabs -->
\t\t\t\t\t\t<div class=\"course_tabs_container\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tabs d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab active\">Notes</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab\">curriculum</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab\">reviews</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab\">members</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t<div class=\"tab_panel description active\">
    <table class=\"table \">
    <thead>
        <tr>
            <th>Course</th>
            <th>Numero</th>
           
            <th>Note</th>
            <th>Observation</th>
            <th>Date Ajoute</th>
        </tr>
    </thead>
  <tbody>
    ";
        // line 84
        $context["groupedNotes"] = [];
        // line 85
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 86
            yield "        ";
            $context["cours"] = CoreExtension::getAttribute($this->env, $this->source, $context["note"], "getCours", [], "method", false, false, false, 86);
            // line 87
            yield "        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["groupedNotes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 87, $this->source); })()), "getNomCour", [], "method", false, false, false, 87), [], "array", true, true, false, 87)) {
                // line 88
                yield "            ";
                $context["groupedNotes"] = Twig\Extension\CoreExtension::merge((isset($context["groupedNotes"]) || array_key_exists("groupedNotes", $context) ? $context["groupedNotes"] : (function () { throw new RuntimeError('Variable "groupedNotes" does not exist.', 88, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 88, $this->source); })()), "getNomCour", [], "method", false, false, false, 88) => ["professor" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 88, $this->source); })()), "getEnseignant", [], "method", false, false, false, 88), "notes" => []]]);
                // line 89
                yield "        ";
            }
            // line 90
            yield "        ";
            $context["tempNotes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupedNotes"]) || array_key_exists("groupedNotes", $context) ? $context["groupedNotes"] : (function () { throw new RuntimeError('Variable "groupedNotes" does not exist.', 90, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 90, $this->source); })()), "getNomCour", [], "method", false, false, false, 90), [], "array", false, false, false, 90), "notes", [], "array", false, false, false, 90);
            // line 91
            yield "        ";
            $context["tempNotes"] = Twig\Extension\CoreExtension::merge((isset($context["tempNotes"]) || array_key_exists("tempNotes", $context) ? $context["tempNotes"] : (function () { throw new RuntimeError('Variable "tempNotes" does not exist.', 91, $this->source); })()), [$context["note"]]);
            // line 92
            yield "        ";
            $context["groupedNotes"] = Twig\Extension\CoreExtension::merge((isset($context["groupedNotes"]) || array_key_exists("groupedNotes", $context) ? $context["groupedNotes"] : (function () { throw new RuntimeError('Variable "groupedNotes" does not exist.', 92, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 92, $this->source); })()), "getNomCour", [], "method", false, false, false, 92) => ["professor" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 92, $this->source); })()), "getEnseignant", [], "method", false, false, false, 92), "notes" => (isset($context["tempNotes"]) || array_key_exists("tempNotes", $context) ? $context["tempNotes"] : (function () { throw new RuntimeError('Variable "tempNotes" does not exist.', 92, $this->source); })())]]);
            // line 93
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupedNotes"]) || array_key_exists("groupedNotes", $context) ? $context["groupedNotes"] : (function () { throw new RuntimeError('Variable "groupedNotes" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["cours"] => $context["data"]) {
            // line 96
            yield "        <tr>
            <td colspan=\"6\">
                <strong style=\"color: blue;\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cours"], "html", null, true);
            yield "</strong> 
                - 
                <span style=\"color: green;\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "professor", [], "any", false, false, false, 100), "html", null, true);
            yield "</span>
            </td>
        </tr>
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "notes", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 104
                yield "            <tr>
                <td>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "getCours", [], "method", false, false, false, 105), "html", null, true);
                yield "</td>
                <td>";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "getNumberExams", [], "method", false, false, false, 106), "html", null, true);
                yield "</td>
                <td>";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "getNote", [], "method", false, false, false, 107), "html", null, true);
                yield "</td>
                <td>";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "getObservation", [], "method", false, false, false, 108), "html", null, true);
                yield "</td>
                <td>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "getCreatedAt", [], "method", false, false, false, 109), "Y-m-d H:i:s"), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cours'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "</tbody>


</table>

\t\t\t\t\t\t</div> 

\t\t\t\t\t\t<!-- Curriculum -->
\t\t\t\t\t\t<div class=\"tab_panel curriculum\">
\t\t\t\t\t\t\t<div class=\"panel_title\">Syllabus</div>
\t\t\t\t\t\t\t<div class=\"panel_text\">
\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus. Suspendisse potenti. In rutrum justo et diam egestas luctus. Mauris eu neque eget odio suscipit eleifend. Sed imperdiet ante quis felis tempor hendrerit. Curabitur eget fermentum ipsum. Sed efficitur eget velit eu vulputate. Duis tincidunt quam in erat dignissim consequat. Praesent tempus leo eu nisl fringilla interdum. Maecenas rutrum libero eget lacus bibendum tristique. Curabitur at felis lobortis, mollis ante ut, tempus elit. Morbi justo nisi, posuere sed augue id, iaculis tincidunt mi. Pellentesque sed dolor sed dui congue tempus a et felis.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"curriculum_items\">
\t\t\t\t\t\t\t\t<div class=\"cur_item\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_title\">Week 1</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_num ml-auto\">0/4</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_item_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_title\">Beginners Level</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_text\">
\t\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_contents\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\" aria-hidden=\"true\"></i><span>1 video, 1 audio, 1 reading</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i><span>Video: <a href=\"#\">Greetings and Introductions</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i><span>Reading: <a href=\"#\">Word Types</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i><span>Audio: <a href=\"#\">Listening Exercise</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i><span>Graded: Cumulative Language Quiz</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><span>3 Questions</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cur_item\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_title\">Week 2</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_num ml-auto\">0/5</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_item_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_title\">Intermediate Level</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_text\">
\t\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_contents\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\" aria-hidden=\"true\"></i><span>1 video, 1 audio, 1 reading</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i><span>Video: <a href=\"#\">Greetings and Introductions</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i><span>Reading: <a href=\"#\">Word Types</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i><span>Audio: <a href=\"#\">Listening Exercise</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i><span>Graded: Cumulative Language Quiz</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><span>3 Questions</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Reviews -->
\t\t\t\t\t\t<div class=\"tab_panel reviews\">
\t\t\t\t\t\t\t<div class=\"panel_title\">Reviews</div>
\t\t\t\t\t\t\t<div class=\"panel_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cur_ratings_container clearfix\">
\t\t\t\t\t\t\t\t<div class=\"cur_rating d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_rating_num\">4,5</div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 cur_stars\"><i></i><i></i><i></i><i></i><i></i></div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_rating_text\">Rated 5 out of 3 Ratings</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cur_rating_progress d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_1\" class=\"cur_pbar\" data-perc=\"0.80\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_2\" class=\"cur_pbar\" data-perc=\"0.20\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_3\" class=\"cur_pbar\" data-perc=\"0.0\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_4\" class=\"cur_pbar\" data-perc=\"0.0\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_5\" class=\"cur_pbar\" data-perc=\"0.0\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"cur_reviews\">

\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<div class=\"review_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_title d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_image\"><div><img src=\"images/review_1.jpg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_name\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">Sep 29, 2017 at 9:48 am</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review_stars ml-auto\"><div class=\"rating_r rating_r_4 review_rating\"><i></i><i></i><i></i><i></i><i></i></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review_text\">
\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<div class=\"review_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_title d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_image\"><div><i class=\"fa fa-user\" aria-hidden=\"true\"></i></div></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_name\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">Sep 29, 2017 at 9:48 am</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review_stars ml-auto\"><div class=\"rating_r rating_r_4 review_rating\"><i></i><i></i><i></i><i></i><i></i></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review_text\">
\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<div class=\"review_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_title d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_image\"><div><i class=\"fa fa-user\" aria-hidden=\"true\"></i></div></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_name\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">Sep 29, 2017 at 9:48 am</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review_stars ml-auto\"><div class=\"rating_r rating_r_4 review_rating\"><i></i><i></i><i></i><i></i><i></i></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review_text\">
\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Members -->
\t\t\t\t\t\t<div class=\"tab_panel members\">
\t\t\t\t\t\t\t<div class=\"panel_title\">Members</div>
\t\t\t\t\t\t\t<div class=\"panel_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"members_list d-flex flex-row flex-wrap align-items-start justify-content-start\">

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_5.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_7.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_8.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_9.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t<div class=\"sidebar_background\"></div>
                           
\t\t\t\t\t\t<div class=\"sidebar_top\"><a href=\"#\">Welcome ";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 403, $this->source); })()), "nom", [], "any", false, false, false, 403), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 403, $this->source); })()), "prenom", [], "any", false, false, false, 403), "html", null, true);
        yield " </a>
                        
                        </div>
                        
\t\t\t\t\t\t<div class=\"sidebar_content\">

\t\t\t\t\t\t\t<!-- Features -->
\t\t\t\t\t\t\t<div class=\"sidebar_section features\">
                            \t<div class=\"member \">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"../upload/images/Etudiants/";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 412, $this->source); })()), "image", [], "any", false, false, false, 412), "html", null, true);
        yield "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 413, $this->source); })()), "nom", [], "any", false, false, false, 413), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 413, $this->source); })()), "prenom", [], "any", false, false, false, 413), "html", null, true);
        yield "</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sidebar_title\">information :</div>
                                \t
\t\t\t\t\t\t\t\t<div class=\"features_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"features_list\">
                                    <li class=\"d-flex flex-row align-items-start justify-content-start\">

\t\t\t\t\t\t\t\t\t
                             \t</li>

\t\t\t\t\t\t\t\t\t\t<!-- Feature -->
\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"></i><span>CNE :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 427, $this->source); })()), "Cne", [], "any", false, false, false, 427), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<!-- Feature -->
\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"><span>CIN :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 433, $this->source); })()), "Cin", [], "any", false, false, false, 433), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t\t</li>

                                        \t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"><span>Niveau :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 438, $this->source); })()), "Niveau", [], "any", false, false, false, 438), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t\t</li>

                                        \t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"><span>Tuteur :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 443, $this->source); })()), "getTuteur", [], "any", false, false, false, 443), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<!-- Feature -->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->


</div>



       

  <script src=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/progressbar/progressbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/course.js"), "html", null, true);
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
        return "etudiant/index.html.twig";
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
        return array (  696 => 476,  692 => 475,  688 => 474,  684 => 473,  680 => 472,  676 => 471,  672 => 470,  668 => 469,  639 => 443,  631 => 438,  623 => 433,  614 => 427,  595 => 413,  591 => 412,  577 => 403,  285 => 113,  279 => 112,  270 => 109,  266 => 108,  262 => 107,  258 => 106,  254 => 105,  251 => 104,  247 => 103,  241 => 100,  236 => 98,  232 => 96,  228 => 95,  225 => 94,  219 => 93,  216 => 92,  213 => 91,  210 => 90,  207 => 89,  204 => 88,  201 => 87,  198 => 86,  193 => 85,  191 => 84,  117 => 13,  113 => 12,  109 => 11,  105 => 10,  101 => 9,  97 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EnseignantsController!{% endblock %}

{% block body %}
        
    <link rel=\"stylesheet\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/course.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/course_responsive.css') }}\">

    <div class=\"super_container\">
 


\t



\t

\t<div class=\"home\">
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<ul class=\"breadcrumbs_list d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t<li><a href=\"courses.html\">courses</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



\t<!-- Course -->

\t<div class=\"course\">
\t\t<div class=\"course_top\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">

\t\t\t\t<!-- Panels -->
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<div class=\"tab_panels\">

\t\t\t\t\t\t<!-- Tabs -->
\t\t\t\t\t\t<div class=\"course_tabs_container\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tabs d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab active\">Notes</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab\">curriculum</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab\">reviews</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab\">members</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t<div class=\"tab_panel description active\">
    <table class=\"table \">
    <thead>
        <tr>
            <th>Course</th>
            <th>Numero</th>
           
            <th>Note</th>
            <th>Observation</th>
            <th>Date Ajoute</th>
        </tr>
    </thead>
  <tbody>
    {% set groupedNotes = {} %}
    {% for note in notes %}
        {% set cours = note.getCours() %}
        {% if groupedNotes[cours.getNomCour()] is not defined %}
            {% set groupedNotes = groupedNotes|merge({(cours.getNomCour()): {'professor': cours.getEnseignant(), 'notes': []}}) %}
        {% endif %}
        {% set tempNotes = groupedNotes[cours.getNomCour()]['notes'] %}
        {% set tempNotes = tempNotes|merge([note]) %}
        {% set groupedNotes = groupedNotes|merge({(cours.getNomCour()): {'professor': cours.getEnseignant(), 'notes': tempNotes}}) %}
    {% endfor %}

    {% for cours, data in groupedNotes %}
        <tr>
            <td colspan=\"6\">
                <strong style=\"color: blue;\">{{ cours }}</strong> 
                - 
                <span style=\"color: green;\">{{ data.professor }}</span>
            </td>
        </tr>
        {% for note in data.notes %}
            <tr>
                <td>{{ note.getCours() }}</td>
                <td>{{ note.getNumberExams() }}</td>
                <td>{{ note.getNote() }}</td>
                <td>{{ note.getObservation() }}</td>
                <td>{{ note.getCreatedAt()|date('Y-m-d H:i:s') }}</td>
            </tr>
        {% endfor %}
    {% endfor %}
</tbody>


</table>

\t\t\t\t\t\t</div> 

\t\t\t\t\t\t<!-- Curriculum -->
\t\t\t\t\t\t<div class=\"tab_panel curriculum\">
\t\t\t\t\t\t\t<div class=\"panel_title\">Syllabus</div>
\t\t\t\t\t\t\t<div class=\"panel_text\">
\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus. Suspendisse potenti. In rutrum justo et diam egestas luctus. Mauris eu neque eget odio suscipit eleifend. Sed imperdiet ante quis felis tempor hendrerit. Curabitur eget fermentum ipsum. Sed efficitur eget velit eu vulputate. Duis tincidunt quam in erat dignissim consequat. Praesent tempus leo eu nisl fringilla interdum. Maecenas rutrum libero eget lacus bibendum tristique. Curabitur at felis lobortis, mollis ante ut, tempus elit. Morbi justo nisi, posuere sed augue id, iaculis tincidunt mi. Pellentesque sed dolor sed dui congue tempus a et felis.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"curriculum_items\">
\t\t\t\t\t\t\t\t<div class=\"cur_item\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_title\">Week 1</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_num ml-auto\">0/4</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_item_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_title\">Beginners Level</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_text\">
\t\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_contents\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\" aria-hidden=\"true\"></i><span>1 video, 1 audio, 1 reading</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i><span>Video: <a href=\"#\">Greetings and Introductions</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i><span>Reading: <a href=\"#\">Word Types</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i><span>Audio: <a href=\"#\">Listening Exercise</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i><span>Graded: Cumulative Language Quiz</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><span>3 Questions</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cur_item\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_title\">Week 2</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_num ml-auto\">0/5</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_item_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_title\">Intermediate Level</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_item_text\">
\t\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cur_contents\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\" aria-hidden=\"true\"></i><span>1 video, 1 audio, 1 reading</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i><span>Video: <a href=\"#\">Greetings and Introductions</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file\" aria-hidden=\"true\"></i><span>Reading: <a href=\"#\">Word Types</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i><span>Audio: <a href=\"#\">Listening Exercise</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i><span>15 minutes</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i><span>Graded: Cumulative Language Quiz</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cur_time ml-auto\"><span>3 Questions</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Reviews -->
\t\t\t\t\t\t<div class=\"tab_panel reviews\">
\t\t\t\t\t\t\t<div class=\"panel_title\">Reviews</div>
\t\t\t\t\t\t\t<div class=\"panel_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cur_ratings_container clearfix\">
\t\t\t\t\t\t\t\t<div class=\"cur_rating d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_rating_num\">4,5</div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 cur_stars\"><i></i><i></i><i></i><i></i><i></i></div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_rating_text\">Rated 5 out of 3 Ratings</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cur_rating_progress d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_1\" class=\"cur_pbar\" data-perc=\"0.80\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_2\" class=\"cur_pbar\" data-perc=\"0.20\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_3\" class=\"cur_pbar\" data-perc=\"0.0\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_4\" class=\"cur_pbar\" data-perc=\"0.0\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cur_progress d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<span>5 stars</span>
\t\t\t\t\t\t\t\t\t\t<div id=\"cur_pbar_5\" class=\"cur_pbar\" data-perc=\"0.0\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"cur_reviews\">

\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<div class=\"review_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_title d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_image\"><div><img src=\"images/review_1.jpg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_name\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">Sep 29, 2017 at 9:48 am</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review_stars ml-auto\"><div class=\"rating_r rating_r_4 review_rating\"><i></i><i></i><i></i><i></i><i></i></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review_text\">
\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<div class=\"review_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_title d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_image\"><div><i class=\"fa fa-user\" aria-hidden=\"true\"></i></div></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_name\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">Sep 29, 2017 at 9:48 am</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review_stars ml-auto\"><div class=\"rating_r rating_r_4 review_rating\"><i></i><i></i><i></i><i></i><i></i></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review_text\">
\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<div class=\"review_title_container d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review_title d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_image\"><div><i class=\"fa fa-user\" aria-hidden=\"true\"></i></div></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_author_name\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review_date\">Sep 29, 2017 at 9:48 am</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"review_stars ml-auto\"><div class=\"rating_r rating_r_4 review_rating\"><i></i><i></i><i></i><i></i><i></i></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"review_text\">
\t\t\t\t\t\t\t\t\t\t<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Members -->
\t\t\t\t\t\t<div class=\"tab_panel members\">
\t\t\t\t\t\t\t<div class=\"panel_title\">Members</div>
\t\t\t\t\t\t\t<div class=\"panel_text\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"members_list d-flex flex-row flex-wrap align-items-start justify-content-start\">

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_5.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_7.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_8.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_9.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Member -->
\t\t\t\t\t\t\t\t<div class=\"member\">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"images/member_0.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">Sarah Parker</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t<div class=\"sidebar_background\"></div>
                           
\t\t\t\t\t\t<div class=\"sidebar_top\"><a href=\"#\">Welcome {{ student.nom }} {{ student.prenom }} </a>
                        
                        </div>
                        
\t\t\t\t\t\t<div class=\"sidebar_content\">

\t\t\t\t\t\t\t<!-- Features -->
\t\t\t\t\t\t\t<div class=\"sidebar_section features\">
                            \t<div class=\"member \">
\t\t\t\t\t\t\t\t\t<div class=\"member_image\"><img src=\"../upload/images/Etudiants/{{student.image}}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"member_title\"><a href=\"#\">{{ student.nom }} {{ student.prenom }}</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sidebar_title\">information :</div>
                                \t
\t\t\t\t\t\t\t\t<div class=\"features_content\">
\t\t\t\t\t\t\t\t\t<ul class=\"features_list\">
                                    <li class=\"d-flex flex-row align-items-start justify-content-start\">

\t\t\t\t\t\t\t\t\t
                             \t</li>

\t\t\t\t\t\t\t\t\t\t<!-- Feature -->
\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"></i><span>CNE :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">{{ student.Cne }}</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<!-- Feature -->
\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"><span>CIN :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">{{ student.Cin }}</div>
\t\t\t\t\t\t\t\t\t\t</li>

                                        \t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"><span>Niveau :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">{{ student.Niveau }}</div>
\t\t\t\t\t\t\t\t\t\t</li>

                                        \t<li class=\"d-flex flex-row align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_title\"><span>Tuteur :</span></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature_text ml-auto\">{{ student.getTuteur }}</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<!-- Feature -->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->


</div>



       

  <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
    <script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
    <script src=\"{{ asset('plugins/parallax-js-master/parallax.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/progressbar/progressbar.min.js') }}\"></script>
    <script src=\"{{ asset('js/course.js') }}\"></script>
{% endblock %}
", "etudiant/index.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\etudiant\\index.html.twig");
    }
}
