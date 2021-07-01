<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/post-item.html.twig */
class __TwigTemplate_45c7ff1b96a4b2ff7da7432489ac78aff6fc61589982ff988cfdfc2a986dd559 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["post_image"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero", []), "image", []), [], "array"), "url", []), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []));
        // line 2
        $context["link"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), $this->getAttribute(($context["page"] ?? null), "url", []));
        // line 3
        echo "
<article class=\"w-full sm:w-1/2 ";
        // line 4
        echo ((($context["show_sidebar"] ?? null)) ? ("") : ("md:w-1/3"));
        echo " px-4 my-4\">
  <div class=\"blog-item flex flex-col items-stretch bg-white dark:bg-gray-700 h-full flex flex-col shadow-lg rounded-md overflow-hidden\">
    ";
        // line 6
        if (($context["post_image"] ?? null)) {
            // line 7
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["link"] ?? null)), "html", null, true);
            echo "\" class=\"\">
        <img class=\"block bg-cover bg-center w-full h-40 object-cover\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["post_image"] ?? null), "html", null, true);
            echo "\"
             alt=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "\"/>
      </a>
    ";
        }
        // line 12
        echo "    <div class=\" max-w-none flex-1 p-4\">
      <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["prose_style"] ?? null), "html", null, true);
        echo "\">
      ";
        // line 14
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/post-item.html.twig", 14)->display($context);
        // line 15
        echo "      </div>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["link"] ?? null)), "html", null, true);
        echo "\" class=\"transition\">
        <h3 class=\"text-xl mt-6 mb-4 font-semibold text-gray-900 hover:text-black dark:text-gray-100 dark:hover:text-white\">
          ";
        // line 18
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) ? ("»") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []));
        echo "
        </h3>
      </a>
      ";
        // line 21
        $context["summary_size"] = ((($context["bg_image"] ?? null)) ? (Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "summary", []), 170, true)) : ($this->getAttribute(($context["page"] ?? null), "summary", [])));
        // line 22
        echo "      <div class=\"";
        echo twig_escape_filter($this->env, ($context["prose_style"] ?? null), "html", null, true);
        echo " text-base leading-normal\">";
        echo ($context["summary_size"] ?? null);
        echo "</div>
    </div>
    <div class=\"p-4 -mt-4 text-description text-sm text-gray-500\">
      ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", [])), "html", null, true);
        echo "
      ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
            // line 27
            echo "        - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "html", null, true);
            echo "
      ";
        }
        // line 29
        echo "    </div>

  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  101 => 27,  99 => 26,  95 => 25,  86 => 22,  84 => 21,  76 => 18,  71 => 16,  68 => 15,  66 => 14,  62 => 13,  59 => 12,  53 => 9,  49 => 8,  44 => 7,  42 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set post_image = page.media.images[page.header.hero.image].url|defined(page.media.images|first.url) %}
{% set link = page.header.link|defined(page.url) %}

<article class=\"w-full sm:w-1/2 {{ show_sidebar ? '' : 'md:w-1/3' }} px-4 my-4\">
  <div class=\"blog-item flex flex-col items-stretch bg-white dark:bg-gray-700 h-full flex flex-col shadow-lg rounded-md overflow-hidden\">
    {% if post_image %}
      <a href=\"{{ url(link) }}\" class=\"\">
        <img class=\"block bg-cover bg-center w-full h-40 object-cover\" src=\"{{ post_image }}\"
             alt=\"{{ page.header.title }}\"/>
      </a>
    {% endif %}
    <div class=\" max-w-none flex-1 p-4\">
      <div class=\"{{ prose_style }}\">
      {% include 'partials/blog/taxonomy.html.twig' %}
      </div>
      <a href=\"{{ url(link) }}\" class=\"transition\">
        <h3 class=\"text-xl mt-6 mb-4 font-semibold text-gray-900 hover:text-black dark:text-gray-100 dark:hover:text-white\">
          {{ page.header.link ? '»' }} {{ page.header.title|e }}
        </h3>
      </a>
      {% set summary_size = bg_image ?  page.summary|truncate(170, true) : page.summary %}
      <div class=\"{{ prose_style }} text-base leading-normal\">{{ summary_size|raw }}</div>
    </div>
    <div class=\"p-4 -mt-4 text-description text-sm text-gray-500\">
      {{ page.date|date(system.pages.dateformat.short) }}
      {% if page.header.author %}
        - {{ page.header.author }}
      {% endif %}
    </div>

  </div>
</article>
", "partials/post-item.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\partials\\post-item.html.twig");
    }
}
