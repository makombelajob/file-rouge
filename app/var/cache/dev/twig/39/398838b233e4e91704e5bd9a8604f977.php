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
<main >

\t<section  id=\"formation\" class=\"container mt-4 p-4 shadow-sm\">
\t\t<h1 class=\"text-center pb-5\">Formation en développement ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>

<p class=\"text-center pb-5\">Cette formation vous permet de maîtriser le JavaScript pour rendre vos sites interactifs et dynamiques.</p>

\t\t<div class=\"row flex-column flex-md-row  mb-4\">
\t\t\t

\t\t\t<div class=\"col-12 col-md-8 mb-4 py-5\">
\t\t\t\t<img src=\"./assets/js-example.jpg\" class=\"img-fluid rounded\" alt=\"Exemple de formation JavaScript\">
\t\t\t</div>
\t\t\t<div id=\"details\"  class=\"col-12 col-md-4\">
\t\t\t\t<h2 class=\"text-start pb-2\">Détails de la formation</h2>
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-clock me-2\" style=\"color: #007bff; font-size: 1.5rem;\"></i>
\t\t\t\tDurée : ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 25, $this->source); })()), "duration", [], "any", false, false, false, 25), "html", null, true);
        yield " Heures
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-translate me-2\" style=\"color: #28a745; font-size: 1.5rem;\"></i>
\t\t\t\tLangues : Français
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-book me-2\" style=\"color: #ffc107; font-size: 1.5rem;\"></i>
\t\t\t\tContenu : ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 33, $this->source); })()), "content", [], "any", false, false, false, 33), "html", null, true);
        yield " exercices pratiques
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-currency-euro me-2\" style=\"color: #e01cc3; font-size: 1.5rem;\"></i>
\t\t\t\tPrix : <strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), "html", null, true);
        yield "</strong> Euros
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t<i class=\"bi bi-phone me-2\" style=\"color: #007bff; font-size: 1.5rem;\"></i> Accès : Mobile & PC
\t\t    </li>
   \t\t\t <li class=\"list-group-item\">
        \t<i class=\"bi bi-award me-2\" style=\"color: #28a745; font-size: 1.5rem;\"></i> Certification incluse
    \t\t</li>
\t\t</ul>


\t\t\t\t<div class=\"mt-4 text-center\">
\t\t\t\t\t<a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn p-2\" type=\"submit\">Inscrivez-vous !</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container mt-4 shadow-sm\">
\t\t";
        // line 56
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56);
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
        return array (  167 => 56,  157 => 49,  142 => 37,  135 => 33,  124 => 25,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FormationController!{% endblock %}

{% block body %}

<main >

\t<section  id=\"formation\" class=\"container mt-4 p-4 shadow-sm\">
\t\t<h1 class=\"text-center pb-5\">Formation en développement {{ cours.title }}</h1>

<p class=\"text-center pb-5\">Cette formation vous permet de maîtriser le JavaScript pour rendre vos sites interactifs et dynamiques.</p>

\t\t<div class=\"row flex-column flex-md-row  mb-4\">
\t\t\t

\t\t\t<div class=\"col-12 col-md-8 mb-4 py-5\">
\t\t\t\t<img src=\"./assets/js-example.jpg\" class=\"img-fluid rounded\" alt=\"Exemple de formation JavaScript\">
\t\t\t</div>
\t\t\t<div id=\"details\"  class=\"col-12 col-md-4\">
\t\t\t\t<h2 class=\"text-start pb-2\">Détails de la formation</h2>
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-clock me-2\" style=\"color: #007bff; font-size: 1.5rem;\"></i>
\t\t\t\tDurée : {{ cours.duration }} Heures
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-translate me-2\" style=\"color: #28a745; font-size: 1.5rem;\"></i>
\t\t\t\tLangues : Français
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-book me-2\" style=\"color: #ffc107; font-size: 1.5rem;\"></i>
\t\t\t\tContenu : {{ cours.content }} exercices pratiques
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<i class=\"bi bi-currency-euro me-2\" style=\"color: #e01cc3; font-size: 1.5rem;\"></i>
\t\t\t\tPrix : <strong>{{ cours.price }}</strong> Euros
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t<i class=\"bi bi-phone me-2\" style=\"color: #007bff; font-size: 1.5rem;\"></i> Accès : Mobile & PC
\t\t    </li>
   \t\t\t <li class=\"list-group-item\">
        \t<i class=\"bi bi-award me-2\" style=\"color: #28a745; font-size: 1.5rem;\"></i> Certification incluse
    \t\t</li>
\t\t</ul>


\t\t\t\t<div class=\"mt-4 text-center\">
\t\t\t\t\t<a href=\"{{ path('app_register')}}\" class=\"btn p-2\" type=\"submit\">Inscrivez-vous !</a>
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
