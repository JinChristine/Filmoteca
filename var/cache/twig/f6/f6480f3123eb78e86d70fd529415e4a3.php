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

/* base.html.twig */
class __TwigTemplate_468508646c1c5a56cc188544f5a88786 extends Template
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
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 13
        yield "</head>
<body>
   <header class=\"bg-dark text-white py-3\">
        <div class=\"container\">
            ";
        // line 17
        yield from $this->loadTemplate("fragments/navigation.html.twig", "base.html.twig", 17)->unwrap()->yield($context);
        // line 18
        yield "        </div>
    </header>
    
    <main class=\"container my-4\">
        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 23
        yield "    </main>

    ";
        // line 25
        yield from $this->loadTemplate("fragments/footer.html.twig", "base.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "    
    <script src=\"https://kit.fontawesome.com/1497a6bbb1.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 30
        yield "
</body>
</html>
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Filmoteca - ";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Inclusion de Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  131 => 29,  121 => 22,  101 => 7,  97 => 5,  90 => 4,  82 => 30,  80 => 29,  75 => 26,  73 => 25,  69 => 23,  67 => 22,  61 => 18,  59 => 17,  53 => 13,  51 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    {% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Filmoteca - {% block title %}{% endblock %}</title>
    
    <!-- Inclusion de Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>
   <header class=\"bg-dark text-white py-3\">
        <div class=\"container\">
            {% include 'fragments/navigation.html.twig' %}
        </div>
    </header>
    
    <main class=\"container my-4\">
        {% block content %}{% endblock %}
    </main>

    {% include 'fragments/footer.html.twig' %}
    
    <script src=\"https://kit.fontawesome.com/1497a6bbb1.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    {% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "/var/www/filmoteca/src/views/base.html.twig");
    }
}
