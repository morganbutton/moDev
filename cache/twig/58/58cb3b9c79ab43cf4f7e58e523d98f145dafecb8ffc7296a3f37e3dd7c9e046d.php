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

/* post.html.twig */
class __TwigTemplate_d8950eab6f11b246bb835a7ee2692422667808c9ef3e20fba2c1a10601e81d03 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content_wrapper' => [$this, 'block_content_wrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "root_of_blog", null, null, true));
        // line 3
        $context["show_sidebar"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "show_sidebar", true));
        // line 4
        $context["show_pagination"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "show_pagination", true));
        // line 5
        $context["show_breadcrumbs"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "show_breadcrumbs", true));
        // line 6
        $context["subtitle"] = twig_include($this->env, $context, "partials/blog/date.html.twig");
        // line 7
        $context["icon_left"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/chevron-left.svg", "w-5"]);
        // line 8
        $context["icon_right"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/chevron-right.svg", "w-5"]);
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
            // line 11
            $context["subtitle"] = ((($context["subtitle"] ?? null) . " - ") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []));
        }
        // line 14
        $context["hero_tags"] = true;
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 18
            echo "    ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "post.html.twig", 18)->display($context);
            // line 19
            echo "  ";
        }
        // line 20
        echo "
  ";
        // line 21
        $this->loadTemplate("post.html.twig", "post.html.twig", 21, "628096716")->display($context);
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 62,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  56 => 1,  54 => 14,  51 => 11,  49 => 10,  47 => 8,  45 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog = theme_var('root_of_blog', null, null, true)|e %}
{% set show_sidebar = theme_var('show_sidebar', true)|e %}
{% set show_pagination = theme_var('show_pagination', true)|e %}
{% set show_breadcrumbs = theme_var('show_breadcrumbs', true)|e %}
{% set subtitle = include('partials/blog/date.html.twig')|raw %}
{% set icon_left = svg_icon('tabler/chevron-left.svg', 'w-5') %}
{% set icon_right = svg_icon('tabler/chevron-right.svg', 'w-5') %}

{% if page.header.author %}
  {% set subtitle = subtitle ~ ' - ' ~ page.header.author %}
{% endif %}

{% set hero_tags = true %}

{% block content_wrapper %}
  {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
    {% include 'partials/breadcrumbs.html.twig' %}
  {% endif %}

  {% embed 'partials/layout.html.twig' %}

    {% block items %}

      <article class=\"{{ prose_style }} max-w-none my-6\">
        {{ page.content|raw }}
      </article>

      <div class=\"flex-none flex-centered w-full p-6 mx-auto\">
        <div class=\"space-x-3 text-center\">
          {% if not page.isLast %}
            <a class=\"text-sm rounded-md border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 inline-block px-4 py-2\"
               href=\"{{ page.prevSibling.url }}\">{{ icon_left|raw }} {{ 'THEME_TYPHOON.BLOG.ITEM.PREV_POST'|t }}</a>
          {% endif %}

          {% if not page.isFirst %}
            <a class=\"text-sm rounded-md border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 inline-block px-4 py-2\"
               href=\"{{ page.nextSibling.url }}\">{{ 'THEME_TYPHOON.BLOG.ITEM.NEXT_POST'|t }} {{ icon_right|raw }}</a>
          {% endif %}
        </div>
      </div>

      {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
        <h4 class=\"text-xl font-bold mt-4\">Other Related Posts:</h4>
        <div class=\"flex flex-wrap -mx-4\">
          {% for related_path, score in related_pages|slice(0,2) %}
            {% set related = grav['pages'].get(related_path) %}
            {% if related %}
              {% include \"partials/post-item.html.twig\" with {page: related} %}
            {% endif %}
          {% endfor %}
        </div>
      {% endif %}

    {% endblock %}

    {% block sidebar %}
      {% include 'partials/sidebar.html.twig' %}
    {% endblock %}

  {% endembed %}

{% endblock %}
", "post.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_d8950eab6f11b246bb835a7ee2692422667808c9ef3e20fba2c1a10601e81d03___628096716 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'items' => [$this, 'block_items'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "post.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_items($context, array $blocks = [])
    {
        // line 24
        echo "
      <article class=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["prose_style"] ?? null), "html", null, true);
        echo " max-w-none my-6\">
        ";
        // line 26
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </article>

      <div class=\"flex-none flex-centered w-full p-6 mx-auto\">
        <div class=\"space-x-3 text-center\">
          ";
        // line 31
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 32
            echo "            <a class=\"text-sm rounded-md border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 inline-block px-4 py-2\"
               href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
            echo "\">";
            echo ($context["icon_left"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.BLOG.ITEM.PREV_POST"), "html", null, true);
            echo "</a>
          ";
        }
        // line 35
        echo "
          ";
        // line 36
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 37
            echo "            <a class=\"text-sm rounded-md border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 inline-block px-4 py-2\"
               href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_TYPHOON.BLOG.ITEM.NEXT_POST"), "html", null, true);
            echo " ";
            echo ($context["icon_right"] ?? null);
            echo "</a>
          ";
        }
        // line 40
        echo "        </div>
      </div>

      ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 44
            echo "        <h4 class=\"text-xl font-bold mt-4\">Other Related Posts:</h4>
        <div class=\"flex flex-wrap -mx-4\">
          ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["related_pages"] ?? null), 0, 2));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
                // line 47
                echo "            ";
                $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
                // line 48
                echo "            ";
                if (($context["related"] ?? null)) {
                    // line 49
                    echo "              ";
                    $this->loadTemplate("partials/post-item.html.twig", "post.html.twig", 49)->display(twig_array_merge($context, ["page" => ($context["related"] ?? null)]));
                    // line 50
                    echo "            ";
                }
                // line 51
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
      ";
        }
        // line 54
        echo "
    ";
    }

    // line 57
    public function block_sidebar($context, array $blocks = [])
    {
        // line 58
        echo "      ";
        $this->loadTemplate("partials/sidebar.html.twig", "post.html.twig", 58)->display($context);
        // line 59
        echo "    ";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 59,  316 => 58,  313 => 57,  308 => 54,  304 => 52,  290 => 51,  287 => 50,  284 => 49,  281 => 48,  278 => 47,  261 => 46,  257 => 44,  255 => 43,  250 => 40,  241 => 38,  238 => 37,  236 => 36,  233 => 35,  224 => 33,  221 => 32,  219 => 31,  211 => 26,  207 => 25,  204 => 24,  201 => 23,  191 => 21,  78 => 62,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  56 => 1,  54 => 14,  51 => 11,  49 => 10,  47 => 8,  45 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog = theme_var('root_of_blog', null, null, true)|e %}
{% set show_sidebar = theme_var('show_sidebar', true)|e %}
{% set show_pagination = theme_var('show_pagination', true)|e %}
{% set show_breadcrumbs = theme_var('show_breadcrumbs', true)|e %}
{% set subtitle = include('partials/blog/date.html.twig')|raw %}
{% set icon_left = svg_icon('tabler/chevron-left.svg', 'w-5') %}
{% set icon_right = svg_icon('tabler/chevron-right.svg', 'w-5') %}

{% if page.header.author %}
  {% set subtitle = subtitle ~ ' - ' ~ page.header.author %}
{% endif %}

{% set hero_tags = true %}

{% block content_wrapper %}
  {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
    {% include 'partials/breadcrumbs.html.twig' %}
  {% endif %}

  {% embed 'partials/layout.html.twig' %}

    {% block items %}

      <article class=\"{{ prose_style }} max-w-none my-6\">
        {{ page.content|raw }}
      </article>

      <div class=\"flex-none flex-centered w-full p-6 mx-auto\">
        <div class=\"space-x-3 text-center\">
          {% if not page.isLast %}
            <a class=\"text-sm rounded-md border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 inline-block px-4 py-2\"
               href=\"{{ page.prevSibling.url }}\">{{ icon_left|raw }} {{ 'THEME_TYPHOON.BLOG.ITEM.PREV_POST'|t }}</a>
          {% endif %}

          {% if not page.isFirst %}
            <a class=\"text-sm rounded-md border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 inline-block px-4 py-2\"
               href=\"{{ page.nextSibling.url }}\">{{ 'THEME_TYPHOON.BLOG.ITEM.NEXT_POST'|t }} {{ icon_right|raw }}</a>
          {% endif %}
        </div>
      </div>

      {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
        <h4 class=\"text-xl font-bold mt-4\">Other Related Posts:</h4>
        <div class=\"flex flex-wrap -mx-4\">
          {% for related_path, score in related_pages|slice(0,2) %}
            {% set related = grav['pages'].get(related_path) %}
            {% if related %}
              {% include \"partials/post-item.html.twig\" with {page: related} %}
            {% endif %}
          {% endfor %}
        </div>
      {% endif %}

    {% endblock %}

    {% block sidebar %}
      {% include 'partials/sidebar.html.twig' %}
    {% endblock %}

  {% endembed %}

{% endblock %}
", "post.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\post.html.twig");
    }
}
