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

/* formation/index.html.twig */
class __TwigTemplate_93eccefee1408127ef6b97f0dd85ad3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

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

        yield "Hello FormationController!";
        
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
        yield "
<main id=\"formation\">
\t<section class=\"container mt-4\">
\t\t<h1 class=\"text-center pb-5\">Formation en développement <strong class=\"text-primary\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield " </strong></h1>
\t\t<div class=\"row flex-column flex-md-row shadow-sm mb-4\">
\t\t\t<p class=\"text-center pb-5\">Cette formation vous permet de maîtriser le JavaScript pour rendre vos sites interactifs et dynamiques.</p>

\t\t\t<div class=\"col-12 col-md-8 mb-4\">
\t\t\t\t<img src=\"./assets/js-example.jpg\" class=\"img-fluid rounded\" alt=\"Exemple de formation JavaScript\">
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<h2 class=\"text-center pb-5\">Détails de la formation</h2>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">Durée : ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 19, $this->source); })()), "duration", [], "any", false, false, false, 19), "html", null, true);
        yield " Heures</li>
\t\t\t\t\t<li class=\"list-group-item\">Langues : Français</li>
\t\t\t\t\t<li class=\"list-group-item\">Contenu : ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), "html", null, true);
        yield " exercices pratiques</li>
\t\t\t\t\t<li class=\"list-group-item\">Price: <strong>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 22, $this->source); })()), "price", [], "any", false, false, false, 22), "html", null, true);
        yield "</strong> Euros</li>
\t\t\t\t\t<li class=\"list-group-item\">Accès : Mobile & PC</li>
\t\t\t\t\t<li class=\"list-group-item\">Certification incluse</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"my-3 text-center\">
\t\t\t\t\t<a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-primary\" type=\"submit\">Inscrivez-vous !</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container mt-4 shadow-sm\">
\t\t";
        // line 34
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34);
        yield "
\t</div>
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
        return "formation/index.html.twig";
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
        return array (  145 => 34,  135 => 27,  127 => 22,  123 => 21,  118 => 19,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FormationController!{% endblock %}

{% block body %}

<main id=\"formation\">
\t<section class=\"container mt-4\">
\t\t<h1 class=\"text-center pb-5\">Formation en développement <strong class=\"text-primary\">{{ cours.title }} </strong></h1>
\t\t<div class=\"row flex-column flex-md-row shadow-sm mb-4\">
\t\t\t<p class=\"text-center pb-5\">Cette formation vous permet de maîtriser le JavaScript pour rendre vos sites interactifs et dynamiques.</p>

\t\t\t<div class=\"col-12 col-md-8 mb-4\">
\t\t\t\t<img src=\"./assets/js-example.jpg\" class=\"img-fluid rounded\" alt=\"Exemple de formation JavaScript\">
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t<h2 class=\"text-center pb-5\">Détails de la formation</h2>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">Durée : {{ cours.duration }} Heures</li>
\t\t\t\t\t<li class=\"list-group-item\">Langues : Français</li>
\t\t\t\t\t<li class=\"list-group-item\">Contenu : {{ cours.content }} exercices pratiques</li>
\t\t\t\t\t<li class=\"list-group-item\">Price: <strong>{{ cours.price }}</strong> Euros</li>
\t\t\t\t\t<li class=\"list-group-item\">Accès : Mobile & PC</li>
\t\t\t\t\t<li class=\"list-group-item\">Certification incluse</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"my-3 text-center\">
\t\t\t\t\t<a href=\"{{ path('app_register')}}\" class=\"btn btn-primary\" type=\"submit\">Inscrivez-vous !</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container mt-4 shadow-sm\">
\t\t{{ cours.description | raw }}
\t</div>
</main>

{% endblock %}
", "formation/index.html.twig", "/var/www/html/templates/formation/index.html.twig");
    }
}
