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

/* partials/sidebar.html.twig */
class __TwigTemplate_41405897848de9b38b3cccffb8b7fbfd6e75baccb9cf7e1ddaa8a5d58c623d7c extends \Twig\Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        $context["embed_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/modules/sidebar"], "method");
        // line 4
        echo "
<aside class=\"col-count-2 md:col-count-1 ";
        // line 5
        echo twig_escape_filter($this->env, ($context["prose_style"] ?? null), "html", null, true);
        echo " max-w-none\">
  ";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 7
            echo "    <div class=\"sidebar-content\">
      ";
            // line 8
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 8)->display(twig_array_merge($context, ["sidebar" => true]));
            // line 9
            echo "    </div>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 12
            echo "    <div class=\"sidebar-content\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.SIDEBAR.RANDOM_ARTICLE.HEADLINE"), "html", null, true);
            echo "</h4>
      <a class=\"btn px-2\"
         href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/random\">";
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/dice.svg", "w-5 inline-block align-middle"]);
            echo " <span
                class=\"align-middle\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY"), "html", null, true);
            echo "</span></a>
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        if (($context["embed_page"] ?? null)) {
            // line 21
            echo "    <div class=\"sidebar-content\">
      ";
            // line 22
            echo $this->getAttribute(($context["embed_page"] ?? null), "content", []);
            echo "
    </div>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 27
            echo "    <div class=\"sidebar-content\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.SIDEBAR.POPULAR_TAGS.HEADLINE"), "html", null, true);
            echo "</h4>
      ";
            // line 29
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 29)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 30
            echo "    </div>
  ";
        }
        // line 32
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 33
            echo "    <div class=\"sidebar-content\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.SIDEBAR.ARCHIVES.HEADLINE"), "html", null, true);
            echo "</h4>
      ";
            // line 35
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 35)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 36
            echo "    </div>
  ";
        }
        // line 38
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 39
            echo "    <div class=\"sidebar-content syndicate\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.SIDEBAR.SYNDICATE.HEADLINE"), "html", null, true);
            echo "</h4>
      ";
            // line 41
            $context["rss_icon"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/rss.svg", "w-5 inline-block algin-middle"]);
            // line 42
            echo "      <a class=\"btn mb-4\" href=\"";
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\">";
            echo ($context["rss_icon"] ?? null);
            echo " <span class=\"ml-1 align-middle\">Atom</span></a>
      <a class=\"btn mb-4\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\">";
            echo ($context["rss_icon"] ?? null);
            echo " <span class=\"ml-1 align-middle\">RSS</span></a>
      ";
            // line 44
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enable_json_feed", [])) {
                echo "<a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
                echo ".json\"><i
                class=\"fa fa-rss-square\"></i> JSON</a>";
            }
            // line 46
            echo "    </div>
  ";
        }
        // line 48
        echo "</aside>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  157 => 46,  150 => 44,  144 => 43,  137 => 42,  135 => 41,  131 => 40,  128 => 39,  125 => 38,  121 => 36,  119 => 35,  115 => 34,  112 => 33,  109 => 32,  105 => 30,  103 => 29,  99 => 28,  96 => 27,  94 => 26,  91 => 25,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  71 => 16,  65 => 15,  60 => 13,  57 => 12,  54 => 11,  50 => 9,  48 => 8,  45 => 7,  43 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}
{% set embed_page = page.find('/modules/sidebar') %}

<aside class=\"col-count-2 md:col-count-1 {{ prose_style }} max-w-none\">
  {% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
      {% include 'partials/simplesearch_searchbox.html.twig' with { sidebar: true } %}
    </div>
  {% endif %}
  {% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">{{ 'THEME_TYPHOON.SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
      <a class=\"btn px-2\"
         href=\"{{ base_url }}/random\">{{ svg_icon('tabler/dice.svg', 'w-5 inline-block align-middle')|raw }} <span
                class=\"align-middle\">{{ 'THEME_TYPHOON.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</span></a>
    </div>
  {% endif %}

  {% if embed_page %}
    <div class=\"sidebar-content\">
      {{ embed_page.content|raw }}
    </div>
  {% endif %}

  {% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">{{ 'THEME_TYPHOON.SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
      {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
    </div>
  {% endif %}
  {% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">{{ 'THEME_TYPHOON.SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
      {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
    </div>
  {% endif %}
  {% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content syndicate\">
      <h4 class=\"text-xl font-bold mt-2 mb-1\">{{ 'THEME_TYPHOON.SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
      {% set rss_icon = svg_icon('tabler/rss.svg', 'w-5 inline-block algin-middle') %}
      <a class=\"btn mb-4\" href=\"{{ feed_url }}.atom\">{{ rss_icon|raw }} <span class=\"ml-1 align-middle\">Atom</span></a>
      <a class=\"btn mb-4\" href=\"{{ feed_url }}.rss\">{{ rss_icon|raw }} <span class=\"ml-1 align-middle\">RSS</span></a>
      {% if config.plugins.feed.enable_json_feed %}<a class=\"btn\" href=\"{{ feed_url }}.json\"><i
                class=\"fa fa-rss-square\"></i> JSON</a>{% endif %}
    </div>
  {% endif %}
</aside>
", "partials/sidebar.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\partials\\sidebar.html.twig");
    }
}
