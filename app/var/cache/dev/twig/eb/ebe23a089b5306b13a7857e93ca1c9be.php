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
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_fe997e700e760eb2b92e089aaaccf0da extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "page d'accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <section class=\"row\">
        <h1 class=\"col-12 text-center fs-1 fw-bolder my-2 text-uppercase\">E-school</h1>
        <div class=\"carousel slide col-12\" id=\"carousel\">
            <article class=\"carousel-inner\">
                <figure class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide.jpeg"), "html", null, true);
        yield "\"
                         alt=\"Image de l'école\">
                    <figcaption class=\"carousel-caption\">
                        <h2 class=\"fs-1\">E-school</h2>
                        <p>Nos actions</p>
                    </figcaption>
                </figure>
                <figure class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide_2.jpeg"), "html", null, true);
        yield "\"
                         alt=\"Image de l'école\">
                    <figcaption class=\"carousel-caption d-none d-md-block\">
                        <h2 class=\"fs-1\">E-school</h2>
                        <p>Nos actions</p>
                    </figcaption>
                </figure>
                <figure class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide_3.jpeg"), "html", null, true);
        yield "\"
                         alt=\"Image de l'école\">
                    <figcaption class=\"carousel-caption\">
                        <h2 class=\"fs-1\">E-school</h2>
                        <p>Nos actions</p>
                    </figcaption>
                </figure>
            </article>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel\"
                    data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel\"
                    data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </section>

    <!-- Section de la présentation de l'école -->
    <section class=\"row\">
        <h2 class=\"text-center text-uppercase fs-1 my-3 fw-semibold\">🏫 Présentation</h2>
        <div class=\"row justify-content-between\">
            <article class=\"col-md-5 card m-2\">
                <img class=\"card-img-top\" src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide_2.jpeg"), "html", null, true);
        yield "\"
                     alt=\"Image de representation de l'ecole\">
                <div class=\"card-body\">
                    <h2 class=\"card-title fs-2 text-center fw-semibold text-uppercase my-3\">Votre avenir commence ici,
                        avec eSchool.</h2>
                    <p class=\"card-content fs-3\">Chez <span class=\"text-uppercase fw-bolder\">eSchool</span>, nous
                        croyons que l’apprentissage doit être accessible, efficace et connecté au monde d’aujourd’hui.
                        C’est pourquoi nous proposons des formations en ligne conçues pour s’adapter à votre rythme.
                    </p>
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary fs-4\">Savoir Plus</button>
                    </div>
                </div>
            </article>
            <article class=\"col-md-5 card m-2\">

                <img class=\"card-img-top\" src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide_2.jpeg"), "html", null, true);
        yield "\"
                     alt=\"Image catalogue de l'ecole\">
                <div class=\"card-body\">
                    <h2 class=\"card-title fs-2 text-center fw-semibold text-uppercase my-3\">Pourquoi choisir eSchool
                        ?</h2>
                    <p class=\"card-content fs-3\"><span class=\"text-uppercase fw-bolder\">eSchool</span>, c’est une équipe
                        dédiée à votre réussite. Nous croyons fermement que l’éducation doit être adaptée aux besoins du
                        monde moderne, tout en restant accessible à toutes et à tous.</p>
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary fs-4\">Savoir Plus</button>
                    </div>
                </div>
            </article>
            <article class=\"col-md-5 card m-2 row\">
                <img class=\"card-img-top\" src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide_3.jpeg"), "html", null, true);
        yield "\"
                     alt=\"Image nos valeurs de l'ecole\">
                <div class=\"card-body col-12\">
                    <h2 class=\"card-title fs-2 text-center fw-semibold text-uppercase my-3\">Nos valeurs</h2>
                    <ul class=\"card-content list-unstyled row\">
                        <li class=\"fs-3\">
                            <div class=\"col-12 my-2\">
                                <span class=\" text-uppercase text-secondary fw-semibold fs-3\">Innovation</span>
                            </div>
                            Nous utilisons les dernières technologies pour rendre votre apprentissage plus interactif.
                        </li>
                        <li class=\"fs-3\">
                            <div class=\"col-12 my-2\">
                                <span class=\"text-uppercase text-secondary fw-semibold fs-3\">Accessibilité</span>
                            </div>
                            Apprenez à votre rythme, où que vous soyez, avec des cours 100% accéssible en ligne.
                        </li>
                        <li class=\"fs-3\">
                            <div class=\"col-12 my-2\">
                                <span class=\"text-uppercase text-secondary fw-semibold fs-3\">Excellence</span>
                            </div>
                            Nos formateurs sont des experts dans leur domaine, vous garantissant une formation de
                            qualité.
                        </li>
                    </ul>
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary fs-4\">Savoir Plus</button>
                    </div>
                </div>
            </article>
            <article class=\"col-md-5 card m-2 row\">
                <img class=\"card-img-top\" src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_du_slide_2.jpeg"), "html", null, true);
        yield "\"
                     alt=\"Image representant l'ecole\">
                <div class=\"card-body\">
                    <h2 class=\"card-title fs-2 text-uppercase fw-semibold text-center my-2\">Témoignages d’étudiants</h2>
                    <p class=\"card-text fs-2 my-4\">\"Grâce à eSchool, j’ai réussi ma reconversion professionnelle et j’ai
                        trouvé un emploi dans les 6 mois suivant ma certification !
                        L’accompagnement personnalisé et la qualité des cours ont vraiment fait la différence.
                        Aujourd’hui, je m’épanouis pleinement dans mon nouveau métier !\"
                    <div class=\"col-12 text-center \">
                        <span class=\"fw-semibold fs-2 text-uppercase\">Marie, diplômée 2024</span>
                    </div>
                    </p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section de la présentation des formations -->
    <section>
        <h2 class=\"fs-1 text-uppercase text-center fw-semibold my-3\">Nos formations Frontend et Backend</h2>
        <div class=\"row\">
            <h3 class=\"fs-2 fw-semibold my-3 text-uppercase text-primary-emphasis\">Formations Frontend</h3>
            <h4 class=\"fs-3 my-2 fw-semibold text-secondary\">Objectif de la formation :</h4>
            <p class=\"fs-4\">Maîtriser les bases du développement web pour créer des sites web interactifs et
                responsives.</p>
            <h5 class=\"fs-4 text-info-emphasis my-3 fw-semibold\">Contenu de la formation</h5>
            <div class=\"row justify-content-between\">
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprites.svg"), "html", null, true);
        yield "#html\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong
                                class=\"text-primary\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 147, $this->source); })()), "title", [], "any", false, false, false, 147), "html", null, true);
        yield " </strong>(Hypertext Markup Language)</h2>
                        ";
        // line 148
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 148, $this->source); })()), "introduction", [], "any", false, false, false, 148);
        yield "
                        <div class=\"text-center\">
                            <a href=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150)]), "html", null, true);
        yield "\" class=\"btn btn-primary fs-4\">Savoir
                                plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprites.svg"), "html", null, true);
        yield "#css\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\">
                            <strong class=\"text-primary\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 161, $this->source); })()), "title", [], "any", false, false, false, 161), "html", null, true);
        yield "
                            </strong>
                            (Cascading Style Sheets)</h2>

                        ";
        // line 165
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 165, $this->source); })()), "introduction", [], "any", false, false, false, 165);
        yield "
                        <div class=\"text-center\">
                            <a href=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
        yield "\" class=\"btn btn-primary fs-4\">Savoir
                                plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprites.svg"), "html", null, true);
        yield "#js\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong
                                class=\"text-primary\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["javascript"]) || array_key_exists("javascript", $context) ? $context["javascript"] : (function () { throw new RuntimeError('Variable "javascript" does not exist.', 178, $this->source); })()), "title", [], "any", false, false, false, 178), "html", null, true);
        yield "
                            </strong></h2>
                        ";
        // line 180
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["javascript"]) || array_key_exists("javascript", $context) ? $context["javascript"] : (function () { throw new RuntimeError('Variable "javascript" does not exist.', 180, $this->source); })()), "introduction", [], "any", false, false, false, 180);
        yield "
                        <div class=\"text-center\">
                            <a href=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["javascript"]) || array_key_exists("javascript", $context) ? $context["javascript"] : (function () { throw new RuntimeError('Variable "javascript" does not exist.', 182, $this->source); })()), "id", [], "any", false, false, false, 182)]), "html", null, true);
        yield "\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class=\"row\">
            <h3 class=\"fs-2 fw-semibold my-3 text-uppercase text-primary-emphasis\">Formations Backend</h3>
            <h4 class=\"fs-3 my-2 fw-semibold text-secondary\">Objectif de la formation :</h4>
            <p class=\"fs-4\">Comprendre, Maîtriser les fondamentaux dans le développement backend</p>
            <h5 class=\"fs-4 text-info-emphasis my-3 fw-semibold\">Contenu de la formation</h5>
            <div class=\"row justify-content-between\">
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprites.svg"), "html", null, true);
        yield "#java\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong class=\"text-primary\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["java"]) || array_key_exists("java", $context) ? $context["java"] : (function () { throw new RuntimeError('Variable "java" does not exist.', 199, $this->source); })()), "title", [], "any", false, false, false, 199), "html", null, true);
        yield " </strong></h2>
                        ";
        // line 200
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["java"]) || array_key_exists("java", $context) ? $context["java"] : (function () { throw new RuntimeError('Variable "java" does not exist.', 200, $this->source); })()), "introduction", [], "any", false, false, false, 200);
        yield "
                        <div class=\"text-center\">
                            <a href=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["java"]) || array_key_exists("java", $context) ? $context["java"] : (function () { throw new RuntimeError('Variable "java" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202)]), "html", null, true);
        yield "\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprites.svg"), "html", null, true);
        yield "#php\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong class=\"text-primary\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["php"]) || array_key_exists("php", $context) ? $context["php"] : (function () { throw new RuntimeError('Variable "php" does not exist.', 211, $this->source); })()), "title", [], "any", false, false, false, 211), "html", null, true);
        yield "</strong> de base</h2>
                        ";
        // line 212
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["php"]) || array_key_exists("php", $context) ? $context["php"] : (function () { throw new RuntimeError('Variable "php" does not exist.', 212, $this->source); })()), "introduction", [], "any", false, false, false, 212);
        yield "
                        <div class=\"text-center\">
                            <a href=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["php"]) || array_key_exists("php", $context) ? $context["php"] : (function () { throw new RuntimeError('Variable "php" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214)]), "html", null, true);
        yield "\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprites.svg"), "html", null, true);
        yield "#python\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong class=\"text-primary\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["python"]) || array_key_exists("python", $context) ? $context["python"] : (function () { throw new RuntimeError('Variable "python" does not exist.', 223, $this->source); })()), "title", [], "any", false, false, false, 223), "html", null, true);
        yield "</strong></h2>
                        <ul class=\"list-unstyled\">
                            <li class=\"fs-2 text-secondary-emphasis\">Python de base</li>
                            <li class=\"fs-2 text-secondary-emphasis\">Frameworks Python</li>
                            <li class=\"fs-2 text-secondary-emphasis\">Bibliothèques Python</li>
                        </ul>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["python"]) || array_key_exists("python", $context) ? $context["python"] : (function () { throw new RuntimeError('Variable "python" does not exist.', 230, $this->source); })()), "id", [], "any", false, false, false, 230)]), "html", null, true);
        yield "\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Section géolocalisation -->
    <section class=\"row\">
        <h2 class=\"fs-1 text-uppercase text-center fw-semibold my-3\">Notre Localisation</h2>
        <iframe class=\"w-100 shadow p-3 mb-5  rounded-5 overflow-hidden\"
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999906318043!2d2.293308315674779!3d48.85837007928774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc7f5f3406f%3A0xa17b6e9c1613b9b!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1714123456789!5m2!1sfr!2sfr\"
                width=\"600\"
                height=\"450\"
                style=\"border:0;\"
                allowfullscreen=\"\"
                loading=\"lazy\"
                referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </section>
    <!-- Section de contact -->
    <section class=\"container mt-5\" id=\"contact\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"fs-1 text-uppercase text-center fw-semibold my-4\">Contactez-Nous</h2>
            </div>
            <form action>
                <div class=\"mb-3\">
                    <label class=\"form-label fs-1\" for=\"email\">Email</label>
                    <input class=\"form-control p-3 fs-1\" type=\"email\" id=\"email\" placeholder=\"Entrez votre mail\"
                           required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label fs-1\" for=\"sujet\">Sujet</label>
                    <input class=\"form-control py-3 fs-1\" type=\"text\" id=\"sujet\" placeholder=\"Entrez votre sujet\"
                           required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label fs-1\" for=\"message\">Message</label>
                    <textarea class=\"form-control\" name=\"message\" id=\"message\" cols=\"30\" rows=\"10\"></textarea>
                </div>
                <div class=\"mb-3 form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                    <label class=\"form-check-label fs-1\" for=\"exampleCheck1\">J'accpetes de les conditions rgpd</label>
                </div>
                <div class=\"text-center\">
                    <button class=\"btn btn-primary p-2 m-2 fs-2\">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    <div class=\"\">
        <a href=\"#\" class=\"position-fixed bottom-0 end-0 m-4\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"50\" fill=\"lightblue\"
                 class=\"bi bi-arrow-up-circle-fill\" viewBox=\"0 0 16 16\">
                <path
                    d=\"M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z\"/>
            </svg>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  413 => 230,  403 => 223,  397 => 220,  388 => 214,  383 => 212,  379 => 211,  373 => 208,  364 => 202,  359 => 200,  355 => 199,  349 => 196,  332 => 182,  327 => 180,  322 => 178,  315 => 174,  305 => 167,  300 => 165,  293 => 161,  286 => 157,  276 => 150,  271 => 148,  267 => 147,  260 => 143,  228 => 114,  194 => 83,  177 => 69,  158 => 53,  129 => 27,  118 => 19,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{# {% include 'images/sprites.svg' %} #}
{% block title %}page d'accueil{% endblock %}

{% block body %}
    <section class=\"row\">
        <h1 class=\"col-12 text-center fs-1 fw-bolder my-2 text-uppercase\">E-school</h1>
        <div class=\"carousel slide col-12\" id=\"carousel\">
            <article class=\"carousel-inner\">
                <figure class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"{{ asset('images/image_du_slide.jpeg') }}\"
                         alt=\"Image de l'école\">
                    <figcaption class=\"carousel-caption\">
                        <h2 class=\"fs-1\">E-school</h2>
                        <p>Nos actions</p>
                    </figcaption>
                </figure>
                <figure class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"{{ asset('images/image_du_slide_2.jpeg') }}\"
                         alt=\"Image de l'école\">
                    <figcaption class=\"carousel-caption d-none d-md-block\">
                        <h2 class=\"fs-1\">E-school</h2>
                        <p>Nos actions</p>
                    </figcaption>
                </figure>
                <figure class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"{{ asset('images/image_du_slide_3.jpeg') }}\"
                         alt=\"Image de l'école\">
                    <figcaption class=\"carousel-caption\">
                        <h2 class=\"fs-1\">E-school</h2>
                        <p>Nos actions</p>
                    </figcaption>
                </figure>
            </article>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel\"
                    data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel\"
                    data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </section>

    <!-- Section de la présentation de l'école -->
    <section class=\"row\">
        <h2 class=\"text-center text-uppercase fs-1 my-3 fw-semibold\">🏫 Présentation</h2>
        <div class=\"row justify-content-between\">
            <article class=\"col-md-5 card m-2\">
                <img class=\"card-img-top\" src=\"{{ asset('images/image_du_slide_2.jpeg') }}\"
                     alt=\"Image de representation de l'ecole\">
                <div class=\"card-body\">
                    <h2 class=\"card-title fs-2 text-center fw-semibold text-uppercase my-3\">Votre avenir commence ici,
                        avec eSchool.</h2>
                    <p class=\"card-content fs-3\">Chez <span class=\"text-uppercase fw-bolder\">eSchool</span>, nous
                        croyons que l’apprentissage doit être accessible, efficace et connecté au monde d’aujourd’hui.
                        C’est pourquoi nous proposons des formations en ligne conçues pour s’adapter à votre rythme.
                    </p>
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary fs-4\">Savoir Plus</button>
                    </div>
                </div>
            </article>
            <article class=\"col-md-5 card m-2\">

                <img class=\"card-img-top\" src=\"{{ asset('images/image_du_slide_2.jpeg') }}\"
                     alt=\"Image catalogue de l'ecole\">
                <div class=\"card-body\">
                    <h2 class=\"card-title fs-2 text-center fw-semibold text-uppercase my-3\">Pourquoi choisir eSchool
                        ?</h2>
                    <p class=\"card-content fs-3\"><span class=\"text-uppercase fw-bolder\">eSchool</span>, c’est une équipe
                        dédiée à votre réussite. Nous croyons fermement que l’éducation doit être adaptée aux besoins du
                        monde moderne, tout en restant accessible à toutes et à tous.</p>
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary fs-4\">Savoir Plus</button>
                    </div>
                </div>
            </article>
            <article class=\"col-md-5 card m-2 row\">
                <img class=\"card-img-top\" src=\"{{ asset('images/image_du_slide_3.jpeg') }}\"
                     alt=\"Image nos valeurs de l'ecole\">
                <div class=\"card-body col-12\">
                    <h2 class=\"card-title fs-2 text-center fw-semibold text-uppercase my-3\">Nos valeurs</h2>
                    <ul class=\"card-content list-unstyled row\">
                        <li class=\"fs-3\">
                            <div class=\"col-12 my-2\">
                                <span class=\" text-uppercase text-secondary fw-semibold fs-3\">Innovation</span>
                            </div>
                            Nous utilisons les dernières technologies pour rendre votre apprentissage plus interactif.
                        </li>
                        <li class=\"fs-3\">
                            <div class=\"col-12 my-2\">
                                <span class=\"text-uppercase text-secondary fw-semibold fs-3\">Accessibilité</span>
                            </div>
                            Apprenez à votre rythme, où que vous soyez, avec des cours 100% accéssible en ligne.
                        </li>
                        <li class=\"fs-3\">
                            <div class=\"col-12 my-2\">
                                <span class=\"text-uppercase text-secondary fw-semibold fs-3\">Excellence</span>
                            </div>
                            Nos formateurs sont des experts dans leur domaine, vous garantissant une formation de
                            qualité.
                        </li>
                    </ul>
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary fs-4\">Savoir Plus</button>
                    </div>
                </div>
            </article>
            <article class=\"col-md-5 card m-2 row\">
                <img class=\"card-img-top\" src=\"{{ asset('images/image_du_slide_2.jpeg') }}\"
                     alt=\"Image representant l'ecole\">
                <div class=\"card-body\">
                    <h2 class=\"card-title fs-2 text-uppercase fw-semibold text-center my-2\">Témoignages d’étudiants</h2>
                    <p class=\"card-text fs-2 my-4\">\"Grâce à eSchool, j’ai réussi ma reconversion professionnelle et j’ai
                        trouvé un emploi dans les 6 mois suivant ma certification !
                        L’accompagnement personnalisé et la qualité des cours ont vraiment fait la différence.
                        Aujourd’hui, je m’épanouis pleinement dans mon nouveau métier !\"
                    <div class=\"col-12 text-center \">
                        <span class=\"fw-semibold fs-2 text-uppercase\">Marie, diplômée 2024</span>
                    </div>
                    </p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section de la présentation des formations -->
    <section>
        <h2 class=\"fs-1 text-uppercase text-center fw-semibold my-3\">Nos formations Frontend et Backend</h2>
        <div class=\"row\">
            <h3 class=\"fs-2 fw-semibold my-3 text-uppercase text-primary-emphasis\">Formations Frontend</h3>
            <h4 class=\"fs-3 my-2 fw-semibold text-secondary\">Objectif de la formation :</h4>
            <p class=\"fs-4\">Maîtriser les bases du développement web pour créer des sites web interactifs et
                responsives.</p>
            <h5 class=\"fs-4 text-info-emphasis my-3 fw-semibold\">Contenu de la formation</h5>
            <div class=\"row justify-content-between\">
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"{{ asset('images/sprites.svg') }}#html\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong
                                class=\"text-primary\">{{ html.title }} </strong>(Hypertext Markup Language)</h2>
                        {{ html.introduction | raw }}
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_formation', {id:html.id}) }}\" class=\"btn btn-primary fs-4\">Savoir
                                plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"{{ asset('images/sprites.svg') }}#css\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\">
                            <strong class=\"text-primary\">{{ css.title }}
                            </strong>
                            (Cascading Style Sheets)</h2>

                        {{ css.introduction | raw }}
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_formation', {id:css.id}) }}\" class=\"btn btn-primary fs-4\">Savoir
                                plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"{{ asset('images/sprites.svg') }}#js\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong
                                class=\"text-primary\">{{ javascript.title }}
                            </strong></h2>
                        {{ javascript.introduction | raw }}
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_formation', {id:javascript.id})}}\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class=\"row\">
            <h3 class=\"fs-2 fw-semibold my-3 text-uppercase text-primary-emphasis\">Formations Backend</h3>
            <h4 class=\"fs-3 my-2 fw-semibold text-secondary\">Objectif de la formation :</h4>
            <p class=\"fs-4\">Comprendre, Maîtriser les fondamentaux dans le développement backend</p>
            <h5 class=\"fs-4 text-info-emphasis my-3 fw-semibold\">Contenu de la formation</h5>
            <div class=\"row justify-content-between\">
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"{{ asset('images/sprites.svg') }}#java\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong class=\"text-primary\">{{ java.title }} </strong></h2>
                        {{ java.introduction | raw }}
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_formation', {id:java.id})}}\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"{{ asset('images/sprites.svg') }}#php\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong class=\"text-primary\">{{ php.title }}</strong> de base</h2>
                        {{ php.introduction | raw }}
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_formation', {id:php.id})}}\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
                <article class=\"col-md card m-2\">
                    <svg class=\"m-auto my-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"150px\" height=\"150px\">
                        <use xlink:href=\"{{ asset('images/sprites.svg') }}#python\"></use>
                    </svg>
                    <div class=\"card-body\">
                        <h2 class=\"card-title fs-1 text-uppercase fw-bolder\"><strong class=\"text-primary\">{{ python.title }}</strong></h2>
                        <ul class=\"list-unstyled\">
                            <li class=\"fs-2 text-secondary-emphasis\">Python de base</li>
                            <li class=\"fs-2 text-secondary-emphasis\">Frameworks Python</li>
                            <li class=\"fs-2 text-secondary-emphasis\">Bibliothèques Python</li>
                        </ul>
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_formation', {id:python.id})}}\" class=\"btn btn-primary fs-4\">Savoir plus</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Section géolocalisation -->
    <section class=\"row\">
        <h2 class=\"fs-1 text-uppercase text-center fw-semibold my-3\">Notre Localisation</h2>
        <iframe class=\"w-100 shadow p-3 mb-5  rounded-5 overflow-hidden\"
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999906318043!2d2.293308315674779!3d48.85837007928774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc7f5f3406f%3A0xa17b6e9c1613b9b!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1714123456789!5m2!1sfr!2sfr\"
                width=\"600\"
                height=\"450\"
                style=\"border:0;\"
                allowfullscreen=\"\"
                loading=\"lazy\"
                referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </section>
    <!-- Section de contact -->
    <section class=\"container mt-5\" id=\"contact\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"fs-1 text-uppercase text-center fw-semibold my-4\">Contactez-Nous</h2>
            </div>
            <form action>
                <div class=\"mb-3\">
                    <label class=\"form-label fs-1\" for=\"email\">Email</label>
                    <input class=\"form-control p-3 fs-1\" type=\"email\" id=\"email\" placeholder=\"Entrez votre mail\"
                           required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label fs-1\" for=\"sujet\">Sujet</label>
                    <input class=\"form-control py-3 fs-1\" type=\"text\" id=\"sujet\" placeholder=\"Entrez votre sujet\"
                           required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label fs-1\" for=\"message\">Message</label>
                    <textarea class=\"form-control\" name=\"message\" id=\"message\" cols=\"30\" rows=\"10\"></textarea>
                </div>
                <div class=\"mb-3 form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                    <label class=\"form-check-label fs-1\" for=\"exampleCheck1\">J'accpetes de les conditions rgpd</label>
                </div>
                <div class=\"text-center\">
                    <button class=\"btn btn-primary p-2 m-2 fs-2\">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    <div class=\"\">
        <a href=\"#\" class=\"position-fixed bottom-0 end-0 m-4\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"50\" fill=\"lightblue\"
                 class=\"bi bi-arrow-up-circle-fill\" viewBox=\"0 0 16 16\">
                <path
                    d=\"M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z\"/>
            </svg>
        </a>
    </div>
{% endblock %}
", "home/index.html.twig", "/var/www/html/templates/home/index.html.twig");
    }
}
