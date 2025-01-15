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

/* film/deleteFilm.html.twig */
class __TwigTemplate_fef5d0f370036b9c847720c2536a5a44 extends Template
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
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/deleteFilm.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Suppression d'un film";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container mt-5\">
        <h2 class=\"text-center mb-4\">Suppression d'un film</h2>
        <p class=\"text-center\">Êtes-vous sûr de vouloir supprimer ce film ? Cette action est irréversible.</p>
        
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-danger text-white\">
                        <h5 class=\"card-title mb-0\">Détails du film</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered table-striped table-hover\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th scope=\"col\">Title</th>
                                    <th scope=\"col\">Year</th>
                                    <th scope=\"col\">Type</th>
                                    <th scope=\"col\">Director</th>
                                    <th scope=\"col\">Synopsis</th>
                                    <th scope=\"col\">Created At</th>
                                    <th scope=\"col\">Updated At</th>
                                    <th scope=\"col\">Deleted At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                                    <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                                    <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                                    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                                    <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "updatedAt", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                                    <td>";
        // line 39
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 39)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class=\"mt-4 text-center\">
                    <form method=\"POST\" action=\"/films/delete\">
                        <button type=\"submit\" class=\"btn btn-lg btn-danger\">
                            <i class=\"bi bi-trash-fill\"></i> Supprimer le film
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/deleteFilm.html.twig";
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
        return array (  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Suppression d'un film{% endblock %}

{% block content %}
    <div class=\"container mt-5\">
        <h2 class=\"text-center mb-4\">Suppression d'un film</h2>
        <p class=\"text-center\">Êtes-vous sûr de vouloir supprimer ce film ? Cette action est irréversible.</p>
        
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-danger text-white\">
                        <h5 class=\"card-title mb-0\">Détails du film</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-bordered table-striped table-hover\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th scope=\"col\">Title</th>
                                    <th scope=\"col\">Year</th>
                                    <th scope=\"col\">Type</th>
                                    <th scope=\"col\">Director</th>
                                    <th scope=\"col\">Synopsis</th>
                                    <th scope=\"col\">Created At</th>
                                    <th scope=\"col\">Updated At</th>
                                    <th scope=\"col\">Deleted At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ film.title }}</td>
                                    <td>{{ film.year }}</td>
                                    <td>{{ film.type }}</td>
                                    <td>{{ film.director }}</td>
                                    <td>{{ film.synopsis }}</td>
                                    <td>{{ film.createdAt|date('Y-m-d H:i:s') }}</td>
                                    <td>{{ film.updatedAt|date('Y-m-d H:i:s') }}</td>
                                    <td>{{ film.deletedAt ? film.deletedAt|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class=\"mt-4 text-center\">
                    <form method=\"POST\" action=\"/films/delete\">
                        <button type=\"submit\" class=\"btn btn-lg btn-danger\">
                            <i class=\"bi bi-trash-fill\"></i> Supprimer le film
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "film/deleteFilm.html.twig", "/var/www/filmoteca/src/views/film/deleteFilm.html.twig");
    }
}
