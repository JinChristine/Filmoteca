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

/* homepage.html.twig */
class __TwigTemplate_37910843755b3f2ff0f18f379a03deba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Bienvenue sur Filmoteca";
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
        yield "<div class=\"container my-5\">
    <!-- Hero Section -->
     <section class=\"text-center mb-5\">
        <h1 class=\"principal-title display-4 fw-bold text-primary \">
            <img src='/image/R.png' alt='image' width=\"40\" height=\"40\">
             Bienvenue sur Filmoteca
        </h1>
        <p class=\"lead text-muted\">
            Gérez votre collection de films avec une interface simple et intuitive.
        </p>
        <a href=\"/films/list\" class=\"btn btn-info btn-lg\">
            <i class=\"fas fa-film\"></i> Voir les films
        </a>
    </section>

    <!-- Features Section -->
    <section class=\"row text-center mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-eye\"></i> Lecture d'un film
                    </h5>
                    <a href=\"/films/read\" class=\"btn btn-outline-success\">
                        <i class=\"fas fa-arrow-right\"></i> Accéder un film
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-plus\"></i> Ajouter un film
                    </h5>
                    <a href=\"/films/create\" class=\"btn btn-outline-warning\">
                        <i class=\"fas fa-plus-circle\"></i> Ajouter un nouveau film
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-cogs\"></i> Organisation intuitive
                    </h5>
                    <a href=\"/films/list\" class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-cog\"></i> Gérer les films
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "homepage.html.twig";
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
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur Filmoteca{% endblock %}

{% block content %}
<div class=\"container my-5\">
    <!-- Hero Section -->
     <section class=\"text-center mb-5\">
        <h1 class=\"principal-title display-4 fw-bold text-primary \">
            <img src='/image/R.png' alt='image' width=\"40\" height=\"40\">
             Bienvenue sur Filmoteca
        </h1>
        <p class=\"lead text-muted\">
            Gérez votre collection de films avec une interface simple et intuitive.
        </p>
        <a href=\"/films/list\" class=\"btn btn-info btn-lg\">
            <i class=\"fas fa-film\"></i> Voir les films
        </a>
    </section>

    <!-- Features Section -->
    <section class=\"row text-center mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-eye\"></i> Lecture d'un film
                    </h5>
                    <a href=\"/films/read\" class=\"btn btn-outline-success\">
                        <i class=\"fas fa-arrow-right\"></i> Accéder un film
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-plus\"></i> Ajouter un film
                    </h5>
                    <a href=\"/films/create\" class=\"btn btn-outline-warning\">
                        <i class=\"fas fa-plus-circle\"></i> Ajouter un nouveau film
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-cogs\"></i> Organisation intuitive
                    </h5>
                    <a href=\"/films/list\" class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-cog\"></i> Gérer les films
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
{% endblock %}
", "homepage.html.twig", "/var/www/filmoteca/src/views/homepage.html.twig");
    }
}
