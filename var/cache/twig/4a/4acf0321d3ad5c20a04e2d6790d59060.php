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

/* film/createFilm.html.twig */
class __TwigTemplate_94d855b7ad14df65b8cc5af393fb4159 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/createFilm.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Création d'un film";
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
        <h1 class=\"mb-4 text-center\">Création d'un Film</h1>
        <form action=\"/films/create\" method=\"POST\" class=\"bg-light p-4 rounded shadow\">
            <div class=\"form-group mb-3\">
                <label for=\"title\" class=\"form-label\">Titre</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"Titre du film\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"year\" class=\"form-label\">Année</label>
                <input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" placeholder=\"Année de sortie\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"type\" class=\"form-label\">Type</label>
                <input type=\"text\" id=\"type\" name=\"type\" class=\"form-control\" placeholder=\"Genre du film\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"director\" class=\"form-label\">Réalisateur</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" placeholder=\"Nom du réalisateur\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
                <textarea id=\"synopsis\" name=\"synopsis\" class=\"form-control\" rows=\"3\" placeholder=\"Résumé du film\" required></textarea>
            </div>
            
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Ajouter un film</button>
            </div>
        </form>
    </div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/createFilm.html.twig";
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
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Création d'un film{% endblock %}

{% block content %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4 text-center\">Création d'un Film</h1>
        <form action=\"/films/create\" method=\"POST\" class=\"bg-light p-4 rounded shadow\">
            <div class=\"form-group mb-3\">
                <label for=\"title\" class=\"form-label\">Titre</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"Titre du film\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"year\" class=\"form-label\">Année</label>
                <input type=\"number\" id=\"year\" name=\"year\" class=\"form-control\" placeholder=\"Année de sortie\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"type\" class=\"form-label\">Type</label>
                <input type=\"text\" id=\"type\" name=\"type\" class=\"form-control\" placeholder=\"Genre du film\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"director\" class=\"form-label\">Réalisateur</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" placeholder=\"Nom du réalisateur\" required>
            </div>
            
            <div class=\"form-group mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
                <textarea id=\"synopsis\" name=\"synopsis\" class=\"form-control\" rows=\"3\" placeholder=\"Résumé du film\" required></textarea>
            </div>
            
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Ajouter un film</button>
            </div>
        </form>
    </div>

{% endblock %}
", "film/createFilm.html.twig", "/var/www/filmoteca/src/views/film/createFilm.html.twig");
    }
}
