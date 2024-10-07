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

/* themes/custom/calibrate/templates/page.html.twig */
class __TwigTemplate_a91d25783e21d0bb72348c0c23329aa8 extends Template
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
        // line 1
        yield from         $this->loadTemplate("@calibrate/header.html.twig", "themes/custom/calibrate/templates/page.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"container\">
  ";
        // line 4
        yield from         $this->loadTemplate("@calibrate/page-menu.html.twig", "themes/custom/calibrate/templates/page.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
  ";
        // line 6
        yield from         $this->loadTemplate("@calibrate/page-header.html.twig", "themes/custom/calibrate/templates/page.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
  <main>
    <div class=\"content\">
      <div class=\"facets\">
        ";
        // line 12
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("news_text"), "html", null, true);
        yield "
      </div>

      ";
        // line 15
        if (($context["is_front"] ?? null)) {
            // line 16
            yield "        ";
            yield from             $this->loadTemplate("@calibrate/page-home.html.twig", "themes/custom/calibrate/templates/page.html.twig", 16)->unwrap()->yield($context);
            // line 17
            yield "      ";
        } else {
            // line 18
            yield "        ";
            yield from             $this->loadTemplate("@calibrate/page-back.html.twig", "themes/custom/calibrate/templates/page.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "
        ";
            // line 20
            yield from             $this->loadTemplate("@calibrate/page-title.html.twig", "themes/custom/calibrate/templates/page.html.twig", 20)->unwrap()->yield($context);
            // line 21
            yield "
        ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            yield "

        ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 24, $this->source), "html", null, true);
            yield "
      
      ";
        }
        // line 27
        yield "    </div>
  </main>
</div>

";
        // line 31
        yield from         $this->loadTemplate("@calibrate/page-footer.html.twig", "themes/custom/calibrate/templates/page.html.twig", 31)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_front", "page", "pager"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/calibrate/templates/page.html.twig";
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
        return array (  106 => 31,  100 => 27,  94 => 24,  89 => 22,  86 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  70 => 15,  63 => 12,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/calibrate/templates/page.html.twig", "/opt/drupal/calibrate/web/themes/custom/calibrate/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 15);
        static $filters = array("escape" => 12);
        static $functions = array("drupal_block" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['drupal_block'],
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
