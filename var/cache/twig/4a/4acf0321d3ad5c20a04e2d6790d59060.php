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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <form action=\"/film/create\" method=\"POST\">
        <label for=\"title\">Title</label> 
        <input type=\"text\" id=\"title\" name ='title' required> 
        <label for=\"year\" >Year: </label> 
        <input type=\"number\" id=\"year\" name =\"year\" required> 
        <label for=\"type\">Type: </label> 
        <input type=\"text\" id=\"type\" name = \"type\" required> 
        <label for=\"director\">Director: </label> 
        <input type=\"text\" id=\"director\" name = \"director\" required> 
        <label for=\"synopsis\">Synopsis: </label> 
        <input type=\"text\" id=\"synopsis\" name=\"synopsis\" required> 

        <button type=\"Submit\">Ajouter un film</button>
    </form>

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
        return array (  70 => 5,  63 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Création d'un film{% endblock %}
{% block content %}
    <form action=\"/film/create\" method=\"POST\">
        <label for=\"title\">Title</label> 
        <input type=\"text\" id=\"title\" name ='title' required> 
        <label for=\"year\" >Year: </label> 
        <input type=\"number\" id=\"year\" name =\"year\" required> 
        <label for=\"type\">Type: </label> 
        <input type=\"text\" id=\"type\" name = \"type\" required> 
        <label for=\"director\">Director: </label> 
        <input type=\"text\" id=\"director\" name = \"director\" required> 
        <label for=\"synopsis\">Synopsis: </label> 
        <input type=\"text\" id=\"synopsis\" name=\"synopsis\" required> 

        <button type=\"Submit\">Ajouter un film</button>
    </form>

{% endblock %}

        
", "film/createFilm.html.twig", "/var/www/filmoteca/src/views/film/createFilm.html.twig");
    }
}
