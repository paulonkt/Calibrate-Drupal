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

/* themes/custom/calibrate/templates/node--articles.html.twig */
class __TwigTemplate_332c3e3c11a03f2e3fa1928f9a34744f extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<article class=\"node-articles\">
  <div class=\"content-wrapper\">
    <div class=\"image\">
      ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_image", [], "any", false, false, true, 5)) {
            // line 6
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_image", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 8
        yield "    </div>
    <div class=\"right\">
\t\t  <div class=\"text\">
        ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_text", [], "any", false, false, true, 11)) {
            // line 12
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_text", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 14
        yield "      </div>
      <div class=\"text\">
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_tags", [], "any", false, false, true, 16)) {
            // line 17
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_tags", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 19
        yield "      </div>
      <div class=\"text\">
        ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_country", [], "any", false, false, true, 21)) {
            // line 22
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_article_country", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 24
        yield "      </div>
    </div>
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/calibrate/templates/node--articles.html.twig";
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
        return array (  94 => 24,  88 => 22,  86 => 21,  82 => 19,  76 => 17,  74 => 16,  70 => 14,  64 => 12,  62 => 11,  57 => 8,  51 => 6,  49 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/calibrate/templates/node--articles.html.twig", "/opt/drupal/calibrate/web/themes/custom/calibrate/templates/node--articles.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
