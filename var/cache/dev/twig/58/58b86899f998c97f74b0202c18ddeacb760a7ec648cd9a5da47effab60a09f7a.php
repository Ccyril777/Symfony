<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* wild/home.html.twig */
class __TwigTemplate_fb7143871f717913090432d3930a9cb54978e9cd9ac6c408abe3753677dcde9b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wild/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Cyril Canoine\">
    <meta name=\"description\" content=\"First page for a Wild-Séries\">
    <title>Wild Séries</title>
</head>

<body>
    
    <section>
        <h2 class=\"fellow\">Hello Wilders !<br><span></h2>
    </section>
    <section class=\"mushroom\">
        <article class=\"photo\"><a href=\"\"></a>Séries</article>
        <article class=\"photo\"><a href=\"\"></a>Films</article>
        <article class=\"photo\"><a href=\"#\"></a>Suggestion du jour</article>
    </section>

    <hr>

    <footer>
        <section class=\"ledger\">
            <a class=\"alpha\" href=\"#\">A propos</a>
            <a class=\"alpha\" href=\"\">Séries</a>
            <a class=\"alpha\" href=\"\">Films</a>
        </section>
        <section class=\"yellow\">
            <a class=\"alpha\" href=\"#\">F.A.Q.</a>
            <a class=\"alpha\" href=\"#\">Copyrights</a>
            <a class=\"alpha\" href=\"#\">Mentions Légales</a>
        </section>
        <section class=\"Sauron\">
            <a class=\"omega\" href=\"#\">Wild Séries</a>
            <a class=\"omega\" href=\"#\">Suivez-nous sur Twitter</a>
        </section>
    </footer>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wild/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\"  %}
{% block body %}
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Cyril Canoine\">
    <meta name=\"description\" content=\"First page for a Wild-Séries\">
    <title>Wild Séries</title>
</head>

<body>
    
    <section>
        <h2 class=\"fellow\">Hello Wilders !<br><span></h2>
    </section>
    <section class=\"mushroom\">
        <article class=\"photo\"><a href=\"\"></a>Séries</article>
        <article class=\"photo\"><a href=\"\"></a>Films</article>
        <article class=\"photo\"><a href=\"#\"></a>Suggestion du jour</article>
    </section>

    <hr>

    <footer>
        <section class=\"ledger\">
            <a class=\"alpha\" href=\"#\">A propos</a>
            <a class=\"alpha\" href=\"\">Séries</a>
            <a class=\"alpha\" href=\"\">Films</a>
        </section>
        <section class=\"yellow\">
            <a class=\"alpha\" href=\"#\">F.A.Q.</a>
            <a class=\"alpha\" href=\"#\">Copyrights</a>
            <a class=\"alpha\" href=\"#\">Mentions Légales</a>
        </section>
        <section class=\"Sauron\">
            <a class=\"omega\" href=\"#\">Wild Séries</a>
            <a class=\"omega\" href=\"#\">Suivez-nous sur Twitter</a>
        </section>
    </footer>
</body>

</html>
{% endblock %}
", "wild/home.html.twig", "/home/salazhar/Documents/Symfony/Quête Symfony/wild-series/templates/wild/home.html.twig");
    }
}
