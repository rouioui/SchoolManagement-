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

        yield "Bonjour HomeController!";
        
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
    <div class=\"home_background mt-5\" style=\"background-image: url('images/tetouanEns.jpg');background-size: cover; opacity:0.85;\"></div>
    <div class=\"home_content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h1 class=\"home_title\" style=\"\">
Bienvenue sur le site officiel de l'École Normale Supérieure de Tétouan.</h1>
                    <div class=\"home_button trans_200\"style=\"border-radius:10px;\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contactez-nous</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cours -->
<div class=\"courses\">
    <div class=\"courses_background\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section_title text-center\">Notre Départements</h2>
            </div>
        </div>
        <div class=\"row courses_row\">

           

           
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Departements"]) || array_key_exists("Departements", $context) ? $context["Departements"] : (function () { throw new RuntimeError('Variable "Departements" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Departement"]) {
            // line 39
            yield "            <!-- Cours -->
            <div class=\"col-lg-4 course_col\">
                <div class=\"course\">
                    <div class=\"course_image\"><img src=\"upload/images/Depatements/";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "images", [], "any", false, false, false, 42), "html", null, true);
            yield "\" alt=\"\"></div>
                    <div class=\"course_body\">
                        <div class=\"course_title\"><a href=\"course.html\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</a></div>
                        <div class=\"course_info\">
                           
 <a href=\"instructors.html\"  style=\"color:black;\"> chef Departement : ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "getChefDepartement", [], "method", false, false, false, 47), "html", null, true);
            yield "</a></li><li><a href=\"#\" style=\"color:black;\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "ChefDepartement", [], "any", false, false, false, 47), "getCours", [], "method", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 48
                yield "             prof : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "NomCour", [], "any", false, false, false, 48), "html", null, true);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "</a>         
                        </div>
                        <div class=\"course_text\">
                            <p>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "description", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"course_footer d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"course_students\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["Departement"], "enseignants", [], "any", false, false, false, 56), "count", [], "any", false, false, false, 56), "html", null, true);
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
        // line 63
        yield "


        </div>
    </div>
</div>

<!-- Instructeurs -->
<div class=\"instructors\">
    <div class=\"instructors_background\" style=\"background-image:url(images/instructors_background.png)\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section_title text-center\">Les meilleurs tuteurs en ville</h2>
            </div>
        </div>
        <div class=\"row instructors_row\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new RuntimeError('Variable "teachers" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 81
            yield "            <!-- Instructeur -->
            <div class=\"col-lg-4 instructor_col\">
                <div class=\"instructor text-center\">
                    <div class=\"instructor_image_container\">
                        <div class=\"instructor_image\"><img src=\"upload/images/Enseignants/";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "Image", [], "any", false, false, false, 85), "html", null, true);
            yield "\" alt=\"\"></div>
                    </div>
                    <div class=\"instructor_name\"><a href=\"instructors.html\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "nom", [], "any", false, false, false, 87), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "prenom", [], "any", false, false, false, 87), "html", null, true);
            yield "</a></div>
                    <div class=\"instructor_title\">
                     ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["teacher"], "getCours", [], "method", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 90
                yield "                     ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "NomCour", [], "any", false, false, false, 90), "html", null, true);
                yield "


                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                    
                    
                    
                    
                    </div>
                    <div class=\"instructor_text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                    </div>
                    <div class=\"instructor_social\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "        </div>
    </div>
</div>

<!-- Enregistrement -->
<div class=\"register\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Formulaire d'enregistrement -->
            <div class=\"col-lg-6\">
                <div class=\"register_form_container\">
                    <div class=\"register_form_title\">Ajouter un message</div>
                    ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_start', ["attr" => ["id" => "register_form", "class" => "register_form"]]);
        yield "
                    <div class=\"row register_row\">
                        <div class=\"col-lg-6 register_col\">
                            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "name", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Nom", "required" => "required"]]);
        yield "
                        </div>
                        <div class=\"col-lg-6 register_col\">
                            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "phone", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Téléphone"]]);
        yield "
                        </div>
                        <div class=\"col-lg-12 register_col\">
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "email", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Email", "required" => "required"]]);
        yield "
                        </div>
                        <div class=\"col-lg-12 register_col\">
                            ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "message", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form_input", "placeholder" => "Message", "style" => "height: 100px;"]]);
        yield "
                        </div>
                        <div class=\"col\">
                            ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "createdAt", [], "any", false, false, false, 140), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                            <button type=\"submit\" class=\"form_button trans_200\">Envoyer le message maintenant !</button>
                        </div>
                    </div>
                    ";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <!-- Timer d'enregistrement -->

            <div class=\"col-lg-6\">
                <div class=\"register_timer_container\">
                    <div class=\"register_timer_title\">Inscrivez-vous maintenant</div>
                    <div class=\"register_timer_text\">
                        <p>Inscrivez-vous maintenant, et notre équipe vous contactera rapidement.</p>
                    </div>

                    <div class=\"timer_container\">
                        <ul class=\"timer_list\">
                            <li><div id=\"day\" class=\"timer_num\">+500</div><div class=\"timer_ss\">Departement</div></li>
                            <li><div id=\"hour\" class=\"timer_num\">+50</div><div class=\"timer_ss\">ENSEIGNANTS</div></li>
                            <li><div id=\"minute\" class=\"timer_num\">+140</div><div class=\"timer_ss\">COURS</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Événements -->
<div class=\"events\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section_title text-center\">Événements à venir</h2>
            </div>
        </div>
        <div class=\"row events_row\">
            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Event"]) {
            // line 180
            yield "            <!-- Événement -->
            <div class=\"col-lg-4 event_col\">
                <div class=\"event\">
                    <div class=\"event_image\"><img src=\"upload/images/Events/";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Event"], "Image", [], "any", false, false, false, 183), "html", null, true);
            yield "\" alt=\"\"></div>
                    <div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"event_day\" style=\"font-size:25px\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Event"], "date", [], "any", false, false, false, 185), "m/d"), "html", null, true);
            yield "</div>
                        <div class=\"event_month\"> ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Event"], "date", [], "any", false, false, false, 186), "H:i"), "html", null, true);
            yield "</div>
                    </div>
                    <div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"event_title mr-3\"><a href=\"#\" style=\"font-size:15px;\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Event"], "name", [], "any", false, false, false, 189), "html", null, true);
            yield "</a></div>
                       
                        <div class=\"event_tag ml-auto\">Gratuit</div>
                    </div>
                      <a href=\"instructors.html\"  style=\"color:black;\"> ";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Event"], "Content", [], "any", false, false, false, 193), "html", null, true);
            yield "</a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "        </div>
    </div>
</div>

<!-- Blog -->
<div class=\"blog\">
    <div class=\"container\">
        <div class=\"row row-lg-eq-height\">

            <!-- Blog à gauche -->
            <div class=\"col-lg-6\">
                <div class=\"blog_left\">
                    <div class=\"blog_title\">Bienvenue sur le blog de notre école !</div>
                    <div class=\"blog_text\">
                        <p>Explorez avec nous les actualités, les événements passionnants, les réussites des élèves, et les initiatives éducatives qui font de notre école un lieu dynamique d'apprentissage et de croissance. Plongez dans notre communauté scolaire et découvrez les histoires inspirantes qui enrichissent notre parcours éducatif.</p>
                    </div>
                    <div class=\"blog_categories\">
                        <div class=\"row categories_row\">
                            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blogsCategorie"]) || array_key_exists("blogsCategorie", $context) ? $context["blogsCategorie"] : (function () { throw new RuntimeError('Variable "blogsCategorie" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["CategorieBlog"]) {
            // line 216
            yield "                            <!-- Catégorie -->
                            <div class=\"col-md-4 blog_category_col\">
                                <a href=\"";
            // line 218
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
            yield "\">
                                    <div class=\"blog_category\">
                                        <div class=\"blog_category_image\"><img src=\"upload/images/BlogsCategorie/";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["CategorieBlog"], "img", [], "any", false, false, false, 220), "html", null, true);
            yield "\" alt=\"\"></div>
                                        <div class=\"blog_category_title\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["CategorieBlog"], "name", [], "any", false, false, false, 221), "html", null, true);
            yield "</div>
                                    </div>
                                </a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CategorieBlog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog à droite -->
            <div class=\"col-lg-6\">
                <div class=\"blog_right\">
                    <div class=\"blog_image\" style=\"background-image:url(upload/images/Blogs/";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 234, $this->source); })()), "image", [], "any", false, false, false, 234), "html", null, true);
        yield ")\"></div>
                    <div class=\"blog_title_container\">
                        <div class=\"blog_right_category\"><a href=\"#\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 236, $this->source); })()), "CategorieBlog", [], "any", false, false, false, 236), "name", [], "any", false, false, false, 236), "html", null, true);
        yield "</a></div>
                        <div class=\"blog_right_title\"><a href=\"blog_single.html\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 237, $this->source); })()), "name", [], "any", false, false, false, 237), "html", null, true);
        yield "</a></div>
                        <div class=\"blog_right_text\">
                            <p>";
        // line 239
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 239, $this->source); })()), "introduction", [], "any", false, false, false, 239);
        yield "</p>
                        </div>
                        <div class=\"read_more\"><a href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">Lire la suite <img src=\"images/right.png\" alt=\"\"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('Home-display').className += 'active';
</script>

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
        return array (  479 => 241,  474 => 239,  469 => 237,  465 => 236,  460 => 234,  450 => 226,  439 => 221,  435 => 220,  430 => 218,  426 => 216,  422 => 215,  402 => 197,  392 => 193,  385 => 189,  379 => 186,  375 => 185,  370 => 183,  365 => 180,  361 => 179,  323 => 144,  316 => 140,  310 => 137,  304 => 134,  298 => 131,  292 => 128,  286 => 125,  271 => 112,  248 => 94,  237 => 90,  233 => 89,  226 => 87,  221 => 85,  215 => 81,  211 => 80,  192 => 63,  179 => 56,  172 => 52,  167 => 49,  158 => 48,  152 => 47,  146 => 44,  141 => 42,  136 => 39,  132 => 38,  108 => 17,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour HomeController!{% endblock %}

{% block body %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">

<div class=\"home\">
    <div class=\"home_background mt-5\" style=\"background-image: url('images/tetouanEns.jpg');background-size: cover; opacity:0.85;\"></div>
    <div class=\"home_content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h1 class=\"home_title\" style=\"\">
Bienvenue sur le site officiel de l'École Normale Supérieure de Tétouan.</h1>
                    <div class=\"home_button trans_200\"style=\"border-radius:10px;\"><a href=\"{{ path('app_contact') }}\">Contactez-nous</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cours -->
<div class=\"courses\">
    <div class=\"courses_background\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section_title text-center\">Notre Départements</h2>
            </div>
        </div>
        <div class=\"row courses_row\">

           

           
    {% for Departement in Departements %}
            <!-- Cours -->
            <div class=\"col-lg-4 course_col\">
                <div class=\"course\">
                    <div class=\"course_image\"><img src=\"upload/images/Depatements/{{ Departement.images}}\" alt=\"\"></div>
                    <div class=\"course_body\">
                        <div class=\"course_title\"><a href=\"course.html\">{{ Departement.name}}</a></div>
                        <div class=\"course_info\">
                           
 <a href=\"instructors.html\"  style=\"color:black;\"> chef Departement : {{ Departement.getChefDepartement()}}</a></li><li><a href=\"#\" style=\"color:black;\"> {% for course in Departement.ChefDepartement.getCours() %}
             prof : {{course.NomCour}}
        {% endfor %}</a>         
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



        </div>
    </div>
</div>

<!-- Instructeurs -->
<div class=\"instructors\">
    <div class=\"instructors_background\" style=\"background-image:url(images/instructors_background.png)\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section_title text-center\">Les meilleurs tuteurs en ville</h2>
            </div>
        </div>
        <div class=\"row instructors_row\">
            {% for teacher in teachers %}
            <!-- Instructeur -->
            <div class=\"col-lg-4 instructor_col\">
                <div class=\"instructor text-center\">
                    <div class=\"instructor_image_container\">
                        <div class=\"instructor_image\"><img src=\"upload/images/Enseignants/{{ teacher.Image }}\" alt=\"\"></div>
                    </div>
                    <div class=\"instructor_name\"><a href=\"instructors.html\">{{ teacher.nom }} {{ teacher.prenom }}</a></div>
                    <div class=\"instructor_title\">
                     {% for course in teacher.getCours()%}
                     {{course.NomCour}}


                     {% endfor %}
                    
                    
                    
                    
                    </div>
                    <div class=\"instructor_text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                    </div>
                    <div class=\"instructor_social\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>

<!-- Enregistrement -->
<div class=\"register\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Formulaire d'enregistrement -->
            <div class=\"col-lg-6\">
                <div class=\"register_form_container\">
                    <div class=\"register_form_title\">Ajouter un message</div>
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
                </div>
            </div>

            <!-- Timer d'enregistrement -->

            <div class=\"col-lg-6\">
                <div class=\"register_timer_container\">
                    <div class=\"register_timer_title\">Inscrivez-vous maintenant</div>
                    <div class=\"register_timer_text\">
                        <p>Inscrivez-vous maintenant, et notre équipe vous contactera rapidement.</p>
                    </div>

                    <div class=\"timer_container\">
                        <ul class=\"timer_list\">
                            <li><div id=\"day\" class=\"timer_num\">+500</div><div class=\"timer_ss\">Departement</div></li>
                            <li><div id=\"hour\" class=\"timer_num\">+50</div><div class=\"timer_ss\">ENSEIGNANTS</div></li>
                            <li><div id=\"minute\" class=\"timer_num\">+140</div><div class=\"timer_ss\">COURS</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Événements -->
<div class=\"events\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section_title text-center\">Événements à venir</h2>
            </div>
        </div>
        <div class=\"row events_row\">
            {% for Event in events %}
            <!-- Événement -->
            <div class=\"col-lg-4 event_col\">
                <div class=\"event\">
                    <div class=\"event_image\"><img src=\"upload/images/Events/{{ Event.Image }}\" alt=\"\"></div>
                    <div class=\"event_date d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"event_day\" style=\"font-size:25px\">{{ Event.date | date('m/d') }}</div>
                        <div class=\"event_month\"> {{ Event.date |  date('H:i') }}</div>
                    </div>
                    <div class=\"event_body d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"event_title mr-3\"><a href=\"#\" style=\"font-size:15px;\">{{ Event.name }}</a></div>
                       
                        <div class=\"event_tag ml-auto\">Gratuit</div>
                    </div>
                      <a href=\"instructors.html\"  style=\"color:black;\"> {{Event.Content}}</a>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>

<!-- Blog -->
<div class=\"blog\">
    <div class=\"container\">
        <div class=\"row row-lg-eq-height\">

            <!-- Blog à gauche -->
            <div class=\"col-lg-6\">
                <div class=\"blog_left\">
                    <div class=\"blog_title\">Bienvenue sur le blog de notre école !</div>
                    <div class=\"blog_text\">
                        <p>Explorez avec nous les actualités, les événements passionnants, les réussites des élèves, et les initiatives éducatives qui font de notre école un lieu dynamique d'apprentissage et de croissance. Plongez dans notre communauté scolaire et découvrez les histoires inspirantes qui enrichissent notre parcours éducatif.</p>
                    </div>
                    <div class=\"blog_categories\">
                        <div class=\"row categories_row\">
                            {% for CategorieBlog in blogsCategorie %}
                            <!-- Catégorie -->
                            <div class=\"col-md-4 blog_category_col\">
                                <a href=\"{{ path('app_blog') }}\">
                                    <div class=\"blog_category\">
                                        <div class=\"blog_category_image\"><img src=\"upload/images/BlogsCategorie/{{ CategorieBlog.img }}\" alt=\"\"></div>
                                        <div class=\"blog_category_title\">{{ CategorieBlog.name }}</div>
                                    </div>
                                </a>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog à droite -->
            <div class=\"col-lg-6\">
                <div class=\"blog_right\">
                    <div class=\"blog_image\" style=\"background-image:url(upload/images/Blogs/{{ blog.image }})\"></div>
                    <div class=\"blog_title_container\">
                        <div class=\"blog_right_category\"><a href=\"#\">{{ blog.CategorieBlog.name }}</a></div>
                        <div class=\"blog_right_title\"><a href=\"blog_single.html\">{{ blog.name }}</a></div>
                        <div class=\"blog_right_text\">
                            <p>{{ blog.introduction | raw }}</p>
                        </div>
                        <div class=\"read_more\"><a href=\"{{ path('app_blog') }}\">Lire la suite <img src=\"images/right.png\" alt=\"\"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('Home-display').className += 'active';
</script>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\SchoolManagement-\\templates\\home\\index.html.twig");
    }
}
