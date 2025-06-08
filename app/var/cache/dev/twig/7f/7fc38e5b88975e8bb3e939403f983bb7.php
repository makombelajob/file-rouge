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

/* profile/index.html.twig */
class __TwigTemplate_954b98cb69c74f335f621c319e64e7eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "Hello ProfileController!";
        
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
        yield "    <main id=\"nos-formation\" class=\"row\">
        <section class=\"col-12 mt-4\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 9
            yield "                <article class=\"col-12 alert alert-success\">
                    <div class=\"row\">
                        <h1 class=\"text-center pb-5\">Formation en développement <span
                                class=\"text-uppercase fs-1\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "title", [], "any", false, false, false, 12), "html", null, true);
            yield "</span></h1>
                    </div>
                    <div class=\"row flex-column flex-md-row shadow-sm mb-4\">
                        <div class=\"col-12 col-md-4\">
                            <h2 class=\"text-center pb-5\">Détails de la formation</h2>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">Durée : ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 18), "html", null, true);
            yield " Heures</li>
                                <li class=\"list-group-item\">Langues : Français</li>
                                <li class=\"list-group-item\">Contenu : ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "content", [], "any", false, false, false, 20), "html", null, true);
            yield " exercices interactifs</li>
                                <li class=\"list-group-item\">Accès : Mobile & PC</li>
                                <li class=\"list-group-item\">Prix : ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "price", [], "any", false, false, false, 22), "html", null, true);
            yield " euros</li>
                                <li class=\"list-group-item\">Certification incluse</li>
                            </ul>
                            <div class=\"pt-4 mb-4 text-center\">
                                <a href=\"\" type=\"submit\" class=\"btn btn-secondary\">Achéter
                                    maintenant</a>
                            </div>
                        </div>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </section>
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
        return "profile/index.html.twig";
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
        return array (  149 => 33,  132 => 22,  127 => 20,  122 => 18,  113 => 12,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfileController!{% endblock %}

{% block body %}
    <main id=\"nos-formation\" class=\"row\">
        <section class=\"col-12 mt-4\">
            {% for cours in courses %}
                <article class=\"col-12 alert alert-success\">
                    <div class=\"row\">
                        <h1 class=\"text-center pb-5\">Formation en développement <span
                                class=\"text-uppercase fs-1\">{{ cours.title }}</span></h1>
                    </div>
                    <div class=\"row flex-column flex-md-row shadow-sm mb-4\">
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
                                <a href=\"\" type=\"submit\" class=\"btn btn-secondary\">Achéter
                                    maintenant</a>
                            </div>
                        </div>
                    </div>
                </article>
            {% endfor %}
        </section>
    </main>
{% endblock %}
", "profile/index.html.twig", "/home/symfony_test/Documents/e-school-original/app/templates/profile/index.html.twig");
    }
}
