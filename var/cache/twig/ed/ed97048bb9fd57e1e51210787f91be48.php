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

/* film/updateFilm.html.twig */
class __TwigTemplate_ca4ec5659587cba62a53dc3b06f8f9a7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/updateFilm.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modification d'un film";
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
        yield "    <p>Voulez-vous modifier ce film ?</p>
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
                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "createdAt", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "updatedAt", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                <td>";
        // line 30
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 30)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <h3>Modifier le film</h3>
    <!--On envoie les données de modification -->
    <form action=\"/films/update?id=";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "&verif=true\" method=\"POST\">
            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Titre</label>
                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Année</label>
                <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 44), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Type</label>
                <input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 48), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Réalisateur</label>
                <input type=\"text\" class=\"form-control\" id=\"director\" name=\"director\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 52), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
                <textarea class=\"form-control\" id=\"synopsis\" name=\"synopsis\" required>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 56), "html", null, true);
        yield "</textarea>
            </div>
            <div class=\"mb-3\">
                <label for=\"created_at\" class=\"form-label\">Date de création</label>
                <input type=\"text\" class=\"form-control\" id=\"created_at\" name=\"created_at\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "createdAt", [], "any", false, false, false, 60), "Y-m-d H:i:s"), "html", null, true);
        yield "\" readonly>
            </div>
            <div class=\"mb-3\">
                <label for=\"deleted_at\" class=\"form-label\">Date de suppression</label>
                <input type=\"text\" class=\"form-control\" id=\"deleted_at\" name=\"deleted_at\" value=\"";
        // line 64
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 64)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deletedAt", [], "any", false, false, false, 64), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour le film</button>
        </form>

    </main>
    
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/updateFilm.html.twig";
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
        return array (  175 => 64,  168 => 60,  161 => 56,  154 => 52,  147 => 48,  140 => 44,  133 => 40,  127 => 37,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Modification d'un film{% endblock %}

{% block content %}
    <p>Voulez-vous modifier ce film ?</p>
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

    <h3>Modifier le film</h3>
    <!--On envoie les données de modification -->
    <form action=\"/films/update?id={{ film.id }}&verif=true\" method=\"POST\">
            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Titre</label>
                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"{{ film.title }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Année</label>
                <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" value=\"{{ film.year }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Type</label>
                <input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" value=\"{{ film.type }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Réalisateur</label>
                <input type=\"text\" class=\"form-control\" id=\"director\" name=\"director\" value=\"{{ film.director }}\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
                <textarea class=\"form-control\" id=\"synopsis\" name=\"synopsis\" required>{{ film.synopsis }}</textarea>
            </div>
            <div class=\"mb-3\">
                <label for=\"created_at\" class=\"form-label\">Date de création</label>
                <input type=\"text\" class=\"form-control\" id=\"created_at\" name=\"created_at\" value=\"{{ film.createdAt|date('Y-m-d H:i:s') }}\" readonly>
            </div>
            <div class=\"mb-3\">
                <label for=\"deleted_at\" class=\"form-label\">Date de suppression</label>
                <input type=\"text\" class=\"form-control\" id=\"deleted_at\" name=\"deleted_at\" value=\"{{ film.deletedAt ? film.deletedAt|date('Y-m-d H:i:s') : '' }}\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour le film</button>
        </form>

    </main>
    
{% endblock %}", "film/updateFilm.html.twig", "/var/www/filmoteca/src/views/film/updateFilm.html.twig");
    }
}
