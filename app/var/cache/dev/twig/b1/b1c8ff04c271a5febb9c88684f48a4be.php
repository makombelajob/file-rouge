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

/* _partials/_header.html.twig */
class __TwigTemplate_af6046114cec7301e72e3a95e0487736 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_header.html.twig"));

        // line 1
        yield "<header class=\"container\">
    <div class=\"row align-items-center\">
        <!-- Logo -->
        <div class=\"col-3 col-lg-2\">
            <a href=\"/\">
                <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo de e-school\" class=\"img-fluid\">
            </a>
        </div>
        <!-- Barre de recherche (visible en mobile + desktop) -->
        <div class=\"col-6 col-lg-2\">
            <form class=\"d-flex\">
                <input class=\"form-control me-2\" type=\"search\" name=\"search\" placeholder=\"Recherche...\">
                <button class=\"btn btn-primary\" type=\"submit\">🔍</button>
            </form>
        </div>

        <!-- Burger menu (mobile only) -->
        <div class=\"col-3 d-lg-none text-end\">
            <button id=\"burger\" class=\"btn border-0 bg-transparent\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#menu\">
                <!-- SVG burger icon -->
                <svg width=\"40\" height=\"40\" viewBox=\"0 0 50 50\" xmlns=\"http://www.w3.org/2000/svg\">
                    <rect x=\"5\" y=\"5\" width=\"40\" height=\"40\" rx=\"8\" ry=\"8\" fill=\"white\"/>
                    <line x1=\"15\" y1=\"18\" x2=\"35\" y2=\"18\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\"/>
                    <line x1=\"15\" y1=\"25\" x2=\"35\" y2=\"25\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\"/>
                    <line x1=\"15\" y1=\"32\" x2=\"35\" y2=\"32\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\"/>
                </svg>
            </button>
        </div>

        <!-- Menu complet (mobile collapsé, desktop affiché) -->
        <div class=\"position-relative w-100\">
            <div
                class=\" position-absolute top-0  w-100 bg-white z-3 collapse d-lg-flex justify-content-center mt-1 mt-lg-0 d-lg-none\"
                id=\"menu\">
                <ul class=\"list-unstyled d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3\">
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"/\">Accueil</a></li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"catalogue.php\">Catalogue</a></li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
                    </li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Signup</a>
                    </li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"/#contact\">Contact</a></li>
                </ul>
                <div class=\"position-absolute top-0 left-0 w-100\">
                    <button type=\"button\" data-bs-toggle=\"collapse\" class=\"btn-close\" aria-label=\"Close\"
                            data-bs-target=\"#menu\"></button>
                </div>
            </div>
        </div>
    </div>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_header.html.twig";
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
        return array (  96 => 41,  91 => 39,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"container\">
    <div class=\"row align-items-center\">
        <!-- Logo -->
        <div class=\"col-3 col-lg-2\">
            <a href=\"/\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo de e-school\" class=\"img-fluid\">
            </a>
        </div>
        <!-- Barre de recherche (visible en mobile + desktop) -->
        <div class=\"col-6 col-lg-2\">
            <form class=\"d-flex\">
                <input class=\"form-control me-2\" type=\"search\" name=\"search\" placeholder=\"Recherche...\">
                <button class=\"btn btn-primary\" type=\"submit\">🔍</button>
            </form>
        </div>

        <!-- Burger menu (mobile only) -->
        <div class=\"col-3 d-lg-none text-end\">
            <button id=\"burger\" class=\"btn border-0 bg-transparent\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#menu\">
                <!-- SVG burger icon -->
                <svg width=\"40\" height=\"40\" viewBox=\"0 0 50 50\" xmlns=\"http://www.w3.org/2000/svg\">
                    <rect x=\"5\" y=\"5\" width=\"40\" height=\"40\" rx=\"8\" ry=\"8\" fill=\"white\"/>
                    <line x1=\"15\" y1=\"18\" x2=\"35\" y2=\"18\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\"/>
                    <line x1=\"15\" y1=\"25\" x2=\"35\" y2=\"25\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\"/>
                    <line x1=\"15\" y1=\"32\" x2=\"35\" y2=\"32\" stroke=\"black\" stroke-width=\"3\" stroke-linecap=\"round\"/>
                </svg>
            </button>
        </div>

        <!-- Menu complet (mobile collapsé, desktop affiché) -->
        <div class=\"position-relative w-100\">
            <div
                class=\" position-absolute top-0  w-100 bg-white z-3 collapse d-lg-flex justify-content-center mt-1 mt-lg-0 d-lg-none\"
                id=\"menu\">
                <ul class=\"list-unstyled d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3\">
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"/\">Accueil</a></li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"catalogue.php\">Catalogue</a></li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"{{ path('app_login') }}\">Login</a>
                    </li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"{{ path('app_register') }}\">Signup</a>
                    </li>
                    <li><a class=\"fs-4 text-decoration-none text-secondary\" href=\"/#contact\">Contact</a></li>
                </ul>
                <div class=\"position-absolute top-0 left-0 w-100\">
                    <button type=\"button\" data-bs-toggle=\"collapse\" class=\"btn-close\" aria-label=\"Close\"
                            data-bs-target=\"#menu\"></button>
                </div>
            </div>
        </div>
    </div>
</header>
", "_partials/_header.html.twig", "/var/www/html/templates/_partials/_header.html.twig");
    }
}
