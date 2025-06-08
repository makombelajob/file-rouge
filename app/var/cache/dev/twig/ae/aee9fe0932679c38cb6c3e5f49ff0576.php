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

/* courses/index.html.twig */
class __TwigTemplate_dabdfed30e87571f57e4b4bd1ae005a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courses/index.html.twig"));

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

        yield "Hello CoursesController!";
        
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
        yield "    <main id=\"formation\" class=\"row\">
        <section class=\"col-12 mt-4\">
            <div class=\"row\">
                <h1 class=\"text-center pb-5\">Formation en développement <span
                        class=\"text-uppercase fs-1\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</span></h1>
            </div>
            <div class=\"row flex-column flex-md-row shadow-sm mb-4\">
                <p class=\"text-center pb-5\">Cette formation vous permet d'acquérir les bases indispensables à la
                    création de pages web modernes.</p>

                <div class=\"col-12 col-md-8 mb-4\">
                    <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/formations/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17)) . "_image.png")), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Exemple de formation\">
                </div>
                <div class=\"col-12 col-md-4\">
                    <h2 class=\"text-center pb-5\">Détails de la formation</h2>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">Durée : ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 22, $this->source); })()), "duration", [], "any", false, false, false, 22), "html", null, true);
        yield " Heures</li>
                        <li class=\"list-group-item\">Langues : Français</li>
                        <li class=\"list-group-item\">Contenu : ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), "html", null, true);
        yield " exercices interactifs</li>
                        <li class=\"list-group-item\">Accès : Mobile & PC</li>
                        <li class=\"list-group-item\">Prix : ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "html", null, true);
        yield " euros</li>
                        <li class=\"list-group-item\">Certification incluse</li>
                    </ul>
                    <div class=\"pt-4 mb-4 text-center\">
                        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" type=\"submit\" class=\"btn btn-secondary\">Inscrivez-vous !</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
        return "courses/index.html.twig";
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
        return array (  141 => 30,  134 => 26,  129 => 24,  124 => 22,  116 => 17,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CoursesController!{% endblock %}

{% block body %}
    <main id=\"formation\" class=\"row\">
        <section class=\"col-12 mt-4\">
            <div class=\"row\">
                <h1 class=\"text-center pb-5\">Formation en développement <span
                        class=\"text-uppercase fs-1\">{{ cours.title }}</span></h1>
            </div>
            <div class=\"row flex-column flex-md-row shadow-sm mb-4\">
                <p class=\"text-center pb-5\">Cette formation vous permet d'acquérir les bases indispensables à la
                    création de pages web modernes.</p>

                <div class=\"col-12 col-md-8 mb-4\">
                    <img src=\"{{ asset('images/formations/' ~ cours.title  ~ '_image.png') }}\" class=\"img-fluid rounded\" alt=\"Exemple de formation\">
                </div>
                <div class=\"col-12 col-md-4\">
                    <h2 class=\"text-center pb-5\">Détails de la formation</h2>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">Durée : {{ cours.duration }} Heures</li>
                        <li class=\"list-group-item\">Langues : Français</li>
                        <li class=\"list-group-item\">Contenu : {{ cours.content }} exercices interactifs</li>
                        <li class=\"list-group-item\">Accès : Mobile & PC</li>
                        <li class=\"list-group-item\">Prix : {{ cours.price }} euros</li>
                        <li class=\"list-group-item\">Certification incluse</li>
                    </ul>
                    <div class=\"pt-4 mb-4 text-center\">
                        <a href=\"{{ path('app_register') }}\" type=\"submit\" class=\"btn btn-secondary\">Inscrivez-vous !</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
{% endblock %}
", "courses/index.html.twig", "/home/symfony_test/Documents/e-school-original/app/templates/courses/index.html.twig");
    }
}
