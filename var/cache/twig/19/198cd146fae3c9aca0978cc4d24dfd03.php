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

/* film/readFilm.html.twig */
class __TwigTemplate_627e3d5859481faa6d391aee1452ee2d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/readFilm.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Lecture d'un film";
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
        yield "    <main class=\"container mt-4\">
        <table class=\"table table-bordered table-striped table-responsive table-hover\">
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
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                    <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                    <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                    <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                    <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "createdAt", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "updatedAt", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                    <td>";
        // line 29
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 29)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                </tr>
            </tbody>
        </table>
    </main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/readFilm.html.twig";
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
        return array (  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Lecture d'un film{% endblock %}

{% block content %}
    <main class=\"container mt-4\">
        <table class=\"table table-bordered table-striped table-responsive table-hover\">
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
    </main>
{% endblock %}", "film/readFilm.html.twig", "/var/www/filmoteca/src/views/film/readFilm.html.twig");
    }
}
